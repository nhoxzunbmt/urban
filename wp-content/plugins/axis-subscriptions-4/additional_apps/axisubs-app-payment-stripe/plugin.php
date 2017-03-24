<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Stripe
 * Plugin URI:        http://flycart.org/
 * Description:       Stripe payment plugin for Axis Subscription.
 * Version:           1.0.0
 * Author:            Ashlin
 * Author URI:        http://flycart.org/
 * Text Domain:       axisubs-app-payment-stripe
 * License:           MIT
 * Update Service:    none
 * Plugin ID:         axisubs-app-payment-stripe
 */

use Events\Event;
use AxisubsAppStripe\Controllers\Admin\AxisubsAppStripe;
use Herbert\Framework\Http;

if(!class_exists('GetAxisSubscriptionsPlugin')) {
    class GetAxisSubscriptionsPlugin
    {
        private static $_instance = null;

        /**
         * Get the single instance
         */
        public static function instance() {
            if ( is_null( self::$_instance ) ) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        /**
         * Constructor
         */
        private function __construct() {

        }

        public function getAxisubPlugin(){
            require_once ABSPATH . 'wp-admin/includes/plugin.php';
            $plugins = get_plugins();
            $axisubsApps = array();
            foreach($plugins as $key => $value){
                if($value['TextDomain'] == 'axis-subscriptions'){
                    $names = explode('/', $key);
                    $axisubsAppsNames = $names[0];
                    $value['pluginPath'] = $key;
                    $value['pluginFolder'] = $axisubsAppsNames;
                    $value['pluginImage'] = plugins_url($value['pluginFolder']).'/resources/assets/images/logo.png';
                    if(is_plugin_active($key)){
                        $value['active'] = true;
                    } else {
                        $value['active'] = false;
                    }
                    $axisubsApps = $value;
                    break;
                }
            }

            return $axisubsApps;
        }
    }

    $pluginObject = GetAxisSubscriptionsPlugin::instance();
    $axisubPlugin = $pluginObject->getAxisubPlugin();
}

if(empty($axisubPlugin)){
    return false;
}

if(!file_exists(WP_PLUGIN_DIR.'/'.$axisubPlugin['pluginPath'])){
    return false;
}
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active($axisubPlugin['pluginPath']) ) {
    return false;
}
/**
 * Include vendor
 * */
require_once( WP_PLUGIN_DIR.'/'.$axisubPlugin['pluginFolder'].'/vendor/autoload.php');
require_once( WP_PLUGIN_DIR.'/'.$axisubPlugin['pluginFolder'].'/vendor/getherbert/framework/bootstrap/autoload.php');

require_once __DIR__ . '/vendor/autoload.php';

require_once( WP_PLUGIN_DIR.'/'.dirname( plugin_basename(__FILE__) ).'/app/Controllers/Controller.php');
require_once( WP_PLUGIN_DIR.'/'.dirname( plugin_basename(__FILE__) ).'/app/Models/Admin/AxisubsAppStripe.php');
require_once( WP_PLUGIN_DIR.'/'.dirname( plugin_basename(__FILE__) ).'/app/Controllers/Admin/AxisubsAppStripe.php');

if (!defined('AXISUBS_APP_STRIPE_PLUGIN_PATH')) {
    define( 'AXISUBS_APP_STRIPE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
Event::listen('axisubs-app-payment-stripe_ajax', array('AxisubsAppStripePlugin', 'runAppTask'), '1');
Event::listen('axisubs-app-payment-stripe_loadView', array('AxisubsAppStripePlugin', 'loadFormView'), '1');
Event::listen('axisubs-app-payment-stripe_appTask', array('AxisubsAppStripePlugin', 'runAppTask'), '1');
Event::listen('axisubs-app-payment-stripe_paymentOptionRadio', array('AxisubsAppStripePlugin', 'paymentRadioButton'), '1');
Event::listen('axisubs-app-payment-stripe_paymentForm', array('AxisubsAppStripePlugin', 'loadPaymentForm'), '1');
Event::listen('axisubs-app-payment-stripe_paymentTask', array('AxisubsAppStripePlugin', 'processPaymentTasks'), '1');
Event::listen('axisubs-app-acceptCoupon', array('AxisubsAppStripePlugin', 'checkToAcceptCoupon'), '1');
Event::listen('axisubs-app-payment-stripe_hasFunction', array('AxisubsAppStripePlugin', 'hasHook'), '1');
Event::listen('axisubs-app-payment-stripe_loadButtonInBackendPlanList', array('AxisubsAppStripePlugin', 'loadButtonInBackendPlanList'), '10');
Event::listen('axisubs-app-payment-stripe_loadAdditionalDataInBackendPlanEdit', array('AxisubsAppStripePlugin', 'loadOnPlanEdit'), '10');
Event::listen('axisubs-app-payment-stripe_cancelSubscription', array('AxisubsAppStripePlugin', 'cancelSubscription'), '1');
Event::listen('axisubs-app-payment-stripe_preProcessSubscriptionView', array('AxisubsAppStripePlugin', 'preProcessSubscriptionView'), '1');
Event::listen('axisubs-app-payment-stripe_afterSavePlan', array('AxisubsAppStripePlugin', 'afterSavePlan'), '1');
Event::listen('axisubs-app-payment-stripe_beforePlanDelete', array('AxisubsAppStripePlugin', 'beforePlanDelete'), '1');


class AxisubsAppStripePlugin
{
    protected static $hooks = array('loadView',
        'loadButtonInBackendPlanList',
        'loadAdditionalDataInBackendPlanEdit',
        'paymentOptionRadio',
        'cancelSubscription',
        'afterSavePlan',
        'beforePlanDelete');

    /**
     * To check function exist
     * */
    public static function hasHook($functionName){
        if(in_array($functionName, AxisubsAppStripePlugin::$hooks)){
            return true;
        } else {
            return false;
        }
    }

    /**
     * On plan edit
     * */
    public static function loadOnPlanEdit($args){
        $item = $args[0];
        $data = $args[1];
        if($item) {
            $planPrefix = $item->ID.'_'.$item->post_type.'_';
            $stripeSlug = $planPrefix.'slug_stripe';
            if(isset($item['meta'][$stripeSlug]) && $item['meta'][$stripeSlug] != ''){
                return AxisubsAppStripe::loadScriptOnPlanEdit($item, $data, 1);
            }
        }
        return AxisubsAppStripe::loadScriptOnPlanEdit($item, $data);
    }

    /**
     * To check function exist
     * */
    public static function loadButtonInBackendPlanList($args){
        $items = $args[0];
        $data = $args[1];
        return AxisubsAppStripe::loadButtonToSynchronizePlans($items, $data);
    }

    /**
     * For load Form/View form
     * */
    public static function loadFormView(){
        AxisubsAppStripe::loadAppView();
    }

    /**
     * Run app task
     * */
    public static function runAppTask(){
        $http = Http::capture();
        $paypalObject = new AxisubsAppStripe();
        $paypalObject->execute($http);
    }

    /**
     * Load payment radio button
     * */
    public static function paymentRadioButton($item){
        $planPrefix = $item->ID.'_'.$item->post_type.'_';
        $stripeSlug = isset($item->meta[$planPrefix.'slug_stripe'])? $item->meta[$planPrefix.'slug_stripe'] : '';
        $planType = $item->meta[$planPrefix.'type'];
        if(($planType == 'recurring' || $planType == 'recurring_with_trial') && $stripeSlug == ''){
            return '';
        } else {
            return AxisubsAppStripe::paymentRadioButtonHTML();
        }
    }

    /**
     * Load payment Form
     * */
    public static function loadPaymentForm($args){
        $subscription = $args[0];
        $plans = $args[1];
        $paypalObject = new AxisubsAppStripe();
        return $paypalObject->loadPaymentForm($subscription, $plans);
    }

    /**
     * Run payment tasks
     * */
    public static function processPaymentTasks($args){
        $paypalObject = new AxisubsAppStripe();
        return $paypalObject->processPayment();
    }

    /**
     * check to accept coupon or not
     * */
    public static function checkToAcceptCoupon($args){
        $accept = &$args[0];
        $plan = $args[1];
        $http = Http::capture();
        if($http->get('payment', '') == 'axisubs-app-payment-stripe'){
            if(isset($plan->ID)){
                $nonAcceptType = array('recurring', 'recurring_with_trial');
                $planPrefix = $plan->ID.'_'.$plan->post_type.'_';
                $planMeta = $plan->meta;
                if(in_array($planMeta[$planPrefix.'type'], $nonAcceptType)){
                    $accept = 0;
                }
            }
        }
    }

    /**
     * Cancel subscription
     * */
    public static function cancelSubscription($subscription){
        $controllerObj = new AxisubsAppStripe();
        $model = $controllerObj->getModel();
        $model->cancelStripeSubscription($subscription);

    }

    /**
     * Cancel subscription
     * */
    public static function preProcessSubscriptionView($args){
        $subscription = $args[0];
        $data = &$args[1];
        $itemPrefix = $subscription->ID.'_'.$subscription->post_type.'_';
        $payment_processor = $subscription->meta[$itemPrefix.'payment_processor'];
        if($payment_processor == 'axisubs-app-payment-stripe'){
            $data['allow_cancel']  = true;
        }
    }

    /**
     * To save plan in stripe
     * */
    public static function afterSavePlan($args){
        $plan = $args[0];
        $controllerObj = new AxisubsAppStripe();
        $model = $controllerObj->getModel();
        $model->addPlanInStripe($plan);
    }

    /**
     * To save plan in stripe
     * */
    public static function beforePlanDelete($args){
        $planID = $args[0];
        $delete = &$args[1];
        $controllerObj = new AxisubsAppStripe();
        $model = $controllerObj->getModel();
        $model->removePlanFromStripe($planID, $delete);
    }
}

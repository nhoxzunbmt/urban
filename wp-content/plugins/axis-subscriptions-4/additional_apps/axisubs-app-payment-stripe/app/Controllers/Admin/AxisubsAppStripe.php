<?php
/**
 * Created by PhpStorm.
 * User: aron-destiny
 * Date: 12/7/16
 * Time: 12:52 PM
 */
namespace AxisubsAppStripe\Controllers\Admin;

use AxisubsAppStripe\Controllers\Controller;
use AxisubsAppStripe\Models\Admin\AxisubsAppStripe as AxisubsAppStripeModel;
use Herbert\Framework\Http;
use Herbert\Framework\Notifier;
use Axisubs\Helper\Common;
use Axisubs\Models\Admin\Config;
use Axisubs\Models\Site\Plans;

class AxisubsAppStripe extends Controller
{
    public $_controller = 'AxisubsAppStripe';
    public $_element = 'app_stripe';
    public $_folder = 'axisubs-app-payment-stripe';

    /**
     * Default App view
     * */
    public static function loadAppView(){
        $currentObject = new AxisubsAppStripe();
        $currentObject->index();
    }

    /**
     * Load payment radio button
     * */
    public static function paymentRadioButtonHTML(){
        $thisObj = new AxisubsAppStripe();
        $model = $thisObj->getModel();
        $html = '<div class="axisubs_payment_each_block">';
        $html .='<input type="radio" id="axisubs_payment_stripe" name="payment" value="axisubs-app-payment-stripe" />';
        $html .= '<label for="axisubs_payment_stripe">'.$model->getConfigData('title', 'Stripe').'</label>';
        $html .= '</div>';
        return $html;
    }

    /**
     * Load payment radio button
     * */
    public static function loadButtonToSynchronizePlans(){
        $site_url = get_site_url();
        $data = view('@AxisubsAppStripe/Admin/Plan/button.twig', compact('site_url'));
        if($data->getStatusCode() == '200'){
            return $data->getBody();
        } else {
            return "";
        }
    }

    /**
     * Load script on plan edit
     * */
    public static function loadScriptOnPlanEdit($item, $data, $stripe = 0){
        $site_url = get_site_url();
        $data = view('@AxisubsAppStripe/Admin/Plan/script.twig', compact('site_url', 'stripe'));
        if($data->getStatusCode() == '200'){
            return $data->getBody();
        } else {
            return "";
        }
    }


    /**
     * Default layout
     * */
    public function index(){
        $pagetitle = "Stripe Configuration";
        $model = $this->getModel();
        $item = $model->getConfig();
        $data = view('@AxisubsAppStripe/Admin/Form/edit.twig', compact('pagetitle', 'item'));
        if($data->getStatusCode() == '200'){
            echo $data->getBody();
        } else {
            echo "Something goes wrong";
        }
    }

    /**
     * Import Plans from Stripe
     * */
    public function importPlansFromStripe(){
        $model = $this->getModel();
        $result = $model->importPlansFromStripe();
        $status = 1;
        foreach ($result as $value){
            if(!$value){
                $status = 0;
                break;
            }
        }
        if($status){
            $response['status'] = 200;
            $response['message'] = '<div class="updated"><p>Imported successfully. <b>Note: Add Role/Remove Role should be updated manually.</b></p></div>';
        } else {
            $response['status'] = 100;
            $response['message'] = '<div class="error"><p>Some plans are not imported please try again.</p></div>';
        }

        echo json_encode($response);
    }

    public function getPostURL($sandbox){
        $url = $sandbox ? 'www.sandbox.paypal.com' : 'www.paypal.com';
        $url = 'https://' . $url . '/cgi-bin/webscr';
        return $url;
    }

    public function loadPaymentForm($subscription, $plans){
        $settings = Config::getInstance();
        $subscriptionPrefix = $subscription->ID.'_'.$subscription->post_type.'_';
        $plansPrefix = $plans->ID.'_'.$plans->post_type.'_';
        $model = $this->getModel();

        $vars = new \stdClass();
        $vars->currency_code = $settings->getConfigData('currency', 'USD');
        $vars->orderpayment_amount = $subscription->meta[$subscriptionPrefix.'total_price'];
        $vars->orderpayment_type = $this->_element;
        $vars->display_name = $model->getConfigData('title');
        $vars->image = $model->getConfigData('image');
        $vars->post_url = '';
        $vars->return_url = get_site_url().'/?axisubs_plan=plans&task=paymentComplete&payment_type='.$this->_folder.'&apptask=display';

        $vars->first_name   = $subscription->meta[$subscriptionPrefix.'first_name'];
        $vars->last_name    = $subscription->meta[$subscriptionPrefix.'last_name'];
        $vars->email        = $subscription->meta[$subscriptionPrefix.'email'];
        $vars->address_1    = $subscription->meta[$subscriptionPrefix.'address_line1'];
        $vars->address_2    = $subscription->meta[$subscriptionPrefix.'address_line2'];
        $vars->city         = $subscription->meta[$subscriptionPrefix.'city'];
        $vars->country      = $subscription->meta[$subscriptionPrefix.'country'];
        $vars->region       = $subscription->meta[$subscriptionPrefix.'province'];
        $vars->postal_code  = $subscription->meta[$subscriptionPrefix.'pincode'];
        $vars->tax_type     = isset($subscription->meta[$subscriptionPrefix.'tax_type'])? $subscription->meta[$subscriptionPrefix.'tax_type'] : '';
        $vars->tax_total    = isset($subscription->meta[$subscriptionPrefix.'tax_total'])? $subscription->meta[$subscriptionPrefix.'tax_total'] : 0;
        $vars->total_excluding_tax = isset($subscription->meta[$subscriptionPrefix.'total_excluding_tax'])? $subscription->meta[$subscriptionPrefix.'total_excluding_tax'] : $subscription->meta[$subscriptionPrefix.'total_price'];

        $commonObj = new Common();
        $vars->invoice      = $commonObj->getInvoiceNumber($subscription->ID);
        $vars->total        = $subscription->meta[$subscriptionPrefix.'total_price']*100;
        $vars->plan         = $plans;
        $vars->subscription = $subscription;
        $keys = $model->getSecretKeys();
        $vars->publishable_key = $keys['publishable'];
        
        $model->processStripePayment($vars);

        $result = view('@AxisubsAppStripe/Site/Form/form.twig', compact('vars'));
        if($result->getStatusCode() == '200'){
            return $result->getBody();
        } else {
            return "Something goes wrong";
        }
    }

    /**
     * Save paypal config
     * */
    public function save(){
        $http = Http::capture();
        $axisubPost = $http->get('axisubs');
        if (isset($axisubPost['payment'])) {
            $result = AxisubsAppStripeModel::saveConfig($http->all());
            if ($result) {
                Notifier::success('Saved successfully');
            } else {
                Notifier::error('Failed to save');
            }
        }
        return $this->index();
    }

    public function display(){
        $settings = Config::getInstance();
        $vars = new \stdClass();
        $vars->currency_code = $settings->getConfigData('currency', 'USD');

        $sessionData = Session()->get('axisubs_subscribers');
        $subscription_id  = $sessionData['current_subscription_id'];
        $subscription = Plans::loadSubscriber($subscription_id);
        $subscriptionPrefix = $subscription->ID.'_'.$subscription->post_type.'_';        
        $plans = Plans::loadPlan($subscription->meta[$subscriptionPrefix.'plan_id']);
        $vars->first_name   = $subscription->meta[$subscriptionPrefix.'first_name'];
        $vars->last_name    = $subscription->meta[$subscriptionPrefix.'last_name'];
        $vars->email        = $subscription->meta[$subscriptionPrefix.'email'];
        $vars->address_1    = $subscription->meta[$subscriptionPrefix.'address_line1'];
        $vars->address_2    = $subscription->meta[$subscriptionPrefix.'address_line2'];
        $vars->city         = $subscription->meta[$subscriptionPrefix.'city'];
        $vars->country      = $subscription->meta[$subscriptionPrefix.'country'];
        $vars->region       = $subscription->meta[$subscriptionPrefix.'province'];
        $vars->postal_code  = $subscription->meta[$subscriptionPrefix.'pincode'];
        $commonObj = new Common();
        $vars->invoice      = $commonObj->getInvoiceNumber($subscription->ID);
        $vars->total        = $subscription->meta[$subscriptionPrefix.'total_price']*100;
        $vars->plan         = $plans;
        $vars->subscription = $subscription;
        $vars->tax_type     = isset($subscription->meta[$subscriptionPrefix.'tax_type'])? $subscription->meta[$subscriptionPrefix.'tax_type'] : '';
        $vars->tax_total    = isset($subscription->meta[$subscriptionPrefix.'tax_total'])? $subscription->meta[$subscriptionPrefix.'tax_total'] : 0;
        $vars->total_excluding_tax = isset($subscription->meta[$subscriptionPrefix.'total_excluding_tax'])? $subscription->meta[$subscriptionPrefix.'total_excluding_tax'] : $subscription->meta[$subscriptionPrefix.'total_price'];
        
        $model = $this->getModel();
        $result = $model->processStripePayment($vars);

        return $result;
    }

    public function cancel(){
        $model = $this->getModel();
        $result = $model->processCancelPayment();

        return $result;
    }

    public function notify(){
        $model = $this->getModel();
        $model->processPaymentNotification();
    }

    /**
     * For processing payment
     * */
    public function processPayment(){
        $http = Http::capture();
        //$model = $this->getModel();
        return $this->execute($http);
        //$model->processPaymentReturn();
    }
}
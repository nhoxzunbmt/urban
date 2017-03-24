<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Content Restriction
 * Plugin URI:        http://flycart.org/
 * Description:       A plugin for Axis-Subscriptions Content Restriction.
 * Version:           1.0.0
 * Author:            Ashlin
 * Author URI:        http://flycart.org/
 * Text Domain:       axisubs-app-content-restriction
 * License:           MIT
 */

use Events\Event;
use AxisubsAppContentRestriction\Controllers\Admin\AxisubsAppContentRestriction;
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

require_once( WP_PLUGIN_DIR.'/'.dirname( plugin_basename(__FILE__) ).'/app/Controllers/Controller.php');
require_once( WP_PLUGIN_DIR.'/'.dirname( plugin_basename(__FILE__) ).'/app/Models/Admin/AxisubsAppContentRestriction.php');
require_once( WP_PLUGIN_DIR.'/'.dirname( plugin_basename(__FILE__) ).'/app/Controllers/Admin/AxisubsAppContentRestriction.php');

if (!defined('AXISUBS_APP_CONTENT_RESTRICTION_PLUGIN_PATH')) {
    define( 'AXISUBS_APP_CONTENT_RESTRICTION_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

Event::listen('axisubs-app-content-restriction_loadView', array('AxisubsAppContentRestrictionPlugin', 'loadFormView'), '1');
Event::listen('axisubs-app-content-restriction_appTask', array('AxisubsAppContentRestrictionPlugin', 'runAppTask'), '1');

Event::listen('add_meta_boxes', array('AxisubsAppContentRestrictionPlugin', 'addContentRestrictionMetaBox'), '1');
Event::listen('save_post', array('AxisubsAppContentRestrictionPlugin', 'saveMetaBox'), '1');
Event::listen('axisubs-app-content-restriction_hasFunction', array('AxisubsAppContentRestrictionPlugin', 'hasHook'), '1');
//To replace the content
Event::listen('the_content', array('AxisubsAppContentRestrictionPlugin', 'filterTheContent'), '', 'filter');


class AxisubsAppContentRestrictionPlugin
{
    protected static $hooks = array('loadView');

    /**
     * To check function exist
     * */
    public static function hasHook($functionName){
        if(in_array($functionName, AxisubsAppContentRestrictionPlugin::$hooks)){
            return 50;
        } else {
            return false;
        }
    }

    /**
     * For load Form/View form
     * */
    public static function loadFormView()
    {
        AxisubsAppContentRestriction::loadAppView();
    }

    /**
     * Run app task
     * */
    public static function runAppTask()
    {
        $http = Http::capture();
        $paypalObject = new AxisubsAppContentRestriction();
        $paypalObject->execute($http);
    }

    /**
     * load content restriction meta box
     * */
    public static function addContentRestrictionMetaBox(){
        add_meta_box("axisubs", "Content Restriction", array('AxisubsAppContentRestrictionPlugin', 'contentRestrictionMetaBoxHTML'), "post", "side", "high", null);
        add_meta_box("axisubs", "Content Restriction", array('AxisubsAppContentRestrictionPlugin', 'contentRestrictionMetaBoxHTML'), "page", "side", "high", null);
    }

    /**
     * load content restriction meta box HTML
     * */
    public static function contentRestrictionMetaBoxHTML($object){
        AxisubsAppContentRestriction::loadMetaBoxFields($object);
    }

    /**
     * For storing meta box value
     * */
    public static function saveMetaBox($object){
        AxisubsAppContentRestriction::saveChoosenMetaBoxPlan($object);
    }

    /**
     * Restrict the content based on Plans
     * */
    public static function filterTheContent($content){
        global $post;
        $newContent = AxisubsAppContentRestriction::restrictContentBasedOnPlan($content, $post);

        return $newContent;
    }
}

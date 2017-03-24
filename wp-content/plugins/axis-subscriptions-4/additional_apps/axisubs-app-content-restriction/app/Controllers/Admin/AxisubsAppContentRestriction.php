<?php
/**
 * Created by PhpStorm.
 * User: aron-destiny
 * Date: 12/7/16
 * Time: 12:52 PM
 */
namespace AxisubsAppContentRestriction\Controllers\Admin;

use AxisubsAppContentRestriction\Controllers\Controller;
use AxisubsAppContentRestriction\Models\Admin\AxisubsAppContentRestriction as AxisubsAppContentRestrictionModel;
use Herbert\Framework\Http;
use Herbert\Framework\Notifier;
use Axisubs\Helper\Common;
use Axisubs\Models\Admin\Config;
use Axisubs\Helper\Pagination;
use Axisubs\Helper\Currency;
use Axisubs\Models\Site\Plans;

class AxisubsAppContentRestriction extends Controller
{
    public $_controller = 'AxisubsAppContentRestriction';
    public $_element = 'app_content_restriction';
    public $_folder = 'axisubs-app-content-restriction';

    /**
     * Default App view
     * */
    public static function loadAppView(){
        $currentObject = new AxisubsAppContentRestriction();
        $currentObject->index();
    }

    /**
     * Default layout
     * */
    public function index(){
        $pagetitle = "Content Restriction Configuration";
        $model = $this->getModel();
        $item = $model->getConfig();
        $content_login_message = esc_html__('Please login to access this content', 'axis-subscriptions');
        $content_subscribe_message = esc_html__('Please subscribe for plan [PLANS] to access this content.', 'axis-subscriptions');
        if($item){
            $metaPrefix = $item->ID.'_'.$item->post_type.'_';
            if($item->meta[$metaPrefix.'login_message'] != ''){
                $content_login_message = $item->meta[$metaPrefix.'login_message'];
            }
            if($item->meta[$metaPrefix.'subscribe_message'] != ''){
                $content_subscribe_message = $item->meta[$metaPrefix.'subscribe_message'];
            }
        }

        $dataEditor['login_message'] = $this->getEditor('login_message', $content_login_message);
        $dataEditor['subscribe_message'] = $this->getEditor('subscribe_message', $content_subscribe_message);

        $data = view('@AxisubsAppContentRestriction/Admin/Form/edit.twig', compact('pagetitle', 'item', 'dataEditor'));
        if($data->getStatusCode() == '200'){
            echo $data->getBody();
        } else {
            echo "Something goes wrong";
        }
    }

    /**
     * To load the editor
     * */
    protected function getEditor($fieldname, $message){
        $editor_id = 'axisub_payment_'.$fieldname;
        $settings = array('textarea_name' => 'axisubs[payment]['.$fieldname.']',
            'editor_height' => '100');
        ob_start();
        wp_editor( $message, $editor_id, $settings );
        $editor = ob_get_clean();
        //ob_end_flush();

        return $editor;
    }

    /**
     * Save Content Restriction Configuration
     * */
    public function save(){
        $http = Http::capture();
        $axisubPost = $http->get('axisubs');
        if (isset($axisubPost['payment'])) {
            $result = AxisubsAppContentRestrictionModel::saveConfig($http->all());
            if ($result) {
                Notifier::success('Saved successfully');
            } else {
                Notifier::error('Failed to save');
            }
        }
        return $this->index();
    }

    /**
     * Load Meta Box fields Html
     * */
    public static function loadMetaBoxFields($object){
//        wp_enqueue_style( 'axisubs_content_restriction', \AxisubsAppContentRestriction\Helper::assetUrl('/css/style.css') );
        $selected_plans = get_post_meta( $object->ID, 'axisub_plans' );
        if(isset($selected_plans[0])){
            if(is_array($selected_plans[0])){
                $selected_plans = $selected_plans[0];
            } else {
                $selected_plans = array($selected_plans[0]);
            }
        } else {
            $selected_plans = array();
        }
        $plans = Plans::getItems();
        $data = view('@AxisubsAppContentRestriction/Admin/Fields/default.twig', compact('plans', 'selected_plans'));
        if($data->getStatusCode() == '200'){
            echo $data->getBody();
        } else {
            //echo "Something goes wrong";
        }
    }

    /**
     * Save the metaBox Value
     * */
    public static function saveChoosenMetaBoxPlan($post_id){
        $http = Http::capture();

        if(!current_user_can("edit_post", $post_id))
            return $post_id;

        if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
            return $post_id;

        $meta_box_axisub_plans = "";

        if($http->get("axisub_plans"))
        {
            $meta_box_axisub_plans = $http->get("axisub_plans");
        }
        update_post_meta($post_id, "axisub_plans", $meta_box_axisub_plans);
    }

    /**
     * Restrict the content based on Selected Plans
     * */
    public static function restrictContentBasedOnPlan($content, $post){
        $thisController = new AxisubsAppContentRestriction();
        $model = $thisController->getModel();
        return $model->restrictContentBasedOnSelectedPlan($content, $post);
    }
}
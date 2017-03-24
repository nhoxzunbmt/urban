<?php
/**
 * Created by PhpStorm.
 * User: aron-destiny
 * Date: 12/7/16
 * Time: 1:25 PM
 */

namespace AxisubsAppContentRestriction\Models\Admin;

use Axisubs\Controllers\Controller;
use Corcel\Post;
use Herbert\Framework\Models\PostMeta;
use Herbert\Framework\Http;
use Axisubs\Models\Site\Plans;
use Axisubs\Helper\AxisubsRedirect;
use Axisubs\Helper\DateFormat;

class AxisubsAppContentRestriction extends Post
{
    public $_folder = 'axisubs-app-content-restriction';
    /**
     * The table associated with the model.
     *
     * @var string
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $_item = array();

    public static $post_type = 'axis_cr_config';

    public function __construct(array $attributes = [])
    {
    }

    public function getConfig()
    {
        $item = parent::all()->where('post_type', AxisubsAppContentRestriction::$post_type)->first();
        if(!empty($item)) {
            if ($item->meta() != null) {
                $item->meta = $item->meta()->pluck('meta_value', 'meta_key')->toArray();
            }
        }
        $this->_item = $item;
        return $this->_item;
    }

    public function getConfigData($fieldName, $default = ''){
        if(empty($this->_item)){
            $this->_item = $this->getConfig();
        }
        if(!empty($this->_item)){
            $key = $this->_item->ID . '_'.AxisubsAppContentRestriction::$post_type.'_' . $fieldName;
            if(isset($this->_item->meta[$key])){
                if($this->_item->meta[$key] == ''){
                    $result = $default;
                } else {
                    $result = $this->_item->meta[$key];
                }
            } else {
                $result = $default;
            }
        } else {
            $result = $default;
        }

        return $result;
    }

    /**
     * Save Paypal Config
     * */
    public static function saveConfig($post)
    {
        $postDB = \Corcel\Post::where('post_type', AxisubsAppContentRestriction::$post_type)->get();
        $postTable = $postDB->first();
        if ($postDB->count() == 0) {
            $postTable = new Post();
            $postTable->post_name = 'axisubs_app_content_restriction_config';
            $postTable->post_title = 'Axisubs app Content Restriction Config';
            $postTable->post_type = AxisubsAppContentRestriction::$post_type;
            $postTable->save();
            $postDB = \Corcel\Post::where('post_type', AxisubsAppContentRestriction::$post_type)->get();
            $postTable = $postDB->first();
        }
        foreach ($post['axisubs']['payment'] as $key => $val) {
            $key = $postTable->ID . '_'.AxisubsAppContentRestriction::$post_type.'_' . $key;
            $postTable->meta->$key = $val;
        }
        $result = $postTable->save();

        return $result;
    }

    /**
     * Restrict the content based on Selected Plans
     * */
    public function restrictContentBasedOnSelectedPlan($content, $post){
        $custom_content = $content;
        $selected_plans = get_post_meta( $post->ID, 'axisub_plans' );
        if(empty($selected_plans)){
            return $content;
        } else {
            if(empty($selected_plans[0])){
                return $content;
            } else {
                $userId = get_current_user_id();
                if(!$userId){
                    $custom_content = $this->getConfigData('login_message', esc_html__('Please login to access this content.', 'axis-subscriptions'));
                } else {
                    $plans_for_cr = $selected_plans[0];
                    $hasAccess = $this->checkUserHasAccessToContent($plans_for_cr);
                    if($hasAccess){

                    } else {
                        $plansList = '<ul>';
                        foreach ($plans_for_cr as $plan_id){
                            $plan = Plans::loadPlan($plan_id);
                            $axisController = new Controller();
                            if($plan){
                                $plan_url = $axisController->getAxiSubsURLs('plan', 'view', $plan->ID, $plan->meta[$plan->ID.'_'.$plan->post_type.'_slug']);
                                $planName = $plan->meta[$plan->ID.'_'.$plan->post_type.'_name'];
                                $plansList .= '<li><a href="'.$plan_url.'">'.$planName.'</a></li>';
                            }
                        }

                        $plansList .= '</ul>';
                        $custom_content = $this->getConfigData('subscribe_message', esc_html__('Please subscribe for plan [PLANS] to access this content.', 'axis-subscriptions'));
                        $custom_content = str_replace('[PLANS]', $plansList, $custom_content);
                    }
                }

                return $custom_content;
            }
        }
    }

    /**
     * get the usergroups based on plans
     * */
    protected function checkUserHasAccessToContent($plans_for_cr){
        $hasAccess = 1;
        foreach ($plans_for_cr as $plan_id){
            $activeSubscriptions = Plans::getActiveSubscriptionsBasedOnPlan($plan_id);
            if(!count($activeSubscriptions)){
                $hasAccess = 0;
                break;
            }
        }

        return $hasAccess;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: aron-destiny
 * Date: 12/7/16
 * Time: 1:25 PM
 */

namespace AxisubsAppStripe\Models\Admin;

use Axisubs\Helper\Config;
use Axisubs\Helper\Duration;
use Axisubs\Helper\History;
use Corcel\Post;
use Herbert\Framework\Models\PostMeta;
use Herbert\Framework\Http;
use Axisubs\Models\Site\Plans;
use Stripe\Stripe;
use Axisubs\Helper\Common;
use Axisubs\Helper\DateFormat;
use Herbert\Framework\Notifier;

class AxisubsAppStripe extends Post
{
    public $_folder = 'axisubs-app-payment-stripe';
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

    public static $post_type = 'axis_stripe_config';

    public function __construct(array $attributes = [])
    {
    }

    public function getConfig()
    {
        $item = parent::all()->where('post_type', AxisubsAppStripe::$post_type)->first();
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
            $key = $this->_item->ID . '_'.AxisubsAppStripe::$post_type.'_' . $fieldName;
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
     * Set Stripe API
     * */
    public function setStripeAPI(){
        $keys = $this->getSecretKeys();
        Stripe::setApiKey($keys['secret']);
    }

    /**
     * Get all stripe plans
     * */
    protected function getStripePlans(){
        $this->setStripeAPI();
        $plans = \Stripe\Plan::all(); // array("limit" => 0)
        $data = $plans->getLastResponse();
        if($data->code == 200){
            $body = json_decode($data->body);
            $stripePlans = $body->data;
            return $stripePlans;
        } else {
            return false;
        }
    }

    /**
     * get Interval from units
     * */
    protected function getIntervalFromUnits($unit){
        $interval = 'day';
        switch($unit){
            case 'W':
                $interval = 'week';
                break;
            case 'M':
                $interval = 'month';
                break;
            case 'Y':
                $interval = 'year';
                break;
        }
        return $interval;
    }

    /**
     * check Interval is allowed
     * */
    protected function checkIntervalAllowed($interval, $interval_count){
        $allow = false;
        switch($interval){
            case 'day':
                if($interval_count <= 356){
                    $allow = true;
                }
                break;
            case 'week':
                if($interval_count <= 52){
                    $allow = true;
                }
                break;
            case 'month':
                if($interval_count <= 12){
                    $allow = true;
                }
                break;
            case 'year':
                if($interval_count <= 1){
                    $allow = true;
                }
                break;
        }
        return $allow;
    }

    /**
     * To remove plan from stripe when delete a plan
     * */
    public function removePlanFromStripe($plan_id, &$delete){
        $plan = Plans::loadPlan($plan_id);
        $planMeta = $plan->meta;
        $planPrefix = $plan->ID.'_'.$plan->post_type.'_';
        if($planMeta[$planPrefix.'type'] == 'recurring' || $planMeta[$planPrefix.'type'] == 'recurring_with_trial'){
            $this->setStripeAPI();
            if(isset($planMeta[$planPrefix.'slug_stripe']) && $planMeta[$planPrefix.'slug_stripe'] != ''){
                $stripeID = $planMeta[$planPrefix.'slug_stripe'];
                try {
                    $planRetrieve = \Stripe\Plan::retrieve($stripeID);
                    $planRetrieveResponse = $planRetrieve->getLastResponse();
                    if($planRetrieveResponse->code == 200){
                        $planRetrieve->name = $planMeta[$planPrefix.'name'];
                        $result = $planRetrieve->delete();
                        $data = $result->getLastResponse();
                        if($data->code == 200){
                            $response = json_decode($data->body);
                            if($response->deleted == true){
                                //delete Success
                            } else {
                                $delete = 0;
                                Notifier::error(esc_html__('Unable to delete the plan from stripe', 'axis-subscriptions'));
                            }
                        } else {
                            $delete = 0;
                            Notifier::error(esc_html__('Unable to delete the plan from stripe', 'axis-subscriptions'));
                        }
                    } else {
                        $delete = 0;
                        Notifier::error(esc_html__('Unable to delete the plan from stripe', 'axis-subscriptions'));
                    }
                } catch (\Stripe\Error\Base $e) {
                    $errors = $this->stripeException($e);
                    if(isset($errors['type']) && $errors['type'] == 'invalid_request_error'){
                    } else {
                        $delete = 0;
                        Notifier::error(esc_html__('Unable to delete the plan from stripe', 'axis-subscriptions'));
                    }
                }
            }
        }
    }
    /**
     * For adding plan in stripe
     * */
    public function addPlanInStripe($plan){
        $planMeta = $plan->meta;
        $planPrefix = $plan->ID.'_'.$plan->post_type.'_';
        if($planMeta[$planPrefix.'type'] == 'recurring' || $planMeta[$planPrefix.'type'] == 'recurring_with_trial'){
            $this->setStripeAPI();
            if(isset($planMeta[$planPrefix.'slug_stripe']) && $planMeta[$planPrefix.'slug_stripe'] != ''){
                $stripeID = $planMeta[$planPrefix.'slug_stripe'];
            } else {
                $stripeID = $planMeta[$planPrefix.'slug'];
            }
            try {
                $planRetrieve = \Stripe\Plan::retrieve($stripeID);
                $planRetrieveResponse = $planRetrieve->getLastResponse();
                if($planRetrieveResponse->code == 200){
                    $data = json_decode($planRetrieveResponse->body);
                    if($data->amount == ($planMeta[$planPrefix.'price']*100)){
                        $planRetrieve->name = $planMeta[$planPrefix.'name'];
                        $planRetrieve->save();
                    } else {
                        Notifier::error(esc_html__('Failed to update in Stripe. Please check you already has a plan id '.$stripeID.' with different price', 'axis-subscriptions'));
                    }
                }

            } catch (\Stripe\Error\Base $e) {
                $errors = $this->stripeException($e);
                if(isset($errors['type']) && $errors['type'] == 'invalid_request_error'){
                    $interval = $this->getIntervalFromUnits($planMeta[$planPrefix.'period_units']);
                    $interval_count = $planMeta[$planPrefix.'period'];
                    $allow = $this->checkIntervalAllowed($interval, $interval_count);
                    if($allow){
                        $currency = Config::getInstance()->get('currency', 'USD');
                        $stripeFields = array(
                            "amount" => ($planMeta[$planPrefix.'price']*100),
                            "interval_count" => $planMeta[$planPrefix.'period'],
                            "interval" => $interval,
                            "interval_count" => $interval_count,
                            "name" => $planMeta[$planPrefix.'name'],
                            "currency" => $currency,
                            "id" => $stripeID);
                        if(isset($planMeta[$planPrefix.'trial_period']) && $planMeta[$planPrefix.'trial_period'] > 0){
                            $trialUnits = isset($planMeta[$planPrefix.'trial_period_units'])? $planMeta[$planPrefix.'trial_period_units'] : 'D';
                            $trailDays = Duration::getInstance()->getDurationInDays($planMeta[$planPrefix.'trial_period'], $trialUnits);
                            $stripeFields['trial_period_days'] = $trailDays;
                        }
                        try {
                            $createPlan = \Stripe\Plan::create($stripeFields);
                            $data = $createPlan->getLastResponse();
                            if($data->code == 200){
                                if(isset($planMeta[$planPrefix.'can_edit']) && $planMeta[$planPrefix.'can_edit'] != ''){
                                    $canEditData = json_decode($planMeta[$planPrefix.'can_edit']);
                                    $canEditData['stripe'] = 0;
                                } else {
                                    $canEditData['stripe'] = 0;
                                }
                                $canEditValue = json_encode($canEditData);
                                if(isset($planMeta[$planPrefix.'can_edit_message']) && $planMeta[$planPrefix.'can_edit_message'] != ''){
                                    $canEditMessageData = json_decode($planMeta[$planPrefix.'can_edit_message']);
                                    $canEditMessageData['stripe'] = esc_html__('Few fields cannot be editable, Stripe doesn\'t allows to edit plan price and durations.', 'axis-subscriptions');
                                } else {
                                    $canEditMessageData['stripe'] = esc_html__('Few fields cannot be editable, Stripe doesn\'t allows to edit plan price and durations.', 'axis-subscriptions');
                                }
                                $canEditMessageValue = json_encode($canEditMessageData);
                                $postDB = Post::where('post_type', 'axisubs_plans')->find($plan->ID);
                                $key = $planPrefix.'slug_stripe';
                                $postDB->meta->$key = $stripeID;
                                $key = $planPrefix.'can_edit';
                                $postDB->meta->$key = $canEditValue;
                                $key = $planPrefix.'can_edit_message';
                                $postDB->meta->$key = $canEditMessageValue;
                                $result = $postDB->save();
                            } else {
                                Notifier::error(esc_html__('Failed to creating plan in stripe', 'axis-subscriptions'));
                            }
                        } catch (\Exception $e) {
                            // Something else happened, completely unrelated to Stripe
                            $body = $e->getMessage();
                            Notifier::error($body.' in Stripe');
                        }
                    } else {
                        Notifier::error(esc_html__('Failed to creating plan in stripe. Maximum of one year interval allowed (1 year, 12 months, or 52 weeks)', 'axis-subscriptions'));
                    }
                }
            } catch (\Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $body = $e->getMessage();
                Notifier::error($body.' in Stripe');
            }
        }
    }

    /**
     * Import plans from stripe
     * */
    public function importPlansFromStripe(){
        $plans = $this->getStripePlans();
        if($plans){
            foreach ($plans as $key => $plan){
                $post = array();
                $planLocal = $this->getPlanByStripeSlug($plan->id);
                $post['axisubs']['plans']['name'] = $plan->name;
                if(empty($planLocal)){
                    $post['axisubs']['plans']['slug'] = $this->generateSlug($plan->id);
                    $post['axisubs']['plans']['slug_stripe'] = $plan->id;
                    $post['axisubs']['plans']['description'] = $plan->statement_descriptor;
                    $post['axisubs']['plans']['status'] = 1;
                    $post['axisubs']['plans']['setup_cost'] = 0;
                    $post['axisubs']['plans']['price'] = number_format(($plan->amount/100),2);
                    if($plan->amount > 0){
                        if($plan->trial_period_days){
                            $post['axisubs']['plans']['type'] = 'recurring_with_trial';
                            $post['axisubs']['plans']['trial_period'] = $plan->trial_period_days;
                            $post['axisubs']['plans']['trial_period_units'] = 'D';
                        } else {
                            $post['axisubs']['plans']['type'] = 'recurring';
                            $post['axisubs']['plans']['trial_period'] = '';
                        }
                    } else {
                        $post['axisubs']['plans']['type'] = 'free';
                    }
                    $post['axisubs']['plans']['period'] = $plan->interval_count;
                    $post['axisubs']['plans']['period_units'] = $this->getPeriodUnits($plan);
                }

                if($planLocal){
                    $post['id'] = $planLocal->ID;
                }
                $result[] = Plans::savePlans($post);
            }
        }

        return $result;
    }

    /**
     * get Plan By slug
     * */
    protected function getPlanByStripeSlug($slug){
        $plans = PostMeta::where('meta_key','like','%_axisubs_plans_slug_stripe')
            ->where('meta_value', $slug)->orderBy('post_id','desc')
            ->pluck('post_id');

        foreach($plans as $key => $value){
            $item = Post::where('post_type', 'axisubs_plans')->find($value);
            $item->meta = $item->meta()->pluck('meta_value', 'meta_key')->toArray();
        }
        return $item;
    }

    /**
     * to generate slug
     * */
    protected function generateSlug($slug){
        $slug = strtolower(str_replace(' ', '-', $slug));
        return $slug;
    }

    /**
     * Get Plan period as per axisubs format
     * */
    protected function getPeriodUnits($plan){
        $interval = $plan->interval;
        $units = 'D';
        if($interval== 'day'){
            $units = 'D';
        } else if($interval== 'month'){
            $units = 'M';
        } else if($interval== 'year'){
            $units = 'Y';
        } else if($interval== 'week'){
            $units = 'W';
        }

        return $units;
    }

    /**
     * Save Paypal Config
     * */
    public static function saveConfig($post)
    {
        $postDB = \Corcel\Post::where('post_type', AxisubsAppStripe::$post_type)->get();
        $postTable = $postDB->first();
        if ($postDB->count() == 0) {
            $postTable = new Post();
            $postTable->post_name = 'axisubs_app_stripe_config';
            $postTable->post_title = 'axisubs_app_stripe_config';
            $postTable->post_type = AxisubsAppStripe::$post_type;
            $postTable->save();
            $postDB = \Corcel\Post::where('post_type', AxisubsAppStripe::$post_type)->get();
            $postTable = $postDB->first();
        }
        foreach ($post['axisubs']['payment'] as $key => $val) {
            $key = $postTable->ID . '_'.AxisubsAppStripe::$post_type.'_' . $key;
            $postTable->meta->$key = $val;
        }
        $result = $postTable->save();

        return $result;
    }

    /**
     * To handle payment cancel
     * */
    public function processCancelPayment(){
        $planObject = Plans::getInstance();
        $sessionData = Session()->get('axisubs_subscribers');
        $subscription_id  = $sessionData['current_subscription_id'];
        $transaction_data = array(
            'payment_processor' => $this->_folder,
            'processor_status' => 'CANCELED'
        );

        $planObject->paymentCanceled($subscription_id, $transaction_data);

        $returnResult['status'] = 0;
        $returnResult['message'] = 'Canceled payment';
        return $returnResult;
    }

    /**
     * Process cancel subscription
     * */
    public function cancelStripeSubscription($subscription, $auto = 0){
        if(isset($subscription->ID)){
            $subscriptionPrefix = $subscription->ID.'_'.$subscription->post_type.'_';
            $payment_processor = $subscription->meta[$subscriptionPrefix.'payment_processor'];
            if($payment_processor == $this->_folder){
                $subscription_profile_id = isset($subscription->meta[$subscriptionPrefix.'subscription_profile_id'])? $subscription->meta[$subscriptionPrefix.'subscription_profile_id'] : '';
                if($subscription_profile_id != ''){
                    try {
                        $this->setStripeAPI();
                        $sub = \Stripe\Subscription::retrieve($subscription_profile_id);
                        $sub->cancel(array('at_period_end' => true));
                        if($auto){
                            $addHistory = History::getInstance();
                            $comment = esc_html__('Cancelled the subscription from stripe automatically to end recurring', 'axis-subscriptions');
                            $addHistory->addSubscriptionHistory($subscription->ID, $comment);
                        }
                    } catch (\Exception $e) {
                        // Something else happened, completely unrelated to Stripe
                        $body = $e->getMessage();
                        $errors [] = $body;
                        $this->_log($errors);
                    }
                }
            }
        }
    }

    /**
     * Process stripe payment
     * */
    public function processStripePayment($vars){
        $http = Http::capture();
        $stripeToken = $http->get('stripeToken', '');
        $errors = array();
        if($stripeToken != ''){
            $plans = $vars->plan;
            $subscription = $vars->subscription;
            $subscriptionPrefix = $subscription->ID.'_'.$subscription->post_type.'_';
            $plansPrefix = $plans->ID.'_'.$plans->post_type.'_';
            try {
                $this->setStripeAPI();
                $customer = \Stripe\Customer::create(array(
                    'email' => $vars->email,
                    'card'  => $stripeToken,
                ));
                $this->_log($customer);
                if ( $plans->meta[$plansPrefix.'type'] == 'recurring' || $plans->meta[$plansPrefix.'type'] == 'recurring_with_trial' ) {
                    $subField = array(
                        "customer" => $customer->id,
                        "plan" => $plans->meta[$plansPrefix.'slug_stripe'],
                        "metadata" => array("order_id" => $vars->invoice)
                    );
                    if($vars->tax_type == 'excluding_tax' && $vars->tax_total > 0){
                        $taxInPercent = ($vars->tax_total*100)/($vars->total_excluding_tax);
                        $subField["tax_percent"] = round($taxInPercent, 2);
                    }
                    $stripeSubs = \Stripe\Subscription::create($subField);
                    $data = $stripeSubs->getLastResponse();
                    if(isset($data) && $data->code == 200){
                        $body = json_decode($data->body);
                        $dateFormat = DateFormat::getInstance();
                        $transaction_data = array(
                            'payment_processor' => $this->_folder,
                            'transaction_ref_id' => '',
                            'subscription_profile_id' => $body->id,
                            'transaction_amount' => ($body->plan->amount/100),
                            'transaction_currency' => $vars->currency_code,
                            'prepayment' => "",
                            'postpayment' => $data->body,
                            'authorize' => "",
                            'params' => "",
                            'stripe_cust_id' => $customer->id,
                            'processor_status' => $body->status,
                            'end_on' => $dateFormat->getCarbonDate(date("Y-m-d H:i:s", $body->current_period_end))
                        );
                        if(isset($plans->meta[$plansPrefix.'billing_cycles']) && $plans->meta[$plansPrefix.'billing_cycles'] > 0){
                            $recurringEndOn = Plans::calculateEndDateOFRecurring($subscription->meta[$subscriptionPrefix.'start_on'], $plans);
                            $transaction_data['manual_end'] = 1;
                            $transaction_data['manual_end_date'] = $recurringEndOn;
                        }
                    }
                } else {
                    $charge = \Stripe\Charge::create(array(
                        'customer' => $customer->id,
                        'amount' => $vars->total,
                        'currency' => $vars->currency_code,
                        'description' => $plans['meta'][$plansPrefix . 'name'],
                        "metadata" => array("order_id" => $vars->invoice)
                    ));
                    $data = $charge->getLastResponse();
                    if(isset($data) && $data->code == 200){
                        $body = json_decode($data->body);

                        $transaction_data = array(
                            'payment_processor' => $this->_folder,
                            'transaction_ref_id' => $body->balance_transaction,
                            'subscription_profile_id' => '',
                            'transaction_amount' => ($body->amount/100),
                            'transaction_currency' => $vars->currency_code,
                            'prepayment' => "",
                            'postpayment' => $data->body,
                            'authorize' => "",
                            'params' => "",
                            'stripe_cust_id' => $customer->id,
                            'processor_status' => $body->status
                        );
                    }
                }

                $this->_log($data);
            } catch(\Stripe\Error\Card $e) {
                // Since it's a decline, \Stripe\Error\Card will be caught
                $errors [] = $this->stripeException($e);
            } catch (\Stripe\Error\RateLimit $e) {
                // Too many requests made to the API too quickly
                $errors [] = $this->stripeException($e);
            } catch (\Stripe\Error\InvalidRequest $e) {
                // Invalid parameters were supplied to Stripe's API
                $errors [] = $this->stripeException($e);
            } catch (\Stripe\Error\Authentication $e) {
                // Authentication with Stripe's API failed
                // (maybe you changed API keys recently)
                $errors [] = $this->stripeException($e);
            } catch (\Stripe\Error\ApiConnection $e) {
                // Network communication with Stripe failed
                $errors [] = $this->stripeException($e);
            } catch (\Stripe\Error\Base $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                $errors [] = $this->stripeException($e);
            } catch (\Exception $e) {
                // Something else happened, completely unrelated to Stripe
                $body = $e->getMessage();
                $errors [] = $body;
                $this->_log($errors);
            }

            $planObject = Plans::getInstance();
            if (count ( $errors )) {
                $transaction_data = array(
                    'payment_processor' => $this->_folder,
                    'subscription_profile_id' => '',
                    'transaction_currency' => $vars->currency_code,
                    'prepayment' => "",
                    'postpayment' => json_encode($errors),
                    'authorize' => "",
                    'params' => ""
                );

                $errors [] = $errors;
                $this->_log($errors);
                $planObject->paymentFailed($subscription->ID, $transaction_data);
            } elseif(strtolower($body->status) == 'succeeded') {
                $planObject->paymentCompleted($subscription->ID, $transaction_data);
                $returnResult['message'] = 'Payment made successfully';
            } else if(strtolower($body->status) == 'active'){
                $planObject->paymentCompleted($subscription->ID, $transaction_data);
                $returnResult['message'] = 'Subscription created successfully';
            } else if(strtolower($body->status) == 'trialing'){
                $subscription = Post::where('post_type', 'axisubs_subscribe')->find($subscription->ID);
                $planObject->markTrial($subscription);
                $returnResult['message'] = 'Subscription created successfully';
            } else if(strtolower($body->status) == 'canceled'){
                $planObject->paymentCanceled($subscription->ID, $transaction_data);
                $returnResult['message'] = 'Payment canceled';
            } else {
                $planObject->paymentFailed($subscription->ID, $transaction_data);
                $returnResult['message'] = 'Payment canceled';
            }

            if (count($errors) > 0) {
                $returnResult['status'] = 0;
                $returnResult['message'] = 'Something goes wrong. Please contact site Administrator';
            } else {
                $returnResult['status'] = 200;
            }

            return $returnResult;

        }
    }

    /**
     * Accepted Stripe events
     * */
    protected function acceptedStripeEvents(){
        /*$events = array(
		'charge.captured',
            'charge.failed', 'charge.pending',
            'charge.succeeded', 'charge.updated', 'invoice.created',
            'customer.subscription.updated', 'invoice.payment_succeeded',
            'invoice.payment_failed');*/

        $events = array('customer.subscription.updated');
        return $events;
    }

    protected function stripeException($e){
        $body = $e->getJsonBody();
        $err  = $body['error'];
        $this->_log($err);
        return $err;
    }

    /**
     * Process payment notification from stripe
     * */
    public function processPaymentNotification(){
        $this->setStripeAPI();
        /* $http = Http::capture();
         $message = $http->get('message');*/


        // Retrieve the request's body and parse it as JSON
        $input = @file_get_contents("php://input");
        $message = json_decode($input);

        // Do something with $message
        $this->_log($message);

        if(isset($message->type) && in_array($message->type, $this->acceptedStripeEvents())){
            if(isset($message->data)){
                $messageType = $message->type;
                $this->setStripeAPI();
                try {
                    $event = \Stripe\Event::retrieve($message->id);
                    $eventData = $event->getLastResponse();
                    $planObject = Plans::getInstance();
                    if(isset($eventData) && $eventData->code == 200){
                        $body = json_decode($eventData->body);
                        $objectString = 'object';
                        $subsc_details = $body->data->$objectString;
                        if(isset($subsc_details->metadata->order_id)){
                            $order_id = $subsc_details->metadata->order_id;
                            $commonObj = new Common();
                            $subscriptionId = $commonObj->getSubscriptionIdFromInvoiceNumber($order_id);
                        } else {
                            $oldSubscriptions = $planObject->getBySubscriptionProfileId($subsc_details->id);
                            if(count($oldSubscriptions)){
                                foreach ($oldSubscriptions as $key => $oldSusb){
                                    $subscriptionId = $oldSusb->ID;
                                    break;
                                }
                            } else {
                                $subscriptionId = 0;
                            }
                        }

                        if($subscriptionId){
                            $subscription = Plans::loadSubscriber($subscriptionId);
                            $subscriptionPrefix = $subscription->ID.'_'.$subscription->post_type.'_';
                            $transaction_data['payment_processor'] = $this->_folder;
                            $transaction_data['processor_status'] = $subsc_details->status;
                            $transaction_data['stripe_cust_id'] = $subsc_details->customer;
                            $transaction_data['subscription_profile_id'] = $subsc_details->id;

                            //New End date
                            $dateFormat = DateFormat::getInstance();
                            $currentEndDate = $subsc_details->current_period_end;
                            $currentEndDate = $dateFormat->getCarbonDate(date("Y-m-d H:i:s", $currentEndDate));
                            $oldSubscriptions = $planObject->getBySubscriptionProfileId($subsc_details->id);
                            $gotSusbcriptionId = 0;
                            foreach ($oldSubscriptions as $key => $oldSusb){
                                $oldSusbPrefix = $oldSusb->ID.'_'.$oldSusb->post_type.'_';
                                if($oldSusb->meta[$oldSusbPrefix.'end_on'] == $currentEndDate){
                                    $gotSusbcriptionId = $oldSusb->ID;
                                }
                            }
                            $endMaually = 0;
                            if($gotSusbcriptionId){
                                $subscription = Plans::loadSubscriber($gotSusbcriptionId);
                            } else {
                                //$next_subscription = $planObject->getNextRenewal( $subscription->ID);
                                $next_subscription = $planObject->createACopyOfSubscription($subscription->ID);

                                $oldSubscription = $subscription;

                                if ( $next_subscription ) {
                                    $subscription = Plans::loadSubscriber($next_subscription);
                                }

                                // To end the subscription manually after completing the billing cycle
                                // Stripe doen't has this billing cycle feature
                                $oldSubscriptionPrefix = $oldSubscription->ID.'_'.$oldSubscription->post_type.'_';
                                $oldSubscriptionMeta = $oldSubscription->meta;
                                if(isset($oldSubscriptionMeta[$oldSubscriptionPrefix.'manual_end']) && $oldSubscriptionMeta[$oldSubscriptionPrefix.'manual_end'] == 1){
                                    $manualEndDate = isset($oldSubscriptionMeta[$oldSubscriptionPrefix.'manual_end_date'])? $oldSubscriptionMeta[$oldSubscriptionPrefix.'manual_end_date']: '';
                                    if($manualEndDate != ''){
                                        $next_subscriptionMeta = $subscription->meta;
                                        $next_subscriptionPrefix = $subscription->ID.'_'.$subscription->post_type.'_';
                                        $manualEndDate = $dateFormat->getOnlyDate($manualEndDate);
                                        $nextEndDate = $dateFormat->getOnlyDate($next_subscriptionMeta[$next_subscriptionPrefix.'end_on']);
                                        if(strtotime($manualEndDate) <= strtotime($nextEndDate)){
                                            $endMaually = 1;
                                        }
                                    }
                                }
                            }
                            $transaction_data['end_on'] = $currentEndDate;
                            $transaction_data['postpayment'] = $eventData->body;
                            if(isset($body->balance_transaction)){
                                $transaction_data['transaction_ref_id'] = $body->balance_transaction;
                            }

                            if(strtolower($subsc_details->status) == 'active') {
                                $planObject->paymentCompleted($subscription->ID, $transaction_data);
                                if($endMaually){
                                    $this->cancelStripeSubscription($oldSubscription, 1);
                                }
                            } else if(strtolower($subsc_details->status) == 'trialing'){
                                $planObject->markTrial($subscription);
                            } else if(strtolower($subsc_details->status) == 'pending'){
                                $planObject->paymentPending($subscription->ID, $transaction_data);
                            } else if(strtolower($subsc_details->status) == 'canceled'){
                                $planObject->paymentCanceled($subscription->ID, $transaction_data);
                            } else if(strtolower($subsc_details->status) == 'unpaid'){
                                $planObject->paymentPending($subscription->ID, $transaction_data);
                            } else {
                                $this->_log($subsc_details->status);
                            }
                        }
                    }
                } catch(\Stripe\Error\Card $e) {
                    // Since it's a decline, \Stripe\Error\Card will be caught
                    $errors [] = $this->stripeException($e);
                } catch (\Stripe\Error\RateLimit $e) {
                    // Too many requests made to the API too quickly
                    $errors [] = $this->stripeException($e);
                } catch (\Stripe\Error\InvalidRequest $e) {
                    // Invalid parameters were supplied to Stripe's API
                    $errors [] = $this->stripeException($e);
                } catch (\Stripe\Error\Authentication $e) {
                    // Authentication with Stripe's API failed
                    // (maybe you changed API keys recently)
                    $errors [] = $this->stripeException($e);
                } catch (\Stripe\Error\ApiConnection $e) {
                    // Network communication with Stripe failed
                    $errors [] = $this->stripeException($e);
                } catch (\Stripe\Error\Base $e) {
                    // Display a very generic error to the user, and maybe send
                    // yourself an email
                    $errors [] = $this->stripeException($e);
                } catch (\Exception $e) {
                    // Something else happened, completely unrelated to Stripe
                    $body = $e->getMessage();
                    $errors [] = $body;
                    $this->_log($errors);
                }
            }
        }
        http_response_code(200);
    }

    /**
     * Get Secret / Publishable keys
     * */
    public function getSecretKeys(){
        $sandbox = $this->getConfigData('sandbox', 1);
        $keys['secret'] = $sandbox ? $this->getConfigData('test_secret_key', '') : $this->getConfigData('live_secret_key', '');
        $keys['publishable'] = $sandbox ? $this->getConfigData('test_publishable_key', '') : $this->getConfigData('live_publishable_key', '');

        return $keys;
    }

    /**
     * Simple logger OVERRIDEEN FOR TETS PURPOSES
     *
     * @param string $text
     * @param string $type
     * @return void
     */
    function _log($text, $type = 'message')
    {
        if (is_array($text) || is_object($text)) {
            $text = json_encode($text);
        }

        $isLog = $this->getConfigData('debug', 1);
        if ($isLog) {
            $file = AXISUBS_APP_STRIPE_PLUGIN_PATH."logs/payment_log.txt";
            $date = date("Y-m-d H:i:s");
            if(is_writable($file)) {
                $f = fopen($file, 'a');
                fwrite($f, "\n\n" . $date);
                fwrite($f, "\n" . $type . ': ' . $text);
                fclose($f);
            }
        }
    }

    /**
     * Formatts the Payment data for storing
     *
     * @param array $data
     * @return string
     */
    function _getFormattedTransactionDetails( $data )
    {
        return json_encode($data);
    }
}
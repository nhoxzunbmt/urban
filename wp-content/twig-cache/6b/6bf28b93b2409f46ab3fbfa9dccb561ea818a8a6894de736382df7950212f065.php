<?php

/* @Axisubs/Site/subscribed/singlesubscription.twig */
class __TwigTemplate_f181c01cae9a2aded0cd9f73baa3b670bd61969b70e21a85e75be2cb880d2c45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["subMeta"] = $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array");
        // line 2
        $context["subPrefix"] = ((($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "post_type", array(), "array")) . "_");
        // line 3
        echo "<div class=\"axisubs wrap subscription_details\">
    <div class=\"axisubs-plan_details-header\">
        <div class=\"axisubs-plan_details-title\">
            <h3>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h3>
        </div>
        ";
        // line 8
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
        <div class=\"axisubs-plan_details-summary\">
            <table class=\"table\" border=\"1\" border-color=\"#ddd\">
                <tbody>
                <tr>
                    <td>
                        Subscription Id
                    </td>
                    <td>
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Plan Name
                    </td>
                    <td>
                        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Plan Price
                    </td>
                    <td>
                        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_price"), array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array") > 0)) {
            // line 37
            echo "                    <tr>
                        <td>
                            Setup cost
                        </td>
                        <td>
                            ";
            // line 42
            if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array") > 0)) {
                // line 43
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array"), "html", null, true);
                echo "
                            ";
            }
            // line 45
            echo "                        </td>
                    </tr>
                ";
        }
        // line 48
        echo "                ";
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "aditionalPrices", array(), "array");
        echo "
                <tr>
                    <td>
                        Total Price
                    </td>
                    <td>
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Subscription Status
                    </td>
                    <td>
                        ";
        // line 62
        echo (isset($context["statusText"]) ? $context["statusText"] : null);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Subscription start date
                    </td>
                    <td>
                        ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_start_on"), array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        Subscription end date
                    </td>
                    <td>
                        ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_end_on"), array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <h3>";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Transaction Details", "axis-subscriptions")), "html", null, true);
        echo "</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Payment method", "axis-subscriptions")), "html", null, true);
        echo "
                    </td>
                    <td>
                        ";
        // line 91
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array($this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "payment_type"), array(), "array"), "axis-subscriptions")), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        ";
        // line 96
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Payment status", "axis-subscriptions")), "html", null, true);
        echo "
                    </td>
                    <td>
                        ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "payment_status"), array(), "array"), "html", null, true);
        echo "
                    </td>
                </tr>
                ";
        // line 102
        if (($this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "subscription_profile_id"), array(), "array") != "")) {
            // line 103
            echo "                    <tr>
                        <td>
                            ";
            // line 105
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Subscription profile", "axis-subscriptions")), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "subscription_profile_id"), array(), "array"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 112
        echo "                ";
        if (($this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "transaction_ref_id"), array(), "array") != "")) {
            // line 113
            echo "                    <tr>
                        <td>
                            ";
            // line 115
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Transaction id", "axis-subscriptions")), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "transaction_ref_id"), array(), "array"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 122
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"axisubs-plan-billinfo-con\">
        <div class=\"axisubs-plan_details-title\">
            <h3>Billing Info</h3>
        </div>
        <div class=\"axisubs-plan_details-summary\">
            <div class=\"axisubs-plan-billinfo-fields\">
                <div class=\"axisubs-billinfo-f-i\">
                 <span class=\"axisubs-billinfo-f-label\">
                    Customer name :
                 </span>
                 <span class=\"axisubs-billinfo-f-field\">
                    ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
        echo "
                     ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array"), "html", null, true);
        echo "
                 </span>
                </div>
            </div>
            <div class=\"axisubs-plan-billinfo-fields\">
                <div class=\"axisubs-billinfo-f-i\">
               <span class=\"axisubs-billinfo-f-label\">
                  Email :
               </span>
               <span class=\"axisubs-billinfo-f-field\">
                  ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
        echo "
               </span>
                </div>
            </div>
            <div class=\"axisubs-plan-billinfo-fields\">
                <div class=\"axisubs-billinfo-f-i\">
               <span class=\"axisubs-billinfo-f-label\">
                  Address :
               </span>
               <span class=\"axisubs-billinfo-f-field\">
                  ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array"), "html", null, true);
        echo ",
                   ";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array"), "html", null, true);
        echo ",
                   ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array"), "html", null, true);
        echo ",
                   ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array"), "html", null, true);
        echo ",
                   ";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
        echo "
               </span>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a class=\"axisubs-btn btn\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["subscribtions_url"]) ? $context["subscribtions_url"] : null), "html", null, true);
        echo "\">Back to Subscriptions</a>
        ";
        // line 170
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cancel_url", array(), "array") != "")) {
            // line 171
            echo "            <a class=\"axisubs-btn btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cancel_url", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html__')->getCallable(), array("Cancel Subscription")), "html", null, true);
            echo "</a>
        ";
        }
        // line 173
        echo "        ";
        echo $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "additional_buttons", array(), "array");
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/subscribed/singlesubscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 173,  301 => 171,  299 => 170,  295 => 169,  285 => 162,  281 => 161,  277 => 160,  273 => 159,  269 => 158,  256 => 148,  243 => 138,  239 => 137,  222 => 122,  215 => 118,  209 => 115,  205 => 113,  202 => 112,  195 => 108,  189 => 105,  185 => 103,  183 => 102,  177 => 99,  171 => 96,  163 => 91,  157 => 88,  149 => 83,  141 => 78,  130 => 70,  119 => 62,  107 => 54,  97 => 48,  92 => 45,  85 => 43,  83 => 42,  76 => 37,  74 => 36,  67 => 33,  56 => 25,  45 => 17,  33 => 8,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set subMeta = subscriber['meta'] %}*/
/* {% set subPrefix = subscriber['ID']~'_'~subscriber['post_type']~'_' %}*/
/* <div class="axisubs wrap subscription_details">*/
/*     <div class="axisubs-plan_details-header">*/
/*         <div class="axisubs-plan_details-title">*/
/*             <h3>{{ pagetitle }}</h3>*/
/*         </div>*/
/*         {{ message | raw }}*/
/*         <div class="axisubs-plan_details-summary">*/
/*             <table class="table" border="1" border-color="#ddd">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Subscription Id*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ subscriber['ID'] }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Plan Name*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ planDetails['meta'][planDetails['ID']~'_axisubs_plans_name']}}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Plan Price*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ currencyData['code'] }}{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_price'] }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost']>0) %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             Setup cost*/
/*                         </td>*/
/*                         <td>*/
/*                             {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost']>0) %}*/
/*                                 {{ currencyData['code'] }}{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost'] }}*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 {{ data['aditionalPrices'] | raw }}*/
/*                 <tr>*/
/*                     <td>*/
/*                         Total Price*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ currencyData['code'] }}{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_total_price'] }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Subscription Status*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ statusText | raw }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Subscription start date*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_start_on'] }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         Subscription end date*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_end_on'] }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="2">*/
/*                         <h3>{{ esc_html_e('Transaction Details', 'axis-subscriptions') }}</h3>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ esc_html_e('Payment method', 'axis-subscriptions') }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ esc_html_e(subMeta[subPrefix~'payment_type'], 'axis-subscriptions') }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {{ esc_html_e('Payment status', 'axis-subscriptions') }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ subMeta[subPrefix~'payment_status'] }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% if subMeta[subPrefix~'subscription_profile_id'] != '' %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {{ esc_html_e('Subscription profile', 'axis-subscriptions') }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ subMeta[subPrefix~'subscription_profile_id'] }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 {% if subMeta[subPrefix~'transaction_ref_id'] != '' %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {{ esc_html_e('Transaction id', 'axis-subscriptions') }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ subMeta[subPrefix~'transaction_ref_id'] }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*     <div class="axisubs-plan-billinfo-con">*/
/*         <div class="axisubs-plan_details-title">*/
/*             <h3>Billing Info</h3>*/
/*         </div>*/
/*         <div class="axisubs-plan_details-summary">*/
/*             <div class="axisubs-plan-billinfo-fields">*/
/*                 <div class="axisubs-billinfo-f-i">*/
/*                  <span class="axisubs-billinfo-f-label">*/
/*                     Customer name :*/
/*                  </span>*/
/*                  <span class="axisubs-billinfo-f-field">*/
/*                     {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_first_name'] }}*/
/*                      {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_last_name'] }}*/
/*                  </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-billinfo-fields">*/
/*                 <div class="axisubs-billinfo-f-i">*/
/*                <span class="axisubs-billinfo-f-label">*/
/*                   Email :*/
/*                </span>*/
/*                <span class="axisubs-billinfo-f-field">*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_email'] }}*/
/*                </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-billinfo-fields">*/
/*                 <div class="axisubs-billinfo-f-i">*/
/*                <span class="axisubs-billinfo-f-label">*/
/*                   Address :*/
/*                </span>*/
/*                <span class="axisubs-billinfo-f-field">*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1'] }},*/
/*                    {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line2'] }},*/
/*                    {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_city'] }},*/
/*                    {{ data['province'] }},*/
/*                    {{ data['country'] }}*/
/*                </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <a class="axisubs-btn btn" href="{{ subscribtions_url }}">Back to Subscriptions</a>*/
/*         {% if(data['cancel_url'] != '') %}*/
/*             <a class="axisubs-btn btn" href="{{ data['cancel_url'] }}">{{ esc_html__('Cancel Subscription') }}</a>*/
/*         {% endif %}*/
/*         {{ subscriber['additional_buttons'] | raw }}*/
/*     </div>*/
/* </div>*/
/* */

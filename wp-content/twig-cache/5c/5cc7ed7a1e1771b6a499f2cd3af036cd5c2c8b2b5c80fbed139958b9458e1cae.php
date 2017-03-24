<?php

/* @Axisubs/Site/subscribed/singlesubscription.twig */
class __TwigTemplate_7da6ab9328213df2c3036c662c16abdd9484be61a66737dfbf46f8b69b9e8155 extends Twig_Template
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
        echo "<div class=\"axisubs wrap subscription_details\">
   <div class=\"axisubs-plan_details-header\">
      <div class=\"axisubs-plan_details-title\">
         <h3>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h3>
      </div>
      <div class=\"axisubs-plan_details-summary\">
          <table class=\"table\" border=\"1\" border-color=\"#ddd\">
            <tbody>
              <tr>
                <td>
                  Subscription Id
                </td>
                <td>
                  ";
        // line 14
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
        // line 22
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
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_price"), array(), "array"), "html", null, true);
        echo "
                </td>
              </tr>
              ";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array") > 0)) {
            // line 34
            echo "              <tr>
                <td>
                  Setup cost
                </td>
                <td>
                  ";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array") > 0)) {
                // line 40
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array"), "html", null, true);
                echo "
                  ";
            }
            // line 42
            echo "                </td>
              </tr>
              ";
        }
        // line 45
        echo "              ";
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "aditionalPrices", array(), "array");
        echo "
              <tr>
                <td>
                  Total Price
                </td>
                <td>
                  ";
        // line 51
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
        // line 59
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
        // line 67
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
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_end_on"), array(), "array"), "html", null, true);
        echo "
                </td>
              </tr>
            </tbody>
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
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
        echo "
                    ";
        // line 94
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
        // line 104
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
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array"), "html", null, true);
        echo ",
                  ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array"), "html", null, true);
        echo ",
                  ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array"), "html", null, true);
        echo ",
                  ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array"), "html", null, true);
        echo ",
                  ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
        echo "
               </span>
             </div>
           </div>
         </div>
     </div>
   <div>
      <a class=\"axisubs-btn btn\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["subscribtions_url"]) ? $context["subscribtions_url"] : null), "html", null, true);
        echo "\">Back to Subscriptions</a>
       ";
        // line 126
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
        return array (  214 => 126,  210 => 125,  200 => 118,  196 => 117,  192 => 116,  188 => 115,  184 => 114,  171 => 104,  158 => 94,  154 => 93,  133 => 75,  122 => 67,  111 => 59,  99 => 51,  89 => 45,  84 => 42,  77 => 40,  75 => 39,  68 => 34,  66 => 33,  59 => 30,  48 => 22,  37 => 14,  24 => 4,  19 => 1,);
    }
}
/* <div class="axisubs wrap subscription_details">*/
/*    <div class="axisubs-plan_details-header">*/
/*       <div class="axisubs-plan_details-title">*/
/*          <h3>{{ pagetitle }}</h3>*/
/*       </div>*/
/*       <div class="axisubs-plan_details-summary">*/
/*           <table class="table" border="1" border-color="#ddd">*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>*/
/*                   Subscription Id*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ subscriber['ID'] }}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>*/
/*                   Plan Name*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ planDetails['meta'][planDetails['ID']~'_axisubs_plans_name']}}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>*/
/*                   Plan Price*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ currencyData['code'] }}{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_price'] }}*/
/*                 </td>*/
/*               </tr>*/
/*               {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost']>0) %}*/
/*               <tr>*/
/*                 <td>*/
/*                   Setup cost*/
/*                 </td>*/
/*                 <td>*/
/*                   {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost']>0) %}*/
/*                   {{ currencyData['code'] }}{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost'] }}*/
/*                   {% endif %}*/
/*                 </td>*/
/*               </tr>*/
/*               {% endif %}*/
/*               {{ data['aditionalPrices'] | raw }}*/
/*               <tr>*/
/*                 <td>*/
/*                   Total Price*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ currencyData['code'] }}{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_total_price'] }}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>*/
/*                   Subscription Status*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ statusText | raw }}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>*/
/*                   Subscription start date*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_start_on'] }}*/
/*                 </td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>*/
/*                   Subscription end date*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_end_on'] }}*/
/*                 </td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*       </div>*/
/*    </div>*/
/*    <div class="axisubs-plan-billinfo-con">*/
/*       <div class="axisubs-plan_details-title">*/
/*          <h3>Billing Info</h3>*/
/*       </div>*/
/*       <div class="axisubs-plan_details-summary">*/
/*           <div class="axisubs-plan-billinfo-fields">*/
/*               <div class="axisubs-billinfo-f-i">*/
/*                  <span class="axisubs-billinfo-f-label">*/
/*                     Customer name :*/
/*                  </span>*/
/*                  <span class="axisubs-billinfo-f-field">*/
/*                     {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_first_name'] }}*/
/*                     {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_last_name'] }}*/
/*                  </span>*/
/*               </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-billinfo-fields">*/
/*               <div class="axisubs-billinfo-f-i">*/
/*                <span class="axisubs-billinfo-f-label">*/
/*                   Email :*/
/*                </span>*/
/*                <span class="axisubs-billinfo-f-field">*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_email'] }}*/
/*                </span>*/
/*               </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-billinfo-fields">*/
/*               <div class="axisubs-billinfo-f-i">*/
/*                <span class="axisubs-billinfo-f-label">*/
/*                   Address :*/
/*                </span>*/
/*                <span class="axisubs-billinfo-f-field">*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1'] }},*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line2'] }},*/
/*                   {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_city'] }},*/
/*                   {{ data['province'] }},*/
/*                   {{ data['country'] }}*/
/*                </span>*/
/*              </div>*/
/*            </div>*/
/*          </div>*/
/*      </div>*/
/*    <div>*/
/*       <a class="axisubs-btn btn" href="{{ subscribtions_url }}">Back to Subscriptions</a>*/
/*        {{ subscriber['additional_buttons'] | raw }}*/
/*    </div>*/
/* </div>*/
/* */

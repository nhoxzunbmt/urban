<?php

/* @Axisubs/Admin/subscription/edit.twig */
class __TwigTemplate_c8fc94a5db5429a01430b0d320e060a0b4e453bba6796cb9101168f68ac5c84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/subscription/edit.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Axisubs/Admin/tabs/tab.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"axisubs wrap\">
  ";
        // line 5
        if ((isset($context["pagetitle"]) ? $context["pagetitle"] : null)) {
            // line 6
            echo "  <h1 class=\"wp-heading-inline\">
    ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
            echo "
  </h1>
  ";
        }
        // line 10
        echo "
  ";
        // line 11
        $context["customer"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "customer", array(), "array");
        // line 12
        echo "  ";
        $context["customerMeta"] = $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "meta", array(), "array");
        // line 13
        echo "  ";
        $context["customerPrefix"] = ((($this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["customer"]) ? $context["customer"] : null), "post_type", array(), "array")) . "_");
        // line 14
        echo "  ";
        $context["subscription"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscription", array(), "array");
        // line 15
        echo "  ";
        $context["subscriptionMeta"] = $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array");
        // line 16
        echo "  ";
        $context["subscriptionPrefix"] = ((($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "post_type", array(), "array")) . "_");
        // line 17
        echo "  <form name=\"subscriptionForm\" id=\"subscriptionForm\" method=\"post\" action=\"?page=subscriptions-index&user_id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
        echo "\" onsubmit=\"return validatePlan();\">
    <h1 class=\"wp-heading-inline\">User Details</h1>
      <div class=\"axisubs-fields-con\">
         <div class=\"axisubs-fields\">
             <div class=\"axisubs-fields-label\">
                 <label>User Name</label>
             </div>
             <div class=\"axisubs-fields-content\">
                ";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "first_name"), array(), "array") . " ") . $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "last_name"), array(), "array")), "html", null, true);
        echo "
             </div>
         </div>
         <div class=\"axisubs-fields\">
             <div class=\"axisubs-fields-label\">
                <label>Email</label>
             </div>
             <div class=\"axisubs-fields-content\">
                 ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "email"), array(), "array"), "html", null, true);
        echo "
             </div>
         </div>
      </div>
      <h1 class=\"wp-heading-inline\">Subscription Details</h1>
      <div class=\"axisubs-fields-con\">
          <div class=\"axisubs-fields\">
              <div class=\"axisubs-fields-label\">
                  <label for=\"axisub_plan_name\">Plan</label>
              </div>
              <div class=\"axisubs-fields-content\">
                  ";
        // line 44
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "planSelectbox", array(), "array");
        echo "
              </div>
          </div>
          <div class=\"axisubs-fields\">
              <div class=\"axisubs-fields-label\">
                  <label for=\"subscribe_start_on\">Start Date</label>
              </div>
              <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"axisubs_date\" name=\"subscribe_start_on\" id=\"subscribe_start_on\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "start_on"), array(), "array"), "html", null, true);
        echo "\"/>
                  <span class=\"help-text\">Specify this if you want to start this subscription at a future date. Further if the selected plan has 'Trial' period configured it will go into 'Trial' state when it starts on the above specified date.</span>
              </div>
          </div>
          <div class=\"autopopulate_fields\">
              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_trial_start_on\">Trial starts on</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_trial_start_on\" id=\"subscribe_trial_start_on\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "trial_start_on"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>
              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_trial_ends_on\">Trial ends on</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_trial_ends_on\" id=\"subscribe_trial_ends_on\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "trial_end_on"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>
              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_start_on1\">Subscription start on</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_start_on1\" id=\"subscribe_start_on1\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "start_on"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>
              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_end_on\">Subscription ends on</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_end_on\" id=\"subscribe_end_on\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "end_on"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>

              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_price\">Price</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_price\" id=\"subscribe_price\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "price"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>
              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_setup_cost\">Setup cost</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_setup_cost\" id=\"subscribe_setup_cost\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "setup_cost"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>
              <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                      <label for=\"subscribe_total\">Total</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                      <input type=\"text\" disabled=\"disabled\" name=\"subscribe_total\" id=\"subscribe_total\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "total_price"), array(), "array"), "html", null, true);
        echo "\"/>
                  </div>
              </div>
          </div>
          <div class=\"axisubs-fields\">
              <div class=\"axisubs-fields-label\">
                  <input type=\"hidden\" name=\"task\" value=\"addNewSubscription\"/>
                  <input type=\"hidden\" name=\"sid\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "ID", array(), "array"), "html", null, true);
        echo "\"/>
              </div>
              <div class=\"axisubs-fields-content\">
                  <button class=\"button button-primary\" type=\"button\" onclick=\"addNewSubscription()\">Save</button>
                  <a class=\"button\" href=\"?page=subscriptions-index\">Cancel</a>
              </div>
          </div>
      </div>
      <input type=\"hidden\" id=\"site_url\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\"/>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/subscription/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 126,  203 => 118,  193 => 111,  182 => 103,  171 => 95,  159 => 86,  148 => 78,  137 => 70,  126 => 62,  113 => 52,  102 => 44,  88 => 33,  77 => 25,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap">*/
/*   {% if pagetitle %}*/
/*   <h1 class="wp-heading-inline">*/
/*     {{ pagetitle }}*/
/*   </h1>*/
/*   {% endif %}*/
/* */
/*   {% set customer = data['customer'] %}*/
/*   {% set customerMeta = customer['meta'] %}*/
/*   {% set customerPrefix = customer['ID']~'_'~customer['post_type']~'_' %}*/
/*   {% set subscription = data['subscription'] %}*/
/*   {% set subscriptionMeta = subscription['meta'] %}*/
/*   {% set subscriptionPrefix = subscription['ID']~'_'~subscription['post_type']~'_' %}*/
/*   <form name="subscriptionForm" id="subscriptionForm" method="post" action="?page=subscriptions-index&user_id={{ customerMeta[customerPrefix~'user_id'] }}" onsubmit="return validatePlan();">*/
/*     <h1 class="wp-heading-inline">User Details</h1>*/
/*       <div class="axisubs-fields-con">*/
/*          <div class="axisubs-fields">*/
/*              <div class="axisubs-fields-label">*/
/*                  <label>User Name</label>*/
/*              </div>*/
/*              <div class="axisubs-fields-content">*/
/*                 {{ customerMeta[customerPrefix~'first_name']~' '~customerMeta[customerPrefix~'last_name'] }}*/
/*              </div>*/
/*          </div>*/
/*          <div class="axisubs-fields">*/
/*              <div class="axisubs-fields-label">*/
/*                 <label>Email</label>*/
/*              </div>*/
/*              <div class="axisubs-fields-content">*/
/*                  {{ customerMeta[customerPrefix~'email'] }}*/
/*              </div>*/
/*          </div>*/
/*       </div>*/
/*       <h1 class="wp-heading-inline">Subscription Details</h1>*/
/*       <div class="axisubs-fields-con">*/
/*           <div class="axisubs-fields">*/
/*               <div class="axisubs-fields-label">*/
/*                   <label for="axisub_plan_name">Plan</label>*/
/*               </div>*/
/*               <div class="axisubs-fields-content">*/
/*                   {{ data['planSelectbox'] | raw }}*/
/*               </div>*/
/*           </div>*/
/*           <div class="axisubs-fields">*/
/*               <div class="axisubs-fields-label">*/
/*                   <label for="subscribe_start_on">Start Date</label>*/
/*               </div>*/
/*               <div class="axisubs-fields-content">*/
/*                   <input type="text" class="axisubs_date" name="subscribe_start_on" id="subscribe_start_on" value="{{ subscriptionMeta[subscriptionPrefix~'start_on'] }}"/>*/
/*                   <span class="help-text">Specify this if you want to start this subscription at a future date. Further if the selected plan has 'Trial' period configured it will go into 'Trial' state when it starts on the above specified date.</span>*/
/*               </div>*/
/*           </div>*/
/*           <div class="autopopulate_fields">*/
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_trial_start_on">Trial starts on</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_trial_start_on" id="subscribe_trial_start_on" value="{{ subscriptionMeta[subscriptionPrefix~'trial_start_on'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_trial_ends_on">Trial ends on</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_trial_ends_on" id="subscribe_trial_ends_on" value="{{ subscriptionMeta[subscriptionPrefix~'trial_end_on'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_start_on1">Subscription start on</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_start_on1" id="subscribe_start_on1" value="{{ subscriptionMeta[subscriptionPrefix~'start_on'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_end_on">Subscription ends on</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_end_on" id="subscribe_end_on" value="{{ subscriptionMeta[subscriptionPrefix~'end_on'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/* */
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_price">Price</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_price" id="subscribe_price" value="{{ subscriptionMeta[subscriptionPrefix~'price'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_setup_cost">Setup cost</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_setup_cost" id="subscribe_setup_cost" value="{{ subscriptionMeta[subscriptionPrefix~'setup_cost'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/*               <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                       <label for="subscribe_total">Total</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                       <input type="text" disabled="disabled" name="subscribe_total" id="subscribe_total" value="{{ subscriptionMeta[subscriptionPrefix~'total_price'] }}"/>*/
/*                   </div>*/
/*               </div>*/
/*           </div>*/
/*           <div class="axisubs-fields">*/
/*               <div class="axisubs-fields-label">*/
/*                   <input type="hidden" name="task" value="addNewSubscription"/>*/
/*                   <input type="hidden" name="sid" value="{{ subscription['ID'] }}"/>*/
/*               </div>*/
/*               <div class="axisubs-fields-content">*/
/*                   <button class="button button-primary" type="button" onclick="addNewSubscription()">Save</button>*/
/*                   <a class="button" href="?page=subscriptions-index">Cancel</a>*/
/*               </div>*/
/*           </div>*/
/*       </div>*/
/*       <input type="hidden" id="site_url" value="{{ site_url }}"/>*/
/*   </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

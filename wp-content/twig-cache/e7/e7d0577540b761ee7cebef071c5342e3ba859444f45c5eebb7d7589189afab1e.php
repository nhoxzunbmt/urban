<?php

/* @Axisubs/Site/mailtemplates/payment_canceled.twig */
class __TwigTemplate_1013bcd85c7180bf933f82d0c495b89a4a6ed3baaf012d9f559334b6a3183047 extends Twig_Template
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
        $context["subscription"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscription", array(), "array");
        // line 2
        $context["subscriptionMeta"] = $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array");
        // line 3
        $context["subscriptionPrefix"] = ((($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "post_type", array(), "array")) . "_");
        // line 4
        $context["plan"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan", array(), "array");
        // line 5
        $context["planMeta"] = $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "meta", array(), "array");
        // line 6
        $context["planPrefix"] = ((($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "post_type", array(), "array")) . "_");
        // line 7
        echo "
<div class=\"axisubs wrap\">
    Dear ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "first_name"), array(), "array"), "html", null, true);
        echo "<br><br>
    Your payment for the subscription plan: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "name"), array(), "array"), "html", null, true);
        echo " is canceled.<br><br>
    Thank you
</div>";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/mailtemplates/payment_canceled.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set subscription = data['subscription'] %}*/
/* {% set subscriptionMeta = subscription['meta'] %}*/
/* {% set subscriptionPrefix = subscription['ID']~'_'~subscription['post_type']~'_' %}*/
/* {% set plan = data['plan'] %}*/
/* {% set planMeta = plan['meta'] %}*/
/* {% set planPrefix = plan['ID']~'_'~plan['post_type']~'_' %}*/
/* */
/* <div class="axisubs wrap">*/
/*     Dear {{ subscriptionMeta[subscriptionPrefix~'first_name'] }}<br><br>*/
/*     Your payment for the subscription plan: {{ planMeta[planPrefix~'name'] }} is canceled.<br><br>*/
/*     Thank you*/
/* </div>*/

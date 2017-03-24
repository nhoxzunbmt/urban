<?php

/* @AxisubsAppCoupon/Site/Subscription/price.twig */
class __TwigTemplate_3ba3fe7fd7831463a46833127a3d0a721a7c34bb61fdbeaf1187582ed033c85a extends Twig_Template
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
        $context["subscriptionPrefix"] = ((($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "post_type", array(), "array")) . "_");
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "discount"), array(), "array") > 0)) {
            // line 3
            echo "    <tr>
        <td>
            Discount
        </td>
        <td>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "discount"), array(), "array"), "html", null, true);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "@AxisubsAppCoupon/Site/Subscription/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set subscriptionPrefix = subscription['ID']~'_'~subscription['post_type']~'_' %}*/
/* {% if(subscription['meta'][subscriptionPrefix~'discount']>0) %}*/
/*     <tr>*/
/*         <td>*/
/*             Discount*/
/*         </td>*/
/*         <td>*/
/*             {{ data['currencyData']['code'] }}{{ subscription['meta'][subscriptionPrefix~'discount'] }}*/
/*         </td>*/
/*     </tr>*/
/* {% endif %}*/

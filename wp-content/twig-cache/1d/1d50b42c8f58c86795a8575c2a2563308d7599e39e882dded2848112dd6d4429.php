<?php

/* @Axisubs/Site/plans/plan_price.twig */
class __TwigTemplate_711162bd2105b30fbcb0a27b03f3b53434962e20b19d1db360044e4820383254 extends Twig_Template
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
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . (isset($context["plan_price"]) ? $context["plan_price"] : null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/plans/plan_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ currencyData['code']~plan_price }}*/
/* */

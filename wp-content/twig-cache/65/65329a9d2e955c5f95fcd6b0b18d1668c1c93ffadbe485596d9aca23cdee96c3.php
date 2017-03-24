<?php

/* @Axisubs/Site/plans/subscribe_button.twig */
class __TwigTemplate_fe411a5634064399ba7a5bdfe2ae60bde358d09a262e4c201fe0be2d434e9a2f extends Twig_Template
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
        echo "<a class=\"axisubs-btn\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["plan_url"]) ? $context["plan_url"] : null), "html", null, true);
        echo "\">Subscribe</a>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/plans/subscribe_button.twig";
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
/* <a class="axisubs-btn" href="{{ plan_url }}">Subscribe</a>*/
/* */

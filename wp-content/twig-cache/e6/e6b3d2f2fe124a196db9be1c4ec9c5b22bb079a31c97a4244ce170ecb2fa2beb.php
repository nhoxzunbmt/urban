<?php

/* @Axisubs/Site/plans/plan_image.twig */
class __TwigTemplate_606ae3bbfa73d9619e8ab775caaaa9e3328f116bf2b3951a666bd2f96bc4d17d extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["plan_image"]) ? $context["plan_image"] : null), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/plans/plan_image.twig";
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
/* <img src="{{ plan_image }}" />*/
/* */

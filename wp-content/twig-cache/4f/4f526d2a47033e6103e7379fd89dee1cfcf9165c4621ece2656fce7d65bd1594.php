<?php

/* @Axisubs/Site/plans/subscribe_button.twig */
class __TwigTemplate_d86d087e317a18c7810d36075ded54de270ce70105a8ff7ce64b6bbd11d36833 extends Twig_Template
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
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscribe_btn_text", array(), "array"), "html", null, true);
        echo "</a>
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
/* <a class="axisubs-btn" href="{{ plan_url }}">{{ data['subscribe_btn_text'] }}</a>*/
/* */

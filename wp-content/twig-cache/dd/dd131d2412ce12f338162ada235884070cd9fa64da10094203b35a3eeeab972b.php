<?php

/* @Axisubs/Site/subscribed/success.twig */
class __TwigTemplate_412373727d8c29a0af742fb09d7bb14dea6c50db35013f541f57e97ef7f79cfd extends Twig_Template
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
        echo "<div class=\"axisubs wrap\">
    <div class=\"axisubs-subscribed-title\">
    </div>
    ";
        // line 4
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
    <div class=\"axisubs-subscribed-con\">
        <a class=\"success-link\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["subscribtions_url"]) ? $context["subscribtions_url"] : null), "html", null, true);
        echo "\">Click here to view subscriptions</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/subscribed/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     <div class="axisubs-subscribed-title">*/
/*     </div>*/
/*     {{ message | raw }}*/
/*     <div class="axisubs-subscribed-con">*/
/*         <a class="success-link" href="{{ subscribtions_url }}">Click here to view subscriptions</a>*/
/*     </div>*/
/* </div>*/

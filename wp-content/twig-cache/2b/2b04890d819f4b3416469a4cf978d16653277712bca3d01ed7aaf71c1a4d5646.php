<?php

/* @Axisubs/Site/subscribed/success.twig */
class __TwigTemplate_402402d6f6614e1801cac44830fc049d61d470eff9e018fe2138e74421b1ccef extends Twig_Template
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
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("[:ru]Перейти к списку подписок[:ro]Înapoi la lista de abonare")), "html", null, true);
        echo "</a>
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
/*         <a class="success-link" href="{{ subscribtions_url }}">{{__('[:ru]Перейти к списку подписок[:ro]Înapoi la lista de abonare')}}</a>*/
/*     </div>*/
/* </div>*/

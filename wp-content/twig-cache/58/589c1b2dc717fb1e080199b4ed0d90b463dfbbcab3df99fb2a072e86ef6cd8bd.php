<?php

/* @AxisubsAppPaypal/Admin/tabs/tab.twig */
class __TwigTemplate_c9bbac23436602b9ee79557a2f87695083144cfaf58976077fc273d24e5e8d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "</head>
<body>
    <div class=\"axisubs-block wrap\">
        <header class=\"\">
            ";
        // line 10
        $this->loadTemplate("@Axisubs/Admin/header/header.twig", "@AxisubsAppPaypal/Admin/tabs/tab.twig", 10)->display($context);
        // line 11
        echo "        </header>
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"\">
                    <div id=\"content\">
                        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "                    </div>
                </div>
                ";
        // line 20
        echo "                    ";
        // line 21
        echo "                    ";
        // line 22
        echo "                        ";
        // line 23
        echo "                    ";
        // line 24
        echo "                ";
        // line 25
        echo "            </div>
        </div>
        <div id=\"footer\">
            ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        </div>
    </div>
</body>
</html>
";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@AxisubsAppPaypal/Admin/tabs/tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  87 => 28,  82 => 16,  78 => 5,  75 => 4,  67 => 31,  65 => 28,  60 => 25,  58 => 24,  56 => 23,  54 => 22,  52 => 21,  50 => 20,  46 => 17,  44 => 16,  37 => 11,  35 => 10,  29 => 6,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     <div class="axisubs-block wrap">*/
/*         <header class="">*/
/*             {% include '@Axisubs/Admin/header/header.twig' %}*/
/*         </header>*/
/*         <div class="container-fluid">*/
/*             <div class="row-fluid">*/
/*                 <div class="">*/
/*                     <div id="content">*/
/*                         {% block body %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*                 {#<div class="col-md-4">#}*/
/*                     {#{% include '@Axisubs/Admin/extras/support.twig' %}#}*/
/*                     {#<div class="axisubs-promo-slidebar">#}*/
/*                         {#<iframe src="http://demo.flycart.org/updates/axisubs-wp.html" width="300" height="800"></iframe>#}*/
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/*             </div>*/
/*         </div>*/
/*         <div id="footer">*/
/*             {% block footer %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */

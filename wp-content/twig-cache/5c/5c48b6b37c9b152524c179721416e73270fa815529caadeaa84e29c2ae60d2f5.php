<?php

/* @Axisubs/Admin/tabs/tab.twig */
class __TwigTemplate_d463b96a5790a8e75cb3501e4e337c745a8f361b8894807c75b25f13b3af92d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_content' => array($this, 'block_header_content'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"axisubs-block wrap\">
    <header class=\"\">
        ";
        // line 3
        $this->loadTemplate("@Axisubs/Admin/header/header.twig", "@Axisubs/Admin/tabs/tab.twig", 3)->display($context);
        // line 4
        echo "    </header>
    <div class=\"header_content\">
        ";
        // line 6
        $this->displayBlock('header_content', $context, $blocks);
        // line 8
        echo "    </div>
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"\">
                <div id=\"content\">
                    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "                </div>
            </div>
            ";
        // line 17
        echo "                ";
        // line 18
        echo "                ";
        // line 19
        echo "                    ";
        // line 20
        echo "                ";
        // line 21
        echo "            ";
        // line 22
        echo "        </div>
    </div>
    <div id=\"footer\">
        ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "    </div>
</div>";
    }

    // line 6
    public function block_header_content($context, array $blocks = array())
    {
        // line 7
        echo "        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/tabs/tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 25,  76 => 13,  72 => 7,  69 => 6,  64 => 28,  62 => 25,  57 => 22,  55 => 21,  53 => 20,  51 => 19,  49 => 18,  47 => 17,  43 => 14,  41 => 13,  34 => 8,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="axisubs-block wrap">*/
/*     <header class="">*/
/*         {% include '@Axisubs/Admin/header/header.twig' %}*/
/*     </header>*/
/*     <div class="header_content">*/
/*         {% block header_content %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*             <div class="">*/
/*                 <div id="content">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             {#<div class="col-md-4">#}*/
/*                 {#{% include '@Axisubs/Admin/extras/support.twig' %}#}*/
/*                 {#<div class="axisubs-promo-slidebar">#}*/
/*                     {#<iframe src="http://demo.flycart.org/updates/axisubs-wp.html" width="300" height="800"></iframe>#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         </div>*/
/*     </div>*/
/*     <div id="footer">*/
/*         {% block footer %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/

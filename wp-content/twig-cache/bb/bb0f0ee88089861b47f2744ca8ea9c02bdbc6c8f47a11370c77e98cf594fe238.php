<?php

/* @Axisubs/Admin/Tax/edit.twig */
class __TwigTemplate_4ced003de8b783a2e8fba966535de3f625931d12c3534a71e6949ff52891dd39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/Tax/edit.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Axisubs/Admin/tabs/tab.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"axisubs wrap\">
    <h1 class=\"wp-heading-inline\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
    <form method=\"post\" id=\"tax_form\" action=\"?page=tax-index\">
        <div class=\"axisubs-fields-con\">
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_tax_tax_rate_name\">Tax Name</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[tax][tax_rate_name]\" id=\"axisub_tax_tax_rate_name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tax_rate_name", array(), "array"), "html", null, true);
        echo "\"/>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisubs_tax_tax_rate_country\">Country</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    ";
        // line 21
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array");
        echo "
                    <span class=\"help-text\"></span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisubs_tax_tax_rate_state\">Province</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    ";
        // line 30
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array");
        echo "
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_tax_tax_rate\">Tax Rate (%)</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[tax][tax_rate]\" id=\"axisub_tax_tax_rate\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tax_rate", array(), "array"), "html", null, true);
        echo "\"/>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "axisubs_taxrate_id", array(), "array"), "html", null, true);
        echo "\" id=\"tax_id\"/>
                    <input type=\"hidden\" name=\"task\" value=\"save\"/>
                    <input type=\"hidden\" name=\"site_url\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\" id=\"site_url\"/>
                </div>
                <div class=\"axisubs-fields-content page-btn\">
                    <button type=\"button\" onclick=\"validateTaxForm()\" class=\"btn page-title-action\">Save</button>
                    <a href=\"?page=tax-index\" class=\"btn page-title-action\">Cancel</a>
                </div>
            </div>
        </div>
     </form>
</div>
<script type=\"application/javascript\">
    // For validating Form
    function validateTaxForm(){
        (function(\$){
            var valid = validateRequiredFields('#tax_form');
            if(valid){
                \$('#tax_form').submit();
            }
        })(axisubs.jQuery);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/Tax/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 45,  87 => 43,  79 => 38,  68 => 30,  56 => 21,  45 => 13,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap">*/
/*     <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*     <form method="post" id="tax_form" action="?page=tax-index">*/
/*         <div class="axisubs-fields-con">*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_tax_tax_rate_name">Tax Name</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[tax][tax_rate_name]" id="axisub_tax_tax_rate_name" value="{{ item['tax_rate_name'] }}"/>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisubs_tax_tax_rate_country">Country</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     {{ data['country'] | raw }}*/
/*                     <span class="help-text"></span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisubs_tax_tax_rate_state">Province</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     {{ data['province'] | raw }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_tax_tax_rate">Tax Rate (%)</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[tax][tax_rate]" id="axisub_tax_tax_rate" value="{{ item['tax_rate'] }}"/>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <input type="hidden" name="id" value="{{ item['axisubs_taxrate_id'] }}" id="tax_id"/>*/
/*                     <input type="hidden" name="task" value="save"/>*/
/*                     <input type="hidden" name="site_url" value="{{ site_url }}" id="site_url"/>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content page-btn">*/
/*                     <button type="button" onclick="validateTaxForm()" class="btn page-title-action">Save</button>*/
/*                     <a href="?page=tax-index" class="btn page-title-action">Cancel</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*      </form>*/
/* </div>*/
/* <script type="application/javascript">*/
/*     // For validating Form*/
/*     function validateTaxForm(){*/
/*         (function($){*/
/*             var valid = validateRequiredFields('#tax_form');*/
/*             if(valid){*/
/*                 $('#tax_form').submit();*/
/*             }*/
/*         })(axisubs.jQuery);*/
/*     }*/
/* </script>*/
/* {% endblock %}*/
/* */

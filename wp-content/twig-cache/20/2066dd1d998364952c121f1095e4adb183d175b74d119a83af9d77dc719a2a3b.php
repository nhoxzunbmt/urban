<?php

/* @Axisubs/Admin/Tax/subscribed_tax_price.twig */
class __TwigTemplate_21eb73ebcbdf83847f2d6182d64365f5e1d2c44424f5522743da33d64973cbc4 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "tax_total"), array(), "array") > 0)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tax_details", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["tax_detail"]) {
                // line 4
                echo "        <div class=\"axisubs-fields\">
            <div class=\"subscription-label\">
                <strong>
                    ";
                // line 7
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["tax_detail"], "label", array()) . " (") . $this->getAttribute($context["tax_detail"], "rate", array())) . "%)"), "html", null, true);
                echo "
                </strong>
            </div>
            <div class=\"subscription-content\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["tax_detail"], "price", array()), "html", null, true);
                echo "
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tax_detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "discount_tax"), array(), "array") > 0)) {
                // line 17
                echo "        <div class=\"axisubs-fields\">
            <div class=\"subscription-label\">
                <strong>
                    Discount Tax
                </strong>
            </div>
            <div class=\"subscription-content\">
                ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "discount_tax"), array(), "array"), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            // line 28
            echo "    <div class=\"axisubs-fields\">
        <div class=\"subscription-label\">
            <strong>
                Total Tax
            </strong>
        </div>
        <div class=\"subscription-content\">
            ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "tax_total"), array(), "array"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/Tax/subscribed_tax_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  77 => 28,  69 => 24,  60 => 17,  57 => 16,  51 => 15,  41 => 11,  34 => 7,  29 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set subscriptionPrefix = subscription['ID']~'_'~subscription['post_type']~'_' %}*/
/* {% if(subscription['meta'][subscriptionPrefix~'tax_total']>0) %}*/
/*     {% for key, tax_detail in data['tax_details'] %}*/
/*         <div class="axisubs-fields">*/
/*             <div class="subscription-label">*/
/*                 <strong>*/
/*                     {{ tax_detail.label~' ('~tax_detail.rate~'%)' }}*/
/*                 </strong>*/
/*             </div>*/
/*             <div class="subscription-content">*/
/*                 {{ data['currencyData']['code'] }}{{ tax_detail.price }}*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*     {% endfor %}*/
/*     {% if(subscription['meta'][subscriptionPrefix~'discount_tax'] > 0) %}*/
/*         <div class="axisubs-fields">*/
/*             <div class="subscription-label">*/
/*                 <strong>*/
/*                     Discount Tax*/
/*                 </strong>*/
/*             </div>*/
/*             <div class="subscription-content">*/
/*                 {{ data['currencyData']['code'] }}{{ subscription['meta'][subscriptionPrefix~'discount_tax'] }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="axisubs-fields">*/
/*         <div class="subscription-label">*/
/*             <strong>*/
/*                 Total Tax*/
/*             </strong>*/
/*         </div>*/
/*         <div class="subscription-content">*/
/*             {{ data['currencyData']['code'] }}{{ subscription['meta'][subscriptionPrefix~'tax_total'] }}*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/

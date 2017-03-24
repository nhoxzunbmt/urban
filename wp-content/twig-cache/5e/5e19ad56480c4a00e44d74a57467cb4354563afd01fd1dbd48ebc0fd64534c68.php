<?php

/* @Axisubs/Site/tax/subscribed_tax_price.twig */
class __TwigTemplate_aca1b666e09f388e03b318de8270a9a12e93cfe55547f2642e55adcae7710444 extends Twig_Template
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
                echo "        <tr>
            <td>
                ";
                // line 6
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["tax_detail"], "label", array()) . " (") . $this->getAttribute($context["tax_detail"], "rate", array())) . "%)"), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["tax_detail"], "price", array()), "html", null, true);
                echo "
            </td>
        </tr>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 13
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tax_detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "discount_tax"), array(), "array") > 0)) {
                // line 15
                echo "        <tr>
            <td>
                Discount Tax
            </td>
            <td>
                ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "discount_tax"), array(), "array"), "html", null, true);
                echo "
            </td>
        </tr>
    ";
            }
            // line 24
            echo "    <tr>
        <td>
            Total Tax
        </td>
        <td>
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "meta", array(), "array"), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "tax_total"), array(), "array"), "html", null, true);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/tax/subscribed_tax_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  73 => 24,  65 => 20,  58 => 15,  55 => 14,  49 => 13,  39 => 9,  33 => 6,  29 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set subscriptionPrefix = subscription['ID']~'_'~subscription['post_type']~'_' %}*/
/* {% if(subscription['meta'][subscriptionPrefix~'tax_total']>0) %}*/
/*     {% for key, tax_detail in data['tax_details'] %}*/
/*         <tr>*/
/*             <td>*/
/*                 {{ tax_detail.label~' ('~tax_detail.rate~'%)' }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ data['currencyData']['code'] }}{{ tax_detail.price }}*/
/*             </td>*/
/*         </tr>*/
/*     {% else %}*/
/*     {% endfor %}*/
/*     {% if(subscription['meta'][subscriptionPrefix~'discount_tax'] > 0) %}*/
/*         <tr>*/
/*             <td>*/
/*                 Discount Tax*/
/*             </td>*/
/*             <td>*/
/*                 {{ data['currencyData']['code'] }}{{ subscription['meta'][subscriptionPrefix~'discount_tax'] }}*/
/*             </td>*/
/*         </tr>*/
/*     {% endif %}*/
/*     <tr>*/
/*         <td>*/
/*             Total Tax*/
/*         </td>*/
/*         <td>*/
/*             {{ data['currencyData']['code'] }}{{ subscription['meta'][subscriptionPrefix~'tax_total'] }}*/
/*         </td>*/
/*     </tr>*/
/* {% endif %}*/

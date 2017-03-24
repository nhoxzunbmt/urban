<?php

/* @Axisubs/Admin/customers/moresubscriptions.twig */
class __TwigTemplate_9b77adafae80e6c72ba5c773ba57beac7cdeea9d9c8646dc61a4027387f170c9 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "   ";
            $context["plan"] = $this->getAttribute($context["item"], "plan", array(), "array");
            // line 3
            echo "   ";
            $context["planMeta"] = $this->getAttribute($this->getAttribute($context["item"], "plan", array(), "array"), "meta", array(), "array");
            // line 4
            echo "   ";
            $context["meta"] = $this->getAttribute($context["item"], "meta", array(), "array");
            // line 5
            echo "   <div class=\"item\">
      <span class=\"transaction-history-text\">Plan Name: </span>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "
      <span class=\"transaction-history-text\">Price: </span>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array"), "html", null, true);
            echo "
      <span class=\"transaction-history-text\">Status: </span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array"), "html", null, true);
            echo "
   </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "   No data
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/customers/moresubscriptions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  44 => 8,  40 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* {% for item in items %}*/
/*    {% set plan = item['plan'] %}*/
/*    {% set planMeta = item['plan']['meta'] %}*/
/*    {% set meta = item['meta'] %}*/
/*    <div class="item">*/
/*       <span class="transaction-history-text">Plan Name: </span>{{ planMeta[plan['ID']~'_axisubs_plans_name'] }}*/
/*       <span class="transaction-history-text">Price: </span>{{ meta[item['ID']~'_axisubs_subscribe_total_price'] }}*/
/*       <span class="transaction-history-text">Status: </span>{{ meta[item['ID']~'_axisubs_subscribe_status'] }}*/
/*    </div>*/
/* {% else %}*/
/*    No data*/
/* {% endfor %}*/
/* */

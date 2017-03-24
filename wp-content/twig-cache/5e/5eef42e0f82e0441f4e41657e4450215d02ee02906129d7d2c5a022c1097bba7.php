<?php

/* @AxisubsAppContentRestriction/Admin/Fields/default.twig */
class __TwigTemplate_3ad54c8a0e59e7eb83b39f88f406b042cefbb6482fdf2565894e8d75564c93e1 extends Twig_Template
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
        echo "<div class=\"axisubs-fields-content\">
    <div class=\"axisubs-fields-label\">
        <label for=\"axisub_plans\">Subscription Plans
        </label>
    </div>
    ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["plans"]) ? $context["plans"] : null)) > 0)) {
            // line 7
            echo "    <select name=\"axisub_plans[]\" class=\"widget-hot-topics\" id=\"axisub_plans\" multiple size=\"5\">
        ";
            // line 8
            $context["add_roles"] = "";
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plans"]) ? $context["plans"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["plan"]) {
                // line 10
                echo "            ";
                $context["planMeta"] = $this->getAttribute($context["plan"], "meta", array(), "array");
                // line 11
                echo "            ";
                $context["planPrefix"] = ((($this->getAttribute($context["plan"], "ID", array(), "array") . "_") . $this->getAttribute($context["plan"], "post_type", array(), "array")) . "_");
                // line 12
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "ID", array(), "array"), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["plan"], "ID", array(), "array"), (isset($context["selected_plans"]) ? $context["selected_plans"] : null))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "name"), array(), "array"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </select>
    <span class=\"axisubs_cr_help-text\">Members subscribed to these Subscription plan(s) will be able to view this page.</span>
    ";
        } else {
            // line 17
            echo "        <span class=\"axisubs_cr_help-text\">You do not have any active Subscription Plans yet. Please create them <a href=\"admin.php?page=plans-index&task=edit\">Here</a>.</span>
    ";
        }
        // line 19
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@AxisubsAppContentRestriction/Admin/Fields/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  64 => 17,  59 => 14,  44 => 12,  41 => 11,  38 => 10,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="axisubs-fields-content">*/
/*     <div class="axisubs-fields-label">*/
/*         <label for="axisub_plans">Subscription Plans*/
/*         </label>*/
/*     </div>*/
/*     {% if plans|length > 0 %}*/
/*     <select name="axisub_plans[]" class="widget-hot-topics" id="axisub_plans" multiple size="5">*/
/*         {% set add_roles = '' %}*/
/*         {% for key, plan in plans %}*/
/*             {% set planMeta = plan['meta'] %}*/
/*             {% set planPrefix = plan['ID']~'_'~plan['post_type']~'_' %}*/
/*             <option value="{{ plan['ID'] }}" {% if plan['ID'] in selected_plans %} selected {% endif %}>{{ planMeta[planPrefix~'name'] }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/*     <span class="axisubs_cr_help-text">Members subscribed to these Subscription plan(s) will be able to view this page.</span>*/
/*     {% else %}*/
/*         <span class="axisubs_cr_help-text">You do not have any active Subscription Plans yet. Please create them <a href="admin.php?page=plans-index&task=edit">Here</a>.</span>*/
/*     {% endif %}*/
/* </div>*/

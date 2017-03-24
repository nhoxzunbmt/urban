<?php

/* @Axisubs/Admin/plan/types/recurring.twig */
class __TwigTemplate_9e46f8cdcec7bf4429a0f0217141e70ecca5e59a71ed36f24297b84cc9113f84 extends Twig_Template
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
        echo "<div class=\"axisubs-fields\">
    <div class=\"axisubs-fields-label\">
        <label for=\"axisub_plan_period\">Duration</label>
    </div>
    <div class=\"axisubs-fields-content\">
        <input type=\"text\" class=\"required\" name=\"axisubs[plans][period]\" id=\"axisub_plan_period\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_period"), array(), "array"), "html", null, true);
        echo "\"/>
        <select name=\"axisubs[plans][period_units]\" id=\"axisub_plan_period_units\">
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_period_units"), array(), "array") != "")) {
            // line 9
            echo "                ";
            $context["selectedPlanUnit"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_period_units"), array(), "array");
            // line 10
            echo "            ";
        } else {
            // line 11
            echo "                ";
            $context["selectedPlanUnit"] = "M";
            // line 12
            echo "            ";
        }
        // line 13
        echo "            <option value=\"D\" ";
        if (((isset($context["selectedPlanUnit"]) ? $context["selectedPlanUnit"] : null) == "D")) {
            echo " selected ";
        }
        echo ">Days</option>
            <option value=\"W\" ";
        // line 14
        if (((isset($context["selectedPlanUnit"]) ? $context["selectedPlanUnit"] : null) == "W")) {
            echo " selected ";
        }
        echo ">Weeks</option>
            <option value=\"M\" ";
        // line 15
        if (((isset($context["selectedPlanUnit"]) ? $context["selectedPlanUnit"] : null) == "M")) {
            echo " selected ";
        }
        echo ">Months</option>
            <option value=\"Y\" ";
        // line 16
        if (((isset($context["selectedPlanUnit"]) ? $context["selectedPlanUnit"] : null) == "Y")) {
            echo " selected ";
        }
        echo ">Years</option>
        </select>
    </div>
</div>

<div class=\"axisubs-fields\">
    <div class=\"axisubs-fields-label\">
        <label for=\"axisub_plan_price\">Price</label>
    </div>
    <div class=\"axisubs-fields-content\">
        <input type=\"text\" class=\"required\" name=\"axisubs[plans][price]\" id=\"axisub_plan_price\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_price"), array(), "array"), "html", null, true);
        echo "\"/>
        <span class=\"help-text\">Plan price</span>
    </div>
</div>

<div class=\"axisubs-fields\">
    <div class=\"axisubs-fields-label\">
        <label for=\"axisub_plan_billing_cycles\">Billing Cycle</label>
    </div>
    <div class=\"axisubs-fields-content\">
        <input type=\"text\" name=\"axisubs[plans][billing_cycles]\" id=\"axisub_plan_billing_cycles\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_billing_cycles"), array(), "array"), "html", null, true);
        echo "\"/>
        <span class=\"help-text\">No of times Subscription should Reoccur.</span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/plan/types/recurring.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  79 => 26,  64 => 16,  58 => 15,  52 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }
}
/* <div class="axisubs-fields">*/
/*     <div class="axisubs-fields-label">*/
/*         <label for="axisub_plan_period">Duration</label>*/
/*     </div>*/
/*     <div class="axisubs-fields-content">*/
/*         <input type="text" class="required" name="axisubs[plans][period]" id="axisub_plan_period" value="{{ item['meta'][item['ID']~'_axisubs_plans_period'] }}"/>*/
/*         <select name="axisubs[plans][period_units]" id="axisub_plan_period_units">*/
/*             {% if(item['meta'][item['ID']~'_axisubs_plans_period_units'] != '') %}*/
/*                 {% set selectedPlanUnit = item['meta'][item['ID']~'_axisubs_plans_period_units'] %}*/
/*             {% else %}*/
/*                 {% set selectedPlanUnit = 'M' %}*/
/*             {% endif %}*/
/*             <option value="D" {% if selectedPlanUnit == 'D' %} selected {% endif %}>Days</option>*/
/*             <option value="W" {% if selectedPlanUnit == 'W' %} selected {% endif %}>Weeks</option>*/
/*             <option value="M" {% if selectedPlanUnit == 'M' %} selected {% endif %}>Months</option>*/
/*             <option value="Y" {% if selectedPlanUnit == 'Y' %} selected {% endif %}>Years</option>*/
/*         </select>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="axisubs-fields">*/
/*     <div class="axisubs-fields-label">*/
/*         <label for="axisub_plan_price">Price</label>*/
/*     </div>*/
/*     <div class="axisubs-fields-content">*/
/*         <input type="text" class="required" name="axisubs[plans][price]" id="axisub_plan_price" value="{{ item['meta'][item['ID']~'_axisubs_plans_price'] }}"/>*/
/*         <span class="help-text">Plan price</span>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="axisubs-fields">*/
/*     <div class="axisubs-fields-label">*/
/*         <label for="axisub_plan_billing_cycles">Billing Cycle</label>*/
/*     </div>*/
/*     <div class="axisubs-fields-content">*/
/*         <input type="text" name="axisubs[plans][billing_cycles]" id="axisub_plan_billing_cycles" value="{{ item['meta'][item['ID']~'_axisubs_plans_billing_cycles'] }}"/>*/
/*         <span class="help-text">No of times Subscription should Reoccur.</span>*/
/*     </div>*/
/* </div>*/

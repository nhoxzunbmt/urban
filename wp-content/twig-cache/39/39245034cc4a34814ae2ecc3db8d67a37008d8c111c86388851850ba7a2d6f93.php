<?php

/* @Axisubs/Admin/plan/types/free.twig */
class __TwigTemplate_0eadd0897715afb229c9a89fa474a3c545cb2f62fa52f9ea3e88396a03311086 extends Twig_Template
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
        <input type=\"checkbox\" name=\"axisubs[plans][period_forever]\" id=\"axisub_plan_period_forever\" value=\"1\" ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_period_forever"), array(), "array") == "1")) {
            echo " checked ";
        }
        echo "/>
        <label for=\"axisub_plan_period_forever\">Forever</label>
    </div>
</div>

";
        // line 24
        echo "    ";
        // line 25
        echo "        ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "        ";
        // line 29
        echo "            ";
        // line 30
        echo "            ";
        // line 31
        echo "            ";
        // line 32
        echo "            ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/plan/types/free.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  101 => 34,  99 => 33,  97 => 32,  95 => 31,  93 => 30,  91 => 29,  89 => 28,  87 => 27,  85 => 26,  83 => 25,  81 => 24,  71 => 18,  64 => 16,  58 => 15,  52 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  26 => 6,  19 => 1,);
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
/*         <input type="checkbox" name="axisubs[plans][period_forever]" id="axisub_plan_period_forever" value="1" {% if item['meta'][item['ID']~'_axisubs_plans_period_forever'] == '1' %} checked {% endif %}/>*/
/*         <label for="axisub_plan_period_forever">Forever</label>*/
/*     </div>*/
/* </div>*/
/* */
/* {#<div class="axisubs-fields">#}*/
/*     {#<div class="axisubs-fields-label">#}*/
/*         {#<label for="axisub_plan_period">Units of Duration</label>#}*/
/*     {#</div>#}*/
/*     {#<div class="axisubs-fields-content">#}*/
/*         {#<select name="axisubs[plans][period_units]" id="axisub_plan_period_units">#}*/
/*             {#<option value="D" {% if item['meta'][item['ID']~'_axisubs_plans_period_units'] == 'D' %} selected {% endif %}>Days</option>#}*/
/*             {#<option value="W" {% if item['meta'][item['ID']~'_axisubs_plans_period_units'] == 'W' %} selected {% endif %}>Weeks</option>#}*/
/*             {#<option value="M" {% if item['meta'][item['ID']~'_axisubs_plans_period_units'] == 'M' %} selected {% endif %}>Months</option>#}*/
/*             {#<option value="Y" {% if item['meta'][item['ID']~'_axisubs_plans_period_units'] == 'Y' %} selected {% endif %}>Years</option>#}*/
/*         {#</select>#}*/
/*         {#<span class="help-text">Regular subscription units of duration.</span>#}*/
/*     {#</div>#}*/
/* {#</div>#}*/

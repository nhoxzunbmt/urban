<?php

/* @Axisubs/Site/plans/list.twig */
class __TwigTemplate_af227142b2b1695cb921a7fdde8c044905a86e9048ad8077935533a60de3b25f extends Twig_Template
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
    ";
        // line 2
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
    <form method=\"post\" action=\"?p_id=1\">
        <div class=\"axisubs-plans\">
            <div class=\"axisubs-plans-lists\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                    <div class=\"axisubs-plans-con\">
                        <div class=\"axisubs-plans-con-i\">
                            <div class=\"axisubs-plan-title\">
                                <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "</h3>
                                <span class=\"axisubs-price-text\">
                                    ";
            // line 12
            if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_price"), array(), "array") > 0)) {
                // line 13
                echo "                                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_price"), array(), "array")), "html", null, true);
                echo "
                                    ";
            } else {
                // line 15
                echo "                                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . "0"), "html", null, true);
                echo "
                                    ";
            }
            // line 17
            echo "                                </span>
                            </div>
                            ";
            // line 19
            if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_setup_cost"), array(), "array") > 0)) {
                // line 20
                echo "                                <div class=\"axisubs-plans-setup_cost\">
                                    <div><span class=\"axisubs-plans-label-block\">Setup cost: </span><span class=\"axisubs-plans-text\">";
                // line 21
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_setup_cost"), array(), "array")), "html", null, true);
                echo "</span></div>
                                </div>
                            ";
            }
            // line 24
            echo "                            ";
            echo $this->getAttribute($context["item"], "tax_info_html", array(), "array");
            echo "
                            ";
            // line 25
            $context["type"] = $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_type"), array(), "array");
            // line 26
            echo "                            ";
            if ((((isset($context["type"]) ? $context["type"] : null) == "renewal_with_trial") || ((isset($context["type"]) ? $context["type"] : null) == "recurring_with_trial"))) {
                // line 27
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_trial_period"), array(), "array") > 0)) {
                    // line 28
                    echo "                                <div class=\"axisubs-plans-duration\">
                                    <div><span class=\"axisubs-plans-label-block\">Trial Duration: </span>
                                        <span class=\"axisubs-plans-text\">
                                            ";
                    // line 31
                    $context["trial_periodUnit"] = $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_trial_period_units"), array(), "array");
                    // line 32
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_trial_period"), array(), "array"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unitInWords"]) ? $context["unitInWords"] : null), (isset($context["trial_periodUnit"]) ? $context["trial_periodUnit"] : null), array(), "array"), "html", null, true);
                    echo "
                                        </span>
                                    </div>
                                </div>
                                ";
                }
                // line 37
                echo "                            ";
            }
            // line 38
            echo "                            <div class=\"axisubs-plans-duration\">
                                <div><span class=\"axisubs-plans-label-block\">Duration: </span>
                                    <span class=\"axisubs-plans-text\">
                                    ";
            // line 41
            if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_period"), array(), "array") > 0)) {
                // line 42
                echo "                                        ";
                $context["periodUnit"] = $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_period_units"), array(), "array");
                // line 43
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_period"), array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unitInWords"]) ? $context["unitInWords"] : null), (isset($context["periodUnit"]) ? $context["periodUnit"] : null), array(), "array"), "html", null, true);
                echo "
                                    ";
            } else {
                // line 45
                echo "                                        Forever
                                    ";
            }
            // line 47
            echo "                                    </span>
                                </div>
                            </div>
                            <div class=\"axisubs-plans-description\">
                                <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_description"), array(), "array"), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"axisubs-plans-duration\">
                                <a class=\"axisubs-btn\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "plan_url", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscribe_btn_text", array(), "array"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                    <div class=\"row\">
                        No plans available.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/plans/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 63,  153 => 59,  141 => 54,  135 => 51,  129 => 47,  125 => 45,  117 => 43,  114 => 42,  112 => 41,  107 => 38,  104 => 37,  93 => 32,  91 => 31,  86 => 28,  83 => 27,  80 => 26,  78 => 25,  73 => 24,  67 => 21,  64 => 20,  62 => 19,  58 => 17,  52 => 15,  46 => 13,  44 => 12,  39 => 10,  34 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     {{ message | raw }}*/
/*     <form method="post" action="?p_id=1">*/
/*         <div class="axisubs-plans">*/
/*             <div class="axisubs-plans-lists">*/
/*                 {% for item in items %}*/
/*                     <div class="axisubs-plans-con">*/
/*                         <div class="axisubs-plans-con-i">*/
/*                             <div class="axisubs-plan-title">*/
/*                                 <h3>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</h3>*/
/*                                 <span class="axisubs-price-text">*/
/*                                     {% if item['meta'][item['ID']~'_axisubs_plans_price'] > 0 %}*/
/*                                         {{ currencyData['code']~item['meta'][item['ID']~'_axisubs_plans_price'] }}*/
/*                                     {% else %}*/
/*                                         {{ currencyData['code']~'0' }}*/
/*                                     {% endif %}*/
/*                                 </span>*/
/*                             </div>*/
/*                             {% if item['meta'][item['ID']~'_axisubs_plans_setup_cost'] > 0 %}*/
/*                                 <div class="axisubs-plans-setup_cost">*/
/*                                     <div><span class="axisubs-plans-label-block">Setup cost: </span><span class="axisubs-plans-text">{{ currencyData['code']~item['meta'][item['ID']~'_axisubs_plans_setup_cost'] }}</span></div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {{ item['tax_info_html'] | raw }}*/
/*                             {% set type = item['meta'][item['ID']~'_axisubs_plans_type'] %}*/
/*                             {% if (type == 'renewal_with_trial' or type == 'recurring_with_trial') %}*/
/*                                 {% if item['meta'][item['ID']~'_axisubs_plans_trial_period'] > 0 %}*/
/*                                 <div class="axisubs-plans-duration">*/
/*                                     <div><span class="axisubs-plans-label-block">Trial Duration: </span>*/
/*                                         <span class="axisubs-plans-text">*/
/*                                             {% set trial_periodUnit = item['meta'][item['ID']~'_axisubs_plans_trial_period_units'] %}*/
/*                                             {{ item['meta'][item['ID']~'_axisubs_plans_trial_period'] }} {{ unitInWords[trial_periodUnit] }}*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                             <div class="axisubs-plans-duration">*/
/*                                 <div><span class="axisubs-plans-label-block">Duration: </span>*/
/*                                     <span class="axisubs-plans-text">*/
/*                                     {% if item['meta'][item['ID']~'_axisubs_plans_period'] > 0 %}*/
/*                                         {% set periodUnit = item['meta'][item['ID']~'_axisubs_plans_period_units'] %}*/
/*                                         {{ item['meta'][item['ID']~'_axisubs_plans_period'] }} {{ unitInWords[periodUnit] }}*/
/*                                     {% else %}*/
/*                                         Forever*/
/*                                     {% endif %}*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-plans-description">*/
/*                                 <p>{{ item['meta'][item['ID']~'_axisubs_plans_description'] }}</p>*/
/*                             </div>*/
/*                             <div class="axisubs-plans-duration">*/
/*                                 <a class="axisubs-btn" href="{{ item['plan_url'] }}">{{ data['subscribe_btn_text'] }}</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="row">*/
/*                         No plans available.*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */

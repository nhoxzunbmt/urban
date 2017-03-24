<?php

/* @Axisubs/Admin/plans/list.twig */
class __TwigTemplate_bb471fa0136f14aa4bdf190d70821f8f4fa3349312f4299659a0a2967dc6c76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/plans/list.twig", 1);
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
        echo "
    </h1>
    <a class=\"page-title-action\" href=\"?page=plans-index&task=edit\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Add New Plan", "axis-subscriptions")), "html", null, true);
        echo "</a>
    ";
        // line 8
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "additional_buttons", array(), "array");
        echo "
    <form method=\"post\" action=\"?page=plans-index\" id=\"axisubs_list_form\">
        <div class=\"plan_filter\">
            <input type=\"text\" name=\"filter_name\" id=\"filter_name\" placeholder=\"Search by plan name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filter_name", array(), "array"), "html", null, true);
        echo "\"/>
            <button class=\"button button-search\" type=\"submit\"><span class=\"dashicons dashicons-search\"></span></button>
            <button class=\"button\" type=\"button\" onclick=\"document.getElementById('filter_name').value='';this.form.submit();\">Clear</button>
        </div>
        <div class=\"axisubs-message-ajax\">
        </div>
        <div class=\"axisubs_title_description\">
            ";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Axis Subscription plans", "axis-subscriptions")), "html", null, true);
        echo "
        </div>
        <div class=\"axisubs-plans\">
            <div class=\"axisubs-list\">
                <table class=\"wp-list-table widefat fixed striped plans\" width=\"100%\">
                    <thead>
                    <tr>
                      <th scope=\"col\" id=\"name\" class=\"manage-column column-title column-primary\"><span>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Name", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                      <th scope=\"col\" width=\"15%\" id=\"type\" class=\"manage-column column-type\"><span>";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Type", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                      <th scope=\"col\" id=\"period\" class=\"manage-column column-price\"><span>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Price and Duration", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                      <th scope=\"col\" width=\"15%\" id=\"status\" class=\"manage-column column-status\"><span>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Status", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                      <th scope=\"col\" width=\"15%\" id=\"action\" class=\"manage-column column-id\"><span>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Action", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                    </tr>
                    </thead>
                    <tbody id=\"the-list\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                        ";
            $context["planMeta"] = $this->getAttribute($context["item"], "meta", array(), "array");
            // line 35
            echo "                        ";
            $context["planPrefix"] = ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_");
            // line 36
            echo "                        <tr id=\"plan-1\" class=\"iedit author-self type-plan-list status-publish format-standard hentry\">
                          <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\">
                            <div class=\"image\">
                                ";
            // line 39
            if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_image"), array(), "array") != "")) {
                // line 40
                echo "                                    ";
                $context["classUploadImg"] = "show";
                // line 41
                echo "                                    ";
                $context["imagePath"] = $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_image"), array(), "array");
                // line 42
                echo "                                ";
            } else {
                // line 43
                echo "                                    ";
                $context["classUploadImg"] = "hide";
                // line 44
                echo "                                    ";
                $context["imagePath"] = ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array") . "/resources/assets/images/ico_noimage.png");
                // line 45
                echo "                                ";
            }
            // line 46
            echo "                              <img class=\"upload_image_preview\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["imagePath"]) ? $context["imagePath"] : null), "html", null, true);
            echo "\" />
                            </div>
                            <div class=\"plan-title\">
                              <strong><a href=\"?page=plans-index&task=edit&id=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "\" class=\"row-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "</a></strong>
                              <span>";
            // line 50
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("ID", "axis-subscriptions")), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "</span>
                            </div>
                            <button type=\"button\" class=\"toggle-row\"><span class=\"screen-reader-text\">";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Show more details", "axis-subscriptions")), "html", null, true);
            echo "</span></button>
                          </td>
                          <td class=\"period column-period\" data-colname=\"Period\">
                              ";
            // line 55
            $context["planType"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "type"), array(), "array");
            // line 56
            echo "                              <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_types", array(), "array"), (isset($context["planType"]) ? $context["planType"] : null), array(), "array"), "html", null, true);
            echo "</span>
                          </td>
                          <td class=\"period column-price\" data-colname=\"Price\">
                              ";
            // line 59
            if (((isset($context["planType"]) ? $context["planType"] : null) != "free")) {
                // line 60
                echo "
                                  ";
                // line 61
                $context["price"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "price"), array(), "array"));
                // line 62
                echo "                                  <span class=\"plan_price\">";
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                echo "</span>
                              ";
            }
            // line 64
            echo "
                              ";
            // line 65
            if (((isset($context["planType"]) ? $context["planType"] : null) == "free")) {
                // line 66
                echo "                                  ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_forever"), array(), "array") == "1")) {
                    // line 67
                    echo "                                      Forever
                                  ";
                } else {
                    // line 69
                    echo "                                      ";
                    $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                    // line 70
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 72
                echo "                              ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "renewal")) {
                echo " ";
                // line 73
                echo "                                  for ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 74
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 75
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                              ";
            } elseif ((            // line 76
(isset($context["planType"]) ? $context["planType"] : null) == "renewal_with_trial")) {
                echo " ";
                // line 77
                echo "                                  for ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 78
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 79
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 80
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                    // line 81
                    echo "                                      with trial duration of
                                      ";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                    echo "
                                      ";
                    // line 83
                    $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                    // line 84
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 86
                echo "                              ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring")) {
                // line 87
                echo "                                  for ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 88
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 89
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 90
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                    // line 91
                    echo "                                      , re-occur ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                    echo " times
                                  ";
                } else {
                    // line 93
                    echo "                                      , re-occur Forever
                                  ";
                }
                // line 95
                echo "                              ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring_with_trial")) {
                // line 96
                echo "                                  for ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 97
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 98
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 99
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                    // line 100
                    echo "                                      , re-occur for ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                    echo " times
                                  ";
                } else {
                    // line 102
                    echo "                                      , re-occur Forever
                                  ";
                }
                // line 104
                echo "                                  ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                    // line 105
                    echo "                                      with trial duration of
                                      ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                    echo "
                                      ";
                    // line 107
                    $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                    // line 108
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 110
                echo "                              ";
            } else {
                // line 111
                echo "                                  ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array") != "")) {
                    // line 112
                    echo "                                      <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                    echo "</span>
                                      ";
                    // line 113
                    $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                    // line 114
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 116
                echo "                              ";
            }
            // line 117
            echo "                          </td>
                          <td class=\"status column-status\" data-colname=\"Status\">
                              <label class=\"switch\">
                                <input ";
            // line 120
            if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_status"), array(), "array") == 1)) {
                echo " checked=\"checked\" ";
            }
            echo " type=\"checkbox\">
                                <div class=\"slider round change_plan_status\" data-id=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "\"></div>
                              </label>
                          </td>
                          <td class=\"period column-img\" data-colname=\"Action\">
                            <a class=\"button button-primary\" href=\"?page=plans-index&task=edit&id=";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Edit", "axis-subscriptions")), "html", null, true);
            echo "</a>
                            <a class=\"button\" href=\"?page=plans-index&task=delete&id=";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Delete", "axis-subscriptions")), "html", null, true);
            echo "</a>
                          </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "                        <tr>
                            <td colspan=\"4\">
                                <div class=\"row\">
                                    No plans added.
                                </div>
                            <td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                    </tbody>
                </table>
            </div>
            <input type=\"hidden\" id=\"site_url\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "site_url", array(), "array"), "html", null, true);
        echo "\"/>
            ";
        // line 142
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_items", array(), "array") > 5)) {
            // line 143
            echo "                ";
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
            echo "
                ";
            // line 144
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
            echo "
            ";
        }
        // line 146
        echo "        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/plans/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 146,  403 => 144,  398 => 143,  396 => 142,  392 => 141,  387 => 138,  374 => 130,  363 => 126,  357 => 125,  350 => 121,  344 => 120,  339 => 117,  336 => 116,  330 => 114,  328 => 113,  323 => 112,  320 => 111,  317 => 110,  311 => 108,  309 => 107,  305 => 106,  302 => 105,  299 => 104,  295 => 102,  289 => 100,  287 => 99,  282 => 98,  280 => 97,  275 => 96,  272 => 95,  268 => 93,  262 => 91,  260 => 90,  255 => 89,  253 => 88,  248 => 87,  245 => 86,  239 => 84,  237 => 83,  233 => 82,  230 => 81,  228 => 80,  223 => 79,  221 => 78,  216 => 77,  213 => 76,  208 => 75,  206 => 74,  201 => 73,  197 => 72,  191 => 70,  188 => 69,  184 => 67,  181 => 66,  179 => 65,  176 => 64,  170 => 62,  168 => 61,  165 => 60,  163 => 59,  156 => 56,  154 => 55,  148 => 52,  141 => 50,  135 => 49,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  116 => 42,  113 => 41,  110 => 40,  108 => 39,  103 => 36,  100 => 35,  97 => 34,  92 => 33,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  59 => 18,  49 => 11,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap">*/
/*     <h1 class="wp-heading-inline">{{ pagetitle }}*/
/*     </h1>*/
/*     <a class="page-title-action" href="?page=plans-index&task=edit">{{ esc_html_e('Add New Plan', 'axis-subscriptions') }}</a>*/
/*     {{ data['additional_buttons'] | raw }}*/
/*     <form method="post" action="?page=plans-index" id="axisubs_list_form">*/
/*         <div class="plan_filter">*/
/*             <input type="text" name="filter_name" id="filter_name" placeholder="Search by plan name" value="{{ data['filter_name'] }}"/>*/
/*             <button class="button button-search" type="submit"><span class="dashicons dashicons-search"></span></button>*/
/*             <button class="button" type="button" onclick="document.getElementById('filter_name').value='';this.form.submit();">Clear</button>*/
/*         </div>*/
/*         <div class="axisubs-message-ajax">*/
/*         </div>*/
/*         <div class="axisubs_title_description">*/
/*             {{ esc_html_e('Axis Subscription plans', 'axis-subscriptions') }}*/
/*         </div>*/
/*         <div class="axisubs-plans">*/
/*             <div class="axisubs-list">*/
/*                 <table class="wp-list-table widefat fixed striped plans" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                       <th scope="col" id="name" class="manage-column column-title column-primary"><span>{{ esc_html_e('Name', 'axis-subscriptions') }}</span></th>*/
/*                       <th scope="col" width="15%" id="type" class="manage-column column-type"><span>{{ esc_html_e('Type', 'axis-subscriptions') }}</span></th>*/
/*                       <th scope="col" id="period" class="manage-column column-price"><span>{{ esc_html_e('Price and Duration', 'axis-subscriptions') }}</span></th>*/
/*                       <th scope="col" width="15%" id="status" class="manage-column column-status"><span>{{ esc_html_e('Status', 'axis-subscriptions') }}</span></th>*/
/*                       <th scope="col" width="15%" id="action" class="manage-column column-id"><span>{{ esc_html_e('Action', 'axis-subscriptions') }}</span></th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody id="the-list">*/
/*                     {% for item in items %}*/
/*                         {% set planMeta = item['meta'] %}*/
/*                         {% set planPrefix = item['ID']~'_axisubs_plans_' %}*/
/*                         <tr id="plan-1" class="iedit author-self type-plan-list status-publish format-standard hentry">*/
/*                           <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title">*/
/*                             <div class="image">*/
/*                                 {% if(item['meta'][item['ID']~'_axisubs_plans_image'] != '') %}*/
/*                                     {% set classUploadImg = 'show' %}*/
/*                                     {% set imagePath = item['meta'][item['ID']~'_axisubs_plans_image'] %}*/
/*                                 {% else %}*/
/*                                     {% set classUploadImg = 'hide' %}*/
/*                                     {% set imagePath = data['plugin_url']~'/resources/assets/images/ico_noimage.png' %}*/
/*                                 {% endif %}*/
/*                               <img class="upload_image_preview" src="{{ imagePath }}" />*/
/*                             </div>*/
/*                             <div class="plan-title">*/
/*                               <strong><a href="?page=plans-index&task=edit&id={{ item['ID'] }}" class="row-title">{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</a></strong>*/
/*                               <span>{{ esc_html_e('ID', 'axis-subscriptions') }} : {{ item['ID'] }}</span>*/
/*                             </div>*/
/*                             <button type="button" class="toggle-row"><span class="screen-reader-text">{{ esc_html_e('Show more details', 'axis-subscriptions') }}</span></button>*/
/*                           </td>*/
/*                           <td class="period column-period" data-colname="Period">*/
/*                               {% set planType = planMeta[planPrefix~'type'] %}*/
/*                               <span>{{ data['plan_types'][planType] }}</span>*/
/*                           </td>*/
/*                           <td class="period column-price" data-colname="Price">*/
/*                               {% if(planType != 'free') %}*/
/* */
/*                                   {% set price = currencyData['code']~planMeta[planPrefix~'price'] %}*/
/*                                   <span class="plan_price">{{ price }}</span>*/
/*                               {% endif %}*/
/* */
/*                               {% if(planType == 'free') %}*/
/*                                   {% if(planMeta[planPrefix~'period_forever'] == '1') %}*/
/*                                       Forever*/
/*                                   {% else %}*/
/*                                       {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                       {{ data['unitInWords'][period_units] }}*/
/*                                   {% endif %}*/
/*                               {% elseif(planType == 'renewal') %} {# Non-recurring #}*/
/*                                   for {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                               {% elseif(planType == 'renewal_with_trial') %} {# Non-recurring with trial #}*/
/*                                   for {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                                   {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                       with trial duration of*/
/*                                       {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                       {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                       {{ data['unitInWords'][trial_period_units] }}*/
/*                                   {% endif %}*/
/*                               {% elseif(planType == 'recurring') %}*/
/*                                   for {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                                   {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                       , re-occur {{ planMeta[planPrefix~'billing_cycles'] }} times*/
/*                                   {% else %}*/
/*                                       , re-occur Forever*/
/*                                   {% endif %}*/
/*                               {% elseif(planType == 'recurring_with_trial') %}*/
/*                                   for {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                                   {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                       , re-occur for {{ planMeta[planPrefix~'billing_cycles'] }} times*/
/*                                   {% else %}*/
/*                                       , re-occur Forever*/
/*                                   {% endif %}*/
/*                                   {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                       with trial duration of*/
/*                                       {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                       {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                       {{ data['unitInWords'][trial_period_units] }}*/
/*                                   {% endif %}*/
/*                               {% else %}*/
/*                                   {% if(planMeta[planPrefix~'period'] != '') %}*/
/*                                       <span>{{ planMeta[planPrefix~'period'] }}</span>*/
/*                                       {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                       {{ data['unitInWords'][period_units] }}*/
/*                                   {% endif %}*/
/*                               {% endif %}*/
/*                           </td>*/
/*                           <td class="status column-status" data-colname="Status">*/
/*                               <label class="switch">*/
/*                                 <input {% if(item['meta'][item['ID']~'_axisubs_plans_status'] == 1) %} checked="checked" {% endif %} type="checkbox">*/
/*                                 <div class="slider round change_plan_status" data-id="{{ item['ID'] }}"></div>*/
/*                               </label>*/
/*                           </td>*/
/*                           <td class="period column-img" data-colname="Action">*/
/*                             <a class="button button-primary" href="?page=plans-index&task=edit&id={{ item['ID'] }}">{{ esc_html_e('Edit', 'axis-subscriptions') }}</a>*/
/*                             <a class="button" href="?page=plans-index&task=delete&id={{ item['ID'] }}">{{ esc_html_e('Delete', 'axis-subscriptions') }}</a>*/
/*                           </td>*/
/*                         </tr>*/
/*                     {% else %}*/
/*                         <tr>*/
/*                             <td colspan="4">*/
/*                                 <div class="row">*/
/*                                     No plans added.*/
/*                                 </div>*/
/*                             <td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <input type="hidden" id="site_url" value="{{ data['site_url'] }}"/>*/
/*             {% if(data['total_items']>5) %}*/
/*                 {{ paginationD['limitbox'] | raw }}*/
/*                 {{ paginationD['links'] | raw }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

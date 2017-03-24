<?php

/* @Axisubs/Admin/plans/list.twig */
class __TwigTemplate_2843d27050b7a1c64e1ebe189f90961b020c491faea1d1f2caf30acbeffd5626 extends Twig_Template
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
                              ";
            // line 57
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "slug_stripe"), array(), "array") != "")) {
                // line 58
                echo "                                  <br/>
                              <span class=\"bind-with_payment\">";
                // line 59
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Stripe", "axis-subscriptions")), "html", null, true);
                echo "</span>
                              ";
            }
            // line 61
            echo "                          </td>
                          <td class=\"period column-price\" data-colname=\"Price\">
                              ";
            // line 63
            if (((isset($context["planType"]) ? $context["planType"] : null) != "free")) {
                // line 64
                echo "
                                  ";
                // line 65
                $context["price"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "price"), array(), "array"));
                // line 66
                echo "                                  <span class=\"plan_price\">";
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                echo "</span>
                              ";
            }
            // line 68
            echo "
                              ";
            // line 69
            if (((isset($context["planType"]) ? $context["planType"] : null) == "free")) {
                // line 70
                echo "                                  ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_forever"), array(), "array") == "1")) {
                    // line 71
                    echo "                                      ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Forever", "axis-subscriptions")), "html", null, true);
                    echo "
                                  ";
                } else {
                    // line 73
                    echo "                                      ";
                    $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                    // line 74
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                    echo "
                                      ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 77
                echo "                              ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "renewal")) {
                echo " ";
                // line 78
                echo "                                  ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 79
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 80
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                              ";
            } elseif ((            // line 81
(isset($context["planType"]) ? $context["planType"] : null) == "renewal_with_trial")) {
                echo " ";
                // line 82
                echo "                                  ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 83
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 84
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 85
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                    // line 86
                    echo "                                      ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("with trial duration of", "axis-subscriptions")), "html", null, true);
                    echo "
                                      ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                    echo "
                                      ";
                    // line 88
                    $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                    // line 89
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 91
                echo "                              ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring")) {
                // line 92
                echo "                                  ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for each", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 93
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 94
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 95
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                    // line 96
                    echo "                                      , ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("installments", "axis-subscriptions")), "html", null, true);
                    echo "
                                  ";
                } else {
                    // line 98
                    echo "                                  ";
                }
                // line 99
                echo "                              ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring_with_trial")) {
                // line 100
                echo "                                  ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for each", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 101
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 102
                echo "                                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                  ";
                // line 103
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                    // line 104
                    echo "                                      , ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("installments", "axis-subscriptions")), "html", null, true);
                    echo "
                                  ";
                } else {
                    // line 106
                    echo "                                  ";
                }
                // line 107
                echo "                                  ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                    // line 108
                    echo "                                      ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("with trial duration of", "axis-subscriptions")), "html", null, true);
                    echo "
                                      ";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                    echo "
                                      ";
                    // line 110
                    $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                    // line 111
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 113
                echo "                              ";
            } else {
                // line 114
                echo "                                  ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array") != "")) {
                    // line 115
                    echo "                                      <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                    echo "</span>
                                      ";
                    // line 116
                    $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                    // line 117
                    echo "                                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                  ";
                }
                // line 119
                echo "                              ";
            }
            // line 120
            echo "                              ";
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "setup_cost"), array(), "array") > 0)) {
                // line 121
                echo "                                  ";
                $context["setUpPrice"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "setup_cost"), array(), "array"));
                // line 122
                echo "                                  ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("and a", "axis-subscriptions")), "html", null, true);
                echo " <span class=\"plan_price\">";
                echo twig_escape_filter($this->env, (isset($context["setUpPrice"]) ? $context["setUpPrice"] : null), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("as setup cost", "axis-subscriptions")), "html", null, true);
                echo "
                              ";
            }
            // line 124
            echo "                          </td>
                          <td class=\"status column-status\" data-colname=\"Status\">
                              <label class=\"switch\">
                                <input ";
            // line 127
            if (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ($this->getAttribute($context["item"], "ID", array(), "array") . "_axisubs_plans_status"), array(), "array") == 1)) {
                echo " checked=\"checked\" ";
            }
            echo " type=\"checkbox\">
                                <div class=\"slider round change_plan_status\" data-id=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "\"></div>
                              </label>
                          </td>
                          <td class=\"period column-img\" data-colname=\"Action\">
                            <a class=\"button button-primary\" href=\"?page=plans-index&task=edit&id=";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Edit", "axis-subscriptions")), "html", null, true);
            echo "</a>
                            <a class=\"button\" href=\"?page=plans-index&task=delete&id=";
            // line 133
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
            // line 137
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
        // line 145
        echo "                    </tbody>
                </table>
            </div>
            <input type=\"hidden\" id=\"site_url\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "site_url", array(), "array"), "html", null, true);
        echo "\"/>
            ";
        // line 149
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_items", array(), "array") > 5)) {
            // line 150
            echo "                ";
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
            echo "
                ";
            // line 151
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
            echo "
            ";
        }
        // line 153
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
        return array (  460 => 153,  455 => 151,  450 => 150,  448 => 149,  444 => 148,  439 => 145,  426 => 137,  415 => 133,  409 => 132,  402 => 128,  396 => 127,  391 => 124,  381 => 122,  378 => 121,  375 => 120,  372 => 119,  366 => 117,  364 => 116,  359 => 115,  356 => 114,  353 => 113,  347 => 111,  345 => 110,  341 => 109,  336 => 108,  333 => 107,  330 => 106,  320 => 104,  318 => 103,  313 => 102,  311 => 101,  304 => 100,  301 => 99,  298 => 98,  288 => 96,  286 => 95,  281 => 94,  279 => 93,  272 => 92,  269 => 91,  263 => 89,  261 => 88,  257 => 87,  252 => 86,  250 => 85,  245 => 84,  243 => 83,  236 => 82,  233 => 81,  228 => 80,  226 => 79,  219 => 78,  215 => 77,  210 => 75,  205 => 74,  202 => 73,  196 => 71,  193 => 70,  191 => 69,  188 => 68,  182 => 66,  180 => 65,  177 => 64,  175 => 63,  171 => 61,  166 => 59,  163 => 58,  161 => 57,  156 => 56,  154 => 55,  148 => 52,  141 => 50,  135 => 49,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  116 => 42,  113 => 41,  110 => 40,  108 => 39,  103 => 36,  100 => 35,  97 => 34,  92 => 33,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  59 => 18,  49 => 11,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/*                               {% if (planMeta[planPrefix~'slug_stripe'] != '') %}*/
/*                                   <br/>*/
/*                               <span class="bind-with_payment">{{ esc_html_e('Stripe', 'axis-subscriptions') }}</span>*/
/*                               {% endif %}*/
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
/*                                       {{ esc_html_e('Forever', 'axis-subscriptions') }}*/
/*                                   {% else %}*/
/*                                       {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                       {{ planMeta[planPrefix~'period'] }}*/
/*                                       {{ data['unitInWords'][period_units] }}*/
/*                                   {% endif %}*/
/*                               {% elseif(planType == 'renewal') %} {# Non-recurring #}*/
/*                                   {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                               {% elseif(planType == 'renewal_with_trial') %} {# Non-recurring with trial #}*/
/*                                   {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                                   {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                       {{ esc_html_e('with trial duration of', 'axis-subscriptions') }}*/
/*                                       {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                       {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                       {{ data['unitInWords'][trial_period_units] }}*/
/*                                   {% endif %}*/
/*                               {% elseif(planType == 'recurring') %}*/
/*                                   {{ esc_html_e('for each', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                                   {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                       , {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'billing_cycles'] }} {{ esc_html_e('installments', 'axis-subscriptions') }}*/
/*                                   {% else %}*/
/*                                   {% endif %}*/
/*                               {% elseif(planType == 'recurring_with_trial') %}*/
/*                                   {{ esc_html_e('for each', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                   {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                   {{ data['unitInWords'][period_units] }}*/
/*                                   {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                       , {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'billing_cycles'] }} {{ esc_html_e('installments', 'axis-subscriptions') }}*/
/*                                   {% else %}*/
/*                                   {% endif %}*/
/*                                   {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                       {{ esc_html_e('with trial duration of', 'axis-subscriptions') }}*/
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
/*                               {% if(planMeta[planPrefix~'setup_cost'] > 0) %}*/
/*                                   {% set setUpPrice = currencyData['code']~planMeta[planPrefix~'setup_cost'] %}*/
/*                                   {{ esc_html_e('and a', 'axis-subscriptions') }} <span class="plan_price">{{ setUpPrice }}</span> {{ esc_html_e('as setup cost', 'axis-subscriptions') }}*/
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

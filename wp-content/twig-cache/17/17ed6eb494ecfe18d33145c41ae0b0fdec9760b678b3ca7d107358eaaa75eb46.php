<?php

/* @Axisubs/Admin/subscriptions/detail.twig */
class __TwigTemplate_4ddb7434d5e5b7a4ed50deb7f0f57b7634e617dc8413653bea1d95d7d45ffc37 extends Twig_Template
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
        $context["subMeta"] = $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array");
        // line 2
        $context["subPrefix"] = ((($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "post_type", array(), "array")) . "_");
        // line 3
        echo "<div class=\"axisubs wrap\">
    <div class=\"axisubs-subs_details-title\">
        <h1 class=\"wp-heading-inline\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
        <a class=\"page-title-action\" href=\"?page=subscriptions-index&task=edit&user_id=";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_user_id"), array(), "array"), "html", null, true);
        echo "&sid=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array"), "html", null, true);
        echo "\">Edit</a>
        <a class=\"page-title-action\" href=\"?page=subscriptions-index&task=delete&id=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array"), "html", null, true);
        echo "\">Delete</a>
        <a class=\"page-title-action\" href=\"?page=subscriptions-index\">Back</a>
    </div>
    <div class=\"axisubs-subscription_details\">
        <div class=\"axisubs-subscription-summary\">
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Subscription Id :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Plan Name :</strong>
                </div>
                <div class=\"subscription-content\">
                    <a class=\"\" href=\"?page=plans-index&task=edit&id=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "ID", array(), "array") . "_axisubs_plans_slug"), array(), "array"), "html", null, true);
        echo "&id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "ID", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</a>

                    <span>(
                        ";
        // line 28
        $context["planMeta"] = $this->getAttribute((isset($context["planDetails"]) ? $context["planDetails"] : null), "meta", array(), "array");
        // line 29
        echo "                        ";
        $context["plan"] = (isset($context["planDetails"]) ? $context["planDetails"] : null);
        // line 30
        echo "                        ";
        $context["planPrefix"] = ((($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "post_type", array(), "array")) . "_");
        // line 31
        echo "                        ";
        $context["planType"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "type"), array(), "array");
        // line 32
        echo "                        ";
        if (((isset($context["planType"]) ? $context["planType"] : null) != "free")) {
            // line 33
            echo "                            ";
            $context["price"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "price"), array(), "array"));
            // line 34
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
            echo "
                        ";
        }
        // line 36
        echo "
                        ";
        // line 37
        if (((isset($context["planType"]) ? $context["planType"] : null) == "free")) {
            // line 38
            echo "                            ";
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_forever"), array(), "array") == "1")) {
                // line 39
                echo "                                ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Forever", "axis-subscriptions")), "html", null, true);
                echo "
                            ";
            } else {
                // line 41
                echo "                                ";
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 42
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                            ";
            }
            // line 45
            echo "                        ";
        } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "renewal")) {
            echo " ";
            // line 46
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 47
            $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
            // line 48
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
            echo "
                        ";
        } elseif ((        // line 49
(isset($context["planType"]) ? $context["planType"] : null) == "renewal_with_trial")) {
            echo " ";
            // line 50
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 51
            $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
            // line 52
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 53
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                // line 54
                echo "                                ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("with trial duration of", "axis-subscriptions")), "html", null, true);
                echo "
                                ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                echo "
                                ";
                // line 56
                $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                // line 57
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                echo "
                            ";
            }
            // line 59
            echo "                        ";
        } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring")) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for each", "axis-subscriptions")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 61
            $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
            // line 62
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 63
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                // line 64
                echo "                                , ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("installments", "axis-subscriptions")), "html", null, true);
                echo "
                            ";
            } else {
                // line 66
                echo "                            ";
            }
            // line 67
            echo "                        ";
        } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring_with_trial")) {
            // line 68
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for each", "axis-subscriptions")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 69
            $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
            // line 70
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
            echo "
                            ";
            // line 71
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                // line 72
                echo "                                , ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("installments", "axis-subscriptions")), "html", null, true);
                echo "
                            ";
            } else {
                // line 74
                echo "                            ";
            }
            // line 75
            echo "                            ";
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                // line 76
                echo "                                ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("with trial duration of", "axis-subscriptions")), "html", null, true);
                echo "
                                ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                echo "
                                ";
                // line 78
                $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                // line 79
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                echo "
                            ";
            }
            // line 81
            echo "                        ";
        } else {
            // line 82
            echo "                            ";
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array") != "")) {
                // line 83
                echo "                                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "</span>
                                ";
                // line 84
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 85
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                            ";
            }
            // line 87
            echo "                        ";
        }
        // line 88
        echo "                        ";
        if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "setup_cost"), array(), "array") > 0)) {
            // line 89
            echo "                            ";
            $context["setUpPrice"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "setup_cost"), array(), "array"));
            // line 90
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("and a", "axis-subscriptions")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["setUpPrice"]) ? $context["setUpPrice"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("as setup cost", "axis-subscriptions")), "html", null, true);
            echo "
                        ";
        }
        // line 92
        echo "                    )</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong> Subscription Status :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 100
        echo (isset($context["statusText"]) ? $context["statusText"] : null);
        echo "
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Trial start date :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 108
        if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_trial_start_on"), array(), "array")) {
            // line 109
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_trial_start_on"), array(), "array"), "html", null, true);
            echo "
                    ";
        } else {
            // line 111
            echo "                        <span>-</span>
                    ";
        }
        // line 113
        echo "                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Trial end date :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 120
        if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_trial_end_on"), array(), "array")) {
            // line 121
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_trial_end_on"), array(), "array"), "html", null, true);
            echo "
                    ";
        } else {
            // line 123
            echo "                        <span>-</span>
                    ";
        }
        // line 125
        echo "                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Subscription start date :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_start_on"), array(), "array"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Subscription end date :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_end_on"), array(), "array"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Price :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 148
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_price"), array(), "array")), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Setup cost :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 156
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_setup_cost"), array(), "array")), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 159
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "aditionalPrices", array(), "array");
        echo "
            <div class=\"axisubs-fields\">
                <div class=\"subscription-label\">
                    <strong>Total Price :</strong>
                </div>
                <div class=\"subscription-content\">
                    ";
        // line 165
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 168
        if (((isset($context["planType"]) ? $context["planType"] : null) != "free")) {
            // line 169
            echo "                <div class=\"axisubs-fields\">
                    <div class=\"subscription-label\">
                        <h3>";
            // line 171
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Transaction Details", "axis-subscriptions")), "html", null, true);
            echo "</h3>
                    </div>
                </div>
                <div class=\"axisubs-fields\">
                    <div class=\"subscription-label\">
                        <strong>";
            // line 176
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Payment method", "axis-subscriptions")), "html", null, true);
            echo "</strong>
                    </div>
                    <div class=\"subscription-content\">
                        ";
            // line 179
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array($this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "payment_type"), array(), "array"), "axis-subscriptions")), "html", null, true);
            echo "
                    </div>
                </div>
                <div class=\"axisubs-fields\">
                    <div class=\"subscription-label\">
                        <strong>";
            // line 184
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Payment status", "axis-subscriptions")), "html", null, true);
            echo "</strong>
                    </div>
                    <div class=\"subscription-content\">
                        ";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "payment_status"), array(), "array"), "html", null, true);
            echo "
                    </div>
                </div>
                ";
            // line 190
            if (($this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "subscription_profile_id"), array(), "array") != "")) {
                // line 191
                echo "                    <div class=\"axisubs-fields\">
                        <div class=\"subscription-label\">
                            <strong>";
                // line 193
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Subscription profile", "axis-subscriptions")), "html", null, true);
                echo "</strong>
                        </div>
                        <div class=\"subscription-content\">
                            ";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "subscription_profile_id"), array(), "array"), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 200
            echo "                ";
            if (($this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "transaction_ref_id"), array(), "array") != "")) {
                // line 201
                echo "                <div class=\"axisubs-fields\">
                    <div class=\"subscription-label\">
                        <strong>";
                // line 203
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Transaction id", "axis-subscriptions")), "html", null, true);
                echo "</strong>
                    </div>
                    <div class=\"subscription-content\">
                        ";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "transaction_ref_id"), array(), "array"), "html", null, true);
                echo "
                    </div>
                </div>
                ";
            }
            // line 210
            echo "                <div class=\"axisubs-fields metabox-holder\">
                    <div class=\"meta-box-sortables ui-sortable\" id=\"paymentresponse\">
                        <div class=\"postbox closed\">
                            <button class=\"handlediv button-link\" type=\"button\" aria-expanded=\"false\">
                                <span class=\"screen-reader-text\">Toggle panel: ";
            // line 214
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Payment response", "axis-subscriptions")), "html", null, true);
            echo "</span>
                                <span class=\"toggle-indicator\" aria-hidden=\"true\"></span>
                            </button>
                            <h2 class=\"hndle ui-sortable-handle toggle_axisubs\">
                                <span>";
            // line 218
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Payment response", "axis-subscriptions")), "html", null, true);
            echo "</span>
                            </h2>
                            <div class=\"inside\">
                                <div class=\"subscription-response_text\">
                                    ";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subMeta"]) ? $context["subMeta"] : null), ((isset($context["subPrefix"]) ? $context["subPrefix"] : null) . "postpayment"), array(), "array"), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 229
        echo "        </div>
        <div class=\"axisubs-subs-billinfo-con\">
            <div class=\"subscription_details_title\">
                <h1>Billing Information</h1>
            </div>
            <div class=\"billing-info\">
                <div class=\"axisubs-fields\">
                    <div class=\"billing-label\">
                        <strong>Customer name :</strong>
                    </div>
                    <div class=\"billing-content\">
                        ";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
        echo "
                        ";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"axisubs-fields\">
                    <div class=\"billing-label\">
                        <strong>Email :</strong>
                    </div>
                    <div class=\"billing-content\">
                        ";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"axisubs-fields\">
                    <div class=\"billing-label\">
                        <strong>Address :</strong>
                    </div>
                    <div class=\"billing-content\">
                        ";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array"), "html", null, true);
        echo ",
                        ";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array"), "html", null, true);
        echo ",
                        ";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array"), "html", null, true);
        echo ",
                        ";
        // line 260
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array"), "html", null, true);
        echo ",
                        ";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"axisubs-subs-billinfo-con\">
            <div class=\"subscription_details_title\">
                <h1>";
        // line 268
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Subscription history", "axis-subscriptions")), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subs_history", array(), "array"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subs_history"]) {
            // line 271
            echo "                <div class=\"axisubs_history_content\">
                    ";
            // line 272
            echo $this->getAttribute($context["subs_history"], "comment_content", array(), "array");
            echo "
                </div>
                <div class=\"axisubs_history_date\">
                    ";
            // line 275
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("On", "axis-subscriptions")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subs_history"], "comment_date", array(), "array"), "html", null, true);
            echo "
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 278
            echo "                <div class=\"axisubs-fields\">
                    ";
            // line 279
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("No history available", "axis-subscriptions")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subs_history'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/subscriptions/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 282,  620 => 279,  617 => 278,  607 => 275,  601 => 272,  598 => 271,  593 => 270,  588 => 268,  578 => 261,  574 => 260,  570 => 259,  566 => 258,  562 => 257,  551 => 249,  540 => 241,  536 => 240,  523 => 229,  513 => 222,  506 => 218,  499 => 214,  493 => 210,  486 => 206,  480 => 203,  476 => 201,  473 => 200,  466 => 196,  460 => 193,  456 => 191,  454 => 190,  448 => 187,  442 => 184,  434 => 179,  428 => 176,  420 => 171,  416 => 169,  414 => 168,  408 => 165,  399 => 159,  393 => 156,  382 => 148,  371 => 140,  360 => 132,  351 => 125,  347 => 123,  341 => 121,  339 => 120,  330 => 113,  326 => 111,  320 => 109,  318 => 108,  307 => 100,  297 => 92,  287 => 90,  284 => 89,  281 => 88,  278 => 87,  272 => 85,  270 => 84,  265 => 83,  262 => 82,  259 => 81,  253 => 79,  251 => 78,  247 => 77,  242 => 76,  239 => 75,  236 => 74,  226 => 72,  224 => 71,  219 => 70,  217 => 69,  210 => 68,  207 => 67,  204 => 66,  194 => 64,  192 => 63,  187 => 62,  185 => 61,  178 => 60,  175 => 59,  169 => 57,  167 => 56,  163 => 55,  158 => 54,  156 => 53,  151 => 52,  149 => 51,  142 => 50,  139 => 49,  134 => 48,  132 => 47,  125 => 46,  121 => 45,  116 => 43,  111 => 42,  108 => 41,  102 => 39,  99 => 38,  97 => 37,  94 => 36,  88 => 34,  85 => 33,  82 => 32,  79 => 31,  76 => 30,  73 => 29,  71 => 28,  61 => 25,  50 => 17,  37 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set subMeta = subscriber['meta'] %}*/
/* {% set subPrefix = subscriber['ID']~'_'~subscriber['post_type']~'_' %}*/
/* <div class="axisubs wrap">*/
/*     <div class="axisubs-subs_details-title">*/
/*         <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*         <a class="page-title-action" href="?page=subscriptions-index&task=edit&user_id={{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_user_id'] }}&sid={{ subscriber['ID'] }}">Edit</a>*/
/*         <a class="page-title-action" href="?page=subscriptions-index&task=delete&id={{ subscriber['ID'] }}">Delete</a>*/
/*         <a class="page-title-action" href="?page=subscriptions-index">Back</a>*/
/*     </div>*/
/*     <div class="axisubs-subscription_details">*/
/*         <div class="axisubs-subscription-summary">*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Subscription Id :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ subscriber['ID'] }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Plan Name :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     <a class="" href="?page=plans-index&task=edit&id={{ planDetails['meta'][planDetails['ID']~'_axisubs_plans_slug'] }}&id={{ planDetails['ID'] }}">{{ planDetails['meta'][planDetails['ID']~'_axisubs_plans_name']}}</a>*/
/* */
/*                     <span>(*/
/*                         {% set planMeta = planDetails['meta'] %}*/
/*                         {% set plan = planDetails %}*/
/*                         {% set planPrefix = plan['ID']~'_'~plan['post_type']~'_' %}*/
/*                         {% set planType = planMeta[planPrefix~'type'] %}*/
/*                         {% if(planType != 'free') %}*/
/*                             {% set price = currencyData['code']~planMeta[planPrefix~'price'] %}*/
/*                             {{ price }}*/
/*                         {% endif %}*/
/* */
/*                         {% if(planType == 'free') %}*/
/*                             {% if(planMeta[planPrefix~'period_forever'] == '1') %}*/
/*                                 {{ esc_html_e('Forever', 'axis-subscriptions') }}*/
/*                             {% else %}*/
/*                                 {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                 {{ planMeta[planPrefix~'period'] }}*/
/*                                 {{ data['unitInWords'][period_units] }}*/
/*                             {% endif %}*/
/*                         {% elseif(planType == 'renewal') %} {# Non-recurring #}*/
/*                             {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                             {{ data['unitInWords'][period_units] }}*/
/*                         {% elseif(planType == 'renewal_with_trial') %} {# Non-recurring with trial #}*/
/*                             {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                             {{ data['unitInWords'][period_units] }}*/
/*                             {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                 {{ esc_html_e('with trial duration of', 'axis-subscriptions') }}*/
/*                                 {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                 {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                 {{ data['unitInWords'][trial_period_units] }}*/
/*                             {% endif %}*/
/*                         {% elseif(planType == 'recurring') %}*/
/*                             {{ esc_html_e('for each', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                             {{ data['unitInWords'][period_units] }}*/
/*                             {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                 , {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'billing_cycles'] }} {{ esc_html_e('installments', 'axis-subscriptions') }}*/
/*                             {% else %}*/
/*                             {% endif %}*/
/*                         {% elseif(planType == 'recurring_with_trial') %}*/
/*                             {{ esc_html_e('for each', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                             {{ data['unitInWords'][period_units] }}*/
/*                             {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                 , {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'billing_cycles'] }} {{ esc_html_e('installments', 'axis-subscriptions') }}*/
/*                             {% else %}*/
/*                             {% endif %}*/
/*                             {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                 {{ esc_html_e('with trial duration of', 'axis-subscriptions') }}*/
/*                                 {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                 {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                 {{ data['unitInWords'][trial_period_units] }}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if(planMeta[planPrefix~'period'] != '') %}*/
/*                                 <span>{{ planMeta[planPrefix~'period'] }}</span>*/
/*                                 {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                 {{ data['unitInWords'][period_units] }}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                         {% if(planMeta[planPrefix~'setup_cost'] > 0) %}*/
/*                             {% set setUpPrice = currencyData['code']~planMeta[planPrefix~'setup_cost'] %}*/
/*                             {{ esc_html_e('and a', 'axis-subscriptions') }} {{ setUpPrice }} {{ esc_html_e('as setup cost', 'axis-subscriptions') }}*/
/*                         {% endif %}*/
/*                     )</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong> Subscription Status :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ statusText | raw }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Trial start date :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {% if subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_trial_start_on'] %}*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_trial_start_on'] }}*/
/*                     {% else %}*/
/*                         <span>-</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Trial end date :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {% if subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_trial_end_on'] %}*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_trial_end_on'] }}*/
/*                     {% else %}*/
/*                         <span>-</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Subscription start date :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_start_on'] }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Subscription end date :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_end_on'] }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Price :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ currencyData['code']~subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_price'] }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Setup cost :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ currencyData['code']~subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_setup_cost'] }}*/
/*                 </div>*/
/*             </div>*/
/*             {{ data['aditionalPrices'] | raw}}*/
/*             <div class="axisubs-fields">*/
/*                 <div class="subscription-label">*/
/*                     <strong>Total Price :</strong>*/
/*                 </div>*/
/*                 <div class="subscription-content">*/
/*                     {{ currencyData['code']~subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_total_price'] }}*/
/*                 </div>*/
/*             </div>*/
/*             {% if(planType != 'free') %}*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="subscription-label">*/
/*                         <h3>{{ esc_html_e('Transaction Details', 'axis-subscriptions') }}</h3>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="subscription-label">*/
/*                         <strong>{{ esc_html_e('Payment method', 'axis-subscriptions') }}</strong>*/
/*                     </div>*/
/*                     <div class="subscription-content">*/
/*                         {{ esc_html_e(subMeta[subPrefix~'payment_type'], 'axis-subscriptions') }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="subscription-label">*/
/*                         <strong>{{ esc_html_e('Payment status', 'axis-subscriptions') }}</strong>*/
/*                     </div>*/
/*                     <div class="subscription-content">*/
/*                         {{ subMeta[subPrefix~'payment_status'] }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if subMeta[subPrefix~'subscription_profile_id'] != '' %}*/
/*                     <div class="axisubs-fields">*/
/*                         <div class="subscription-label">*/
/*                             <strong>{{ esc_html_e('Subscription profile', 'axis-subscriptions') }}</strong>*/
/*                         </div>*/
/*                         <div class="subscription-content">*/
/*                             {{ subMeta[subPrefix~'subscription_profile_id'] }}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if subMeta[subPrefix~'transaction_ref_id'] != '' %}*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="subscription-label">*/
/*                         <strong>{{ esc_html_e('Transaction id', 'axis-subscriptions') }}</strong>*/
/*                     </div>*/
/*                     <div class="subscription-content">*/
/*                         {{ subMeta[subPrefix~'transaction_ref_id'] }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <div class="axisubs-fields metabox-holder">*/
/*                     <div class="meta-box-sortables ui-sortable" id="paymentresponse">*/
/*                         <div class="postbox closed">*/
/*                             <button class="handlediv button-link" type="button" aria-expanded="false">*/
/*                                 <span class="screen-reader-text">Toggle panel: {{ esc_html_e('Payment response', 'axis-subscriptions') }}</span>*/
/*                                 <span class="toggle-indicator" aria-hidden="true"></span>*/
/*                             </button>*/
/*                             <h2 class="hndle ui-sortable-handle toggle_axisubs">*/
/*                                 <span>{{ esc_html_e('Payment response', 'axis-subscriptions') }}</span>*/
/*                             </h2>*/
/*                             <div class="inside">*/
/*                                 <div class="subscription-response_text">*/
/*                                     {{ subMeta[subPrefix~'postpayment'] }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="axisubs-subs-billinfo-con">*/
/*             <div class="subscription_details_title">*/
/*                 <h1>Billing Information</h1>*/
/*             </div>*/
/*             <div class="billing-info">*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="billing-label">*/
/*                         <strong>Customer name :</strong>*/
/*                     </div>*/
/*                     <div class="billing-content">*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_first_name'] }}*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_last_name'] }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="billing-label">*/
/*                         <strong>Email :</strong>*/
/*                     </div>*/
/*                     <div class="billing-content">*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_email'] }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-fields">*/
/*                     <div class="billing-label">*/
/*                         <strong>Address :</strong>*/
/*                     </div>*/
/*                     <div class="billing-content">*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1'] }},*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line2'] }},*/
/*                         {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_city'] }},*/
/*                         {{ data['province'] }},*/
/*                         {{ data['country'] }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="axisubs-subs-billinfo-con">*/
/*             <div class="subscription_details_title">*/
/*                 <h1>{{ esc_html_e('Subscription history', 'axis-subscriptions') }}</h1>*/
/*             </div>*/
/*             {% for subs_history in data['subs_history'] %}*/
/*                 <div class="axisubs_history_content">*/
/*                     {{ subs_history['comment_content'] | raw }}*/
/*                 </div>*/
/*                 <div class="axisubs_history_date">*/
/*                     {{ esc_html_e('On', 'axis-subscriptions') }} {{ subs_history['comment_date'] }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="axisubs-fields">*/
/*                     {{ esc_html_e('No history available', 'axis-subscriptions') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */

<?php

/* @Axisubs/Admin/subscriptions/list.twig */
class __TwigTemplate_b28725c36c2e3c9530d72d4d100ed6e86f9e31cd5c65536d68aadebd201895b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/subscriptions/list.twig", 1);
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
        echo "    ";
        $context["statusText"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusText", array(), "array");
        // line 5
        echo "    <div class=\"axisubs wrap axis-head\">
        <h1 class=\"wp-heading-inline\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
        <a class=\"page-title-action\" href=\"?page=customers-index&flag=choose_customer\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Add New Subscription", "axis-subscriptions")), "html", null, true);
        echo "</a>
        <div class=\"axisubs_title_description\">
            ";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Manage all the subscriptions from the customers in this list", "axis-subscriptions")), "html", null, true);
        echo "
        </div>
        <form method=\"post\" action=\"?page=subscriptions-index\" id=\"axisubs_list_form\">
            <div class=\"subscriptions\">
                <div class=\"axisubs-list\">
                    <table class=\"wp-list-table widefat fixed striped subscriptions\" width=\"100%\">
                        <thead>
                        <tr>
                            <th scope=\"col\" id=\"name\" width=\"10%\" class=\"manage-column column-primary\"><span>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Name", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"date\" width=\"20%\" class=\"manage-column column-primary\"><span>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Date", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"email\" width=\"15%\" class=\"manage-column column-primary\"><span>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Email", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"plan\" width=\"15%\" class=\"manage-column column-primary\"><span>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Plan", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"cost\" width=\"10%\" class=\"manage-column column-primary\"><span>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Total Cost", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"status\" width=\"10%\" class=\"manage-column column-primary\"><span>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Status", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"action\" width=\"20%\" class=\"manage-column column-primary\"><span>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Action", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                        </tr>
                        </thead>
                        <tbody id=\"the-list\">
                        ";
        // line 27
        $context["subscribers"] = (isset($context["items"]) ? $context["items"] : null);
        // line 28
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscribers"]) ? $context["subscribers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscribe"]) {
            // line 29
            echo "                            ";
            $context["plan"] = $this->getAttribute($context["subscribe"], "plan", array(), "array");
            // line 30
            echo "                            ";
            $context["planMeta"] = $this->getAttribute($this->getAttribute($context["subscribe"], "plan", array(), "array"), "meta", array(), "array");
            // line 31
            echo "                            ";
            $context["meta"] = $this->getAttribute($context["subscribe"], "meta", array(), "array");
            // line 32
            echo "                            <tr id=\"subsription\" class=\"iedit author-self type-plan-list status-publish format-standard hentry\">
                                <td class=\"id column-id has-row-actions column-primary plan-title\" data-colname=\"Name\">
                                    <strong><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ("?page=subscriptions-index&sid=" . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\" class=\"row-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
            echo "</a></strong>
                                    <div class=\"row\">
                                        <span>#";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
            echo "</span>
                                    </div>
                                    <button type=\"button\" class=\"toggle-row\"><span class=\"screen-reader-text\">";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Show more details", "axis-subscriptions")), "html", null, true);
            echo "</span></button>
                                </td>
                                <td class=\"name column-email has-row-actions\" data-colname=\"Name\">
                                    <div class=\"row\">
                                        <b>";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Start on", "axis-subscriptions")), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_start_on"), array(), "array"), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"row\">
                                        <b>";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("End by", "axis-subscriptions")), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_end_on"), array(), "array"), "html", null, true);
            echo "
                                    </div>
                                </td>
                                <td class=\"name column-email has-row-actions\" data-colname=\"Name\">
                                    <a href=\"mailto:";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
            echo "</a>
                                </td>
                                <td class=\"column-date has-row-actions\" data-colname=\"Plan\">
                                    <span><b>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "</b></span>
                                    <div>
                                        ";
            // line 54
            $context["planPrefix"] = ((($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "post_type", array(), "array")) . "_");
            // line 55
            echo "                                        ";
            $context["planType"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "type"), array(), "array");
            // line 56
            echo "                                        ";
            if (((isset($context["planType"]) ? $context["planType"] : null) != "free")) {
                // line 57
                echo "                                            ";
                $context["price"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "price"), array(), "array"));
                // line 58
                echo "                                            ";
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                echo "
                                        ";
            }
            // line 60
            echo "
                                        ";
            // line 61
            if (((isset($context["planType"]) ? $context["planType"] : null) == "free")) {
                // line 62
                echo "                                            ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_forever"), array(), "array") == "1")) {
                    // line 63
                    echo "                                                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Forever", "axis-subscriptions")), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 65
                    echo "                                                ";
                    $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                    // line 66
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                    echo "
                                                ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                            ";
                }
                // line 69
                echo "                                        ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "renewal")) {
                echo " ";
                // line 70
                echo "                                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 71
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 72
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                        ";
            } elseif ((            // line 73
(isset($context["planType"]) ? $context["planType"] : null) == "renewal_with_trial")) {
                echo " ";
                // line 74
                echo "                                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 75
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 76
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 77
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                    // line 78
                    echo "                                                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("with trial duration of", "axis-subscriptions")), "html", null, true);
                    echo "
                                                ";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                    echo "
                                                ";
                    // line 80
                    $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                    // line 81
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                            ";
                }
                // line 83
                echo "                                        ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring")) {
                // line 84
                echo "                                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for each", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 85
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 86
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 87
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                    // line 88
                    echo "                                                , ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("installments", "axis-subscriptions")), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 90
                    echo "                                            ";
                }
                // line 91
                echo "                                        ";
            } elseif (((isset($context["planType"]) ? $context["planType"] : null) == "recurring_with_trial")) {
                // line 92
                echo "                                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for each", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 93
                $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                // line 94
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                echo "
                                            ";
                // line 95
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array") > 0)) {
                    // line 96
                    echo "                                                , ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("for", "axis-subscriptions")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "billing_cycles"), array(), "array"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("installments", "axis-subscriptions")), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 98
                    echo "                                            ";
                }
                // line 99
                echo "                                            ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array") != "")) {
                    // line 100
                    echo "                                                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("with trial duration of", "axis-subscriptions")), "html", null, true);
                    echo "
                                                ";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period"), array(), "array"), "html", null, true);
                    echo "
                                                ";
                    // line 102
                    $context["trial_period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "trial_period_units"), array(), "array");
                    // line 103
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["trial_period_units"]) ? $context["trial_period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                            ";
                }
                // line 105
                echo "                                        ";
            } else {
                // line 106
                echo "                                            ";
                if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array") != "")) {
                    // line 107
                    echo "                                                <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period"), array(), "array"), "html", null, true);
                    echo "</span>
                                                ";
                    // line 108
                    $context["period_units"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "period_units"), array(), "array");
                    // line 109
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unitInWords", array(), "array"), (isset($context["period_units"]) ? $context["period_units"] : null), array(), "array"), "html", null, true);
                    echo "
                                            ";
                }
                // line 111
                echo "                                        ";
            }
            // line 112
            echo "                                        ";
            if (($this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "setup_cost"), array(), "array") > 0)) {
                // line 113
                echo "                                            ";
                $context["setUpPrice"] = ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "setup_cost"), array(), "array"));
                // line 114
                echo "                                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("and a", "axis-subscriptions")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["setUpPrice"]) ? $context["setUpPrice"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("as setup cost", "axis-subscriptions")), "html", null, true);
                echo "
                                        ";
            }
            // line 116
            echo "                                    </div>
                                </td>
                                <td class=\"column-cost has-row-actions\" data-colname=\"Total Cost\">
                                    <span class=\"plan_price\">";
            // line 119
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
            echo "</span>
                                </td>
                                <td class=\"column-status has-row-actions\" data-colname=\"Status\">
                              <span class=\"axisubs-data-content\">
                                ";
            // line 123
            echo $this->getAttribute((isset($context["statusText"]) ? $context["statusText"] : null), $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array"), array(), "array");
            echo "
                              </span>
                                </td>
                                <td class=\"column-action has-row-actions\" data-colname=\"Actions\">
                                    <div class=\"dropbtn\">
                                        <div class=\"wrapper\">
                                            <div class=\"content\">
                                                <ul>
                                                    ";
            // line 131
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array") != "ACTIVE")) {
                // line 132
                echo "                                                        <a href=\"?page=subscriptions-index&task=activate&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Mark Active", "axis-subscriptions")), "html", null, true);
                echo "</li></a>
                                                    ";
            }
            // line 134
            echo "                                                    ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array") != "PENDING")) {
                // line 135
                echo "                                                        <a href=\"?page=subscriptions-index&task=pending&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Mark Pending", "axis-subscriptions")), "html", null, true);
                echo "</li></a>
                                                    ";
            }
            // line 137
            echo "                                                    ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array") != "CANCELED")) {
                // line 138
                echo "                                                        <a href=\"?page=subscriptions-index&task=cancel&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Mark Cancelled", "axis-subscriptions")), "html", null, true);
                echo "</li></a>
                                                    ";
            }
            // line 140
            echo "                                                </ul>
                                            </div>
                                            <div class=\"parent\">Action</div>
                                        </div>
                                    </div>
                                    <a class=\"button button-primary action\" href=\"";
            // line 145
            echo twig_escape_filter($this->env, ((("?page=subscriptions-index&task=edit&user_id=" . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_user_id"), array(), "array")) . "&sid=") . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Edit", "axis-subscriptions")), "html", null, true);
            echo "</a>
                                    <a class=\"button action\" href=\"?page=subscriptions-index&task=delete&id=";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Delete", "axis-subscriptions")), "html", null, true);
            echo "</a>
                                    <a class=\"button action\" href=\"";
            // line 147
            echo twig_escape_filter($this->env, ("?page=subscriptions-index&sid=" . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("View", "axis-subscriptions")), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 151
            echo "                            <tr>
                                <td colspan=\"6\">
                                    No subscription
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscribe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        // line 161
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_items", array(), "array") > 5)) {
            // line 162
            echo "                ";
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
            echo "
                ";
            // line 163
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
            echo "
            ";
        }
        // line 165
        echo "        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/subscriptions/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 165,  487 => 163,  482 => 162,  480 => 161,  474 => 157,  463 => 151,  452 => 147,  446 => 146,  440 => 145,  433 => 140,  425 => 138,  422 => 137,  414 => 135,  411 => 134,  403 => 132,  401 => 131,  390 => 123,  383 => 119,  378 => 116,  368 => 114,  365 => 113,  362 => 112,  359 => 111,  353 => 109,  351 => 108,  346 => 107,  343 => 106,  340 => 105,  334 => 103,  332 => 102,  328 => 101,  323 => 100,  320 => 99,  317 => 98,  307 => 96,  305 => 95,  300 => 94,  298 => 93,  291 => 92,  288 => 91,  285 => 90,  275 => 88,  273 => 87,  268 => 86,  266 => 85,  259 => 84,  256 => 83,  250 => 81,  248 => 80,  244 => 79,  239 => 78,  237 => 77,  232 => 76,  230 => 75,  223 => 74,  220 => 73,  215 => 72,  213 => 71,  206 => 70,  202 => 69,  197 => 67,  192 => 66,  189 => 65,  183 => 63,  180 => 62,  178 => 61,  175 => 60,  169 => 58,  166 => 57,  163 => 56,  160 => 55,  158 => 54,  153 => 52,  145 => 49,  136 => 45,  128 => 42,  121 => 38,  116 => 36,  109 => 34,  105 => 32,  102 => 31,  99 => 30,  96 => 29,  90 => 28,  88 => 27,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  46 => 9,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/*     {% set statusText = data['statusText'] %}*/
/*     <div class="axisubs wrap axis-head">*/
/*         <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*         <a class="page-title-action" href="?page=customers-index&flag=choose_customer">{{ esc_html_e('Add New Subscription', 'axis-subscriptions') }}</a>*/
/*         <div class="axisubs_title_description">*/
/*             {{ esc_html_e('Manage all the subscriptions from the customers in this list', 'axis-subscriptions') }}*/
/*         </div>*/
/*         <form method="post" action="?page=subscriptions-index" id="axisubs_list_form">*/
/*             <div class="subscriptions">*/
/*                 <div class="axisubs-list">*/
/*                     <table class="wp-list-table widefat fixed striped subscriptions" width="100%">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th scope="col" id="name" width="10%" class="manage-column column-primary"><span>{{ esc_html_e('Name', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="date" width="20%" class="manage-column column-primary"><span>{{ esc_html_e('Date', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="email" width="15%" class="manage-column column-primary"><span>{{ esc_html_e('Email', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="plan" width="15%" class="manage-column column-primary"><span>{{ esc_html_e('Plan', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="cost" width="10%" class="manage-column column-primary"><span>{{ esc_html_e('Total Cost', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="status" width="10%" class="manage-column column-primary"><span>{{ esc_html_e('Status', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="action" width="20%" class="manage-column column-primary"><span>{{ esc_html_e('Action', 'axis-subscriptions') }}</span></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody id="the-list">*/
/*                         {% set subscribers = items %}*/
/*                         {% for subscribe in subscribers %}*/
/*                             {% set plan = subscribe['plan'] %}*/
/*                             {% set planMeta = subscribe['plan']['meta'] %}*/
/*                             {% set meta = subscribe['meta'] %}*/
/*                             <tr id="subsription" class="iedit author-self type-plan-list status-publish format-standard hentry">*/
/*                                 <td class="id column-id has-row-actions column-primary plan-title" data-colname="Name">*/
/*                                     <strong><a href="{{ '?page=subscriptions-index&sid='~subscribe['ID'] }}" class="row-title">{{ meta[subscribe['ID']~'_axisubs_subscribe_first_name'] }}</a></strong>*/
/*                                     <div class="row">*/
/*                                         <span>#{{ subscribe['ID'] }}</span>*/
/*                                     </div>*/
/*                                     <button type="button" class="toggle-row"><span class="screen-reader-text">{{ esc_html_e('Show more details', 'axis-subscriptions') }}</span></button>*/
/*                                 </td>*/
/*                                 <td class="name column-email has-row-actions" data-colname="Name">*/
/*                                     <div class="row">*/
/*                                         <b>{{ esc_html_e('Start on', 'axis-subscriptions') }}:</b> {{ meta[subscribe['ID']~'_axisubs_subscribe_start_on'] }}*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <b>{{ esc_html_e('End by', 'axis-subscriptions') }}:</b> {{ meta[subscribe['ID']~'_axisubs_subscribe_end_on'] }}*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td class="name column-email has-row-actions" data-colname="Name">*/
/*                                     <a href="mailto:{{ meta[subscribe['ID']~'_axisubs_subscribe_email'] }}">{{ meta[subscribe['ID']~'_axisubs_subscribe_email'] }}</a>*/
/*                                 </td>*/
/*                                 <td class="column-date has-row-actions" data-colname="Plan">*/
/*                                     <span><b>{{ planMeta[plan['ID']~'_axisubs_plans_name'] }}</b></span>*/
/*                                     <div>*/
/*                                         {% set planPrefix = plan['ID']~'_'~plan['post_type']~'_' %}*/
/*                                         {% set planType = planMeta[planPrefix~'type'] %}*/
/*                                         {% if(planType != 'free') %}*/
/*                                             {% set price = currencyData['code']~planMeta[planPrefix~'price'] %}*/
/*                                             {{ price }}*/
/*                                         {% endif %}*/
/* */
/*                                         {% if(planType == 'free') %}*/
/*                                             {% if(planMeta[planPrefix~'period_forever'] == '1') %}*/
/*                                                 {{ esc_html_e('Forever', 'axis-subscriptions') }}*/
/*                                             {% else %}*/
/*                                                 {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                                 {{ planMeta[planPrefix~'period'] }}*/
/*                                                 {{ data['unitInWords'][period_units] }}*/
/*                                             {% endif %}*/
/*                                         {% elseif(planType == 'renewal') %} {# Non-recurring #}*/
/*                                             {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                             {{ data['unitInWords'][period_units] }}*/
/*                                         {% elseif(planType == 'renewal_with_trial') %} {# Non-recurring with trial #}*/
/*                                             {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                             {{ data['unitInWords'][period_units] }}*/
/*                                             {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                                 {{ esc_html_e('with trial duration of', 'axis-subscriptions') }}*/
/*                                                 {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                                 {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                                 {{ data['unitInWords'][trial_period_units] }}*/
/*                                             {% endif %}*/
/*                                         {% elseif(planType == 'recurring') %}*/
/*                                             {{ esc_html_e('for each', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                             {{ data['unitInWords'][period_units] }}*/
/*                                             {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                                 , {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'billing_cycles'] }} {{ esc_html_e('installments', 'axis-subscriptions') }}*/
/*                                             {% else %}*/
/*                                             {% endif %}*/
/*                                         {% elseif(planType == 'recurring_with_trial') %}*/
/*                                             {{ esc_html_e('for each', 'axis-subscriptions') }} {{ planMeta[planPrefix~'period'] }}*/
/*                                             {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                             {{ data['unitInWords'][period_units] }}*/
/*                                             {% if(planMeta[planPrefix~'billing_cycles'] > 0) %}*/
/*                                                 , {{ esc_html_e('for', 'axis-subscriptions') }} {{ planMeta[planPrefix~'billing_cycles'] }} {{ esc_html_e('installments', 'axis-subscriptions') }}*/
/*                                             {% else %}*/
/*                                             {% endif %}*/
/*                                             {% if(planMeta[planPrefix~'trial_period'] != '') %}*/
/*                                                 {{ esc_html_e('with trial duration of', 'axis-subscriptions') }}*/
/*                                                 {{ planMeta[planPrefix~'trial_period'] }}*/
/*                                                 {% set trial_period_units = planMeta[planPrefix~'trial_period_units'] %}*/
/*                                                 {{ data['unitInWords'][trial_period_units] }}*/
/*                                             {% endif %}*/
/*                                         {% else %}*/
/*                                             {% if(planMeta[planPrefix~'period'] != '') %}*/
/*                                                 <span>{{ planMeta[planPrefix~'period'] }}</span>*/
/*                                                 {% set period_units = planMeta[planPrefix~'period_units'] %}*/
/*                                                 {{ data['unitInWords'][period_units] }}*/
/*                                             {% endif %}*/
/*                                         {% endif %}*/
/*                                         {% if(planMeta[planPrefix~'setup_cost'] > 0) %}*/
/*                                             {% set setUpPrice = currencyData['code']~planMeta[planPrefix~'setup_cost'] %}*/
/*                                             {{ esc_html_e('and a', 'axis-subscriptions') }} {{ setUpPrice }} {{ esc_html_e('as setup cost', 'axis-subscriptions') }}*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td class="column-cost has-row-actions" data-colname="Total Cost">*/
/*                                     <span class="plan_price">{{ currencyData['code']~meta[subscribe['ID']~'_axisubs_subscribe_total_price'] }}</span>*/
/*                                 </td>*/
/*                                 <td class="column-status has-row-actions" data-colname="Status">*/
/*                               <span class="axisubs-data-content">*/
/*                                 {{ statusText[meta[subscribe['ID']~'_axisubs_subscribe_status']] | raw }}*/
/*                               </span>*/
/*                                 </td>*/
/*                                 <td class="column-action has-row-actions" data-colname="Actions">*/
/*                                     <div class="dropbtn">*/
/*                                         <div class="wrapper">*/
/*                                             <div class="content">*/
/*                                                 <ul>*/
/*                                                     {% if meta[subscribe['ID']~'_axisubs_subscribe_status'] != 'ACTIVE' %}*/
/*                                                         <a href="?page=subscriptions-index&task=activate&id={{ subscribe['ID'] }}"><li>{{ esc_html_e('Mark Active', 'axis-subscriptions') }}</li></a>*/
/*                                                     {% endif %}*/
/*                                                     {% if meta[subscribe['ID']~'_axisubs_subscribe_status'] != 'PENDING' %}*/
/*                                                         <a href="?page=subscriptions-index&task=pending&id={{ subscribe['ID'] }}"><li>{{ esc_html_e('Mark Pending', 'axis-subscriptions') }}</li></a>*/
/*                                                     {% endif %}*/
/*                                                     {% if meta[subscribe['ID']~'_axisubs_subscribe_status'] != 'CANCELED' %}*/
/*                                                         <a href="?page=subscriptions-index&task=cancel&id={{ subscribe['ID'] }}"><li>{{ esc_html_e('Mark Cancelled', 'axis-subscriptions') }}</li></a>*/
/*                                                     {% endif %}*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="parent">Action</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <a class="button button-primary action" href="{{ '?page=subscriptions-index&task=edit&user_id='~meta[subscribe['ID']~'_axisubs_subscribe_user_id']~'&sid='~subscribe['ID'] }}">{{ esc_html_e('Edit', 'axis-subscriptions') }}</a>*/
/*                                     <a class="button action" href="?page=subscriptions-index&task=delete&id={{ subscribe['ID'] }}">{{ esc_html_e('Delete', 'axis-subscriptions') }}</a>*/
/*                                     <a class="button action" href="{{ '?page=subscriptions-index&sid='~subscribe['ID'] }}">{{ esc_html_e('View', 'axis-subscriptions') }}</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% else %}*/
/*                             <tr>*/
/*                                 <td colspan="6">*/
/*                                     No subscription*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             {% if(data['total_items'] > 5) %}*/
/*                 {{ paginationD['limitbox'] | raw }}*/
/*                 {{ paginationD['links'] | raw }}*/
/*             {% endif %}*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */

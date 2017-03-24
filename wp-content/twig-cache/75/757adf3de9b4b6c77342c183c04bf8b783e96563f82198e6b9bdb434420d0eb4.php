<?php

/* @Axisubs/Admin/plan/edit.twig */
class __TwigTemplate_91f9c376f50da7a1b1be0bb65494b49a9b7b8641c40e71551925da87e10b10a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/plan/edit.twig", 1);
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
        echo "    <div class=\"axisubs axisubs-bs3 wrap\">
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "
        </h2>
        <form name=\"planForm\" id=\"planForm\" method=\"post\" action=\"?page=plans-index\" onsubmit=\"return validatePlan();\">
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_slug_stripe"), array(), "array") != "")) {
            // line 9
            echo "            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"updated notice-warning\"><p>";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Few fields cannot be editable, Stripe doesn't allows to edit plan price and durations.", "axis-subscriptions")), "html", null, true);
            echo "</p></div>
                </div>
            </div>
            ";
        }
        // line 15
        echo "            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    ";
        // line 17
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") > 0)) {
            // line 18
            echo "                    ";
            $context["planID"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array");
            // line 19
            echo "                    <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 edit-plan\">
                        ";
        } else {
            // line 21
            echo "                        ";
            $context["planID"] = 0;
            // line 22
            echo "                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                            ";
        }
        // line 24
        echo "                            <div id=\"axisubs_plan_create_step_1\" ";
        if (((isset($context["planID"]) ? $context["planID"] : null) > 0)) {
            echo " class=\"hide\" ";
        }
        echo ">
                                <div class=\"axisubs-fields\">
                                    <div class=\"axisubs-fields-label\">
                                        <label for=\"axisub_plan_type\">Select plan type</label>
                                    </div>
                                    <div class=\"axisubs-fields-content\">
                                        <select name=\"axisubs[plans][type]\" id=\"axisub_plan_type\" onchange=\"loadFieldsOfPlanType(this.value, '";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
        echo "')\">
                                            <option value=\"free\" ";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array") == "free")) {
            echo " selected ";
        }
        echo ">Free</option>
                                            <!--<option value=\"non_renewal\" ";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array") == "non_renewal")) {
            echo " selected ";
        }
        echo ">Non Renewal</option>-->
                                            <option value=\"renewal\" ";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array") == "renewal")) {
            echo " selected ";
        }
        echo ">Non-recurring</option>
                                            <option value=\"renewal_with_trial\" ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array") == "renewal_with_trial")) {
            echo " selected ";
        }
        echo ">Non-recurring with trial</option>
                                            <option value=\"recurring\" ";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array") == "recurring")) {
            echo " selected ";
        }
        echo ">Recurring</option>
                                            <option value=\"recurring_with_trial\" ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array") == "recurring_with_trial")) {
            echo " selected ";
        }
        echo ">Recurring with trial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"axisubs-fields\">
                                    <div class=\"axisubs-fields-label\">
                                    </div>
                                    <div class=\"axisubs-fields-content\">
                                        <button class=\"button plan_step_2 button-primary\" type=\"button\">Next</button>
                                        <a href=\"?page=plans-index\" class=\"button\" >Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div id=\"axisubs_plan_create_step_2\" ";
        // line 49
        if (((isset($context["planID"]) ? $context["planID"] : null) <= 0)) {
            echo " class=\"hide\" ";
        }
        echo ">
                                <div class=\"tab-container\">
                                    <div class=\"nav-tabs-container\">
                                        <ul class=\"nav nav-tabs\">
                                            <li role=\"basic\" class=\"active tab_axisubs\"><a data-toggle=\"tab\" href=\"#basic\">Plan Details</a></li>
                                            <li role=\"durations\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#durations\">Duration and Prices</a></li>
                                            <li role=\"roles\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#roles\">Add/Remove Roles</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"axisubs-fields-con tab-content\">
                                        <div id=\"basic\" class=\"tab-pane fade in active\">
                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_name\">Plan Name</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    <input type=\"text\" class=\"required\" name=\"axisubs[plans][name]\" id=\"axisub_plan_name\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "\"/>
                                                    <span class=\"help-text\">A descriptive name for this plan. Please note that this will be displayed to customers.</span>
                                                </div>
                                            </div>

                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_status\">Status</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    <select name=\"axisubs[plans][status]\" id=\"axisub_plan_status\" >
                                                        <option value=\"1\" ";
        // line 76
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_status"), array(), "array") == "1")) {
            echo " selected ";
        }
        echo ">Enabled</option>
                                                        <option value=\"0\" ";
        // line 77
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_status"), array(), "array") == "0")) {
            echo " selected ";
        }
        echo ">Disabled</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_slug\">Alias</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    <input type=\"text\" class=\"required\" name=\"axisubs[plans][slug]\" id=\"axisub_plan_slug\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_slug"), array(), "array"), "html", null, true);
        echo "\"/>
                                                    <span class=\"help-text\">Unique identifier used in hosted page URLs and API calls.</span>
                                                </div>
                                            </div>

                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_image\">Image</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_image"), array(), "array") != "")) {
            // line 98
            echo "                                                        ";
            $context["classUploadImg"] = "show";
            // line 99
            echo "                                                        ";
            $context["imagePath"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_image"), array(), "array");
            // line 100
            echo "                                                    ";
        } else {
            // line 101
            echo "                                                        ";
            $context["classUploadImg"] = "hide";
            // line 102
            echo "                                                        ";
            $context["imagePath"] = ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array") . "/resources/assets/images/ico_noimage.png");
            // line 103
            echo "                                                    ";
        }
        // line 104
        echo "                                                    <button type=\"button\" class=\"upload_image_button\">Browse Image</button>
                                                    <img class=\"upload_image_preview\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["imagePath"]) ? $context["imagePath"] : null), "html", null, true);
        echo "\" />
                                                    <button type=\"button\" data-path=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array"), "html", null, true);
        echo "/resources/assets/images/ico_noimage.png\" class=\"upload_image_button_close ";
        echo twig_escape_filter($this->env, (isset($context["classUploadImg"]) ? $context["classUploadImg"] : null), "html", null, true);
        echo "\">X</button>
                                                    <input type=\"hidden\" name=\"axisubs[plans][image]\" id=\"axisub_plan_image\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_image"), array(), "array"), "html", null, true);
        echo "\"/>
                                                    <input type=\"hidden\" name=\"axisubs[plans][image_attachment_id]\" id=\"axisub_plan_image_attachment_id\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_image_attachment_id"), array(), "array"), "html", null, true);
        echo "\"/>
                                                </div>
                                            </div>

                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_description\">Description</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    ";
        // line 117
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_description_editor", array(), "array");
        echo "
                                                    <span class=\"help-text\">Description about the plan to show in the customer portal when users change their subscription.</span>
                                                </div>
                                            </div>

                                            <div class=\"axisubs-fields hide\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_payment_plugins\">Payment Plugins</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    ";
        // line 127
        $context["paymentPlugins"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_payment_plugins"), array(), "array"), ",");
        // line 128
        echo "                                                    <select name=\"axisubs[plans][payment_plugins][]\" id=\"axisub_plan_payment_plugins\" multiple size=\"5\">
                                                        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "payment_plugins", array(), "array"));
        foreach ($context['_seq'] as $context["key"] => $context["payment_plugins"]) {
            // line 130
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment_plugins"], "pluginFolder", array(), "array"), "html", null, true);
            echo "\" ";
            if (twig_in_filter($this->getAttribute($context["payment_plugins"], "pluginFolder", array(), "array"), (isset($context["paymentPlugins"]) ? $context["paymentPlugins"] : null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment_plugins"], "Name", array(), "array"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['payment_plugins'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                                                    </select>
                                                    <span class=\"help-text\">If not selected, it list all payment plugins in front end.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id=\"durations\" class=\"tab-pane fade\">
                                            <div class=\"axisubs-fields-label\">
                                                <label for=\"axisub_plan_status\">Plan Type</label>
                                            </div>
                                            <div class=\"axisubs-fields-content plan_type_value_text\">
                                                ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_type_text", array(), "array"), "html", null, true);
        echo "
                                            </div>
                                            <div class=\"axisubs-fields-plantypes-con-o loader-ajax-o\">
                                                <div class=\"loader-ajax\"></div>
                                                <div class=\"axisubs-fields-plantypes-c\">
                                                </div>
                                            </div>
                                        </div>
                                        <div id=\"roles\" class=\"tab-pane fade\">
                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_add_roles\">Add Role</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    ";
        // line 156
        $context["add_roles"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_add_roles"), array(), "array"), ",");
        // line 157
        echo "                                                    <select name=\"axisubs[plans][add_roles][]\" class=\"widget-hot-topics add_remove\" id=\"axisub_plan_add_roles\" multiple size=\"5\">
                                                        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role_names"]) ? $context["role_names"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["role_name"]) {
            // line 159
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["key"], (isset($context["add_roles"]) ? $context["add_roles"] : null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["role_name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['role_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                                                    </select>
                                                    <span class=\"help-text\">Users will be added to these WordPress! User roles when their subscription to this level is enabled.</span>
                                                </div>
                                            </div>

                                            <div class=\"axisubs-fields\">
                                                <div class=\"axisubs-fields-label\">
                                                    <label for=\"axisub_plan_remove_roles\">Remove Role</label>
                                                </div>
                                                <div class=\"axisubs-fields-content\">
                                                    ";
        // line 171
        $context["add_roles"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_remove_roles"), array(), "array"), ",");
        // line 172
        echo "                                                    <select class=\"add_remove\" name=\"axisubs[plans][remove_roles][]\" id=\"axisub_plan_remove_roles\" multiple size=\"5\">
                                                        ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role_names"]) ? $context["role_names"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["role_name"]) {
            // line 174
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["key"], (isset($context["add_roles"]) ? $context["add_roles"] : null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["role_name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['role_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                                    </select>
                                                    <span class=\"help-text\">Users will be removed from these WordPress! User roles when their subscription to this level is disabled.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"axisubs-fields-con\">
                                    <div class=\"axisubs-fields\">
                                        <div class=\"axisubs-fields-label\">
                                            <input type=\"hidden\" name=\"task\" id=\"task\" value=\"save\"/>
                                            <input type=\"hidden\" name=\"post_type\" value=\"axisubs_plans\"/>
                                            <input type=\"hidden\" name=\"id\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
        echo "\"/>
                                        </div>
                                        <div class=\"axisubs-fields-content page-btn\">
                                            ";
        // line 191
        if (((isset($context["planID"]) ? $context["planID"] : null) <= 0)) {
            // line 192
            echo "                                                <button class=\"button plan_step_1\" type=\"button\">Previous</button>
                                            ";
        }
        // line 194
        echo "                                            <button class=\"button button-primary\" type=\"submit\">Save</button>
                                            <button class=\"button axisubs_save_close\" type=\"button\">Save & Close</button>
                                            <a href=\"?page=plans-index\" class=\"button\" >Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type=\"hidden\" id=\"site_url\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\"/>
                            ";
        // line 203
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "payment_additional_data", array(), "array");
        echo "
                        </div>
                        ";
        // line 205
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") > 0)) {
            // line 206
            echo "                            <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 plan-shortcodes\">
                                <div class=\"axisubs-fields-con\">
                                    <h3>Shortcodes</h3>
                                    [AxisubsSelectedPlans id=";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
            echo "] <span class=\"help-text\">- Helps to load this Plan using plan id</span>
                                    [AxisubsPlanPrice id=";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
            echo "] <span class=\"help-text\">- Helps to load Plan Price</span>
                                    [AxisubsPlanImage id=";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
            echo "] <span class=\"help-text\">- Helps to load Plan Image</span>
                                    [AxisubsSubscribeButton id=";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
            echo "] <span class=\"help-text\">- Helps to load Subscribe button</span>
                                </div>
                            </div>
                        ";
        }
        // line 216
        echo "                    </div>
                </div>
            </div>
        </form>
        <script>
            (function (\$) {
                \$(document).ready(function () {
                    loadFieldsOfPlanType('";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_type"), array(), "array"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array"), "html", null, true);
        echo "');
                });
            })(jQuery);
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/plan/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 223,  452 => 216,  445 => 212,  441 => 211,  437 => 210,  433 => 209,  428 => 206,  426 => 205,  421 => 203,  417 => 202,  407 => 194,  403 => 192,  401 => 191,  395 => 188,  381 => 176,  366 => 174,  362 => 173,  359 => 172,  357 => 171,  345 => 161,  330 => 159,  326 => 158,  323 => 157,  321 => 156,  304 => 142,  292 => 132,  277 => 130,  273 => 129,  270 => 128,  268 => 127,  255 => 117,  243 => 108,  239 => 107,  233 => 106,  229 => 105,  226 => 104,  223 => 103,  220 => 102,  217 => 101,  214 => 100,  211 => 99,  208 => 98,  206 => 97,  193 => 87,  178 => 77,  172 => 76,  158 => 65,  137 => 49,  119 => 36,  113 => 35,  107 => 34,  101 => 33,  95 => 32,  89 => 31,  85 => 30,  73 => 24,  69 => 22,  66 => 21,  62 => 19,  59 => 18,  57 => 17,  53 => 15,  46 => 11,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="axisubs axisubs-bs3 wrap">*/
/*         <h2>{{ pagetitle }}*/
/*         </h2>*/
/*         <form name="planForm" id="planForm" method="post" action="?page=plans-index" onsubmit="return validatePlan();">*/
/*             {% if(item['meta'][item['ID']~'_axisubs_plans_slug_stripe'] != '') %}*/
/*             <div class="container-fluid">*/
/*                 <div class="row-fluid">*/
/*                     <div class="updated notice-warning"><p>{{ esc_html_e('Few fields cannot be editable, Stripe doesn\'t allows to edit plan price and durations.', 'axis-subscriptions') }}</p></div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="container-fluid">*/
/*                 <div class="row-fluid">*/
/*                     {% if(item['ID'] > 0) %}*/
/*                     {% set planID = item['ID'] %}*/
/*                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 edit-plan">*/
/*                         {% else %}*/
/*                         {% set planID = 0 %}*/
/*                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">*/
/*                             {% endif %}*/
/*                             <div id="axisubs_plan_create_step_1" {% if(planID > 0) %} class="hide" {% endif %}>*/
/*                                 <div class="axisubs-fields">*/
/*                                     <div class="axisubs-fields-label">*/
/*                                         <label for="axisub_plan_type">Select plan type</label>*/
/*                                     </div>*/
/*                                     <div class="axisubs-fields-content">*/
/*                                         <select name="axisubs[plans][type]" id="axisub_plan_type" onchange="loadFieldsOfPlanType(this.value, '{{ item['ID'] }}')">*/
/*                                             <option value="free" {% if item['meta'][item['ID']~'_axisubs_plans_type'] == 'free' %} selected {% endif %}>Free</option>*/
/*                                             <!--<option value="non_renewal" {% if item['meta'][item['ID']~'_axisubs_plans_type'] == 'non_renewal' %} selected {% endif %}>Non Renewal</option>-->*/
/*                                             <option value="renewal" {% if item['meta'][item['ID']~'_axisubs_plans_type'] == 'renewal' %} selected {% endif %}>Non-recurring</option>*/
/*                                             <option value="renewal_with_trial" {% if item['meta'][item['ID']~'_axisubs_plans_type'] == 'renewal_with_trial' %} selected {% endif %}>Non-recurring with trial</option>*/
/*                                             <option value="recurring" {% if item['meta'][item['ID']~'_axisubs_plans_type'] == 'recurring' %} selected {% endif %}>Recurring</option>*/
/*                                             <option value="recurring_with_trial" {% if item['meta'][item['ID']~'_axisubs_plans_type'] == 'recurring_with_trial' %} selected {% endif %}>Recurring with trial</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields">*/
/*                                     <div class="axisubs-fields-label">*/
/*                                     </div>*/
/*                                     <div class="axisubs-fields-content">*/
/*                                         <button class="button plan_step_2 button-primary" type="button">Next</button>*/
/*                                         <a href="?page=plans-index" class="button" >Cancel</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="axisubs_plan_create_step_2" {% if(planID <= 0) %} class="hide" {% endif %}>*/
/*                                 <div class="tab-container">*/
/*                                     <div class="nav-tabs-container">*/
/*                                         <ul class="nav nav-tabs">*/
/*                                             <li role="basic" class="active tab_axisubs"><a data-toggle="tab" href="#basic">Plan Details</a></li>*/
/*                                             <li role="durations" class="tab_axisubs"><a data-toggle="tab" href="#durations">Duration and Prices</a></li>*/
/*                                             <li role="roles" class="tab_axisubs"><a data-toggle="tab" href="#roles">Add/Remove Roles</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div class="axisubs-fields-con tab-content">*/
/*                                         <div id="basic" class="tab-pane fade in active">*/
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_name">Plan Name</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     <input type="text" class="required" name="axisubs[plans][name]" id="axisub_plan_name" value="{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}"/>*/
/*                                                     <span class="help-text">A descriptive name for this plan. Please note that this will be displayed to customers.</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_status">Status</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     <select name="axisubs[plans][status]" id="axisub_plan_status" >*/
/*                                                         <option value="1" {% if item['meta'][item['ID']~'_axisubs_plans_status'] == '1' %} selected {% endif %}>Enabled</option>*/
/*                                                         <option value="0" {% if item['meta'][item['ID']~'_axisubs_plans_status'] == '0' %} selected {% endif %}>Disabled</option>*/
/*                                                     </select>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_slug">Alias</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     <input type="text" class="required" name="axisubs[plans][slug]" id="axisub_plan_slug" value="{{ item['meta'][item['ID']~'_axisubs_plans_slug'] }}"/>*/
/*                                                     <span class="help-text">Unique identifier used in hosted page URLs and API calls.</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_image">Image</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     {% if(item['meta'][item['ID']~'_axisubs_plans_image'] != '') %}*/
/*                                                         {% set classUploadImg = 'show' %}*/
/*                                                         {% set imagePath = item['meta'][item['ID']~'_axisubs_plans_image'] %}*/
/*                                                     {% else %}*/
/*                                                         {% set classUploadImg = 'hide' %}*/
/*                                                         {% set imagePath = data['plugin_url']~'/resources/assets/images/ico_noimage.png' %}*/
/*                                                     {% endif %}*/
/*                                                     <button type="button" class="upload_image_button">Browse Image</button>*/
/*                                                     <img class="upload_image_preview" src="{{ imagePath }}" />*/
/*                                                     <button type="button" data-path="{{ data['plugin_url'] }}/resources/assets/images/ico_noimage.png" class="upload_image_button_close {{ classUploadImg }}">X</button>*/
/*                                                     <input type="hidden" name="axisubs[plans][image]" id="axisub_plan_image" value="{{ item['meta'][item['ID']~'_axisubs_plans_image'] }}"/>*/
/*                                                     <input type="hidden" name="axisubs[plans][image_attachment_id]" id="axisub_plan_image_attachment_id" value="{{ item['meta'][item['ID']~'_axisubs_plans_image_attachment_id'] }}"/>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_description">Description</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     {{ data['plan_description_editor'] | raw }}*/
/*                                                     <span class="help-text">Description about the plan to show in the customer portal when users change their subscription.</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="axisubs-fields hide">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_payment_plugins">Payment Plugins</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     {% set paymentPlugins = item['meta'][item['ID']~'_axisubs_plans_payment_plugins']|split(',') %}*/
/*                                                     <select name="axisubs[plans][payment_plugins][]" id="axisub_plan_payment_plugins" multiple size="5">*/
/*                                                         {% for key, payment_plugins in data['payment_plugins'] %}*/
/*                                                             <option value="{{ payment_plugins['pluginFolder'] }}" {% if payment_plugins['pluginFolder'] in paymentPlugins %} selected {% endif %}>{{ payment_plugins['Name'] }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                     <span class="help-text">If not selected, it list all payment plugins in front end.</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div id="durations" class="tab-pane fade">*/
/*                                             <div class="axisubs-fields-label">*/
/*                                                 <label for="axisub_plan_status">Plan Type</label>*/
/*                                             </div>*/
/*                                             <div class="axisubs-fields-content plan_type_value_text">*/
/*                                                 {{ data['plan_type_text'] }}*/
/*                                             </div>*/
/*                                             <div class="axisubs-fields-plantypes-con-o loader-ajax-o">*/
/*                                                 <div class="loader-ajax"></div>*/
/*                                                 <div class="axisubs-fields-plantypes-c">*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div id="roles" class="tab-pane fade">*/
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_add_roles">Add Role</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     {% set add_roles = item['meta'][item['ID']~'_axisubs_plans_add_roles']|split(',') %}*/
/*                                                     <select name="axisubs[plans][add_roles][]" class="widget-hot-topics add_remove" id="axisub_plan_add_roles" multiple size="5">*/
/*                                                         {% for key, role_name in role_names %}*/
/*                                                             <option value="{{ key }}" {% if key in add_roles %} selected {% endif %}>{{ role_name }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                     <span class="help-text">Users will be added to these WordPress! User roles when their subscription to this level is enabled.</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="axisubs-fields">*/
/*                                                 <div class="axisubs-fields-label">*/
/*                                                     <label for="axisub_plan_remove_roles">Remove Role</label>*/
/*                                                 </div>*/
/*                                                 <div class="axisubs-fields-content">*/
/*                                                     {% set add_roles = item['meta'][item['ID']~'_axisubs_plans_remove_roles']|split(',') %}*/
/*                                                     <select class="add_remove" name="axisubs[plans][remove_roles][]" id="axisub_plan_remove_roles" multiple size="5">*/
/*                                                         {% for key, role_name in role_names %}*/
/*                                                             <option value="{{ key }}" {% if key in add_roles %} selected {% endif %}>{{ role_name }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                     <span class="help-text">Users will be removed from these WordPress! User roles when their subscription to this level is disabled.</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-con">*/
/*                                     <div class="axisubs-fields">*/
/*                                         <div class="axisubs-fields-label">*/
/*                                             <input type="hidden" name="task" id="task" value="save"/>*/
/*                                             <input type="hidden" name="post_type" value="axisubs_plans"/>*/
/*                                             <input type="hidden" name="id" value="{{ item['ID'] }}"/>*/
/*                                         </div>*/
/*                                         <div class="axisubs-fields-content page-btn">*/
/*                                             {% if(planID <= 0) %}*/
/*                                                 <button class="button plan_step_1" type="button">Previous</button>*/
/*                                             {% endif %}*/
/*                                             <button class="button button-primary" type="submit">Save</button>*/
/*                                             <button class="button axisubs_save_close" type="button">Save & Close</button>*/
/*                                             <a href="?page=plans-index" class="button" >Cancel</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <input type="hidden" id="site_url" value="{{ site_url }}"/>*/
/*                             {{ data['payment_additional_data'] | raw }}*/
/*                         </div>*/
/*                         {% if(item['ID'] > 0) %}*/
/*                             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 plan-shortcodes">*/
/*                                 <div class="axisubs-fields-con">*/
/*                                     <h3>Shortcodes</h3>*/
/*                                     [AxisubsSelectedPlans id={{ item['ID'] }}] <span class="help-text">- Helps to load this Plan using plan id</span>*/
/*                                     [AxisubsPlanPrice id={{ item['ID'] }}] <span class="help-text">- Helps to load Plan Price</span>*/
/*                                     [AxisubsPlanImage id={{ item['ID'] }}] <span class="help-text">- Helps to load Plan Image</span>*/
/*                                     [AxisubsSubscribeButton id={{ item['ID'] }}] <span class="help-text">- Helps to load Subscribe button</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*         <script>*/
/*             (function ($) {*/
/*                 $(document).ready(function () {*/
/*                     loadFieldsOfPlanType('{{ item['meta'][item['ID']~'_axisubs_plans_type'] }}', '{{ item['ID'] }}');*/
/*                 });*/
/*             })(jQuery);*/
/*         </script>*/
/*     </div>*/
/* {% endblock %}*/
/* */

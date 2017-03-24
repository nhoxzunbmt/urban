<?php

/* @Axisubs/Admin/config/edit.twig */
class __TwigTemplate_71dca9a95d5aa75c97d0de15ef7b2f86ff0f4f215f4c0be11dc728b7cb47b093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/config/edit.twig", 1);
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
        echo "<div class=\"axisubs axisubs-bs3 wrap\">
  <h3 class=\"wp-heading-inline\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h3>
  <div class=\"axisubs_title_description\">
      ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Global settings for the membership system. Please make sure you configure these settings correct.", "axis-subscriptions")), "html", null, true);
        echo "
  </div>
    ";
        // line 9
        $context["item"] = (isset($context["all"]) ? $context["all"] : null);
        // line 10
        echo "    ";
        $context["metaPrefix"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "post_type", array(), "array")) . "_");
        // line 11
        echo "  <form method=\"post\" id=\"config\" action=\"?page=config-index\" onsubmit=\"return validateConfig()\">
      <div class=\"tab-container\">
          <div class=\"nav-tabs-container\">
              <ul class=\"nav nav-tabs\">
                  <li role=\"basic\" class=\"active tab_axisubs\"><a data-toggle=\"tab\" href=\"#basic\">Basic</a></li>
                  <li role=\"tax\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#tax\">Tax</a></li>
                  <li role=\"eu_vat\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#eu_vat\">EU Vat</a></li>
                  <li role=\"dashboard\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#dashboard\">Dashboard</a></li>
                  <li role=\"frontend\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#frontend\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Frontend", "axis-subscriptions")), "html", null, true);
        echo "</a></li>
              </ul>
          </div>
         <div class=\"axisubs-fields-con tab-content\">
             <div id=\"basic\" class=\"tab-pane fade in active\">
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_address1\">Address Line 1</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][address1]\" id=\"axisuba_config_address1\" class=\"required\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_address1"), array(), "array"), "html", null, true);
        echo "\"/>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_address2\">Address Line 2</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][address2]\" id=\"axisuba_config_address2\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_address2"), array(), "array"), "html", null, true);
        echo "\"/>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_city\">City</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][city]\" id=\"axisuba_config_city\" class=\"required\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_city"), array(), "array"), "html", null, true);
        echo "\"/>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_zip\">Zip / Postal code</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][zip]\" id=\"axisuba_config_zip\" class=\"required\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_zip"), array(), "array"), "html", null, true);
        echo "\"/>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_country\">Country</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         ";
        // line 62
        echo "                         ";
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array");
        echo "
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_region\">Zone / Region</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         ";
        // line 71
        echo "                         ";
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array");
        echo "
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_currency\">Currency Code</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][currency]\" id=\"axisuba_config_currency\" class=\"required\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_currency"), array(), "array"), "html", null, true);
        echo "\"/>
                         <span class=\"help-text\">Eg: USD, AUD</span>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_currency_code\">Currency Symbol</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][currency_code]\" id=\"axisuba_config_currency_code\" class=\"required\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_currency_code"), array(), "array"), "html", null, true);
        echo "\"/>
                         <span class=\"help-text\">Eg: \$</span>
                     </div>
                 </div>

                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisuba_config_invoice_prefix\">Invoice Prefix</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][invoice_prefix]\" id=\"axisuba_config_invoice_prefix\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_invoice_prefix"), array(), "array"), "html", null, true);
        echo "\"/>
                         <span class=\"help-text\">Default value of invoice prefix is: axisubs_wp</span>
                     </div>
                 </div>
             </div>
             <div id=\"tax\" class=\"tab-pane fade\">
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <h3>Tax Settings</h3>
                     </div>
                     <div class=\"axisubs-fields-content\">
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_enable\">Enable Tax</label>
                     </div>
                     ";
        // line 115
        $context["enable_tax"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "enable_tax"), array(), "array");
        // line 116
        echo "                     ";
        if (((isset($context["enable_tax"]) ? $context["enable_tax"] : null) == "")) {
            // line 117
            echo "                         ";
            $context["enable_tax"] = 0;
            // line 118
            echo "                     ";
        }
        // line 119
        echo "                     <div class=\"axisubs-fields-content\">
                         <input type=\"radio\" name=\"axisubs[config][enable_tax]\" id=\"axisub_config_enable1\" value=\"1\" ";
        // line 120
        if (((isset($context["enable_tax"]) ? $context["enable_tax"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_enable1\">Yes</label>
                         <input type=\"radio\" name=\"axisubs[config][enable_tax]\" id=\"axisub_config_enable0\" value=\"0\" ";
        // line 122
        if (((isset($context["enable_tax"]) ? $context["enable_tax"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_enable0\">No</label>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_tax_type\">Tax type</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <select name=\"axisubs[config][tax_type]\" id=\"axisub_config_tax_type\" >
                             <option value=\"excluding_tax\" ";
        // line 132
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "tax_type"), array(), "array") == "excluding_tax")) {
            echo " selected ";
        }
        echo ">Excluding tax</option>
                             <option value=\"including_tax\" ";
        // line 133
        if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "tax_type"), array(), "array") == "including_tax")) {
            echo " selected ";
        }
        echo ">Including tax</option>
                         </select>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_display_tax_info\">Display tax information below the prices</label>
                     </div>
                     ";
        // line 141
        $context["display_tax_info"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "display_tax_info"), array(), "array");
        // line 142
        echo "                     ";
        if (((isset($context["display_tax_info"]) ? $context["display_tax_info"] : null) == "")) {
            // line 143
            echo "                         ";
            $context["display_tax_info"] = 1;
            // line 144
            echo "                     ";
        }
        // line 145
        echo "                     <div class=\"axisubs-fields-content\">
                         <input type=\"radio\" name=\"axisubs[config][display_tax_info]\" id=\"axisub_config_display_tax_info1\" value=\"1\" ";
        // line 146
        if (((isset($context["display_tax_info"]) ? $context["display_tax_info"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_display_tax_info1\">Yes</label>
                         <input type=\"radio\" name=\"axisubs[config][display_tax_info]\" id=\"axisub_config_display_tax_info0\" value=\"0\" ";
        // line 148
        if (((isset($context["display_tax_info"]) ? $context["display_tax_info"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_display_tax_info0\">No</label>
                         <span class=\"help-text\">Example: (Incl. 19% tax). NOTE: This applies only to Plan pages.</span>
                     </div>
                 </div>
             </div>
             <div id=\"eu_vat\" class=\"tab-pane fade\">
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <h3>EU Vat Settings</h3>
                     </div>
                     <div class=\"axisubs-fields-content\">
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_enable_eu_vat\">Enable EU Vat</label>
                     </div>
                     ";
        // line 166
        $context["enable_eu_vat"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "enable_eu_vat"), array(), "array");
        // line 167
        echo "                     ";
        if (((isset($context["enable_eu_vat"]) ? $context["enable_eu_vat"] : null) == "")) {
            // line 168
            echo "                         ";
            $context["enable_eu_vat"] = 0;
            // line 169
            echo "                     ";
        }
        // line 170
        echo "                     <div class=\"axisubs-fields-content\">
                         <input type=\"radio\" name=\"axisubs[config][enable_eu_vat]\" id=\"axisub_config_enable_eu_vat1\" value=\"1\" ";
        // line 171
        if (((isset($context["enable_eu_vat"]) ? $context["enable_eu_vat"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_enable_eu_vat1\">Yes</label>
                         <input type=\"radio\" name=\"axisubs[config][enable_eu_vat]\" id=\"axisub_config_enable_eu_vat0\" value=\"0\" ";
        // line 173
        if (((isset($context["enable_eu_vat"]) ? $context["enable_eu_vat"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_enable_eu_vat0\">No</label>
                         <span class=\"help-text\"></span>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_no_tax_for_non_eu\">No tax for Non-EU</label>
                     </div>
                     ";
        // line 182
        $context["no_tax_for_non_eu"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "no_tax_for_non_eu"), array(), "array");
        // line 183
        echo "                     ";
        if (((isset($context["no_tax_for_non_eu"]) ? $context["no_tax_for_non_eu"] : null) == "")) {
            // line 184
            echo "                         ";
            $context["no_tax_for_non_eu"] = 0;
            // line 185
            echo "                     ";
        }
        // line 186
        echo "                     <div class=\"axisubs-fields-content\">
                         <input type=\"radio\" name=\"axisubs[config][no_tax_for_non_eu]\" id=\"axisub_config_no_tax_for_non_eu1\" value=\"1\" ";
        // line 187
        if (((isset($context["no_tax_for_non_eu"]) ? $context["no_tax_for_non_eu"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_no_tax_for_non_eu1\">Yes</label>
                         <input type=\"radio\" name=\"axisubs[config][no_tax_for_non_eu]\" id=\"axisub_config_no_tax_for_non_eu0\" value=\"0\" ";
        // line 189
        if (((isset($context["no_tax_for_non_eu"]) ? $context["no_tax_for_non_eu"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_no_tax_for_non_eu0\">No</label>
                         <span class=\"help-text\">Choose yes, if you DONT want to charge tax for the Non-EU customers</span>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_apply_digital_rules\">Apply Digital Rules</label>
                     </div>
                     ";
        // line 198
        $context["apply_digital_rules"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "apply_digital_rules"), array(), "array");
        // line 199
        echo "                     ";
        if (((isset($context["apply_digital_rules"]) ? $context["apply_digital_rules"] : null) == "")) {
            // line 200
            echo "                         ";
            $context["apply_digital_rules"] = 0;
            // line 201
            echo "                     ";
        }
        // line 202
        echo "                     <div class=\"axisubs-fields-content\">
                         <input type=\"radio\" name=\"axisubs[config][apply_digital_rules]\" id=\"axisub_config_apply_digital_rules1\" value=\"1\" ";
        // line 203
        if (((isset($context["apply_digital_rules"]) ? $context["apply_digital_rules"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_apply_digital_rules1\">Yes</label>
                         <input type=\"radio\" name=\"axisubs[config][apply_digital_rules]\" id=\"axisub_config_apply_digital_rules0\" value=\"0\" ";
        // line 205
        if (((isset($context["apply_digital_rules"]) ? $context["apply_digital_rules"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_apply_digital_rules0\">No</label>
                         <span class=\"help-text\">Choose yes, only for digital product subscriptions.</span>
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_validate_vat_number\">Validate Tax Number field</label>
                     </div>
                     ";
        // line 214
        $context["validate_vat_number"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "validate_vat_number"), array(), "array");
        // line 215
        echo "                     ";
        if (((isset($context["validate_vat_number"]) ? $context["validate_vat_number"] : null) == "")) {
            // line 216
            echo "                         ";
            $context["validate_vat_number"] = 1;
            // line 217
            echo "                     ";
        }
        // line 218
        echo "                     <div class=\"axisubs-fields-content\">
                         <input type=\"radio\" name=\"axisubs[config][validate_vat_number]\" id=\"axisub_config_validate_vat_number1\" value=\"1\" ";
        // line 219
        if (((isset($context["validate_vat_number"]) ? $context["validate_vat_number"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_validate_vat_number1\">Yes</label>
                         <input type=\"radio\" name=\"axisubs[config][validate_vat_number]\" id=\"axisub_config_validate_vat_number0\" value=\"0\" ";
        // line 221
        if (((isset($context["validate_vat_number"]) ? $context["validate_vat_number"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                         <label for=\"axisub_config_validate_vat_number0\">No</label>
                         <span class=\"help-text\">If yes, Tax Number field will validate and shows error before submitting.</span>
                     </div>
                 </div>
             </div>
             <div id=\"dashboard\" class=\"tab-pane fade\">
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <h3>Dashboard Settings</h3>
                     </div>
                     <div class=\"axisubs-fields-content\">
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_plans_for_graph_report\">Plans in graph</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         ";
        // line 240
        if ((twig_length_filter($this->env, (isset($context["plans"]) ? $context["plans"] : null)) > 0)) {
            // line 241
            echo "                             <select name=\"axisubs[config][plans_for_graph_report][]\" class=\"widget-hot-topics\" id=\"axisub_config_plans_for_graph_report\" multiple size=\"5\">
                                 ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plans"]) ? $context["plans"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["plan"]) {
                // line 243
                echo "                                     ";
                $context["planMeta"] = $this->getAttribute($context["plan"], "meta", array(), "array");
                // line 244
                echo "                                     ";
                $context["planPrefix"] = ((($this->getAttribute($context["plan"], "ID", array(), "array") . "_") . $this->getAttribute($context["plan"], "post_type", array(), "array")) . "_");
                // line 245
                echo "                                     <option value=\"";
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
            // line 247
            echo "                             </select>
                             <span class=\"help-text\">The selected plans will be display in graph.</span>
                         ";
        } else {
            // line 250
            echo "                             <span class=\"help-text\">You do not have any active Subscription Plans yet. Please create them <a href=\"?page=plans-index&task=edit\">Here</a>.</span>
                         ";
        }
        // line 252
        echo "                     </div>
                 </div>
             </div>
             <div id=\"frontend\" class=\"tab-pane fade\">
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <h3>";
        // line 258
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Frontend Settings", "axis-subscriptions")), "html", null, true);
        echo "</h3>
                     </div>
                     <div class=\"axisubs-fields-content\">
                     </div>
                 </div>
                 <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                         <label for=\"axisub_config_subscribe_btn_text\">";
        // line 265
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Subscribe button text", "axis-subscriptions")), "html", null, true);
        echo "</label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                         <input type=\"text\" name=\"axisubs[config][subscribe_btn_text]\" id=\"axisuba_config_subscribe_btn_text\" class=\"\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array") . "_axisubs_config_subscribe_btn_text"), array(), "array"), "html", null, true);
        echo "\"/>
                         <span class=\"help-text\">";
        // line 269
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Subscribe button text in front end", "axis-subscriptions")), "html", null, true);
        echo "</span>
                     </div>
                 </div>
             </div>
             <div class=\"axisubs-fields\">
                 <div class=\"axisubs-fields-label\">
                     <input type=\"hidden\" name=\"task\" value=\"save\"/>
                     <input type=\"hidden\" name=\"post_type\" value=\"axisubs_config\"/>
                     <input type=\"hidden\" name=\"id\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["all"]) ? $context["all"] : null), "ID", array(), "array"), "html", null, true);
        echo "\"/>
                 </div>
                 <div class=\"axisubs-fields-content\">
                     <button class=\"button button-primary\" type=\"submit\">Save</button>
                     <a class=\"button\" href=\"?page=dashboard-index\">Cancel</a>
                 </div>
             </div>
          </div>
      </div>
      <input type=\"hidden\" name=\"site_url\" value=\"";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\" id=\"site_url\"/>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/config/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 286,  512 => 277,  501 => 269,  497 => 268,  491 => 265,  481 => 258,  473 => 252,  469 => 250,  464 => 247,  449 => 245,  446 => 244,  443 => 243,  439 => 242,  436 => 241,  434 => 240,  410 => 221,  403 => 219,  400 => 218,  397 => 217,  394 => 216,  391 => 215,  389 => 214,  375 => 205,  368 => 203,  365 => 202,  362 => 201,  359 => 200,  356 => 199,  354 => 198,  340 => 189,  333 => 187,  330 => 186,  327 => 185,  324 => 184,  321 => 183,  319 => 182,  305 => 173,  298 => 171,  295 => 170,  292 => 169,  289 => 168,  286 => 167,  284 => 166,  261 => 148,  254 => 146,  251 => 145,  248 => 144,  245 => 143,  242 => 142,  240 => 141,  227 => 133,  221 => 132,  206 => 122,  199 => 120,  196 => 119,  193 => 118,  190 => 117,  187 => 116,  185 => 115,  165 => 98,  152 => 88,  140 => 79,  128 => 71,  116 => 62,  105 => 53,  94 => 45,  83 => 37,  72 => 29,  59 => 19,  49 => 11,  46 => 10,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs axisubs-bs3 wrap">*/
/*   <h3 class="wp-heading-inline">{{ pagetitle }}</h3>*/
/*   <div class="axisubs_title_description">*/
/*       {{ esc_html_e('Global settings for the membership system. Please make sure you configure these settings correct.', 'axis-subscriptions') }}*/
/*   </div>*/
/*     {% set item = all %}*/
/*     {% set metaPrefix = item['ID']~'_'~item['post_type']~'_' %}*/
/*   <form method="post" id="config" action="?page=config-index" onsubmit="return validateConfig()">*/
/*       <div class="tab-container">*/
/*           <div class="nav-tabs-container">*/
/*               <ul class="nav nav-tabs">*/
/*                   <li role="basic" class="active tab_axisubs"><a data-toggle="tab" href="#basic">Basic</a></li>*/
/*                   <li role="tax" class="tab_axisubs"><a data-toggle="tab" href="#tax">Tax</a></li>*/
/*                   <li role="eu_vat" class="tab_axisubs"><a data-toggle="tab" href="#eu_vat">EU Vat</a></li>*/
/*                   <li role="dashboard" class="tab_axisubs"><a data-toggle="tab" href="#dashboard">Dashboard</a></li>*/
/*                   <li role="frontend" class="tab_axisubs"><a data-toggle="tab" href="#frontend">{{ esc_html_e('Frontend', 'axis-subscriptions') }}</a></li>*/
/*               </ul>*/
/*           </div>*/
/*          <div class="axisubs-fields-con tab-content">*/
/*              <div id="basic" class="tab-pane fade in active">*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_address1">Address Line 1</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][address1]" id="axisuba_config_address1" class="required" value="{{ all['meta'][all['ID']~'_axisubs_config_address1'] }}"/>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_address2">Address Line 2</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][address2]" id="axisuba_config_address2" value="{{ all['meta'][all['ID']~'_axisubs_config_address2'] }}"/>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_city">City</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][city]" id="axisuba_config_city" class="required" value="{{ all['meta'][all['ID']~'_axisubs_config_city'] }}"/>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_zip">Zip / Postal code</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][zip]" id="axisuba_config_zip" class="required" value="{{ all['meta'][all['ID']~'_axisubs_config_zip'] }}"/>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_country">Country</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          {#<input type="text" name="axisubs[config][country]" id="axisuba_config_country" value="{{ all['meta'][all['ID']~'_axisubs_config_country'] }}"/>#}*/
/*                          {{ data['country'] | raw }}*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_region">Zone / Region</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          {#<input type="text" name="axisubs[config][region]" id="axisuba_config_region" value="{{ all['meta'][all['ID']~'_axisubs_config_region'] }}"/>#}*/
/*                          {{ data['province'] | raw }}*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_currency">Currency Code</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][currency]" id="axisuba_config_currency" class="required" value="{{ all['meta'][all['ID']~'_axisubs_config_currency'] }}"/>*/
/*                          <span class="help-text">Eg: USD, AUD</span>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_currency_code">Currency Symbol</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][currency_code]" id="axisuba_config_currency_code" class="required" value="{{ all['meta'][all['ID']~'_axisubs_config_currency_code'] }}"/>*/
/*                          <span class="help-text">Eg: $</span>*/
/*                      </div>*/
/*                  </div>*/
/* */
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisuba_config_invoice_prefix">Invoice Prefix</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][invoice_prefix]" id="axisuba_config_invoice_prefix" value="{{ all['meta'][all['ID']~'_axisubs_config_invoice_prefix'] }}"/>*/
/*                          <span class="help-text">Default value of invoice prefix is: axisubs_wp</span>*/
/*                      </div>*/
/*                  </div>*/
/*              </div>*/
/*              <div id="tax" class="tab-pane fade">*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <h3>Tax Settings</h3>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_enable">Enable Tax</label>*/
/*                      </div>*/
/*                      {% set enable_tax = item['meta'][metaPrefix~'enable_tax'] %}*/
/*                      {% if(enable_tax == '') %}*/
/*                          {% set enable_tax = 0 %}*/
/*                      {% endif %}*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="radio" name="axisubs[config][enable_tax]" id="axisub_config_enable1" value="1" {% if enable_tax == '1' %} checked {% endif %}>*/
/*                          <label for="axisub_config_enable1">Yes</label>*/
/*                          <input type="radio" name="axisubs[config][enable_tax]" id="axisub_config_enable0" value="0" {% if enable_tax == '0' %} checked {% endif %}>*/
/*                          <label for="axisub_config_enable0">No</label>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_tax_type">Tax type</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <select name="axisubs[config][tax_type]" id="axisub_config_tax_type" >*/
/*                              <option value="excluding_tax" {% if item['meta'][metaPrefix~'tax_type'] == 'excluding_tax' %} selected {% endif %}>Excluding tax</option>*/
/*                              <option value="including_tax" {% if item['meta'][metaPrefix~'tax_type'] == 'including_tax' %} selected {% endif %}>Including tax</option>*/
/*                          </select>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_display_tax_info">Display tax information below the prices</label>*/
/*                      </div>*/
/*                      {% set display_tax_info = item['meta'][metaPrefix~'display_tax_info'] %}*/
/*                      {% if(display_tax_info == '') %}*/
/*                          {% set display_tax_info = 1 %}*/
/*                      {% endif %}*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="radio" name="axisubs[config][display_tax_info]" id="axisub_config_display_tax_info1" value="1" {% if display_tax_info == '1' %} checked {% endif %}>*/
/*                          <label for="axisub_config_display_tax_info1">Yes</label>*/
/*                          <input type="radio" name="axisubs[config][display_tax_info]" id="axisub_config_display_tax_info0" value="0" {% if display_tax_info == '0' %} checked {% endif %}>*/
/*                          <label for="axisub_config_display_tax_info0">No</label>*/
/*                          <span class="help-text">Example: (Incl. 19% tax). NOTE: This applies only to Plan pages.</span>*/
/*                      </div>*/
/*                  </div>*/
/*              </div>*/
/*              <div id="eu_vat" class="tab-pane fade">*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <h3>EU Vat Settings</h3>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_enable_eu_vat">Enable EU Vat</label>*/
/*                      </div>*/
/*                      {% set enable_eu_vat = item['meta'][metaPrefix~'enable_eu_vat'] %}*/
/*                      {% if(enable_eu_vat == '') %}*/
/*                          {% set enable_eu_vat = 0 %}*/
/*                      {% endif %}*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="radio" name="axisubs[config][enable_eu_vat]" id="axisub_config_enable_eu_vat1" value="1" {% if enable_eu_vat == '1' %} checked {% endif %}>*/
/*                          <label for="axisub_config_enable_eu_vat1">Yes</label>*/
/*                          <input type="radio" name="axisubs[config][enable_eu_vat]" id="axisub_config_enable_eu_vat0" value="0" {% if enable_eu_vat == '0' %} checked {% endif %}>*/
/*                          <label for="axisub_config_enable_eu_vat0">No</label>*/
/*                          <span class="help-text"></span>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_no_tax_for_non_eu">No tax for Non-EU</label>*/
/*                      </div>*/
/*                      {% set no_tax_for_non_eu = item['meta'][metaPrefix~'no_tax_for_non_eu'] %}*/
/*                      {% if(no_tax_for_non_eu == '') %}*/
/*                          {% set no_tax_for_non_eu = 0 %}*/
/*                      {% endif %}*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="radio" name="axisubs[config][no_tax_for_non_eu]" id="axisub_config_no_tax_for_non_eu1" value="1" {% if no_tax_for_non_eu == '1' %} checked {% endif %}>*/
/*                          <label for="axisub_config_no_tax_for_non_eu1">Yes</label>*/
/*                          <input type="radio" name="axisubs[config][no_tax_for_non_eu]" id="axisub_config_no_tax_for_non_eu0" value="0" {% if no_tax_for_non_eu == '0' %} checked {% endif %}>*/
/*                          <label for="axisub_config_no_tax_for_non_eu0">No</label>*/
/*                          <span class="help-text">Choose yes, if you DONT want to charge tax for the Non-EU customers</span>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_apply_digital_rules">Apply Digital Rules</label>*/
/*                      </div>*/
/*                      {% set apply_digital_rules = item['meta'][metaPrefix~'apply_digital_rules'] %}*/
/*                      {% if(apply_digital_rules == '') %}*/
/*                          {% set apply_digital_rules = 0 %}*/
/*                      {% endif %}*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="radio" name="axisubs[config][apply_digital_rules]" id="axisub_config_apply_digital_rules1" value="1" {% if apply_digital_rules == '1' %} checked {% endif %}>*/
/*                          <label for="axisub_config_apply_digital_rules1">Yes</label>*/
/*                          <input type="radio" name="axisubs[config][apply_digital_rules]" id="axisub_config_apply_digital_rules0" value="0" {% if apply_digital_rules == '0' %} checked {% endif %}>*/
/*                          <label for="axisub_config_apply_digital_rules0">No</label>*/
/*                          <span class="help-text">Choose yes, only for digital product subscriptions.</span>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_validate_vat_number">Validate Tax Number field</label>*/
/*                      </div>*/
/*                      {% set validate_vat_number = item['meta'][metaPrefix~'validate_vat_number'] %}*/
/*                      {% if(validate_vat_number == '') %}*/
/*                          {% set validate_vat_number = 1 %}*/
/*                      {% endif %}*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="radio" name="axisubs[config][validate_vat_number]" id="axisub_config_validate_vat_number1" value="1" {% if validate_vat_number == '1' %} checked {% endif %}>*/
/*                          <label for="axisub_config_validate_vat_number1">Yes</label>*/
/*                          <input type="radio" name="axisubs[config][validate_vat_number]" id="axisub_config_validate_vat_number0" value="0" {% if validate_vat_number == '0' %} checked {% endif %}>*/
/*                          <label for="axisub_config_validate_vat_number0">No</label>*/
/*                          <span class="help-text">If yes, Tax Number field will validate and shows error before submitting.</span>*/
/*                      </div>*/
/*                  </div>*/
/*              </div>*/
/*              <div id="dashboard" class="tab-pane fade">*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <h3>Dashboard Settings</h3>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_plans_for_graph_report">Plans in graph</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          {% if plans|length > 0 %}*/
/*                              <select name="axisubs[config][plans_for_graph_report][]" class="widget-hot-topics" id="axisub_config_plans_for_graph_report" multiple size="5">*/
/*                                  {% for key, plan in plans %}*/
/*                                      {% set planMeta = plan['meta'] %}*/
/*                                      {% set planPrefix = plan['ID']~'_'~plan['post_type']~'_' %}*/
/*                                      <option value="{{ plan['ID'] }}" {% if plan['ID'] in selected_plans %} selected {% endif %}>{{ planMeta[planPrefix~'name'] }}</option>*/
/*                                  {% endfor %}*/
/*                              </select>*/
/*                              <span class="help-text">The selected plans will be display in graph.</span>*/
/*                          {% else %}*/
/*                              <span class="help-text">You do not have any active Subscription Plans yet. Please create them <a href="?page=plans-index&task=edit">Here</a>.</span>*/
/*                          {% endif %}*/
/*                      </div>*/
/*                  </div>*/
/*              </div>*/
/*              <div id="frontend" class="tab-pane fade">*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <h3>{{ esc_html_e('Frontend Settings', 'axis-subscriptions') }}</h3>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                          <label for="axisub_config_subscribe_btn_text">{{ esc_html_e('Subscribe button text', 'axis-subscriptions') }}</label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                          <input type="text" name="axisubs[config][subscribe_btn_text]" id="axisuba_config_subscribe_btn_text" class="" value="{{ all['meta'][all['ID']~'_axisubs_config_subscribe_btn_text'] }}"/>*/
/*                          <span class="help-text">{{ esc_html_e('Subscribe button text in front end', 'axis-subscriptions') }}</span>*/
/*                      </div>*/
/*                  </div>*/
/*              </div>*/
/*              <div class="axisubs-fields">*/
/*                  <div class="axisubs-fields-label">*/
/*                      <input type="hidden" name="task" value="save"/>*/
/*                      <input type="hidden" name="post_type" value="axisubs_config"/>*/
/*                      <input type="hidden" name="id" value="{{ all['ID'] }}"/>*/
/*                  </div>*/
/*                  <div class="axisubs-fields-content">*/
/*                      <button class="button button-primary" type="submit">Save</button>*/
/*                      <a class="button" href="?page=dashboard-index">Cancel</a>*/
/*                  </div>*/
/*              </div>*/
/*           </div>*/
/*       </div>*/
/*       <input type="hidden" name="site_url" value="{{ site_url }}" id="site_url"/>*/
/*   </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

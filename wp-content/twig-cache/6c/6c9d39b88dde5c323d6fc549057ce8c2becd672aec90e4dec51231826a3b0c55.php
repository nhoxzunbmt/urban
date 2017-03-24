<?php

/* @Axisubs/Admin/installationwizard/list.twig */
class __TwigTemplate_f0be0f436e4491a390bb0bc0ea9a5be1454740e6f91ad9dde231dbeb98b812b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/installationwizard/list.twig", 1);
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
        echo "<div class=\"axisubs wrap axisubs-bs3 axisubs_wizard-con loader-ajax-o\">
    <!-- <h2>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo " -->
    </h2>
    <div class=\"loader-ajax\"></div>
    <div class=\"form-welcome\">
      <h2>Welcome to Axis Subscriptions</h2>
      <hr />
      <div class=\"axis-content\">
        <div class=\"logo-image\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array"), "html", null, true);
        echo "/resources/assets/images/axis-logo.png\" alt=\"logo-image\"/>
          <div class=\"version\"><Strong>Version :</Strong><span> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_details", array(), "array"), "Version", array(), "array"), "html", null, true);
        echo " </span></div>
        </div>
        <div class=\"axis-desc\">
          <p>
            Thank you for choosing Axis Subscription.
            Axis Subscriptions is a complete membership management solution. It allows you to create subscription plans and start accepting payments from your users. 
          </p>
          <ul>
            <li>
            <span class=\"dashicons dashicons-yes\"></span> <strong>Step 1: </strong> General Configuration
            </li>
            <li>
            <span class=\"dashicons dashicons-yes\"></span> <strong>Step 2: </strong> Paypal Configuration
            </li>
            <li>
            <span class=\"dashicons dashicons-yes\"></span> <strong>Step 3: </strong> Tax Configuration
            </li>
            <li>
            <span class=\"dashicons dashicons-yes\"></span> <strong>Step 4: </strong> Create a plan and start accepting payments
            </li>
            
          </ul>
          <div class=\"video-link\">
            You can refer the below link<br/>
            <a href=\"https://www.youtube.com/watch?v=JlSjY-DDyzI\" target=\"_blank\">Video tutorial for wordpress axis subscription</a>
          </div>
        </div>
      </div>
    </div>
    <form method=\"post\" action=\"\" id=\"axisubs_wizard_config\">
        <h3 class=\"wizard-title\">Step 1: General Configuration</h3>
        <div class=\"axisubs-config\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                        <div class=\"axisubs-fields-con\">
                            <div class=\"axisubs-fields\">
                                <div class=\"axisubs-fields-label\">
                                    <label for=\"axisuba_config_address1\">Address Line 1</label>
                                </div>
                                <div class=\"axisubs-fields-content\">
                                    <input type=\"text\" name=\"axisubs[config][address1]\" id=\"axisuba_config_address1\" class=\"required\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_axisubs_config_address1"), array(), "array"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"axisubs-fields\">
                                <div class=\"axisubs-fields-label\">
                                    <label for=\"axisuba_config_address2\">Address Line 2</label>
                                </div>
                                <div class=\"axisubs-fields-content\">
                                    <input type=\"text\" name=\"axisubs[config][address2]\" id=\"axisuba_config_address2\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_axisubs_config_address2"), array(), "array"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"axisubs-fields\">
                                <div class=\"axisubs-fields-label\">
                                    <label for=\"axisuba_config_city\">City</label>
                                </div>
                                <div class=\"axisubs-fields-content\">
                                    <input type=\"text\" name=\"axisubs[config][city]\" id=\"axisuba_config_city\" class=\"required\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_axisubs_config_city"), array(), "array"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"axisubs-fields\">
                                <div class=\"axisubs-fields-label\">
                                    <label for=\"axisuba_config_zip\">Zip / Postal code</label>
                                </div>
                                <div class=\"axisubs-fields-content\">
                                    <input type=\"text\" name=\"axisubs[config][zip]\" id=\"axisuba_config_zip\" class=\"required\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_axisubs_config_zip"), array(), "array"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"axisubs-fields\">
                                <div class=\"axisubs-fields-label\">
                                    <label for=\"axisuba_config_country\">Country</label>
                                </div>
                                <div class=\"axisubs-fields-content\">
                                    ";
        // line 87
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
        // line 95
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
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_axisubs_config_currency"), array(), "array"), "html", null, true);
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
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_axisubs_config_currency_code"), array(), "array"), "html", null, true);
        echo "\"/>
                                    <span class=\"help-text\">Eg: \$</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type=\"hidden\" name=\"site_url\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "site_url", array(), "array"), "html", null, true);
        echo "\" id=\"site_url\"/>
                            <div class=\"page-btn\">
                              <div class=\"axisubs-fields\">
                                <div class=\"axisubs-fields-label\">

                                </div>
                                <div class=\"axisubs-fields-content\">
                                  <button class=\"btn axis-btn\" type=\"button\" id=\"next_button_config\">Next</button>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method=\"post\" action=\"\" id=\"axisubs_wizard_paypal\" class=\"hide\">
        <h3 class=\"wizard-title\">Step 2: Paypal Configuration</h3>
        ";
        // line 137
        $context["paypalConfigPrefix"] = ((($this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "post_type", array(), "array")) . "_");
        // line 138
        echo "        <div class=\"axisubs-fields-con container-fluid\">
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_title\">Payment title</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[payment][title]\" id=\"axisub_payment_title\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "meta", array(), "array"), ((isset($context["paypalConfigPrefix"]) ? $context["paypalConfigPrefix"] : null) . "title"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">The title of the payment plugin, as displayed in the checkout page. If left blank, default value Paypal Payment will be used.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_merchant_email\">Paypal Email</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[payment][merchant_email]\" id=\"axisub_payment_merchant_email\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "meta", array(), "array"), ((isset($context["paypalConfigPrefix"]) ? $context["paypalConfigPrefix"] : null) . "merchant_email"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal merchant email.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_validate_ipn\">Validate IPN</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <select id=\"axisub_payment_validate_ipn\" name=\"axisubs[payment][validate_ipn]\">
                        ";
        // line 163
        $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "meta", array(), "array"), ((isset($context["paypalConfigPrefix"]) ? $context["paypalConfigPrefix"] : null) . "validate_ipn"), array(), "array");
        // line 164
        echo "                        <option value=\"0\" ";
        if (((isset($context["selected"]) ? $context["selected"] : null) == "0")) {
            echo " selected ";
        }
        echo ">No</option>
                        <option value=\"1\" ";
        // line 165
        if (((isset($context["selected"]) ? $context["selected"] : null) == "1")) {
            echo " selected ";
        }
        echo ">Yes</option>
                    </select>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_sandbox\">Sandbox</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <select id=\"axisub_payment_sandbox\" name=\"axisubs[payment][sandbox]\">
                        ";
        // line 175
        $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "meta", array(), "array"), ((isset($context["paypalConfigPrefix"]) ? $context["paypalConfigPrefix"] : null) . "sandbox"), array(), "array");
        // line 176
        echo "                        <option value=\"0\" ";
        if (((isset($context["selected"]) ? $context["selected"] : null) == "0")) {
            echo " selected ";
        }
        echo ">No</option>
                        <option value=\"1\" ";
        // line 177
        if (((isset($context["selected"]) ? $context["selected"] : null) == "1")) {
            echo " selected ";
        }
        echo ">Yes</option>
                    </select>
                    <span class=\"help-text\">Test or live payment.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_sandbox_email\">Sandbox Email</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[payment][sandbox_email]\" id=\"axisub_payment_sandbox_email\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paypalConfig"]) ? $context["paypalConfig"] : null), "meta", array(), "array"), ((isset($context["paypalConfigPrefix"]) ? $context["paypalConfigPrefix"] : null) . "sandbox_email"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal sandbox merchant email.</span>
                </div>
            </div>
            <div>
                <div class=\"page-btn\">
                  <div class=\"axisubs-fields\">
                    <div class=\"axisubs-fields-label\">

                    </div>
                    <div class=\"axisubs-fields-content\">
                      <button class=\"btn axis-btn\" type=\"button\" id=\"pre_button_payment\">Prev</button>
                      <button class=\"btn axis-btn\" type=\"button\" id=\"skip_button_payment\">Skip</button>
                      <button class=\"btn axis-btn\" type=\"button\" id=\"next_button_payment\">Next</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </form>
    <form method=\"post\" action=\"\" id=\"axisubs_wizard_tax\" class=\"hide\">
        <h3 class=\"wizard-title\">Step 3: Tax Configuration</h3>
        ";
        // line 209
        $context["metaPrefix"] = ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_type", array(), "array")) . "_");
        // line 210
        echo "        <div class=\"axisubs-fields-con container-fluid\">
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
        // line 222
        $context["enable_tax"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "enable_tax"), array(), "array");
        // line 223
        echo "                ";
        if (((isset($context["enable_tax"]) ? $context["enable_tax"] : null) == "")) {
            // line 224
            echo "                    ";
            $context["enable_tax"] = 0;
            // line 225
            echo "                ";
        }
        // line 226
        echo "                <div class=\"axisubs-fields-content\">
                    <input type=\"radio\" name=\"axisubs[config][enable_tax]\" id=\"axisub_config_enable1\" value=\"1\" ";
        // line 227
        if (((isset($context["enable_tax"]) ? $context["enable_tax"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                    <label for=\"axisub_config_enable1\">Yes</label>
                    <input type=\"radio\" name=\"axisubs[config][enable_tax]\" id=\"axisub_config_enable0\" value=\"0\" ";
        // line 229
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
        // line 239
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "tax_type"), array(), "array") == "excluding_tax")) {
            echo " selected ";
        }
        echo ">Excluding tax</option>
                        <option value=\"including_tax\" ";
        // line 240
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "tax_type"), array(), "array") == "including_tax")) {
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
        // line 248
        $context["display_tax_info"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "display_tax_info"), array(), "array");
        // line 249
        echo "                ";
        if (((isset($context["display_tax_info"]) ? $context["display_tax_info"] : null) == "")) {
            // line 250
            echo "                    ";
            $context["display_tax_info"] = 1;
            // line 251
            echo "                ";
        }
        // line 252
        echo "                <div class=\"axisubs-fields-content\">
                    <input type=\"radio\" name=\"axisubs[config][display_tax_info]\" id=\"axisub_config_display_tax_info1\" value=\"1\" ";
        // line 253
        if (((isset($context["display_tax_info"]) ? $context["display_tax_info"] : null) == "1")) {
            echo " checked ";
        }
        echo ">
                    <label for=\"axisub_config_display_tax_info1\">Yes</label>
                    <input type=\"radio\" name=\"axisubs[config][display_tax_info]\" id=\"axisub_config_display_tax_info0\" value=\"0\" ";
        // line 255
        if (((isset($context["display_tax_info"]) ? $context["display_tax_info"] : null) == "0")) {
            echo " checked ";
        }
        echo ">
                    <label for=\"axisub_config_display_tax_info0\">No</label>
                    <span class=\"help-text\">Example: (Incl. 19% tax). NOTE: This applies only to Plan pages.</span>
                </div>
            </div>
            <div>
              <div class=\"page-btn\">
                <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">

                  </div>
                  <div class=\"axisubs-fields-content\">

                        <button class=\"btn axis-btn\" type=\"button\" id=\"pre_button_tax\">Prev</button>
                        <button class=\"btn axis-btn\" type=\"button\" id=\"skip_button_tax\">Skip</button>
                        <button class=\"btn axis-btn\" type=\"button\" id=\"next_button_tax\">Next</button>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/installationwizard/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 255,  395 => 253,  392 => 252,  389 => 251,  386 => 250,  383 => 249,  381 => 248,  368 => 240,  362 => 239,  347 => 229,  340 => 227,  337 => 226,  334 => 225,  331 => 224,  328 => 223,  326 => 222,  312 => 210,  310 => 209,  285 => 187,  270 => 177,  263 => 176,  261 => 175,  246 => 165,  239 => 164,  237 => 163,  224 => 153,  212 => 144,  204 => 138,  202 => 137,  180 => 118,  171 => 112,  159 => 103,  148 => 95,  137 => 87,  126 => 79,  115 => 71,  104 => 63,  93 => 55,  49 => 14,  45 => 13,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap axisubs-bs3 axisubs_wizard-con loader-ajax-o">*/
/*     <!-- <h2>{{ pagetitle }} -->*/
/*     </h2>*/
/*     <div class="loader-ajax"></div>*/
/*     <div class="form-welcome">*/
/*       <h2>Welcome to Axis Subscriptions</h2>*/
/*       <hr />*/
/*       <div class="axis-content">*/
/*         <div class="logo-image">*/
/*           <img src="{{ data['plugin_url'] }}/resources/assets/images/axis-logo.png" alt="logo-image"/>*/
/*           <div class="version"><Strong>Version :</Strong><span> {{ data['plugin_details']['Version'] }} </span></div>*/
/*         </div>*/
/*         <div class="axis-desc">*/
/*           <p>*/
/*             Thank you for choosing Axis Subscription.*/
/*             Axis Subscriptions is a complete membership management solution. It allows you to create subscription plans and start accepting payments from your users. */
/*           </p>*/
/*           <ul>*/
/*             <li>*/
/*             <span class="dashicons dashicons-yes"></span> <strong>Step 1: </strong> General Configuration*/
/*             </li>*/
/*             <li>*/
/*             <span class="dashicons dashicons-yes"></span> <strong>Step 2: </strong> Paypal Configuration*/
/*             </li>*/
/*             <li>*/
/*             <span class="dashicons dashicons-yes"></span> <strong>Step 3: </strong> Tax Configuration*/
/*             </li>*/
/*             <li>*/
/*             <span class="dashicons dashicons-yes"></span> <strong>Step 4: </strong> Create a plan and start accepting payments*/
/*             </li>*/
/*             */
/*           </ul>*/
/*           <div class="video-link">*/
/*             You can refer the below link<br/>*/
/*             <a href="https://www.youtube.com/watch?v=JlSjY-DDyzI" target="_blank">Video tutorial for wordpress axis subscription</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <form method="post" action="" id="axisubs_wizard_config">*/
/*         <h3 class="wizard-title">Step 1: General Configuration</h3>*/
/*         <div class="axisubs-config">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*                         <div class="axisubs-fields-con">*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_address1">Address Line 1</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     <input type="text" name="axisubs[config][address1]" id="axisuba_config_address1" class="required" value="{{ config['meta'][config['ID']~'_axisubs_config_address1'] }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_address2">Address Line 2</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     <input type="text" name="axisubs[config][address2]" id="axisuba_config_address2" value="{{ config['meta'][config['ID']~'_axisubs_config_address2'] }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_city">City</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     <input type="text" name="axisubs[config][city]" id="axisuba_config_city" class="required" value="{{ config['meta'][config['ID']~'_axisubs_config_city'] }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_zip">Zip / Postal code</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     <input type="text" name="axisubs[config][zip]" id="axisuba_config_zip" class="required" value="{{ config['meta'][config['ID']~'_axisubs_config_zip'] }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_country">Country</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     {{ data['country'] | raw }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_region">Zone / Region</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     {{ data['province'] | raw }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_currency">Currency Code</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     <input type="text" name="axisubs[config][currency]" id="axisuba_config_currency" class="required" value="{{ config['meta'][config['ID']~'_axisubs_config_currency'] }}"/>*/
/*                                     <span class="help-text">Eg: USD, AUD</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/*                                     <label for="axisuba_config_currency_code">Currency Symbol</label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                     <input type="text" name="axisubs[config][currency_code]" id="axisuba_config_currency_code" class="required" value="{{ config['meta'][config['ID']~'_axisubs_config_currency_code'] }}"/>*/
/*                                     <span class="help-text">Eg: $</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div>*/
/*                             <input type="hidden" name="site_url" value="{{ data['site_url'] }}" id="site_url"/>*/
/*                             <div class="page-btn">*/
/*                               <div class="axisubs-fields">*/
/*                                 <div class="axisubs-fields-label">*/
/* */
/*                                 </div>*/
/*                                 <div class="axisubs-fields-content">*/
/*                                   <button class="btn axis-btn" type="button" id="next_button_config">Next</button>*/
/*                                 </div>*/
/*                               </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/*     <form method="post" action="" id="axisubs_wizard_paypal" class="hide">*/
/*         <h3 class="wizard-title">Step 2: Paypal Configuration</h3>*/
/*         {% set paypalConfigPrefix = paypalConfig['ID']~'_'~paypalConfig['post_type']~'_' %}*/
/*         <div class="axisubs-fields-con container-fluid">*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_title">Payment title</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[payment][title]" id="axisub_payment_title" value="{{ paypalConfig['meta'][paypalConfigPrefix~'title'] }}"/>*/
/*                     <span class="help-text">The title of the payment plugin, as displayed in the checkout page. If left blank, default value Paypal Payment will be used.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_merchant_email">Paypal Email</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[payment][merchant_email]" id="axisub_payment_merchant_email" value="{{ paypalConfig['meta'][paypalConfigPrefix~'merchant_email'] }}"/>*/
/*                     <span class="help-text">Paypal merchant email.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_validate_ipn">Validate IPN</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <select id="axisub_payment_validate_ipn" name="axisubs[payment][validate_ipn]">*/
/*                         {% set selected = paypalConfig['meta'][paypalConfigPrefix~'validate_ipn'] %}*/
/*                         <option value="0" {% if selected == '0' %} selected {% endif %}>No</option>*/
/*                         <option value="1" {% if selected == '1' %} selected {% endif %}>Yes</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_sandbox">Sandbox</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <select id="axisub_payment_sandbox" name="axisubs[payment][sandbox]">*/
/*                         {% set selected = paypalConfig['meta'][paypalConfigPrefix~'sandbox'] %}*/
/*                         <option value="0" {% if selected == '0' %} selected {% endif %}>No</option>*/
/*                         <option value="1" {% if selected == '1' %} selected {% endif %}>Yes</option>*/
/*                     </select>*/
/*                     <span class="help-text">Test or live payment.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_sandbox_email">Sandbox Email</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[payment][sandbox_email]" id="axisub_payment_sandbox_email" value="{{ paypalConfig['meta'][paypalConfigPrefix~'sandbox_email'] }}"/>*/
/*                     <span class="help-text">Paypal sandbox merchant email.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="page-btn">*/
/*                   <div class="axisubs-fields">*/
/*                     <div class="axisubs-fields-label">*/
/* */
/*                     </div>*/
/*                     <div class="axisubs-fields-content">*/
/*                       <button class="btn axis-btn" type="button" id="pre_button_payment">Prev</button>*/
/*                       <button class="btn axis-btn" type="button" id="skip_button_payment">Skip</button>*/
/*                       <button class="btn axis-btn" type="button" id="next_button_payment">Next</button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/*     <form method="post" action="" id="axisubs_wizard_tax" class="hide">*/
/*         <h3 class="wizard-title">Step 3: Tax Configuration</h3>*/
/*         {% set metaPrefix = config['ID']~'_'~config['post_type']~'_' %}*/
/*         <div class="axisubs-fields-con container-fluid">*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <h3>Tax Settings</h3>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_config_enable">Enable Tax</label>*/
/*                 </div>*/
/*                 {% set enable_tax = config['meta'][metaPrefix~'enable_tax'] %}*/
/*                 {% if(enable_tax == '') %}*/
/*                     {% set enable_tax = 0 %}*/
/*                 {% endif %}*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="radio" name="axisubs[config][enable_tax]" id="axisub_config_enable1" value="1" {% if enable_tax == '1' %} checked {% endif %}>*/
/*                     <label for="axisub_config_enable1">Yes</label>*/
/*                     <input type="radio" name="axisubs[config][enable_tax]" id="axisub_config_enable0" value="0" {% if enable_tax == '0' %} checked {% endif %}>*/
/*                     <label for="axisub_config_enable0">No</label>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_config_tax_type">Tax type</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <select name="axisubs[config][tax_type]" id="axisub_config_tax_type" >*/
/*                         <option value="excluding_tax" {% if config['meta'][metaPrefix~'tax_type'] == 'excluding_tax' %} selected {% endif %}>Excluding tax</option>*/
/*                         <option value="including_tax" {% if config['meta'][metaPrefix~'tax_type'] == 'including_tax' %} selected {% endif %}>Including tax</option>*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_config_display_tax_info">Display tax information below the prices</label>*/
/*                 </div>*/
/*                 {% set display_tax_info = config['meta'][metaPrefix~'display_tax_info'] %}*/
/*                 {% if(display_tax_info == '') %}*/
/*                     {% set display_tax_info = 1 %}*/
/*                 {% endif %}*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="radio" name="axisubs[config][display_tax_info]" id="axisub_config_display_tax_info1" value="1" {% if display_tax_info == '1' %} checked {% endif %}>*/
/*                     <label for="axisub_config_display_tax_info1">Yes</label>*/
/*                     <input type="radio" name="axisubs[config][display_tax_info]" id="axisub_config_display_tax_info0" value="0" {% if display_tax_info == '0' %} checked {% endif %}>*/
/*                     <label for="axisub_config_display_tax_info0">No</label>*/
/*                     <span class="help-text">Example: (Incl. 19% tax). NOTE: This applies only to Plan pages.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div>*/
/*               <div class="page-btn">*/
/*                 <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/* */
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/* */
/*                         <button class="btn axis-btn" type="button" id="pre_button_tax">Prev</button>*/
/*                         <button class="btn axis-btn" type="button" id="skip_button_tax">Skip</button>*/
/*                         <button class="btn axis-btn" type="button" id="next_button_tax">Next</button>*/
/* */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

<?php

/* @AxisubsAppPaypal/Admin/Form/edit.twig */
class __TwigTemplate_e8328f48394652ebd8bf9b7d7ab27ae958435d33e7b55c2aab1c6472de7ebb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AxisubsAppPaypal/Admin/tabs/tab.twig", "@AxisubsAppPaypal/Admin/Form/edit.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AxisubsAppPaypal/Admin/tabs/tab.twig";
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
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "
    </h2>
    ";
        // line 7
        $context["metaPrefix"] = ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axis_paypal_config_");
        // line 8
        echo "    <form method=\"post\" action=\"?page=app-index&task=appTask&p=axisubs-app-payment-paypal\">
        <div class=\"axisubs-fields-con\">
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_title\">Payment title</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[payment][title]\" id=\"axisub_payment_title\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "title"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">The title of the payment plugin, as displayed in the checkout page. If left blank, default value Paypal Payment will be used.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_image\">Payment Display Image</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[payment][image]\" id=\"axisub_payment_image\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "image"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Image shown while payment options are listed in checkout page.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_merchant_email\">Paypal Email</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"required\" name=\"axisubs[payment][merchant_email]\" id=\"axisub_payment_merchant_email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "merchant_email"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal merchant email.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_api_username\">API Username</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"\" name=\"axisubs[payment][api_username]\" id=\"axisub_payment_api_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "api_username"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal API Username. This is required to handle cancel subscription.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_api_password\">API Password</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"\" name=\"axisubs[payment][api_password]\" id=\"axisub_payment_api_password\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "api_password"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal API Password. This is required to handle cancel subscription.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_api_signature\">API Signature</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"\" name=\"axisubs[payment][api_signature]\" id=\"axisub_payment_api_signature\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "api_signature"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal API Signature. This is required to handle cancel subscription.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_validate_ipn\">Validate IPN</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <select id=\"axisub_payment_validate_ipn\" name=\"axisubs[payment][validate_ipn]\">
                        ";
        // line 70
        $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "validate_ipn"), array(), "array");
        // line 71
        echo "                        <option value=\"0\" ";
        if (((isset($context["selected"]) ? $context["selected"] : null) == "0")) {
            echo " selected ";
        }
        echo ">No</option>
                        <option value=\"1\" ";
        // line 72
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
        // line 82
        $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "sandbox"), array(), "array");
        // line 83
        echo "                        <option value=\"0\" ";
        if (((isset($context["selected"]) ? $context["selected"] : null) == "0")) {
            echo " selected ";
        }
        echo ">No</option>
                        <option value=\"1\" ";
        // line 84
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
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "sandbox_email"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Paypal sandbox merchant email.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_sandbox_api_username\">Sandbox API Username</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"\" name=\"axisubs[payment][sandbox_api_username]\" id=\"axisub_payment_sandbox_api_username\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "sandbox_api_username"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Sandbox API Username. This is required to handle cancel subscription.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_sandbox_api_password\">Sandbox API Password</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"\" name=\"axisubs[payment][sandbox_api_password]\" id=\"axisub_payment_sandbox_api_password\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "sandbox_api_password"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Sandbox API Password. This is required to handle cancel subscription.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_sandbox_api_signature\">Sandbox API Signature</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" class=\"\" name=\"axisubs[payment][sandbox_api_signature]\" id=\"axisub_payment_sandbox_api_signature\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "sandbox_api_signature"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Sandbox API Signature. This is required to handle cancel subscription.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_debug\">Debug</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <select id=\"axisub_payment_debug\" name=\"axisubs[payment][debug]\">
                        ";
        // line 131
        $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "debug"), array(), "array");
        // line 132
        echo "                        <option value=\"1\" ";
        if (((isset($context["selected"]) ? $context["selected"] : null) == "1")) {
            echo " selected ";
        }
        echo ">Yes</option>
                        <option value=\"0\" ";
        // line 133
        if (((isset($context["selected"]) ? $context["selected"] : null) == "0")) {
            echo " selected ";
        }
        echo ">No</option>
                    </select>
                    <span class=\"help-text\">Debug the payment gateway.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_return_message\">Return Message</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <textarea type=\"textarea\" name=\"axisubs[payment][return_message]\" id=\"axisub_payment_return_message\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "return_message"), array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "return_message"), array(), "array"), "html", null, true);
        echo "</textarea>
                    <span class=\"help-text\">Message to be displayed, when return from paypal.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_button_text\">Payment button text</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" name=\"axisubs[payment][button_text]\" id=\"axisub_payment_button_text\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "button_text"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Name of the payment button. Default is: Place order. You can enter a language constant as a value here if you are using a multi-lingual site and then write a language override. Refer the User guide for more information.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_cbt\">CBT</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" name=\"axisubs[payment][cbt]\" id=\"axisub_payment_cbt\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "cbt"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">Sets the text for the Return to Merchant button on the PayPal Payment Complete page. For Business accounts, the return button displays your business name in place of the word Merchant by default.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_cpp_header_image\">Image</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" name=\"axisubs[payment][cpp_header_image]\" id=\"axisub_payment_cpp_header_image\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "cpp_header_image"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">The URL of the 150x50-pixel image displayed as your logo in the upper left corner of the PayPal checkout pages.Default — Your business name, if you have a PayPal Business account, or your email address, if you have PayPal Premier or Personal account.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_cpp_headerback_color\">Header Background</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" name=\"axisubs[payment][cpp_headerback_color]\" id=\"axisub_payment_cpp_headerback_color\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "cpp_headerback_color"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">The background color for the header of the checkout page. Valid value is case-insensitive six-character, HTML hexadecimal color code in ASCII.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_cpp_headerborder_color\">Header Border</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    <input type=\"text\" name=\"axisubs[payment][cpp_headerborder_color]\" id=\"axisub_payment_cpp_headerborder_color\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "cpp_headerborder_color"), array(), "array"), "html", null, true);
        echo "\"/>
                    <span class=\"help-text\">The border color around the header of the checkout page. The border is a 2-pixel perimeter around the header space, which has a maximum size of 750 pixels wide by 90 pixels high.</span>
                </div>
            </div>
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <input type=\"hidden\" name=\"task\" value=\"appTask\"/>
                    <input type=\"hidden\" name=\"apptask\" value=\"save\"/>
                </div>
                <div class=\"axisubs-fields-content page-btn\">
                    <button type=\"submit\" class=\"btn page-title-action\">Save</button>
                    <a href=\"?page=app-index\" class=\"btn page-title-action\">Cancel</a>
                </div>
            </div>
        </div>
     </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@AxisubsAppPaypal/Admin/Form/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 188,  294 => 179,  282 => 170,  270 => 161,  258 => 152,  244 => 143,  229 => 133,  222 => 132,  220 => 131,  207 => 121,  195 => 112,  183 => 103,  171 => 94,  156 => 84,  149 => 83,  147 => 82,  132 => 72,  125 => 71,  123 => 70,  110 => 60,  98 => 51,  86 => 42,  74 => 33,  62 => 24,  50 => 15,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@AxisubsAppPaypal/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap">*/
/*     <h2>{{ pagetitle }}*/
/*     </h2>*/
/*     {% set metaPrefix = item['ID']~'_axis_paypal_config_' %}*/
/*     <form method="post" action="?page=app-index&task=appTask&p=axisubs-app-payment-paypal">*/
/*         <div class="axisubs-fields-con">*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_title">Payment title</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[payment][title]" id="axisub_payment_title" value="{{ item['meta'][metaPrefix~'title'] }}"/>*/
/*                     <span class="help-text">The title of the payment plugin, as displayed in the checkout page. If left blank, default value Paypal Payment will be used.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_image">Payment Display Image</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[payment][image]" id="axisub_payment_image" value="{{ item['meta'][metaPrefix~'image'] }}"/>*/
/*                     <span class="help-text">Image shown while payment options are listed in checkout page.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_merchant_email">Paypal Email</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="required" name="axisubs[payment][merchant_email]" id="axisub_payment_merchant_email" value="{{ item['meta'][metaPrefix~'merchant_email'] }}"/>*/
/*                     <span class="help-text">Paypal merchant email.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_api_username">API Username</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="" name="axisubs[payment][api_username]" id="axisub_payment_api_username" value="{{ item['meta'][metaPrefix~'api_username'] }}"/>*/
/*                     <span class="help-text">Paypal API Username. This is required to handle cancel subscription.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_api_password">API Password</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="" name="axisubs[payment][api_password]" id="axisub_payment_api_password" value="{{ item['meta'][metaPrefix~'api_password'] }}"/>*/
/*                     <span class="help-text">Paypal API Password. This is required to handle cancel subscription.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_api_signature">API Signature</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="" name="axisubs[payment][api_signature]" id="axisub_payment_api_signature" value="{{ item['meta'][metaPrefix~'api_signature'] }}"/>*/
/*                     <span class="help-text">Paypal API Signature. This is required to handle cancel subscription.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_validate_ipn">Validate IPN</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <select id="axisub_payment_validate_ipn" name="axisubs[payment][validate_ipn]">*/
/*                         {% set selected = item['meta'][metaPrefix~'validate_ipn'] %}*/
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
/*                         {% set selected = item['meta'][metaPrefix~'sandbox'] %}*/
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
/*                     <input type="text" class="required" name="axisubs[payment][sandbox_email]" id="axisub_payment_sandbox_email" value="{{ item['meta'][metaPrefix~'sandbox_email'] }}"/>*/
/*                     <span class="help-text">Paypal sandbox merchant email.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_sandbox_api_username">Sandbox API Username</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="" name="axisubs[payment][sandbox_api_username]" id="axisub_payment_sandbox_api_username" value="{{ item['meta'][metaPrefix~'sandbox_api_username'] }}"/>*/
/*                     <span class="help-text">Sandbox API Username. This is required to handle cancel subscription.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_sandbox_api_password">Sandbox API Password</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="" name="axisubs[payment][sandbox_api_password]" id="axisub_payment_sandbox_api_password" value="{{ item['meta'][metaPrefix~'sandbox_api_password'] }}"/>*/
/*                     <span class="help-text">Sandbox API Password. This is required to handle cancel subscription.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_sandbox_api_signature">Sandbox API Signature</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" class="" name="axisubs[payment][sandbox_api_signature]" id="axisub_payment_sandbox_api_signature" value="{{ item['meta'][metaPrefix~'sandbox_api_signature'] }}"/>*/
/*                     <span class="help-text">Sandbox API Signature. This is required to handle cancel subscription.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_debug">Debug</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <select id="axisub_payment_debug" name="axisubs[payment][debug]">*/
/*                         {% set selected = item['meta'][metaPrefix~'debug'] %}*/
/*                         <option value="1" {% if selected == '1' %} selected {% endif %}>Yes</option>*/
/*                         <option value="0" {% if selected == '0' %} selected {% endif %}>No</option>*/
/*                     </select>*/
/*                     <span class="help-text">Debug the payment gateway.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_return_message">Return Message</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <textarea type="textarea" name="axisubs[payment][return_message]" id="axisub_payment_return_message" value="{{ item['meta'][metaPrefix~'return_message'] }}">{{ item['meta'][metaPrefix~'return_message'] }}</textarea>*/
/*                     <span class="help-text">Message to be displayed, when return from paypal.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_button_text">Payment button text</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" name="axisubs[payment][button_text]" id="axisub_payment_button_text" value="{{ item['meta'][metaPrefix~'button_text'] }}"/>*/
/*                     <span class="help-text">Name of the payment button. Default is: Place order. You can enter a language constant as a value here if you are using a multi-lingual site and then write a language override. Refer the User guide for more information.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_cbt">CBT</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" name="axisubs[payment][cbt]" id="axisub_payment_cbt" value="{{ item['meta'][metaPrefix~'cbt'] }}"/>*/
/*                     <span class="help-text">Sets the text for the Return to Merchant button on the PayPal Payment Complete page. For Business accounts, the return button displays your business name in place of the word Merchant by default.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_cpp_header_image">Image</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" name="axisubs[payment][cpp_header_image]" id="axisub_payment_cpp_header_image" value="{{ item['meta'][metaPrefix~'cpp_header_image'] }}"/>*/
/*                     <span class="help-text">The URL of the 150x50-pixel image displayed as your logo in the upper left corner of the PayPal checkout pages.Default — Your business name, if you have a PayPal Business account, or your email address, if you have PayPal Premier or Personal account.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_cpp_headerback_color">Header Background</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" name="axisubs[payment][cpp_headerback_color]" id="axisub_payment_cpp_headerback_color" value="{{ item['meta'][metaPrefix~'cpp_headerback_color'] }}"/>*/
/*                     <span class="help-text">The background color for the header of the checkout page. Valid value is case-insensitive six-character, HTML hexadecimal color code in ASCII.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_cpp_headerborder_color">Header Border</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     <input type="text" name="axisubs[payment][cpp_headerborder_color]" id="axisub_payment_cpp_headerborder_color" value="{{ item['meta'][metaPrefix~'cpp_headerborder_color'] }}"/>*/
/*                     <span class="help-text">The border color around the header of the checkout page. The border is a 2-pixel perimeter around the header space, which has a maximum size of 750 pixels wide by 90 pixels high.</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <input type="hidden" name="task" value="appTask"/>*/
/*                     <input type="hidden" name="apptask" value="save"/>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content page-btn">*/
/*                     <button type="submit" class="btn page-title-action">Save</button>*/
/*                     <a href="?page=app-index" class="btn page-title-action">Cancel</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*      </form>*/
/* </div>*/
/* {% endblock %}*/

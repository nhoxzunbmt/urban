<?php

/* @AxisubsAppPaypal/Site/Form/form.twig */
class __TwigTemplate_fdff94ba60fc97e1c3da2aa78c62ca6aed0778079c59fc903e3a55ebb470fed5 extends Twig_Template
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
        echo "<form action='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "post_url", array()), "html", null, true);
        echo "' id=\"paypal_payment_form\" method='post'>
    <!--USER INFO-->
    <input type='hidden' name='first_name' value='";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "first_name", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='last_name' value='";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "last_name", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='email' value='";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "email", array()), "html", null, true);
        echo "' />
    <!--SHIPPING ADDRESS PROVIDED-->
    <input type='hidden' name='address1' value='";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "address_1", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='address2' value='";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "address_2", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='city' value='";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "city", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='country' value='";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "country", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='state' value='";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "region", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='zip' value='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "postal_code", array()), "html", null, true);
        echo "' />
    <!-- IPN-PDT  ONLY -->
    <input type='hidden' name='custom' value='";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "subscription", array()), "ID", array(), "array"), "html", null, true);
        echo "'>
    <input type='hidden' name='invoice' value='";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "invoice", array()), "html", null, true);
        echo "' />

    <!--PAYPAL VARIABLES-->
    <input type='hidden' name='cmd' value='";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "cmd", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='rm' value='2' />
    <input type=\"hidden\" name=\"business\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "merchant_email", array()), "html", null, true);
        echo "\" />
    <input type='hidden' name='return' value='";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "return_url", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='cancel_return' value='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "cancel_url", array()), "html", null, true);
        echo "' />
    <input type=\"hidden\" name=\"notify_url\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "notify_url", array()), "html", null, true);
        echo "\" />
    <input type='hidden' name='currency_code' value='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "currency_code", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='no_note' value='1' />
    <input type='hidden' name='bn' value='";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "button_text", array()), "html", null, true);
        echo "' />
    <input type='hidden' name='upload' value='1' />
    <input type='hidden' name='charset' value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "charset", array()), "html", null, true);
        echo "' />

    <!-- Subscription details -->
    <input type='hidden' name='item_name' value='";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "item_name", array()), "html", null, true);
        echo "' />

    ";
        // line 33
        if (($this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "recurring", array()) == "1")) {
            // line 34
            echo "        ";
            if (($this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "has_trial", array()) == "1")) {
                // line 35
                echo "            <!-- trial vars -->
            <input type='hidden' name='a1' value='";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "a1", array()), "html", null, true);
                echo "' />
            <input type='hidden' name='p1' value='";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "p1", array()), "html", null, true);
                echo "' />
            <input type='hidden' name='t1' value='";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "t1", array()), "html", null, true);
                echo "' />
        ";
            }
            // line 40
            echo "
        <!-- plan duration vars -->
        <input type='hidden' name='a3' value='";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "a3", array()), "html", null, true);
            echo "' />
        <input type='hidden' name='p3' value='";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "p3", array()), "html", null, true);
            echo "' />
        <input type='hidden' name='t3' value='";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "t3", array()), "html", null, true);
            echo "' />

        <!-- recurring flag -->
        <input type='hidden' name='src' value='1' />
        <!-- billing cycles count -->
        <input type='hidden' name='srt' value='";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "billing_cycles", array()), "html", null, true);
            echo "' />
        <!-- failure reattempt flag -->
        <input type='hidden' name='sra' value='";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "sra", array()), "html", null, true);
            echo "' />

    ";
        } else {
            // line 54
            echo "        <input type=\"hidden\" name=\"amount\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "total", array()), "html", null, true);
            echo "\" />
        ";
            // line 55
            if ($this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "tax_cart", array())) {
                // line 56
                echo "            <input type=\"hidden\" name=\"tax\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "tax_cart", array()), "html", null, true);
                echo "\" />
        ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    <!-- Payment screen style variables -->
    <input type=\"hidden\" name=\"cbt\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "cbt", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cpp_header_image\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "cpp_header_image", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cpp_headerback_color\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "cpp_headerback_color", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cpp_headerborder_color\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vars"]) ? $context["vars"] : null), "cpp_headerborder_color", array()), "html", null, true);
        echo "\">

    <input type=\"submit\" style=\"display: none\">
</form>
<script type=\"application/javascript\">
    if(typeof(axisubs) == 'undefined') {
        var axisubs = {};
    }
    if(typeof(axisubs.jQuery) == 'undefined') {
        axisubs.jQuery = jQuery.noConflict();
    }

    function submitAxisubsPayment(){
        (function(\$){
            \$('#paypal_payment_form').submit();
        })(axisubs.jQuery);
    }
</script>";
    }

    public function getTemplateName()
    {
        return "@AxisubsAppPaypal/Site/Form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 64,  195 => 63,  191 => 62,  187 => 61,  183 => 59,  180 => 58,  174 => 56,  172 => 55,  167 => 54,  161 => 51,  156 => 49,  148 => 44,  144 => 43,  140 => 42,  136 => 40,  131 => 38,  127 => 37,  123 => 36,  120 => 35,  117 => 34,  115 => 33,  110 => 31,  104 => 28,  99 => 26,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  73 => 18,  67 => 15,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  33 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <form action='{{ vars.post_url }}' id="paypal_payment_form" method='post'>*/
/*     <!--USER INFO-->*/
/*     <input type='hidden' name='first_name' value='{{ vars.first_name }}' />*/
/*     <input type='hidden' name='last_name' value='{{ vars.last_name }}' />*/
/*     <input type='hidden' name='email' value='{{ vars.email }}' />*/
/*     <!--SHIPPING ADDRESS PROVIDED-->*/
/*     <input type='hidden' name='address1' value='{{ vars.address_1 }}' />*/
/*     <input type='hidden' name='address2' value='{{ vars.address_2 }}' />*/
/*     <input type='hidden' name='city' value='{{ vars.city }}' />*/
/*     <input type='hidden' name='country' value='{{ vars.country }}' />*/
/*     <input type='hidden' name='state' value='{{ vars.region }}' />*/
/*     <input type='hidden' name='zip' value='{{ vars.postal_code }}' />*/
/*     <!-- IPN-PDT  ONLY -->*/
/*     <input type='hidden' name='custom' value='{{ vars.subscription['ID'] }}'>*/
/*     <input type='hidden' name='invoice' value='{{ vars.invoice }}' />*/
/* */
/*     <!--PAYPAL VARIABLES-->*/
/*     <input type='hidden' name='cmd' value='{{ vars.cmd }}' />*/
/*     <input type='hidden' name='rm' value='2' />*/
/*     <input type="hidden" name="business" value="{{ vars.merchant_email }}" />*/
/*     <input type='hidden' name='return' value='{{ vars.return_url }}' />*/
/*     <input type='hidden' name='cancel_return' value='{{ vars.cancel_url }}' />*/
/*     <input type="hidden" name="notify_url" value="{{ vars.notify_url }}" />*/
/*     <input type='hidden' name='currency_code' value='{{ vars.currency_code }}' />*/
/*     <input type='hidden' name='no_note' value='1' />*/
/*     <input type='hidden' name='bn' value='{{ vars.button_text }}' />*/
/*     <input type='hidden' name='upload' value='1' />*/
/*     <input type='hidden' name='charset' value='{{ vars.charset }}' />*/
/* */
/*     <!-- Subscription details -->*/
/*     <input type='hidden' name='item_name' value='{{ vars.item_name }}' />*/
/* */
/*     {% if vars.recurring == '1' %}*/
/*         {% if vars.has_trial == '1' %}*/
/*             <!-- trial vars -->*/
/*             <input type='hidden' name='a1' value='{{ vars.a1 }}' />*/
/*             <input type='hidden' name='p1' value='{{ vars.p1 }}' />*/
/*             <input type='hidden' name='t1' value='{{ vars.t1 }}' />*/
/*         {% endif %}*/
/* */
/*         <!-- plan duration vars -->*/
/*         <input type='hidden' name='a3' value='{{ vars.a3 }}' />*/
/*         <input type='hidden' name='p3' value='{{ vars.p3 }}' />*/
/*         <input type='hidden' name='t3' value='{{ vars.t3 }}' />*/
/* */
/*         <!-- recurring flag -->*/
/*         <input type='hidden' name='src' value='1' />*/
/*         <!-- billing cycles count -->*/
/*         <input type='hidden' name='srt' value='{{ vars.billing_cycles }}' />*/
/*         <!-- failure reattempt flag -->*/
/*         <input type='hidden' name='sra' value='{{ vars.sra }}' />*/
/* */
/*     {% else %}*/
/*         <input type="hidden" name="amount" value="{{ vars.total }}" />*/
/*         {% if(vars.tax_cart) %}*/
/*             <input type="hidden" name="tax" value="{{ vars.tax_cart }}" />*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <!-- Payment screen style variables -->*/
/*     <input type="hidden" name="cbt" value="{{ vars.cbt }}">*/
/*     <input type="hidden" name="cpp_header_image" value="{{ vars.cpp_header_image }}">*/
/*     <input type="hidden" name="cpp_headerback_color" value="{{ vars.cpp_headerback_color }}">*/
/*     <input type="hidden" name="cpp_headerborder_color" value="{{ vars.cpp_headerborder_color }}">*/
/* */
/*     <input type="submit" style="display: none">*/
/* </form>*/
/* <script type="application/javascript">*/
/*     if(typeof(axisubs) == 'undefined') {*/
/*         var axisubs = {};*/
/*     }*/
/*     if(typeof(axisubs.jQuery) == 'undefined') {*/
/*         axisubs.jQuery = jQuery.noConflict();*/
/*     }*/
/* */
/*     function submitAxisubsPayment(){*/
/*         (function($){*/
/*             $('#paypal_payment_form').submit();*/
/*         })(axisubs.jQuery);*/
/*     }*/
/* </script>*/

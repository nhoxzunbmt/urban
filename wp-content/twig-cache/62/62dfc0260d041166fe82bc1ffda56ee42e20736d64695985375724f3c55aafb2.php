<?php

/* @AxisubsAppCoupon/Site/List/list.twig */
class __TwigTemplate_6b9e8e27841944746c0336d8db054eed84a1d94aab01e8bbd3de26b97bfe8968 extends Twig_Template
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
        echo "<style>
    .axisubs_coupon_remove {
        color: red;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
    }
    .axisubs_coupon_code_con {
        background: #08c none repeat scroll 0 0;
        border-radius: 2px;
        color: #fff;
        display: inline-block;
        padding: 0 5px;
    }
</style>
";
        // line 16
        if (((isset($context["couponCode"]) ? $context["couponCode"] : null) != "")) {
            // line 17
            echo "    ";
            $context["itemPrefix"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "post_type", array(), "array")) . "_");
            // line 18
            echo "<div class=\"content-plan\">
    <div class=\"plan_list\">
        <div class=\"axisubs-plan-total-fee-text\">
            <strong>Discount</strong>
            <span class=\"axisubs_coupon_amount_con\">
                <span>
                    ";
            // line 24
            if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["itemPrefix"]) ? $context["itemPrefix"] : null) . "value_type"), array(), "array") == "percent")) {
                // line 25
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["itemPrefix"]) ? $context["itemPrefix"] : null) . "value"), array(), "array"), "html", null, true);
                echo "%
                    ";
            } else {
                // line 27
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["itemPrefix"]) ? $context["itemPrefix"] : null) . "value"), array(), "array"), "html", null, true);
                echo "
                    ";
            }
            // line 29
            echo "                </span>
            </span>
                <span class=\"axisubs_coupon_code_con\">
                    <span>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ((isset($context["itemPrefix"]) ? $context["itemPrefix"] : null) . "code"), array(), "array"), "html", null, true);
            echo "</span>
                    <span title=\"Remove coupon\" onclick=\"removeCoupon()\" class=\"axisubs_coupon_remove hastip\">X</span>
                </span>
        </div>
    </div>
    <div class=\"axisubs-plan-prices\">
        <div class=\"axisubs-plan-total-fee-amt\">
           - ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currencyData", array(), "array"), "code", array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["discountValue"]) ? $context["discountValue"] : null), "html", null, true);
            echo "
        </div>
    </div>
</div>
<script type=\"application/javascript\">
    if(typeof(axisubs) == 'undefined') {
        var axisubs = {};
    }
    if(typeof(axisubs.jQuery) == 'undefined') {
        axisubs.jQuery = jQuery.noConflict();
    }

    function removeCoupon(){
        (function (\$) {
            var data = {
                action: 'axisubs_ajax',
                view: 'Plan', task: 'app',
                app: 'axisubs-app-coupon',
                apptask: 'removeCoupon'}
            \$.ajax({
                type: 'post',
                url: \$('#site_url').val()+'/wp-admin/admin-ajax.php',
                data: data,
                dataType: 'json',
                beforeSend: function () {
                    \$('.axisubs_coupon_remove').attr('disabled', 'disabled');
                },
                success: function (data) {
                    ";
            // line 67
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "page", array(), "array") == "confirm")) {
                // line 68
                echo "                        window.history.back();
                    ";
            } else {
                // line 70
                echo "                        window.location.reload();
                    ";
            }
            // line 72
            echo "                }
            });
        })(axisubs.jQuery);
    }
    /*For refresh the page while remove coupon in confirm page.*/
    (function (\$) {
        \$(document).ready(function()
        {
            var d = new Date();
            d = d.getTime();
            if (\$('#reloadValue').val().length == 0)
            {
                \$('#reloadValue').val(d);
                \$('body').show();
            }
            else
            {
                \$('#reloadValue').val('');
                location.reload();
            }
        });
    })(axisubs.jQuery);
</script>
    <input id=\"reloadValue\" type=\"hidden\" name=\"reloadValue\" value=\"\" />
";
        }
    }

    public function getTemplateName()
    {
        return "@AxisubsAppCoupon/Site/List/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 72,  117 => 70,  113 => 68,  111 => 67,  79 => 39,  69 => 32,  64 => 29,  57 => 27,  51 => 25,  49 => 24,  41 => 18,  38 => 17,  36 => 16,  19 => 1,);
    }
}
/* <style>*/
/*     .axisubs_coupon_remove {*/
/*         color: red;*/
/*         cursor: pointer;*/
/*         display: inline-block;*/
/*         font-weight: bold;*/
/*     }*/
/*     .axisubs_coupon_code_con {*/
/*         background: #08c none repeat scroll 0 0;*/
/*         border-radius: 2px;*/
/*         color: #fff;*/
/*         display: inline-block;*/
/*         padding: 0 5px;*/
/*     }*/
/* </style>*/
/* {% if(couponCode != '') %}*/
/*     {% set itemPrefix = item['ID']~'_'~item['post_type']~'_' %}*/
/* <div class="content-plan">*/
/*     <div class="plan_list">*/
/*         <div class="axisubs-plan-total-fee-text">*/
/*             <strong>Discount</strong>*/
/*             <span class="axisubs_coupon_amount_con">*/
/*                 <span>*/
/*                     {% if(item['meta'][itemPrefix~'value_type'] == 'percent') %}*/
/*                         {{ item['meta'][itemPrefix~'value'] }}%*/
/*                     {% else %}*/
/*                         {{ data['currencyData']['code'] }}{{ item['meta'][itemPrefix~'value'] }}*/
/*                     {% endif %}*/
/*                 </span>*/
/*             </span>*/
/*                 <span class="axisubs_coupon_code_con">*/
/*                     <span>{{ item['meta'][itemPrefix~'code'] }}</span>*/
/*                     <span title="Remove coupon" onclick="removeCoupon()" class="axisubs_coupon_remove hastip">X</span>*/
/*                 </span>*/
/*         </div>*/
/*     </div>*/
/*     <div class="axisubs-plan-prices">*/
/*         <div class="axisubs-plan-total-fee-amt">*/
/*            - {{ data['currencyData']['code'] }}{{ discountValue }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="application/javascript">*/
/*     if(typeof(axisubs) == 'undefined') {*/
/*         var axisubs = {};*/
/*     }*/
/*     if(typeof(axisubs.jQuery) == 'undefined') {*/
/*         axisubs.jQuery = jQuery.noConflict();*/
/*     }*/
/* */
/*     function removeCoupon(){*/
/*         (function ($) {*/
/*             var data = {*/
/*                 action: 'axisubs_ajax',*/
/*                 view: 'Plan', task: 'app',*/
/*                 app: 'axisubs-app-coupon',*/
/*                 apptask: 'removeCoupon'}*/
/*             $.ajax({*/
/*                 type: 'post',*/
/*                 url: $('#site_url').val()+'/wp-admin/admin-ajax.php',*/
/*                 data: data,*/
/*                 dataType: 'json',*/
/*                 beforeSend: function () {*/
/*                     $('.axisubs_coupon_remove').attr('disabled', 'disabled');*/
/*                 },*/
/*                 success: function (data) {*/
/*                     {% if(data['page'] == 'confirm') %}*/
/*                         window.history.back();*/
/*                     {% else %}*/
/*                         window.location.reload();*/
/*                     {% endif %}*/
/*                 }*/
/*             });*/
/*         })(axisubs.jQuery);*/
/*     }*/
/*     /*For refresh the page while remove coupon in confirm page.*//* */
/*     (function ($) {*/
/*         $(document).ready(function()*/
/*         {*/
/*             var d = new Date();*/
/*             d = d.getTime();*/
/*             if ($('#reloadValue').val().length == 0)*/
/*             {*/
/*                 $('#reloadValue').val(d);*/
/*                 $('body').show();*/
/*             }*/
/*             else*/
/*             {*/
/*                 $('#reloadValue').val('');*/
/*                 location.reload();*/
/*             }*/
/*         });*/
/*     })(axisubs.jQuery);*/
/* </script>*/
/*     <input id="reloadValue" type="hidden" name="reloadValue" value="" />*/
/* {% endif %}*/

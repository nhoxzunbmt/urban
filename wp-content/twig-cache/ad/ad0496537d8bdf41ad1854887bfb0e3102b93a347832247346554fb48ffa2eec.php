<?php

/* @AxisubsAppCoupon/Site/Form/form.twig */
class __TwigTemplate_d0de99f981108f259c3a5724faf5677fd5c4b80a506634a61c7e55f7a170d999 extends Twig_Template
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
        if (((isset($context["couponCode"]) ? $context["couponCode"] : null) == "")) {
            // line 2
            echo "    ";
            $context["totalValue"] = $this->getAttribute($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "meta", array(), "array"), "total_price", array(), "array");
            // line 3
            echo "<style>
    #axisub_coupon_code {
        max-width: 175px;
    }
</style>
<div class=\"axisubs-billinfo-f-c\">
    <div class=\"axisubs-billinfo-f-i\">
        <div class=\"axisubs-billinfo-f-field\">
            <input type=\"text\" id=\"axisub_coupon_code\" name=\"coupon_code\" placeholder=\"Coupon Code\" class=\"form-control\">
            <button type=\"button\" onclick=\"applyAxisubsCoupon()\" class=\"btn btn-success axisub_coupon_code_btn\">Apply</button>
        </div>
        <div class=\"form-group axisub-coupon_message message\">
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

    /**
     * For validating coupon
    * */
    function applyAxisubsCoupon(){
        (function(\$){
            \$('.axisub-coupon_message').hide();
            var data = { coupon_code: \$('#axisub_coupon_code').val(),
                action: 'axisubs_ajax',
                view: 'Plan', task: 'app',
                app: 'axisubs-app-coupon',
                apptask: 'applyCoupon',
                price: '";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["totalValue"]) ? $context["totalValue"] : null), "html", null, true);
            echo "'}
            \$.ajax({
                type: 'post',
                url: \$('#site_url').val()+'/wp-admin/admin-ajax.php',
                dataType: 'json',
                data: data,
                cache: false,
                async: false,
                success: function (json) {
                    removeMessageClass('.axisub-coupon_message');
                    \$('.axisub-coupon_message').html(json['message']).show();
                    if (json['status'] == '200') {
                        \$('.axisub-coupon_message').addClass('message-success');
                        location.reload();
                    } else {
                        \$('.axisub-coupon_message').addClass('message-danger');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    //alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        })(axisubs.jQuery);
    }
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@AxisubsAppCoupon/Site/Form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 37,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if(couponCode == '') %}*/
/*     {% set totalValue = plan['meta']['total_price'] %}*/
/* <style>*/
/*     #axisub_coupon_code {*/
/*         max-width: 175px;*/
/*     }*/
/* </style>*/
/* <div class="axisubs-billinfo-f-c">*/
/*     <div class="axisubs-billinfo-f-i">*/
/*         <div class="axisubs-billinfo-f-field">*/
/*             <input type="text" id="axisub_coupon_code" name="coupon_code" placeholder="Coupon Code" class="form-control">*/
/*             <button type="button" onclick="applyAxisubsCoupon()" class="btn btn-success axisub_coupon_code_btn">Apply</button>*/
/*         </div>*/
/*         <div class="form-group axisub-coupon_message message">*/
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
/*     /***/
/*      * For validating coupon*/
/*     * *//* */
/*     function applyAxisubsCoupon(){*/
/*         (function($){*/
/*             $('.axisub-coupon_message').hide();*/
/*             var data = { coupon_code: $('#axisub_coupon_code').val(),*/
/*                 action: 'axisubs_ajax',*/
/*                 view: 'Plan', task: 'app',*/
/*                 app: 'axisubs-app-coupon',*/
/*                 apptask: 'applyCoupon',*/
/*                 price: '{{ totalValue }}'}*/
/*             $.ajax({*/
/*                 type: 'post',*/
/*                 url: $('#site_url').val()+'/wp-admin/admin-ajax.php',*/
/*                 dataType: 'json',*/
/*                 data: data,*/
/*                 cache: false,*/
/*                 async: false,*/
/*                 success: function (json) {*/
/*                     removeMessageClass('.axisub-coupon_message');*/
/*                     $('.axisub-coupon_message').html(json['message']).show();*/
/*                     if (json['status'] == '200') {*/
/*                         $('.axisub-coupon_message').addClass('message-success');*/
/*                         location.reload();*/
/*                     } else {*/
/*                         $('.axisub-coupon_message').addClass('message-danger');*/
/*                     }*/
/*                 },*/
/*                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                     //alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         })(axisubs.jQuery);*/
/*     }*/
/* </script>*/
/* {% endif %}*/

<?php

/* @AxisubsAppStripe/Admin/Plan/button.twig */
class __TwigTemplate_3dc02203b6344adf796d295183dd53d99e17d041a77475829a2c5e869555df66 extends Twig_Template
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
        echo "<a href=\"#\" onclick=\"importStripePlans()\" id=\"axisubs-import_from_stripe\" class=\"page-title-action\">Import from Stripe</a>
<input type=\"hidden\" name=\"site_url\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\" id=\"site_url\"/>
<script type=\"application/javascript\">
    if(typeof(axisubs) == 'undefined') {
        var axisubs = {};
    }
    if(typeof(axisubs.jQuery) == 'undefined') {
        axisubs.jQuery = jQuery.noConflict();
    }

    /**
     * For import the stripe plans
     * */
    function importStripePlans(){
        (function(\$){
            \$('.axisub-coupon_message').hide();
            var data = {
                action: 'axisubs_ajax',
                view: 'Plan', task: 'app',
                app: 'axisubs-app-payment-stripe',
                apptask: 'importPlansFromStripe'}
            \$.ajax({
                type: 'post',
                url: \$('#site_url').val()+'/wp-admin/admin-ajax.php',
                dataType: 'json',
                data: data,
                cache: false,
                async: false,
                beforeSend: function () {
                    \$('#axisubs-import_from_stripe').html('Loading..');
                },
                success: function (json) {
                    \$('#axisubs-import_from_stripe').html('Import from Stripe');
                    console.log(json);
                    \$('.axisubs-message-ajax').html(json['message']).show();
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    //alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        })(axisubs.jQuery);
    }
</script>";
    }

    public function getTemplateName()
    {
        return "@AxisubsAppStripe/Admin/Plan/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <a href="#" onclick="importStripePlans()" id="axisubs-import_from_stripe" class="page-title-action">Import from Stripe</a>*/
/* <input type="hidden" name="site_url" value="{{ site_url }}" id="site_url"/>*/
/* <script type="application/javascript">*/
/*     if(typeof(axisubs) == 'undefined') {*/
/*         var axisubs = {};*/
/*     }*/
/*     if(typeof(axisubs.jQuery) == 'undefined') {*/
/*         axisubs.jQuery = jQuery.noConflict();*/
/*     }*/
/* */
/*     /***/
/*      * For import the stripe plans*/
/*      * *//* */
/*     function importStripePlans(){*/
/*         (function($){*/
/*             $('.axisub-coupon_message').hide();*/
/*             var data = {*/
/*                 action: 'axisubs_ajax',*/
/*                 view: 'Plan', task: 'app',*/
/*                 app: 'axisubs-app-payment-stripe',*/
/*                 apptask: 'importPlansFromStripe'}*/
/*             $.ajax({*/
/*                 type: 'post',*/
/*                 url: $('#site_url').val()+'/wp-admin/admin-ajax.php',*/
/*                 dataType: 'json',*/
/*                 data: data,*/
/*                 cache: false,*/
/*                 async: false,*/
/*                 beforeSend: function () {*/
/*                     $('#axisubs-import_from_stripe').html('Loading..');*/
/*                 },*/
/*                 success: function (json) {*/
/*                     $('#axisubs-import_from_stripe').html('Import from Stripe');*/
/*                     console.log(json);*/
/*                     $('.axisubs-message-ajax').html(json['message']).show();*/
/*                     location.reload();*/
/*                 },*/
/*                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                     //alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         })(axisubs.jQuery);*/
/*     }*/
/* </script>*/

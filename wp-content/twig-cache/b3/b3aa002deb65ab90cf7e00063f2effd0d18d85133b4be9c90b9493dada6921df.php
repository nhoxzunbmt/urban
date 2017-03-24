<?php

/* @Axisubs/Site/subscribe/subscribe.twig */
class __TwigTemplate_412b939d392d321d59859deac5e81df48ba94090649caa29fb2a18e9ffb0f929 extends Twig_Template
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
        echo "<div class=\"axisubs wrap\">
    ";
        // line 2
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
    ";
        // line 3
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") > 0)) {
            // line 4
            echo "        ";
            $context["id"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array");
            // line 5
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_url", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
      <div class=\"sub-title\">
        <h3>";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("[:ru]Информация об оплате[:ro]Informații de plată")), "html", null, true);
            echo "</h3>
      </div>
        <div class=\"axisubs-plan_details\">
          <!-- <div class=\"plans-header\">
            <div class=\"axisubs-plan_details-title\">
                ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
            echo "
            </div>
            <div class=\"axisubs-plan-price-title\">
              Item Price
            </div>
          </div> -->
          <div class=\"axisubs-plan_details-summary\">
            <div class=\"content-plan\">
              <div class=\"plan_list\">
                <div class=\"list-image bs\">
                    ";
            // line 22
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array") == "")) {
                // line 23
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array"), "html", null, true);
                echo "/resources/assets/images/ico_noimage.png\">
                    ";
            } else {
                // line 25
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array"), "html", null, true);
                echo "\">
                    ";
            }
            // line 27
            echo "                </div>
                <div class=\"list-content\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "
                </div>
                <div class=\"desc\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_description"), array(), "array"), "html", null, true);
            echo "
                </div>
              </div>
              <div class=\"axisubs-plan-prices\">
                <div class=\"axisubs-plan-basic-fee\">
                  <div class=\"axisubs-plan-fee\">
                     ";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("[:ru]Цена[:ro]Preț")), "html", null, true);
            echo ":
                    ";
            // line 39
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array", true, true) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array") > 0))) {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array")), "html", null, true);
                echo "
                    ";
            } else {
                // line 42
                echo "                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . "0"), "html", null, true);
                echo "
                    ";
            }
            // line 44
            echo "                    </div>
                  </div>
                  ";
            // line 46
            if ((($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array") > 0) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "allow_setupcost", array(), "array") == "1"))) {
                // line 47
                echo "                  <div class=\"axisubs-plan-setup-fee\">
                    <div class=\"axisubs-plan-setup-fee-text\">
                        Setup Cost:
                        <span class=\"axisubs-plan-setup-fee-amt\">
                          ";
                // line 51
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array")), "html", null, true);
                echo "
                        </span>
                    </div>
                  </div>
                  ";
            }
            // line 56
            echo "              </div>
            </div>
            ";
            // line 58
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content_in_price_list", array(), "array");
            echo "
            <hr>
            <div class=\"axisubs-plan-total-fee\">
              ";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("[:ru]Всего[:ro]Total")), "html", null, true);
            echo ":
              <span class=\"axisubs-plan-total-fee-amt\">
                  ";
            // line 63
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
            echo "
              </span>
            </div>
          </div>
        </div>
        <!-- <h3>Billing Info</h3>
        <table class=\"table axisubs-plan-billinfo-con\">
        <tbody>
          <tr>
            <td><strong>Customer name</strong></td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
            echo "
            ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array"), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td><strong>Email</strong></td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td><strong>Address</strong></td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array"), "html", null, true);
            echo ",
            ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array"), "html", null, true);
            echo ",
            ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array"), "html", null, true);
            echo ",
            ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array"), "html", null, true);
            echo ",
            ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
            echo "</td>
          </tr>
          ";
            // line 88
            if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array") != "")) {
                // line 89
                echo "          <tr>
              <td><strong>Company</strong></td>
              <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array"), "html", null, true);
                echo "</td>
          </tr>
          ";
            }
            // line 94
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array") != "")) {
                // line 95
                echo "          <tr>
              <td><strong>Tax number</strong></td>
              <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array"), "html", null, true);
                echo "</td>
          </tr>
          ";
            }
            // line 100
            echo "        </tbody>
        </table> -->

        <div class=\"axisubs-plan-payment-con\">
            <input type=\"hidden\" name=\"task\" value=\"updateFreePlan\"/>
            <input type=\"hidden\" name=\"s_id\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array"), "html", null, true);
            echo "\"/>
            <div class=\"axisubs-plan-payment-i-block\">
                <div class=\"axisubs-plan-payment-button\">
                    ";
            // line 108
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_type"), array(), "array") == "free")) {
                // line 109
                echo "                    <button class=\"btn-vacancyes\" type=\"submit\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("[:ru]Подтвердить подписку[:ro]Confirmă abonarea")), "html", null, true);
                echo "</button>
                    ";
            } else {
                // line 111
                echo "                        <button class=\"btn-vacancyes\" type=\"button\" onclick=\"submitAxisubsPayment()\">Pay now</button>
                    ";
            }
            // line 113
            echo "                </div>
            </div>
        </div>
    </form>
        ";
            // line 117
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "paymentForm", array(), "array");
            echo "
        <input type=\"hidden\" id=\"site_url\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // line 120
            echo "        <div class=\"axisubs-plan-notfound\">
            Invalid Data
        </div>
    ";
        }
        // line 124
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/subscribe/subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 124,  261 => 120,  256 => 118,  252 => 117,  246 => 113,  242 => 111,  236 => 109,  234 => 108,  228 => 105,  221 => 100,  215 => 97,  211 => 95,  208 => 94,  202 => 91,  198 => 89,  196 => 88,  191 => 86,  187 => 85,  183 => 84,  179 => 83,  175 => 82,  168 => 78,  161 => 74,  157 => 73,  144 => 63,  139 => 61,  133 => 58,  129 => 56,  121 => 51,  115 => 47,  113 => 46,  109 => 44,  103 => 42,  97 => 40,  95 => 39,  91 => 38,  82 => 32,  76 => 29,  72 => 27,  66 => 25,  60 => 23,  58 => 22,  45 => 12,  37 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     {{ message | raw }}*/
/*     {% if item['ID'] > 0 %}*/
/*         {% set id = item['ID'] %}*/
/*     <form action="{{ data['plan_url'] }}" method="post">*/
/*       <div class="sub-title">*/
/*         <h3>{{__('[:ru]Информация об оплате[:ro]Informații de plată')}}</h3>*/
/*       </div>*/
/*         <div class="axisubs-plan_details">*/
/*           <!-- <div class="plans-header">*/
/*             <div class="axisubs-plan_details-title">*/
/*                 {{ pagetitle }}*/
/*             </div>*/
/*             <div class="axisubs-plan-price-title">*/
/*               Item Price*/
/*             </div>*/
/*           </div> -->*/
/*           <div class="axisubs-plan_details-summary">*/
/*             <div class="content-plan">*/
/*               <div class="plan_list">*/
/*                 <div class="list-image bs">*/
/*                     {% if meta[id~'_axisubs_plans_image'] == '' %}*/
/*                         <img src="{{ data['plugin_url'] }}/resources/assets/images/ico_noimage.png">*/
/*                     {% else %}*/
/*                         <img src="{{ meta[id~'_axisubs_plans_image'] }}">*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="list-content">*/
/*                     {{ meta[id~'_axisubs_plans_name'] }}*/
/*                 </div>*/
/*                 <div class="desc">*/
/*                     {{ meta[id~'_axisubs_plans_description'] }}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="axisubs-plan-prices">*/
/*                 <div class="axisubs-plan-basic-fee">*/
/*                   <div class="axisubs-plan-fee">*/
/*                      {{__('[:ru]Цена[:ro]Preț')}}:*/
/*                     {% if meta[id~'_axisubs_plans_price'] is defined and meta[id~'_axisubs_plans_price'] > 0 %}*/
/*                         {{ currencyData['code']~meta[id~'_axisubs_plans_price'] }}*/
/*                     {% else %}*/
/*                         {{ currencyData['code']~'0' }}*/
/*                     {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   {% if ((meta[id~'_axisubs_plans_setup_cost']>0) and (meta['allow_setupcost'] == "1")) %}*/
/*                   <div class="axisubs-plan-setup-fee">*/
/*                     <div class="axisubs-plan-setup-fee-text">*/
/*                         Setup Cost:*/
/*                         <span class="axisubs-plan-setup-fee-amt">*/
/*                           {{ currencyData['code']~meta[id~'_axisubs_plans_setup_cost'] }}*/
/*                         </span>*/
/*                     </div>*/
/*                   </div>*/
/*                   {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             {{ data['content_in_price_list'] | raw }}*/
/*             <hr>*/
/*             <div class="axisubs-plan-total-fee">*/
/*               {{__('[:ru]Всего[:ro]Total')}}:*/
/*               <span class="axisubs-plan-total-fee-amt">*/
/*                   {{ currencyData['code']~subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_total_price'] }}*/
/*               </span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <!-- <h3>Billing Info</h3>*/
/*         <table class="table axisubs-plan-billinfo-con">*/
/*         <tbody>*/
/*           <tr>*/
/*             <td><strong>Customer name</strong></td>*/
/*             <td>{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_first_name'] }}*/
/*             {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_last_name'] }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td><strong>Email</strong></td>*/
/*             <td>{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_email'] }}</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td><strong>Address</strong></td>*/
/*             <td>{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1'] }},*/
/*             {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line2'] }},*/
/*             {{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_city'] }},*/
/*             {{ data['province'] }},*/
/*             {{ data['country'] }}</td>*/
/*           </tr>*/
/*           {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_company'] != '') %}*/
/*           <tr>*/
/*               <td><strong>Company</strong></td>*/
/*               <td>{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_company'] }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*           {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_vat_number'] != '') %}*/
/*           <tr>*/
/*               <td><strong>Tax number</strong></td>*/
/*               <td>{{ subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_vat_number'] }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*         </tbody>*/
/*         </table> -->*/
/* */
/*         <div class="axisubs-plan-payment-con">*/
/*             <input type="hidden" name="task" value="updateFreePlan"/>*/
/*             <input type="hidden" name="s_id" value="{{ subscriber['ID'] }}"/>*/
/*             <div class="axisubs-plan-payment-i-block">*/
/*                 <div class="axisubs-plan-payment-button">*/
/*                     {% if meta[id~'_axisubs_plans_type'] == 'free' %}*/
/*                     <button class="btn-vacancyes" type="submit">{{__('[:ru]Подтвердить подписку[:ro]Confirmă abonarea')}}</button>*/
/*                     {% else %}*/
/*                         <button class="btn-vacancyes" type="button" onclick="submitAxisubsPayment()">Pay now</button>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/*         {{ data['paymentForm'] | raw }}*/
/*         <input type="hidden" id="site_url" value="{{ site_url }}"/>*/
/*     {% else %}*/
/*         <div class="axisubs-plan-notfound">*/
/*             Invalid Data*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* */

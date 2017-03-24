<?php

/* @Axisubs/Site/subscribe/subscribe.twig */
class __TwigTemplate_6ea20bb3bd555882a9140cbe94e1fe78ae56508b2b81633074f2ea30997d2cec extends Twig_Template
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
      <h3>Payment Info</h3>
        <div class=\"axisubs-plan_details\">
          <div class=\"plans-header\">
            <div class=\"axisubs-plan_details-title\">
                ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
            echo "
            </div>
            <div class=\"axisubs-plan-price-title\">
              Item Price
            </div>
          </div>
          <div class=\"axisubs-plan_details-summary\">
            <div class=\"content-plan\">
              <div class=\"plan_list\">
                <div class=\"list-image\">
                    ";
            // line 20
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array") == "")) {
                // line 21
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array"), "html", null, true);
                echo "/resources/assets/images/ico_noimage.png\">
                    ";
            } else {
                // line 23
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array"), "html", null, true);
                echo "\">
                    ";
            }
            // line 25
            echo "                </div>
                <div class=\"list-content\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "
                </div>
                <div class=\"desc\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_description"), array(), "array"), "html", null, true);
            echo "
                </div>
              </div>
              <div class=\"axisubs-plan-prices\">
                <div class=\"axisubs-plan-basic-fee\">
                  <div class=\"axisubs-plan-fee\">
                    Price:
                    ";
            // line 37
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array", true, true) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array") > 0))) {
                // line 38
                echo "                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array")), "html", null, true);
                echo "
                    ";
            } else {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . "0"), "html", null, true);
                echo "
                    ";
            }
            // line 42
            echo "                    </div>
                  </div>
                  ";
            // line 44
            if ((($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array") > 0) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "allow_setupcost", array(), "array") == "1"))) {
                // line 45
                echo "                  <div class=\"axisubs-plan-setup-fee\">
                    <div class=\"axisubs-plan-setup-fee-text\">
                        Setup Cost:
                        <span class=\"axisubs-plan-setup-fee-amt\">
                          ";
                // line 49
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array")), "html", null, true);
                echo "
                        </span>
                    </div>
                  </div>
                  ";
            }
            // line 54
            echo "              </div>
            </div>
            ";
            // line 56
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content_in_price_list", array(), "array");
            echo "
            <div class=\"axisubs-plan-total-fee\">
              Total:
              <span class=\"axisubs-plan-total-fee-amt\">
                  ";
            // line 60
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
            echo "
              </span>
            </div>
          </div>
        </div>
        <h3>Billing Info</h3>
        <table class=\"table axisubs-plan-billinfo-con\">
        <tbody>
          <tr>
            <td><strong>Customer name</strong></td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
            echo "
            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array"), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td><strong>Email</strong></td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
            echo "</td>
          </tr>
          <tr>
            <td><strong>Address</strong></td>
            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array"), "html", null, true);
            echo ",
            ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array"), "html", null, true);
            echo ",
            ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array"), "html", null, true);
            echo ",
            ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array"), "html", null, true);
            echo ",
            ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
            echo "</td>
          </tr>
          ";
            // line 85
            if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array") != "")) {
                // line 86
                echo "          <tr>
              <td><strong>Company</strong></td>
              <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array"), "html", null, true);
                echo "</td>
          </tr>
          ";
            }
            // line 91
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array") != "")) {
                // line 92
                echo "          <tr>
              <td><strong>Tax number</strong></td>
              <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array"), "html", null, true);
                echo "</td>
          </tr>
          ";
            }
            // line 97
            echo "        </tbody>
        </table>

        <div class=\"axisubs-plan-payment-con\">
            <input type=\"hidden\" name=\"task\" value=\"updateFreePlan\"/>
            <input type=\"hidden\" name=\"s_id\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array"), "html", null, true);
            echo "\"/>
            <div class=\"axisubs-plan-payment-i-block\">
                <div class=\"axisubs-plan-payment-button\">
                    ";
            // line 105
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_type"), array(), "array") == "free")) {
                // line 106
                echo "                    <button type=\"submit\">Confirm Subscribe</button>
                    ";
            } else {
                // line 108
                echo "                        <button type=\"button\" onclick=\"submitAxisubsPayment()\">Pay now</button>
                    ";
            }
            // line 110
            echo "                </div>
            </div>
        </div>
    </form>
        ";
            // line 114
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "paymentForm", array(), "array");
            echo "
        <input type=\"hidden\" id=\"site_url\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // line 117
            echo "        <div class=\"axisubs-plan-notfound\">
            Invalid Data
        </div>
    ";
        }
        // line 121
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
        return array (  253 => 121,  247 => 117,  242 => 115,  238 => 114,  232 => 110,  228 => 108,  224 => 106,  222 => 105,  216 => 102,  209 => 97,  203 => 94,  199 => 92,  196 => 91,  190 => 88,  186 => 86,  184 => 85,  179 => 83,  175 => 82,  171 => 81,  167 => 80,  163 => 79,  156 => 75,  149 => 71,  145 => 70,  132 => 60,  125 => 56,  121 => 54,  113 => 49,  107 => 45,  105 => 44,  101 => 42,  95 => 40,  89 => 38,  87 => 37,  77 => 30,  71 => 27,  67 => 25,  61 => 23,  55 => 21,  53 => 20,  40 => 10,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     {{ message | raw }}*/
/*     {% if item['ID'] > 0 %}*/
/*         {% set id = item['ID'] %}*/
/*     <form action="{{ data['plan_url'] }}" method="post">*/
/*       <h3>Payment Info</h3>*/
/*         <div class="axisubs-plan_details">*/
/*           <div class="plans-header">*/
/*             <div class="axisubs-plan_details-title">*/
/*                 {{ pagetitle }}*/
/*             </div>*/
/*             <div class="axisubs-plan-price-title">*/
/*               Item Price*/
/*             </div>*/
/*           </div>*/
/*           <div class="axisubs-plan_details-summary">*/
/*             <div class="content-plan">*/
/*               <div class="plan_list">*/
/*                 <div class="list-image">*/
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
/*                     Price:*/
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
/*             <div class="axisubs-plan-total-fee">*/
/*               Total:*/
/*               <span class="axisubs-plan-total-fee-amt">*/
/*                   {{ currencyData['code']~subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_total_price'] }}*/
/*               </span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <h3>Billing Info</h3>*/
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
/*         </table>*/
/* */
/*         <div class="axisubs-plan-payment-con">*/
/*             <input type="hidden" name="task" value="updateFreePlan"/>*/
/*             <input type="hidden" name="s_id" value="{{ subscriber['ID'] }}"/>*/
/*             <div class="axisubs-plan-payment-i-block">*/
/*                 <div class="axisubs-plan-payment-button">*/
/*                     {% if meta[id~'_axisubs_plans_type'] == 'free' %}*/
/*                     <button type="submit">Confirm Subscribe</button>*/
/*                     {% else %}*/
/*                         <button type="button" onclick="submitAxisubsPayment()">Pay now</button>*/
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

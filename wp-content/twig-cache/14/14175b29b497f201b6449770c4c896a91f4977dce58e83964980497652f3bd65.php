<?php

/* @Axisubs/Admin/customers/detail.twig */
class __TwigTemplate_9359fdbb11096e3f42d1c4b247cdb53e996b4a677eb0870b71c4854878958182 extends Twig_Template
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
        $context["customerMeta"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array");
        // line 2
        $context["customerPrefix"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "post_type", array(), "array")) . "_");
        // line 3
        $context["subscriptions"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "subscription", array(), "array");
        // line 4
        echo "<div class=\"axisubs wrap\">
   <div class=\"axisubs-customer_details\">
    <h1 class=\"wp-heading-inline\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
      <a class=\"page-title-action\" href=\"?page=customers-index&task=edit&id=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
        echo "\">Edit</a>
      <a class=\"btn page-title-action\" href=\"?page=customers-index\">Back</a>
      <div class=\" customer-details axisubs-list\">
        <div class=\"axisubs-subscription-summary customer-summary\">
          <table class=\"customers-table customer\">
            ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["subscriptions"]) ? $context["subscriptions"] : null)) > 0)) {
            // line 13
            echo "            <thead>
              <tr>
              <th scope=\"col\" id=\"name\"><span>Plan Name<span></th>
              <th scope=\"col\" id=\"price\"><span>Price</span></th>
              <th scope=\"col\" id=\"price\"><span>Status</span></th>
            </tr>
            </thead>
            ";
        }
        // line 21
        echo "            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) ? $context["subscriptions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 23
            echo "               ";
            $context["plan"] = $this->getAttribute($context["subscription"], "plan", array(), "array");
            // line 24
            echo "               ";
            $context["planMeta"] = $this->getAttribute($this->getAttribute($context["subscription"], "plan", array(), "array"), "meta", array(), "array");
            // line 25
            echo "               ";
            $context["subscriptionMeta"] = $this->getAttribute($context["subscription"], "meta", array(), "array");
            // line 26
            echo "               ";
            $context["planPrefix"] = ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_");
            // line 27
            echo "               ";
            $context["subscriptionPrefix"] = ($this->getAttribute($context["subscription"], "ID", array(), "array") . "_axisubs_subscribe_");
            // line 28
            echo "               <tr>
                  <td class=\"customer-info\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ((isset($context["planPrefix"]) ? $context["planPrefix"] : null) . "name"), array(), "array"), "html", null, true);
            echo "</td>
                  <td class=\"customer-info\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "total_price"), array(), "array"), "html", null, true);
            echo "</td>
                  <td class=\"customer-info\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscriptionMeta"]) ? $context["subscriptionMeta"] : null), ((isset($context["subscriptionPrefix"]) ? $context["subscriptionPrefix"] : null) . "status"), array(), "array"), "html", null, true);
            echo "</td>
               </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr class=\"no-subs\">
              <td>
                No Subscription created
              </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
          </table>
        </div>
        <div class=\"axisubs-customer-billinfo-con\">
           <h3>Customer details</h3>
           <div class=\"customer-info\">
             <div class=\"axisubs-fields\">
               <div class=\"customer-label\">
                 <strong>Customer Name :</strong>
               </div>
               <div class=\"customer-content\">
                 ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "first_name"), array(), "array"), "html", null, true);
        echo "
                 ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "last_name"), array(), "array"), "html", null, true);
        echo "
               </div>
             </div>
             <div class=\"axisubs-fields\">
               <div class=\"customer-label\">
                 <strong>Email :</strong>
               </div>
               <div class=\"customer-content\">
                 ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "email"), array(), "array"), "html", null, true);
        echo "
               </div>
             </div>
             <div class=\"axisubs-fields\">
               <div class=\"customer-label\">
                 <strong>Address :</strong>
               </div>
               <div class=\"customer-content\">
                 ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "address_line1"), array(), "array"), "html", null, true);
        echo ",
                 ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "address_line2"), array(), "array"), "html", null, true);
        echo ",
                 ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "city"), array(), "array"), "html", null, true);
        echo ",
                 ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array"), "html", null, true);
        echo ",
                 ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
        echo "
               </div>
             </div>
           </div>

           <div class=\"clear\"></div>
        </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/customers/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 72,  157 => 71,  153 => 70,  149 => 69,  145 => 68,  134 => 60,  123 => 52,  119 => 51,  106 => 40,  95 => 34,  87 => 31,  83 => 30,  79 => 29,  76 => 28,  73 => 27,  70 => 26,  67 => 25,  64 => 24,  61 => 23,  56 => 22,  53 => 21,  43 => 13,  41 => 12,  33 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set customerMeta = item['meta'] %}*/
/* {% set customerPrefix = item['ID']~'_'~item['post_type']~'_' %}*/
/* {% set subscriptions = item['subscription'] %}*/
/* <div class="axisubs wrap">*/
/*    <div class="axisubs-customer_details">*/
/*     <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*       <a class="page-title-action" href="?page=customers-index&task=edit&id={{ customerMeta[customerPrefix~'user_id'] }}">Edit</a>*/
/*       <a class="btn page-title-action" href="?page=customers-index">Back</a>*/
/*       <div class=" customer-details axisubs-list">*/
/*         <div class="axisubs-subscription-summary customer-summary">*/
/*           <table class="customers-table customer">*/
/*             {% if(subscriptions|length > 0) %}*/
/*             <thead>*/
/*               <tr>*/
/*               <th scope="col" id="name"><span>Plan Name<span></th>*/
/*               <th scope="col" id="price"><span>Price</span></th>*/
/*               <th scope="col" id="price"><span>Status</span></th>*/
/*             </tr>*/
/*             </thead>*/
/*             {% endif %}*/
/*             <tbody>*/
/*             {% for subscription in subscriptions %}*/
/*                {% set plan = subscription['plan'] %}*/
/*                {% set planMeta = subscription['plan']['meta'] %}*/
/*                {% set subscriptionMeta = subscription['meta'] %}*/
/*                {% set planPrefix = plan['ID']~'_axisubs_plans_' %}*/
/*                {% set subscriptionPrefix = subscription['ID']~'_axisubs_subscribe_' %}*/
/*                <tr>*/
/*                   <td class="customer-info">{{ planMeta[planPrefix~'name'] }}</td>*/
/*                   <td class="customer-info">{{ subscriptionMeta[subscriptionPrefix~'total_price'] }}</td>*/
/*                   <td class="customer-info">{{ subscriptionMeta[subscriptionPrefix~'status'] }}</td>*/
/*                </tr>*/
/*             {% else %}*/
/*             <tr class="no-subs">*/
/*               <td>*/
/*                 No Subscription created*/
/*               </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         <div class="axisubs-customer-billinfo-con">*/
/*            <h3>Customer details</h3>*/
/*            <div class="customer-info">*/
/*              <div class="axisubs-fields">*/
/*                <div class="customer-label">*/
/*                  <strong>Customer Name :</strong>*/
/*                </div>*/
/*                <div class="customer-content">*/
/*                  {{ customerMeta[customerPrefix~'first_name'] }}*/
/*                  {{ customerMeta[customerPrefix~'last_name'] }}*/
/*                </div>*/
/*              </div>*/
/*              <div class="axisubs-fields">*/
/*                <div class="customer-label">*/
/*                  <strong>Email :</strong>*/
/*                </div>*/
/*                <div class="customer-content">*/
/*                  {{ customerMeta[customerPrefix~'email'] }}*/
/*                </div>*/
/*              </div>*/
/*              <div class="axisubs-fields">*/
/*                <div class="customer-label">*/
/*                  <strong>Address :</strong>*/
/*                </div>*/
/*                <div class="customer-content">*/
/*                  {{ customerMeta[customerPrefix~'address_line1'] }},*/
/*                  {{ customerMeta[customerPrefix~'address_line2'] }},*/
/*                  {{ customerMeta[customerPrefix~'city'] }},*/
/*                  {{ data['province'] }},*/
/*                  {{ data['country'] }}*/
/*                </div>*/
/*              </div>*/
/*            </div>*/
/* */
/*            <div class="clear"></div>*/
/*         </div>*/
/*       </div>*/
/*    </div>*/
/* </div>*/
/* */

<?php

/* @Axisubs/Site/subscribed/list.twig */
class __TwigTemplate_8104a185b52275d84080d5518003d39e0894581b2f2bbc61567d2d64f1f56a78 extends Twig_Template
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
        $context["statusText"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusText", array(), "array");
        // line 2
        echo "<div class=\"axisubs wrap\">
    <div class=\"axisubs-subscribed-title\">
        <h3>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h3>
    </div>
    ";
        // line 6
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
    <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["subscribtions_url"]) ? $context["subscribtions_url"] : null), "html", null, true);
        echo "\" id=\"axisubs_list_form\">

      <table class=\"table subscription-list\" border=\"1\" border-color=\"#ddd\">
        <tbody>
        <tr>
          <th>
              Subscription Id
          </th>
          <th>
              plan name
          </th>
          <th>
              start date
          </th>
          <th>
              End date
          </th>
          <th>
              status
          </th>
          <th>
              Action
          </th>
        </tr>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscribers"]) ? $context["subscribers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscribe"]) {
            // line 32
            echo "            ";
            $context["plan"] = $this->getAttribute($context["subscribe"], "plan", array(), "array");
            // line 33
            echo "            ";
            $context["planMeta"] = $this->getAttribute($this->getAttribute($context["subscribe"], "plan", array(), "array"), "meta", array(), "array");
            // line 34
            echo "            ";
            $context["meta"] = $this->getAttribute($context["subscribe"], "meta", array(), "array");
            // line 35
            echo "        <tr>
          <td>
            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_start_on"), array(), "array"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_end_on"), array(), "array"), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 49
            echo $this->getAttribute((isset($context["statusText"]) ? $context["statusText"] : null), $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array"), array(), "array");
            echo "
          </td>
          <td>
            <a class=\"axisubs-btn\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "subscription_url", array(), "array"), "html", null, true);
            echo "\">View Details</a>
              ";
            // line 53
            echo $this->getAttribute($context["subscribe"], "additional_buttons", array(), "array");
            echo "
          </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <div class=\"row\">
                No subscription found.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscribe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["subscribers"]) ? $context["subscribers"] : null)) > 0)) {
            // line 62
            echo "            <div class=\"axisubs-pagination-cont\">
                ";
            // line 63
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
            echo "
                ";
            // line 64
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
            echo "
            </div>
        ";
        }
        // line 67
        echo "        </tbody>
      </table>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/subscribed/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  143 => 64,  139 => 63,  136 => 62,  133 => 61,  124 => 57,  115 => 53,  111 => 52,  105 => 49,  99 => 46,  93 => 43,  85 => 40,  79 => 37,  75 => 35,  72 => 34,  69 => 33,  66 => 32,  61 => 31,  34 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set statusText = data['statusText'] %}*/
/* <div class="axisubs wrap">*/
/*     <div class="axisubs-subscribed-title">*/
/*         <h3>{{ pagetitle }}</h3>*/
/*     </div>*/
/*     {{ message | raw }}*/
/*     <form method="post" action="{{ subscribtions_url }}" id="axisubs_list_form">*/
/* */
/*       <table class="table subscription-list" border="1" border-color="#ddd">*/
/*         <tbody>*/
/*         <tr>*/
/*           <th>*/
/*               Subscription Id*/
/*           </th>*/
/*           <th>*/
/*               plan name*/
/*           </th>*/
/*           <th>*/
/*               start date*/
/*           </th>*/
/*           <th>*/
/*               End date*/
/*           </th>*/
/*           <th>*/
/*               status*/
/*           </th>*/
/*           <th>*/
/*               Action*/
/*           </th>*/
/*         </tr>*/
/*         {% for subscribe in subscribers %}*/
/*             {% set plan = subscribe['plan'] %}*/
/*             {% set planMeta = subscribe['plan']['meta'] %}*/
/*             {% set meta = subscribe['meta'] %}*/
/*         <tr>*/
/*           <td>*/
/*             {{ subscribe['ID'] }}*/
/*           </td>*/
/*           <td>*/
/*             {{ planMeta[plan['ID']~'_axisubs_plans_name'] }} - {{ currencyData['code']~meta[subscribe['ID']~'_axisubs_subscribe_total_price'] }}*/
/*           </td>*/
/*           <td>*/
/*             {{ meta[subscribe['ID']~'_axisubs_subscribe_start_on'] }}*/
/*           </td>*/
/*           <td>*/
/*             {{ meta[subscribe['ID']~'_axisubs_subscribe_end_on'] }}*/
/*           </td>*/
/*           <td>*/
/*             {{ statusText[meta[subscribe['ID']~'_axisubs_subscribe_status']] | raw }}*/
/*           </td>*/
/*           <td>*/
/*             <a class="axisubs-btn" href="{{ subscribe['subscription_url'] }}">View Details</a>*/
/*               {{ subscribe['additional_buttons'] | raw }}*/
/*           </td>*/
/*         </tr>*/
/*         {% else %}*/
/*             <div class="row">*/
/*                 No subscription found.*/
/*             </div>*/
/*         {% endfor %}*/
/*         {% if subscribers|length > 0 %}*/
/*             <div class="axisubs-pagination-cont">*/
/*                 {{ paginationD['limitbox'] | raw }}*/
/*                 {{ paginationD['links'] | raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*         </tbody>*/
/*       </table>*/
/* */
/*     </form>*/
/* </div>*/
/* */

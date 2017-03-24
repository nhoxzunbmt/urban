<?php

/* @Axisubs/Admin/Tax/list.twig */
class __TwigTemplate_e137a466bb358f15a7c80c6ae46b2714d462a7e84147df22ad3e62d9d2d26bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/Tax/list.twig", 1);
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
        echo "<div class=\"axisubs wrap\">
    <h1 class=\"wp-heading-inline\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
    <a class=\"page-title-action\" href=\"?page=tax-index&task=edit\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Add New Tax", "axis-subscriptions")), "html", null, true);
        echo "</a>
    <div class=\"axisubs_title_description\">
        ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Configure your tax rules. It is simple. if you need any help, please contact us", "axis-subscriptions")), "html", null, true);
        echo "
    </div>
    <form method=\"post\" id=\"axisubs_list_form\" action=\"?page=tax-index\">
      <div class=\"axis-coupon\">
      <div class=\"axisubs-list\">
        <table class=\"wp-list-table widefat fixed striped coupons\" width=\"100%\">
            <thead>
                <tr>
                    <th scope=\"col\" id=\"name\" class=\"manage-column column-name column-primary\"><span>Tax Name</span></th>
                    <th scope=\"col\" id=\"code\" class=\"manage-column column-name column-primary\"><span>Country</span></th>
                    <th scope=\"col\" id=\"status\" class=\"manage-column column-name column-primary\"><span>Province</span></th>
                    <th scope=\"col\" id=\"value-type\" class=\"manage-column column-name column-primary\"><span>Tax Rate (%)</span></th>
                </tr>
            </thead>
            <tbody id=\"the-list\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 24
            echo "                <tr id=\"row";
            echo twig_escape_filter($this->env, ($context["key"] % 2), "html", null, true);
            echo "\" class=\"iedit author-self status-publish format-standard hentry\">
                    <td class=\"title column-title has-row-actions column-primary\" data-colname=\"Title\"><div class=\"coupon-name\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tax_rate_name", array(), "array"), "html", null, true);
            echo "</div>
                      <div class=\"row-actions\">
                          <span class=\"edit\">
                            <a href=\"?page=tax-index&task=edit&id=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "axisubs_taxrate_id", array(), "array"), "html", null, true);
            echo "\">Edit</a> | </span>
                          <a href=\"?page=tax-index&task=delete&id=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "axisubs_taxrate_id", array(), "array"), "html", null, true);
            echo "\">Delete</a> | </span>
                          <button type=\"button\" class=\"toggle-row\"><span class=\"screen-reader-text\">Show more details</span></button>
                      </div>
                    </td>
                    <td class=\"status column-id\" data-colname=\"Id\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array"), $this->getAttribute($context["item"], "tax_rate_country", array(), "array"), array(), "array"), "html", null, true);
            echo "
                    </td>
                    <td class=\"status column-value\" data-colname=\"Value\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "province_name", array(), "array"), "html", null, true);
            echo "</td>
                    <td class=\"status column-valid-from\" data-colname=\"Valid from\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tax_rate", array(), "array"), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <tr>
                    <td colspan=\"4\">No Tax available</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
      </div>
    </div>
        ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 5)) {
            // line 49
            echo "            ";
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
            echo "
            ";
            // line 50
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
            echo "
        ";
        }
        // line 52
        echo "     </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/Tax/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  128 => 50,  123 => 49,  121 => 48,  115 => 44,  106 => 40,  98 => 37,  94 => 36,  89 => 34,  81 => 29,  77 => 28,  71 => 25,  66 => 24,  61 => 23,  43 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap">*/
/*     <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*     <a class="page-title-action" href="?page=tax-index&task=edit">{{ esc_html_e('Add New Tax', 'axis-subscriptions') }}</a>*/
/*     <div class="axisubs_title_description">*/
/*         {{ esc_html_e('Configure your tax rules. It is simple. if you need any help, please contact us', 'axis-subscriptions') }}*/
/*     </div>*/
/*     <form method="post" id="axisubs_list_form" action="?page=tax-index">*/
/*       <div class="axis-coupon">*/
/*       <div class="axisubs-list">*/
/*         <table class="wp-list-table widefat fixed striped coupons" width="100%">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col" id="name" class="manage-column column-name column-primary"><span>Tax Name</span></th>*/
/*                     <th scope="col" id="code" class="manage-column column-name column-primary"><span>Country</span></th>*/
/*                     <th scope="col" id="status" class="manage-column column-name column-primary"><span>Province</span></th>*/
/*                     <th scope="col" id="value-type" class="manage-column column-name column-primary"><span>Tax Rate (%)</span></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody id="the-list">*/
/*             {% for key, item in items %}*/
/*                 <tr id="row{{ key%2 }}" class="iedit author-self status-publish format-standard hentry">*/
/*                     <td class="title column-title has-row-actions column-primary" data-colname="Title"><div class="coupon-name">{{ item['tax_rate_name'] }}</div>*/
/*                       <div class="row-actions">*/
/*                           <span class="edit">*/
/*                             <a href="?page=tax-index&task=edit&id={{ item['axisubs_taxrate_id'] }}">Edit</a> | </span>*/
/*                           <a href="?page=tax-index&task=delete&id={{ item['axisubs_taxrate_id'] }}">Delete</a> | </span>*/
/*                           <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="status column-id" data-colname="Id">*/
/*                         {{ data['countries'][item['tax_rate_country']] }}*/
/*                     </td>*/
/*                     <td class="status column-value" data-colname="Value">{{ item['province_name'] }}</td>*/
/*                     <td class="status column-valid-from" data-colname="Valid from">{{ item['tax_rate'] }}</td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan="4">No Tax available</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*       </div>*/
/*     </div>*/
/*         {% if items|length > 5 %}*/
/*             {{ paginationD['limitbox'] | raw }}*/
/*             {{ paginationD['links'] | raw }}*/
/*         {% endif %}*/
/*      </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

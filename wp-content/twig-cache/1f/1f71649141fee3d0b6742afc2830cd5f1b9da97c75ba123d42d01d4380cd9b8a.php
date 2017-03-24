<?php

/* @Axisubs/Admin/customers/list.twig */
class __TwigTemplate_af0c83b606b17692f1764177ad312b423aa2290555c403d18f252e4c165fec63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/customers/list.twig", 1);
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
        echo "    ";
        $context["choose_customer"] = 0;
        // line 5
        echo "    ";
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "flag", array(), "array") == "choose_customer")) {
            // line 6
            echo "        ";
            $context["choose_customer"] = 1;
            // line 7
            echo "    ";
        }
        // line 8
        echo "    <div class=\"axisubs wrap\">
        <h1 class=\"wp-heading-inline\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
        <a class=\"page-title-action\" href=\"?page=customers-index&task=edit\">Add New Member</a>
        <div class=\"axisubs_title_description\">
          ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Manage all your members / customers in this page. You can also view their subscriptions. If multiple subscriptions are found, it will be listed with a comma.", "axis-subscriptions")), "html", null, true);
        echo "
        </div>
        ";
        // line 14
        if ((isset($context["choose_customer"]) ? $context["choose_customer"] : null)) {
            // line 15
            echo "            <div class=\"info\"><p>Choose customer First</p></div>
        ";
        }
        // line 17
        echo "        <form method=\"post\" action=\"?page=customers-index";
        if ((isset($context["choose_customer"]) ? $context["choose_customer"] : null)) {
            echo "&flag=choose_customer";
        }
        echo "\" id=\"axisubs_list_form\">
            <div class=\"axisubs-customers\">
                <div class=\"axisubs-list\">
                    <table class=\"wp-list-table widefat fixed striped customers\" width=\"100%\">
                        <thead>
                          <tr>
                            <th scope=\"col\" width=\"20%\" id=\"name\" class=\"manage-column column-primary\"><span>Name</span></th>
                            <th scope=\"col\" id=\"subscriptions\" class=\"manage-column column-subscriptions\"><span>Subscriptions</span></th>
                            <th scope=\"col\" id=\"email\" class=\"manage-column column-email\">Email</th>
                            <th scope=\"col\" width=\"10%\" id=\"country\" class=\"manage-column column-country\">Country</th>
                            <th scope=\"col\" width=\"10%\" id=\"phone\" class=\"manage-column column-phone\">Phone</th>
                            <th scope=\"col\" id=\"Action\" class=\"manage-column column-action\">Action</th>
                            ";
        // line 29
        if ((isset($context["choose_customer"]) ? $context["choose_customer"] : null)) {
            // line 30
            echo "                              <th scope=\"col\" id=\"created-on\" class=\"manage-column column-created-on\"></th>
                            ";
        }
        // line 32
        echo "                          </tr>
                        </thead>
                        <tbody id=\"the-list\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                            ";
            $context["metaPrefix"] = ((($this->getAttribute($context["item"], "ID", array(), "array") . "_") . $this->getAttribute($context["item"], "post_type", array(), "array")) . "_");
            // line 37
            echo "                            <tr id=\"customer\" class=\"iedit author-self type-customer-list status-publish format-standard hentry\">
                              <td class=\"title column-title has-row-actions column-primary\" data-colname=\"Name\">
                                <strong><a class=\"row-title\" href=\"?page=customers-index&task=edit&id=";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "first_name"), array(), "array") . " ") . $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "last_name"), array(), "array")), "html", null, true);
            echo "</a></strong>
                                <span>";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("ID", "axis-subscriptions")), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ID", array(), "array"), "html", null, true);
            echo "</span>
                                <button type=\"button\" class=\"toggle-row\"><span class=\"screen-reader-text\">Show more details</span></button>
                              </td>
                              <td class=\"subscription column-subscription\" data-colname=\"Subscriptions\">
                                ";
            // line 44
            if (twig_test_empty($this->getAttribute($context["item"], "subscription", array(), "array"))) {
                // line 45
                echo "                                  ";
                $context["customerSubs"] = "No subscriptions";
                // line 46
                echo "                                    <span>";
                echo twig_escape_filter($this->env, (isset($context["customerSubs"]) ? $context["customerSubs"] : null), "html", null, true);
                echo "</span>
                                  ";
            } else {
                // line 48
                echo "                                  ";
                $context["plan"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "subscription", array(), "array"), "0", array(), "array"), "plan", array(), "array");
                // line 49
                echo "                                  ";
                $context["planMeta"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "subscription", array(), "array"), "0", array(), "array"), "plan", array(), "array"), "meta", array(), "array");
                // line 50
                echo "                                  ";
                $context["subcriptionMeta"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "subscription", array(), "array"), "0", array(), "array"), "meta", array(), "array");
                // line 51
                echo "                                  ";
                $context["customerSubs"] = $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array");
                // line 52
                echo "                                    <div class=\"load_more_subscriptions\" data-attr=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
                echo "\">
                                      <a>";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["customerSubs"]) ? $context["customerSubs"] : null), "html", null, true);
                echo "</a><span class=\"more_subscriptions\">...</span>
                                      <span class=\"more_subscriptions-data-left-arrow\"></span>
                                      <div class=\"more_subscriptions-data\">
                                      </div>
                                    </div>
                                  ";
            }
            // line 59
            echo "                                </td>
                                <td class=\"email column-email\" data-colname=\"Email\">
                                  <a href=\"mailto:";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "email"), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "email"), array(), "array"), "html", null, true);
            echo "</a>
                                </td>
                                <td class=\"country column-country\" data-colname=\"country\">
                                  ";
            // line 64
            $context["country"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array"), $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "country"), array(), "array"), array(), "array");
            // line 65
            echo "                                  <span>";
            echo twig_escape_filter($this->env, (isset($context["country"]) ? $context["country"] : null), "html", null, true);
            echo "</span>
                                </td>
                                <td class=\"phone column-phone\" data-colname=\"Phone\">
                                    <span>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "phone"), array(), "array"), "html", null, true);
            echo "</span>
                                </td>
                                <td class=\"created-on column-action\" data-colname=\"Action\">
                                    <!-- <span>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "post_date", array(), "array"), "html", null, true);
            echo "</span> -->
                                    <a class=\"button button-primary\" href=\"?page=customers-index&task=edit&id=";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
            echo "\">Edit</a>
                                    <a class=\"button\" href=\"?page=customers-index&task=delete&id=";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
            echo "\">Delete</a>
                                    <a class=\"button\" href=\"?page=customers-index&task=view&id=";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
            echo "\">View</a>
                                ";
            // line 75
            if ((isset($context["choose_customer"]) ? $context["choose_customer"] : null)) {
                // line 76
                echo "                                <td>
                                    <span class=\"col-data-content\">
                                        <a href=\"?page=subscriptions-index&task=edit&user_id=";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "meta", array(), "array"), ((isset($context["metaPrefix"]) ? $context["metaPrefix"] : null) . "user_id"), array(), "array"), "html", null, true);
                echo "\">Choose customer</a>
                                    </span>
                                </td>
                                ";
            }
            // line 82
            echo "                            </tr>
                            ";
            // line 84
            echo "                                ";
            // line 85
            echo "                                    ";
            // line 86
            echo "                                        ";
            // line 87
            echo "                                        ";
            // line 88
            echo "                                    ";
            // line 89
            echo "                                    ";
            // line 90
            echo "                                        ";
            // line 91
            echo "                                        ";
            // line 92
            echo "                                            ";
            // line 93
            echo "                                            ";
            // line 94
            echo "                                        ";
            // line 95
            echo "                                            ";
            // line 96
            echo "                                            ";
            // line 97
            echo "                                            ";
            // line 98
            echo "                                            ";
            // line 99
            echo "                                            ";
            // line 100
            echo "                                                ";
            // line 101
            echo "                                                ";
            // line 102
            echo "                                                ";
            // line 103
            echo "                                                ";
            // line 104
            echo "                                            ";
            // line 105
            echo "                                        ";
            // line 106
            echo "                                    ";
            // line 107
            echo "                                ";
            // line 108
            echo "                                ";
            // line 109
            echo "                                    ";
            // line 110
            echo "                                        ";
            // line 111
            echo "                                        ";
            // line 112
            echo "                                    ";
            // line 113
            echo "                                    ";
            // line 114
            echo "                                        ";
            // line 115
            echo "                                        ";
            // line 116
            echo "                                    ";
            // line 117
            echo "                                    ";
            // line 118
            echo "                                        ";
            // line 119
            echo "                                        ";
            // line 120
            echo "                                        ";
            // line 121
            echo "                                    ";
            // line 122
            echo "                                ";
            // line 123
            echo "                                ";
            // line 124
            echo "                                    ";
            // line 125
            echo "                                        ";
            // line 126
            echo "                                        ";
            // line 127
            echo "                                    ";
            // line 128
            echo "                                    ";
            // line 129
            echo "                                        ";
            // line 130
            echo "                                        ";
            // line 131
            echo "                                    ";
            // line 132
            echo "                                ";
            // line 133
            echo "                                ";
            // line 134
            echo "                                    ";
            // line 135
            echo "                                        ";
            // line 136
            echo "                                            ";
            // line 137
            echo "                                                ";
            // line 138
            echo "                                            ";
            // line 139
            echo "                                        ";
            // line 140
            echo "                                        ";
            // line 141
            echo "                                            ";
            // line 142
            echo "                                        ";
            // line 143
            echo "                                        ";
            // line 144
            echo "                                            ";
            // line 145
            echo "                                        ";
            // line 146
            echo "                                        ";
            // line 147
            echo "                                            ";
            // line 148
            echo "                                        ";
            // line 149
            echo "                                        ";
            // line 150
            echo "                                    ";
            // line 151
            echo "                                ";
            // line 152
            echo "                            ";
            // line 153
            echo "                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 154
            echo "                            <tr>
                                <td colspan=\"7\">
                                    <div class=\"row\">
                                        No customer available.
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                        </tbody>
                    </table>
                </div>
                ";
        // line 165
        echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
        echo "
                ";
        // line 166
        echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
        echo "
            </div>
            <input type=\"hidden\" id=\"site_url\" name=\"site_url\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\" />
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/customers/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 168,  380 => 166,  376 => 165,  371 => 162,  358 => 154,  353 => 153,  351 => 152,  349 => 151,  347 => 150,  345 => 149,  343 => 148,  341 => 147,  339 => 146,  337 => 145,  335 => 144,  333 => 143,  331 => 142,  329 => 141,  327 => 140,  325 => 139,  323 => 138,  321 => 137,  319 => 136,  317 => 135,  315 => 134,  313 => 133,  311 => 132,  309 => 131,  307 => 130,  305 => 129,  303 => 128,  301 => 127,  299 => 126,  297 => 125,  295 => 124,  293 => 123,  291 => 122,  289 => 121,  287 => 120,  285 => 119,  283 => 118,  281 => 117,  279 => 116,  277 => 115,  275 => 114,  273 => 113,  271 => 112,  269 => 111,  267 => 110,  265 => 109,  263 => 108,  261 => 107,  259 => 106,  257 => 105,  255 => 104,  253 => 103,  251 => 102,  249 => 101,  247 => 100,  245 => 99,  243 => 98,  241 => 97,  239 => 96,  237 => 95,  235 => 94,  233 => 93,  231 => 92,  229 => 91,  227 => 90,  225 => 89,  223 => 88,  221 => 87,  219 => 86,  217 => 85,  215 => 84,  212 => 82,  205 => 78,  201 => 76,  199 => 75,  195 => 74,  191 => 73,  187 => 72,  183 => 71,  177 => 68,  170 => 65,  168 => 64,  160 => 61,  156 => 59,  147 => 53,  142 => 52,  139 => 51,  136 => 50,  133 => 49,  130 => 48,  124 => 46,  121 => 45,  119 => 44,  110 => 40,  104 => 39,  100 => 37,  97 => 36,  92 => 35,  87 => 32,  83 => 30,  81 => 29,  63 => 17,  59 => 15,  57 => 14,  52 => 12,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/*     {% set choose_customer = 0 %}*/
/*     {% if data['flag'] == 'choose_customer'  %}*/
/*         {% set choose_customer = 1 %}*/
/*     {% endif %}*/
/*     <div class="axisubs wrap">*/
/*         <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*         <a class="page-title-action" href="?page=customers-index&task=edit">Add New Member</a>*/
/*         <div class="axisubs_title_description">*/
/*           {{ esc_html_e('Manage all your members / customers in this page. You can also view their subscriptions. If multiple subscriptions are found, it will be listed with a comma.', 'axis-subscriptions') }}*/
/*         </div>*/
/*         {% if choose_customer %}*/
/*             <div class="info"><p>Choose customer First</p></div>*/
/*         {% endif %}*/
/*         <form method="post" action="?page=customers-index{% if choose_customer %}&flag=choose_customer{% endif %}" id="axisubs_list_form">*/
/*             <div class="axisubs-customers">*/
/*                 <div class="axisubs-list">*/
/*                     <table class="wp-list-table widefat fixed striped customers" width="100%">*/
/*                         <thead>*/
/*                           <tr>*/
/*                             <th scope="col" width="20%" id="name" class="manage-column column-primary"><span>Name</span></th>*/
/*                             <th scope="col" id="subscriptions" class="manage-column column-subscriptions"><span>Subscriptions</span></th>*/
/*                             <th scope="col" id="email" class="manage-column column-email">Email</th>*/
/*                             <th scope="col" width="10%" id="country" class="manage-column column-country">Country</th>*/
/*                             <th scope="col" width="10%" id="phone" class="manage-column column-phone">Phone</th>*/
/*                             <th scope="col" id="Action" class="manage-column column-action">Action</th>*/
/*                             {% if choose_customer %}*/
/*                               <th scope="col" id="created-on" class="manage-column column-created-on"></th>*/
/*                             {% endif %}*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody id="the-list">*/
/*                         {% for item in items %}*/
/*                             {% set metaPrefix = item['ID']~'_'~item['post_type']~'_'  %}*/
/*                             <tr id="customer" class="iedit author-self type-customer-list status-publish format-standard hentry">*/
/*                               <td class="title column-title has-row-actions column-primary" data-colname="Name">*/
/*                                 <strong><a class="row-title" href="?page=customers-index&task=edit&id={{ item['meta'][metaPrefix~'user_id'] }}">{{ item['meta'][metaPrefix~'first_name']~' '~item['meta'][metaPrefix~'last_name'] }}</a></strong>*/
/*                                 <span>{{ esc_html_e('ID', 'axis-subscriptions') }} : {{ item['ID'] }}</span>*/
/*                                 <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>*/
/*                               </td>*/
/*                               <td class="subscription column-subscription" data-colname="Subscriptions">*/
/*                                 {% if item['subscription'] is empty %}*/
/*                                   {% set customerSubs = 'No subscriptions' %}*/
/*                                     <span>{{ customerSubs }}</span>*/
/*                                   {% else %}*/
/*                                   {% set plan = item['subscription']['0']['plan'] %}*/
/*                                   {% set planMeta = item['subscription']['0']['plan']['meta'] %}*/
/*                                   {% set subcriptionMeta = item['subscription']['0']['meta'] %}*/
/*                                   {% set customerSubs = planMeta[plan['ID']~'_axisubs_plans_name'] %}*/
/*                                     <div class="load_more_subscriptions" data-attr="{{ item['meta'][metaPrefix~'user_id'] }}">*/
/*                                       <a>{{ customerSubs }}</a><span class="more_subscriptions">...</span>*/
/*                                       <span class="more_subscriptions-data-left-arrow"></span>*/
/*                                       <div class="more_subscriptions-data">*/
/*                                       </div>*/
/*                                     </div>*/
/*                                   {% endif %}*/
/*                                 </td>*/
/*                                 <td class="email column-email" data-colname="Email">*/
/*                                   <a href="mailto:{{ item['meta'][metaPrefix~'email'] }}">{{ item['meta'][metaPrefix~'email'] }}</a>*/
/*                                 </td>*/
/*                                 <td class="country column-country" data-colname="country">*/
/*                                   {% set country = data['countries'][item['meta'][metaPrefix~'country']] %}*/
/*                                   <span>{{ country }}</span>*/
/*                                 </td>*/
/*                                 <td class="phone column-phone" data-colname="Phone">*/
/*                                     <span>{{ item['meta'][metaPrefix~'phone'] }}</span>*/
/*                                 </td>*/
/*                                 <td class="created-on column-action" data-colname="Action">*/
/*                                     <!-- <span>{{ item['post_date'] }}</span> -->*/
/*                                     <a class="button button-primary" href="?page=customers-index&task=edit&id={{ item['meta'][metaPrefix~'user_id'] }}">Edit</a>*/
/*                                     <a class="button" href="?page=customers-index&task=delete&id={{ item['meta'][metaPrefix~'user_id'] }}">Delete</a>*/
/*                                     <a class="button" href="?page=customers-index&task=view&id={{ item['meta'][metaPrefix~'user_id'] }}">View</a>*/
/*                                 {% if choose_customer %}*/
/*                                 <td>*/
/*                                     <span class="col-data-content">*/
/*                                         <a href="?page=subscriptions-index&task=edit&user_id={{ item['meta'][metaPrefix~'user_id'] }}">Choose customer</a>*/
/*                                     </span>*/
/*                                 </td>*/
/*                                 {% endif %}*/
/*                             </tr>*/
/*                             {#<div class="row">#}*/
/*                                 {#<div class="col-3">#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Customer Id: </span>#}*/
/*                                         {#<span class="col-data-content">{{ item['ID'] }}</span>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Subscriptions: </span>#}*/
/*                                         {#{% if item['subscription'] is empty %}#}*/
/*                                             {#{% set customerSubs = 'No subscriptions' %}#}*/
/*                                             {#<span class="col-data-content">{{ customerSubs }}</span>#}*/
/*                                         {#{% else %}#}*/
/*                                             {#{% set plan = item['subscription']['0']['plan'] %}#}*/
/*                                             {#{% set planMeta = item['subscription']['0']['plan']['meta'] %}#}*/
/*                                             {#{% set subcriptionMeta = item['subscription']['0']['meta'] %}#}*/
/*                                             {#{% set customerSubs = planMeta[plan['ID']~'_axisubs_plans_name'] %}#}*/
/*                                             {#<div class="load_more_subscriptions" data-attr="{{ item['meta'][metaPrefix~'user_id'] }}">#}*/
/*                                                 {#<a>{{ customerSubs }}</a><span class="more_subscriptions">...</span>#}*/
/*                                                 {#<span class="more_subscriptions-data-left-arrow"></span>#}*/
/*                                                 {#<div class="more_subscriptions-data">#}*/
/*                                                 {#</div>#}*/
/*                                             {#</div>#}*/
/*                                         {#{% endif %}#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-3">#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Name: </span>#}*/
/*                                         {#<span class="col-data-content">{{ item['meta'][metaPrefix~'first_name']~' '~item['meta'][metaPrefix~'last_name'] }}</span>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Email: </span>#}*/
/*                                         {#<span class="col-data-content">{{ item['meta'][metaPrefix~'email'] }}</span>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Country: </span>#}*/
/*                                         {#{% set country = data['countries'][item['meta'][metaPrefix~'country']] %}#}*/
/*                                         {#<span class="col-data-content">{{ country }}</span>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-3">#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Phone: </span>#}*/
/*                                         {#<span class="col-data-content">{{ item['meta'][metaPrefix~'phone'] }}</span>#}*/
/*                                     {#</div>#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#<span class="col-data-title">Created On: </span>#}*/
/*                                         {#<span class="col-data-content">{{ item['post_date'] }}</span>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                                 {#<div class="col-3">#}*/
/*                                     {#<div class="col-data">#}*/
/*                                         {#{% if choose_customer %}#}*/
/*                                             {#<span class="col-data-content">#}*/
/*                                                 {#<a class="page-title-action" href="?page=subscriptions-index&task=edit&user_id={{ item['meta'][metaPrefix~'user_id'] }}">Choose customer</a>#}*/
/*                                             {#</span>#}*/
/*                                         {#{% else %}#}*/
/*                                         {#<span class="col-data-content">#}*/
/*                                             {#<a class="page-title-action" href="?page=customers-index&task=view&id={{ item['meta'][metaPrefix~'user_id'] }}">View</a>#}*/
/*                                         {#</span>#}*/
/*                                         {#<span class="col-data-content">#}*/
/*                                             {#<a class="page-title-action" href="?page=customers-index&task=edit&id={{ item['meta'][metaPrefix~'user_id'] }}">Edit</a>#}*/
/*                                         {#</span>#}*/
/*                                         {#<span class="col-data-content">#}*/
/*                                             {#<a class="page-title-action" href="?page=customers-index&task=delete&id={{ item['meta'][metaPrefix~'user_id'] }}">Delete</a>#}*/
/*                                         {#</span>#}*/
/*                                         {#{% endif %}#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</div>#}*/
/*                         {% else %}*/
/*                             <tr>*/
/*                                 <td colspan="7">*/
/*                                     <div class="row">*/
/*                                         No customer available.*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 {{ paginationD['limitbox'] | raw }}*/
/*                 {{ paginationD['links'] | raw }}*/
/*             </div>*/
/*             <input type="hidden" id="site_url" name="site_url" value="{{ site_url }}" />*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */

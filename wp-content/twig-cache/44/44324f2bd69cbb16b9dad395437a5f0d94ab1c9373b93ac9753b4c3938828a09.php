<?php

/* @Axisubs/Admin/subscriptions/list.twig */
class __TwigTemplate_636bc4aaaab121bb1c1ad26fe5996ab4ef50e1b79e8acdcbb99ecf1569015687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/subscriptions/list.twig", 1);
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
        $context["statusText"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusText", array(), "array");
        // line 5
        echo "    <div class=\"axisubs wrap axis-head\">
        <h1 class=\"wp-heading-inline\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
        <a class=\"page-title-action\" href=\"?page=customers-index&flag=choose_customer\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Add New Subscription", "axis-subscriptions")), "html", null, true);
        echo "</a>
        <div class=\"axisubs_title_description\">
            ";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Manage all the subscriptions from the customers in this list", "axis-subscriptions")), "html", null, true);
        echo "
        </div>
        <form method=\"post\" action=\"?page=subscriptions-index\" id=\"axisubs_list_form\">
            <div class=\"subscriptions\">
                <div class=\"axisubs-list\">
                    <table class=\"wp-list-table widefat fixed striped subscriptions\" width=\"100%\">
                        <thead>
                        <tr>
                            <th scope=\"col\" id=\"name\" width=\"10%\" class=\"manage-column column-primary\"><span>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Name", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"date\" width=\"20%\" class=\"manage-column column-primary\"><span>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Date", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"email\" width=\"15%\" class=\"manage-column column-primary\"><span>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Email", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"plan\" width=\"15%\" class=\"manage-column column-primary\"><span>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Plan", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"cost\" width=\"10%\" class=\"manage-column column-primary\"><span>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Total Cost", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"status\" width=\"10%\" class=\"manage-column column-primary\"><span>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Status", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                            <th scope=\"col\" id=\"action\" width=\"20%\" class=\"manage-column column-primary\"><span>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Action", "axis-subscriptions")), "html", null, true);
        echo "</span></th>
                        </tr>
                        </thead>
                        <tbody id=\"the-list\">
                        ";
        // line 27
        $context["subscribers"] = (isset($context["items"]) ? $context["items"] : null);
        // line 28
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscribers"]) ? $context["subscribers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscribe"]) {
            // line 29
            echo "                            ";
            $context["plan"] = $this->getAttribute($context["subscribe"], "plan", array(), "array");
            // line 30
            echo "                            ";
            $context["planMeta"] = $this->getAttribute($this->getAttribute($context["subscribe"], "plan", array(), "array"), "meta", array(), "array");
            // line 31
            echo "                            ";
            $context["meta"] = $this->getAttribute($context["subscribe"], "meta", array(), "array");
            // line 32
            echo "                            <tr id=\"subsription\" class=\"iedit author-self type-plan-list status-publish format-standard hentry\">
                                <td class=\"id column-id has-row-actions column-primary plan-title\" data-colname=\"Name\">
                                    <strong><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ("?page=subscriptions-index&sid=" . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\" class=\"row-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array"), "html", null, true);
            echo "</a></strong>
                                    <div class=\"row\">
                                        <span>#";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
            echo "</span>
                                    </div>
                                    <button type=\"button\" class=\"toggle-row\"><span class=\"screen-reader-text\">";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Show more details", "axis-subscriptions")), "html", null, true);
            echo "</span></button>
                                </td>
                                <td class=\"name column-email has-row-actions\" data-colname=\"Name\">
                                    <div class=\"row\">
                                        <b>";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Start on", "axis-subscriptions")), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_start_on"), array(), "array"), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"row\">
                                        <b>";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("End by", "axis-subscriptions")), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_end_on"), array(), "array"), "html", null, true);
            echo "
                                    </div>
                                </td>
                                <td class=\"name column-email has-row-actions\" data-colname=\"Name\">
                                    <a href=\"mailto:";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array"), "html", null, true);
            echo "</a>
                                </td>
                                <td class=\"column-date has-row-actions\" data-colname=\"Plan\">
                                    <span>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "</span>
                                </td>
                                <td class=\"column-cost has-row-actions\" data-colname=\"Total Cost\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
            echo "
                                </td>
                                <td class=\"column-status has-row-actions\" data-colname=\"Status\">
                              <span class=\"axisubs-data-content\">
                                ";
            // line 59
            echo $this->getAttribute((isset($context["statusText"]) ? $context["statusText"] : null), $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array"), array(), "array");
            echo "
                              </span>
                                </td>
                                <td class=\"column-action has-row-actions\" data-colname=\"Actions\">
                                    <div class=\"dropbtn\">
                                        <div class=\"wrapper\">
                                            <div class=\"content\">
                                                <ul>
                                                    ";
            // line 67
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array") != "ACTIVE")) {
                // line 68
                echo "                                                        <a href=\"?page=subscriptions-index&task=activate&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Mark Active", "axis-subscriptions")), "html", null, true);
                echo "</li></a>
                                                    ";
            }
            // line 70
            echo "                                                    ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array") != "PENDING")) {
                // line 71
                echo "                                                        <a href=\"?page=subscriptions-index&task=pending&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Mark Pending", "axis-subscriptions")), "html", null, true);
                echo "</li></a>
                                                    ";
            }
            // line 73
            echo "                                                    ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array") != "CANCELED")) {
                // line 74
                echo "                                                        <a href=\"?page=subscriptions-index&task=cancel&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Mark Cancelled", "axis-subscriptions")), "html", null, true);
                echo "</li></a>
                                                    ";
            }
            // line 76
            echo "                                                </ul>
                                            </div>
                                            <div class=\"parent\">Action</div>
                                        </div>
                                    </div>
                                    <a class=\"button button-primary action\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, ((("?page=subscriptions-index&task=edit&user_id=" . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_user_id"), array(), "array")) . "&sid=") . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Edit", "axis-subscriptions")), "html", null, true);
            echo "</a>
                                    <a class=\"button action\" href=\"?page=subscriptions-index&task=delete&id=";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Delete", "axis-subscriptions")), "html", null, true);
            echo "</a>
                                    <a class=\"button action\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, ("?page=subscriptions-index&sid=" . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("View", "axis-subscriptions")), "html", null, true);
            echo "</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "                            <tr>
                                <td colspan=\"6\">
                                    No subscription
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscribe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        // line 97
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_items", array(), "array") > 5)) {
            // line 98
            echo "                ";
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "limitbox", array(), "array");
            echo "
                ";
            // line 99
            echo $this->getAttribute((isset($context["paginationD"]) ? $context["paginationD"] : null), "links", array(), "array");
            echo "
            ";
        }
        // line 101
        echo "        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/subscriptions/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 101,  263 => 99,  258 => 98,  256 => 97,  250 => 93,  239 => 87,  228 => 83,  222 => 82,  216 => 81,  209 => 76,  201 => 74,  198 => 73,  190 => 71,  187 => 70,  179 => 68,  177 => 67,  166 => 59,  159 => 55,  153 => 52,  145 => 49,  136 => 45,  128 => 42,  121 => 38,  116 => 36,  109 => 34,  105 => 32,  102 => 31,  99 => 30,  96 => 29,  90 => 28,  88 => 27,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  46 => 9,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/*     {% set statusText = data['statusText'] %}*/
/*     <div class="axisubs wrap axis-head">*/
/*         <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*         <a class="page-title-action" href="?page=customers-index&flag=choose_customer">{{ esc_html_e('Add New Subscription', 'axis-subscriptions') }}</a>*/
/*         <div class="axisubs_title_description">*/
/*             {{ esc_html_e('Manage all the subscriptions from the customers in this list', 'axis-subscriptions') }}*/
/*         </div>*/
/*         <form method="post" action="?page=subscriptions-index" id="axisubs_list_form">*/
/*             <div class="subscriptions">*/
/*                 <div class="axisubs-list">*/
/*                     <table class="wp-list-table widefat fixed striped subscriptions" width="100%">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th scope="col" id="name" width="10%" class="manage-column column-primary"><span>{{ esc_html_e('Name', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="date" width="20%" class="manage-column column-primary"><span>{{ esc_html_e('Date', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="email" width="15%" class="manage-column column-primary"><span>{{ esc_html_e('Email', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="plan" width="15%" class="manage-column column-primary"><span>{{ esc_html_e('Plan', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="cost" width="10%" class="manage-column column-primary"><span>{{ esc_html_e('Total Cost', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="status" width="10%" class="manage-column column-primary"><span>{{ esc_html_e('Status', 'axis-subscriptions') }}</span></th>*/
/*                             <th scope="col" id="action" width="20%" class="manage-column column-primary"><span>{{ esc_html_e('Action', 'axis-subscriptions') }}</span></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody id="the-list">*/
/*                         {% set subscribers = items %}*/
/*                         {% for subscribe in subscribers %}*/
/*                             {% set plan = subscribe['plan'] %}*/
/*                             {% set planMeta = subscribe['plan']['meta'] %}*/
/*                             {% set meta = subscribe['meta'] %}*/
/*                             <tr id="subsription" class="iedit author-self type-plan-list status-publish format-standard hentry">*/
/*                                 <td class="id column-id has-row-actions column-primary plan-title" data-colname="Name">*/
/*                                     <strong><a href="{{ '?page=subscriptions-index&sid='~subscribe['ID'] }}" class="row-title">{{ meta[subscribe['ID']~'_axisubs_subscribe_first_name'] }}</a></strong>*/
/*                                     <div class="row">*/
/*                                         <span>#{{ subscribe['ID'] }}</span>*/
/*                                     </div>*/
/*                                     <button type="button" class="toggle-row"><span class="screen-reader-text">{{ esc_html_e('Show more details', 'axis-subscriptions') }}</span></button>*/
/*                                 </td>*/
/*                                 <td class="name column-email has-row-actions" data-colname="Name">*/
/*                                     <div class="row">*/
/*                                         <b>{{ esc_html_e('Start on', 'axis-subscriptions') }}:</b> {{ meta[subscribe['ID']~'_axisubs_subscribe_start_on'] }}*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <b>{{ esc_html_e('End by', 'axis-subscriptions') }}:</b> {{ meta[subscribe['ID']~'_axisubs_subscribe_end_on'] }}*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td class="name column-email has-row-actions" data-colname="Name">*/
/*                                     <a href="mailto:{{ meta[subscribe['ID']~'_axisubs_subscribe_email'] }}">{{ meta[subscribe['ID']~'_axisubs_subscribe_email'] }}</a>*/
/*                                 </td>*/
/*                                 <td class="column-date has-row-actions" data-colname="Plan">*/
/*                                     <span>{{ planMeta[plan['ID']~'_axisubs_plans_name'] }}</span>*/
/*                                 </td>*/
/*                                 <td class="column-cost has-row-actions" data-colname="Total Cost">*/
/*                                     {{ currencyData['code']~meta[subscribe['ID']~'_axisubs_subscribe_total_price'] }}*/
/*                                 </td>*/
/*                                 <td class="column-status has-row-actions" data-colname="Status">*/
/*                               <span class="axisubs-data-content">*/
/*                                 {{ statusText[meta[subscribe['ID']~'_axisubs_subscribe_status']] | raw }}*/
/*                               </span>*/
/*                                 </td>*/
/*                                 <td class="column-action has-row-actions" data-colname="Actions">*/
/*                                     <div class="dropbtn">*/
/*                                         <div class="wrapper">*/
/*                                             <div class="content">*/
/*                                                 <ul>*/
/*                                                     {% if meta[subscribe['ID']~'_axisubs_subscribe_status'] != 'ACTIVE' %}*/
/*                                                         <a href="?page=subscriptions-index&task=activate&id={{ subscribe['ID'] }}"><li>{{ esc_html_e('Mark Active', 'axis-subscriptions') }}</li></a>*/
/*                                                     {% endif %}*/
/*                                                     {% if meta[subscribe['ID']~'_axisubs_subscribe_status'] != 'PENDING' %}*/
/*                                                         <a href="?page=subscriptions-index&task=pending&id={{ subscribe['ID'] }}"><li>{{ esc_html_e('Mark Pending', 'axis-subscriptions') }}</li></a>*/
/*                                                     {% endif %}*/
/*                                                     {% if meta[subscribe['ID']~'_axisubs_subscribe_status'] != 'CANCELED' %}*/
/*                                                         <a href="?page=subscriptions-index&task=cancel&id={{ subscribe['ID'] }}"><li>{{ esc_html_e('Mark Cancelled', 'axis-subscriptions') }}</li></a>*/
/*                                                     {% endif %}*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="parent">Action</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <a class="button button-primary action" href="{{ '?page=subscriptions-index&task=edit&user_id='~meta[subscribe['ID']~'_axisubs_subscribe_user_id']~'&sid='~subscribe['ID'] }}">{{ esc_html_e('Edit', 'axis-subscriptions') }}</a>*/
/*                                     <a class="button action" href="?page=subscriptions-index&task=delete&id={{ subscribe['ID'] }}">{{ esc_html_e('Delete', 'axis-subscriptions') }}</a>*/
/*                                     <a class="button action" href="{{ '?page=subscriptions-index&sid='~subscribe['ID'] }}">{{ esc_html_e('View', 'axis-subscriptions') }}</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% else %}*/
/*                             <tr>*/
/*                                 <td colspan="6">*/
/*                                     No subscription*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             {% if(data['total_items'] > 5) %}*/
/*                 {{ paginationD['limitbox'] | raw }}*/
/*                 {{ paginationD['links'] | raw }}*/
/*             {% endif %}*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */

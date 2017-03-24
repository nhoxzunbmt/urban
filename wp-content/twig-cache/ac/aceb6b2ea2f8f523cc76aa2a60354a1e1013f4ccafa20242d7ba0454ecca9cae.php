<?php

/* @Axisubs/Admin/dashboard/default.twig */
class __TwigTemplate_79a36601070d846605bf760ccd4020e49a6212e0c709a8f6bc8a098dd0a8a298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/dashboard/default.twig", 1);
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
        echo "<div class=\"axisubs axisubs-bs3 wrap\">
  <h3 class=\"wp-heading-inline\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "
  </h3>
    <div class=\"container-fluid\">
        <div class=\"row metabox-holder\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 dashboard-content\">
                <div class=\"dashboard-menu-cont\" style=\"display: none\">
                    <div class=\"dashboard-menu-item-c\">
                        <div class=\"dashboard-menu-each-i-l plan-color-dark\">
                            <div class=\"dashboard-menu-i\">
                                <div class=\"dashboard-menu-img plans\"></div>
                            </div>
                        </div>
                        <div class=\"dashboard-menu-each-i-r plan-color-light\">
                            <div class=\"dashboard-menu-each-i\">
                                <div class=\"dashboard-menu-count\">
                                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "planCount", array(), "array"), "html", null, true);
        echo "
                                </div>
                                <div class=\"dashboard-menu-name\">
                                    Plans
                                </div>
                            </div>
                        </div>
                        <a href=\"?page=plans-index\" class=\"dashboard-menu-a\"></a>
                        <div class=\"clear\"></div>
                    </div>

                    <div class=\"dashboard-menu-item-c\">
                        <div class=\"dashboard-menu-each-i-l subscriptions-color-dark\">
                            <div class=\"dashboard-menu-i\">
                                <div class=\"dashboard-menu-img subscriptions\"></div>
                            </div>
                        </div>
                        <div class=\"dashboard-menu-each-i-r subscriptions-color-light\">
                            <div class=\"dashboard-menu-each-i\">
                                <div class=\"dashboard-menu-count\">
                                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscriptionCount", array(), "array"), "html", null, true);
        echo "
                                </div>
                                <div class=\"dashboard-menu-name\">
                                    Subscriptions
                                </div>
                            </div>
                        </div>
                        <a href=\"?page=subscriptions-index\" class=\"dashboard-menu-a\"></a>
                        <div class=\"clear\"></div>
                    </div>

                    <div class=\"dashboard-menu-item-c\">
                        <div class=\"dashboard-menu-each-i-l customers-color-dark\">
                            <div class=\"dashboard-menu-i\">
                                <div class=\"dashboard-menu-img customers\"></div>
                            </div>
                        </div>
                        <div class=\"dashboard-menu-each-i-r customers-color-light\">
                            <div class=\"dashboard-menu-each-i\">
                                <div class=\"dashboard-menu-count\">
                                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "customerCount", array(), "array"), "html", null, true);
        echo "
                                </div>
                                <div class=\"dashboard-menu-name\">
                                    Customers
                                </div>
                            </div>
                        </div>
                        <a href=\"?page=customers-index\" class=\"dashboard-menu-a\"></a>
                        <div class=\"clear\"></div>
                    </div>

                    <div class=\"dashboard-menu-item-c\">
                        <div class=\"dashboard-menu-each-i-l config-color-dark\">
                            <div class=\"dashboard-menu-i\">
                                <div class=\"dashboard-menu-img config\"></div>
                            </div>
                        </div>
                        <div class=\"dashboard-menu-each-i-r config-color-light\">
                            <div class=\"dashboard-menu-each-i\">
                                <div class=\"dashboard-menu-count\">
                                </div>
                                <div class=\"dashboard-menu-name\">
                                    Configuration
                                </div>
                            </div>
                        </div>
                        <a href=\"?page=config-index\" class=\"dashboard-menu-a\"></a>
                        <div class=\"clear\"></div>
                    </div>

                    <div class=\"dashboard-menu-item-c\">
                        <div class=\"dashboard-menu-each-i-l app-color-dark\">
                            <div class=\"dashboard-menu-i\">
                                <div class=\"dashboard-menu-img app\"></div>
                            </div>
                        </div>
                        <div class=\"dashboard-menu-each-i-r app-color-light\">
                            <div class=\"dashboard-menu-each-i\">
                                <div class=\"dashboard-menu-count\">
                                    ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "appCount", array(), "array"), "html", null, true);
        echo "
                                </div>
                                <div class=\"dashboard-menu-name\">
                                    Apps
                                </div>
                            </div>
                        </div>
                        <a href=\"?page=app-index\" class=\"dashboard-menu-a\"></a>
                        <div class=\"clear\"></div>
                    </div>
                </div>

                ";
        // line 112
        echo "                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 dashboard-graph-con tab-container\">
                    ";
        // line 113
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "planCount", array(), "array") > 0)) {
            // line 114
            echo "                        ";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "graph_script", array(), "array");
            echo "
                        <div class=\"nav-tabs-container\">
                            <ul class=\"nav nav-tabs\">
                                <li role=\"tab0\" class=\"active tab_axisubs\"><a data-toggle=\"tab\" href=\"#tab0\" aria-expanded=\"true\">Weekly Sales Report</a></li>
                                <li role=\"tab1\" class=\"tab_axisubs\"><a data-toggle=\"tab\" href=\"#tab1\" aria-expanded=\"false\">Monthly Sales Report</a></li>
                            </ul>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade active in\" id=\"tab0\">
                                <div id=\"curve_chart_week\" style=\"width: 100%; height: 500px\"></div>
                            </div>
                            <div class=\"\" id=\"tab1\">
                                <div id=\"curve_chart_month\" style=\"width: 100%; height: 500px\"></div>
                            </div>
                        </div>
                    ";
        } else {
            // line 130
            echo "                        <div class=\"dashboard_graph_text\">
                            Start selling your memberships to get awesome chart display
                        </div>
                    ";
        }
        // line 134
        echo "                </div>
                ";
        // line 136
        echo "
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                    <h3 class=\"wp-heading-inline\">Last 7 Subscriptions
                    </h3>
                    <!-- Last 7 Subscriptions -->
                    <div class=\"axisubs-plans\">
                        <div class=\"axisubs-plan-list\">
                            <table class=\"wp-list-table widefat fixed striped plans\">
                                <thead>
                                <tr>
                                    <th scope=\"col\" id=\"name\" class=\"manage-column column-name column-primary\"><span>ID</span></th>
                                    <th scope=\"col\" id=\"status\" class=\"manage-column column-status\"><span>Plan Name</span></th>
                                    <th scope=\"col\" id=\"p-slug\" class=\"manage-column column-planslug\"><span>Total Cost</span></th>
                                    <th scope=\"col\" id=\"period\" class=\"manage-column column-period\"><span>Status</span></th>
                                </tr>
                                </thead>
                                <tbody id=\"the-list\">
                                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_five_subscription", array(), "array"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscribe"]) {
            // line 154
            echo "                                    ";
            $context["plan"] = $this->getAttribute($context["subscribe"], "plan", array(), "array");
            // line 155
            echo "                                    ";
            $context["planMeta"] = $this->getAttribute($this->getAttribute($context["subscribe"], "plan", array(), "array"), "meta", array(), "array");
            // line 156
            echo "                                    ";
            $context["meta"] = $this->getAttribute($context["subscribe"], "meta", array(), "array");
            // line 157
            echo "                                    <tr id=\"plan-1\" class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                        <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "</strong>
                                            <div class=\"plan_id\">
                                                <a class=\"\" href=\"";
            // line 160
            echo twig_escape_filter($this->env, ("?page=subscriptions-index&sid=" . $this->getAttribute($context["subscribe"], "ID", array(), "array")), "html", null, true);
            echo "\">
                                                    ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribe"], "ID", array(), "array"), "html", null, true);
            echo "
                                                </a>
                                                <button type=\"button\" class=\"toggle-row\"><span class=\"screen-reader-text\">";
            // line 163
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Show more details", "axis-subscriptions")), "html", null, true);
            echo "</span></button>
                                            </div>
                                        </td>
                                        <td class=\"status column-status\" data-colname=\"Status\">
                                            <span>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planMeta"]) ? $context["planMeta"] : null), ($this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "</span>
                                        </td>
                                        <td class=\"slug column-slug\" data-colname=\"Slug\">
                                            <span>";
            // line 170
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_total_price"), array(), "array")), "html", null, true);
            echo "</span>
                                        </td>
                                        <td class=\"period column-period\" data-colname=\"Period\">
                                            ";
            // line 173
            $context["statusText"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status_codes", array(), "array");
            // line 174
            echo "                                            <span class=\"axisubs-data-content\">";
            echo $this->getAttribute((isset($context["statusText"]) ? $context["statusText"] : null), $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ($this->getAttribute($context["subscribe"], "ID", array(), "array") . "_axisubs_subscribe_status"), array(), "array"), array(), "array");
            echo "</span>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 178
            echo "                                    <tr>
                                        <td colspan=\"6\">
                                            <div class=\"\">
                                                No subscriptions available.
                                            </div>
                                        <td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscribe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                    <h3 class=\"wp-heading-inline\">";
        // line 192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Statistics", "axis-subscriptions")), "html", null, true);
        echo "
                        <small>";
        // line 193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Only active subscriptions for which payments are made are taken into account for this statistics", "axis-subscriptions")), "html", null, true);
        echo "</small>
                    </h3>
                    <!-- Statistics -->
                    <div class=\"axisubs-statistics_con\">
                        <table class=\"wp-list-table1 widefat fixed striped plans\">
                            <tbody id=\"the-list\">
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>Last year</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_year_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 207
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_year_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>This year</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "this_year_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 218
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "this_year_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>Last month</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_month_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 229
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_month_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>This month</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "this_month_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 240
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "this_month_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>Last 7 Days</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_7days_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 251
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_7days_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>Yesterday</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "yesterday_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 262
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "yesterday_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>Today</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                        <span>";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "today_statistics", array(), "array"), "total", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 273
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "today_statistics", array(), "array"), "total_income", array(), "array")), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr class=\"iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized\">
                                    <td class=\"title column-title has-row-actions column-primary plan-title\" data-colname=\"Title\"><strong>";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_axisubs_plans_name"), array(), "array"), "html", null, true);
        echo "</strong>
                                        <span>Total active subscriptions</span>
                                    </td>
                                    <td class=\"status column-status\" data-colname=\"Status\">
                                    </td>
                                    <td class=\"slug column-slug\" data-colname=\"Slug\">
                                        <span>";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_active_subscriptions", array(), "array"), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type=\"hidden\" id=\"site_url\" value=\"";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\"/>
            </div>
        </div>
    </div>
</div>
    <script>jQuery(document).ready(function(){ postboxes.add_postbox_toggles(pagenow); });</script>
    <script type=\"application/javascript\">
        if (typeof(axisubs) == 'undefined') {
            var axisubs = {};
        }
        if (typeof(axisubs.jQuery) == 'undefined') {
            axisubs.jQuery = jQuery.noConflict();
        }
        ( function (\$){
            \$( document ).ready(function() {
                \$(\"#circle1\").circliful
                ({
                    foregroundColor: \"#3c763d\",
                    backgroundColor: \"#eee\",
                    fontColor: '#3c763d',
                    percent: ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["todayTargetPercent"]) ? $context["todayTargetPercent"] : null), "html", null, true);
        echo ",

                });
                \$(\"#circle2\").circliful
                ({
                    foregroundColor: \"#3498DB\",
                    backgroundColor: \"#eee\",
                    fontColor: '#aaa',
                    percent: ";
        // line 318
        echo twig_escape_filter($this->env, (isset($context["totalTargetPercent"]) ? $context["totalTargetPercent"] : null), "html", null, true);
        echo "
            });
                \$(\"#circle3\").circliful
                ({
                    foregroundColor: \"#a94442\",
                    backgroundColor: \"#eee\",
                    fontColor: '#a94442',
                    percent: ";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["pendingTargetPercent"]) ? $context["pendingTargetPercent"] : null), "html", null, true);
        echo "
            });
            });
        })(axisubs.jQuery);
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/dashboard/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 325,  498 => 318,  487 => 310,  464 => 290,  454 => 283,  445 => 277,  438 => 273,  432 => 270,  425 => 266,  418 => 262,  412 => 259,  405 => 255,  398 => 251,  392 => 248,  385 => 244,  378 => 240,  372 => 237,  365 => 233,  358 => 229,  352 => 226,  345 => 222,  338 => 218,  332 => 215,  325 => 211,  318 => 207,  312 => 204,  305 => 200,  295 => 193,  291 => 192,  283 => 186,  270 => 178,  260 => 174,  258 => 173,  252 => 170,  246 => 167,  239 => 163,  234 => 161,  230 => 160,  225 => 158,  222 => 157,  219 => 156,  216 => 155,  213 => 154,  208 => 153,  189 => 136,  186 => 134,  180 => 130,  160 => 114,  158 => 113,  155 => 112,  140 => 99,  98 => 60,  75 => 40,  52 => 20,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs axisubs-bs3 wrap">*/
/*   <h3 class="wp-heading-inline">{{ pagetitle }}*/
/*   </h3>*/
/*     <div class="container-fluid">*/
/*         <div class="row metabox-holder">*/
/*             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dashboard-content">*/
/*                 <div class="dashboard-menu-cont" style="display: none">*/
/*                     <div class="dashboard-menu-item-c">*/
/*                         <div class="dashboard-menu-each-i-l plan-color-dark">*/
/*                             <div class="dashboard-menu-i">*/
/*                                 <div class="dashboard-menu-img plans"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dashboard-menu-each-i-r plan-color-light">*/
/*                             <div class="dashboard-menu-each-i">*/
/*                                 <div class="dashboard-menu-count">*/
/*                                     {{ data['planCount'] }}*/
/*                                 </div>*/
/*                                 <div class="dashboard-menu-name">*/
/*                                     Plans*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <a href="?page=plans-index" class="dashboard-menu-a"></a>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <div class="dashboard-menu-item-c">*/
/*                         <div class="dashboard-menu-each-i-l subscriptions-color-dark">*/
/*                             <div class="dashboard-menu-i">*/
/*                                 <div class="dashboard-menu-img subscriptions"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dashboard-menu-each-i-r subscriptions-color-light">*/
/*                             <div class="dashboard-menu-each-i">*/
/*                                 <div class="dashboard-menu-count">*/
/*                                     {{ data['subscriptionCount'] }}*/
/*                                 </div>*/
/*                                 <div class="dashboard-menu-name">*/
/*                                     Subscriptions*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <a href="?page=subscriptions-index" class="dashboard-menu-a"></a>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <div class="dashboard-menu-item-c">*/
/*                         <div class="dashboard-menu-each-i-l customers-color-dark">*/
/*                             <div class="dashboard-menu-i">*/
/*                                 <div class="dashboard-menu-img customers"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dashboard-menu-each-i-r customers-color-light">*/
/*                             <div class="dashboard-menu-each-i">*/
/*                                 <div class="dashboard-menu-count">*/
/*                                     {{ data['customerCount'] }}*/
/*                                 </div>*/
/*                                 <div class="dashboard-menu-name">*/
/*                                     Customers*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <a href="?page=customers-index" class="dashboard-menu-a"></a>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <div class="dashboard-menu-item-c">*/
/*                         <div class="dashboard-menu-each-i-l config-color-dark">*/
/*                             <div class="dashboard-menu-i">*/
/*                                 <div class="dashboard-menu-img config"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dashboard-menu-each-i-r config-color-light">*/
/*                             <div class="dashboard-menu-each-i">*/
/*                                 <div class="dashboard-menu-count">*/
/*                                 </div>*/
/*                                 <div class="dashboard-menu-name">*/
/*                                     Configuration*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <a href="?page=config-index" class="dashboard-menu-a"></a>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                     <div class="dashboard-menu-item-c">*/
/*                         <div class="dashboard-menu-each-i-l app-color-dark">*/
/*                             <div class="dashboard-menu-i">*/
/*                                 <div class="dashboard-menu-img app"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="dashboard-menu-each-i-r app-color-light">*/
/*                             <div class="dashboard-menu-each-i">*/
/*                                 <div class="dashboard-menu-count">*/
/*                                     {{ data['appCount'] }}*/
/*                                 </div>*/
/*                                 <div class="dashboard-menu-name">*/
/*                                     Apps*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <a href="?page=app-index" class="dashboard-menu-a"></a>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {# Graph Starts here #}*/
/*                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dashboard-graph-con tab-container">*/
/*                     {% if data['planCount'] > 0 %}*/
/*                         {{ data['graph_script'] | raw }}*/
/*                         <div class="nav-tabs-container">*/
/*                             <ul class="nav nav-tabs">*/
/*                                 <li role="tab0" class="active tab_axisubs"><a data-toggle="tab" href="#tab0" aria-expanded="true">Weekly Sales Report</a></li>*/
/*                                 <li role="tab1" class="tab_axisubs"><a data-toggle="tab" href="#tab1" aria-expanded="false">Monthly Sales Report</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane fade active in" id="tab0">*/
/*                                 <div id="curve_chart_week" style="width: 100%; height: 500px"></div>*/
/*                             </div>*/
/*                             <div class="" id="tab1">*/
/*                                 <div id="curve_chart_month" style="width: 100%; height: 500px"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div class="dashboard_graph_text">*/
/*                             Start selling your memberships to get awesome chart display*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {# Graph Ends here #}*/
/* */
/*                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">*/
/*                     <h3 class="wp-heading-inline">Last 7 Subscriptions*/
/*                     </h3>*/
/*                     <!-- Last 7 Subscriptions -->*/
/*                     <div class="axisubs-plans">*/
/*                         <div class="axisubs-plan-list">*/
/*                             <table class="wp-list-table widefat fixed striped plans">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th scope="col" id="name" class="manage-column column-name column-primary"><span>ID</span></th>*/
/*                                     <th scope="col" id="status" class="manage-column column-status"><span>Plan Name</span></th>*/
/*                                     <th scope="col" id="p-slug" class="manage-column column-planslug"><span>Total Cost</span></th>*/
/*                                     <th scope="col" id="period" class="manage-column column-period"><span>Status</span></th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody id="the-list">*/
/*                                 {% for subscribe in data['last_five_subscription'] %}*/
/*                                     {% set plan = subscribe['plan'] %}*/
/*                                     {% set planMeta = subscribe['plan']['meta'] %}*/
/*                                     {% set meta = subscribe['meta'] %}*/
/*                                     <tr id="plan-1" class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                         <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                             <div class="plan_id">*/
/*                                                 <a class="" href="{{ '?page=subscriptions-index&sid='~subscribe['ID'] }}">*/
/*                                                     {{ subscribe['ID'] }}*/
/*                                                 </a>*/
/*                                                 <button type="button" class="toggle-row"><span class="screen-reader-text">{{ esc_html_e('Show more details', 'axis-subscriptions') }}</span></button>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                         <td class="status column-status" data-colname="Status">*/
/*                                             <span>{{ planMeta[plan['ID']~'_axisubs_plans_name'] }}</span>*/
/*                                         </td>*/
/*                                         <td class="slug column-slug" data-colname="Slug">*/
/*                                             <span>{{ currencyData['code']~meta[subscribe['ID']~'_axisubs_subscribe_total_price'] }}</span>*/
/*                                         </td>*/
/*                                         <td class="period column-period" data-colname="Period">*/
/*                                             {% set statusText = data['status_codes'] %}*/
/*                                             <span class="axisubs-data-content">{{ statusText[meta[subscribe['ID']~'_axisubs_subscribe_status']] | raw }}</span>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% else %}*/
/*                                     <tr>*/
/*                                         <td colspan="6">*/
/*                                             <div class="">*/
/*                                                 No subscriptions available.*/
/*                                             </div>*/
/*                                         <td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">*/
/*                     <h3 class="wp-heading-inline">{{ esc_html_e('Statistics', 'axis-subscriptions') }}*/
/*                         <small>{{ esc_html_e('Only active subscriptions for which payments are made are taken into account for this statistics', 'axis-subscriptions') }}</small>*/
/*                     </h3>*/
/*                     <!-- Statistics -->*/
/*                     <div class="axisubs-statistics_con">*/
/*                         <table class="wp-list-table1 widefat fixed striped plans">*/
/*                             <tbody id="the-list">*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>Last year</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['last_year_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['last_year_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>This year</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['this_year_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['this_year_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>Last month</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['last_month_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['last_month_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>This month</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['this_month_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['this_month_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>Last 7 Days</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['last_7days_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['last_7days_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>Yesterday</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['yesterday_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['yesterday_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>Today</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                         <span>{{ data['today_statistics']['total'] }}</span>*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ currencyData['code']~data['today_statistics']['total_income'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 <tr class="iedit author-self level-0 plan-1 type-plan-list status-publish format-standard hentry category-uncategorized">*/
/*                                     <td class="title column-title has-row-actions column-primary plan-title" data-colname="Title"><strong>{{ item['meta'][item['ID']~'_axisubs_plans_name'] }}</strong>*/
/*                                         <span>Total active subscriptions</span>*/
/*                                     </td>*/
/*                                     <td class="status column-status" data-colname="Status">*/
/*                                     </td>*/
/*                                     <td class="slug column-slug" data-colname="Slug">*/
/*                                         <span>{{ data['total_active_subscriptions'] }}</span>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                 <input type="hidden" id="site_url" value="{{ site_url }}"/>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     <script>jQuery(document).ready(function(){ postboxes.add_postbox_toggles(pagenow); });</script>*/
/*     <script type="application/javascript">*/
/*         if (typeof(axisubs) == 'undefined') {*/
/*             var axisubs = {};*/
/*         }*/
/*         if (typeof(axisubs.jQuery) == 'undefined') {*/
/*             axisubs.jQuery = jQuery.noConflict();*/
/*         }*/
/*         ( function ($){*/
/*             $( document ).ready(function() {*/
/*                 $("#circle1").circliful*/
/*                 ({*/
/*                     foregroundColor: "#3c763d",*/
/*                     backgroundColor: "#eee",*/
/*                     fontColor: '#3c763d',*/
/*                     percent: {{ todayTargetPercent }},*/
/* */
/*                 });*/
/*                 $("#circle2").circliful*/
/*                 ({*/
/*                     foregroundColor: "#3498DB",*/
/*                     backgroundColor: "#eee",*/
/*                     fontColor: '#aaa',*/
/*                     percent: {{ totalTargetPercent }}*/
/*             });*/
/*                 $("#circle3").circliful*/
/*                 ({*/
/*                     foregroundColor: "#a94442",*/
/*                     backgroundColor: "#eee",*/
/*                     fontColor: '#a94442',*/
/*                     percent: {{ pendingTargetPercent }}*/
/*             });*/
/*             });*/
/*         })(axisubs.jQuery);*/
/*     </script>*/
/* {% endblock %}*/
/* */

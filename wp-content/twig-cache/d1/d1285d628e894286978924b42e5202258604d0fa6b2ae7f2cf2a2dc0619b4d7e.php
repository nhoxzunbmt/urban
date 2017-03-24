<?php

/* @Axisubs/Admin/app/list.twig */
class __TwigTemplate_51e457366d3fd9b0ec7b0479ab266a08d3b5de85cfe82d333686a8239b643c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/app/list.twig", 1);
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
        echo "</h3>
      <div class=\"axisubs_title_description\">
            ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Apps available for the Axis Membership. View the apps to configure them", "axis-subscriptions")), "html", null, true);
        echo "
        </div>
      <form method=\"post\" action=\"\">
        <div class=\"axisubs-apps\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 12
            echo "            <div class=\"axisubs-app-container col-lg-3 col-md-4 col-sm-12 col-xs-12\">
              <div class=\"axisubs-app-container-i\">
                <div class=\"axisubs-app-image\">
                    <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "pluginImage", array(), "array"), "html", null, true);
            echo "\"/>
                </div>
                <div class=\"axisubs-app-name\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "Title", array(), "array"), "html", null, true);
            echo "
                </div>
                <div class=\"axisubs-app-description\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "Description", array(), "array"), "html", null, true);
            echo "
                    <div class=\"axisubs-app-url\">
                      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "PluginURI", array(), "array"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "PluginURI", array(), "array"), "html", null, true);
            echo "</a>
                    </div>
                </div>

                <div class=\"app-footer\">
                <div class=\"axisubs-app-author\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "AuthorName", array(), "array"), "html", null, true);
            echo "
                </div>
                <div class=\"axisubs-app-version\">
                    Version: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "Version", array(), "array"), "html", null, true);
            echo "
                </div>
                </div>
                <div class=\"axisubs-app-buttons\">
                  ";
            // line 36
            if (($this->getAttribute($context["app"], "active", array(), "array") == true)) {
                // line 37
                echo "                      ";
                $context["urlEnableDisable"] = ("?page=app-index&task=disable&p=" . $this->getAttribute($context["app"], "pluginPath", array(), "array"));
                // line 38
                echo "                      ";
                $context["enableDisableC"] = "Disable";
                // line 39
                echo "                      <a class=\"button app-button-view\" href=\"?page=app-index&task=view&p=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "pluginFolder", array(), "array"), "html", null, true);
                echo "\">View</a>
                  ";
            } else {
                // line 41
                echo "                      ";
                $context["urlEnableDisable"] = ("?page=app-index&task=enable&p=" . $this->getAttribute($context["app"], "pluginPath", array(), "array"));
                // line 42
                echo "                      ";
                $context["enableDisableC"] = "Enable";
                // line 43
                echo "                  ";
            }
            // line 44
            echo "                  <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["urlEnableDisable"]) ? $context["urlEnableDisable"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["enableDisableC"]) ? $context["enableDisableC"] : null), "html", null, true);
            echo "</a>
                </div>
              </div>
            </div>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <div class=\"row\">
                No App found.
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/app/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  133 => 49,  120 => 44,  117 => 43,  114 => 42,  111 => 41,  105 => 39,  102 => 38,  99 => 37,  97 => 36,  90 => 32,  84 => 29,  73 => 23,  68 => 21,  62 => 18,  56 => 15,  51 => 12,  46 => 11,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs axisubs-bs3 wrap">*/
/*       <h3 class="wp-heading-inline">{{ pagetitle }}</h3>*/
/*       <div class="axisubs_title_description">*/
/*             {{ esc_html_e('Apps available for the Axis Membership. View the apps to configure them', 'axis-subscriptions') }}*/
/*         </div>*/
/*       <form method="post" action="">*/
/*         <div class="axisubs-apps">*/
/*           {% for app in apps %}*/
/*             <div class="axisubs-app-container col-lg-3 col-md-4 col-sm-12 col-xs-12">*/
/*               <div class="axisubs-app-container-i">*/
/*                 <div class="axisubs-app-image">*/
/*                     <img src="{{ app['pluginImage'] }}"/>*/
/*                 </div>*/
/*                 <div class="axisubs-app-name">*/
/*                     {{ app['Title'] }}*/
/*                 </div>*/
/*                 <div class="axisubs-app-description">*/
/*                     {{ app['Description'] }}*/
/*                     <div class="axisubs-app-url">*/
/*                       <a href="{{ app['PluginURI'] }}"> {{ app['PluginURI'] }}</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="app-footer">*/
/*                 <div class="axisubs-app-author">*/
/*                     {{ app['AuthorName'] }}*/
/*                 </div>*/
/*                 <div class="axisubs-app-version">*/
/*                     Version: {{ app['Version'] }}*/
/*                 </div>*/
/*                 </div>*/
/*                 <div class="axisubs-app-buttons">*/
/*                   {% if app['active'] == true %}*/
/*                       {% set urlEnableDisable = '?page=app-index&task=disable&p='~app['pluginPath'] %}*/
/*                       {% set enableDisableC = 'Disable' %}*/
/*                       <a class="button app-button-view" href="?page=app-index&task=view&p={{ app['pluginFolder'] }}">View</a>*/
/*                   {% else %}*/
/*                       {% set urlEnableDisable = '?page=app-index&task=enable&p='~app['pluginPath'] %}*/
/*                       {% set enableDisableC = 'Enable' %}*/
/*                   {% endif %}*/
/*                   <a class="button" href="{{ urlEnableDisable }}">{{ enableDisableC }}</a>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% else %}*/
/*             <div class="row">*/
/*                 No App found.*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

<?php

/* @Axisubs/Admin/support/list.twig */
class __TwigTemplate_08ab6ec1f69eaa5fd633231cf196c6ba5ac1cd6a8fad6e3382af7b6a18d23f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/support/list.twig", 1);
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
        echo "<div class=\"axisubs wrap axisubs-bs3\">
    <h3 class=\"wp-heading-inline\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "
    </h3>
    <div class=\"axisubs_title_description\">
        ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Need help with the setting up of your membership site ?", "axis-subscriptions")), "html", null, true);
        echo "
    </div>
    <form method=\"post\" action=\"\">
        <div class=\"axisubs-support\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <h3 class=\"wp-heading-inline\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Documentation", "axis-subscriptions")), "html", null, true);
        echo "
                </h3>
                <div class=\"axisubs_support_desc\">
                  ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("It is a great place to start. We have explained almost all the concepts with a few examples. Start reading", "axis-subscriptions")), "html", null, true);
        echo "
                  <div>
                    Need help setting up your Membership site.<br />
                    <a class=\"button button-secondary\" href=\"https://www.flycart.org/docs/wordpress/axis-subscriptions\" target=\"_blank\">Documentation</a>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <h3 class=\"wp-heading-inline\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Video Tutorials", "axis-subscriptions")), "html", null, true);
        echo "
                </h3>
                <div class=\"axisubs_support_desc\">
                  ";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("We have made a few video tutorials for you to get started with selling membership plans in your website. Watch them", "axis-subscriptions")), "html", null, true);
        echo "
                  <div>
                    Need help setting up your Membership site.<br />
                    <a class=\"button button-secondary\" href=\"https://www.flycart.org/products/wordpress/axis-subscriptions#feature-button-2\" target=\"_blank\">Video tutorials</a>
                  </div>
              </div>
              </div>
              <div class=\"col-md-12 wrap\">
                <h4 class=\"wp-heading-inline\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Need our professional help ?", "axis-subscriptions")), "html", null, true);
        echo "
                </h4>
                <div class=\"axisubs_support_desc\">
                    ";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("We got you covered. Contact us to set up your membership website", "axis-subscriptions")), "html", null, true);
        echo "<br />
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Go PRO and get awesome features:", "axis-subscriptions")), "html", null, true);
        echo "
                    <ul>
                      <li>
                        <span class=\"dashicons dashicons-star-filled\"></span>
                        <div class=\"feature-content\">
                          <div class=\"feature-title\">";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Stripe Payments", "axis-subscriptions")), "html", null, true);
        echo "</div>
                          <p>
                            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Collect payments through a robust payments system with low transaction fee using Stripe. Complete Integration of Stripe recurring payments. Refer demo video.", "axis-subscriptions")), "html", null, true);
        echo "
                          </p>
                        </div>
                      </li>
                      <li>
                        <span class=\"dashicons dashicons-star-filled\"></span>
                        <div class=\"feature-content\">
                          <div class=\"feature-title\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Content Restrction", "axis-subscriptions")), "html", null, true);
        echo "</div>
                          <p>
                            ";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Restrict access to your pages, posts, categories. Restrict the content to only paid users based on level of subscrition purchased.", "axis-subscriptions")), "html", null, true);
        echo "
                          </p>
                        </div>
                      </li>
                      <li>
                        <span class=\"dashicons dashicons-star-filled\"></span>
                        <div class=\"feature-content\">
                          <div class=\"feature-title\">";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("All Apps added in future", "axis-subscriptions")), "html", null, true);
        echo "</div>
                          <p>
                            ";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Gain access to all the apps to be added in future.", "axis-subscriptions")), "html", null, true);
        echo "
                          </p>
                        </div>
                      </li>
                      <li>
                        <span class=\"dashicons dashicons-star-filled\"></span>
                        <div class=\"feature-content\">
                          <div class=\"feature-title\">";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Access to priority support", "axis-subscriptions")), "html", null, true);
        echo "</div>
                          <p>
                            ";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Struggling with something in your subscription selling ? Open a private ticket and our super support team just takes care within hours your problem is solved.", "axis-subscriptions")), "html", null, true);
        echo "
                          </p>
                        </div>
                      </li>
                    </ul>
                    ";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("I need the PRO version", "axis-subscriptions")), "html", null, true);
        echo "
                    <a class=\"button button-primary\" href=\"https://www.flycart.org/products/wordpress/axis-subscriptions\">Take me there</a>
                </div>
              </div>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/support/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  151 => 74,  146 => 72,  136 => 65,  131 => 63,  121 => 56,  116 => 54,  106 => 47,  101 => 45,  93 => 40,  89 => 39,  83 => 36,  72 => 28,  66 => 25,  55 => 17,  49 => 14,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap axisubs-bs3">*/
/*     <h3 class="wp-heading-inline">{{ pagetitle }}*/
/*     </h3>*/
/*     <div class="axisubs_title_description">*/
/*         {{ esc_html_e('Need help with the setting up of your membership site ?', 'axis-subscriptions') }}*/
/*     </div>*/
/*     <form method="post" action="">*/
/*         <div class="axisubs-support">*/
/*             <div class="row">*/
/*               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">*/
/*                 <h3 class="wp-heading-inline">{{ esc_html_e('Documentation', 'axis-subscriptions') }}*/
/*                 </h3>*/
/*                 <div class="axisubs_support_desc">*/
/*                   {{ esc_html_e('It is a great place to start. We have explained almost all the concepts with a few examples. Start reading', 'axis-subscriptions') }}*/
/*                   <div>*/
/*                     Need help setting up your Membership site.<br />*/
/*                     <a class="button button-secondary" href="https://www.flycart.org/docs/wordpress/axis-subscriptions" target="_blank">Documentation</a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">*/
/*                 <h3 class="wp-heading-inline">{{ esc_html_e('Video Tutorials', 'axis-subscriptions') }}*/
/*                 </h3>*/
/*                 <div class="axisubs_support_desc">*/
/*                   {{ esc_html_e('We have made a few video tutorials for you to get started with selling membership plans in your website. Watch them', 'axis-subscriptions') }}*/
/*                   <div>*/
/*                     Need help setting up your Membership site.<br />*/
/*                     <a class="button button-secondary" href="https://www.flycart.org/products/wordpress/axis-subscriptions#feature-button-2" target="_blank">Video tutorials</a>*/
/*                   </div>*/
/*               </div>*/
/*               </div>*/
/*               <div class="col-md-12 wrap">*/
/*                 <h4 class="wp-heading-inline">{{ esc_html_e('Need our professional help ?', 'axis-subscriptions') }}*/
/*                 </h4>*/
/*                 <div class="axisubs_support_desc">*/
/*                     {{ esc_html_e('We got you covered. Contact us to set up your membership website', 'axis-subscriptions') }}<br />*/
/*                     {{ esc_html_e('Go PRO and get awesome features:', 'axis-subscriptions') }}*/
/*                     <ul>*/
/*                       <li>*/
/*                         <span class="dashicons dashicons-star-filled"></span>*/
/*                         <div class="feature-content">*/
/*                           <div class="feature-title">{{ esc_html_e('Stripe Payments', 'axis-subscriptions') }}</div>*/
/*                           <p>*/
/*                             {{ esc_html_e('Collect payments through a robust payments system with low transaction fee using Stripe. Complete Integration of Stripe recurring payments. Refer demo video.', 'axis-subscriptions') }}*/
/*                           </p>*/
/*                         </div>*/
/*                       </li>*/
/*                       <li>*/
/*                         <span class="dashicons dashicons-star-filled"></span>*/
/*                         <div class="feature-content">*/
/*                           <div class="feature-title">{{ esc_html_e('Content Restrction', 'axis-subscriptions') }}</div>*/
/*                           <p>*/
/*                             {{ esc_html_e('Restrict access to your pages, posts, categories. Restrict the content to only paid users based on level of subscrition purchased.', 'axis-subscriptions') }}*/
/*                           </p>*/
/*                         </div>*/
/*                       </li>*/
/*                       <li>*/
/*                         <span class="dashicons dashicons-star-filled"></span>*/
/*                         <div class="feature-content">*/
/*                           <div class="feature-title">{{ esc_html_e('All Apps added in future', 'axis-subscriptions') }}</div>*/
/*                           <p>*/
/*                             {{ esc_html_e('Gain access to all the apps to be added in future.', 'axis-subscriptions') }}*/
/*                           </p>*/
/*                         </div>*/
/*                       </li>*/
/*                       <li>*/
/*                         <span class="dashicons dashicons-star-filled"></span>*/
/*                         <div class="feature-content">*/
/*                           <div class="feature-title">{{ esc_html_e('Access to priority support', 'axis-subscriptions') }}</div>*/
/*                           <p>*/
/*                             {{ esc_html_e('Struggling with something in your subscription selling ? Open a private ticket and our super support team just takes care within hours your problem is solved.', 'axis-subscriptions') }}*/
/*                           </p>*/
/*                         </div>*/
/*                       </li>*/
/*                     </ul>*/
/*                     {{ esc_html_e('I need the PRO version', 'axis-subscriptions') }}*/
/*                     <a class="button button-primary" href="https://www.flycart.org/products/wordpress/axis-subscriptions">Take me there</a>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

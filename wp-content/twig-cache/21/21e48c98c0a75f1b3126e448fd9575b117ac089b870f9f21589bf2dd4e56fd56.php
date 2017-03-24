<?php

/* @Axisubs/Admin/support/shortcodes.twig */
class __TwigTemplate_f4cfe7443b0f3d1b37ad11203b41102cd7eb411e0dc5c973013d82065d158824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/support/shortcodes.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('esc_html_e')->getCallable(), array("Here are a list of short codes with examples. These can be used in your pages, posts to display the plans and other elements of Axis Subscriptions", "axis-subscriptions")), "html", null, true);
        echo "
  </div>
  <form method=\"post\" action=\"\">
    <div class=\"axisubs-apps\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
          <div class=\"dashboard-instructions-container\">
            <div class=\"dashboard-instructions-i\">
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsAllPlans]</code> - Helps to load all Plans
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsSelectedPlans id=5]</code> - Helps to load a single Plan using plan id
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsSelectedPlans id=5,6]</code> - Helps to load a multiple Plans using plan id
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsSelectedPlans id=5,6 subscribe_btn_text=\"Sign Up\"]</code> - Helps to load a single/multiple Plans using plan id with custom button text
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsAllSubscriptions]</code> - Helps to load users(own) Subscriptions
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsMyProfile]</code> - Helps to load user profile
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsPlanPrice id=5]</code> - Helps to load Plan Price
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsPlanImage id=5]</code> - Helps to load Plan Image
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsSubscribeButton id=5]</code> - Helps to load Subscribe button
                </div>
                <div class=\"dashboard-instruc-code\">
                    <code>[AxisubsSubscribeButton id=5 subscribe_btn_text=\"Sign Up\"]</code> - Helps to load Subscribe button with custom button text
                </div>
              <div class=\"clear\"></div>
            </div>
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
        return "@Axisubs/Admin/support/shortcodes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap axisubs-bs3">*/
/*   <h3 class="wp-heading-inline">{{ pagetitle }}*/
/*   </h3>*/
/*   <div class="axisubs_title_description">*/
/*       {{ esc_html_e('Here are a list of short codes with examples. These can be used in your pages, posts to display the plans and other elements of Axis Subscriptions', 'axis-subscriptions') }}*/
/*   </div>*/
/*   <form method="post" action="">*/
/*     <div class="axisubs-apps">*/
/*       <div class="row">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">*/
/*           <div class="dashboard-instructions-container">*/
/*             <div class="dashboard-instructions-i">*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsAllPlans]</code> - Helps to load all Plans*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsSelectedPlans id=5]</code> - Helps to load a single Plan using plan id*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsSelectedPlans id=5,6]</code> - Helps to load a multiple Plans using plan id*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsSelectedPlans id=5,6 subscribe_btn_text="Sign Up"]</code> - Helps to load a single/multiple Plans using plan id with custom button text*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsAllSubscriptions]</code> - Helps to load users(own) Subscriptions*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsMyProfile]</code> - Helps to load user profile*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsPlanPrice id=5]</code> - Helps to load Plan Price*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsPlanImage id=5]</code> - Helps to load Plan Image*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsSubscribeButton id=5]</code> - Helps to load Subscribe button*/
/*                 </div>*/
/*                 <div class="dashboard-instruc-code">*/
/*                     <code>[AxisubsSubscribeButton id=5 subscribe_btn_text="Sign Up"]</code> - Helps to load Subscribe button with custom button text*/
/*                 </div>*/
/*               <div class="clear"></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* </div>*/
/* {% endblock %}*/
/* */

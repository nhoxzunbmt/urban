<?php

/* @AxisubsAppContentRestriction/Admin/Form/edit.twig */
class __TwigTemplate_9826125c7d3833afa531a1f80c99c3b82e3c21b00db355b668d6d129e39c4a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AxisubsAppContentRestriction/Admin/tabs/tab.twig", "@AxisubsAppContentRestriction/Admin/Form/edit.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AxisubsAppContentRestriction/Admin/tabs/tab.twig";
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
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "
    </h2>
    ";
        // line 7
        $context["metaPrefix"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "post_type", array(), "array")) . "_");
        // line 8
        echo "    <form method=\"post\" action=\"?page=app-index&task=appTask&p=axisubs-app-content-restriction\">
        <div class=\"axisubs-fields-con\">
            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_login_message\">Login Message</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    ";
        // line 15
        echo $this->getAttribute((isset($context["dataEditor"]) ? $context["dataEditor"] : null), "login_message", array(), "array");
        echo "
                    <span class=\"help-text\">Message to be displayed before login instead of content.</span>
                </div>
            </div>

            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <label for=\"axisub_payment_subscribe_message\">Subscribe Message</label>
                </div>
                <div class=\"axisubs-fields-content\">
                    ";
        // line 25
        echo $this->getAttribute((isset($context["dataEditor"]) ? $context["dataEditor"] : null), "subscribe_message", array(), "array");
        echo "
                    <span class=\"help-text\">Message to be displayed if the user don't have access to that content.<br><b>Note: </b>We can use the tag [PLANS] within the editor so it will replace the plan list to subscribe.</span>
                </div>
            </div>

            <div class=\"axisubs-fields\">
                <div class=\"axisubs-fields-label\">
                    <input type=\"hidden\" name=\"task\" value=\"appTask\"/>
                    <input type=\"hidden\" name=\"apptask\" value=\"save\"/>
                </div>
                <div class=\"axisubs-fields-content page-btn\">
                    <button type=\"submit\" class=\"btn page-title-action\">Save</button>
                    <a href=\"?page=app-index\" class=\"btn page-title-action\">Cancel</a>
                </div>
            </div>
        </div>
     </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@AxisubsAppContentRestriction/Admin/Form/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  50 => 15,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@AxisubsAppContentRestriction/Admin/tabs/tab.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="axisubs wrap">*/
/*     <h2>{{ pagetitle }}*/
/*     </h2>*/
/*     {% set metaPrefix = item['ID']~'_'~item['post_type']~'_' %}*/
/*     <form method="post" action="?page=app-index&task=appTask&p=axisubs-app-content-restriction">*/
/*         <div class="axisubs-fields-con">*/
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_login_message">Login Message</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     {{ dataEditor['login_message'] | raw }}*/
/*                     <span class="help-text">Message to be displayed before login instead of content.</span>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <label for="axisub_payment_subscribe_message">Subscribe Message</label>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content">*/
/*                     {{ dataEditor['subscribe_message'] | raw }}*/
/*                     <span class="help-text">Message to be displayed if the user don't have access to that content.<br><b>Note: </b>We can use the tag [PLANS] within the editor so it will replace the plan list to subscribe.</span>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="axisubs-fields">*/
/*                 <div class="axisubs-fields-label">*/
/*                     <input type="hidden" name="task" value="appTask"/>*/
/*                     <input type="hidden" name="apptask" value="save"/>*/
/*                 </div>*/
/*                 <div class="axisubs-fields-content page-btn">*/
/*                     <button type="submit" class="btn page-title-action">Save</button>*/
/*                     <a href="?page=app-index" class="btn page-title-action">Cancel</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*      </form>*/
/* </div>*/
/* {% endblock %}*/

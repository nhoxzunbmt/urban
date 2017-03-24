<?php

/* @Axisubs/Admin/customers/edit.twig */
class __TwigTemplate_4eb8720b5035ceea6f590b4602ba34a0e3905590f6380ec131b28b210058f1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Axisubs/Admin/tabs/tab.twig", "@Axisubs/Admin/customers/edit.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "   ";
        $context["customerMeta"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "meta", array(), "array");
        // line 4
        echo "   ";
        $context["customerPrefix"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "post_type", array(), "array")) . "_");
        // line 5
        echo "   <div class=\"axisubs wrap\">
      ";
        // line 6
        $context["user_id"] = $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "user_id"), array(), "array");
        // line 7
        echo "      <h1 class=\"wp-heading-inline\">";
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
        echo "</h1>
      <form id=\"my_profile\" method=\"post\" action=\"?page=customers-index&task=edit&id=";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
        echo "\">
         <div class=\"axisubs-fields-con\">
            ";
        // line 10
        if ((isset($context["newuser"]) ? $context["newuser"] : null)) {
            // line 11
            echo "               <div class=\"axisubs-fields\">
                  <div class=\"axisubs-fields-label\">
                     <label for=\"axisubs_wp_user_id\">Add</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                     <div>
                        <select name=\"add_type\" id=\"axisubs_add_type\" onchange=\"addCustomertype(this.value);\">
                           <option value=\"0\">New</option>
                           <option value=\"1\">Existing</option>
                        </select>
                     </div>
                     <span class=\"help-text\">Add new customer or from existing Wordpress user</span>
                  </div>
               </div>
               <div class=\"axisubs-fields axisubs_wordpress_user_selectbox axisubs_customer_add_existing\">
                  <div class=\"axisubs-fields-label\">
                     <label for=\"axisubs_wp_user_id\">Wordpress user</label>
                  </div>
                  <div class=\"axisubs-fields-content\">
                     <div>
                        ";
            // line 31
            echo (isset($context["newCustomersSelectBox"]) ? $context["newCustomersSelectBox"] : null);
            echo "
                     </div>
                     <span class=\"help-text\">Select a user.</span>
                  </div>
               </div>
            ";
        }
        // line 37
        echo "            <div class=\"axisubs-fields axisubs_customer_add_existing\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisub_plan_name\">User Name</label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <div id=\"axisubs-wordpress_username_text\">
                     ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "user_login", array(), "array"), "html", null, true);
        echo "
                  </div>
                  <span class=\"help-text\">Username cannot be changed.</span>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_first_name\">
                     First Name
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"required\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "first_name"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][first_name]\" id=\"axisubs_subscribe_first_name\"/>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_last_name\">
                     Last Name
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"required\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "last_name"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][last_name]\" id=\"axisubs_subscribe_last_name\"/>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_last_name\">
                     Email
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"required\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "email"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][email]\" id=\"axisubs_subscribe_email\"/>
               </div>
            </div>
            ";
        // line 78
        if ((isset($context["newuser"]) ? $context["newuser"] : null)) {
            // line 79
            echo "               <div class=\"axisubs_wordpress_user_passwords axisubs_customer_add_new\">
                  <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                        <label for=\"axisubs_user_password1\">
                           Password
                        </label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                        <input type=\"password\" class=\"required\" name=\"axisubs[user][password1]\" id=\"axisubs_user_password1\"/>
                     </div>
                  </div>
                  <div class=\"axisubs-fields\">
                     <div class=\"axisubs-fields-label\">
                        <label for=\"axisubs_user_password2\">
                           Repeat Password
                        </label>
                     </div>
                     <div class=\"axisubs-fields-content\">
                        <input type=\"password\" class=\"required\" name=\"axisubs[user][password2]\" id=\"axisubs_user_password2\"/>
                     </div>
                  </div>
               </div>
            ";
        }
        // line 102
        echo "            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_address_line1\">
                     Address Line 1
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"required\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "address_line1"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][address_line1]\" id=\"axisubs_subscribe_address_line1\"/>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_address_line2\">
                     Address Line 2
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" name=\"axisubs[subscribe][address_line2]\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "address_line2"), array(), "array"), "html", null, true);
        echo "\" id=\"axisubs_subscribe_address_line2\"/>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_city\">
                     City
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"required\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "city"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][city]\" id=\"axisubs_subscribe_city\"/>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_pincode\">
                     Zip code
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "pincode"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][pincode]\" id=\"axisubs_subscribe_pincode\"/>
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_country\">
                     Country
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  ";
        // line 149
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array");
        echo "
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_province\">
                     State
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  ";
        // line 159
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array");
        echo "
               </div>
            </div>
            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <label for=\"axisubs_subscribe_phone\">
                     Phone
                  </label>
               </div>
               <div class=\"axisubs-fields-content\">
                  <input type=\"text\" class=\"required\" value=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerMeta"]) ? $context["customerMeta"] : null), ((isset($context["customerPrefix"]) ? $context["customerPrefix"] : null) . "phone"), array(), "array"), "html", null, true);
        echo "\" name=\"axisubs[subscribe][phone]\" id=\"axisubs_subscribe_phone\"/>
               </div>
            </div>
            ";
        // line 172
        if ((isset($context["newuser"]) ? $context["newuser"] : null)) {
            // line 173
            echo "               <div class=\"axisubs-user-message-con\">
                  <div class=\"axisubs-user-message-text hide message\">
                  </div>
               </div>
            ";
        }
        // line 178
        echo "            <div class=\"axisubs-fields\">
               <div class=\"axisubs-fields-label\">
                  <input type=\"hidden\" name=\"edit_task\" value=\"save\"/>
                  <input type=\"hidden\" name=\"id\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
        echo "\"/>
                  <input type=\"hidden\" id=\"site_url\" name=\"site_url\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\"/>
               </div>
               <div class=\"axisubs-fields-content page-btn\">
                  ";
        // line 185
        if ((isset($context["newuser"]) ? $context["newuser"] : null)) {
            // line 186
            echo "                     <button class=\"button button-primary\" type=\"button\" onclick=\"addCustomer()\">Save</button>
                     <input type=\"hidden\" name=\"task\" value=\"addCustomer\"/>
                  <script>
                     addCustomertype('0');
                  </script>
                  ";
        } else {
            // line 192
            echo "                     <button class=\"button button-primary\" type=\"submit\">Update</button>
                  ";
        }
        // line 194
        echo "                  <a class=\"button\" href=\"?page=customers-index\">Cancel</a>
               </div>
            </div>
         </div>
      </form>
   </div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Admin/customers/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 194,  294 => 192,  286 => 186,  284 => 185,  278 => 182,  274 => 181,  269 => 178,  262 => 173,  260 => 172,  254 => 169,  241 => 159,  228 => 149,  215 => 139,  202 => 129,  189 => 119,  176 => 109,  167 => 102,  142 => 79,  140 => 78,  134 => 75,  121 => 65,  108 => 55,  93 => 43,  85 => 37,  76 => 31,  54 => 11,  52 => 10,  47 => 8,  42 => 7,  40 => 6,  37 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends '@Axisubs/Admin/tabs/tab.twig' %}*/
/* {% block body %}*/
/*    {% set customerMeta = item['meta'] %}*/
/*    {% set customerPrefix = item['ID']~'_'~item['post_type']~'_' %}*/
/*    <div class="axisubs wrap">*/
/*       {% set user_id = customerMeta[customerPrefix~'user_id'] %}*/
/*       <h1 class="wp-heading-inline">{{ pagetitle }}</h1>*/
/*       <form id="my_profile" method="post" action="?page=customers-index&task=edit&id={{ user_id }}">*/
/*          <div class="axisubs-fields-con">*/
/*             {% if(newuser) %}*/
/*                <div class="axisubs-fields">*/
/*                   <div class="axisubs-fields-label">*/
/*                      <label for="axisubs_wp_user_id">Add</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                      <div>*/
/*                         <select name="add_type" id="axisubs_add_type" onchange="addCustomertype(this.value);">*/
/*                            <option value="0">New</option>*/
/*                            <option value="1">Existing</option>*/
/*                         </select>*/
/*                      </div>*/
/*                      <span class="help-text">Add new customer or from existing Wordpress user</span>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="axisubs-fields axisubs_wordpress_user_selectbox axisubs_customer_add_existing">*/
/*                   <div class="axisubs-fields-label">*/
/*                      <label for="axisubs_wp_user_id">Wordpress user</label>*/
/*                   </div>*/
/*                   <div class="axisubs-fields-content">*/
/*                      <div>*/
/*                         {{ newCustomersSelectBox | raw }}*/
/*                      </div>*/
/*                      <span class="help-text">Select a user.</span>*/
/*                   </div>*/
/*                </div>*/
/*             {% endif %}*/
/*             <div class="axisubs-fields axisubs_customer_add_existing">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisub_plan_name">User Name</label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <div id="axisubs-wordpress_username_text">*/
/*                      {{ wp_userD['user_login'] }}*/
/*                   </div>*/
/*                   <span class="help-text">Username cannot be changed.</span>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_first_name">*/
/*                      First Name*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" class="required" value="{{ customerMeta[customerPrefix~'first_name'] }}" name="axisubs[subscribe][first_name]" id="axisubs_subscribe_first_name"/>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_last_name">*/
/*                      Last Name*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" class="required" value="{{ customerMeta[customerPrefix~'last_name'] }}" name="axisubs[subscribe][last_name]" id="axisubs_subscribe_last_name"/>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_last_name">*/
/*                      Email*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" class="required" value="{{ customerMeta[customerPrefix~'email'] }}" name="axisubs[subscribe][email]" id="axisubs_subscribe_email"/>*/
/*                </div>*/
/*             </div>*/
/*             {% if(newuser) %}*/
/*                <div class="axisubs_wordpress_user_passwords axisubs_customer_add_new">*/
/*                   <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                         <label for="axisubs_user_password1">*/
/*                            Password*/
/*                         </label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                         <input type="password" class="required" name="axisubs[user][password1]" id="axisubs_user_password1"/>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="axisubs-fields">*/
/*                      <div class="axisubs-fields-label">*/
/*                         <label for="axisubs_user_password2">*/
/*                            Repeat Password*/
/*                         </label>*/
/*                      </div>*/
/*                      <div class="axisubs-fields-content">*/
/*                         <input type="password" class="required" name="axisubs[user][password2]" id="axisubs_user_password2"/>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             {% endif %}*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_address_line1">*/
/*                      Address Line 1*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" class="required" value="{{ customerMeta[customerPrefix~'address_line1'] }}" name="axisubs[subscribe][address_line1]" id="axisubs_subscribe_address_line1"/>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_address_line2">*/
/*                      Address Line 2*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" name="axisubs[subscribe][address_line2]" value="{{ customerMeta[customerPrefix~'address_line2'] }}" id="axisubs_subscribe_address_line2"/>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_city">*/
/*                      City*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" class="required" value="{{ customerMeta[customerPrefix~'city'] }}" name="axisubs[subscribe][city]" id="axisubs_subscribe_city"/>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_pincode">*/
/*                      Zip code*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" value="{{ customerMeta[customerPrefix~'pincode'] }}" name="axisubs[subscribe][pincode]" id="axisubs_subscribe_pincode"/>*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_country">*/
/*                      Country*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   {{ data['country'] | raw }}*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_province">*/
/*                      State*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   {{ data['province'] | raw }}*/
/*                </div>*/
/*             </div>*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <label for="axisubs_subscribe_phone">*/
/*                      Phone*/
/*                   </label>*/
/*                </div>*/
/*                <div class="axisubs-fields-content">*/
/*                   <input type="text" class="required" value="{{ customerMeta[customerPrefix~'phone'] }}" name="axisubs[subscribe][phone]" id="axisubs_subscribe_phone"/>*/
/*                </div>*/
/*             </div>*/
/*             {% if(newuser) %}*/
/*                <div class="axisubs-user-message-con">*/
/*                   <div class="axisubs-user-message-text hide message">*/
/*                   </div>*/
/*                </div>*/
/*             {% endif %}*/
/*             <div class="axisubs-fields">*/
/*                <div class="axisubs-fields-label">*/
/*                   <input type="hidden" name="edit_task" value="save"/>*/
/*                   <input type="hidden" name="id" value="{{ user_id }}"/>*/
/*                   <input type="hidden" id="site_url" name="site_url" value="{{ site_url }}"/>*/
/*                </div>*/
/*                <div class="axisubs-fields-content page-btn">*/
/*                   {% if(newuser) %}*/
/*                      <button class="button button-primary" type="button" onclick="addCustomer()">Save</button>*/
/*                      <input type="hidden" name="task" value="addCustomer"/>*/
/*                   <script>*/
/*                      addCustomertype('0');*/
/*                   </script>*/
/*                   {% else %}*/
/*                      <button class="button button-primary" type="submit">Update</button>*/
/*                   {% endif %}*/
/*                   <a class="button" href="?page=customers-index">Cancel</a>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </form>*/
/*    </div>*/
/* {% endblock %}*/
/* */

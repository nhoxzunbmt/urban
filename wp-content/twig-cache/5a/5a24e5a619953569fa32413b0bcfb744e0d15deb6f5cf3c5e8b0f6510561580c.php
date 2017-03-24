<?php

/* @Axisubs/Site/myprofile/myprofile.twig */
class __TwigTemplate_d46ff937c7be513dce829c6db72869bce6a474579b63cffd16c003b920a3eca9 extends Twig_Template
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
        echo "<div class=\"axisubs wrap\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "ID", array(), "array")) {
            // line 3
            echo "        ";
            $context["user_id"] = $this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "ID", array(), "array");
            // line 4
            echo "        ";
            $context["userMeta"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array");
            // line 5
            echo "        ";
            $context["userPrefix"] = ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "post_type", array(), "array")) . "_");
            // line 6
            echo "        <form id=\"my_profile\" method=\"post\" action=\"\">
            <div class=\"axisubs-plan-billinfo-con\">
                <div class=\"axisubs-plan_details-title\">
                    <h3>Profile</h3>
                </div>
                <div class=\"axisubs-plan-billinfo-fields\">
                    <div class=\"axisubs-billinfo-f-c-full\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                User Name
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "user_name", array(), "array"), "html", null, true);
            echo " <span class=\"description\">Username cannot be changed.</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_first_name\">
                                    First Name
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 31
            if ($this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "first_name"), array(), "array")) {
                // line 32
                echo "                                    ";
                $context["firstname"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "first_name"), array(), "array");
                // line 33
                echo "                                ";
            } else {
                // line 34
                echo "                                    ";
                $context["firstname"] = $this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "first_name", array(), "array");
                // line 35
                echo "                                ";
            }
            // line 36
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][first_name]\" id=\"axisubs_subscribe_first_name\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_last_name\">
                                    Last Name
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 48
            if ($this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "last_name"), array(), "array")) {
                // line 49
                echo "                                    ";
                $context["last_name"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "last_name"), array(), "array");
                // line 50
                echo "                                ";
            } else {
                // line 51
                echo "                                    ";
                $context["last_name"] = $this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "last_name", array(), "array");
                // line 52
                echo "                                ";
            }
            // line 53
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["last_name"]) ? $context["last_name"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][last_name]\" id=\"axisubs_subscribe_last_name\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_email\">
                                    Email
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 65
            if ($this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "email"), array(), "array")) {
                // line 66
                echo "                                    ";
                $context["email"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "email"), array(), "array");
                // line 67
                echo "                                ";
            } else {
                // line 68
                echo "                                    ";
                $context["email"] = $this->getAttribute((isset($context["wp_userD"]) ? $context["wp_userD"] : null), "email", array(), "array");
                // line 69
                echo "                                ";
            }
            // line 70
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][email]\" id=\"axisubs_subscribe_email\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_address_line1\">
                                    Address Line 1
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 82
            $context["address_line1"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "address_line1"), array(), "array");
            // line 83
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["address_line1"]) ? $context["address_line1"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][address_line1]\" id=\"axisubs_subscribe_address_line1\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_address_line2\">
                                    Address Line 2
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 95
            $context["address_line2"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "address_line2"), array(), "array");
            // line 96
            echo "                                <input type=\"text\" name=\"axisubs[subscribe][address_line2]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["address_line2"]) ? $context["address_line2"] : null), "html", null, true);
            echo "\" id=\"axisubs_subscribe_address_line2\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_city\">
                                    City
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 108
            $context["city"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "city"), array(), "array");
            // line 109
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][city]\" id=\"axisubs_subscribe_city\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_pincode\">
                                    Zip code
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 121
            $context["pincode"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "pincode"), array(), "array");
            // line 122
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["pincode"]) ? $context["pincode"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][pincode]\" id=\"axisubs_subscribe_pincode\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_country\">
                                    Country
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 134
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array");
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_province\">
                                    State
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 146
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "province", array(), "array");
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_phone\">
                                    Phone
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 158
            $context["phone"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "phone"), array(), "array");
            // line 159
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][phone]\" id=\"axisubs_subscribe_phone\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_company\">
                                    Company
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 171
            $context["company"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "company"), array(), "array");
            // line 172
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][company]\" id=\"axisubs_subscribe_company\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_vat_number\">
                                    Tax number
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 184
            $context["vat_number"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "vat_number"), array(), "array");
            // line 185
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["vat_number"]) ? $context["vat_number"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][vat_number]\" id=\"axisubs_subscribe_vat_number\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"axisubs-profile-message-con\">
                    <div class=\"axisubs-profile-message-text hide message\">
                    </div>
                </div>
                <div class=\"axisubs-profile-payment-con\">
                    <input type=\"hidden\" name=\"task\" value=\"save\"/>
                    <input type=\"hidden\" id=\"site_url\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
            echo "\"/>
                    <div class=\"axisubs-profile-payment-i-block\">
                        <div class=\"axisubs-profile-update-button hide\">
                            <button class=\"axisubs-btn\" type=\"button\" onclick=\"updateProfile();\">Update</button>
                            <button class=\"axisubs-btn\" type=\"button\" onclick=\"cancelProfileUpdate();\">Cancel</button>
                        </div>
                        <div class=\"axisubs-profile-view-button\">
                            <button class=\"axisubs-btn\" type=\"button\" onclick=\"editProfile();\">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
            if (typeof(axisubs) == 'undefined') {
                var axisubs = {};
            }
            if (typeof(axisubs.jQuery) == 'undefined') {
                axisubs.jQuery = jQuery.noConflict();
            }
            (function (\$) {
                \$(document).ready(function () {
                    disableTags('#my_profile', '1');
                });
            })(axisubs.jQuery);
        </script>
    ";
        } else {
            // line 223
            echo "        Please login to view your profile
    ";
        }
        // line 225
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/myprofile/myprofile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 225,  338 => 223,  308 => 196,  293 => 185,  291 => 184,  275 => 172,  273 => 171,  257 => 159,  255 => 158,  240 => 146,  225 => 134,  209 => 122,  207 => 121,  191 => 109,  189 => 108,  173 => 96,  171 => 95,  155 => 83,  153 => 82,  137 => 70,  134 => 69,  131 => 68,  128 => 67,  125 => 66,  123 => 65,  107 => 53,  104 => 52,  101 => 51,  98 => 50,  95 => 49,  93 => 48,  77 => 36,  74 => 35,  71 => 34,  68 => 33,  65 => 32,  63 => 31,  47 => 18,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     {% if(wp_userD['ID']) %}*/
/*         {% set user_id = wp_userD['ID'] %}*/
/*         {% set userMeta = user['meta'] %}*/
/*         {% set userPrefix = user['ID']~'_'~user['post_type']~'_' %}*/
/*         <form id="my_profile" method="post" action="">*/
/*             <div class="axisubs-plan-billinfo-con">*/
/*                 <div class="axisubs-plan_details-title">*/
/*                     <h3>Profile</h3>*/
/*                 </div>*/
/*                 <div class="axisubs-plan-billinfo-fields">*/
/*                     <div class="axisubs-billinfo-f-c-full">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 User Name*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {{ wp_userD['user_name'] }} <span class="description">Username cannot be changed.</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_first_name">*/
/*                                     First Name*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(userMeta[userPrefix~'first_name']) %}*/
/*                                     {% set firstname = userMeta[userPrefix~'first_name'] %}*/
/*                                 {% else %}*/
/*                                     {% set firstname = wp_userD['first_name'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" class="required" value="{{ firstname }}" name="axisubs[subscribe][first_name]" id="axisubs_subscribe_first_name"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_last_name">*/
/*                                     Last Name*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(userMeta[userPrefix~'last_name']) %}*/
/*                                     {% set last_name = userMeta[userPrefix~'last_name'] %}*/
/*                                 {% else %}*/
/*                                     {% set last_name = wp_userD['last_name'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" class="required" value="{{ last_name }}" name="axisubs[subscribe][last_name]" id="axisubs_subscribe_last_name"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_email">*/
/*                                     Email*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(userMeta[userPrefix~'email']) %}*/
/*                                     {% set email = userMeta[userPrefix~'email'] %}*/
/*                                 {% else %}*/
/*                                     {% set email = wp_userD['email'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" class="required" value="{{ email }}" name="axisubs[subscribe][email]" id="axisubs_subscribe_email"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_address_line1">*/
/*                                     Address Line 1*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set address_line1 = userMeta[userPrefix~'address_line1'] %}*/
/*                                 <input type="text" class="required" value="{{ address_line1 }}" name="axisubs[subscribe][address_line1]" id="axisubs_subscribe_address_line1"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_address_line2">*/
/*                                     Address Line 2*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set address_line2 = userMeta[userPrefix~'address_line2'] %}*/
/*                                 <input type="text" name="axisubs[subscribe][address_line2]" value="{{ address_line2 }}" id="axisubs_subscribe_address_line2"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_city">*/
/*                                     City*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set city = userMeta[userPrefix~'city'] %}*/
/*                                 <input type="text" class="required" value="{{ city }}" name="axisubs[subscribe][city]" id="axisubs_subscribe_city"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_pincode">*/
/*                                     Zip code*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set pincode = userMeta[userPrefix~'pincode'] %}*/
/*                                 <input type="text" value="{{ pincode }}" name="axisubs[subscribe][pincode]" id="axisubs_subscribe_pincode"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_country">*/
/*                                     Country*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {{ data['country'] | raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_province">*/
/*                                     State*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {{ data['province'] | raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_phone">*/
/*                                     Phone*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set phone = userMeta[userPrefix~'phone'] %}*/
/*                                 <input type="text" class="required" value="{{ phone }}" name="axisubs[subscribe][phone]" id="axisubs_subscribe_phone"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_company">*/
/*                                     Company*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set company = userMeta[userPrefix~'company'] %}*/
/*                                 <input type="text" value="{{ company }}" name="axisubs[subscribe][company]" id="axisubs_subscribe_company"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_vat_number">*/
/*                                     Tax number*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% set vat_number = userMeta[userPrefix~'vat_number'] %}*/
/*                                 <input type="text" value="{{ vat_number }}" name="axisubs[subscribe][vat_number]" id="axisubs_subscribe_vat_number"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-profile-message-con">*/
/*                     <div class="axisubs-profile-message-text hide message">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-profile-payment-con">*/
/*                     <input type="hidden" name="task" value="save"/>*/
/*                     <input type="hidden" id="site_url" value="{{ site_url }}"/>*/
/*                     <div class="axisubs-profile-payment-i-block">*/
/*                         <div class="axisubs-profile-update-button hide">*/
/*                             <button class="axisubs-btn" type="button" onclick="updateProfile();">Update</button>*/
/*                             <button class="axisubs-btn" type="button" onclick="cancelProfileUpdate();">Cancel</button>*/
/*                         </div>*/
/*                         <div class="axisubs-profile-view-button">*/
/*                             <button class="axisubs-btn" type="button" onclick="editProfile();">Edit</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*         <script>*/
/*             if (typeof(axisubs) == 'undefined') {*/
/*                 var axisubs = {};*/
/*             }*/
/*             if (typeof(axisubs.jQuery) == 'undefined') {*/
/*                 axisubs.jQuery = jQuery.noConflict();*/
/*             }*/
/*             (function ($) {*/
/*                 $(document).ready(function () {*/
/*                     disableTags('#my_profile', '1');*/
/*                 });*/
/*             })(axisubs.jQuery);*/
/*         </script>*/
/*     {% else %}*/
/*         Please login to view your profile*/
/*     {% endif %}*/
/* </div>*/
/* */

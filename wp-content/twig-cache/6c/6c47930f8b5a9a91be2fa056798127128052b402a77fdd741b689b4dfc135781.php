<?php

/* @Axisubs/Site/subscribe/details.twig */
class __TwigTemplate_3e57e18481348106c733924f7218df8f761ef572e73c87ec9a80909c78b48192 extends Twig_Template
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
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array") > 0)) {
            // line 3
            echo "        ";
            $context["id"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ID", array(), "array");
            // line 4
            echo "        ";
            $context["userMeta"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array");
            // line 5
            echo "        ";
            $context["userPrefix"] = ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "post_type", array(), "array")) . "_");
            // line 6
            echo "    <div class=\"axisubs-plan_details\">
      <!-- <div class=\"plans-header\">
        <div class=\"axisubs-plan_details-title\">
            ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
            echo "
        </div>
        <div class=\"axisubs-plan-price-title\">
          Item Price
        </div>
      </div> -->

        <!-- <div class=\"axisubs-plan_details-summary\">
          <div class=\"content-plan\">
            <div class=\"plan_list\">
              <div class=\"list-image bs\">
                  ";
            // line 20
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array") == "")) {
                // line 21
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array"), "html", null, true);
                echo "/resources/assets/images/ico_noimage.png\">
                  ";
            } else {
                // line 23
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array"), "html", null, true);
                echo "\">
                  ";
            }
            // line 25
            echo "              </div>
              <div class=\"list-content\">
                  ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "
              </div>
              <div class=\"desc\">
                  ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_description"), array(), "array"), "html", null, true);
            echo "
              </div>
            </div>
            <div class=\"axisubs-plan-prices\">
              <div class=\"axisubs-plan-basic-fee\">
                  <div class=\"axisubs-plan-fee\">
                      Price :
                    <span class=\"axisubs-plan-basic-fee-amt\">
                        ";
            // line 38
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array", true, true) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array") > 0))) {
                // line 39
                echo "                            ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array")), "html", null, true);
                echo "
                        ";
            } else {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . "0"), "html", null, true);
                echo "
                        ";
            }
            // line 43
            echo "                    </span>
                  </div>
              </div>
              ";
            // line 46
            if ((($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array") > 0) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "allow_setupcost", array(), "array") == "1"))) {
                // line 47
                echo "              <div class=\"axisubs-plan-setup-fee\">
                  <div class=\"axisubs-plan-setup-fee-text\">
                      Setup Cost :
                      <span class=\"axisubs-plan-setup-fee-amt\">
                          ";
                // line 51
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array")), "html", null, true);
                echo "
                      </span>
                  </div>
              </div>
              ";
            }
            // line 56
            echo "            </div>
          </div>
        
            ";
            // line 59
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content_in_price_list", array(), "array");
            echo "
            <div class=\"axisubs-plan-total-fee\">
                <div class=\"axisubs-plan-total-fee-text\">
                    Total :
                    <span class=\"axisubs-plan-total-fee-amt\">
                        ";
            // line 64
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "total_price", array(), "array")), "html", null, true);
            echo "
                    </span>
                </div>
            </div>
            ";
            // line 68
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content_after_price", array(), "array");
            echo "
        </div> -->
    </div>
    ";
            // line 71
            if ((isset($context["user_id"]) ? $context["user_id"] : null)) {
                // line 72
                echo "    ";
            } else {
                // line 73
                echo "    <div class=\"login_registration_tab\">
        <ul class=\"login_registration_tab_ul\">
            <li class=\"active\" data=\"axisubs_login_form_con\">Existing user</li>
            <li data=\"axisubs_registration_form_con\">New user</li>
        </ul>
    </div>
    <div class=\"axisubs_login_form_con tab_con\">
        <form id=\"login_user\" action=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_url", array(), "array"), "html", null, true);
                echo "\" method=\"post\">
            <div class=\"axisubs-plan-billinfo-con\">
                <div class=\"axisubs-plan_details-title\">
                    <h3>Login</h3>
                </div>
                <div class=\"axisubs-plan-billinfo-fields\">
                    <div class=\"axisubs-billinfo-f-i\">
                        <div class=\"axisubs-billinfo-f-label\">
                            <label for=\"axisubs_subscribe_first_name\">
                                User Name
                            </label>
                        </div>
                        <div class=\"axisubs-billinfo-f-field\">
                            <input type=\"text\" class=\"required\" value=\"\" name=\"axisubs[user][user_name]\" id=\"axisubs_user_user_name\"/>
                        </div>
                    </div>
                    <div class=\"axisubs-billinfo-f-i\">
                        <div class=\"axisubs-billinfo-f-label\">
                            <label for=\"axisubs_subscribe_first_name\">
                                Password
                            </label>
                        </div>
                        <div class=\"axisubs-billinfo-f-field\">
                            <input type=\"password\" class=\"required\" value=\"\" name=\"axisubs[user][password]\" id=\"axisubs_user_password\"/>
                        </div>
                    </div>
                </div>
                <div class=\"axisubs-login-message-con\">
                    <div class=\"axisubs-login-message-text hide message\">
                    </div>
                </div>
            </div>
            <div class=\"axisubs-plan-payment-con\">
                <input type=\"hidden\" name=\"task\" value=\"loginUser\"/>
                <div class=\"axisubs-plan-payment-i-block\">
                    <div class=\"axisubs-plan-payment-button\">
                        <button type=\"button\" class=\"btn-vacancyes\" onclick=\"loginUser();\">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
            }
            // line 123
            echo "    <div class=\"axisubs_registration_form_con tab_con ";
            if (((isset($context["user_id"]) ? $context["user_id"] : null) == "")) {
                echo " hide ";
            }
            echo "\">
        <form id=\"register_user\" action=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_url", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
            <div class=\"axisubs-plan-billinfo-con\">
                <div class=\"axisubs-plan_details-title\">
                    <div class=\"sub-title\">
                        <h3>Billing Info</h3>
                    </div>
                </div>
                <div class=\"axisubs-plan-billinfo-fields\">
                    <!-- <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_first_name\">
                                    First Name
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 140
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array")) {
                // line 141
                echo "                                    ";
                $context["firstname"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array");
                // line 142
                echo "                                ";
            } else {
                // line 143
                echo "                                    ";
                $context["firstname"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "first_name"), array(), "array");
                // line 144
                echo "                                ";
            }
            // line 145
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
            // line 157
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array")) {
                // line 158
                echo "                                    ";
                $context["last_name"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array");
                // line 159
                echo "                                ";
            } else {
                // line 160
                echo "                                    ";
                $context["last_name"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "last_name"), array(), "array");
                // line 161
                echo "                                ";
            }
            // line 162
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["last_name"]) ? $context["last_name"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][last_name]\" id=\"axisubs_subscribe_last_name\"/>
                            </div>
                        </div>
                    </div> -->
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_email\">
                                    Email
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 174
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array")) {
                // line 175
                echo "                                    ";
                $context["email"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array");
                // line 176
                echo "                                ";
            } else {
                // line 177
                echo "                                    ";
                $context["email"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "email"), array(), "array");
                // line 178
                echo "                                ";
            }
            // line 179
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][email]\" id=\"axisubs_subscribe_email\"/>
                            </div>
                        </div>
                    </div>
                    ";
            // line 183
            if (((isset($context["user_id"]) ? $context["user_id"] : null) == "")) {
                // line 184
                echo "                        <div class=\"axisubs-billinfo-f-c\">
                            <div class=\"axisubs-billinfo-f-i\">
                                <div class=\"axisubs-billinfo-f-label\">
                                    <label for=\"axisubs_user_password1\">
                                        Password
                                    </label>
                                </div>
                                <div class=\"axisubs-billinfo-f-field\">
                                    <input type=\"password\" class=\"required\" name=\"axisubs[user][password1]\" id=\"axisubs_user_password1\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"axisubs-billinfo-f-c\">
                            <div class=\"axisubs-billinfo-f-i\">
                                <div class=\"axisubs-billinfo-f-label\">
                                    <label for=\"axisubs_user_password2\">
                                        Repeat Password
                                    </label>
                                </div>
                                <div class=\"axisubs-billinfo-f-field\">
                                    <input type=\"password\" class=\"required\" name=\"axisubs[user][password2]\" id=\"axisubs_user_password2\"/>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 209
            echo "                    <!-- <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_address_line1\">
                                    Address Line 1
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 217
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array")) {
                // line 218
                echo "                                    ";
                $context["address_line1"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array");
                // line 219
                echo "                                ";
            } else {
                // line 220
                echo "                                    ";
                $context["address_line1"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "address_line1"), array(), "array");
                // line 221
                echo "                                ";
            }
            // line 222
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
            // line 234
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array")) {
                // line 235
                echo "                                    ";
                $context["address_line2"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array");
                // line 236
                echo "                                ";
            } else {
                // line 237
                echo "                                    ";
                $context["address_line2"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "address_line2"), array(), "array");
                // line 238
                echo "                                ";
            }
            // line 239
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
            // line 251
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array")) {
                // line 252
                echo "                                    ";
                $context["city"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array");
                // line 253
                echo "                                ";
            } else {
                // line 254
                echo "                                    ";
                $context["city"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "city"), array(), "array");
                // line 255
                echo "                                ";
            }
            // line 256
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
            // line 268
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_pincode"), array(), "array")) {
                // line 269
                echo "                                    ";
                $context["pincode"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_pincode"), array(), "array");
                // line 270
                echo "                                ";
            } else {
                // line 271
                echo "                                    ";
                $context["pincode"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "pincode"), array(), "array");
                // line 272
                echo "                                ";
            }
            // line 273
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["pincode"]) ? $context["pincode"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][pincode]\" id=\"axisubs_subscribe_pincode\"/>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_country\">
                                    Country
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 285
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array");
            echo "
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_province\">
                                    State
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 297
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
            // line 309
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_phone"), array(), "array")) {
                // line 310
                echo "                                    ";
                $context["phone"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_phone"), array(), "array");
                // line 311
                echo "                                ";
            } else {
                // line 312
                echo "                                    ";
                $context["phone"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "phone"), array(), "array");
                // line 313
                echo "                                ";
            }
            // line 314
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
            // line 326
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array")) {
                // line 327
                echo "                                    ";
                $context["company"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array");
                // line 328
                echo "                                ";
            } else {
                // line 329
                echo "                                    ";
                $context["company"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "company"), array(), "array");
                // line 330
                echo "                                ";
            }
            // line 331
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][company]\" id=\"axisubs_subscribe_company\"/>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_vat_number\">
                                    Tax number
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 343
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array")) {
                // line 344
                echo "                                    ";
                $context["vat_number"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array");
                // line 345
                echo "                                ";
            } else {
                // line 346
                echo "                                    ";
                $context["vat_number"] = $this->getAttribute((isset($context["userMeta"]) ? $context["userMeta"] : null), ((isset($context["userPrefix"]) ? $context["userPrefix"] : null) . "vat_number"), array(), "array");
                // line 347
                echo "                                ";
            }
            // line 348
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["vat_number"]) ? $context["vat_number"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][vat_number]\" id=\"axisubs_subscribe_vat_number\"/>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class=\"axisubs-register-message-con\">
                <div class=\"axisubs-register-message-text hide message\">
                </div>
            </div>
            <div class=\"axisubs-plan-payment-con\">
                ";
            // line 359
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_type"), array(), "array") != "free")) {
                // line 360
                echo "                <div class=\"payment-method\">
                  <div class=\"axisubs-plan_details-title\">
                      <h3>Payment methods</h3>
                  </div>
                  ";
            }
            // line 365
            echo "                  <input type=\"hidden\" name=\"task\" value=\"save\"/>
                  <input type=\"hidden\" name=\"id\" value=\"";
            // line 366
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"/>
                    ";
            // line 367
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upgrade", array(), "array")) {
                // line 368
                echo "                        <input type=\"hidden\" name=\"upgrade\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upgrade", array(), "array"), "html", null, true);
                echo "\"/>
                    ";
            }
            // line 370
            echo "                  <div class=\"axisubs-plan-payment-i-block\">
                      ";
            // line 371
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_type"), array(), "array") != "free")) {
                // line 372
                echo "                          <div class=\"axisubs-plan-payment-block-con\">
                              ";
                // line 373
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "paymentMethods", array(), "array");
                echo "
                          </div>
                      ";
            }
            // line 376
            echo "                      <div class=\"axisubs-plan-payment-button\">
                          ";
            // line 377
            if ((isset($context["user_id"]) ? $context["user_id"] : null)) {
                // line 378
                echo "                              <button type=\"button\" class=\"btn-vacancyes\" onclick=\"submitSubscriptions();\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscribe_btn_text", array(), "array"), "html", null, true);
                echo "</button>
                          ";
            } else {
                // line 380
                echo "                              <button type=\"button\" class=\"btn-vacancyes\" onclick=\"registerUser();\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subscribe_btn_text", array(), "array"), "html", null, true);
                echo "</button>
                          ";
            }
            // line 382
            echo "                      </div>
                  </div>
                </div>
            </div>
        </form>
    </div>
    <input type=\"hidden\" id=\"site_url\" value=\"";
            // line 388
            echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // line 390
            echo "        <div class=\"axisubs-plan-notfound\">
            Invalid Data
        </div>
    ";
        }
        // line 394
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Axisubs/Site/subscribe/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 394,  662 => 390,  657 => 388,  649 => 382,  643 => 380,  637 => 378,  635 => 377,  632 => 376,  626 => 373,  623 => 372,  621 => 371,  618 => 370,  612 => 368,  610 => 367,  606 => 366,  603 => 365,  596 => 360,  594 => 359,  579 => 348,  576 => 347,  573 => 346,  570 => 345,  567 => 344,  565 => 343,  549 => 331,  546 => 330,  543 => 329,  540 => 328,  537 => 327,  535 => 326,  519 => 314,  516 => 313,  513 => 312,  510 => 311,  507 => 310,  505 => 309,  490 => 297,  475 => 285,  459 => 273,  456 => 272,  453 => 271,  450 => 270,  447 => 269,  445 => 268,  429 => 256,  426 => 255,  423 => 254,  420 => 253,  417 => 252,  415 => 251,  399 => 239,  396 => 238,  393 => 237,  390 => 236,  387 => 235,  385 => 234,  369 => 222,  366 => 221,  363 => 220,  360 => 219,  357 => 218,  355 => 217,  345 => 209,  318 => 184,  316 => 183,  308 => 179,  305 => 178,  302 => 177,  299 => 176,  296 => 175,  294 => 174,  278 => 162,  275 => 161,  272 => 160,  269 => 159,  266 => 158,  264 => 157,  248 => 145,  245 => 144,  242 => 143,  239 => 142,  236 => 141,  234 => 140,  215 => 124,  208 => 123,  162 => 80,  153 => 73,  150 => 72,  148 => 71,  142 => 68,  135 => 64,  127 => 59,  122 => 56,  114 => 51,  108 => 47,  106 => 46,  101 => 43,  95 => 41,  89 => 39,  87 => 38,  76 => 30,  70 => 27,  66 => 25,  60 => 23,  54 => 21,  52 => 20,  38 => 9,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     {% if item['ID'] > 0 %}*/
/*         {% set id = item['ID'] %}*/
/*         {% set userMeta = user['meta'] %}*/
/*         {% set userPrefix = user['ID']~'_'~user['post_type']~'_' %}*/
/*     <div class="axisubs-plan_details">*/
/*       <!-- <div class="plans-header">*/
/*         <div class="axisubs-plan_details-title">*/
/*             {{ pagetitle }}*/
/*         </div>*/
/*         <div class="axisubs-plan-price-title">*/
/*           Item Price*/
/*         </div>*/
/*       </div> -->*/
/* */
/*         <!-- <div class="axisubs-plan_details-summary">*/
/*           <div class="content-plan">*/
/*             <div class="plan_list">*/
/*               <div class="list-image bs">*/
/*                   {% if meta[id~'_axisubs_plans_image'] == '' %}*/
/*                       <img src="{{ data['plugin_url'] }}/resources/assets/images/ico_noimage.png">*/
/*                   {% else %}*/
/*                       <img src="{{ meta[id~'_axisubs_plans_image'] }}">*/
/*                   {% endif %}*/
/*               </div>*/
/*               <div class="list-content">*/
/*                   {{ meta[id~'_axisubs_plans_name'] }}*/
/*               </div>*/
/*               <div class="desc">*/
/*                   {{ meta[id~'_axisubs_plans_description'] }}*/
/*               </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-prices">*/
/*               <div class="axisubs-plan-basic-fee">*/
/*                   <div class="axisubs-plan-fee">*/
/*                       Price :*/
/*                     <span class="axisubs-plan-basic-fee-amt">*/
/*                         {% if meta[id~'_axisubs_plans_price'] is defined and meta[id~'_axisubs_plans_price'] > 0 %}*/
/*                             {{ currencyData['code']~meta[id~'_axisubs_plans_price'] }}*/
/*                         {% else %}*/
/*                             {{ currencyData['code']~'0' }}*/
/*                         {% endif %}*/
/*                     </span>*/
/*                   </div>*/
/*               </div>*/
/*               {% if ((meta[id~'_axisubs_plans_setup_cost']>0) and (meta['allow_setupcost'] == "1")) %}*/
/*               <div class="axisubs-plan-setup-fee">*/
/*                   <div class="axisubs-plan-setup-fee-text">*/
/*                       Setup Cost :*/
/*                       <span class="axisubs-plan-setup-fee-amt">*/
/*                           {{ currencyData['code']~meta[id~'_axisubs_plans_setup_cost'] }}*/
/*                       </span>*/
/*                   </div>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         */
/*             {{ data['content_in_price_list'] | raw }}*/
/*             <div class="axisubs-plan-total-fee">*/
/*                 <div class="axisubs-plan-total-fee-text">*/
/*                     Total :*/
/*                     <span class="axisubs-plan-total-fee-amt">*/
/*                         {{ currencyData['code']~meta['total_price'] }}*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*             {{ data['content_after_price'] | raw }}*/
/*         </div> -->*/
/*     </div>*/
/*     {% if(user_id) %}*/
/*     {% else %}*/
/*     <div class="login_registration_tab">*/
/*         <ul class="login_registration_tab_ul">*/
/*             <li class="active" data="axisubs_login_form_con">Existing user</li>*/
/*             <li data="axisubs_registration_form_con">New user</li>*/
/*         </ul>*/
/*     </div>*/
/*     <div class="axisubs_login_form_con tab_con">*/
/*         <form id="login_user" action="{{ data['plan_url'] }}" method="post">*/
/*             <div class="axisubs-plan-billinfo-con">*/
/*                 <div class="axisubs-plan_details-title">*/
/*                     <h3>Login</h3>*/
/*                 </div>*/
/*                 <div class="axisubs-plan-billinfo-fields">*/
/*                     <div class="axisubs-billinfo-f-i">*/
/*                         <div class="axisubs-billinfo-f-label">*/
/*                             <label for="axisubs_subscribe_first_name">*/
/*                                 User Name*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="axisubs-billinfo-f-field">*/
/*                             <input type="text" class="required" value="" name="axisubs[user][user_name]" id="axisubs_user_user_name"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="axisubs-billinfo-f-i">*/
/*                         <div class="axisubs-billinfo-f-label">*/
/*                             <label for="axisubs_subscribe_first_name">*/
/*                                 Password*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="axisubs-billinfo-f-field">*/
/*                             <input type="password" class="required" value="" name="axisubs[user][password]" id="axisubs_user_password"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-login-message-con">*/
/*                     <div class="axisubs-login-message-text hide message">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-payment-con">*/
/*                 <input type="hidden" name="task" value="loginUser"/>*/
/*                 <div class="axisubs-plan-payment-i-block">*/
/*                     <div class="axisubs-plan-payment-button">*/
/*                         <button type="button" class="btn-vacancyes" onclick="loginUser();">Login</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="axisubs_registration_form_con tab_con {% if(user_id == '') %} hide {% endif %}">*/
/*         <form id="register_user" action="{{ data['plan_url'] }}" method="post">*/
/*             <div class="axisubs-plan-billinfo-con">*/
/*                 <div class="axisubs-plan_details-title">*/
/*                     <div class="sub-title">*/
/*                         <h3>Billing Info</h3>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="axisubs-plan-billinfo-fields">*/
/*                     <!-- <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_first_name">*/
/*                                     First Name*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_first_name']) %}*/
/*                                     {% set firstname = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_first_name'] %}*/
/*                                 {% else %}*/
/*                                     {% set firstname = userMeta[userPrefix~'first_name'] %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_last_name']) %}*/
/*                                     {% set last_name = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_last_name'] %}*/
/*                                 {% else %}*/
/*                                     {% set last_name = userMeta[userPrefix~'last_name'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" class="required" value="{{ last_name }}" name="axisubs[subscribe][last_name]" id="axisubs_subscribe_last_name"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> -->*/
/*                     <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_email">*/
/*                                     Email*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_email']) %}*/
/*                                     {% set email = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_email'] %}*/
/*                                 {% else %}*/
/*                                     {% set email = userMeta[userPrefix~'email'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" class="required" value="{{ email }}" name="axisubs[subscribe][email]" id="axisubs_subscribe_email"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% if(user_id == '') %}*/
/*                         <div class="axisubs-billinfo-f-c">*/
/*                             <div class="axisubs-billinfo-f-i">*/
/*                                 <div class="axisubs-billinfo-f-label">*/
/*                                     <label for="axisubs_user_password1">*/
/*                                         Password*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-billinfo-f-field">*/
/*                                     <input type="password" class="required" name="axisubs[user][password1]" id="axisubs_user_password1"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="axisubs-billinfo-f-c">*/
/*                             <div class="axisubs-billinfo-f-i">*/
/*                                 <div class="axisubs-billinfo-f-label">*/
/*                                     <label for="axisubs_user_password2">*/
/*                                         Repeat Password*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="axisubs-billinfo-f-field">*/
/*                                     <input type="password" class="required" name="axisubs[user][password2]" id="axisubs_user_password2"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <!-- <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_address_line1">*/
/*                                     Address Line 1*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1']) %}*/
/*                                     {% set address_line1 = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1'] %}*/
/*                                 {% else %}*/
/*                                     {% set address_line1 = userMeta[userPrefix~'address_line1'] %}*/
/*                                 {% endif %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line2']) %}*/
/*                                     {% set address_line2 = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line2'] %}*/
/*                                 {% else %}*/
/*                                     {% set address_line2 = userMeta[userPrefix~'address_line2'] %}*/
/*                                 {% endif %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_city']) %}*/
/*                                     {% set city = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_city'] %}*/
/*                                 {% else %}*/
/*                                     {% set city = userMeta[userPrefix~'city'] %}*/
/*                                 {% endif %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_pincode']) %}*/
/*                                     {% set pincode = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_pincode'] %}*/
/*                                 {% else %}*/
/*                                     {% set pincode = userMeta[userPrefix~'pincode'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" value="{{ pincode }}" name="axisubs[subscribe][pincode]" id="axisubs_subscribe_pincode"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> -->*/
/*                     <!-- <div class="axisubs-billinfo-f-c">*/
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
/*                     </div> -->*/
/*                     <!-- <div class="axisubs-billinfo-f-c">*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_phone']) %}*/
/*                                     {% set phone = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_phone'] %}*/
/*                                 {% else %}*/
/*                                     {% set phone = userMeta[userPrefix~'phone'] %}*/
/*                                 {% endif %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_company']) %}*/
/*                                     {% set company = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_company'] %}*/
/*                                 {% else %}*/
/*                                     {% set company = userMeta[userPrefix~'company'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" value="{{ company }}" name="axisubs[subscribe][company]" id="axisubs_subscribe_company"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> -->*/
/*                     <!-- <div class="axisubs-billinfo-f-c">*/
/*                         <div class="axisubs-billinfo-f-i">*/
/*                             <div class="axisubs-billinfo-f-label">*/
/*                                 <label for="axisubs_subscribe_vat_number">*/
/*                                     Tax number*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="axisubs-billinfo-f-field">*/
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_vat_number']) %}*/
/*                                     {% set vat_number = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_vat_number'] %}*/
/*                                 {% else %}*/
/*                                     {% set vat_number = userMeta[userPrefix~'vat_number'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" value="{{ vat_number }}" name="axisubs[subscribe][vat_number]" id="axisubs_subscribe_vat_number"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div> -->*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-register-message-con">*/
/*                 <div class="axisubs-register-message-text hide message">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="axisubs-plan-payment-con">*/
/*                 {% if meta[id~'_axisubs_plans_type'] != 'free' %}*/
/*                 <div class="payment-method">*/
/*                   <div class="axisubs-plan_details-title">*/
/*                       <h3>Payment methods</h3>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   <input type="hidden" name="task" value="save"/>*/
/*                   <input type="hidden" name="id" value="{{ id }}"/>*/
/*                     {% if(data['upgrade']) %}*/
/*                         <input type="hidden" name="upgrade" value="{{ data['upgrade'] }}"/>*/
/*                     {% endif %}*/
/*                   <div class="axisubs-plan-payment-i-block">*/
/*                       {% if meta[id~'_axisubs_plans_type'] != 'free' %}*/
/*                           <div class="axisubs-plan-payment-block-con">*/
/*                               {{ data['paymentMethods'] | raw }}*/
/*                           </div>*/
/*                       {% endif %}*/
/*                       <div class="axisubs-plan-payment-button">*/
/*                           {% if(user_id) %}*/
/*                               <button type="button" class="btn-vacancyes" onclick="submitSubscriptions();">{{ data['subscribe_btn_text'] }}</button>*/
/*                           {% else %}*/
/*                               <button type="button" class="btn-vacancyes" onclick="registerUser();">{{ data['subscribe_btn_text'] }}</button>*/
/*                           {% endif %}*/
/*                       </div>*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*     <input type="hidden" id="site_url" value="{{ site_url }}"/>*/
/*     {% else %}*/
/*         <div class="axisubs-plan-notfound">*/
/*             Invalid Data*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* */

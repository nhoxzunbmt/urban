<?php

/* @Axisubs/Site/subscribe/details.twig */
class __TwigTemplate_6adb9b243beca5a14b4fe7ccc87dd7497b37d89198f70e05bc780bf6f1a9e1fb extends Twig_Template
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
            echo "
    <div class=\"axisubs-plan_details\">
      <div class=\"plans-header\">
        <div class=\"axisubs-plan_details-title\">
            ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : null), "html", null, true);
            echo "
        </div>
        <div class=\"axisubs-plan-price-title\">
          Item Price
        </div>
      </div>

        <div class=\"axisubs-plan_details-summary\">
          <div class=\"content-plan\">
            <div class=\"plan_list\">
              <div class=\"list-image\">
                  ";
            // line 19
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array") == "")) {
                // line 20
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plugin_url", array(), "array"), "html", null, true);
                echo "/resources/assets/images/ico_noimage.png\">
                  ";
            } else {
                // line 22
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_image"), array(), "array"), "html", null, true);
                echo "\">
                  ";
            }
            // line 24
            echo "              </div>
              <div class=\"list-content\">
                  ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_name"), array(), "array"), "html", null, true);
            echo "
              </div>
              <div class=\"desc\">
                  ";
            // line 29
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
            // line 37
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array", true, true) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array") > 0))) {
                // line 38
                echo "                            ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_price"), array(), "array")), "html", null, true);
                echo "
                        ";
            } else {
                // line 40
                echo "                            ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . "0"), "html", null, true);
                echo "
                        ";
            }
            // line 42
            echo "                    </span>
                  </div>
              </div>
              ";
            // line 45
            if ((($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array") > 0) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "allow_setupcost", array(), "array") == "1"))) {
                // line 46
                echo "              <div class=\"axisubs-plan-setup-fee\">
                  <div class=\"axisubs-plan-setup-fee-text\">
                      Setup Cost :
                      <span class=\"axisubs-plan-setup-fee-amt\">
                          ";
                // line 50
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_setup_cost"), array(), "array")), "html", null, true);
                echo "
                      </span>
                  </div>
              </div>
              ";
            }
            // line 55
            echo "            </div>
          </div>

            ";
            // line 58
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content_in_price_list", array(), "array");
            echo "
            <div class=\"axisubs-plan-total-fee\">
                <div class=\"axisubs-plan-total-fee-text\">
                    Total :
                    <span class=\"axisubs-plan-total-fee-amt\">
                        ";
            // line 63
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["currencyData"]) ? $context["currencyData"] : null), "code", array(), "array") . $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "total_price", array(), "array")), "html", null, true);
            echo "
                    </span>
                </div>
            </div>
            ";
            // line 67
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content_after_price", array(), "array");
            echo "
        </div>
    </div>
    ";
            // line 70
            if ((isset($context["user_id"]) ? $context["user_id"] : null)) {
                // line 71
                echo "    ";
            } else {
                // line 72
                echo "    <div class=\"login_registration_tab\">
        <ul class=\"login_registration_tab_ul\">
            <li class=\"active\" data=\"axisubs_login_form_con\">Existing user</li>
            <li data=\"axisubs_registration_form_con\">New user</li>
        </ul>
    </div>
    <div class=\"axisubs_login_form_con tab_con\">
        <form id=\"login_user\" action=\"";
                // line 79
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
                        <button type=\"button\" onclick=\"loginUser();\">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
            }
            // line 122
            echo "    <div class=\"axisubs_registration_form_con tab_con ";
            if (((isset($context["user_id"]) ? $context["user_id"] : null) == "")) {
                echo " hide ";
            }
            echo "\">
        <form id=\"register_user\" action=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "plan_url", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
            <div class=\"axisubs-plan-billinfo-con\">
                <div class=\"axisubs-plan_details-title\">
                    <h3>Billing Info</h3>
                </div>
                <div class=\"axisubs-plan-billinfo-fields\">
                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_first_name\">
                                    First Name
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 137
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array")) {
                // line 138
                echo "                                    ";
                $context["firstname"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_first_name"), array(), "array");
                // line 139
                echo "                                ";
            } else {
                // line 140
                echo "                                    ";
                $context["firstname"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_first_name"), array(), "array");
                // line 141
                echo "                                ";
            }
            // line 142
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
            // line 154
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array")) {
                // line 155
                echo "                                    ";
                $context["last_name"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_last_name"), array(), "array");
                // line 156
                echo "                                ";
            } else {
                // line 157
                echo "                                    ";
                $context["last_name"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_last_name"), array(), "array");
                // line 158
                echo "                                ";
            }
            // line 159
            echo "                                <input type=\"text\" class=\"required\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["last_name"]) ? $context["last_name"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][last_name]\" id=\"axisubs_subscribe_last_name\"/>
                            </div>
                        </div>
                    </div>
                    ";
            // line 163
            if (((isset($context["user_id"]) ? $context["user_id"] : null) == "")) {
                // line 164
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
            // line 189
            echo "                    <div class=\"axisubs-billinfo-f-c\">
                        <div class=\"axisubs-billinfo-f-i\">
                            <div class=\"axisubs-billinfo-f-label\">
                                <label for=\"axisubs_subscribe_email\">
                                    Email
                                </label>
                            </div>
                            <div class=\"axisubs-billinfo-f-field\">
                                ";
            // line 197
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array")) {
                // line 198
                echo "                                    ";
                $context["email"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_email"), array(), "array");
                // line 199
                echo "                                ";
            } else {
                // line 200
                echo "                                    ";
                $context["email"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_email"), array(), "array");
                // line 201
                echo "                                ";
            }
            // line 202
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
            // line 214
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array")) {
                // line 215
                echo "                                    ";
                $context["address_line1"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line1"), array(), "array");
                // line 216
                echo "                                ";
            } else {
                // line 217
                echo "                                    ";
                $context["address_line1"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_address_line1"), array(), "array");
                // line 218
                echo "                                ";
            }
            // line 219
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
            // line 231
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array")) {
                // line 232
                echo "                                    ";
                $context["address_line2"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_address_line2"), array(), "array");
                // line 233
                echo "                                ";
            } else {
                // line 234
                echo "                                    ";
                $context["address_line2"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_address_line2"), array(), "array");
                // line 235
                echo "                                ";
            }
            // line 236
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
            // line 248
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array")) {
                // line 249
                echo "                                    ";
                $context["city"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_city"), array(), "array");
                // line 250
                echo "                                ";
            } else {
                // line 251
                echo "                                    ";
                $context["city"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_city"), array(), "array");
                // line 252
                echo "                                ";
            }
            // line 253
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
            // line 265
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_pincode"), array(), "array")) {
                // line 266
                echo "                                    ";
                $context["pincode"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_pincode"), array(), "array");
                // line 267
                echo "                                ";
            } else {
                // line 268
                echo "                                    ";
                $context["pincode"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_pincode"), array(), "array");
                // line 269
                echo "                                ";
            }
            // line 270
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
            // line 282
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
            // line 294
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
            // line 306
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_phone"), array(), "array")) {
                // line 307
                echo "                                    ";
                $context["phone"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_phone"), array(), "array");
                // line 308
                echo "                                ";
            } else {
                // line 309
                echo "                                    ";
                $context["phone"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_phone"), array(), "array");
                // line 310
                echo "                                ";
            }
            // line 311
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
            // line 323
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array")) {
                // line 324
                echo "                                    ";
                $context["company"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_company"), array(), "array");
                // line 325
                echo "                                ";
            } else {
                // line 326
                echo "                                    ";
                $context["company"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_company"), array(), "array");
                // line 327
                echo "                                ";
            }
            // line 328
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
            // line 340
            if ($this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array")) {
                // line 341
                echo "                                    ";
                $context["vat_number"] = $this->getAttribute($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "meta", array(), "array"), ($this->getAttribute((isset($context["subscriber"]) ? $context["subscriber"] : null), "ID", array(), "array") . "_axisubs_subscribe_vat_number"), array(), "array");
                // line 342
                echo "                                ";
            } else {
                // line 343
                echo "                                    ";
                $context["vat_number"] = $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "meta", array(), "array"), ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ID", array(), "array") . "_axisubs_user_") . (isset($context["user_id"]) ? $context["user_id"] : null)) . "_vat_number"), array(), "array");
                // line 344
                echo "                                ";
            }
            // line 345
            echo "                                <input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["vat_number"]) ? $context["vat_number"] : null), "html", null, true);
            echo "\" name=\"axisubs[subscribe][vat_number]\" id=\"axisubs_subscribe_vat_number\"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"axisubs-register-message-con\">
                <div class=\"axisubs-register-message-text hide message\">
                </div>
            </div>
            <div class=\"axisubs-plan-payment-con\">
                ";
            // line 356
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_type"), array(), "array") != "free")) {
                // line 357
                echo "                <div class=\"payment-method\">
                  <div class=\"axisubs-plan_details-title\">
                      <h3>Payment methods</h3>
                  </div>
                  ";
            }
            // line 362
            echo "                  <input type=\"hidden\" name=\"task\" value=\"save\"/>
                  <input type=\"hidden\" name=\"id\" value=\"";
            // line 363
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"/>
                    ";
            // line 364
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upgrade", array(), "array")) {
                // line 365
                echo "                        <input type=\"hidden\" name=\"upgrade\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upgrade", array(), "array"), "html", null, true);
                echo "\"/>
                    ";
            }
            // line 367
            echo "                  <div class=\"axisubs-plan-payment-i-block\">
                      ";
            // line 368
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), ((isset($context["id"]) ? $context["id"] : null) . "_axisubs_plans_type"), array(), "array") != "free")) {
                // line 369
                echo "                          <div class=\"axisubs-plan-payment-block-con\">
                              ";
                // line 370
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "paymentMethods", array(), "array");
                echo "
                          </div>
                      ";
            }
            // line 373
            echo "                      <div class=\"axisubs-plan-payment-button\">
                          ";
            // line 374
            if ((isset($context["user_id"]) ? $context["user_id"] : null)) {
                // line 375
                echo "                              <button type=\"button\" onclick=\"submitSubscriptions();\">Subscribe</button>
                          ";
            } else {
                // line 377
                echo "                              <button type=\"button\" onclick=\"registerUser();\">Subscribe</button>
                          ";
            }
            // line 379
            echo "                      </div>
                  </div>
                </div>
            </div>
        </form>
    </div>
    <input type=\"hidden\" id=\"site_url\" value=\"";
            // line 385
            echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // line 387
            echo "        <div class=\"axisubs-plan-notfound\">
            Invalid Data
        </div>
    ";
        }
        // line 391
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
        return array (  657 => 391,  651 => 387,  646 => 385,  638 => 379,  634 => 377,  630 => 375,  628 => 374,  625 => 373,  619 => 370,  616 => 369,  614 => 368,  611 => 367,  605 => 365,  603 => 364,  599 => 363,  596 => 362,  589 => 357,  587 => 356,  572 => 345,  569 => 344,  566 => 343,  563 => 342,  560 => 341,  558 => 340,  542 => 328,  539 => 327,  536 => 326,  533 => 325,  530 => 324,  528 => 323,  512 => 311,  509 => 310,  506 => 309,  503 => 308,  500 => 307,  498 => 306,  483 => 294,  468 => 282,  452 => 270,  449 => 269,  446 => 268,  443 => 267,  440 => 266,  438 => 265,  422 => 253,  419 => 252,  416 => 251,  413 => 250,  410 => 249,  408 => 248,  392 => 236,  389 => 235,  386 => 234,  383 => 233,  380 => 232,  378 => 231,  362 => 219,  359 => 218,  356 => 217,  353 => 216,  350 => 215,  348 => 214,  332 => 202,  329 => 201,  326 => 200,  323 => 199,  320 => 198,  318 => 197,  308 => 189,  281 => 164,  279 => 163,  271 => 159,  268 => 158,  265 => 157,  262 => 156,  259 => 155,  257 => 154,  241 => 142,  238 => 141,  235 => 140,  232 => 139,  229 => 138,  227 => 137,  210 => 123,  203 => 122,  157 => 79,  148 => 72,  145 => 71,  143 => 70,  137 => 67,  130 => 63,  122 => 58,  117 => 55,  109 => 50,  103 => 46,  101 => 45,  96 => 42,  90 => 40,  84 => 38,  82 => 37,  71 => 29,  65 => 26,  61 => 24,  55 => 22,  49 => 20,  47 => 19,  33 => 8,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="axisubs wrap">*/
/*     {% if item['ID'] > 0 %}*/
/*         {% set id = item['ID'] %}*/
/* */
/*     <div class="axisubs-plan_details">*/
/*       <div class="plans-header">*/
/*         <div class="axisubs-plan_details-title">*/
/*             {{ pagetitle }}*/
/*         </div>*/
/*         <div class="axisubs-plan-price-title">*/
/*           Item Price*/
/*         </div>*/
/*       </div>*/
/* */
/*         <div class="axisubs-plan_details-summary">*/
/*           <div class="content-plan">*/
/*             <div class="plan_list">*/
/*               <div class="list-image">*/
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
/* */
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
/*         </div>*/
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
/*                         <button type="button" onclick="loginUser();">Login</button>*/
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
/*                     <h3>Billing Info</h3>*/
/*                 </div>*/
/*                 <div class="axisubs-plan-billinfo-fields">*/
/*                     <div class="axisubs-billinfo-f-c">*/
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
/*                                     {% set firstname = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_first_name'] %}*/
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
/*                                     {% set last_name = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_last_name'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" class="required" value="{{ last_name }}" name="axisubs[subscribe][last_name]" id="axisubs_subscribe_last_name"/>*/
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
/*                                     {% set email = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_email'] %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1']) %}*/
/*                                     {% set address_line1 = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_address_line1'] %}*/
/*                                 {% else %}*/
/*                                     {% set address_line1 = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_address_line1'] %}*/
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
/*                                     {% set address_line2 = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_address_line2'] %}*/
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
/*                                     {% set city = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_city'] %}*/
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
/*                                     {% set pincode = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_pincode'] %}*/
/*                                 {% endif %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_phone']) %}*/
/*                                     {% set phone = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_phone'] %}*/
/*                                 {% else %}*/
/*                                     {% set phone = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_phone'] %}*/
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
/*                                     {% set company = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_company'] %}*/
/*                                 {% endif %}*/
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
/*                                 {% if(subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_vat_number']) %}*/
/*                                     {% set vat_number = subscriber['meta'][subscriber['ID']~'_axisubs_subscribe_vat_number'] %}*/
/*                                 {% else %}*/
/*                                     {% set vat_number = user['meta'][user['ID']~'_axisubs_user_'~user_id~'_vat_number'] %}*/
/*                                 {% endif %}*/
/*                                 <input type="text" value="{{ vat_number }}" name="axisubs[subscribe][vat_number]" id="axisubs_subscribe_vat_number"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
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
/*                               <button type="button" onclick="submitSubscriptions();">Subscribe</button>*/
/*                           {% else %}*/
/*                               <button type="button" onclick="registerUser();">Subscribe</button>*/
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

<?php

/* LoginLoginBundle:Default:edituserform.html.twig */
class __TwigTemplate_dd62b1f20b3ed05ea75f68a3910d09adacbbc3d36e39232699502cad871b8071 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("login_login_singleupdate");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">First Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"firstname\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getFirstname", array(), "method"), "html", null, true);
        echo "\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"Last Name\">Last Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"lastname\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLastname", array(), "method"), "html", null, true);
        echo "\" placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Username <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"username\"  class=\"form-control\" id=\"username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo "\"  onkeyup=\"usernameAvailability()\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">User Role <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control col-sm-12\" name=\"role\" >
                                <option value = \"Admin\" ";
        // line 35
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRole", array(), "method") == "Admin")) {
            echo "selected ";
        }
        echo " >Admin</option>
                                <option value=\"Regular\" ";
        // line 36
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRole", array(), "method") == "Regular")) {
            echo "selected ";
        }
        echo ">Regular</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"dob\">New Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" data-parsley-trigger=\"keyup\" data-parsley-minlength=\"8\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"employmentstartdate\">Confirmed Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password_confirm\" id=\"password_confirm\" data-parsley-trigger=\"keyup\" data-parsley-equalto=\"#password\" >
                        </div>\t\t\t
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"email\"  name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array(), "method"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"telephonework\">Telephone Work <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"tel\" name=\"officetel\" class=\"form-control\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getTelephoneoffice", array(), "method"), "html", null, true);
        echo "\" id=\"officetel\" required=\"*\" placeholder=\"(XXX) XXX-XXXX Ext.XXXX\" data-parsley-trigger=\"change\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t\t\t\t\t
                            <label for=\"email\">Telephone Cell</label>
                            <input type=\"tel\" name=\"mobile\" class=\"form-control\" id=\"mobile\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getTelephonemobile", array(), "method"), "html", null, true);
        echo "\" placeholder=\"(XXX) XXX-XXXX\" data-parsley-trigger=\"change\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"title\">Title</label>
                            <input type=\"text\" class=\"form-control\" name=\"jobtitle\" id=\"title\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getJobtitle", array(), "method"), "html", null, true);
        echo "\" placeholder=\"COO, CEO, Manager, Etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label>
                                <input name=\"copyAddress\" id=\"CopyAddress\" class=\"bigger-125\" type=\"checkbox\" onclick=\"fill();\" />
                                <span class=\"lbl\"> Autofill Company Details</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">\t\t\t\t
                            <label for=\"company\">Company Name</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCompanyname", array(), "method"), "html", null, true);
        echo "\" name=\"companyname\" id=\"companyName\" placeholder=\"Your company name\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"address1\">Address</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getAddress1", array(), "method"), "html", null, true);
        echo "\" name=\"address1\" id=\"address1\" placeholder=\"Address line 1\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getAddress2", array(), "method"), "html", null, true);
        echo "\" name=\"address2\" id=\"address2\" placeholder=\"Address line 2\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t\t
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"City\">City</label>
                            <input type=\"text\" class=\"form-control\" id=\"city\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCity", array(), "method"), "html", null, true);
        echo "\" name=\"city\" placeholder=\"City / Town\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"form-group\">
                            <label for=\"City\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"state\" name=\"state\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getState", array(), "method"), "html", null, true);
        echo "\" placeholder=\"California, New York, Texas, etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">\t\t\t\t\t\t\t
                        <div class=\"col-xs-1\">
                            <label for=\"City\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"postalcode\" name=\"postalcode\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPostalcode", array(), "method"), "html", null, true);
        echo "\" placeholder=\"Zip\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"dob\">Date of Birth</label>
                            <input type=\"text\" class=\"form-control\" id=\"dob\" name=\"dob\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getDob", array(), "method"), "html", null, true);
        echo "\" placeholder=\"month/date/year\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"employmentstartdate\">Employment Start Date</label>
                            <input type=\"text\" class=\"form-control\" name=\"empstartdate\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getContractstartdate", array(), "method"), "html", null, true);
        echo "\" id=\"employmentstartdate\" placeholder=\"month/date/year\">
                        </div>\t\t\t
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t
                            <label for=\"commorigin\">Commission Originator <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"commisionoriginator\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCommissionoriginator", array(), "method"), "html", null, true);
        echo "\" id=\"commorigin\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"commnonorigin\">Commission Non-Originator <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" class=\"form-control\" id=\"commnonorigin\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCommissionnonoriginator", array(), "method"), "html", null, true);
        echo "\" name=\"commisionnonoriginator\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"earninggoals\">Earning Goals <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"earninggoals\" class=\"form-control\" id=\"earninggoals\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEarninggoal", array(), "method"), "html", null, true);
        echo "\" aria-label=\"Amount\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t
                            <label for=\"draw\">Annual Draw Against Commissions</label>
                            <input type=\"text\" class=\"form-control\" name=\"annualdraw\" id=\"draw\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getAnnualdraw", array(), "method"), "html", null, true);
        echo "\" aria-label=\"Amount\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\">User Avatar</label>
                            <br>
                            <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                    ";
        // line 188
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImage", array(), "method") != "") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImage", array(), "method") != null))) {
            // line 189
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImage", array(), "method")), "html", null, true);
            echo "\" alt=\"...\">
                                    ";
        } else {
            // line 191
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
            echo "\" alt=\"...\">
                                    ";
        }
        // line 192
        echo "    
                                </div>
                                <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
                                <div>
                                    <span class=\"btn btn-default btn-file\"><span class=\"fileinput-new\">Select image</span><span class=\"fileinput-exists\">Change</span><input type=\"file\" name=\"img\"></span>
                                    <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type = \"hidden\" name=\"id\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"), "html", null, true);
        echo "\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <button id=\"cancelbutton\" class=\"btn btn-default\">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:edituserform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 203,  292 => 192,  286 => 191,  280 => 189,  278 => 188,  264 => 177,  255 => 171,  244 => 163,  235 => 157,  224 => 149,  215 => 143,  204 => 135,  195 => 129,  186 => 123,  175 => 115,  165 => 108,  154 => 100,  133 => 82,  122 => 74,  113 => 68,  102 => 60,  73 => 36,  67 => 35,  54 => 25,  43 => 17,  32 => 9,  24 => 4,  19 => 1,);
    }
}

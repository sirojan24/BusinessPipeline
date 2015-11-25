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
        echo "
<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_login_singleupdate");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">First Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"firstname\" value=\"";
        // line 10
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
        // line 18
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
        // line 26
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
        // line 36
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRole", array(), "method") == "Admin")) {
            echo "selected ";
        }
        echo " >Admin</option>
                                <option value=\"Regular\" ";
        // line 37
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
        // line 61
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
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getTelephoneoffice", array(), "method"), "html", null, true);
        echo "\" id=\"officetel\" required=\"*\" placeholder=\"(XXX) XXX-XXXX Ext.XXXX\" data-parsley-trigger=\"change\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t\t\t\t\t
                            <label for=\"email\">Telephone Cell</label>
                            <input type=\"tel\" name=\"mobile\" class=\"form-control\" id=\"mobile\" value=\"";
        // line 75
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
        // line 83
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
        // line 101
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
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getAddress1", array(), "method"), "html", null, true);
        echo "\" name=\"address1\" id=\"address1\" placeholder=\"Address line 1\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 116
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
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCity", array(), "method"), "html", null, true);
        echo "\" name=\"city\" placeholder=\"City / Town\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"form-group\">
                            <label for=\"City\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"state\" name=\"state\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getState", array(), "method"), "html", null, true);
        echo "\" placeholder=\"California, New York, Texas, etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">\t\t\t\t\t\t\t
                        <div class=\"col-xs-1\">
                            <label for=\"City\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"postalcode\" name=\"postalcode\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPostalcode", array(), "method"), "html", null, true);
        echo "\" placeholder=\"Zip\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"dob\">Date of Birth</label>
                            <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" value=\"\" placeholder=\"month/date/year\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"employmentstartdate\">Employment Start Date</label>
                            <input type=\"date\" class=\"form-control\" name=\"empstartdate\" id=\"employmentstartdate\">
                        </div>\t\t\t
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t
                            <label for=\"commorigin\">Commission Originator <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"commisionoriginator\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCommissionoriginator", array(), "method"), "html", null, true);
        echo "\" id=\"commorigin\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"commnonorigin\">Commission Non-Originator <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" class=\"form-control\" id=\"commnonorigin\" value=\"";
        // line 164
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
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEarninggoal", array(), "method"), "html", null, true);
        echo "\" aria-label=\"Amount\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t
                            <label for=\"draw\">Annual Draw Against Commissions</label>
                            <input type=\"text\" class=\"form-control\" name=\"annualdraw\" id=\"draw\" value=\"";
        // line 178
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
                            ";
        // line 187
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImage", array(), "method") != "") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImage", array(), "method") != null))) {
            // line 188
            echo "                                <div class=\"fileinput fileinput-preview fileinput-exists\" data-provides=\"fileinput\">
                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px;\">
                                        <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
            echo "\" alt=\"...\">
                                    </div>
                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 200px;\">
                                        <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImage", array(), "method")), "html", null, true);
            echo "\" alt=\"...\">
                                    </div>
                                    <div>
                                        <span class=\"btn btn-default btn-file\">
                                            <span class=\"fileinput-exists\">Change</span>
                                            <span class=\"fileinput-new\">Select image</span>
                                            <input type=\"file\" name=\"img\">
                                        </span>
                                        <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                    </div>
                                </div>
                            ";
        } else {
            // line 205
            echo "                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px;\">
                                        <img src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
            echo "\" alt=\"...\">
                                    </div>
                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px;\"></div>
                                    <div>
                                        <span class=\"btn btn-default btn-file\">
                                            <span class=\"fileinput-exists\">Change</span>
                                            <span class=\"fileinput-new\">Select image</span>
                                            <input type=\"file\" name=\"img\">
                                        </span>
                                        <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                    </div>
                                </div>
                            ";
        }
        // line 220
        echo "                        </div>
                    </div>
                </div>
                <input type = \"hidden\" name=\"id\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"), "html", null, true);
        echo "\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("login_login_users");
        echo "\">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var mdate = new Date('";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getDob", array(), "method"), "html", null, true);
        echo "');
    var month = 1;
    if((mdate.getMonth() + 1) < 10){
        month = '0' + (mdate.getMonth() + 1);
    }else{
        month = mdate.getMonth() + 1;
    }
    var newDate = mdate.getFullYear() + '-' + month + '-' + mdate.getDate();
    \$('#dob').val(newDate);
</script>
<script>
    var mdate = new Date('";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getContractstartdate", array(), "method"), "html", null, true);
        echo "');
    var month = 1;
    if((mdate.getMonth() + 1) < 10){
        month = '0' + (mdate.getMonth() + 1);
    }else{
        month = mdate.getMonth() + 1;
    }
    var newDate = mdate.getFullYear() + '-' + month + '-' + mdate.getDate();
    \$('#employmentstartdate').val(newDate);
</script>";
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
        return array (  358 => 249,  344 => 238,  332 => 229,  323 => 223,  318 => 220,  302 => 207,  298 => 205,  283 => 193,  277 => 190,  273 => 188,  271 => 187,  259 => 178,  250 => 172,  239 => 164,  230 => 158,  205 => 136,  196 => 130,  187 => 124,  176 => 116,  166 => 109,  155 => 101,  134 => 83,  123 => 75,  114 => 69,  103 => 61,  74 => 37,  68 => 36,  55 => 26,  44 => 18,  33 => 10,  25 => 5,  19 => 1,);
    }
}

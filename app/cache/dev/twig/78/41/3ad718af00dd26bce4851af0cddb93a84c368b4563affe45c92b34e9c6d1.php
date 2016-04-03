<?php

/* LoginLoginBundle:Default:userform.html.twig */
class __TwigTemplate_78413ad718af00dd26bce4851af0cddb93a84c368b4563affe45c92b34e9c6d1 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("login_login_fullsignup");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">First Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"firstname\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"Last Name\">Last Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"lastname\" placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Username <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"username\"  class=\"form-control\" id=\"username\"  onkeyup=\"usernameAvailability()\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\" required  autocomplete=\"off\"/>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"email\"  name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"telephonework\">Telephone Work <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"tel\" name=\"officetel\" class=\"form-control\" id=\"officetel\" required=\"*\" placeholder=\"(XXX) XXX-XXXX Ext.XXXX\" data-parsley-trigger=\"change\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t\t\t\t\t
                            <label for=\"email\">Telephone Cell</label>
                            <input type=\"tel\" name=\"mobile\" class=\"form-control\" id=\"mobile\" required=\"*\" placeholder=\"(XXX) XXX-XXXX\" data-parsley-trigger=\"change\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"title\">Title</label>
                            <input type=\"text\" class=\"form-control\" name=\"jobtitle\" id=\"title\" placeholder=\"COO, CEO, Manager, Etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
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
                            <input type=\"text\" class=\"form-control\" name=\"companyname\" id=\"companyName\" placeholder=\"Your company name\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"address1\">Address</label>
                            <input type=\"text\" class=\"form-control\" name=\"address1\" id=\"address1\" placeholder=\"Address line 1\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"address2\" id=\"address2\" placeholder=\"Address line 2\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t\t
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"City\">City</label>
                            <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"City / Town\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"form-group\">
                            <label for=\"City\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"state\" name=\"state\" placeholder=\"California, New York, Texas, etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">\t\t\t\t\t\t\t
                        <div class=\"col-xs-1\">
                            <label for=\"City\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"postalcode\" name=\"postalcode\" placeholder=\"Zip\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"dob\">Date of Birth</label>
                            <input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\">
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
                        <label for=\"commorigin\">Commission Originator <span style=\"color:#FF0000;\">*</span></label>

                        <div class=\"input-group\">\t
                            <input type=\"text\" class=\"form-control\" name=\"commisionoriginator\" id=\"commorigin\"/>
                            <span class=\"input-group-addon\">
                                %
                            </span>
                        </div>
                    </div>

                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"commnonorigin\">Commission Non-Originator <span style=\"color:#FF0000;\">*</span></label>

                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"commnonorigin\" name=\"commisionnonoriginator\">
                                <span class=\"input-group-addon\">
                                    %
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"earninggoals\">Earning Goals <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"earninggoals\" class=\"form-control\" id=\"earninggoals\" aria-label=\"Amount\">
                        </div>
                    </div>
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">\t
                            <label for=\"draw\">Annual Draw Against Commissions</label>
                            <input type=\"text\" class=\"form-control\" name=\"annualdraw\" id=\"draw\" aria-label=\"Amount\">
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
                                    <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
        echo "\" alt=\"...\">
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
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("login_login_users");
        echo "\">Cancel</a>
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
        return "LoginLoginBundle:Default:userform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 189,  196 => 173,  24 => 4,  19 => 1,);
    }
}

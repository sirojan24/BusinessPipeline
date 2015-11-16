<?php

/* LoginLoginBundle:Default:signupform.html.twig */
class __TwigTemplate_fc66d04e52004f9146f833a25b8cce4a777da2f699f89d776c1428399a6f037e extends Twig_Template
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
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t <div class=\"col-xs-6\" style=\"border-right:1px solid #ccc;height:100%\">\t\t
\t\t\t\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" method=\"post\" data-parsley-validate>
\t\t\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"firstname\">First Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"\" pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-trigger=\"keyup\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"Last Name\">Last Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"\" pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-trigger=\"keyup\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" onkeyup=\"usernameAvailability()\" placeholder=\"\" pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n  ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n  ]*\$\" data-parsley-trigger=\"keyup\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">\t\t\t\t
\t\t\t\t\t\t\t\t<label for=\"company\">Company Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"company\" name=\"companyname\" placeholder=\"Your company name\" pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-trigger=\"keyup\" required >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"minimum 8 characters\" data-parsley-trigger=\"change\" data-parsley-minlength=\"8\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                        <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"password\">Confirm Password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" id=\"passwordRe\" placeholder=\"minimum 8 characters\" data-parsley-trigger=\"change\" data-parsley-equalto=\"#password\"  required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"salesteam\">Sales Team Size</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"size\" id=\"form-field-select-1\">
\t\t\t\t\t\t\t\t    <option>1-10</option>
                                                                    <option>11-50</option>
                                                                    <option>51-100</option>
                                                                    <option>100+</option>\t\t
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"industry\">Compay Industry</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"industry\" id=\"form-field-select-2\">
                                                                    <option>Software,App Development</option>
                                                                    <option>Health</option>
                                                                    <option>Tech Startup</option>
                                                                    <option>Education and Training</option>
                                                                    <option>Real Estate</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Insurance</option>
                                                                    <option>Creative Agency (Web,Advertising,Video)</option>
                                                                    <option>Financial or Credit Services</option>
                                                                    <option>News, Media and Publications</option>
                                                                    <option>Manufacturing</option>
                                                                    <option>IT Services</option>
                                                                    <option>Consulting</option>
                                                                    <option>Other</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
                                                                    <input type=\"checkbox\" value=\"agree\"> I agree to the <a onclick=\" return openTermsModal();\">Terms and Conditions</a>.
\t\t\t\t\t\t\t\t</label>
                                                                
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<br><br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
\t\t\t\t\t\t\t\t<button id=\"cancelbutton\" class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<h4>Every feature is included in the free trail. Experience the full power of <strong>PIPELINE <font color=\"#95BE22\">99</font></strong></h4>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> No credit card required
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> No obligation
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Stop using any time you want
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4> Need even more reasons to sign up?</h4>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Flat pricing after trail
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Unlimited Users
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Unlimited Deals
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Unlimited Contacts
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Only what you need
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Start work within minutes
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"text-indent: 1em;\">
\t\t\t\t\t\t<i class=\"fa fa-check-square-o\"></i> Increase your revenue
\t\t\t\t\t\t</div>
                            </div>
\t\t\t\t
\t\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signupform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}

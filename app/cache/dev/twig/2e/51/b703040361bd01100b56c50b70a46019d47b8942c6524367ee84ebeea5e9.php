<?php

/* LoginLoginBundle:Default:signin.html.twig */
class __TwigTemplate_2e51b703040361bd01100b56c50b70a46019d47b8942c6524367ee84ebeea5e9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t<meta charset=\"utf-8\" />
\t\t<title>Pipeline 99</title>

\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

\t\t<!-- bootstrap & fontawesome -->
                <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/ace/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/ace/font-awesome.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/ace/ace-fonts.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/ace/ace.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\"/>
                <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/ace/ace-rtl.css"), "html", null, true);
        echo "\" />
\t\t
                <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/parsley.css"), "html", null, true);
        echo "\" />
\t\t<!--[if lte IE 9]>
\t\t\t<link rel=\"stylesheet\" href=\"../assets/css/ace-part2.css\" />
\t\t<![endif]-->
\t\t

\t\t<!--[if lte IE 9]>
\t\t  <link rel=\"stylesheet\" href=\"../assets/css/ace-ie.css\" />
\t\t<![endif]-->

\t\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

\t\t<!--[if lt IE 9]>
\t\t<script src=\"../assets/js/html5shiv.js\"></script>
\t\t<script src=\"../assets/js/respond.js\"></script>
\t\t<![endif]-->
\t</head>

\t<body class=\"login-layout light-login\">
\t\t<div class=\"main-container\">
\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"row\">
                                        ";
        // line 40
        if (array_key_exists("errormsg", $context)) {
            // line 41
            echo "                                               <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\" style=\"width:50%;margin-left: auto;margin-right: auto;margin-top:5px\">
                                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                    </button>
                                                    <center> <strong>";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                                                </div>
                                                <script> window.setTimeout(function() { \$(\"#successmsg\").alert('close'); }, 5000); </script>

                                        ";
        }
        // line 50
        echo "                                        ";
        if (array_key_exists("successmsg", $context)) {
            // line 51
            echo "                                            <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\" style=\"width:50%;margin-left: auto;margin-right: auto;margin-top:5px\">
                                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                    </button>
                                                    <center> <strong>";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                                            </div>
                                            <script> window.setTimeout(function() { \$(\"#errormsg\").alert('close'); }, 5000); </script>
                                        ";
        }
        // line 59
        echo "\t\t\t\t\t<div class=\"center\" id=\"trailInfo\" style=\"margin-left:auto;margin-right:auto;width:100%;display:none;\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t<!-- <i class=\"ace-icon fa fa-credit-card blue\"></i>
\t\t\t\t\t\t\t <span class=\"blue\">Start your 30 - day free trial Now! , No billing information required at this point.</span> -->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-1\">
\t\t\t\t\t\t<div class=\"login-container\" style=\"width:500px\">
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"space-20\"></div>

\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t<div id=\"login-box\" class=\"login-box visible widget-box no-border\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"header blue lighter bigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-coffee green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sign in</strong>
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-6\"></div>

\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\"  placeholder=\"Username\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Remember Me</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"width-35 pull-right btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">Login</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-4\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<!--\t\t<div class=\"social-or-login center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">Or Login Using</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-6\"></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"social-login center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.widget-main -->

\t\t\t\t\t\t\t\t\t\t<div class=\"toolbar clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tRetrieve Password
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#signup-box\" class=\"user-signup-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSign up
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- /.widget-body -->
\t\t\t\t\t\t\t\t</div><!-- /.login-box -->

\t\t\t\t\t\t\t\t<div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"header red lighter bigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Retrieve Password</strong>
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-6\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tPlease provide your email address and we'll send you instructions on how to change your password.
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"width-35 pull-right btn btn-sm btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-lightbulb-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">Send Me!</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div><!-- /.widget-main -->

\t\t\t\t\t\t\t\t\t\t<div class=\"toolbar center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#login-box\"  class=\"back-to-login-link\">
\t\t\t\t\t\t\t\t\t\t\t\tBack to log-in
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- /.widget-body -->
\t\t\t\t\t\t\t\t</div><!-- /.forgot-box -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"signup-box\" class=\"signup-box widget-box no-border\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"header blue lighter bigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-users blue\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sign up</strong>
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-6\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p> Your Information</p>

\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 211
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" method=\"post\" data-parsley-validate>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
                                                                                                        <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"First Name\" pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-trigger=\"keyup\" required/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
                                                                                                    
                                                                                                        <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\"  placeholder=\"Last Name\" pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-pattern=\"^[a-zA-Z(),.:/;'_&\\n  ]*\$\" data-parsley-trigger=\"keyup\" required/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
                                                                                                    
                                                                                                        <label class=\"block clearfix\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\" placeholder=\"Username\" onkeyup=\"usernameAvailability()\" pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n  ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n  ]*\$\" data-parsley-trigger=\"keyup\" required/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                                                               <span id=\"usernameerror\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
                                                                                                        
                                                                                                        <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"companyname\" class=\"form-control\" placeholder=\"Company Name\" pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-trigger=\"keyup\" required />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
                                                                                                    
                                                                                                        
                                                                                                    
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\" required/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" data-parsley-trigger=\"change\" data-parsley-minlength=\"8\" required/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password_confirm\" id=\"passwordRe\" class=\"form-control\" placeholder=\"Repeat password\" data-parsley-trigger=\"change\" data-parsley-equalto=\"#password\"  required/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-retweet\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
                                                                                                    
                                                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"form-field-select-1\">Company size</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"size\" id=\"form-field-select-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>1-10</option>
                                                                                                                <option>11-50</option>
                                                                                                                <option>51-100</option>
                                                                                                                <option>100+</option>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t
                                                                                                        <label for=\"form-field-select-2\" style=\"margin-top:7px \">Company Industry</label>
                                                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"industry\" id=\"form-field-select-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>Software,App Development</option>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
                                                                                                        <br>                                                                                
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tI accept the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">User Agreement</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-24\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"width-30 pull-left btn btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-refresh\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">Reset</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"width-65 pull-right btn btn-sm btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">Sign-up</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right icon-on-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"toolbar center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tBack to login
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- /.widget-body -->
\t\t\t\t\t\t\t\t</div><!-- /.signup-box -->
\t\t\t\t\t\t\t</div><!-- /.position-relative -->

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t</div><!-- /.row -->
\t\t\t</div><!-- /.main-content -->
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->
\t\t\t
\t\t<!--[if !IE]> -->
\t\t
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
                       
\t\t</script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='../assets/js/jquery1x.js'>\"+\"<\"+\"/script>\");
</script> 
<![endif]-->
                <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
                
                <script>
                   
                function usernameAvailability(){
                        \$.post('";
        // line 366
        echo $this->env->getExtension('routing')->getPath("login_login_uservalidateajax");
        echo "',               
                {username: document.getElementById('username').value}, 
                    function(response){
                        if(response == \"true\"){
                            document.getElementById('username').style.color =\"#B94A48\";
                            document.getElementById('username').style.backgroundColor =\"#F2DEDE\";
                            document.getElementById('username').style.border =\"1px solid #EED3D7\";
                            document.getElementById('usernameerror').innerHTML = \"<font color = '#B94A48'>username already exists. try a different one.</font>\";
                        }else{
                            document.getElementById('username').style.color =\"#468847\";
                            document.getElementById('username').style.backgroundColor =\"#DFF0D8\";
                            document.getElementById('username').style.border =\"1px solid #D6E9C6\";
                            document.getElementById('usernameerror').innerHTML = \"\";
                        }
                    });    
                }
                
               
                </script>
\t\t<!-- inline scripts related to this page -->
\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t \$(document).on('click', '.toolbar a[data-target]', function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar target = \$(this).data('target');
\t\t\t\tif(target == '#signup-box'){
\t\t\t\t\t\$('#trailInfo').show();
\t\t\t\t}else{
\t\t\t\t\t\$('#trailInfo').hide();
\t\t\t\t}
\t\t\t\t\$('.widget-box.visible').removeClass('visible');//hide others
\t\t\t\t\$(target).addClass('visible');//show target
\t\t\t });
\t\t\t});
\t\t\t
\t\t</script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 366,  437 => 360,  432 => 358,  428 => 357,  424 => 356,  420 => 355,  416 => 354,  402 => 343,  267 => 211,  136 => 83,  110 => 59,  103 => 55,  97 => 51,  94 => 50,  86 => 45,  80 => 41,  78 => 40,  53 => 18,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}

<?php

/* LoginLoginBundle:Default:signinform.html.twig */
class __TwigTemplate_291a6e2a33c967fd29e144eb820c4140b58d59958f98450047dd1e5f7e1040d5 extends Twig_Template
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
\t\t\t <div style=\"padding:25px\">\t\t
\t\t\t\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\" method=\"post\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div>\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" id=\"username\" required=\"*\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" required=\"*\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"form-group\">
                                                            <label class=\"checkbox-inline\">
                                                                <input type=\"checkbox\" id=\"rememberMe\">Remember Me
                                                            </label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button id=\"signinbutton\" class=\"btn btn-primary center-block\">Sign In</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                        <div class=\"text-center\">
                                            <div class=\"form-group\">
                                                
                                                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("login_login_forgetPassword");
        echo "\">Forgot Password?</a>
                                                
                                                    <br>
                                                    Don't you have an account yet? <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("login_login_signupV2");
        echo "\">Sign Up</a>
                                                
                                            </div>
\t\t\t\t\t</div>
                                </form>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signinform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 40,  60 => 37,  25 => 5,  19 => 1,);
    }
}

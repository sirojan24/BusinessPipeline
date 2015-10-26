<?php

/* LoginLoginBundle:Default:forgetPasswordform.html.twig */
class __TwigTemplate_ddf7b9a252128b5536787be0336458fe46ae390ad7b1ae5ea9eaae9681f3fe71 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t <div style=\"padding:25px\">\t\t
\t\t\t\t<form>
                                        <div class=\"row\">
\t\t\t\t\t\t<div>\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class='text-justify'>
                                                                <small>Please provide your email address and we'll send you instructions 
                                                                on how to change your password</small>
                                                                </label>
                                                        </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div>\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"username\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"username\" required=\"*\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button id=\"signinbutton\" class=\"btn btn-danger center-block\">Retrieve my password</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                        <div class=\"text-center\">
                                            <div class=\"form-group\">
                                                <label for=\"forgetPassword\">
                                                    <small>Back to <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("login_login_signin");
        echo "\">log in</a></small>
                                                </label><br>
                                                <label for=\"forgetPassword\">
                                                    <small>Don't you have an account yet? <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("login_login_signupV2");
        echo "\">Sign Up</a></small>
                                                </label>
                                            </div>
\t\t\t\t\t</div>
                                </form>
\t\t\t</div>
\t\t\t
\t\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:forgetPasswordform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  51 => 31,  19 => 1,);
    }
}

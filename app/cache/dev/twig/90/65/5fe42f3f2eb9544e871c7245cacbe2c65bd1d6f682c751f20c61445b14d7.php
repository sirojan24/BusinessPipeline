<?php

/* LoginLoginBundle:Default:navigation.html.twig */
class __TwigTemplate_90655fe42f3f2eb9544e871c7245cacbe2c65bd1d6f682c751f20c61445b14d7 extends Twig_Template
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
        echo "\t<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
\t\t\t<div class=\"container container-top\">
\t\t\t<!-- navbar-header -->

\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\"  data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.php\"><span style=\"font-family: 'Oswald', serif;\">PIPELINE<font color=\"#95BE22\"><strong> 99</font></strong></a></span>
\t\t\t\t</div>
\t\t\t\t<!-- /.end navbar-header -->
\t\t\t\t
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t<!-- Top Black Menu -->
\t\t\t\t<ul class=\"nav navbar-top-links navbar-right\">
\t\t\t\t\t<!-- <li>
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Features\"><i class=\"fa fa-bullhorn\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Pricing\"><i class=\"fa fa-usd\"></i></a>
\t\t\t\t\t</li> -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_login_signin");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Login\"><i class=\"fa fa-sign-in\"></i> Log in </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("login_login_signupV2");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Start Free Trail\"><font color=\"#95BE22\"><strong><i class=\"fa fa-share\"></i> Start your Free Trail</font></strong></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<!-- /.end Top Black Menu -->
\t\t\t\t</div>
\t\t\t</div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 29,  46 => 26,  19 => 1,);
    }
}

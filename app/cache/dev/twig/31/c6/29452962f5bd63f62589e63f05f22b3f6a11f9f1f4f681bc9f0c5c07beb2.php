<?php

/* AppBundle:Default:navigation.html.twig */
class __TwigTemplate_31c629452962f5bd63f62589e63f05f22b3f6a11f9f1f4f681bc9f0c5c07beb2 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
\t\t\t<div class=\"container container-top\">
\t\t\t\t<!-- navbar-header -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.php\"><span style=\"font-family: 'Oswald', serif;\">PIPELINE<font color=\"#95BE22\"><strong> 99</font></strong></a></span>
\t\t\t\t</div>
\t\t\t\t<!-- /.end navbar-header -->
\t\t\t\t
\t\t\t\t<!-- User Profile -->
\t\t\t\t<ul class=\"nav navbar-user navbar-right\" style=\"width:115px\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\"width:165px\">
\t\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Flobbies75x75/Popie.png"), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive img-user\" /> User Name <i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t\t<!-- <span class=\"online\"></span> -->
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"arrow-up\"></span>
\t\t\t\t\t\t<ul class=\"dropdown-messages\">
\t\t\t\t\t\t\t<li><a href=\"#\">My Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"pipelinesetup.php\">Pipeline Setup</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!-- /.dropdown-messages -->
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- /.end User Profile -->
\t\t\t\t\t
\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Top Black Menu -->
\t\t\t\t\t<ul class=\"nav navbar-top-links navbar-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dashboard\"><i class=\"fa fa-tachometer\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Contacts\"><i class=\"fa fa-user\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Deals\"><i class=\"fa fa-usd\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"users.php\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Users\"><i class=\"fa fa-users\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"support.php\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Help & Support\"><i class=\"fa fa-question\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- /.end Top Black Menu -->
\t\t\t\t</div>
\t\t\t</div>
    </nav>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  19 => 1,);
    }
}

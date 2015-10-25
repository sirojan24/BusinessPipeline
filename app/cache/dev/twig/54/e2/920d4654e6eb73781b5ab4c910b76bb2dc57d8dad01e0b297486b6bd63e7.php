<?php

/* LoginLoginBundle:Default:footer.html.twig */
class __TwigTemplate_54e2920d4654e6eb73781b5ab4c910b76bb2dc57d8dad01e0b297486b6bd63e7 extends Twig_Template
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
        echo "\t\t<footer id=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-sm-12\">
\t\t\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Security</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy</a></li>
\t\t\t\t\t\t\t<li><a href=\"TermsofService.php\">Terms of Use</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t<ul class=\"social-profile\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t<p class=\"copyright\">&copy; <strong>PIPELINE <font color=\"#95BE22\">99</font></strong>. All right reserved 2015</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"scrollToTop\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Back2Top.png"), "html", null, true);
        echo "\" alt=\"top\" class=\"img-responsive\" /></a>
\t\t</footer>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  19 => 1,);
    }
}

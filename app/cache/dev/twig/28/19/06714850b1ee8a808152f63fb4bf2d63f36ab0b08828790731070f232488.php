<?php

/* OpportunityBundle:Default:addOpportunityV2.html.twig */
class __TwigTemplate_281906714850b1ee8a808152f63fb4bf2d63f36ab0b08828790731070f232488 extends Twig_Template
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

    ";
        // line 4
        $this->env->loadTemplate("AppBundle:Default:head.html.twig")->display($context);
        // line 5
        echo "
    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            ";
        // line 11
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 12
        echo "
            ";
        // line 13
        $this->env->loadTemplate("OpportunityBundle:Default:wonModal.html.twig")->display($context);
        // line 14
        echo "
            ";
        // line 15
        $this->env->loadTemplate("OpportunityBundle:Default:LostModal.html.twig")->display($context);
        // line 16
        echo "
            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Add Deal</h1>
                        </div>
                    </div>
                </div>


                ";
        // line 28
        $this->env->loadTemplate("OpportunityBundle:Default:opportunityform.html.twig")->display($context);
        // line 29
        echo "            </div>
            <br><br><br>
            ";
        // line 31
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 32
        echo "
        </div>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.number.js"), "html", null, true);
        echo "\"></script>
        <!-- /#wrapper -->
        ";
        // line 37
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 38
        echo "
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:addOpportunityV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  96 => 43,  92 => 42,  86 => 39,  83 => 38,  81 => 37,  76 => 35,  72 => 34,  68 => 32,  66 => 31,  62 => 29,  60 => 28,  46 => 16,  44 => 15,  41 => 14,  39 => 13,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

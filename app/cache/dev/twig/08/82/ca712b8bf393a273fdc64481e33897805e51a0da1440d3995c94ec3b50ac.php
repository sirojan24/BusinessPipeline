<?php

/* OpportunityBundle:Default:editOpportunityV2.html.twig */
class __TwigTemplate_0882ca712b8bf393a273fdc64481e33897805e51a0da1440d3995c94ec3b50ac extends Twig_Template
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
                            <h1 class = \"page-header\">Edit Deal</h1>
                        </div>
                    </div>
                </div>

                <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.number.js"), "html", null, true);
        echo "\"></script>

                <script type=\"text/javascript\">
                    jQuery(function (\$) {
                        \$(\"#partnerpercentage\").mask(\"99\");
                    });
                </script>
                ";
        // line 35
        $this->env->loadTemplate("OpportunityBundle:Default:editopportunityform.html.twig")->display($context);
        // line 36
        echo "            </div>
            <br><br><br>
            ";
        // line 38
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 39
        echo "
        </div>

        <!-- /#wrapper -->
        ";
        // line 43
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 44
        echo "
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:editOpportunityV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 50,  102 => 49,  98 => 48,  92 => 45,  89 => 44,  87 => 43,  81 => 39,  79 => 38,  75 => 36,  73 => 35,  63 => 28,  59 => 27,  46 => 16,  44 => 15,  41 => 14,  39 => 13,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

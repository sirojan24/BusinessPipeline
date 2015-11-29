<?php

/* SettingsBundle:Stages:addStageV2.html.twig */
class __TwigTemplate_9432f2781b3d1ebb9eeb644b77813cd1c03abb89629cb265b3b7589224e59365 extends Twig_Template
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

            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Add Stage</h1>
                        </div>
                    </div>
                </div>


                ";
        // line 25
        $this->env->loadTemplate("SettingsBundle:Stages:stageform.html.twig")->display($context);
        // line 26
        echo "            </div>
            <br><br><br>
            ";
        // line 28
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 29
        echo "
        </div>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.number.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$(\"#officetel\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone0\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone1\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone2\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone3\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone4\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone5\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone6\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone7\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone8\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#phone9\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#sub_con_phone1\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#sub_con_phone2\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#mobile\").mask(\"(999) 999-9999\");
                \$(\"#dob\").mask(\"99/99/9999\");
                \$(\"#employmentstartdate\").mask(\"99/99/9999\");
                \$(\"#commorigin\").mask(\"99%\");
                \$(\"#commnonorigin\").mask(\"99%\");
                \$('#earninggoals').number( true, 0 );
                \$('#draw').number( true, 0 );
            });
        </script>
        <!-- /#wrapper -->
        ";
        // line 58
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 59
        echo "        
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
        
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:Stages:addStageV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 65,  111 => 64,  107 => 63,  101 => 60,  98 => 59,  96 => 58,  67 => 32,  63 => 31,  59 => 29,  57 => 28,  53 => 26,  51 => 25,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

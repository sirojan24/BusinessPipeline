<?php

/* LoginLoginBundle:Default:editusers_v2.html.twig */
class __TwigTemplate_6c5b6fa746405bb57440deffa0f051e3f0ded0abe5f5cc2b84f69a274509bd75 extends Twig_Template
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
                            <h1 class = \"page-header\">Edit User(s)</h1>
                        </div>
                    </div>
                </div>
            

            ";
        // line 25
        $this->env->loadTemplate("LoginLoginBundle:Default:edituserform.html.twig")->display($context);
        // line 26
        echo "            </div>
            <br><br><br>
            ";
        // line 28
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 29
        echo "
        </div>
        <!-- /#wrapper -->
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.number.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$(\"#officetel\").mask(\"(999) 999-9999? Ext.9999\");
                \$(\"#mobile\").mask(\"(999) 999-9999\");
                \$(\"#commorigin\").mask(\"99%\");
                \$(\"#commnonorigin\").mask(\"99%\");
                \$('#earninggoals').number( true, 0 );
                \$('#draw').number( true, 0 );
                
                
                
            });
        </script>
        ";
        // line 47
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 48
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:editusers_v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 51,  96 => 50,  92 => 49,  87 => 48,  85 => 47,  68 => 33,  64 => 32,  59 => 29,  57 => 28,  53 => 26,  51 => 25,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

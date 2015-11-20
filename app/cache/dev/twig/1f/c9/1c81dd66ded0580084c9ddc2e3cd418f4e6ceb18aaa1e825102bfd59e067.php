<?php

/* LoginLoginBundle:Default:dashboard.html.twig */
class __TwigTemplate_1fc91c81dd66ded0580084c9ddc2e3cd418f4e6ceb18aaa1e825102bfd59e067 extends Twig_Template
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
                            ";
        // line 18
        if (array_key_exists("errormsg", $context)) {
            // line 19
            echo "                                <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <center> <strong>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                                </div>
                                <script> 
                                    window.setTimeout(function () {
                                        \$(\"#successmsg\").alert('close');
                                    }, 5000);
                                </script>
                            ";
        }
        // line 31
        echo "                            ";
        if (array_key_exists("successmsg", $context)) {
            // line 32
            echo "                                <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <center> <strong>";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                                </div>
                                <script> 
                                    window.setTimeout(function () {
                                        \$(\"#errormsg\").alert('close');
                                    }, 5000);
                                </script>
                            ";
        }
        // line 44
        echo "                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Dashboard</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\" style=\"min-height: 500px;\">
                            
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 60
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 61
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 65
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 66
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 69,  120 => 68,  116 => 67,  111 => 66,  109 => 65,  103 => 61,  101 => 60,  83 => 44,  72 => 36,  66 => 32,  63 => 31,  52 => 23,  46 => 19,  44 => 18,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

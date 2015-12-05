<?php

/* LoginLoginBundle:Default:signinV2.html.twig */
class __TwigTemplate_88c10f5990bd07c44e0823ff4d353369800113f82c46a0d8ff9fa2d59894f846 extends Twig_Template
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
        $this->env->loadTemplate("LoginLoginBundle:Default:head_v2.html.twig")->display($context);
        echo "\t\t

    <body>


        <!-- Navigation -->
        ";
        // line 10
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "        <!-- Second Menu -->\t\t
        ";
        // line 12
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 13
        echo "
        <section id=\"intro\" class=\"intro-section\">
            <div id=\"cont\" class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                       
                        ";
        // line 19
        if (array_key_exists("errormsg", $context)) {
            // line 20
            echo "                            <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                    &times;
                                </button>
                                <center> <strong>";
            // line 24
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
        // line 32
        echo "                        ";
        if (array_key_exists("successmsg", $context)) {
            // line 33
            echo "                            <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                    &times;
                                </button>
                                <center> <strong>";
            // line 37
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
        // line 45
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    </div>
                    <div class=\"col-md-4\">
                        <h1 class =\"page-header\">Sign In</h1>
                    </div>
                    <div class=\"col-md-4\">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 62
        $this->env->loadTemplate("LoginLoginBundle:Default:signinform.html.twig")->display($context);
        // line 63
        echo "                        <!-- /.panel-default -->
                    </div>
                    <div class=\"col-md-4\">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Page Wrapper -->

        <div class=\"container-fluid hidden-lg hidden-md\">
            <div class=\"row\">
                <div class=\"col-lg-12\" style=\"height: 200px;z-index: -1;\">

                </div>
            </div>
        </div>

        <!-- /#page-wrapper -->
        <section id=\"about\" class=\"about-section\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\" style=\"padding-left: 0;padding-right: 0\">
                        ";
        // line 88
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 89
        echo "                    </div>
                </div>
            </div>
        </section>

        ";
        // line 94
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 95
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signinV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 98,  155 => 97,  151 => 96,  146 => 95,  144 => 94,  137 => 89,  135 => 88,  108 => 63,  106 => 62,  87 => 45,  76 => 37,  70 => 33,  67 => 32,  56 => 24,  50 => 20,  48 => 19,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

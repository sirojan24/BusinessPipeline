<?php

/* LoginLoginBundle:Default:manageUsersV2.html.twig */
class __TwigTemplate_86eecf686d9795ec66ee3e7e8ecc851d83e64f250fec9de01483be711abf7434 extends Twig_Template
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
                            <h1 class = \"page-header\">Manage Users</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 54
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Regular")) {
            // line 55
            echo "                                ";
            $this->env->loadTemplate("LoginLoginBundle:Default:manageUsersTable.html.twig")->display($context);
            // line 56
            echo "                            ";
        } else {
            echo "    
                                ";
            // line 57
            $this->env->loadTemplate("LoginLoginBundle:Default:adminManageUsersTable.html.twig")->display($context);
            // line 58
            echo "                            ";
        }
        // line 59
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 64
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 65
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 69
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 70
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:manageUsersV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 73,  136 => 72,  132 => 71,  127 => 70,  125 => 69,  119 => 65,  117 => 64,  110 => 59,  107 => 58,  105 => 57,  100 => 56,  97 => 55,  95 => 54,  83 => 44,  72 => 36,  66 => 32,  63 => 31,  52 => 23,  46 => 19,  44 => 18,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

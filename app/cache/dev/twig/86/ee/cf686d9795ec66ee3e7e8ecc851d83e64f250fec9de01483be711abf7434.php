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
        echo "            <br>
            <div>
                ";
        // line 14
        if (array_key_exists("errormsg", $context)) {
            // line 15
            echo "                    <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times;
                        </button>
                        <center> <strong>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                    </div>
                    <script> window.setTimeout(function () {
                            \$(\"#successmsg\").alert('close');
                        }, 5000);</script>
                    ";
        }
        // line 25
        echo "                    ";
        if (array_key_exists("successmsg", $context)) {
            // line 26
            echo "                    <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times;
                        </button>
                        <center> <strong>";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                    </div>
                    <script> window.setTimeout(function () {
                            \$(\"#errormsg\").alert('close');
                        }, 5000);</script>
                    ";
        }
        // line 36
        echo "
            </div><!-- /.page-header -->

            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Manage Users</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 50
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Regular")) {
            // line 51
            echo "                                ";
            $this->env->loadTemplate("LoginLoginBundle:Default:manageUsersTable.html.twig")->display($context);
            // line 52
            echo "                            ";
        } else {
            echo "    
                                ";
            // line 53
            $this->env->loadTemplate("LoginLoginBundle:Default:adminManageUsersTable.html.twig")->display($context);
            // line 54
            echo "                            ";
        }
        // line 55
        echo "                        </div>
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
        return "LoginLoginBundle:Default:manageUsersV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 69,  132 => 68,  128 => 67,  123 => 66,  121 => 65,  115 => 61,  113 => 60,  106 => 55,  103 => 54,  101 => 53,  96 => 52,  93 => 51,  91 => 50,  75 => 36,  66 => 30,  60 => 26,  57 => 25,  48 => 19,  42 => 15,  40 => 14,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

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
                            <h1 class = \"page-header\">Manage Users</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 25
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Regular")) {
            // line 26
            echo "                                ";
            $this->env->loadTemplate("LoginLoginBundle:Default:manageUsersTable.html.twig")->display($context);
            // line 27
            echo "                            ";
        } else {
            echo "    
                                ";
            // line 28
            $this->env->loadTemplate("LoginLoginBundle:Default:adminManageUsersTable.html.twig")->display($context);
            // line 29
            echo "                            ";
        }
        // line 30
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 35
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 36
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 40
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 41
        echo "        <script src=\"";
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
        return "LoginLoginBundle:Default:manageUsersV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 44,  92 => 43,  88 => 42,  83 => 41,  81 => 40,  75 => 36,  73 => 35,  66 => 30,  63 => 29,  61 => 28,  56 => 27,  53 => 26,  51 => 25,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

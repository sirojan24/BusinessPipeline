<?php

/* LoginLoginBundle:Default:forgetPassword.html.twig */
class __TwigTemplate_5b21bd3acd35438dad202d018d5418598d555f4dbfa1d28911c84ffa91b5a3ca extends Twig_Template
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

\t\t";
        // line 4
        $this->env->loadTemplate("LoginLoginBundle:Default:head_v2.html.twig")->display($context);
        echo "\t\t

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
\t";
        // line 11
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 12
        echo "\t\t<!-- Second Menu -->\t\t
\t";
        // line 13
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 14
        echo "
        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    </div>
                    <div class=\"col-md-4\">
                        <h1 class =\"page-header\">Retrieve password</h1>
                    </div>
                    <div class=\"col-md-4\">
                    </div>
\t\t<!-- /.col-lg-12 -->
\t\t</div>
                <!-- /.row -->
\t\t<div class=\"row\">
                    <div class=\"col-md-4\">
                    </div>
                    <div class=\"col-md-4\">
\t\t\t\t\t\t
                            ";
        // line 34
        $this->env->loadTemplate("LoginLoginBundle:Default:forgetPasswordform.html.twig")->display($context);
        // line 35
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- /.panel-default -->
                    </div>
                    <div class=\"col-md-4\">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
\t\t
        <!-- /#page-wrapper -->
\t\t
\t";
        // line 49
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 50
        echo "
    </div>
    <!-- /#wrapper -->

    ";
        // line 54
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 55
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
\t\t
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:forgetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 58,  100 => 57,  96 => 56,  91 => 55,  89 => 54,  83 => 50,  81 => 49,  65 => 35,  63 => 34,  41 => 14,  39 => 13,  36 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }
}

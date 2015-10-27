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

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

        <!-- Navigation -->
\t";
        // line 9
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 10
        echo "\t\t<!-- Second Menu -->\t\t
\t";
        // line 11
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 12
        echo "        <section id=\"intro\" class=\"intro-section\">
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
                        ";
        // line 29
        $this->env->loadTemplate("LoginLoginBundle:Default:forgetPasswordform.html.twig")->display($context);
        // line 30
        echo "                    </div>
                    <div class=\"col-md-4\">
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
                    
        <div class=\"container-fluid hidden-lg hidden-md\">
            <div class=\"row\">
                    <div class=\"col-lg-12\" style=\"height: 200px;z-index: -1;\">
                        
                    </div>
            </div>
        </div>
                    
        <section id=\"about\" class=\"about-section\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\" style=\"padding-left: 0;padding-right: 0\">
                        ";
        // line 52
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 53
        echo "                    </div>
                </div>
            </div>
        </section>
\t


        ";
        // line 60
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 61
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 64
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
        return array (  110 => 64,  106 => 63,  102 => 62,  97 => 61,  95 => 60,  86 => 53,  84 => 52,  60 => 30,  58 => 29,  39 => 12,  37 => 11,  34 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}

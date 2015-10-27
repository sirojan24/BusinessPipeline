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

\t\t";
        // line 4
        $this->env->loadTemplate("LoginLoginBundle:Default:head_v2.html.twig")->display($context);
        echo "\t\t
                
<body>
    
    
        <!-- Navigation -->
\t";
        // line 10
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "\t\t<!-- Second Menu -->\t\t
\t";
        // line 12
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 13
        echo "
    <section id=\"intro\" class=\"intro-section\">
        <div id=\"cont\" class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    </div>
                    <div class=\"col-md-4\">
                        <h1 class =\"page-header\">Sign In</h1>
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
        // line 31
        $this->env->loadTemplate("LoginLoginBundle:Default:signinform.html.twig")->display($context);
        // line 32
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
    \t\t
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
        // line 57
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 58
        echo "                    </div>
                </div>
            </div>
    </section>

    ";
        // line 63
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 64
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
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
        return array (  113 => 67,  109 => 66,  105 => 65,  100 => 64,  98 => 63,  91 => 58,  89 => 57,  62 => 32,  60 => 31,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

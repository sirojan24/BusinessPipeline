<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_af2f92954d3a0aa7fcec0030bd790c81b647e9dba88209833f490f1db102c257 extends Twig_Template
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
                    <div class=\"col-lg-12\">
                        <h1><class=\"page-header\">Start your free trail - Sign Up</h1>
                    </div>
\t\t\t\t\t<!-- /.col-lg-12 -->
\t\t\t\t</div>
\t\t\t    <!-- /.row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t
                                            ";
        // line 28
        $this->env->loadTemplate("LoginLoginBundle:Default:signupform.html.twig")->display($context);
        // line 29
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- /.panel-default -->
\t\t\t\t\t</div>
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
        // line 41
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 42
        echo "
    </div>
    <!-- /#wrapper -->

    ";
        // line 46
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 47
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
\t\t
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 50,  92 => 49,  88 => 48,  83 => 47,  81 => 46,  75 => 42,  73 => 41,  59 => 29,  57 => 28,  41 => 14,  39 => 13,  36 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }
}
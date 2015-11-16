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
        $this->env->loadTemplate("AppBundle:Default:head.html.twig")->display($context);
        echo "\t\t

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
\t";
        // line 11
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 12
        echo "\t\t<!-- Second Menu -->\t\t
\t";
        // line 13
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 14
        echo "        
        <div class=\"modal fade\" id=\"termsModal\">
            <div class=\"modal-dialog\" style=\"overflow:scroll; height:90%;width:90%\" >
                <div class=\"modal-content\" >
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\">Terms of Service</h4>
                    </div>
                    <div class=\"modal-body\">
                       ";
        // line 23
        $this->env->loadTemplate("LoginLoginBundle:Default:termsofServiceContent.html.twig")->display($context);
        // line 24
        echo "                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
                        
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-2\">
                    </div>
                    <div class=\"col-lg-8\">
                        <h1><class=\"page-header\">Start your free trail - Sign Up</h1>
                    </div>
                    <div class=\"col-lg-2\">
                    </div>
\t\t\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t\t    <!-- /.row -->
\t\t\t\t<div class=\"row\">
                                    <div class=\"col-lg-2\">
                                    </div>    
                                    <div class=\"col-lg-8\">
\t\t\t\t\t\t
                                            ";
        // line 52
        $this->env->loadTemplate("LoginLoginBundle:Default:signupform.html.twig")->display($context);
        // line 53
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- /.panel-default -->
                                    </div>
                                    <div class=\"col-lg-2\">
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
        // line 67
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 68
        echo "
    </div>
    <!-- /#wrapper -->

     ";
        // line 72
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 73
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 76
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
        return array (  125 => 76,  121 => 75,  117 => 74,  112 => 73,  110 => 72,  104 => 68,  102 => 67,  86 => 53,  84 => 52,  54 => 24,  52 => 23,  41 => 14,  39 => 13,  36 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }
}

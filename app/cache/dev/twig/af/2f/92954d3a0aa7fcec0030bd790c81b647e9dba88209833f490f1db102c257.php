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


        <!-- Navigation -->
        ";
        // line 10
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "        <!-- Second Menu -->\t\t
        ";
        // line 12
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        echo "\t\t


    <div id=\"wrapper\">

        
        <div class=\"modal fade\" id=\"termsModal\">
            <div class=\"modal-dialog\" style=\"overflow:scroll; height:90%;width:90%\" >
                <div class=\"modal-content\" >
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\">Terms of Service</h4>
                    </div>
                    <div class=\"modal-body\">
                       ";
        // line 26
        $this->env->loadTemplate("LoginLoginBundle:Default:termsofServiceContent.html.twig")->display($context);
        // line 27
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
        // line 55
        $this->env->loadTemplate("LoginLoginBundle:Default:signupform.html.twig")->display($context);
        // line 56
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
        // line 70
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 71
        echo "
    </div>
    <!-- /#wrapper -->

     ";
        // line 75
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 76
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 79
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
        return array (  128 => 79,  124 => 78,  120 => 77,  115 => 76,  113 => 75,  107 => 71,  105 => 70,  89 => 56,  87 => 55,  57 => 27,  55 => 26,  38 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

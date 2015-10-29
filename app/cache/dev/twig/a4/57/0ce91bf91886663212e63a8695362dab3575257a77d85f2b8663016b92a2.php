<?php

/* LoginLoginBundle:Default:termsofService.html.twig */
class __TwigTemplate_a4570ce91bf91886663212e63a8695362dab3575257a77d85f2b8663016b92a2 extends Twig_Template
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
        echo "\t

    <body>

        

            ";
        // line 10
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "            <!-- Second Menu -->\t\t
            ";
        // line 12
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 13
        echo "
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class=\"page-header\">Terms of Service</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    ";
        // line 22
        $this->env->loadTemplate("LoginLoginBundle:Default:termsofServiceContent.html.twig")->display($context);
        // line 23
        echo "                </div>
                <!-- /.container-fluid -->
            </div>
            <br><br><br><br>
            <section id=\"about\" class=\"about-section\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\" style=\"padding-left: 0;padding-right: 0\">
                            ";
        // line 31
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 32
        echo "                        </div>
                    </div>
                </div>
            </section>

        
        <!-- /#wrapper -->

        ";
        // line 40
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
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
        return "LoginLoginBundle:Default:termsofService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  86 => 43,  82 => 42,  77 => 41,  75 => 40,  65 => 32,  63 => 31,  53 => 23,  51 => 22,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

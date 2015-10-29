<?php

/* LoginLoginBundle:Default:privacy.html.twig */
class __TwigTemplate_8223c8a2efb9c6cd70af6256441524ba3b9517504d4bed0d2c5e1cd78aa51209 extends Twig_Template
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

            ";
        // line 15
        $this->env->loadTemplate("LoginLoginBundle:Default:privacyContent.html.twig")->display($context);
        // line 16
        echo "            
            <br><br><br><br>
            <section id=\"about\" class=\"about-section\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\" style=\"padding-left: 0;padding-right: 0\">
                            ";
        // line 22
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 23
        echo "                        </div>
                    </div>
                </div>
            </section>

        
        <!-- /#wrapper -->

        ";
        // line 31
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:privacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  77 => 34,  73 => 33,  68 => 32,  66 => 31,  56 => 23,  54 => 22,  46 => 16,  44 => 15,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

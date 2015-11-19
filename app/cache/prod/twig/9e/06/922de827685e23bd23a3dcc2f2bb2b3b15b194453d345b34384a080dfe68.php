<?php

/* LoginLoginBundle:Default:landing.html.twig */
class __TwigTemplate_9e06922de827685e23bd23a3dcc2f2bb2b3b15b194453d345b34384a080dfe68 extends Twig_Template
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
        // line 3
        $this->env->loadTemplate("LoginLoginBundle:Default:head_v2.html.twig")->display($context);
        echo "\t
<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

        <!-- Navigation -->
\t";
        // line 7
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 8
        echo "\t\t<!-- Second Menu -->\t\t
\t";
        // line 9
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 10
        echo "        <section id=\"intro\" class=\"intro-section\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                    </div>
                    <div class=\"col-md-4\">
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
                        
                    </div>
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
        // line 49
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 50
        echo "                    </div>
                </div>
            </div>
        </section>
        ";
        // line 54
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 55
        echo "
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 55,  86 => 54,  80 => 50,  78 => 49,  37 => 10,  35 => 9,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}

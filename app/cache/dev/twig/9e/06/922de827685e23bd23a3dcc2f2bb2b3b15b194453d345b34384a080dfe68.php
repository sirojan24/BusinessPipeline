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
<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        ";
        // line 9
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 10
        echo "\t\t<!-- Second Menu -->\t\t
\t\t<!-- <?php include(\"secondmenu.php\"); ?> -->

     <!-- Page Content -->\t\t
\t<div id=\"page-wrapper\">
\t\t<div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            
                </div>
                    
        </div>
        <!-- /#page-wrapper -->
\t";
        // line 29
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 30
        echo "
    </div>
    <!-- /#wrapper -->
        ";
        // line 33
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 34
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
        return array (  64 => 34,  62 => 33,  57 => 30,  55 => 29,  34 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }
}

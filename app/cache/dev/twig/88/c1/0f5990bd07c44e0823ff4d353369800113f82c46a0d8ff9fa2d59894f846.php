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

    ";
        // line 4
        $this->env->loadTemplate("LoginLoginBundle:Default:head_v2.html.twig")->display($context);
        echo "\t
    ";
        // line 5
        $this->env->loadTemplate("LoginLoginBundle:Default:scripts.html.twig")->display($context);
        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/jquery-1.12.0.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/animate.css"), "html", null, true);
        echo "\">
    <script>
        \$( document ).ready(function() {
            ";
        // line 17
        if (array_key_exists("errormsg", $context)) {
            // line 18
            echo "                \$.notify({
                        // options
                        message: '";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "'
                    }, {
                        // settings
                        type: 'danger'
                    });
            ";
        }
        // line 26
        echo "            ";
        if (array_key_exists("successmsg", $context)) {
            // line 27
            echo "                \$.notify({
                        // options
                        message: '";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "'
                    }, {
                        // settings
                        type: 'success'
                    });
            ";
        }
        // line 35
        echo "        });
    </script>
<body>


    <!-- Navigation -->
    ";
        // line 41
        $this->env->loadTemplate("LoginLoginBundle:Default:navigation.html.twig")->display($context);
        // line 42
        echo "    <!-- Second Menu -->\t\t
    ";
        // line 43
        $this->env->loadTemplate("LoginLoginBundle:Default:secondmenu.html.twig")->display($context);
        // line 44
        echo "
    <section id=\"intro\" class=\"intro-section\">
        <div id=\"cont\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4\">
                    <h1 class =\"page-header\">Sign In</h1>
                </div>
                <div class=\"col-md-4\">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-md-4\">
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 67
        $this->env->loadTemplate("LoginLoginBundle:Default:signinform.html.twig")->display($context);
        // line 68
        echo "                    <!-- /.panel-default -->
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
        // line 93
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 94
        echo "                </div>
            </div>
        </div>
    </section>


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
        return array (  165 => 94,  163 => 93,  136 => 68,  134 => 67,  109 => 44,  107 => 43,  104 => 42,  102 => 41,  94 => 35,  85 => 29,  81 => 27,  78 => 26,  69 => 20,  65 => 18,  63 => 17,  57 => 14,  53 => 13,  48 => 11,  43 => 9,  39 => 8,  35 => 7,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}

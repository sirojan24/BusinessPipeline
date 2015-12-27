<?php

/* TaskBundle:Default:manageTasks.html.twig */
class __TwigTemplate_23bf04a5b0510671125cc1ba38cb92cf3afb863dbaa16c6e81e574c34c45fbd0 extends Twig_Template
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
        $this->env->loadTemplate("AppBundle:Default:head.html.twig")->display($context);
        // line 5
        echo "
    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            ";
        // line 11
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 12
        echo "

            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 19
        if (array_key_exists("errormsg", $context)) {
            // line 20
            echo "                                <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <center> <strong>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                                </div>
                                <script> 
                                    window.setTimeout(function () {
                                        \$(\"#successmsg\").alert('close');
                                    }, 5000);
                                </script>
                            ";
        }
        // line 32
        echo "                            ";
        if (array_key_exists("successmsg", $context)) {
            // line 33
            echo "                                <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <center> <strong>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                                </div>
                                <script> 
                                    window.setTimeout(function () {
                                        \$(\"#errormsg\").alert('close');
                                    }, 5000);
                                </script>
                            ";
        }
        // line 45
        echo "                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Manage Tasks</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 55
        $this->env->loadTemplate("TaskBundle:Default:tasksTable.html.twig")->display($context);
        // line 56
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 61
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 62
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 66
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 67
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Default:manageTasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 70,  124 => 69,  120 => 68,  115 => 67,  113 => 66,  107 => 62,  105 => 61,  98 => 56,  96 => 55,  84 => 45,  73 => 37,  67 => 33,  64 => 32,  53 => 24,  47 => 20,  45 => 19,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

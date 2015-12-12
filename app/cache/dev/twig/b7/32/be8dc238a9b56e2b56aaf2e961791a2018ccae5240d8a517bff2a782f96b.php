<?php

/* LoginLoginBundle:Default:manageUsersV2.html.twig */
class __TwigTemplate_b732be8dc238a9b56e2b56aaf2e961791a2018ccae5240d8a517bff2a782f96b extends Twig_Template
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
                ";
        // line 15
        $this->env->loadTemplate("NotesBundle:Default:notesModal.html.twig")->display($context);
        // line 16
        echo "                <div class=\"container-fluid\">
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
                            <h1 class = \"page-header\">Manage Users</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 55
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Regular")) {
            // line 56
            echo "                                ";
            $this->env->loadTemplate("LoginLoginBundle:Default:manageUsersTable.html.twig")->display($context);
            // line 57
            echo "                            ";
        } else {
            echo "    
                                ";
            // line 58
            $this->env->loadTemplate("LoginLoginBundle:Default:adminManageUsersTable.html.twig")->display($context);
            // line 59
            echo "                            ";
        }
        // line 60
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 65
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 66
        echo "
        </div>
        <!-- /#wrapper -->
        ";
        // line 69
        $this->env->loadTemplate("LoginLoginBundle:Default:notesModalScript.html.twig")->display($context);
        // line 70
        echo "        ";
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 71
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-notes.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:manageUsersV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 76,  146 => 74,  142 => 73,  138 => 72,  133 => 71,  130 => 70,  128 => 69,  123 => 66,  121 => 65,  114 => 60,  111 => 59,  109 => 58,  104 => 57,  101 => 56,  99 => 55,  87 => 45,  76 => 37,  70 => 33,  67 => 32,  56 => 24,  50 => 20,  48 => 19,  43 => 16,  41 => 15,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

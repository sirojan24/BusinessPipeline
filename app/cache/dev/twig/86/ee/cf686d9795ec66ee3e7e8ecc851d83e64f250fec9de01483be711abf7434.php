<?php

/* LoginLoginBundle:Default:manageUsersV2.html.twig */
class __TwigTemplate_86eecf686d9795ec66ee3e7e8ecc851d83e64f250fec9de01483be711abf7434 extends Twig_Template
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
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Manage Users</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 30
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Regular")) {
            // line 31
            echo "                                ";
            $this->env->loadTemplate("LoginLoginBundle:Default:manageUsersTable.html.twig")->display($context);
            // line 32
            echo "                            ";
        } else {
            echo "    
                                ";
            // line 33
            $this->env->loadTemplate("LoginLoginBundle:Default:adminManageUsersTable.html.twig")->display($context);
            // line 34
            echo "                            ";
        }
        // line 35
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 40
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 41
        echo "
        </div>
        <!-- /#wrapper -->
        ";
        // line 44
        $this->env->loadTemplate("LoginLoginBundle:Default:notesModalScript.html.twig")->display($context);
        // line 45
        echo "        ";
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-notes.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/jquery-1.12.0.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/animate.css"), "html", null, true);
        echo "\">
        <script>
            \$( document ).ready(function() {
                ";
        // line 58
        if (array_key_exists("errormsg", $context)) {
            // line 59
            echo "                    \$.notify({
                            // options
                            message: '";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "'
                        }, {
                            // settings
                            type: 'danger'
                        });
                ";
        }
        // line 67
        echo "                ";
        if (array_key_exists("successmsg", $context)) {
            // line 68
            echo "                    \$.notify({
                            // options
                            message: '";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "'
                        }, {
                            // settings
                            type: 'success'
                        });
                ";
        }
        // line 76
        echo "            });
        </script>
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
        return array (  161 => 76,  152 => 70,  148 => 68,  145 => 67,  136 => 61,  132 => 59,  130 => 58,  124 => 55,  120 => 54,  115 => 52,  111 => 51,  106 => 49,  102 => 48,  98 => 47,  93 => 46,  90 => 45,  88 => 44,  83 => 41,  81 => 40,  74 => 35,  71 => 34,  69 => 33,  64 => 32,  61 => 31,  59 => 30,  43 => 16,  41 => 15,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

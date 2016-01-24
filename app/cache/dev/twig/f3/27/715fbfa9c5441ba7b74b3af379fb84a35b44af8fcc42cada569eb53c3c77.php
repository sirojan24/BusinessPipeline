<?php

/* ContactsContactsBundle:Default:manageContactV2.html.twig */
class __TwigTemplate_f327715fbfa9c5441ba7b74b3af379fb84a35b44af8fcc42cada569eb53c3c77 extends Twig_Template
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
        // line 16
        $this->env->loadTemplate("NotesBundle:Default:notesModal.html.twig")->display($context);
        // line 17
        echo "                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Manage Contacts</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 31
        $this->env->loadTemplate("ContactsContactsBundle:Default:contactTable.html.twig")->display($context);
        // line 32
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 37
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 38
        echo "
        </div>
        <!-- /#wrapper -->
        ";
        // line 41
        $this->env->loadTemplate("ContactsContactsBundle:Default:notesModalScript.html.twig")->display($context);
        // line 42
        echo "        ";
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 43
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/jquery-1.12.0.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/animate.css"), "html", null, true);
        echo "\">
        <script>
            \$( document ).ready(function() {
                ";
        // line 54
        if (array_key_exists("errormsg", $context)) {
            // line 55
            echo "                    \$.notify({
                            // options
                            message: '";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "'
                        }, {
                            // settings
                            type: 'danger'
                        });
                ";
        }
        // line 63
        echo "                ";
        if (array_key_exists("successmsg", $context)) {
            // line 64
            echo "                    \$.notify({
                            // options
                            message: '";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "'
                        }, {
                            // settings
                            type: 'success'
                        });
                ";
        }
        // line 72
        echo "            });
        </script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:manageContactV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  136 => 66,  132 => 64,  129 => 63,  120 => 57,  116 => 55,  114 => 54,  108 => 51,  104 => 50,  99 => 48,  94 => 46,  90 => 45,  86 => 44,  81 => 43,  78 => 42,  76 => 41,  71 => 38,  69 => 37,  62 => 32,  60 => 31,  44 => 17,  42 => 16,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

<?php

/* NotesBundle:Default:manageNotesV2.html.twig */
class __TwigTemplate_586bad800d9fb5b46bc0739c75b0292a06125c06ce036c07bc2fce2ba5bb972e extends Twig_Template
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
                            ";
        // line 20
        if (array_key_exists("errormsg", $context)) {
            // line 21
            echo "                                <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <center> <strong>";
            // line 25
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
        // line 33
        echo "                            ";
        if (array_key_exists("successmsg", $context)) {
            // line 34
            echo "                                <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                    <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <center> <strong>";
            // line 38
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
        // line 46
        echo "                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Manage Notes</h1>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 56
        $this->env->loadTemplate("NotesBundle:Default:notesTable.html.twig")->display($context);
        // line 57
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 62
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 63
        echo "
        </div>
        <!-- /#wrapper -->
        ";
        // line 66
        $this->env->loadTemplate("ContactsContactsBundle:Default:notesModalScript.html.twig")->display($context);
        // line 67
        echo "        ";
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 68
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "NotesBundle:Default:manageNotesV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 71,  130 => 70,  126 => 69,  121 => 68,  118 => 67,  116 => 66,  111 => 63,  109 => 62,  102 => 57,  100 => 56,  88 => 46,  77 => 38,  71 => 34,  68 => 33,  57 => 25,  51 => 21,  49 => 20,  44 => 17,  42 => 16,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

<?php

/* OpportunityBundle:Default:manageOpportunityV2.html.twig */
class __TwigTemplate_3b8d06fcf4ddf67f5fd784cfe258b2c551798bbe303781973d28951d81c3597b extends Twig_Template
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
\t";
        // line 11
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 12
        echo "\t\t

            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\">
                ";
        // line 16
        $this->env->loadTemplate("NotesBundle:Default:notesModal.html.twig")->display($context);
        // line 17
        echo "\t\t<div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Manage Deals</h1>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 25
        $this->env->loadTemplate("OpportunityBundle:Default:opportunityTable.html.twig")->display($context);
        // line 26
        echo "                        </div>
                    </div>
                </div>
            </div>
            
    ";
        // line 31
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 32
        echo "
    </div>
    <!-- /#wrapper -->
    ";
        // line 35
        $this->env->loadTemplate("ContactsContactsBundle:Default:notesModalScript.html.twig")->display($context);
        // line 36
        echo "    ";
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/notify/animate.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
    
    <script>
            \$( document ).ready(function() {
                ";
        // line 46
        if (array_key_exists("errormsg", $context)) {
            // line 47
            echo "                    \$.notify({
                            // options
                            message: '";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "'
                        }, {
                            // settings
                            type: 'danger'
                        });
                ";
        }
        // line 55
        echo "                ";
        if (array_key_exists("successmsg", $context)) {
            // line 56
            echo "                    \$.notify({
                            // options
                            message: '";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "'
                        }, {
                            // settings
                            type: 'success'
                        });
                ";
        }
        // line 64
        echo "            });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:manageOpportunityV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 64,  122 => 58,  118 => 56,  115 => 55,  106 => 49,  102 => 47,  100 => 46,  93 => 42,  89 => 41,  85 => 40,  80 => 38,  75 => 37,  72 => 36,  70 => 35,  65 => 32,  63 => 31,  56 => 26,  54 => 25,  44 => 17,  42 => 16,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

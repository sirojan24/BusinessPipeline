<?php

/* SettingsBundle:Default:pipelinesetup.html.twig */
class __TwigTemplate_66424e5ffcbe61ef157d058a48b419d84e3845746079d0e2e333424a6145592c extends Twig_Template
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
        echo "\t

    <body>
    
        <div id=\"wrapper\">

            ";
        // line 10
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "
            <!-- Page Wrapper -->
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class=\"page-header\">Pipeline Setup</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class=\"row\" style=\"height:1900px\">
                        <div class=\"col-lg-12\">

                            <!-- Help File -->
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-body\">
                                            <!-- Nav tabs -->
                                            <ul class=\"nav nav-tabs\">
                                                <li class=\"active\"><a href=\"#users\" data-toggle=\"tab\">Users</a>
                                                </li>\t\t\t\t\t\t
                                                <li><a href=\"#accounttype\" data-toggle=\"tab\">Account Type</a>
                                                </li>
                                                <li><a href=\"#pipelinestages\" data-toggle=\"tab\">Pipeline Stages</a>
                                                </li>
                                                <li><a href=\"#producttype\" data-toggle=\"tab\">Product Type</a>
                                                </li>
                                                <li><a href=\"#opportunitysource\" data-toggle=\"tab\">Opportunity Source</a>
                                                </li>\t\t\t\t\t\t
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class=\"tab-content\">

                                                <div class=\"tab-pane fade active in\" id=\"users\">
                                                    <h4>Users</h4>
                                                    ";
        // line 48
        $this->env->loadTemplate("SettingsBundle:User:adminManageUsersTable.html.twig")->display($context);
        // line 49
        echo "                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"tab-pane fade\" id=\"accounttype\">
                                                    <h4>Account Type</h4>
                                                    ";
        // line 52
        $this->env->loadTemplate("SettingsBundle:AccountType:accounttypesTable.html.twig")->display($context);
        // line 53
        echo "                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pipelinestages\">
                                                    <h4>Pipeline Stages</h4>
                                                    ";
        // line 56
        $this->env->loadTemplate("SettingsBundle:Stages:stagesTable.html.twig")->display($context);
        // line 57
        echo "                                                </div>
                                                <div class=\"tab-pane fade\" id=\"producttype\">
                                                    <h4>Product Type</h4>
                                                    ";
        // line 60
        $this->env->loadTemplate("SettingsBundle:ProductType:productTypesTable.html.twig")->display($context);
        // line 61
        echo "                                                </div>
                                                <div class=\"tab-pane fade\" id=\"opportunitysource\">
                                                    <h4>Opportunity Source</h4>
                                                    ";
        // line 64
        $this->env->loadTemplate("SettingsBundle:OpportunitySource:opportunitySourcesTable.html.twig")->display($context);
        // line 65
        echo "                                                </div>\t\t\t\t\t\t\t\t
                                            </div>
                                        </div>
                                        <!-- /.panel-body -->\t\t\t\t\t\t
                                    </div>
                                    <!-- /.panel-default -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <!-- / .Help File -->

                            <!-- /.panel-default -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- /#page-wrapper -->

            ";
        // line 88
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 89
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 93
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 94
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:Default:pipelinesetup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 97,  148 => 96,  144 => 95,  139 => 94,  137 => 93,  131 => 89,  129 => 88,  104 => 65,  102 => 64,  97 => 61,  95 => 60,  90 => 57,  88 => 56,  83 => 53,  81 => 52,  76 => 49,  74 => 48,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

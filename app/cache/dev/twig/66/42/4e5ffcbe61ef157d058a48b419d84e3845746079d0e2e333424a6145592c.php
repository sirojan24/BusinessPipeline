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
                                                </li>\t
                                                <li><a href=\"#partners\" data-toggle=\"tab\">Partners</a>
                                                </li>\t\t\t\t\t\t\t
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

                                                <div class=\"tab-pane fade\" id=\"users\">
                                                    <h4>Users</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"partners\">
                                                    <h4>Partners</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>\t\t\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"tab-pane fade\" id=\"accounttype\">
                                                    <h4>Account Type</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"pipelinestages\">
                                                    <h4>Pipeline Stages</h4>
                                                    ";
        // line 62
        $this->env->loadTemplate("SettingsBundle:Stages:stagesTable.html.twig")->display($context);
        // line 63
        echo "                                                </div>
                                                <div class=\"tab-pane fade\" id=\"producttype\">
                                                    <h4>Product Type</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"opportunitysource\">
                                                    <h4>Opportunity Source</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>\t\t\t\t\t\t\t\t
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
        // line 94
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 95
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 99
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 100
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
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
        return array (  146 => 103,  142 => 102,  138 => 101,  133 => 100,  131 => 99,  125 => 95,  123 => 94,  90 => 63,  88 => 62,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

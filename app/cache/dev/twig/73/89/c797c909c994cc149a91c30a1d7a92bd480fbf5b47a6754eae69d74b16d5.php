<?php

/* webBundle:Default:support.html.twig */
class __TwigTemplate_7389c797c909c994cc149a91c30a1d7a92bd480fbf5b47a6754eae69d74b16d5 extends Twig_Template
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
        echo "\t\t

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
                            <h1 class=\"page-header\">Help & Support Center</h1>
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
                                                <li class=\"active\"><a href=\"#glossary\" data-toggle=\"tab\">Glossary</a>
                                                </li>\t\t\t\t\t\t\t\t
                                                <li><a href=\"#overviewandsetup\" data-toggle=\"tab\">Overview & Set Up</a>
                                                </li>
                                                <li><a href=\"#quickhowto\" data-toggle=\"tab\">Quick How-To's</a>
                                                </li>
                                                <li><a href=\"#dataimport\" data-toggle=\"tab\">Data Import</a>
                                                </li>
                                                <li><a href=\"#tipsandtricks\" data-toggle=\"tab\">Tips & Tricks</a>
                                                </li>
                                                <li><a href=\"#faq\" data-toggle=\"tab\">FAQ</a>
                                                </li>\t\t\t\t\t\t\t\t
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        $this->env->loadTemplate("webBundle:Default:glossary.html.twig")->display($context);
        // line 49
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
                                                <div class=\"tab-pane fade\" id=\"overviewandsetup\">
                                                    <h4>Overview & Set Up</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"quickhowto\">
                                                    <h4>Quick How-To's</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"dataimport\">
                                                    <h4>Data Import</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"tipsandtricks\">
                                                    <h4>Tips & Tricks</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"faq\">
                                                    <h4>FAQ</h4>
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
        // line 92
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 93
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 97
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 98
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "webBundle:Default:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 101,  140 => 100,  136 => 99,  131 => 98,  129 => 97,  123 => 93,  121 => 92,  76 => 49,  74 => 48,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

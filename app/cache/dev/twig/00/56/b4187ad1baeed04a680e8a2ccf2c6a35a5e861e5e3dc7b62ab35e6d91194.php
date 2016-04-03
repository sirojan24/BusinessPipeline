<?php

/* webBundle:Default:dashboard.html.twig */
class __TwigTemplate_0056b4187ad1baeed04a680e8a2ccf2c6a35a5e861e5e3dc7b62ab35e6d91194 extends Twig_Template
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
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/businessPipeline/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <body>

        <div id=\"wrapper\">

            ";
        // line 10
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "
            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class=\"page-header\">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("notes_managenotesV2");
        echo "\">
                                <div class=\"panel panel-primary note-tile\">
                                    <div class=\"panel-heading\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-3\">
                                                <i class=\"fa fa-comments fa-5x\"></i>
                                            </div>
                                            <div class=\"col-xs-9 text-right\">
                                                <div class=\"huge\">Notes</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"panel-footer\">
                                        ";
        // line 38
        if (array_key_exists("notesCount", $context)) {
            // line 39
            echo "                                            <span class=\"pull-left\">You have ";
            echo twig_escape_filter($this->env, (isset($context["notesCount"]) ? $context["notesCount"] : $this->getContext($context, "notesCount")), "html", null, true);
            echo " Notes</span>
                                        ";
        } else {
            // line 41
            echo "                                            <span class=\"pull-left\">You have no Note</span>
                                        ";
        }
        // line 43
        echo "                                        <div class=\"clearfix\"></div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("task_all_open_deal_tasks");
        echo "\">
                                <div class=\"panel panel-yellow task-tile\">
                                    <div class=\"panel-heading\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-3\">
                                                <i class=\"fa fa-tasks fa-5x\"></i>
                                            </div>
                                            <div class=\"col-xs-9 text-right\">
                                                <div class=\"huge\">Tasks</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        ";
        // line 63
        if (array_key_exists("tasksCount", $context)) {
            // line 64
            echo "                                            <span class=\"pull-left\">You have ";
            echo twig_escape_filter($this->env, (isset($context["tasksCount"]) ? $context["tasksCount"] : $this->getContext($context, "tasksCount")), "html", null, true);
            echo " Tasks</span>
                                        ";
        } else {
            // line 66
            echo "                                            <span class=\"pull-left\">You have no Task</span>
                                        ";
        }
        // line 68
        echo "                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunityV2");
        echo "\">
                                <div class=\"panel panel-green deal-tile\">
                                    <div class=\"panel-heading\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-3\">
                                                <i class=\"fa fa-usd fa-5x\"></i>
                                            </div>
                                            <div class=\"col-xs-9 text-right\">
                                                <div class=\"huge\">Deals</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        ";
        // line 87
        if (array_key_exists("opendealCount", $context)) {
            // line 88
            echo "                                            <span class=\"pull-left\">You have ";
            echo twig_escape_filter($this->env, (isset($context["opendealCount"]) ? $context["opendealCount"] : $this->getContext($context, "opendealCount")), "html", null, true);
            echo " Deals</span>
                                        ";
        } else {
            // line 90
            echo "                                            <span class=\"pull-left\">You have no Deal</span>
                                        ";
        }
        // line 92
        echo "
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\">
                                <div class=\"panel panel-info contact-tile\">
                                    <div class=\"panel-heading\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-3\">
                                                <i class=\"fa fa-user fa-5x\"></i>
                                            </div>
                                            <div class=\"col-xs-9 text-right\">
                                                <div class=\"huge\">Contacts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        ";
        // line 112
        if (array_key_exists("contactsCount", $context)) {
            // line 113
            echo "                                            <span class=\"pull-left\">You have ";
            echo twig_escape_filter($this->env, (isset($context["contactsCount"]) ? $context["contactsCount"] : $this->getContext($context, "contactsCount")), "html", null, true);
            echo " Contacts</span>
                                        ";
        } else {
            // line 115
            echo "                                            <span class=\"pull-left\">You have no Contact</span>
                                        ";
        }
        // line 117
        echo "                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->
                    ";
        // line 289
        echo "                    <!-- /.row -->
                </div>
            </div>
            <!-- /#page-wrapper -->

            ";
        // line 294
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 295
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 299
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 300
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>
    ";
        // line 306
        $this->env->loadTemplate("webBundle:Default:donutChartScript.html.twig")->display($context);
        // line 307
        echo "    ";
        $this->env->loadTemplate("webBundle:Default:barChartScript.html.twig")->display($context);
        // line 308
        echo "    ";
        $this->env->loadTemplate("webBundle:Default:dealsByContactBarChartScript.html.twig")->display($context);
        // line 309
        echo "    ";
        $this->env->loadTemplate("webBundle:Default:dealsByUserBarChartScript.html.twig")->display($context);
        // line 310
        echo "    ";
        $this->env->loadTemplate("webBundle:Default:earningAreaChartScript.html.twig")->display($context);
        // line 311
        echo "</html>
";
    }

    public function getTemplateName()
    {
        return "webBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 311,  248 => 310,  245 => 309,  242 => 308,  239 => 307,  237 => 306,  231 => 303,  227 => 302,  223 => 301,  218 => 300,  216 => 299,  210 => 295,  208 => 294,  201 => 289,  192 => 117,  188 => 115,  182 => 113,  180 => 112,  164 => 99,  155 => 92,  151 => 90,  145 => 88,  143 => 87,  127 => 74,  119 => 68,  115 => 66,  109 => 64,  107 => 63,  91 => 50,  82 => 43,  78 => 41,  72 => 39,  70 => 38,  53 => 24,  38 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}

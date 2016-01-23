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

<body>

    <div id=\"wrapper\">

        ";
        // line 10
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 11
        echo "
     <!-- Page Content -->\t\t
\t<div id=\"page-wrapper\">
\t\t<div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-comments fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\">Notes</div>
                                    <div>";
        // line 32
        if (array_key_exists("notesCount", $context)) {
            echo twig_escape_filter($this->env, (isset($context["notesCount"]) ? $context["notesCount"] : $this->getContext($context, "notesCount")), "html", null, true);
        }
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("notes_managenotesV2");
        echo "\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\">View Notes</span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-yellow\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-tasks fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\">Tasks</div>
                                    <div>";
        // line 54
        if (array_key_exists("tasksCount", $context)) {
            echo twig_escape_filter($this->env, (isset($context["tasksCount"]) ? $context["tasksCount"] : $this->getContext($context, "tasksCount")), "html", null, true);
        }
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("task_all_open_deal_tasks");
        echo "\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\">View Tasks</span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-green\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-usd fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\">Deals</div>
                                    <div>";
        // line 76
        if (array_key_exists("opendealCount", $context)) {
            echo twig_escape_filter($this->env, (isset($context["opendealCount"]) ? $context["opendealCount"] : $this->getContext($context, "opendealCount")), "html", null, true);
        }
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunityV2");
        echo "\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\">View Deals</span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-user fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\">Contacts</div>
                                    <div>";
        // line 98
        if (array_key_exists("contactsCount", $context)) {
            echo twig_escape_filter($this->env, (isset($context["contactsCount"]) ? $context["contactsCount"] : $this->getContext($context, "contactsCount")), "html", null, true);
        }
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\">View Details</span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Earning goals & Earings
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        Actions
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                        <li><a href=\"#\">Action</a>
                                        </li>
                                        <li><a href=\"#\">Another action</a>
                                        </li>
                                        <li><a href=\"#\">Something else here</a>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div id=\"earning-area-chart\"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Won Vs Lost Deals
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        Actions
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" id=\"wonLostDealsYearDropDown\" role=\"menu\">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <!-- /.col-lg-4 (nested) -->
                                <div class=\"col-lg-8\">
                                    <div id=\"won-lost-morris-bar-chart\"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Deals By Contacts
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        Actions
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" id=\"dealsByContactsDropDown\" role=\"menu\">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <!-- /.col-lg-4 (nested) -->
                                <div class=\"col-lg-12\">
                                    <div id=\"deals-by-contacts-morris-bar-chart\"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Deals By Users
                            <div class=\"pull-right\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                        Actions
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" id=\"dealsByUsersDropDown\" role=\"menu\">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <!-- /.col-lg-4 (nested) -->
                                <div class=\"col-lg-8\">
                                    <div id=\"deals-by-users-morris-bar-chart\"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                </div>
                <!-- /.col-lg-8 -->
                <div class=\"col-lg-4\">
                    
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Deal By Stages
                        </div>
                        <div class=\"panel-body\">
                            <div id=\"deals-donut-chart\"></div>
                            <a href=\"javascript:showHideWonLostOnDonutChart()\" class=\"btn btn-default btn-block\" id=\"showHideWonLostOnDonutChartTag\">
                                View Won And Lost Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Deal By Sources
                        </div>
                        <div class=\"panel-body\">
                            <div id=\"deal-sources-donut-chart\"></div>
                            <a href=\"javascript:showHideWonLostOnDealSourcesDonutChart()\" class=\"btn btn-default btn-block\" 
                               id=\"showHideWonLostOnDealSourcesDonutChartTag\">View Won And Lost Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Deal By Product Types
                        </div>
                        <div class=\"panel-body\">
                            <div id=\"deal-product-types-donut-chart\"></div>
                            <a href=\"javascript:showHideWonLostOnDealProductTypesDonutChart()\" class=\"btn btn-default btn-block\" 
                               id=\"showHideWonLostOnDealProductTypesDonutChartTag\">View Won And Lost Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
\t\t</div>
        </div>
        <!-- /#page-wrapper -->
\t\t
\t\t ";
        // line 283
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 284
        echo "
    </div>
    <!-- /#wrapper -->

\t";
        // line 288
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 289
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

</body>
";
        // line 295
        $this->env->loadTemplate("webBundle:Default:donutChartScript.html.twig")->display($context);
        // line 296
        $this->env->loadTemplate("webBundle:Default:barChartScript.html.twig")->display($context);
        // line 297
        $this->env->loadTemplate("webBundle:Default:dealsByContactBarChartScript.html.twig")->display($context);
        // line 298
        $this->env->loadTemplate("webBundle:Default:dealsByUserBarChartScript.html.twig")->display($context);
        // line 299
        $this->env->loadTemplate("webBundle:Default:earningAreaChartScript.html.twig")->display($context);
        // line 300
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
        return array (  380 => 300,  378 => 299,  376 => 298,  374 => 297,  372 => 296,  370 => 295,  364 => 292,  360 => 291,  356 => 290,  351 => 289,  349 => 288,  343 => 284,  341 => 283,  157 => 102,  148 => 98,  127 => 80,  118 => 76,  97 => 58,  88 => 54,  67 => 36,  58 => 32,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

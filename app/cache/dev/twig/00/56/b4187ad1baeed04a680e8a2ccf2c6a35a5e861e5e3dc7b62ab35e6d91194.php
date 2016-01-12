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
                                    <div>26</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"#\">
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
                                    <div>12</div>
                                </div>
                            </div>
                        </div>
                        <a href=\"#\">
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
                                    <div>35</div>
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
                                    <div>187</div>
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
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart Example
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
                            <div id=\"morris-area-chart\"></div>
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
                            <i class=\"fa fa-clock-o fa-fw\"></i> Responsive Timeline
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge\"><i class=\"fa fa-check\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                            <p><small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> 11 hours ago via Twitter</small>
                                            </p>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge warning\"><i class=\"fa fa-credit-card\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge danger\"><i class=\"fa fa-bomb\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge info\"><i class=\"fa fa-save\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                            <hr>
                                            <div class=\"btn-group\">
                                                <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                                    <i class=\"fa fa-gear\"></i>  <span class=\"caret\"></span>
                                                </button>
                                                <ul class=\"dropdown-menu\" role=\"menu\">
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
                                </li>
                                <li>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge success\"><i class=\"fa fa-graduation-cap\"></i>
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"list-group\">
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                                    <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                                    <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                                    <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-money fa-fw\"></i> Payment Received
                                    <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
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
                    <!-- /.panel -->
                    <div class=\"chat-panel panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-comments fa-fw\"></i>
                            Chat
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-chevron-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu slidedown\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-check-circle fa-fw\"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-times fa-fw\"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> Away
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <ul class=\"chat\">
                                <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <strong class=\"primary-font\">Jack Sparrow</strong>
                                            <small class=\"pull-right text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <strong class=\"primary-font\">Jack Sparrow</strong>
                                            <small class=\"pull-right text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 15 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
\t\t</div>
        </div>
        <!-- /#page-wrapper -->
\t\t
\t\t ";
        // line 510
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 511
        echo "
    </div>
    <!-- /#wrapper -->

\t";
        // line 515
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 516
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

</body>
";
        // line 522
        $this->env->loadTemplate("webBundle:Default:donutChartScript.html.twig")->display($context);
        // line 523
        $this->env->loadTemplate("webBundle:Default:barChartScript.html.twig")->display($context);
        // line 524
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
        return array (  575 => 524,  573 => 523,  571 => 522,  565 => 519,  561 => 518,  557 => 517,  552 => 516,  550 => 515,  544 => 511,  542 => 510,  131 => 102,  106 => 80,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

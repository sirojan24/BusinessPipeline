<?php

/* LoginLoginBundle:Default:adminManageUsersTable.html.twig */
class __TwigTemplate_26adcd5438edad40909452e447fc0e24459af718369ad11054c0335836d9480d extends Twig_Template
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
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div style=\"padding:25px\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"pull-right\" style=\"padding-right: 40px;\">  
                        <span calss=\"pull-right\">
                            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_login_adduser");
        echo "\" style=\"color: black;\"><i class=\"fa fa-user-plus\"></i> Add Users</a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login_login_importuser");
        echo "\" style=\"color: black;\"><i class=\"fa fa-users\"></i> Import Users</a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
                            <a href=\"javascript:refreshTable()\" style=\"color: black;\"><i class=\"fa fa-refresh fa-lg\" style=\"margin-left: 5px;margin-right: 2px;\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-print fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-file-text-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-file-excel-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-file-pdf-o fa-lg\"></i></a>
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;padding-right: 40px;\">
                        <table id=\"table\"
                               data-toggle=\"table\"
                               data-detail-view=\"true\"
                               data-search=\"true\"
                               data-page-size=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["manageview"]) ? $context["manageview"] : $this->getContext($context, "manageview")), "html", null, true);
        echo "\"
                               data-page-list=\"[10,25,50]\"
                               data-pagination=\"true\"
                               data-show-columns=\"true\"
                               data-detail-formatter=\"detailFormatter\"
                               data-row-style=\"rowStyle\">
                            <thead>
                                <tr>
                                    <th data-field=\"state\" data-checkbox=\"true\"></th>
                                    <th data-field=\"first_name\" data-sortable=\"true\">First Name</th>
                                    <th data-field=\"last_name\" data-sortable=\"true\">Last Name</th>
                                    <th data-field=\"username\" data-sortable=\"true\">Username</th>
                                    <th data-field=\"open_deal\" data-sortable=\"true\">Open <br>Deals</th>
                                    <th data-field=\"projected_revenue\" data-sortable=\"true\">Projected<br> Revenue</th>
                                    <th data-field=\"weighted_forecast\" data-sortable=\"true\">Weighted<br> Forecast</th>
                                    <th data-field=\"won_deals\" data-sortable=\"true\">Won<br> Deals</th>
                                    <th data-field=\"lost_deals\" data-sortable=\"true\">Lost<br> Deals</th>
                                    <th data-field=\"user_status\" data-sortable=\"true\">User<br> Status</th>
                                    <th data-field=\"user_level\" data-sortable=\"true\">User<br> Level</th>
                                    <th data-field=\"action\">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        // line 70
        $this->env->loadTemplate("LoginLoginBundle:Default:adminManageUserTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:adminManageUsersTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 70,  66 => 40,  35 => 12,  29 => 9,  19 => 1,);
    }
}

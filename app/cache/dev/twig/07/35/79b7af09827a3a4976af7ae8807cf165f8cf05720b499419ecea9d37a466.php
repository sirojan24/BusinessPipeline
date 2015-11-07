<?php

/* LoginLoginBundle:Default:manageUsersTable.html.twig */
class __TwigTemplate_073579b7af09827a3a4976af7ae8807cf165f8cf05720b499419ecea9d37a466 extends Twig_Template
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
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;\">
                        <table id=\"table\"
                               data-toggle=\"table\"
                               data-detail-view=\"true\"
                               data-search=\"true\"
                               data-page-size=\"25\"
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
                                    <th data-field=\"action\">Take Action</th>
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
        // line 44
        $this->env->loadTemplate("LoginLoginBundle:Default:manageUserTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:manageUsersTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 44,  19 => 1,);
    }
}

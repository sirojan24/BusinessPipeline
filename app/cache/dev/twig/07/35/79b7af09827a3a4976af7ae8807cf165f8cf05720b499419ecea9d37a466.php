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
        echo "<div id=\"toolbar\">
    <button id=\"button\" class=\"btn btn-default\">append</button>
</div>
<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div style=\"padding:25px\">
            <table id=\"table\"
                   data-toggle=\"table\"
                   data-toolbar=\"#toolbar\"
                   data-height=\"460\"
                   data-detail-view=\"true\"
                   data-search=\"true\"
                   data-page-size=\"25\"
                   data-show-refresh=\"true\"
                   data-show-pagination-switch=\"true\"
                   data-pagination=\"true\"
                   data-show-export=\"true\"
                   data-show-columns=\"true\"
                   data-sort-name=\"price\"
                   data-sort-order=\"desc\"
                   data-detail-formatter=\"detailFormatter\"
                   data-row-style=\"rowStyle\">
                <thead>
                    <tr>
                        <th data-field=\"state\" data-checkbox=\"true\" class=\"col-md-1\"></th>
                        <th data-field=\"first_name\" data-sortable=\"true\" class=\"col-md-1\">First <br>Name</th>
                        <th data-field=\"last_name\" data-sortable=\"true\" class=\"col-md-1\">Last <br>Name</th>
                        <th data-field=\"username\" data-sortable=\"true\" class=\"col-md-1\">Username</th>
                        <th data-field=\"open_deal\" data-sortable=\"true\" class=\"col-md-1\">Open <br>Deals</th>
                        <th data-field=\"projected_revenue\" data-sortable=\"true\" class=\"col-md-1\">Projected<br> Revenue</th>
                        <th data-field=\"weighted_forecast\" data-sortable=\"true\" class=\"col-md-1\">Weighted<br> Forecast</th>
                        <th data-field=\"won_deals\" data-sortable=\"true\" class=\"col-md-1\">Won Deals</th>
                        <th data-field=\"lost_deals\" data-sortable=\"true\" class=\"col-md-1\">Lost Deals</th>
                        <th data-field=\"user_status\" data-sortable=\"true\" class=\"col-md-1\">User Status</th>
                        <th data-field=\"user_status\" data-sortable=\"true\" class=\"col-md-1\">User Level</th>
                        <th data-field=\"action\" class=\"col-md-1\">Action</th>
                    </tr>
                </thead>
            </table>
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

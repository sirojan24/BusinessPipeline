<?php

/* OpportunityBundle:Default:opportunityTable.html.twig */
class __TwigTemplate_28f4df765e5acd9ff021385a275169892737eed1331bdb98dd176d2572f8264b extends Twig_Template
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
                    <div class=\"pull-right\">  
                        <span calss=\"pull-right\">
                            <a href=\"#\" style=\"color: black;\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-search\"></i> Filters</a>
                        </span>
                        ";
        // line 11
        if ((!array_key_exists("contactid", $context))) {
            // line 12
            echo "                        <span calss=\"pull-right\" style=\"margin-left: 10px; border-left: 2px solid #ddd;\">
                            <a href=\"javascript:showHideContacts()\" id=\"showHide\" style=\"color: black;margin-left: 5px;\"><i class=\"fa fa-eye-slash\" id=\"showContacttoggle\"></i></a>
                        </span>
                        ";
        }
        // line 16
        echo "                        <span calss=\"pull-right\" style=\"margin-left: 2px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
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
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:resetTable()\" style=\"color: black;\"><i class=\"fa fa-times fa-lg\"></i></a>
                        </span>
                    </div>
                </div>
            </div>

            ";
        // line 38
        $this->env->loadTemplate("OpportunityBundle:Default:filterModal.html.twig")->display($context);
        // line 39
        echo "            
            <div class=\"row\">
                <div class=\"col-lg-12\" id=\"tableDiv\" style=\"display: none\">
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;\">
                        <table id=\"table\"
                               data-toggle=\"table\"
                               data-detail-view=\"true\"
                               data-search=\"true\"
                               data-page-size=\"";
        // line 47
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
                                    <th data-field=\"name\" data-sortable=\"true\">Name</th>
                                    <th data-field=\"company\" data-sortable=\"true\">Company</th>
                                    <th data-field=\"product_type\" data-sortable=\"true\">Product <br>Type</th>
                                    <th data-field=\"stage\" data-sortable=\"true\">Stage</th>
                                    <th data-field=\"weighted_revenue\" data-sortable=\"true\">Weighted<br> Revenue</th>
                                    <th data-field=\"projected_revenue\" data-sortable=\"true\">Projected<br> Revenue</th>
                                    <th data-field=\"expected_closed_date\" data-sortable=\"true\">Expected Closed<br> Deals</th>
                                    <th data-field=\"owner\" data-sortable=\"true\">Owner</th>
                                    <th data-field=\"action\">Action</th>
                                    <th data-field=\"tags\">tags</th>
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
        // line 76
        $this->env->loadTemplate("OpportunityBundle:Default:opportunityTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:opportunityTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 76,  75 => 47,  65 => 39,  63 => 38,  39 => 16,  33 => 12,  31 => 11,  19 => 1,);
    }
}

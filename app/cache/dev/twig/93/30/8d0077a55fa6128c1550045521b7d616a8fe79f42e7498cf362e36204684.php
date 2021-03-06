<?php

/* OpportunityBundle:Default:opportunityTable.html.twig */
class __TwigTemplate_93308d0077a55fa6128c1550045521b7d616a8fe79f42e7498cf362e36204684 extends Twig_Template
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
        $this->env->loadTemplate("OpportunityBundle:Default:shareUserModal.html.twig")->display($context);
        // line 2
        echo "<div class=\"panel panel-default\">
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
                            <a href=\"javascript:window.print()\" style=\"color: black;\"><i class=\"fa fa-print fa-lg\"></i></a>
                        </span>
                        ";
        // line 25
        echo "                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:exportTableDataToCSV()\" style=\"color: black;\"><i class=\"fa fa-file-excel-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:exportTableDataToPDF()\" id='pdfexport' style=\"color: black;\"><i class=\"fa fa-file-pdf-o fa-lg\"></i></a>
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
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;padding-bottom: 100px\">
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
                                    <th data-field=\"expected_closed_date\" data-sortable=\"true\">Expected Close<br> Deals</th>
                                    <th data-field=\"owner\" data-sortable=\"true\">Owner</th>
                                    <th data-field=\"deal_account_type\" data-sortable=\"true\">account type</th>
                                    <th data-field=\"deal_source\" data-sortable=\"true\">source</th>
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
        // line 78
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
        return array (  109 => 78,  75 => 47,  65 => 39,  63 => 38,  48 => 25,  40 => 16,  34 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }
}

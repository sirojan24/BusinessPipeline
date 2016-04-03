<?php

/* SettingsBundle:OpportunitySource:opportunitySourcesTable.html.twig */
class __TwigTemplate_c2799c628701bd653c99da6af2371a3252467001f5ae594c22fd1a262e3e2c20 extends Twig_Template
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
        $this->env->loadTemplate("SettingsBundle:OpportunitySource:addOpportunitySourceModal.html.twig")->display($context);
        // line 2
        $this->env->loadTemplate("SettingsBundle:OpportunitySource:editOpportunitySourceModal.html.twig")->display($context);
        // line 3
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        
        <div style=\"padding:25px\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"pull-right\">  
                        <span calss=\"pull-right\">
                            <a href=\"#\" style=\"color: black;\" data-toggle=\"modal\" data-target=\"#addOpportunitySourceModal\"><i class=\"fa fa-user-plus\"></i> Add Source</a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
                            <a href=\"javascript:refreshOpportunitySourceTable()\" style=\"color: black;\"><i class=\"fa fa-refresh fa-lg\" style=\"margin-left: 5px;margin-right: 2px;\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:window.print()\" style=\"color: black;\"><i class=\"fa fa-print fa-lg\"></i></a>
                        </span>
                        ";
        // line 22
        echo "                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:exportOpportunitySourceTableDataToCSV()\" style=\"color: black;\"><i class=\"fa fa-file-excel-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:exportOpportunitySourceTableDataToPDF()\" style=\"color: black;\"><i class=\"fa fa-file-pdf-o fa-lg\"></i></a>
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\" id=\"opportunityTableDiv\" style=\"display: none\">
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;\">
                        <table id=\"opportunitytable\"
                               data-toggle=\"table\"
                               data-search=\"true\"
                               data-page-size=\"10\"
                               data-page-list=\"[10,25,50]\"
                               data-pagination=\"true\"
                               data-show-columns=\"true\"
                               data-detail-formatter=\"detailFormatter\"
                               data-row-style=\"rowStyle\">
                            <thead>
                                <tr>
                                    <th data-field=\"state\" data-checkbox=\"true\"></th>
                                    <th data-field=\"opportunitySource\" data-sortable=\"true\">Opportunity Source</th>
                                    <th data-field=\"notes\" data-sortable=\"true\">Notes</th>
                                    <th data-field=\"status\" data-sortable=\"true\">Status</th>
                                    <th data-field=\"action\" data-sortable=\"true\">Action</th>
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
        // line 61
        $this->env->loadTemplate("SettingsBundle:OpportunitySource:opportunitySourceTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SettingsBundle:OpportunitySource:opportunitySourcesTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 61,  41 => 22,  23 => 3,  21 => 2,  19 => 1,);
    }
}

<?php

/* SettingsBundle:AccountType:accounttypesTable.html.twig */
class __TwigTemplate_c6db156a62f6b4aefcef00a71153811a7b687862eb2dcfe139db7758b15dc83c extends Twig_Template
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
        $this->env->loadTemplate("SettingsBundle:AccountType:addStageModal.html.twig")->display($context);
        // line 2
        $this->env->loadTemplate("SettingsBundle:AccountType:editStageModal.html.twig")->display($context);
        // line 3
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        
        <div style=\"padding:25px\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"pull-right\">  
                        <span calss=\"pull-right\">
                            <a href=\"#\" style=\"color: black;\" data-toggle=\"modal\" data-target=\"#addStage\"><i class=\"fa fa-user-plus\"></i> Add Account</a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
                            <a href=\"javascript:refreshAccountTypeTable()\" style=\"color: black;\"><i class=\"fa fa-refresh fa-lg\" style=\"margin-left: 5px;margin-right: 2px;\"></i></a>
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
                <div class=\"col-lg-12\" id=\"tableDiv\" style=\"display: none\">
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;\">
                        <table id=\"accounttypetable\"
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
                                    <th data-field=\"accountType\" data-sortable=\"true\">Account Type</th>
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
        $this->env->loadTemplate("SettingsBundle:AccountType:accountTypeTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SettingsBundle:AccountType:accounttypesTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 61,  23 => 3,  21 => 2,  19 => 1,);
    }
}

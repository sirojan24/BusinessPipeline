<?php

/* SettingsBundle:ProductType:productTypesTable.html.twig */
class __TwigTemplate_0457a3878ddadb9663fe392931d999ffda996135502fb29f4892bc14cdce7c96 extends Twig_Template
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
        $this->env->loadTemplate("SettingsBundle:ProductType:addProductTypeModal.html.twig")->display($context);
        // line 2
        $this->env->loadTemplate("SettingsBundle:ProductType:editProductTypeModal.html.twig")->display($context);
        // line 3
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        
        <div style=\"padding:25px\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"pull-right\">  
                        <span calss=\"pull-right\">
                            <a href=\"#\" style=\"color: black;\" data-toggle=\"modal\" data-target=\"#addProductTypeModal\"><i class=\"fa fa-user-plus\"></i> Add Product</a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
                            <a href=\"javascript:refreshProductTypeTable()\" style=\"color: black;\"><i class=\"fa fa-refresh fa-lg\" style=\"margin-left: 5px;margin-right: 2px;\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:window.print()\" style=\"color: black;\"><i class=\"fa fa-print fa-lg\"></i></a>
                        </span>
                        ";
        // line 22
        echo "                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:exportProductTableDataToCSV()\" style=\"color: black;\"><i class=\"fa fa-file-excel-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"javascript:exportProductTableDataToPDF()\" style=\"color: black;\"><i class=\"fa fa-file-pdf-o fa-lg\"></i></a>
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\" id=\"tableProductTypeDiv\" style=\"display: none\">
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;\">
                        <table id=\"producttypetable\"
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
                                    <th data-field=\"productType\" data-sortable=\"true\">Product Type</th>
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
        $this->env->loadTemplate("SettingsBundle:ProductType:productTypeTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SettingsBundle:ProductType:productTypesTable.html.twig";
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

<?php

/* NotesBundle:Default:notesTable.html.twig */
class __TwigTemplate_06e8579e4fecc66f0e203243a9d673447438b6c95291a6ef668087858cd2db21 extends Twig_Template
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
                        <span calss=\"pull-right\" style=\"margin-left: 2px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
                            <a href=\"javascript:refreshTable()\" style=\"color: black;\"><i class=\"fa fa-refresh fa-lg\" style=\"margin-left: 5px;\"></i></a>
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
                        <table id=\"table\"
                               data-toggle=\"table\"
                               data-detail-view=\"true\"
                               data-search=\"true\"
                               data-page-size=\"";
        // line 34
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
                                    <th data-field=\"open_deal\" data-sortable=\"true\">Open <br>Deals</th>
                                    <th data-field=\"projected_revenue\" data-sortable=\"true\">Projected<br> Revenue</th>
                                    <th data-field=\"weighted_forecast\" data-sortable=\"true\">Weighted<br> Forecast</th>
                                    <th data-field=\"won_deals\" data-sortable=\"true\">Won<br> Deals</th>
                                    <th data-field=\"lost_deals\" data-sortable=\"true\">Lost<br> Deals</th>
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
        // line 63
        $this->env->loadTemplate("NotesBundle:Default:notesTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "NotesBundle:Default:notesTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 63,  54 => 34,  19 => 1,);
    }
}

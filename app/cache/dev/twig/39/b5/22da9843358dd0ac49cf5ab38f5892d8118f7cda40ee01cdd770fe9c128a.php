<?php

/* OpportunityBundle:Default:shareUserModal.html.twig */
class __TwigTemplate_39b522da9843358dd0ac49cf5ab38f5892d8118f7cda40ee01cdd770fe9c128a extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"shareUserModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                <h4 class=\"modal-title smaller lighter blue\">Deal Sharing</h4>                                                       
            </div>
            <div class=\"modal-body\">
                <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 80px;\">
                    <table id=\"sharedUserTable\"
                           data-toggle=\"table\"
                           data-row-style=\"rowStyle\">
                        <thead>
                            <tr>
                                <th data-field=\"name\">Name</th>
                                <th data-field=\"weightedForecast\">Weighted Forecast</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>

    </div>
</div>
";
        // line 30
        $this->env->loadTemplate("OpportunityBundle:Default:sharingCalculationScript.html.twig")->display($context);
        // line 31
        $this->env->loadTemplate("OpportunityBundle:Default:shareUserModalScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:shareUserModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 31,  50 => 30,  19 => 1,);
    }
}

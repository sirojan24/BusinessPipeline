<?php

/* OpportunityBundle:Default:filterModal.html.twig */
class __TwigTemplate_21ed753aa0f40c6407e65a7df9d54c44252ae6af26d1c061db5a5f651490cb9b extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.number.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    jQuery(function (\$) {
        \$(\"#fFromDate\").mask(\"99-99-9999\");
        \$(\"#fToDate\").mask(\"99-99-9999\");
        \$('#projectedrevenue').number( true, 0 );
    });
</script>
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Filters</h4>
            </div>
            <div class=\"modal-body\">
                
                <form action=\"#\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-6\">
                            <div class=\"form-group\" style=\"margin-bottom: 3px\">
                                <label for=\"firstname\">Deal Date:</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"col-xs-5\" style=\"padding-right:0px;padding-left:0px\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"fFromDate\" name=\"fFromDate\" placeholder=\"month/date/year\">
                                </div>
                            </div>
                            <div class=\"col-xs-2\" style=\"padding-right:2px;padding-left: 22px;padding-top: 5px;\">
                                <div class=\"form-group\">
                                    <span>to</span>
                                </div>
                            </div>
                            <div class=\"col-xs-5\" style=\"padding-right:0px;padding-left:0px\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" data-date-format=\"mm-dd-yyyy\" id=\"fToDate\" name=\"fToDate\" placeholder=\"month/date/year\">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form>  
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"form-group\">
                                <label for=\"firstname\">Projected Revenue:</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">\$</div>
                                    <input type=\"text\" class=\"form-control\" id=\"projectedrevenue\">
                                    <div class=\"input-group-addon\">.00</div>
                                </div>
                                <div class=\"input-group\">
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"amountRadioOptions\" id=\"less\"/> <= S
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"amountRadioOptions\" id=\"equal\" checked=\"true\"/> = S
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"amountRadioOptions\" id=\"great\"/> => S
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"form-group\" id=\"filterDealSourceDiv\">
                                <label for=\"firstname\">Deal Source:</label>
                                
                            </div>
                        </div>
                    </div>
                    <hr style=\"margin-top:0px;margin-bottom: 5px\">
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Stage:</label>
                                
                            </div>
                        </div>
                    </div>
                    <hr style=\"margin-top:0px;margin-bottom: 5px\">
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"form-group\" id=\"filterAccountTypeDiv\">
                                <label for=\"firstname\">Account Type:</label>
                                
                            </div>
                        </div>
                    </div>
                    <hr style=\"margin-top:0px;margin-bottom: 5px\">
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"form-group\" id=\"filterProductTypeDiv\">
                                <label for=\"firstname\">Product Type:</label>
                                
                            </div>
                        </div>
                    </div>
                    <hr style=\"margin-top:0px;margin-bottom: 5px\">
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-8\">
                            <div class=\"form-group\">
                                <label for=\"firstname\">Tags</label>
                                <div id=\"tagDiv\">
                                    <input type=\"text\" value=\"\" name=\"filterTags\" id=\"filterTags\" class=\"form-control\" data-role=\"tagsinput\" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <div class=\"form-group\" style=\"margin-top: 10px\">
                                <label for=\"avatar\"> </label>
                                <button id=\"savebutton\" class=\"btn btn-primary\" style=\"padding-right: 10px;padding-left: 10px;margin-right: 10px\" onclick=\"applyUserDefinedFilter()\" data-dismiss=\"modal\">Apply</button>
                                <a class=\"btn btn-default\" href=\"javascript:clearFilter()\">Clear</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
       </div>

    </div>
</div>

<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:filterModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 139,  24 => 2,  19 => 1,);
    }
}

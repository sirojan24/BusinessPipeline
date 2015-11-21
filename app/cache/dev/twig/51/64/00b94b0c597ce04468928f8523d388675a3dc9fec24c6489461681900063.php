<?php

/* OpportunityBundle:Default:wonModal.html.twig */
class __TwigTemplate_516400b94b0c597ce04468928f8523d388675a3dc9fec24c6489461681900063 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"wonModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                <h2 class=\"modal-title lighter blue\"><i class=\"fa fa-trophy\"></i> Won Deal!</h2>                                                        
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\" > 
                    <div class=\"input-group col-sm-12\"> 
                        <label  for=\"projectedrevenue\">Account Revenue</label>
                        <br>
                        <div class=\"input-group\" >
                            <span class=\"input-group-addon\">
                                \$
                            </span>
                            <input type=\"text\" name=\"modalrevenue\" id=\"modalrevenue\" class=\"form-control\" onkeyup=\"updateUserRevenue()\"class=\"col-sm-12\" required />
                            <span class=\"input-group-addon\">
                                .00
                            </span>
                        </div>
                    </div> 
                    <br>
                    <div class=\"input-group col-sm-12\"> 
                        <label  for=\"projectedrevenue\">User Revenue</label>
                        <br>
                        <div class=\"input-group\" >
                            <span class=\"input-group-addon\">
                                \$
                            </span>
                            <input type=\"hidden\" id=\"commisionnonoriginator\">
                            <input type=\"text\" name=\"modalrevenue\" id=\"individualrevenue\" class=\"form-control\"  class=\"col-sm-12\" required />
                            <span class=\"input-group-addon\">
                                .00
                            </span>
                        </div>
                    </div>  
                    <br>
                    <div class=\"input-group col-sm-12\"> 
                        <label  for=\"projectedrevenue\">Notes</label>
                        <br>
                        <div class=\"input-group col-sm-12\" >
                            <textarea  id=\"modalnotes\" rows=\"4\" class=\"form-control col-sm-12\" name=\"modalnotes\" data-parsley-pattern=\"^[a-zA-Z0-9,.:;'_ ]*\$\" data-parsley-trigger=\"keyup\"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"return setRevenue();\" >Save</button>
                <button type=\"button\" class=\"btn btn-default\" onclick=\"return clearRevenue();\" >Clear</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:wonModal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

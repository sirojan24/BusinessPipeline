<?php

/* OpportunityBundle:Default:LostModal.html.twig */
class __TwigTemplate_e217bc64051d9f3da633d02b56f768ec699633d7cd4015e43751f2414f1552f3 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"lostModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                <h4 class=\"modal-title smaller lighter blue\">Lost Opportunity</h4>                                                       
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"notes\" >Reason</label>
                    <br>
                    <div class=\"input-group col-sm-12\">      
                        <textarea  id=\"modalreason\" class=\"form-control col-sm-12\" rows=\"4\" name=\"modalreason\" data-parsley-pattern=\"^[a-zA-Z0-9,.:;'_ ]*\$\" data-parsley-trigger=\"keyup\">";
        // line 14
        if (array_key_exists("opportunity", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getReason", array(), "method"), "html", null, true);
        }
        echo "</textarea>
                    </div>    
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"return setReason();\" >Save</button>
                <button type=\"button\" class=\"btn btn-default\" onclick=\"return clearReason();\" >Clear</button>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:LostModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }
}

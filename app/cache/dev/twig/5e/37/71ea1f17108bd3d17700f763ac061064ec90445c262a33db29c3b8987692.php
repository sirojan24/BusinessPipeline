<?php

/* SettingsBundle:OpportunitySource:editOpportunitySourceModal.html.twig */
class __TwigTemplate_5e3771ea1f17108bd3d17700f763ac061064ec90445c262a33db29c3b8987692 extends Twig_Template
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
        \$('#addStageSalechance').number(true, 0);
    });
</script>
<!-- Modal -->
<div class=\"modal fade\" id=\"editOpportunitySourceModal\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Edit Stage</h4>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("settings_savestage");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\"
                      onsubmit=\"return updateOpportunitySource()\">
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\">
                                <label for=\"firstname\">Name <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"editOpportunitySourceName\" placeholder=\"Name\" autocomplete=\"off\"
                                       placeholder=\"Name\" onkeyup=\"stageAvailability()\" required/>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">\t\t\t\t
                            <div class=\"form-group\">
                                <label for=\"username\">Notes</label>
                                <textarea  id=\"editOpportunitySourceNotes\" placeholder=\"Notes\" class=\"form-control\" name=\"notes\" rows =\"4\"></textarea>
                                <div id=\"usernameerror\"></div>
                            </div>
                        </div>
                        <input type=\"hidden\" value = \"\" id =\"editOpportunitySourceId\">
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\">
                                <label for=\"avatar\"> </label>
                                <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                                <a class=\"btn btn-default\"  data-dismiss=\"modal\" href=\"#\">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
";
        // line 57
        $this->env->loadTemplate("SettingsBundle:Stages:stageformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SettingsBundle:OpportunitySource:editOpportunitySourceModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 57,  45 => 20,  24 => 2,  19 => 1,);
    }
}

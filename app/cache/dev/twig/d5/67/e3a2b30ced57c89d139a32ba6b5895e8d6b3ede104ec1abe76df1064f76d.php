<?php

/* SettingsBundle:OpportunitySource:opportunitySourceFormScript.html.twig */
class __TwigTemplate_d567e3a2b30ced57c89d139a32ba6b5895e8d6b3ede104ec1abe76df1064f76d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>

<script>
    function stageAvailability() {
        \$.post('";
        // line 5
        echo $this->env->getExtension('routing')->getPath("settings_validatestage");
        echo "',
                {name: document.getElementById('addStageName').value},
        function (response) {
            if (response == \"true\") {
                document.getElementById('addStageName').style.color = \"#B94A48\";
                document.getElementById('addStageName').style.backgroundColor = \"#F2DEDE\";
                document.getElementById('addStageName').style.border = \"1px solid #EED3D7\";
                \$('#savebutton').prop('disabled', true);
            } else {
                document.getElementById('addStageName').style.color = \"#468847\";
                document.getElementById('addStageName').style.backgroundColor = \"#DFF0D8\";
                document.getElementById('addStageName').style.border = \"1px solid #D6E9C6\";
                \$('#savebutton').prop('disabled', false);
            }
        });
    }

    function saveNewOpportunitySource() {
        \$.post('";
        // line 23
        echo $this->env->getExtension('routing')->getPath("settings_saveopportunitysource");
        echo "',
                {name: \$(\"#addOpportunitySourceName\").val(), notes: \$(\"#addOpportunitySourceNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshOpportunitySourceTable();
            }
        });
        \$(\"#addOpportunitySourceModal\").find(\"input[type=text]\").each(function (i, object) { 
            \$(object).val('');
        });
        \$('#addOpportunitySourceModal').modal('hide');
        \$(\"#addOpportunitySourceNotes\").val('');
        document.getElementById('addStageName').style.color = \"\";
        document.getElementById('addStageName').style.backgroundColor = \"\";
        document.getElementById('addStageName').style.border = \"\";
        
        return false;
    }
    
    function opeEditOpportunitySourceModal(id){
        var jsonString = JSON.parse(initOpportunitySourceResponse);

        for (var i = 0; i < jsonString.opportunitySources.length; i++) {
            var tempStage = jsonString.opportunitySources[i];

            if (id === tempStage.id) {
                \$(\"#editOpportunitySourceId\").val(id);
                \$(\"#editOpportunitySourceName\").val(tempStage.opportunitySource);
                \$(\"#editOpportunitySourceNotes\").val(tempStage.notes);
                \$('#editOpportunitySourceModal').modal('show');
                break;
            }

        }
    } 
    
    function updateOpportunitySource() {
        \$.post('";
        // line 60
        echo $this->env->getExtension('routing')->getPath("settings_updateopportunitysource");
        echo "',
                {id: \$(\"#editOpportunitySourceId\").val(), name: \$(\"#editOpportunitySourceName\").val(), notes: \$(\"#editOpportunitySourceNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshOpportunitySourceTable();
            }
        });
        \$('#editOpportunitySourceModal').modal('hide');
        
        return false;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:OpportunitySource:opportunitySourceFormScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 60,  48 => 23,  27 => 5,  19 => 1,);
    }
}

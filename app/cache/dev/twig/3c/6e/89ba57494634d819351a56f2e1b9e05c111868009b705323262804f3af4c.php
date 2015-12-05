<?php

/* SettingsBundle:Stages:stageformScript.html.twig */
class __TwigTemplate_3c6e89ba57494634d819351a56f2e1b9e05c111868009b705323262804f3af4c extends Twig_Template
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

    function saveNewStage() {
        \$.post('";
        // line 23
        echo $this->env->getExtension('routing')->getPath("settings_savestage");
        echo "',
                {name: \$(\"#addStageName\").val(), salechance: \$(\"#addStageSalechance\").val(), notes: \$(\"#addStageNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshTable();
            }
        });
        \$(\"#addStage\").find(\"input[type=text]\").each(function (i, object) { 
            \$(object).val('');
        });
        \$('#addStage').modal('hide');
        \$(\"#addStageNotes\").val('');
        document.getElementById('addStageName').style.color = \"\";
        document.getElementById('addStageName').style.backgroundColor = \"\";
        document.getElementById('addStageName').style.border = \"\";
        
        return false;
    }
    
    function opeEditStageModal(id){
        var jsonString = JSON.parse(initResponse);

        for (var i = 0; i < jsonString.stages.length; i++) {
            var tempStage = jsonString.stages[i];

            if (id === tempStage.id) {
                \$(\"#editStageModalId\").val(id);
                \$(\"#editStageModalName\").val(tempStage.stage);
                \$(\"#editStageModalSalechance\").val(tempStage.saleChange);
                \$(\"#editStageModalNotes\").val(tempStage.notes);
                \$('#editStageModal').modal('show');
                break;
            }

        }
    } 
    
    function updateStage() {
        \$.post('";
        // line 61
        echo $this->env->getExtension('routing')->getPath("settings_updatestage");
        echo "',
                {id: \$(\"#editStageId\").val(), name: \$(\"#editStageModalName\").val(), salechance: \$(\"#editStageModalSalechance\").val(), notes: \$(\"#editStageModalNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshTable();
            }
        });
        \$('#editStage').modal('hide');
        
        return false;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:Stages:stageformScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 61,  48 => 23,  27 => 5,  19 => 1,);
    }
}

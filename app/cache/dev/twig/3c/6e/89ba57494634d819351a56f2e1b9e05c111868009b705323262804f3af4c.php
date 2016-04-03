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
        // line 6
        echo $this->env->getExtension('routing')->getPath("settings_validatestage");
        echo "',
                    {name: document.getElementById('addStageName').value},
            function (response) {
                if (response == \"true\") {
                    document.getElementById('addStageName').style.color = \"#B94A48\";
                    document.getElementById('addStageName').style.backgroundColor = \"#F2DEDE\";
                    document.getElementById('addStageName').style.border = \"1px solid #EED3D7\";
                    document.getElementById('stageerror').innerHTML = \"<font color = '#B94A48'>stage already exists.</font>\";
                    \$('#savebutton').prop('disabled', true);
                } else {
                    document.getElementById('addStageName').style.color = \"#468847\";
                    document.getElementById('addStageName').style.backgroundColor = \"#DFF0D8\";
                    document.getElementById('addStageName').style.border = \"1px solid #D6E9C6\";
                    document.getElementById('stageerror').innerHTML = \"\";
                    \$('#savebutton').prop('disabled', false);
                }
            });
        

    }

    function saveNewStageInfo() {
        \$.post('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("settings_savestage");
        echo "',
                {name: \$(\"#addStageName\").val(), salechance: \$(\"#addStageSalechancenew\").val(), notes: \$(\"#addStageNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshStageTable();
            }
        });
        \$(\"#addStageModal\").find(\"input[type=text]\").each(function (i, object) {
            \$(object).val('');
        });
        \$('#addStageModal').modal('hide');
        \$(\"#addStageNotes\").val('');
        document.getElementById('addStageName').style.color = \"\";
        document.getElementById('addStageName').style.backgroundColor = \"\";
        document.getElementById('addStageName').style.border = \"\";

        return false;
    }

    function opeEditStageModal(id) {
        var jsonString = JSON.parse(initStageResponse);

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

    function updateStageInfo() {
        \$.post('";
        // line 66
        echo $this->env->getExtension('routing')->getPath("settings_updatestage");
        echo "',
                {id: \$(\"#editStageModalId\").val(), name: \$(\"#editStageModalName\").val(), salechance: \$(\"#editStageModalSalechance\").val(), notes: \$(\"#editStageModalNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshStageTable();
            }
        });
        \$('#editStageModal').modal('hide');

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
        return array (  94 => 66,  53 => 28,  28 => 6,  19 => 1,);
    }
}

<?php

/* SettingsBundle:AccountType:accountTypeformScript.html.twig */
class __TwigTemplate_6af678e8cf3cd60e3ea02c17795c4babb9020d52d1d5ed9d6fb1ec56ef700bed extends Twig_Template
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
    function accounttypeAvailability() {
        \$.post('";
        // line 5
        echo $this->env->getExtension('routing')->getPath("settings_validateaccounttype");
        echo "',
                {name: document.getElementById('addAccountTypeName').value},
        function (response) {
            if (response == \"true\") {
                document.getElementById('addAccountTypeName').style.color = \"#B94A48\";
                document.getElementById('addAccountTypeName').style.backgroundColor = \"#F2DEDE\";
                document.getElementById('addAccountTypeName').style.border = \"1px solid #EED3D7\";
                \$('#savebutton').prop('disabled', true);
            } else {
                document.getElementById('addAccountTypeName').style.color = \"#468847\";
                document.getElementById('addAccountTypeName').style.backgroundColor = \"#DFF0D8\";
                document.getElementById('addAccountTypeName').style.border = \"1px solid #D6E9C6\";
                \$('#savebutton').prop('disabled', false);
            }
        });
    }
    
    function editAccounttypeAvailability() {
        \$.post('";
        // line 23
        echo $this->env->getExtension('routing')->getPath("settings_validateaccounttype");
        echo "',
                {name: document.getElementById('addAccountTypeName').value},
        function (response) {
            if (response == \"true\") {
                document.getElementById('editAccountTypeName').style.color = \"#B94A48\";
                document.getElementById('editAccountTypeName').style.backgroundColor = \"#F2DEDE\";
                document.getElementById('editAccountTypeName').style.border = \"1px solid #EED3D7\";
                \$('#savebutton').prop('disabled', true);
            } else {
                document.getElementById('editAccountTypeName').style.color = \"#468847\";
                document.getElementById('editAccountTypeName').style.backgroundColor = \"#DFF0D8\";
                document.getElementById('editAccountTypeName').style.border = \"1px solid #D6E9C6\";
                \$('#savebutton').prop('disabled', false);
            }
        });
    }

    function saveNewAccountType() {
        \$.post('";
        // line 41
        echo $this->env->getExtension('routing')->getPath("settings_saveaccounttype");
        echo "',
                {name: \$(\"#addAccountTypeName\").val(), notes: \$(\"#addAccountTypeNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshAccountTypeTable();
            }
        });
        \$(\"#addStage\").find(\"input[type=text]\").each(function (i, object) {
            \$(object).val('');
        });
        \$('#addAccountTypeModal').modal('hide');
        \$(\"#addStageNotes\").val('');
        document.getElementById('addAccountTypeName').style.color = \"\";
        document.getElementById('addAccountTypeName').style.backgroundColor = \"\";
        document.getElementById('addAccountTypeName').style.border = \"\";

        return false;
    }

    function opeEditAccountTypeModal(id) {
        var jsonString = JSON.parse(initResponse);

        for (var i = 0; i < jsonString.accountTypes.length; i++) {
            var tempStage = jsonString.accountTypes[i];

            if (id === tempStage.id) {
                \$(\"#editAccountTypeId\").val(id);
                \$(\"#editAccountTypeName\").val(tempStage.accountType);
                \$(\"#editAccountTypeNotes\").val(tempStage.notes);
                \$('#editAccountTypeModal').modal('show');
                break;
            }

        }
    }

    function updateAccountType() {
        \$.post('";
        // line 78
        echo $this->env->getExtension('routing')->getPath("settings_updateaccounttype");
        echo "',
                {id: \$(\"#editAccountTypeId\").val(), name: \$(\"#editAccountTypeName\").val(), notes: \$(\"#editAccountTypeNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshAccountTypeTable();
            }
        });
        \$('#editAccountTypeModal').modal('hide');

        return false;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:AccountType:accountTypeformScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 78,  69 => 41,  48 => 23,  27 => 5,  19 => 1,);
    }
}

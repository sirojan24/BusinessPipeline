<?php

/* SettingsBundle:ProductType:productTypeFormScript.html.twig */
class __TwigTemplate_dde4762e71d14b8e4c6888ef49f958ff8887debc952a91c0adb078287075d9da extends Twig_Template
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

    function saveNewProductType() {
        \$.post('";
        // line 23
        echo $this->env->getExtension('routing')->getPath("settings_saveproducttype");
        echo "',
                {name: \$(\"#addProductTypeName\").val(), notes: \$(\"#addProductTypeNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshProductTypeTable();
            }
        });
        \$(\"#addProductTypeModal\").find(\"input[type=text]\").each(function (i, object) { 
            \$(object).val('');
        });
        \$('#addProductTypeModal').modal('hide');
        \$(\"#addProductTypeName\").val('');
        document.getElementById('addProductTypeName').style.color = \"\";
        document.getElementById('addProductTypeName').style.backgroundColor = \"\";
        document.getElementById('addProductTypeName').style.border = \"\";
        
        return false;
    }
    
    function opeEditProductTypeModal(id){
        var jsonString = JSON.parse(initProductTypeResponse);

        for (var i = 0; i < jsonString.productTypes.length; i++) {
            var tempStage = jsonString.productTypes[i];

            if (id === tempStage.id) {
                \$(\"#editProductTypeId\").val(id);
                \$(\"#editProductTypeName\").val(tempStage.productType);
                \$(\"#editProductTypeNotes\").val(tempStage.notes);
                \$('#editProductTypeModal').modal('show');
                break;
            }

        }
    } 
    
    function updateProductType() {
        \$.post('";
        // line 60
        echo $this->env->getExtension('routing')->getPath("settings_updateproducttype");
        echo "',
                {id: \$(\"#editProductTypeId\").val(), name: \$(\"#editProductTypeName\").val(), notes: \$(\"#editProductTypeNotes\").val()},
        function (response) {
            if (response != \"false\") {
                refreshProductTypeTable();
            }
        });
        \$('#editProductTypeModal').modal('hide');
        
        return false;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:ProductType:productTypeFormScript.html.twig";
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

<?php

/* SettingsBundle:Stages:stagesTableScript.html.twig */
class __TwigTemplate_68aed0256cfe486b0ea805ca3757ece86ac3f70fd4822176a11b55291c0af115 extends Twig_Template
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
        echo "<script>
    var \$stagetable = \$('#stagetable');
    var extendColData = [];
    var initStageResponse;

    \$(document).ready(function () {
        \$(\"#tableStageDiv\").show();
        iniFillStageTableData();
    });

    function addWonLost() {
        var jsonString = JSON.parse(initStageResponse);
        var filterStages = [];

        var newDeal = {
            stage: \"Won\",
            saleChange: \"100\",
            notes: \"-\",
            status: \"Active\"
        };
        
        filterStages.push(newDeal);
        
        var newDeal2 = {
            stage: \"Lost\",
            saleChange: \"0\",
            notes: \"-\",
            status: \"Active\"
        };
        
        filterStages.push(newDeal2);
        
        for (var i = 0; i < jsonString.stages.length; i++) {
            var tempStage = jsonString.stages[i];
            filterStages.push(tempStage);
        }

        var filterOpportunitiesArray = {'stages': filterStages};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        initStageResponse = jsonStr;
    }

    function iniFillStageTableData() {
        \$stagetable.bootstrapTable('showLoading');
        var data = '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["stagesArray"]) ? $context["stagesArray"] : $this->getContext($context, "stagesArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initStageResponse = newString;
        //var newString = JSON.parse(data);
        \$stagetable.bootstrapTable('hideLoading');
        addWonLost();
        \$stagetable.bootstrapTable('append', convertStageData(initStageResponse));
    }

    function refreshStageTable() {
        \$stagetable.bootstrapTable('removeAll');
        fillStageTableData();
    }

    function fillStageTableData() {
        \$stagetable.bootstrapTable('showLoading');
        \$.post('";
        // line 61
        echo $this->env->getExtension('routing')->getPath("settings_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$stagetable.bootstrapTable('hideLoading');
                        initStageResponse = response;
                        addWonLost();
                        \$stagetable.bootstrapTable('append', convertStageData(initStageResponse));
                    } else {

                    }
                }
        );
    }

    function fillStageTableDataWithUsername(username) {
        \$stagetable.bootstrapTable('removeAll');
        \$stagetable.bootstrapTable('showLoading');
        var path = '";
        // line 78
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data_username_filter", array("username" => "0"));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + username, null,
                function (response) {
                    if (response) {
                        \$stagetable.bootstrapTable('hideLoading');
                        addWonLost();
                        \$stagetable.bootstrapTable('append', convertStageData(initStageResponse));
                    } else {

                    }
                }
        );
    }

    function checkAndSetValue(value, blankValue, scale, pre) {
        if (value === '' || value === null) {
            return blankValue;
        } else {
            if (pre === true) {
                return scale + '' + value;
            } else {
                return value + '' + scale;
            }
        }
    }

    function detailFormatter(index, row) {

        var note = checkAndSetValue(row.note, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-8\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:30%\"><small>Notes</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + note + '</small></td>' +
                '</tr>' +
                '</table>' +
                '</div>' +
                '</div>');
        //html.push('<div class\"row\">' + index + '</div>');
        \$.each(row, function (key, value) {
            //html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }

    function convertStageData(response) {
        var jsonString = JSON.parse(response);
        extendColData = [];

        var startId = 1,
                rows = [];

        for (var i = 0; i < jsonString.stages.length; i++) {
            var tempStage = jsonString.stages[i];

            extendColData.push({
            });

            var name = '";
        // line 141
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
            var action = '';
            var role = '";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "';
            if (role === \"Admin\") {
                action = '<div class=\"pull-right\">' +
                        '<div class=\"keep-open btn-group\">' +
                        '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                        '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                        '</button>' +
                        '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                        '<li><a href=\"javascript:opeEditStageModal(' + tempStage.id + ')\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>';

                if (tempStage.status === \"Inactive\") {
                    action += '<li><a href=\"javascript:activateStageCall(' + tempStage.id + ')\"><i class=\"fa fa-check\"></i> Activate</a></li>';
                } else if (tempStage.status === \"Active\") {
                    action += '<li><a href=\"javascript:deleteStageCall(' + tempStage.id + ')\"><i class=\"fa fa-times\"></i> Delete</a></li>';
                }

                action += '</ul>' +
                        '</div>' +
                        '</div>';
            } else {
                \$productTypeTable.bootstrapTable('hideColumn', 'Action');
            }

            if(tempStage.stage === 'Won' || tempStage.stage === 'Lost'){
                action = '';
            }
            
            var status = tempStage.status;

            rows.push({
                stages: tempStage.stage,
                saleChange: checkAndSetValue(tempStage.saleChange, '-', '%', false),
                notes: tempStage.notes,
                status: status,
                action: action,
                note: tempStage.notes

            });
        }
        return rows;
    }


    function deactivateStageId(id) {
        \$stagetable.bootstrapTable('removeAll');
        \$stagetable.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initStageResponse);
        var filterContact = [];

        for (var i = 0; i < jsonString.stages.length; i++) {
            var tempStage = jsonString.stages[i];

            if (id === tempStage.id) {
                tempStage.status = \"Inactive\";
            }
            filterContact.push(tempStage);

        }
        var filterOpportunitiesArray = {'stages': filterContact};

        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        initStageResponse = jsonStr;
        \$stagetable.bootstrapTable('hideLoading');
        \$stagetable.bootstrapTable('append', convertStageData(jsonStr));
    }

    function deleteStageCall(id) {
        //\$stagetable.bootstrapTable('showLoading');
        var path = '";
        // line 212
        echo $this->env->getExtension('routing')->getPath("settings_deletestage", array("id" => 0));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + id, null,
                function (response) {
                    if (response) {
                        //\$stagetable.bootstrapTable('showLoading');

                    } else {
                        \$stagetable.bootstrapTable('hideLoading');
                    }
                }
        );
        deactivateStageId(id);
    }

    function activateStageId(id) {
        \$stagetable.bootstrapTable('removeAll');
        \$stagetable.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initStageResponse);
        var filterContact = [];

        for (var i = 0; i < jsonString.stages.length; i++) {
            var tempStage = jsonString.stages[i];

            if (id === tempStage.id) {
                tempStage.status = \"Active\";
            }
            filterContact.push(tempStage);

        }
        var filterOpportunitiesArray = {'stages': filterContact};

        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        initStageResponse = jsonStr;
        \$stagetable.bootstrapTable('hideLoading');
        \$stagetable.bootstrapTable('append', convertStageData(jsonStr));
    }

    function activateStageCall(id) {
        //\$stagetable.bootstrapTable('showLoading');
        var path = '";
        // line 254
        echo $this->env->getExtension('routing')->getPath("settings_activatestage", array("id" => 0));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + id, null,
                function (response) {
                    if (response) {

                    } else {
                        \$stagetable.bootstrapTable('hideLoading');
                    }
                }
        );
        activateStageId(id);
    }

    function priceSorter(a, b) {
        a = +a.substring(1); // remove \$
        b = +b.substring(1);
        if (a > b)
            return 1;
        if (a < b)
            return -1;
        return 0;
    }

    function rowStyle(row, index) {
        var classes = ['active'];

        if (index % 2 === 0) {
            return {
                classes: classes[0]
            };
        }
        return {};
    }
    
    function exportStageTableDataToPDF() {
        var data = JSON.parse(initStageResponse);
                
        var userTablePDF = new exportPDF(data.stages, \"stages.pdf\", [\"stage\", \"saleChange\", \"notes\", \"status\"], \"Manage Stages\");
    }
    
    function exportStageTableDataToCSV() {
        var data = JSON.parse(initStageResponse);
                
        exportToCSV(data.stages, \"stages.csv\", [\"stage\", \"saleChange\", \"notes\", \"status\"]);
    }
</script>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:Stages:stagesTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 254,  247 => 212,  175 => 143,  170 => 141,  104 => 78,  84 => 61,  65 => 45,  19 => 1,);
    }
}

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
    var \$table = \$('#table');
    var extendColData = [];
    var initResponse;

    \$(document).ready(function () {
        \$(\"#tableDiv\").show();
        iniFillTableData();
    });

    function iniFillTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["stagesArray"]) ? $context["stagesArray"] : $this->getContext($context, "stagesArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initResponse = newString;
        //var newString = JSON.parse(data);
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(newString));
    }

    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillTableData();
    }

    function fillTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("settings_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        initResponse = response;
                        \$table.bootstrapTable('append', convertData(response));
                    } else {

                    }
                }
        );
    }

    function usernameFilter(username) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
        var filterContact = [];

        for (var i = 0; i < jsonString.contacts.length; i++) {
            var tempContact = jsonString.contacts[i];

            if (username.toLowerCase() === tempContact.username.toLowerCase()) {
                filterContact.push(tempContact);
            }

        }
        var filterOpportunitiesArray = {'contacts': filterContact};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);

        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(jsonStr));
    }

    function fillTableDataWithUsername(username) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');
        var path = '";
        // line 66
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data_username_filter", array("username" => "0"));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + username, null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        \$table.bootstrapTable('append', convertData(response));
                    } else {

                    }
                }
        );
    }

    function storePageSize(size) {
        
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

        var note = checkAndSetValue(extendColData[index].note, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
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

    function convertData(response) {
        var jsonString = JSON.parse(response);
        extendColData = [];

        var startId = 1,
                rows = [];

        for (var i = 0; i < jsonString.stages.length; i++) {
            var tempStage = jsonString.stages[i];

            extendColData.push({
                note: tempStage.notes
            });

            var editPath = '";
        // line 133
        echo $this->env->getExtension('routing')->getPath("settings_editstageV2", array("id" => 0));
        echo "';
            editPath = editPath.substring(0, editPath.length - 1);

            var activatePath = '";
        // line 136
        echo $this->env->getExtension('routing')->getPath("settings_activatestage", array("id" => 0));
        echo "';
            activatePath = activatePath.substring(0, activatePath.length - 1);

            var name = '";
        // line 139
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
            var action = '';
            var role = '";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "';
            if (role === \"Admin\") {
                action = '<div class=\"pull-right\">' +
                        '<div class=\"keep-open btn-group\">' +
                        '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                        '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                        '</button>' +
                        '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                        '<li><a href=\"javascript:opeEditModal(' + tempStage.id + ')\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>';
                
                if (tempStage.status === \"Inactive\") {
                    //action += '<li><a href=\"' + activatePath + tempStage.id + '\"><i class=\"fa fa-check\"></i> Activate</a></li>';
                }

                action += '</ul>' +
                        '</div>' +
                        '</div>';
            }


            var status = tempStage.status;

            rows.push({
                stages: tempStage.stage,
                saleChange: tempStage.saleChange,
                notes: tempStage.notes,
                status: status,
                action: action

            });
        }
        return rows;
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
        return array (  179 => 141,  174 => 139,  168 => 136,  162 => 133,  92 => 66,  51 => 28,  33 => 13,  19 => 1,);
    }
}

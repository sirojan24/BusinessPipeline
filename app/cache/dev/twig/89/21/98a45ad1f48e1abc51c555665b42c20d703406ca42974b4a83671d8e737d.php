<?php

/* SettingsBundle:AccountType:stagesTableScript.html.twig */
class __TwigTemplate_892198a45ad1f48e1abc51c555665b42c20d703406ca42974b4a83671d8e737d extends Twig_Template
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
    var \$accounttypetable = \$('#accounttypetable');
    var extendColData = [];
    var initResponse;

    \$(document).ready(function () {
        \$(\"#tableDiv\").show();
        iniFillAccountTypeTableData();
    });

    function iniFillAccountTypeTableData() {
        \$accounttypetable.bootstrapTable('showLoading');
        var data = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["stagesArray"]) ? $context["stagesArray"] : $this->getContext($context, "stagesArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initResponse = newString;
        //var newString = JSON.parse(data);
        \$accounttypetable.bootstrapTable('hideLoading');
        \$accounttypetable.bootstrapTable('append', convertData(newString));
    }

    function refreshAccountTypeTable() {
        \$accounttypetable.bootstrapTable('removeAll');
        fillTableData();
    }

    function fillTableData() {
        \$accounttypetable.bootstrapTable('showLoading');
        \$.post('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("settings_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$accounttypetable.bootstrapTable('hideLoading');
                        initResponse = response;
                        \$accounttypetable.bootstrapTable('append', convertData(response));
                    } else {

                    }
                }
        );
    }

    function deactivateId(id) {
        \$accounttypetable.bootstrapTable('removeAll');
        \$accounttypetable.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
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

        \$accounttypetable.bootstrapTable('hideLoading');
        \$accounttypetable.bootstrapTable('append', convertData(jsonStr));
    }

    function fillTableDataWithUsername(username) {
        \$accounttypetable.bootstrapTable('removeAll');
        \$accounttypetable.bootstrapTable('showLoading');
        var path = '";
        // line 67
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data_username_filter", array("username" => "0"));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + username, null,
                function (response) {
                    if (response) {
                        \$accounttypetable.bootstrapTable('hideLoading');
                        \$accounttypetable.bootstrapTable('append', convertData(response));
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

            var name = '";
        // line 134
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
            var action = '';
            var role = '";
        // line 136
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
                    action += '<li><a href=\"javascript:activateStage(' + tempStage.id + ')\"><i class=\"fa fa-check\"></i> Activate</a></li>';
                } else if (tempStage.status === \"Active\") {
                    action += '<li><a href=\"javascript:deleteStage(' + tempStage.id + ')\"><i class=\"fa fa-times\"></i> Delete</a></li>';
                }

                action += '</ul>' +
                        '</div>' +
                        '</div>';
            }


            var status = tempStage.status;

            rows.push({
                stages: tempStage.stage,
                saleChange: tempStage.saleChange + \"%\",
                notes: tempStage.notes,
                status: status,
                action: action

            });
        }
        return rows;
    }

    function deleteStage(id) {
        //\$accounttypetable.bootstrapTable('showLoading');
        var path = '";
        // line 174
        echo $this->env->getExtension('routing')->getPath("settings_deletestage", array("id" => 0));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + id, null,
                function (response) {
                    if (response) {
                        //\$accounttypetable.bootstrapTable('showLoading');
                        deactivateId(id);
                    } else {
                        \$accounttypetable.bootstrapTable('hideLoading');
                    }
                }
        );
    }

    function activateId(id) {
        \$accounttypetable.bootstrapTable('removeAll');
        \$accounttypetable.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
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

        \$accounttypetable.bootstrapTable('hideLoading');
        \$accounttypetable.bootstrapTable('append', convertData(jsonStr));
    }

    function activateStage(id) {
        //\$accounttypetable.bootstrapTable('showLoading');
        var path = '";
        // line 214
        echo $this->env->getExtension('routing')->getPath("settings_activatestage", array("id" => 0));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + id, null,
                function (response) {
                    if (response) {
                        activateId(id);
                    } else {
                        \$accounttypetable.bootstrapTable('hideLoading');
                    }
                }
        );
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
        return "SettingsBundle:AccountType:stagesTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 214,  209 => 174,  168 => 136,  163 => 134,  93 => 67,  51 => 28,  33 => 13,  19 => 1,);
    }
}

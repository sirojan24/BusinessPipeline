<?php

/* SettingsBundle:OpportunitySource:opportunitySourceTableScript.html.twig */
class __TwigTemplate_a4369d8dc22f4ac13ca40af41564164fd05cdb0558d92f8e652a444c8f864708 extends Twig_Template
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
    var initOpportunitySourceResponse;

    \$(document).ready(function () {
        \$(\"#opportunityTableDiv\").show();
        iniFillOppotunitySourceTableData();
    });

    function iniFillOppotunitySourceTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["opportunitySourceArray"]) ? $context["opportunitySourceArray"] : $this->getContext($context, "opportunitySourceArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initOpportunitySourceResponse = newString;
        //var newString = JSON.parse(data);
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertOpportunitySourceData(newString));
    }

    function refreshOpportunitySourceTable() {
        \$table.bootstrapTable('removeAll');
        fillOpportunitySourceTableData();
    }

    function fillOpportunitySourceTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("settings_opportunity_source_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        initOpportunitySourceResponse = response;
                        \$table.bootstrapTable('append', convertOpportunitySourceData(response));
                    } else {

                    }
                }
        );
    }

    function fillTableDataWithUsername(username) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');
        var path = '";
        // line 44
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data_username_filter", array("username" => "0"));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + username, null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        \$table.bootstrapTable('append', convertOpportunitySourceData(response));
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

    function convertOpportunitySourceData(response) {
        var jsonString = JSON.parse(response);
        extendColData = [];

        var startId = 1,
                rows = [];

        for (var i = 0; i < jsonString.opportunitySources.length; i++) {
            var tempType = jsonString.opportunitySources[i];

            extendColData.push({
                note: tempType.notes
            });

            var name = '";
        // line 111
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
            var action = '';
            var role = '";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "';
            if (role === \"Admin\") {
                action = '<div class=\"pull-right\">' +
                        '<div class=\"keep-open btn-group\">' +
                        '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                        '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                        '</button>' +
                        '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                        '<li><a href=\"javascript:opeEditOpportunitySourceModal(' + tempType.id + ')\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>';

                if (tempType.status === \"Inactive\") {
                    action += '<li><a href=\"javascript:activateOpportunitySource(' + tempType.id + ')\"><i class=\"fa fa-check\"></i> Activate</a></li>';
                } else if (tempType.status === \"Active\") {
                    action += '<li><a href=\"javascript:deleteOpportunitySource(' + tempType.id + ')\"><i class=\"fa fa-times\"></i> Delete</a></li>';
                }

                action += '</ul>' +
                        '</div>' +
                        '</div>';
            }else{
                \$table.bootstrapTable('hideColumn', 'Action');
            }

            rows.push({
                opportunitySource: tempType.opportunitySource,
                notes: tempType.notes,
                status: tempType.status,
                action: action
            });
        }
        return rows;
    }

    function deactivateOpportunitySourceId(id) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initOpportunitySourceResponse);
        var filterContact = [];

        for (var i = 0; i < jsonString.opportunitySources.length; i++) {
            var tempStage = jsonString.opportunitySources[i];

            if (id === tempStage.id) {
                tempStage.status = \"Inactive\";
            }
            filterContact.push(tempStage);

        }
        var filterOpportunitiesArray = {'opportunitySources': filterContact};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        initOpportunitySourceResponse = jsonStr;
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertOpportunitySourceData(jsonStr));
    }

    function deleteOpportunitySource(id) {
        //\$table.bootstrapTable('showLoading');
        var path = '";
        // line 171
        echo $this->env->getExtension('routing')->getPath("settings_deleteopportunitysource", array("id" => 0));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + id, null,
                function (response) {
                    if (response) {
                        //\$table.bootstrapTable('showLoading');
                        deactivateOpportunitySourceId(id);
                    } else {
                        \$table.bootstrapTable('hideLoading');
                    }
                }
        );
    }

    function activateOpportunitySourceId(id) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initOpportunitySourceResponse);
        var filterContact = [];

        for (var i = 0; i < jsonString.opportunitySources.length; i++) {
            var tempStage = jsonString.opportunitySources[i];

            if (id === tempStage.id) {
                tempStage.status = \"Active\";
            }
            filterContact.push(tempStage);

        }
        var filterOpportunitiesArray = {'opportunitySources': filterContact};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        initOpportunitySourceResponse = jsonStr;
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertOpportunitySourceData(jsonStr));
    }

    function activateOpportunitySource(id) {
        //\$table.bootstrapTable('showLoading');
        var path = '";
        // line 211
        echo $this->env->getExtension('routing')->getPath("settings_activateopportunitysource", array("id" => 0));
        echo "';
        path = path.substring(0, path.length - 1);

        \$.post(path + id, null,
                function (response) {
                    if (response) {
                        activateOpportunitySourceId(id);
                    } else {
                        \$table.bootstrapTable('hideLoading');
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
        return "SettingsBundle:OpportunitySource:opportunitySourceTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 211,  206 => 171,  145 => 113,  140 => 111,  70 => 44,  51 => 28,  33 => 13,  19 => 1,);
    }
}

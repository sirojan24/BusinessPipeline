<?php

/* OpportunityBundle:Default:opportunityTableScript.html.twig */
class __TwigTemplate_318976a6e3caa73bdc9bf90cfc9094ea1cabca1b619192458f43517ed49f3cb2 extends Twig_Template
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
        // line 12
        echo twig_escape_filter($this->env, (isset($context["opportunitiesArray"]) ? $context["opportunitiesArray"] : $this->getContext($context, "opportunitiesArray")), "html", null, true);
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
        // line 27
        echo $this->env->getExtension('routing')->getPath("opportunity_table_data");
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
        var filterOpportunities = [];
        
        for (var i = 0; i < jsonString.opportunities.length; i++) {
            var tempOpportunity = jsonString.opportunities[i];

            if (username === tempOpportunity.username.toLowerCase()) {
                filterOpportunities.push(tempOpportunity);
            }
            
        }
        var filterOpportunitiesArray = {'opportunities' : filterOpportunities};
        var jsonStr = JSON.stringify(filterOpportunitiesArray); 
        
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(jsonStr));
    }

    function storePageSize(size) {
        \$.post('";
        // line 63
        echo $this->env->getExtension('routing')->getPath("login_login_saveconfig");
        echo "',
                {name: 'contactview', value: size},
        function (response) {
            if (response !== \"false\") {

            } else {
                console.log(\"error occured in getting the manage view number in contacts\", response);
            }
        });
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

        var deal_account_type = checkAndSetValue(extendColData[index].deal_account_type, '-', '', true);
        var deal_source = checkAndSetValue(extendColData[index].deal_source, '-', '', true);
        var open_deals = checkAndSetValue(extendColData[index].open_deals, '-', '', true);
        var won_deals = checkAndSetValue(extendColData[index].won_deals, '-', '\$', true);
        var lost_deals = checkAndSetValue(extendColData[index].lost_deals, '-', '\$', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:40%\"><small>Deal Account Type</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + deal_account_type + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Deal Source</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + deal_source + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Open Deals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + open_deals + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Won Deals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + won_deals + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Lost Deals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + lost_deals + '</small></td>' +
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

        var startId = 1,
                rows = [];

    ";
        // line 136
        echo "                for (var i = 0; i < jsonString.opportunities.length; i++) {
                    var tempOpportunity = jsonString.opportunities[i];

                    extendColData.push({
                        deal_account_type: tempOpportunity.deal_account_type,
                        deal_source: tempOpportunity.deal_source,
                        open_deals: tempOpportunity.open_deals,
                        won_deals: tempOpportunity.won_deals,
                        lost_deals: tempOpportunity.lost_deals
                    });

                    var editPath = '";
        // line 147
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpageV2", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);

                    var name = '";
        // line 150
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                    var action = '';

                    if (name === tempOpportunity.username.toLowerCase()) {
                        action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"#\"><i class=\"fa fa-usd\"></i> New Deal</a></li>' +
                                '<li><a href=\"' + editPath + tempOpportunity.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                    }

                    if (tempOpportunity.weighted_revenue == '-1') {
                        tempOpportunity.weighted_revenue = tempOpportunity.weighted_revenue_all;
                    }

                    rows.push({
                        name: tempOpportunity.name,
                        company: tempOpportunity.company,
                        product_type: tempOpportunity.product_type,
                        stage: tempOpportunity.stage,
                        weighted_revenue: '\$' + tempOpportunity.weighted_revenue,
                        projected_revenue: '\$' + tempOpportunity.projected_revenue,
                        expected_closed_date: tempOpportunity.expected_closed_date,
                        owner: '<a href=\"javascript:usernameFilter(' + \"'\" + tempOpportunity.username + \"'\" + ')\">' + tempOpportunity.owner + '</a>',
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
        return "OpportunityBundle:Default:opportunityTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 150,  176 => 147,  163 => 136,  89 => 63,  50 => 27,  32 => 12,  19 => 1,);
    }
}

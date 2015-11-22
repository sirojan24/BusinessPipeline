<?php

/* ContactsContactsBundle:Default:contactTableScript.html.twig */
class __TwigTemplate_d9da3ac2e180c67986792b723b0fd2484ce61f2e3bfe3ba90f160f38ef30e3cf extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["contactArray"]) ? $context["contactArray"] : $this->getContext($context, "contactArray")), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data");
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
        \$.post('";
        // line 82
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

        var tags = checkAndSetValue(extendColData[index].tags, '-', '', true);
        var email = checkAndSetValue(extendColData[index].email, '-', '', true);
        var telephone = checkAndSetValue(extendColData[index].telephone, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:30%\"><small>Email</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + email + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Telephone</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + telephone + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Tags</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + tags + '</small></td>' +
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

    ";
        // line 146
        echo "                for (var i = 0; i < jsonString.contacts.length; i++) {
                    var tempContact = jsonString.contacts[i];

                    extendColData.push({
                        email: tempContact.email,
                        telephone: tempContact.telephone,
                        tags: tempContact.tags
                    });

                    var editPath = '";
        // line 155
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpageV2", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);
                    
                    var newDealPath = '";
        // line 158
        echo $this->env->getExtension('routing')->getPath("opportunity_addcontactopportunityV2", array("id" => 0));
        echo "';
                    newDealPath = newDealPath.substring(0, newDealPath.length - 1);

                    var openDealPath = '";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_opportunitycontactfilterV2", array("id" => 0, "filter" => 0)), "html", null, true);
        echo "';
                    openDealPath = openDealPath.substring(0, openDealPath.length - 3);

                    var name = '";
        // line 164
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                    var action = '';
                    if (name.toLowerCase() === tempContact.username.toLowerCase()) {
                        action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + newDealPath + tempContact.id + '\"><i class=\"fa fa-usd\"></i> New Deal</a></li>' +
                                '<li><a href=\"' + editPath + tempContact.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                    }
                    rows.push({
                        name: tempContact.name,
                        company: tempContact.company,
                        open_deal: '<a href=\"' + openDealPath + tempContact.id + '/Open' + '\">' + tempContact.open_deal + '</a>',
                        projected_revenue: '\$' + tempContact.projected_revenue,
                        weighted_forecast: '\$' + tempContact.weighted_forecast,
                        won_deals: '<a href=\"' + openDealPath + tempContact.id + '/Won' + '\">\$' + tempContact.won_deals + '</a>',
                        lost_deals: '<a href=\"' + openDealPath + tempContact.id + '/Lost' + '\">\$' + tempContact.lost_deals + '</a>',
                        owner: '<a href=\"javascript:usernameFilter(' + \"'\" + tempContact.username + \"'\" + ')\">' + tempContact.owner + '</a>',
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
        return "ContactsContactsBundle:Default:contactTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 164,  199 => 161,  193 => 158,  187 => 155,  176 => 146,  111 => 82,  92 => 66,  51 => 28,  33 => 13,  19 => 1,);
    }
}

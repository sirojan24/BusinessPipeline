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
        \$table.bootstrapTable('hideColumn', 'tags');
    });

    function iniFillTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["contactArray"]) ? $context["contactArray"] : $this->getContext($context, "contactArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initResponse = newString;
        \$table.bootstrapTable('hideLoading');
        //\$table.bootstrapTable('append', convertData(newString));
        var username = '";
        // line 19
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
        usernameFilter(username);
    }

    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillTableData();
    }
    
    function showHideContacts() {
        \$table.bootstrapTable('removeAll');
        
        var showHide = \$( \"#showHide\" ).children();
        
        if(showHide.hasClass(\"fa-eye\")){
            showHide.removeClass( \"fa-eye\" );
            showHide.addClass( \"fa-eye-slash\" );
            showHide.attr(\"title\",\"Show Other Contacts\");
            var username = '";
        // line 37
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
            usernameFilter(username);
        }else{
            showHide.addClass( \"fa-eye\" );
            showHide.removeClass( \"fa-eye-slash\" );
            showHide.attr(\"title\",\"Hide Other Contacts\");
            \$table.bootstrapTable('append', convertData(initResponse));
            
        }
    }

    function fillTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 50
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        initResponse = response;
                        //\$table.bootstrapTable('append', convertData(response));
                        var username = '";
        // line 56
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                        usernameFilter(username);
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
        // line 90
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
        // line 106
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

        var tags = checkAndSetValue(row.tags, '-', '', true);
        var email = checkAndSetValue(row.email, '-', '', true);
        var telephone = checkAndSetValue(row.telephone, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:30%\"><small>Email</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + email + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Telephone</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + telephone + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
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
        // line 170
        echo "                for (var i = 0; i < jsonString.contacts.length; i++) {
                    var tempContact = jsonString.contacts[i];

                    extendColData.push({
                        email: tempContact.email,
                        telephone: tempContact.telephone,
                        tags: tempContact.tags
                    });

                    var editPath = '";
        // line 179
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpageV2", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);
                    
                    var newDealPath = '";
        // line 182
        echo $this->env->getExtension('routing')->getPath("opportunity_addcontactopportunityV2", array("id" => 0));
        echo "';
                    newDealPath = newDealPath.substring(0, newDealPath.length - 1);

                    var openDealPath = '";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_opportunitycontactfilterV2", array("id" => 0, "filter" => 0)), "html", null, true);
        echo "';
                    openDealPath = openDealPath.substring(0, openDealPath.length - 3);
                    
                    var taskPath = '";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_manage_task", array("type" => "contact", "id" => 0)), "html", null, true);
        echo "';
                    taskPath = taskPath.substring(0, taskPath.length - 1);

                    var name = '";
        // line 191
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
                                '<li><a href=\"#\" onclick=\"notespopup('+ tempContact.id +')\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"'+taskPath + tempContact.id +'\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                    }
                    
                    var openDeal = tempContact.open_deal;
                    if(tempContact.open_deal > 0){
                        openDeal = '<a href=\"' + openDealPath + tempContact.id + '/Open' + '\">' + tempContact.open_deal + '</a>';
                    }
                    
                    var wonDeal = tempContact.won_deals;
                    if(tempContact.won_deals !== '0'){
                        wonDeal = '<a href=\"' + openDealPath + tempContact.id + '/Won' + '\">\$' + tempContact.won_deals + '</a>';
                    }
                    
                    var lostDeal = tempContact.lost_deals;
                    if(tempContact.lost_deals !== '0'){
                        lostDeal = '<a href=\"' + openDealPath + tempContact.id + '/Lost' + '\">\$' + tempContact.lost_deals + '</a>';
                    }
                    rows.push({
                        name: tempContact.name,
                        company: tempContact.company,
                        open_deal: openDeal,
                        projected_revenue: '\$' + tempContact.projected_revenue,
                        weighted_forecast: '\$' + tempContact.weighted_forecast,
                        won_deals: wonDeal,
                        lost_deals: lostDeal,
                        status: tempContact.status,
                        owner: '<a href=\"javascript:usernameFilter(' + \"'\" + tempContact.username + \"'\" + ')\">' + tempContact.owner + '</a>',
                        action: action,
                        email: tempContact.email,
                        telephone: tempContact.telephone,
                        tags: tempContact.tags

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
        return array (  244 => 191,  238 => 188,  232 => 185,  226 => 182,  220 => 179,  209 => 170,  144 => 106,  125 => 90,  88 => 56,  79 => 50,  63 => 37,  42 => 19,  34 => 14,  19 => 1,);
    }
}

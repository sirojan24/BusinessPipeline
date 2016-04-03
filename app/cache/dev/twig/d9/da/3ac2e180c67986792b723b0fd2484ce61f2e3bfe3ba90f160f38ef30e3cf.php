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
    var isShowInactiveContact = false;
    
    \$(document).ready(function () {
        \$(\"#tableDiv\").show();
        iniFillTableData();
        \$table.bootstrapTable('hideColumn', 'tags');
    });


    function showHideInactiveContacts(){
        \$table.bootstrapTable('removeAll');
        
        var showHide = \$( \"#showHide\" ).children();
        
        if (isShowInactiveContact == false){
            isShowInactiveContact = true;
            \$(\"#showHideInactiveContact\").html(\"<i class='fa fa-eye-slash'></i> Hide Inactive Contacts\");
            if(showHide.hasClass(\"fa-eye\")){
                \$table.bootstrapTable('append', convertData(initResponse));
            }else{
                var username = '";
        // line 25
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                usernameFilter(username);

            }
        }else{
            isShowInactiveContact = false;
            \$(\"#showHideInactiveContact\").html(\"<i class='fa fa-eye'></i> Show Inactive Contacts\");
            if(showHide.hasClass(\"fa-eye\")){
                \$table.bootstrapTable('append', convertData(initResponse));
            }else{
                var username = '";
        // line 35
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                usernameFilter(username);

            }
        }
        
        
        
    }
    
    function iniFillTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["contactArray"]) ? $context["contactArray"] : $this->getContext($context, "contactArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initResponse = newString;
        \$table.bootstrapTable('hideLoading');
        //\$table.bootstrapTable('append', convertData(newString));
        var username = '";
        // line 52
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
        // line 70
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
        // line 83
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        initResponse = response;
                        //\$table.bootstrapTable('append', convertData(response));
                        var username = '";
        // line 89
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
        // line 123
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

    function deleteContact(id){
        \$.post('";
        // line 139
        echo $this->env->getExtension('routing')->getPath("contacts_delete_contact");
        echo "', { id: id },
                function (response) {
                    if (response) {
                        changeStatus(id, \"Inactive\");
                    } else {

                    }
                }
        );
    }
    
    function activateContact(id){
        \$.post('";
        // line 151
        echo $this->env->getExtension('routing')->getPath("contacts_activate_contact");
        echo "', { id: id },
                function (response) {
                    if (response) {
                        changeStatus(id, \"Active\");
                    } else {

                    }
                }
        );
    }
    
    function changeStatus(id, status) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
        var filterUsers = [];

        for (var i = 0; i < jsonString.contacts.length; i++) {
            var tempContact = jsonString.contacts[i];

            if (tempContact.id == id) {
                tempContact.status = status;
            }
            
            filterUsers.push(tempContact);
        }
        var filterOpportunitiesArray = {'contacts': filterUsers};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        initResponse = jsonStr;
        //\$table.bootstrapTable('hideLoading');
        //\$table.bootstrapTable('append', convertData(jsonStr));
        var username = '";
        // line 183
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
        usernameFilter(username);
    }
    
    function storePageSize(size) {
        \$.post('";
        // line 188
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
        
        var emailData = email.split(\":\");
        var telephoneData = telephone.split(\":\");
        
        email = emailData[0] + ' : <a href=\"mailto:' + emailData[1] + '\" target=\"_top\">' + emailData[1] + '</a>';
        telephone = telephoneData[0] + \" : \" + telephoneData[1];

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;background-color: #fbfbfb;\">' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;width:30%;important;line-height: 10px;\"><small>Email</small></td>' +
                '<td style=\"border: none !important;important;line-height: 10px;\"><small>' + email + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;important;line-height: 10px;\"><small>Telephone</small></td>' +
                '<td style=\"border: none !important;important;line-height: 10px;\"><small>' + telephone + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;important;line-height: 10px;\"><small>Tags</small></td>' +
                '<td style=\"border: none !important;important;line-height: 10px;\"><small>' + tags + '</small></td>' +
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
        // line 258
        echo "                for (var i = 0; i < jsonString.contacts.length; i++) {
                    var tempContact = jsonString.contacts[i];

                    extendColData.push({
                        email: tempContact.email,
                        telephone: tempContact.telephone,
                        tags: tempContact.tags
                    });

                    var editPath = '";
        // line 267
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpageV2", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);
                    
                    var newDealPath = '";
        // line 270
        echo $this->env->getExtension('routing')->getPath("opportunity_addcontactopportunityV2", array("id" => 0));
        echo "';
                    newDealPath = newDealPath.substring(0, newDealPath.length - 1);

                    var openDealPath = '";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_opportunitycontactfilterV2", array("id" => 0, "filter" => 0)), "html", null, true);
        echo "';
                    openDealPath = openDealPath.substring(0, openDealPath.length - 3);
                    
                    var taskPath = '";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_manage_task", array("type" => "contact", "id" => 0)), "html", null, true);
        echo "';
                    taskPath = taskPath.substring(0, taskPath.length - 1);

                    var name = '";
        // line 279
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                    var action = '';
                    if (name.toLowerCase() === tempContact.username.toLowerCase()) {
                        if(tempContact.status == \"Active\"){
                            action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + newDealPath + tempContact.id + '\"><i class=\"fa fa-usd\"></i> New Deal</a></li>' +
                                '<li><a href=\"' + editPath + tempContact.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"javascript:notespopup('+ tempContact.id +')\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"'+taskPath + tempContact.id +'\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '<li><a href=\"javascript:deleteContact(' + tempContact.id +')\"><i class=\"fa fa-times\"></i> Delete</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                        }else{
                            action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + newDealPath + tempContact.id + '\"><i class=\"fa fa-usd\"></i> New Deal</a></li>' +
                                '<li><a href=\"' + editPath + tempContact.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"javascript:notespopup('+ tempContact.id +')\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"'+taskPath + tempContact.id +'\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '<li><a href=\"javascript:activateContact(' + tempContact.id +')\"><i class=\"fa fa-check\"></i> Activate</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                        }
                        
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
                    
                    if(isShowInactiveContact == false){
                        if(tempContact.status == \"Active\"){
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
                    }else{
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
            
            function exportTableDataToCSV() {
                var data = JSON.parse(initResponse);
                
                exportToCSV(data.contacts, \"contacts.csv\", [\"name\", \"company\", \"open_deal\", \"projected_revenue\", \"weighted_forecast\", 
                    \"won_deals\", \"lost_deals\", \"owner\", \"status\"]);
            }
            
            function exportTableDataToPDF() {
                var data = JSON.parse(initResponse);
                
                var userTablePDF = new exportPDF(data.contacts, \"contacts.pdf\", [\"name\", \"company\", \"open_deal\", \"projected_revenue\", \"weighted_forecast\", 
                    \"won_deals\", \"lost_deals\", \"owner\", \"status\"], \"Manage Contacts\");
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
        return array (  347 => 279,  341 => 276,  335 => 273,  329 => 270,  323 => 267,  312 => 258,  241 => 188,  233 => 183,  198 => 151,  183 => 139,  164 => 123,  127 => 89,  118 => 83,  102 => 70,  81 => 52,  73 => 47,  58 => 35,  45 => 25,  19 => 1,);
    }
}

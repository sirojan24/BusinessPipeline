<?php

/* SettingsBundle:User:adminManageUserTableScript.html.twig */
class __TwigTemplate_f936a35723af0c286e0cfdc7ae383e8183caa9e81c166d1a0c05be0d75e01f1f extends Twig_Template
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
    var userExtendColData = [];
    var userInitData = '';
    
    \$(document).ready(function () {
        \$(\"#userTableDiv\").show();
        iniFillUserTableData();
    });
    
    function iniFillUserTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["userArray"]) ? $context["userArray"] : $this->getContext($context, "userArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        //var newString = JSON.parse(data);
        \$table.bootstrapTable('hideLoading');
        userInitData = newString;
        \$table.bootstrapTable('append', convertUserData(userInitData));
    }
    
    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillUserTableData();
    }

    function fillUserTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login_login_userTableData");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        \$table.bootstrapTable('append', convertUserData(response));
                    } else {

                    }
                }
        );
    }

    function deleteUser(id){
        \$.post('";
        // line 41
        echo $this->env->getExtension('routing')->getPath("settings_delete_user");
        echo "', { id: id },
                function (response) {
                    if (response) {
                        changeStatus(id, \"Inactive\");
                    } else {

                    }
                }
        );
    }
    
    function activateUser(id){
        \$.post('";
        // line 53
        echo $this->env->getExtension('routing')->getPath("settings_activate_user");
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

        var jsonString = JSON.parse(userInitData);
        var filterUsers = [];

        for (var i = 0; i < jsonString.users.length; i++) {
            var tempUser = jsonString.users[i];

            if (tempUser.id == id) {
                tempUser.status = status;
            }
            
            filterUsers.push(tempUser);
        }
        var filterOpportunitiesArray = {'users': filterUsers};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        userInitData = jsonStr;
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertUserData(jsonStr));
    }
    
    function storePageSize(size) {
        \$.post('";
        // line 88
        echo $this->env->getExtension('routing')->getPath("login_login_saveconfig");
        echo "',
                {name: 'userview', value: size},
        function (response) {
            if (response !== \"false\") {

            } else {
                console.log(\"error occured in getting the manage view number in contacts\", response);
            }
        });
    }

    function checkAndSetValue(value, blankValue, scale, pre){
        if(value === '' || value === null){
            return blankValue;
        }else{
            if(pre === true){
                return scale + '' + value;
            }else{
                return value + '' + scale;
            }
        }
    }
    
    function detailUserFormatter(index, row) {

        var title = checkAndSetValue(row.title, '-', '', true);
        var company = checkAndSetValue(row.company, '-', '', true);
        var email = checkAndSetValue(row.email, '-', '', true);
        var telephone = checkAndSetValue(row.telephone, '-', '', true);
        var cellphone = checkAndSetValue(row.cellphone, '-', '', true);

        var originator = checkAndSetValue(row.originator, '-', '%', false);
        var nonOriginator = checkAndSetValue(row.nonOriginator, '-', '%', false);
        var earningGoals = checkAndSetValue(row.earningGoals, '-', '\$', true);
        var drawAgainstCommission = checkAndSetValue(row.drawAgainstCommission, '-', '\$', true);
        var dob = checkAndSetValue(row.dob, '-', '', true);
        
        if(dob !== '-'){
            var mdate = new Date(dob);
            var month = 1;
            if((mdate.getMonth() + 1) < 10){
                month = '0' + (mdate.getMonth() + 1);
            }else{
                month = mdate.getMonth() + 1;
            }
            var day = 1;
            if((mdate.getDate()) < 10){
                day = '0' + (mdate.getDate());
            }else{
                day = mdate.getDate();
            }
            var dob = month + '/' + day + '/' + mdate.getFullYear();
        }
        
        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;background-color: #fbfbfb;\">' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:30%\"><small>Title</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + title + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Company</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + company + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Email</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + email + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Telephone</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + telephone + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Cell Phone</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + cellphone + '</small></td>' +
                '</tr>' +
                '</table>' +
                '</div>' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:22px; border: none !important;line-height: 5px;background-color: #fbfbfb;\">' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:60%\"><small>Commissions Originator</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + originator + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Commissions Non-Originator</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + nonOriginator + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Earning Goals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + earningGoals + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Draw Against Commissions</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + drawAgainstCommission + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>DOB</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + dob + '</small></td>' +
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

    function convertUserData(response) {
        var jsonString = JSON.parse(response);
        userExtendColData = [];

        var startId = 1,
                rows = [];

    ";
        // line 209
        echo "                for (var i = 0; i < jsonString.users.length; i++) {
                    var tempUser = jsonString.users[i];

                    userExtendColData.push({
                        
                    });
                    var editPath = '";
        // line 215
        echo $this->env->getExtension('routing')->getPath("login_login_edituserpage", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);
                    
                    var taskPath = '";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_manage_task", array("type" => "user", "id" => 0)), "html", null, true);
        echo "';
                    taskPath = taskPath.substring(0, taskPath.length - 1);
                    
                    action = '';
                    if(tempUser.status == 'Active'){
                        action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + editPath + tempUser.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\" onclick=\"notespopup('+ tempUser.id +')\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"'+taskPath + tempUser.id +'\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '<li><a href=\"javascript:deleteUser(' + tempUser.id +')\"><i class=\"fa fa-times\"></i> Delete</a></li>' +
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
                                '<li><a href=\"' + editPath + tempUser.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\" onclick=\"notespopup('+ tempUser.id +')\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"'+taskPath + tempUser.id +'\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '<li><a href=\"javascript:activateUser(' + tempUser.id +')\"><i class=\"fa fa-check\"></i> Activate</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                    }
                    
                    rows.push({
                        first_name: tempUser.firstname,
                        last_name: tempUser.lastname,
                        username: tempUser.username,
                        open_deal:  tempUser.openDeals,
                        projected_revenue: '\$' + tempUser.projectedRevenue,
                        weighted_forecast: '\$' + tempUser.individualForecast,
                        won_deals: '\$' + tempUser.wonDeals,
                        lost_deals: '\$' + tempUser.lossDeals,
                        user_status: tempUser.status,
                        user_level: tempUser.role,
                        action: action,
                        title: tempUser.title,
                        company: tempUser.company,
                        email: tempUser.email,
                        telephone: tempUser.telephone,
                        cellphone: tempUser.cellphone,
                        originator: tempUser.originator,
                        nonOriginator: tempUser.nonOriginator,
                        earningGoals: tempUser.earningGoals,
                        drawAgainstCommission: tempUser.drawAgainstCommission,
                        dob: tempUser.dob

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
            
            function exportUserTableDataToPDF() {
                var data = JSON.parse(userInitData);

                var userTablePDF = new exportPDF(data.users, \"users.pdf\", [\"firstname\", \"lastname\", \"username\", \"openDeals\", \"projectedRevenue\", 
                    \"individualForecast\", \"wonDeals\", \"lossDeals\"], \"Manage Users\");
            }

            function exportUserTableDataToCSV() {
                var data = JSON.parse(userInitData);

                exportToCSV(data.users, \"users.csv\", [\"firstname\", \"lastname\", \"username\", \"openDeals\", \"projectedRevenue\", 
                    \"individualForecast\", \"wonDeals\", \"lossDeals\"]);
            }
</script>";
    }

    public function getTemplateName()
    {
        return "SettingsBundle:User:adminManageUserTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 218,  250 => 215,  242 => 209,  120 => 88,  82 => 53,  67 => 41,  51 => 28,  33 => 13,  19 => 1,);
    }
}

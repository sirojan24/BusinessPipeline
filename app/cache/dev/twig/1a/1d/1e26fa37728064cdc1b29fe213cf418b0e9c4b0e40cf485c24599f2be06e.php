<?php

/* LoginLoginBundle:Default:adminManageUserTableScript.html.twig */
class __TwigTemplate_1a1d1e26fa37728064cdc1b29fe213cf418b0e9c4b0e40cf485c24599f2be06e extends Twig_Template
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

    function sortMyUsername(initResponse) {
        var jsonString = JSON.parse(initResponse);
        var filterUsers = [];
        
        var name = '";
        // line 15
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
        for (var i = 0; i < jsonString.users.length; i++) {
            var tempUser = jsonString.users[i];
            if (name.toLowerCase() === tempUser.username.toLowerCase()) {
                filterUsers.push(tempUser);
            }
        }
        for (var i = 0; i < jsonString.users.length; i++) {
            var tempUser = jsonString.users[i];
            if (name.toLowerCase() !== tempUser.username.toLowerCase()) {
                filterUsers.push(tempUser);
            }
        }
        var filterOpportunitiesArray = {'users': filterUsers};
        var jsonStr = JSON.stringify(filterOpportunitiesArray);
        return jsonStr;
    }

    function iniFillTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["userArray"]) ? $context["userArray"] : $this->getContext($context, "userArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initResponse = newString;
        //var newString = JSON.parse(data);
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(sortMyUsername(newString)));
    }

    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillTableData();
    }

    function fillTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 50
        echo $this->env->getExtension('routing')->getPath("login_login_userTableData");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        \$table.bootstrapTable('append', convertData(sortMyUsername(response)));
                    } else {

                    }
                }
        );
    }
    
    function storePageSize(size) {
        \$.post('";
        // line 63
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

        if (dob !== '-') {
            var mdate = new Date(dob);
            var month = 1;
            if ((mdate.getMonth() + 1) < 10) {
                month = '0' + (mdate.getMonth() + 1);
            } else {
                month = mdate.getMonth() + 1;
            }
            var day = 1;
            if ((mdate.getDate()) < 10) {
                day = '0' + (mdate.getDate());
            } else {
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

    function convertData(response) {
        var jsonString = JSON.parse(response);
        extendColData = [];

        var startId = 1,
                rows = [];

    ";
        // line 184
        echo "                for (var i = 0; i < jsonString.users.length; i++) {
                    var tempUser = jsonString.users[i];

                    extendColData.push({
                    });
                    
                    var editPath = '";
        // line 190
        echo $this->env->getExtension('routing')->getPath("login_login_edituserpage", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);

                    var openDealPath = '";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_opportunitycontactfilterV2", array("id" => 0, "filter" => 0)), "html", null, true);
        echo "';
                    openDealPath = openDealPath.substring(0, openDealPath.length - 3);
                    
                    var taskPath = '";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_manage_task", array("type" => "user", "id" => 0)), "html", null, true);
        echo "';
                    taskPath = taskPath.substring(0, taskPath.length - 1);
                    
                    var openDeal = tempUser.openDeals;
                    if(tempUser.openDeals > 0){
                        openDeal = '<a href=\"' + openDealPath + tempUser.id + '/OpenUser' + '\">' + tempUser.openDeals + '</a>';
                    }
                    
                    var wonDeal = tempUser.wonDeals;
                    if(tempUser.wonDeals !== '0'){
                        wonDeal = '<a href=\"' + openDealPath + tempUser.id + '/WonUser' + '\">\$' + tempUser.wonDeals + '</a>';
                    }
                    
                    var lostDeal = tempUser.lossDeals;
                    if(tempUser.lossDeals !== '0'){
                        lostDeal = '<a href=\"' + openDealPath + tempUser.id + '/LostUser' + '\">\$' + tempUser.lossDeals + '</a>';
                    }
                    
                    var action = '';
                    var name = '";
        // line 215
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                    if (name.toLowerCase() === tempUser.username.toLowerCase()) {
                        action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + editPath + tempUser.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\" onclick=\"notespopup(' + tempUser.id + ')\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"'+taskPath + tempUser.id +'\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>'
                    }
                    
                    rows.push({
                        first_name: tempUser.firstname,
                        last_name: tempUser.lastname,
                        username: tempUser.username,
                        open_deal: openDeal,
                        projected_revenue: '\$' + tempUser.projectedRevenue,
                        weighted_forecast: '\$' + tempUser.individualForecast,
                        won_deals: wonDeal,
                        lost_deals: lostDeal,
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
            
            function exportTableDataToCSV() {
                var data = JSON.parse(initResponse);
                
                exportToCSV(data.users, \"users.csv\", [\"firstname\", \"lastname\", \"username\", \"openDeals\", \"projectedRevenue\", 
                    \"individualForecast\", \"wonDeals\", \"lossDeals\"]);
            }
            
            function exportTableDataToPDF() {
                var data = JSON.parse(initResponse);
                
                var userTablePDF = new exportPDF(data.users, \"users.pdf\", [\"firstname\", \"lastname\", \"username\", \"openDeals\", \"projectedRevenue\", 
                    \"individualForecast\", \"wonDeals\", \"lossDeals\"], \"Manage Users\");
            }
</script>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:adminManageUserTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 215,  234 => 196,  228 => 193,  222 => 190,  214 => 184,  92 => 63,  76 => 50,  58 => 35,  35 => 15,  19 => 1,);
    }
}

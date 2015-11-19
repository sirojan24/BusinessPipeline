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
    
    \$(document).ready(function () {
        \$(\"#tableDiv\").show();
        iniFillTableData();
    });
    
    function iniFillTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["userArray"]) ? $context["userArray"] : $this->getContext($context, "userArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
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
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_login_userTableData");
        echo "', null,
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
        // line 39
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
    
    function detailFormatter(index, row) {

        var title = checkAndSetValue(extendColData[index].title, '-', '', true);
        var company = checkAndSetValue(extendColData[index].company, '-', '', true);
        var email = checkAndSetValue(extendColData[index].email, '-', '', true);
        var telephone = checkAndSetValue(extendColData[index].telephone, '-', '', true);
        var cellphone = checkAndSetValue(extendColData[index].cellphone, '-', '', true);

        var originator = checkAndSetValue(extendColData[index].originator, '-', '%', false);
        var nonOriginator = checkAndSetValue(extendColData[index].nonOriginator, '-', '%', false);
        var earningGoals = checkAndSetValue(extendColData[index].earningGoals, '-', '\$', true);
        var drawAgainstCommission = checkAndSetValue(extendColData[index].drawAgainstCommission, '-', '\$', true);
        var dob = checkAndSetValue(extendColData[index].dob, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
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
                '<table class=\"table\" style=\"margin-left:22px; border: none !important;line-height: 5px;\">' +
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

        var startId = 1,
                rows = [];

    ";
        // line 142
        echo "                for (var i = 0; i < jsonString.users.length; i++) {
                    var tempUser = jsonString.users[i];

                    extendColData.push({
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
                    var editPath = '";
        // line 157
        echo $this->env->getExtension('routing')->getPath("login_login_edituserpage", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);
                    
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
                        action: '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + editPath + tempUser.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>'

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
        return "LoginLoginBundle:Default:adminManageUserTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 157,  169 => 142,  65 => 39,  49 => 26,  32 => 12,  19 => 1,);
    }
}

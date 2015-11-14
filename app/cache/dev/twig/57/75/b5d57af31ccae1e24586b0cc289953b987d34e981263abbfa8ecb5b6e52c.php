<?php

/* LoginLoginBundle:Default:manageUserTableScript.html.twig */
class __TwigTemplate_5775b5d57af31ccae1e24586b0cc289953b987d34e981263abbfa8ecb5b6e52c extends Twig_Template
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
        fillTableData();
    });

    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillTableData();
    }

    function fillTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 16
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
        // line 29
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

    function detailFormatter(index, row) {

        var title = extendColData[index].title;
        var company = extendColData[index].company;
        var email = extendColData[index].email;
        var telephone = extendColData[index].telephone;
        var cellphone = extendColData[index].cellphone;

        var originator = extendColData[index].originator;
        var nonOriginator = extendColData[index].nonOriginator;
        var earningGoals = extendColData[index].earningGoals;
        var drawAgainstCommission = extendColData[index].drawAgainstCommission;
        var dob = extendColData[index].dob;

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
        // line 96
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
                        earningGoals: tempUser.nonOriginator,
                        drawAgainstCommission: tempUser.drawAgainstCommission,
                        dob: tempUser.dob
                    });

                    rows.push({
                        first_name: tempUser.firstname,
                        last_name: tempUser.lastname,
                        username: tempUser.username,
                        open_deal: '0',
                        projected_revenue: tempUser.projectedRevenue,
                        weighted_forecast: tempUser.individualForecast,
                        won_deals: '0',
                        lost_deals: '0',
                        action: '<div>' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"#\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
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
        return "LoginLoginBundle:Default:manageUserTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 96,  52 => 29,  36 => 16,  19 => 1,);
    }
}

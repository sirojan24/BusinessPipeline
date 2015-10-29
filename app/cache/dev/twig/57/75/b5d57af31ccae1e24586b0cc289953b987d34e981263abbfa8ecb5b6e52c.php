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
    \$( document ).ready(function() {
        \$table.bootstrapTable('showLoading');
    });
    
    \$.post('";
        // line 6
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


    var \$table = \$('#table'),
            \$button = \$('#button'),
            \$button2 = \$('#button2');

    \$(function () {
        \$button.click(function () {
            \$table.bootstrapTable('expandRow', 1);
        });
        \$button2.click(function () {
            \$table.bootstrapTable('collapseRow', 1);
        });
    });

    function detailFormatter(index, row) {
        var html = [];
        html.push('<div class\"row\"><div class=\"col-md-4\">ffff</div><div class=\"col-md-4\">ffffds</div></div>');
        html.push('<div class\"row\">' + index + '</div>');
        \$.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }

    var \$table = \$('#table'),
            \$button = \$('#button');

    \$(function () {
        \$button.click(function () {
            \$table.bootstrapTable('append', randomData());
            \$table.bootstrapTable('scrollTo', 'bottom');
        });
    });

    function convertData(response) {
        var jsonString = JSON.parse(response);
        
        var startId = 1,
                rows = [];

        for (var i = 0; i < jsonString.users.length; i++) {
            var tempUser = jsonString.users[i];
            rows.push({
                first_name: tempUser.firstname,
                last_name: tempUser.lastname,
                username: tempUser.username,
                open_deal: '0',
                projected_revenue: tempUser.projectedRevenue,
                weighted_forecast: tempUser.individualForecast,
                won_deals: '0',
                lost_deals: '0',
                user_status: tempUser.status,
                user_level: 'NA',
                action: '<div class=\"keep-open btn-group\">' +
                        '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                        '<i class=\"glyphicon glyphicon-chevron-down\"></i></button>' +
                        '<ul class=\"dropdown-menu\" role=\"menu\">' +
                        '<li><a href=\"#\">Edit</a></li>' +
                        '<li><a href=\"#\">Notes</a></li>' +
                        '<li><a href=\"#\">Tasks</a></li>' +
                        '</ul>' +
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
        return array (  26 => 6,  19 => 1,);
    }
}

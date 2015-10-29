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

function randomData() {
    var startId = ~~(Math.random() * 100),
            rows = [];

    for (var i = 0; i < 10; i++) {
        rows.push({
            id: startId + i,
            name: '<b>test</b>' + (startId + i),
            price: '\$' + (startId + i),
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

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

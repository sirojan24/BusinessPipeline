<?php

/* NotesBundle:Default:notesTableScript.html.twig */
class __TwigTemplate_37469ae462b030f6198e1b75dfbcabee1aa4187263b1a716f7082ef1a61ad594 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["notesArray"]) ? $context["notesArray"] : $this->getContext($context, "notesArray")), "html", null, true);
        echo "';
        var newString = \$.trim(data.replace(/[\\t\\n]+/g,' '));
        initResponse = newString.replace(/&quot;/g, '\"');
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(initResponse));
    }

    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillTableData();
    }

    function fillTableData() {
        \$table.bootstrapTable('showLoading');
        \$.post('";
        // line 28
        echo $this->env->getExtension('routing')->getPath("notes_table_data");
        echo "', null,
                function (response) {
                    if (response) {
                        \$table.bootstrapTable('hideLoading');
                        var newString = \$.trim(response.replace(/[\\t\\n]+/g,' '));
                        initResponse = newString.replace(/&quot;/g, '\"');
                        \$table.bootstrapTable('append', convertData(initResponse));
                    } else {

                    }
                }
        );
    }

    function storePageSize(size) {
        
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

        var startId = 1,
                rows = [];

        for (var i = 0; i < jsonString.notes.length; i++) {
            var tempNote = jsonString.notes[i];

            rows.push({
                content: tempNote.content,
                dateAndTime: tempNote.dateAndTime,
                owner: tempNote.owner,
                tags: '\$' + tempNote.tags

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
                
        exportToCSV(data.notes, \"notes.csv\", [\"content\", \"dateAndTime\", \"owner\"]);
    }
    
    function exportTableDataToPDF() {
        var data = JSON.parse(initResponse);
                
        var userTablePDF = new exportPDF(data.notes, \"notes.pdf\", 
                [\"content\", \"dateAndTime\", \"owner\"], \"Manage Notes\");
    }
</script>";
    }

    public function getTemplateName()
    {
        return "NotesBundle:Default:notesTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 28,  34 => 14,  19 => 1,);
    }
}

<?php

/* TaskBundle:Default:tasksTableScript.html.twig */
class __TwigTemplate_e70c4f7f54451f199bee06c5ea971c5ab13cb022d797eb502bc06048d48166ef extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["tasksArray"]) ? $context["tasksArray"] : $this->getContext($context, "tasksArray")), "html", null, true);
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
        var taskpath = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_get_task", array("type" => "contact", "id" => 0)), "html", null, true);
        echo "';
        taskpath = taskpath.substring(0, taskpath.length - 1);
         \$.post(taskpath + ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["typeId"]) ? $context["typeId"] : $this->getContext($context, "typeId")), "html", null, true);
        echo ", null,
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
        // line 68
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
        // line 84
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
        var message = checkAndSetValue(extendColData[index].message, '-', '', true);
        var telephone = checkAndSetValue(extendColData[index].telephone, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
                '<tr style=\"padding:0px;margin:0px;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:30%\"><small>Message</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + message + '</small></td>' +
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

        for (var i = 0; i < jsonString.tasks.length; i++) {
            var tempTask = jsonString.tasks[i];

            extendColData.push({
                message: tempTask.message,
                tags: tempTask.tags
            });

            var editPath = '";
        // line 150
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpageV2", array("id" => 0));
        echo "';
            editPath = editPath.substring(0, editPath.length - 1);

            var name = '";
        // line 153
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
            var action = '';
            if (name.toLowerCase() === tempTask.username.toLowerCase()) {
                action = '<div class=\"pull-right\">' +
                        '<div class=\"keep-open btn-group\">' +
                        '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                        '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                        '</button>' +
                        '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                        '<li><a href=\"' + editPath + tempTask.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                        '<li><a href=\"#\"><i class=\"fa fa-chevron-down\"></i> Complete</a></li>' +
                        '<li><a href=\"#\"><i class=\"fa fa-trash-o\"></i> Delete</a></li>' +
                        '</ul>' +
                        '</div>' +
                        '</div>';
            }

            rows.push({
                taskName: tempTask.taskName,
                name: tempTask.name,
                company: tempTask.company,
                priority: tempTask.priority,
                assignedTo: tempTask.assignedTo,
                dueDate: tempTask.dueDate,
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

    function taskpopup(sharing, username, id) {
        if (sharing != '') {
            \$.post('";
        // line 207
        echo $this->env->getExtension('routing')->getPath("login_login_getusers");
        echo "',
                    {sharedusers: sharing, user: username},
            function (response) {
                if (response !== \"false\") {
                    console.log(\"@@@@@@@@@\", response);
                    var shared = response.split(':');
                    var originator = shared[shared.length - 1].split('*');

                    var nonoriginators = [];
                    for (i = 0; i < shared.length - 1; i++) {
                        nonoriginators[i] = shared[i].split('*');
                    }

                    document.getElementById('shareduserselect').innerHTML = \"<option value='\" + originator[0] + \"'>\" + originator[0] + \"</option>\";
                    sharedusername = sharing.split(':');
                    for (i = 0; i < shared.length - 1; i++) {

                        document.getElementById('shareduserselect').innerHTML += \"<option value='\" + nonoriginators[i][0] + \"'>\" + nonoriginators[i][0] + \"</option>\";

                    }

                    \$('#addTaskModal').modal('show');
                    document.getElementById('tasktypeid').value = id;

                } else {
                    console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                }
            });

        } else {

            \$.post('";
        // line 238
        echo $this->env->getExtension('routing')->getPath("login_login_getFullname");
        echo "',
                    {name: username},
            function (response) {
                if (response !== \"false\") {


                    document.getElementById('shareduserselect').innerHTML = \"<option value='\" + response + \"'>\" + response + \"</option>\";


                    \$('#addTaskModal').modal('show');
                    document.getElementById('tasktypeid').value = id;

                } else {
                    console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                }
            });
        }





    }

    function saveTask() {

        var priority = document.getElementById('priority').value;
        var due = document.getElementById('due').value;
        var shareduserselect = document.getElementById('shareduserselect').value;
        var visibility = document.getElementById('visibility').value;
        var taskname = document.getElementById('taskname').value;
        var tasknotes = document.getElementById('tasknotes').value;
        var tasktags = document.getElementById('tasktags').value;
        var tasktypeid = document.getElementById('tasktypeid').value;

        \$.post('";
        // line 273
        echo $this->env->getExtension('routing')->getPath("task_savetask");
        echo "',
                {priority: priority, due: due, shareduserselect: shareduserselect, visibility: visibility, taskname: taskname, tasknotes: tasknotes, tasktags: tasktags, tasktype: \"contact\",tasktypeid:tasktypeid},
        function (response) {
            if (response !== false) {
                \$table.bootstrapTable('removeAll');
                \$table.bootstrapTable('showLoading');

                var jsonString = JSON.parse(initResponse);
                var filterContact = [];

                for (var i = 0; i < jsonString.tasks.length; i++) {
                    var tempContact = jsonString.tasks[i];

                    filterContact.push(tempContact);
                    

                }
                var tempTask = JSON.parse(response);
                filterContact.push({taskName: tempTask.taskName,
                name: tempTask.name,
                company: tempTask.company,
                priority: tempTask.priority,
                assignedTo: tempTask.assignedTo,
                dueDate: tempTask.dueDate,
                username: tempTask.username
                });
                var filterOpportunitiesArray = {'tasks': filterContact};
                var jsonStr = JSON.stringify(filterOpportunitiesArray);
                initResponse = jsonStr;
                \$table.bootstrapTable('hideLoading');
                \$table.bootstrapTable('append', convertData(jsonStr));


            } else {
                console.log(\"error occured in saving tasks\", response);
            }
        });

    }
</script>";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Default:tasksTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 273,  282 => 238,  248 => 207,  191 => 153,  185 => 150,  116 => 84,  97 => 68,  56 => 30,  51 => 28,  33 => 13,  19 => 1,);
    }
}

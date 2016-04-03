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

    var typeSharing;
    var typeUsername;
    var typeId;
    
    ";
        // line 10
        if (array_key_exists("opportunity", $context)) {
            // line 11
            echo "
        typeSharing = '";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getSharing", array(), "method"), "html", null, true);
            echo "';
        typeUsername = '";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getUsername", array(), "method"), "html", null, true);
            echo "';
        typeId = ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getId", array(), "method"), "html", null, true);
            echo ";
    ";
        } elseif (array_key_exists("contact", $context)) {
            // line 16
            echo "        typeSharing = '';
        typeUsername = '";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method"), "html", null, true);
            echo "';
        typeId = ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getId", array(), "method"), "html", null, true);
            echo ";
    ";
        } elseif (array_key_exists("user", $context)) {
            // line 20
            echo "        typeSharing = '';
        typeUsername = '";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
            echo "';
        typeId = ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"), "html", null, true);
            echo ";
    ";
        }
        // line 24
        echo "    
    \$(document).ready(function () {
            \$(\"#tableDiv\").show();
            iniFillTableData();
            \$table.bootstrapTable('hideColumn', 'tags');
    });

        function iniFillTableData() {
            \$table.bootstrapTable('showLoading');
            var data = '";
        // line 33
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_get_task", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => (isset($context["typeId"]) ? $context["typeId"] : $this->getContext($context, "typeId")))), "html", null, true);
        echo "';
            \$.post(taskpath, null,
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

            for (var i = 0; i < jsonString.tasks.length; i++) {
                var tempContact = jsonString.tasks[i];

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
        // line 87
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
        // line 103
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
            var message = checkAndSetValue(row.message, '-', '', true);
            var telephone = checkAndSetValue(row.telephone, '-', '', true);

            var html = [];
            html.push('<div class\"row\">' +
                    '<div class=\"col-xs-4\">' +
                    '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;background-color: #fbfbfb;\">' +
                    '<tr style=\"padding:0px;margin:0px;\">' +
                    '<td style=\"border: none !important;width:30%\"><small>Message</small></td>' +
                    '<td style=\"border: none !important;\"><small>' + message + '</small></td>' +
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
                });

                var editPath = '";
        // line 167
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpageV2", array("id" => 0));
        echo "';
                editPath = editPath.substring(0, editPath.length - 1);

                var name = '";
        // line 170
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
                ";
        // line 179
        if (array_key_exists("allOpedeal", $context)) {
            // line 180
            echo "                            '<li><a href=\"javascript:editTaskPopupInt(' + tempTask.id + \",'\" + tempTask.typeSharing + \"','\" + tempTask.typeUsername + \"'\" + ')\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                ";
        }
        // line 182
        echo "                ";
        if ((!array_key_exists("allOpedeal", $context))) {
            // line 183
            echo "                            '<li><a href=\"javascript:editTaskPopup(' + tempTask.id + ')\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                ";
        }
        // line 184
        echo "            
                            '<li><a href=\"javascript:completeTask(' + tempTask.id + ')\"><i class=\"fa fa-chevron-down\"></i> Complete</a></li>' +
                            '<li><a href=\"javascript:deleteTask(' + tempTask.id + ')\"><i class=\"fa fa-trash-o\"></i> Delete</a></li>' +
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
                    action: action,
                    message: tempTask.message,
                    tags: tempTask.tags

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

        function taskpopup(sharing, username, id, type) {
            if (sharing != '') {
                \$.post('";
        // line 231
        echo $this->env->getExtension('routing')->getPath("login_login_getusers");
        echo "',
                        {sharedusers: sharing, user: username},
                function (response) {
                    if (response !== \"false\") {
                        console.log(\"@@@@@@@@@\", response);
                        var responseObject = JSON.parse(response);
                        document.getElementById('shareduserselect').innerHTML = \"<option value='\" + responseObject.originatorname + \"'>\" + responseObject.originatorname + \"</option>\";
                        
                        for (i = 0; i < responseObject.sharing.length; i++) {

                            document.getElementById('shareduserselect').innerHTML += \"<option value='\" + responseObject.sharing[i].fullname + \"'>\" + responseObject.sharing[i].fullname + \"</option>\";

                        }

                        \$('#addTaskModal').modal('show');
                        document.getElementById('tasktypeid').value = id;
                        document.getElementById('tasktype').value = type;
                    } else {
                        console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                    }
                });

            } else {

                \$.post('";
        // line 255
        echo $this->env->getExtension('routing')->getPath("login_login_getFullname");
        echo "',
                        {name: username},
                function (response) {
                    if (response !== \"false\") {
                        document.getElementById('shareduserselect').innerHTML = \"<option value='\" + response + \"'>\" + response + \"</option>\";

                        \$('#addTaskModal').modal('show');
                        document.getElementById('tasktypeid').value = id;
                        document.getElementById('tasktype').value = type;
                    } else {
                        console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                    }
                });
            }
        }

        function editTaskPopupInt(id,sharing,username){
            typeId = id;
            typeSharing = sharing;
            typeUsername = username;
            editTaskPopup(id);
        }
        
        function editTaskPopup(taskId) {
            if (typeSharing != '') {
                \$.post('";
        // line 280
        echo $this->env->getExtension('routing')->getPath("login_login_getusers");
        echo "',
                        {sharedusers: typeSharing, user: typeUsername},
                function (response) {
                    if (response !== \"false\") {
                        console.log(\"@@@@@@@@@\", response);
                        var responseObject = JSON.parse(response);
                        document.getElementById('editShareduserselect').innerHTML = \"<option value='\" + responseObject.originatorname + \"'>\" + responseObject.originatorname + \"</option>\";
                        
                        for (i = 0; i < responseObject.sharing.length; i++) {

                            document.getElementById('editShareduserselect').innerHTML += \"<option value='\" + responseObject.sharing[i].fullname + \"'>\" + responseObject.sharing[i].fullname + \"</option>\";

                        }
                        var jsonString = JSON.parse(initResponse);
                        

                        for (var i = 0; i < jsonString.tasks.length; i++) {
                            var tempTask = jsonString.tasks[i];

                            if (tempTask.id === taskId) {
                                document.getElementById('editPriority').value = tempTask.priority;
                                document.getElementById('editDue').value = tempTask.dueDate;
                                document.getElementById('editShareduserselect').value = tempTask.assignedTo;
                                document.getElementById('editVisibility').value = tempTask.visibility;
                                document.getElementById('editTaskname').value = tempTask.taskName;
                                document.getElementById('editTaskid').value = taskId;
                                document.getElementById('editTasknotes').innerHTML = tempTask.message;
                                \$('#editTasktags').tagsinput('add',tempTask.tags);
                                break;

                            }

                        }

                        \$('#editTaskModal').modal('show');
                    } else {
                        console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                    }
                });

            } else {

                \$.post('";
        // line 322
        echo $this->env->getExtension('routing')->getPath("login_login_getFullname");
        echo "',
                        {name: typeUsername},
                function (response) {
                    if (response !== \"false\") {
                        document.getElementById('editShareduserselect').innerHTML = \"<option value='\" + response + \"'>\" + response + \"</option>\";
                        
                         var jsonString = JSON.parse(initResponse);
                        

                        for (var i = 0; i < jsonString.tasks.length; i++) {
                            var tempTask = jsonString.tasks[i];

                            if (tempTask.id === taskId) {
                                document.getElementById('editPriority').value = tempTask.priority;
                                document.getElementById('editDue').value = tempTask.dueDate;
                                document.getElementById('editShareduserselect').value = tempTask.assignedTo;
                                document.getElementById('editVisibility').value = tempTask.visibility;
                                document.getElementById('editTaskname').value = tempTask.taskName;
                                document.getElementById('editTaskid').value = taskId;
                                document.getElementById('editTasknotes').innerHTML = tempTask.message;
                                \$('#editTasktags').tagsinput('add',tempTask.tags);
                                break;
                            }

                        }
                        
                        \$('#editTaskModal').modal('show');
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
            var tasktype = document.getElementById('tasktype').value;

            \$.post('";
        // line 368
        echo $this->env->getExtension('routing')->getPath("task_savetask");
        echo "',
                    {priority: priority, due: due, shareduserselect: shareduserselect, visibility: visibility, taskname: taskname, tasknotes: tasknotes, tasktags: tasktags, tasktype: tasktype, tasktypeid: tasktypeid},
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
                        username: tempTask.username,
                        tags: tempTask.tags,
                        message: tempTask.message
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
        
        function updateTask(){
            var priority = document.getElementById('editPriority').value;
            var due = document.getElementById('editDue').value;
            var shareduserselect = document.getElementById('editShareduserselect').value;
            var visibility = document.getElementById('editVisibility').value;
            var taskname = document.getElementById('editTaskname').value;
            var tasknotes = document.getElementById('editTasknotes').value;
            var tasktags = document.getElementById('editTasktags').value;
            var taskid = document.getElementById('editTaskid').value;
            
            \$.post('";
        // line 420
        echo $this->env->getExtension('routing')->getPath("task_updatetask");
        echo "',
                    {priority: priority, due: due, shareduserselect: shareduserselect, visibility: visibility, taskname: taskname, tasknotes: tasknotes, tasktags: tasktags, id: taskid},
            function (response) {
                if (response !== false) {
                    \$table.bootstrapTable('removeAll');
                    \$table.bootstrapTable('showLoading');

                    var jsonString = JSON.parse(initResponse);
                    var responseObject = JSON.parse(response);

                    for (var i = 0; i < jsonString.tasks.length; i++) {
                        
                        if(jsonString.tasks[i].id === responseObject.id){
                            jsonString.tasks[i].taskName = responseObject.taskName;
                            jsonString.tasks[i].name = responseObject.name;
                            jsonString.tasks[i].priority = responseObject.priority;
                            jsonString.tasks[i].assignedTo = responseObject.assignedTo;
                            jsonString.tasks[i].dueDate = responseObject.dueDate;
                            jsonString.tasks[i].tags = responseObject.tags;
                            jsonString.tasks[i].message = responseObject.message;
                        }


                    }
                    initResponse = JSON.stringify(jsonString);
                    \$table.bootstrapTable('hideLoading');
                    \$table.bootstrapTable('append', convertData(initResponse));


                } else {
                    console.log(\"error occured in saving tasks\", response);
                }
            });
        }
        
        function deleteTask (id){
            var deletePath = '";
        // line 456
        echo $this->env->getExtension('routing')->getPath("task_delete_task", array("id" => 0));
        echo "';
            deletePath = deletePath.substring(0, deletePath.length - 1);
            \$.post(deletePath + id,
                        null,
                function (response) {
                    if (response !== \"false\") {
                        removeEntryFromTable (id);
                    } else {
                        console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                    }
                });
        }
        
        function completeTask (id){
            var completePath = '";
        // line 470
        echo $this->env->getExtension('routing')->getPath("task_complete_task", array("id" => 0));
        echo "';
            completePath = completePath.substring(0, completePath.length - 1);
            \$.post(completePath + id,
                        null,
                function (response) {
                    if (response !== \"false\") {
                        removeEntryFromTable (id);
                    } else {
                        console.log(\"error occured in the mange opportunity in retriving shared users\", response);
                    }
                });
        }
        
        function removeEntryFromTable (id){
            \$table.bootstrapTable('removeAll');
            \$table.bootstrapTable('showLoading');

            var jsonString = JSON.parse(initResponse);
            var filterContact = [];

            for (var i = 0; i < jsonString.tasks.length; i++) {
                var tempContact = jsonString.tasks[i];

                if (id !== tempContact.id) {
                    filterContact.push(tempContact);
                }

            }
            var filterOpportunitiesArray = {'tasks': filterContact};
            var jsonStr = JSON.stringify(filterOpportunitiesArray);
            initResponse = jsonStr;
            \$table.bootstrapTable('hideLoading');
            \$table.bootstrapTable('append', convertData(jsonStr));
        }
        
        function exportTableDataToCSV() {
                var data = JSON.parse(initResponse);
                
                exportToCSV(data.tasks, \"tasks.csv\", [\"name\", \"company\", \"priority\", \"assignedTo\", \"dueDate\"]);
        }
        
        function exportTableDataToPDF() {
                var data = JSON.parse(initResponse);
                
                var userTablePDF = new exportPDF(data.tasks, \"tasks.pdf\", 
                [\"name\", \"company\", \"priority\", \"assignedTo\", \"dueDate\"], \"Manage Tasks\");
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
        return array (  569 => 470,  552 => 456,  513 => 420,  458 => 368,  409 => 322,  364 => 280,  336 => 255,  309 => 231,  260 => 184,  256 => 183,  253 => 182,  249 => 180,  247 => 179,  235 => 170,  229 => 167,  162 => 103,  143 => 87,  101 => 48,  83 => 33,  72 => 24,  67 => 22,  63 => 21,  60 => 20,  55 => 18,  51 => 17,  48 => 16,  43 => 14,  39 => 13,  35 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}

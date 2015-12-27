<?php

/* TaskBundle:Default:tasksTable.html.twig */
class __TwigTemplate_c6efa21dfdfe6bbbe53290d23fb39597861b3b4ccb37de3330b91ba779581573 extends Twig_Template
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
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div style=\"padding:25px\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"pull-left\">
                            ";
        // line 8
        if (array_key_exists("opportunity", $context)) {
            // line 9
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunityV2");
            echo "\" style=\"color: black;\"> << Back to Deals</a>
                            ";
        } elseif (array_key_exists("contact", $context)) {
            // line 11
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
            echo "\" style=\"color: black;\"> << Back to Contacts</a>
                            ";
        } elseif (array_key_exists("user", $context)) {
            // line 13
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_users");
            echo "\" style=\"color: black;\"> << Back to Users</a>
                            ";
        }
        // line 15
        echo "                    </div>
                    <div class=\"pull-right\">  
                        <span calss=\"pull-right\">
                            ";
        // line 18
        if (array_key_exists("opportunity", $context)) {
            // line 19
            echo "                                <a href=\"javascript:taskpopup('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getSharing", array(), "method"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getUsername", array(), "method"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getId", array(), "method"), "html", null, true);
            echo ", 'opportunity')\" 
                                   style=\"color: black;\">
                                    <i class=\"fa fa-list\"></i> Add Tasks
                                </a>
                            ";
        } elseif (array_key_exists("contact", $context)) {
            // line 24
            echo "                                <a href=\"javascript:taskpopup('','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getId", array(), "method"), "html", null, true);
            echo ", 'contact')\"
                                   style=\"color: black;\">
                                    <i class=\"fa fa-list\"></i> Add Tasks
                                </a>
                            ";
        } elseif (array_key_exists("user", $context)) {
            // line 29
            echo "                                <a href=\"javascript:taskpopup('','";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"), "html", null, true);
            echo ", 'user')\"
                                   style=\"color: black;\">
                                    <i class=\"fa fa-list\"></i> Add Tasks
                                </a>
                            ";
        }
        // line 34
        echo "                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px;border-right: 2px solid #ddd;border-left: 2px solid #ddd;\">
                            <a href=\"javascript:refreshTable()\" style=\"color: black;\"><i class=\"fa fa-refresh fa-lg\" style=\"margin-left: 5px;margin-right: 2px;\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-print fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-file-text-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-file-excel-o fa-lg\"></i></a>
                        </span>
                        <span calss=\"pull-right\" style=\"margin-left: 10px\">
                            <a href=\"#\" style=\"color: black;\"><i class=\"fa fa-file-pdf-o fa-lg\"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            ";
        // line 53
        $this->env->loadTemplate("TaskBundle:Default:addTaskModal.html.twig")->display($context);
        // line 54
        echo "            <div class=\"row\">
                <div class=\"col-lg-12\" id=\"tableDiv\" style=\"display: none\">
                    <div id=\"user-table-div\" class=\"table-responsive\" style=\"min-height: 360px;\">
                        <table id=\"table\"
                               data-toggle=\"table\"
                               data-detail-view=\"true\"
                               data-search=\"true\"
                               data-page-size=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["manageview"]) ? $context["manageview"] : $this->getContext($context, "manageview")), "html", null, true);
        echo "\"
                               data-page-list=\"[10,25,50]\"
                               data-pagination=\"true\"
                               data-show-columns=\"true\"
                               data-detail-formatter=\"detailFormatter\"
                               data-row-style=\"rowStyle\">
                            <thead>
                                <tr>
                                    <th data-field=\"state\" data-checkbox=\"true\"></th>
                                    <th data-field=\"taskName\" data-sortable=\"true\">Task Name</th>
                                    <th data-field=\"name\" data-sortable=\"true\">Name</th>
                                    <th data-field=\"company\" data-sortable=\"true\">Company</th>
                                    <th data-field=\"priority\" data-sortable=\"true\">Priority</th>
                                    <th data-field=\"assignedTo\" data-sortable=\"true\">Assigned To</th>
                                    <th data-field=\"dueDate\" data-sortable=\"true\">Due Date</th>
                                    <th data-field=\"action\">Action</th>
                                    <th data-field=\"tags\">tags</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
";
        // line 88
        $this->env->loadTemplate("TaskBundle:Default:tasksTableScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TaskBundle:Default:tasksTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 88,  122 => 61,  113 => 54,  111 => 53,  90 => 34,  79 => 29,  68 => 24,  55 => 19,  53 => 18,  48 => 15,  42 => 13,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}

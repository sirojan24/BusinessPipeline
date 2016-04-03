<?php

/* TaskBundle:Default:addTaskModal.html.twig */
class __TwigTemplate_a0280dfcfa1032733c1bd1d38f54dbaa360952d15ad44a227f36c58927a3e730 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.number.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    jQuery(function (\$) {
        \$('#projectedrevenue').number(true, 0);
    });
</script>
<!-- Modal -->
<div class=\"modal fade\" id=\"addTaskModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h3 class=\"modal-title\"><i class=\"fa fa-list\"></i> Add Task</h3>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Priority <span style=\"color:#FF0000;\">*</span></label>
                                <select class=\"form-control\" name=\"priority\" id=\"priority\">
                                    <option value=\"Normal\" >Normal</option>
                                    <option value=\"Medium\" >Medium</option>
                                    <option value=\"High\" >High</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Due <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"text\" class=\"form-control\" name=\"due\" id=\"due\">
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">AssignTo <span style=\"color:#FF0000;\">*</span></label>
                                <select class=\"form-control\" name=\"assignto\" id=\"shareduserselect\" >
                                    
                                </select>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Visibility <span style=\"color:#FF0000;\">*</span></label>
                                <select class=\"form-control\" name=\"visibility\" id=\"visibility\" >
                                    <option value=\"Public\" >Entire Company</option>
                                    <option value=\"Private\" >Private</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Task Name <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"text\" id=\"taskname\" placeholder=\"Task name\" class=\"form-control\" 
                                       name=\"notename\" id=\"notename\" data-parsley-trigger=\"keyup\" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Description</label>
                                <textarea  id=\"tasknotes\" placeholder=\"Notes\" name=\"notes\" class=\"form-control\" 
                                           id=\"notes\" data-parsley-trigger=\"keyup\" rows=\"4\"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Tags</label>
                                <input type=\"text\" id=\"tasktags\" class=\"form-control\" name=\"tags\"  data-role=\"tagsinput\"/>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" id=\"tasktypeid\"/>
                    <input type=\"hidden\" id=\"tasktype\"/>
                </form>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn btn-default\" href=\"javascript:clearFilter()\">Cancel</a>
                <button id=\"savebutton\" class=\"btn btn-primary\" onclick=\"saveTask()\" data-dismiss=\"modal\">Save</button>
            </div>
        </div>

    </div>
</div>

<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>
";
        // line 99
        $this->env->loadTemplate("TaskBundle:Default:taskModalScript.html.twig")->display($context);
        // line 100
        echo "<script>
\$('#due').datepicker({});
</script>";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Default:addTaskModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 100,  127 => 99,  123 => 98,  24 => 2,  19 => 1,);
    }
}

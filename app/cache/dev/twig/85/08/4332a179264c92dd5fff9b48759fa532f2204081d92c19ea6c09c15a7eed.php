<?php

/* TaskBundle:Default:editTaskModal.html.twig */
class __TwigTemplate_85084332a179264c92dd5fff9b48759fa532f2204081d92c19ea6c09c15a7eed extends Twig_Template
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
<div class=\"modal fade\" id=\"editTaskModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h3 class=\"modal-title\"><i class=\"fa fa-list\"></i> Edit Task</h3>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Priority <span style=\"color:#FF0000;\">*</span></label>
                                <select class=\"form-control\" name=\"priority\" id=\"editPriority\">
                                    <option value=\"Normal\" >Normal</option>
                                    <option value=\"Medium\" >Medium</option>
                                    <option value=\"High\" >High</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Due <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"text\" class=\"form-control\" name=\"due\" id=\"editDue\">
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">AssignTo <span style=\"color:#FF0000;\">*</span></label>
                                <select class=\"form-control\" name=\"assignto\" id=\"editShareduserselect\" >
                                    
                                </select>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Visibility <span style=\"color:#FF0000;\">*</span></label>
                                <select class=\"form-control\" name=\"visibility\" id=\"editVisibility\" >
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
                                <input type=\"text\" id=\"editTaskname\" placeholder=\"Task name\" class=\"form-control\" 
                                       name=\"notename\" data-parsley-trigger=\"keyup\" required/>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Description</label>
                                <textarea  id=\"editTasknotes\" placeholder=\"Notes\"  name=\"notes\" class=\"form-control\" 
                                           data-parsley-trigger=\"keyup\" rows=\"4\"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row\">\t\t\t
                        <div class=\"col-xs-12\">
                            <div class=\"form-group\" id=\"filterStageDiv\">
                                <label for=\"firstname\">Tags</label>
                                <input type=\"text\" id=\"editTasktags\" class=\"form-control\" name=\"tags\"  data-role=\"tagsinput\"/>
                            </div>
                        </div>
                    </div>
                     <input type=\"hidden\" id=\"editTaskid\"/>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <button id=\"savebutton\" class=\"btn btn-primary\" onclick=\"updateTask()\" data-dismiss=\"modal\">Save</button>
            </div>
        </div>

    </div>
</div>
<script>
    \$('#editDue').datepicker({});
</script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Default:editTaskModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 99,  24 => 2,  19 => 1,);
    }
}

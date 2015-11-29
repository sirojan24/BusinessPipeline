<?php

/* SettingsBundle:Stages:editstageform.html.twig */
class __TwigTemplate_fb4f81448a1b88a59d0b29af8c889cd64cce7197e726d65166f0b427bfba1a50 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("settings_updatestage");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Name\" autocomplete=\"off\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "getName", array(), "method"), "html", null, true);
        echo "\"
                                   placeholder=\"\" pattern=\"^[a-zA-Z_.,':;0-9 ]*\$\" data-parsley-pattern=\"^[a-zA-Z_.,':;0-9 ]*\$\"  
                                   data-parsley-trigger=\"keyup\" onkeyup=\"stageAvailability()\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"Last Name\">Chance of Sale <span style=\"color:#FF0000;\">*</span></label>
                            <div class=\"input-group\" >
                                <input type=\"text\" name=\"salechance\" class=\"form-control\" id=\"salechance\"  value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "getSalechance", array(), "method"), "html", null, true);
        echo "\" 
                                       placeholder=\"Chance of sale\" data-parsley-type=\"digits\" data-parsley-trigger=\"keyup\" required/>
                                <span class=\"input-group-addon\">
                                    %
                                </span>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Notes</label>
                            <textarea  id=\"notes\" placeholder=\"Notes\" class=\"form-control\" name=\"notes\" rows =\"4\"
                                data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-trigger=\"keyup\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "getNotes", array(), "method"), "html", null, true);
        echo "</textarea>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                    <input type=\"hidden\" value = \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "getId", array(), "method"), "html", null, true);
        echo "\" name =\"id\">
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("settings_managestagesV2");
        echo "\">Cancel</a>
                            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_deletestage", array("id" => $this->getAttribute((isset($context["stage"]) ? $context["stage"] : $this->getContext($context, "stage")), "getId", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-danger\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 58
        $this->env->loadTemplate("SettingsBundle:Stages:stageformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SettingsBundle:Stages:editstageform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 58,  85 => 47,  81 => 46,  70 => 38,  63 => 34,  46 => 20,  32 => 9,  24 => 4,  19 => 1,);
    }
}

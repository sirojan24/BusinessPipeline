<?php

/* SettingsBundle:Stages:stageform.html.twig */
class __TwigTemplate_781589c7bc38795989127addf74fb4b8ecc4e40135096f9b28589564e2c52d47 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("settings_savestage");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Name\" autocomplete=\"off\"
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
                                <input type=\"text\" name=\"salechance\" class=\"form-control\" id=\"salechance\" 
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
                                       data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-trigger=\"keyup\"></textarea>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("settings_managestagesV2");
        echo "\">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 53
        $this->env->loadTemplate("SettingsBundle:Stages:stageformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SettingsBundle:Stages:stageform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 53,  68 => 45,  24 => 4,  19 => 1,);
    }
}

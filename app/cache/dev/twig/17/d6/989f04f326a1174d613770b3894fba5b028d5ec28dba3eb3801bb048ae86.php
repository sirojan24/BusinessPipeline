<?php

/* NotesBundle:Default:notesModal.html.twig */
class __TwigTemplate_17d6989f04f326a1174d613770b3894fba5b028d5ec28dba3eb3801bb048ae86 extends Twig_Template
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
<div class=\"modal fade\" id=\"addnotes\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Notes</h4>
            </div>
            <div class=\"modal-body\" style='height: 400px'>
                
                ";
        // line 13
        $this->env->loadTemplate("NotesBundle:Default:notesContent.html.twig")->display($context);
        // line 14
        echo "            </div>
            <div class=\"panel-footer\">
                    <div class=\"input-group\">
                        <input id=\"message\" type=\"text\" class=\"form-control input-md chat_input\" placeholder=\"Write your message here...\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-primary btn-md\" id=\"btn-chat\" onclick=\"savenote()\">Send</button>
                        </span>
                    </div>
            </div>
       </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NotesBundle:Default:notesModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  33 => 13,  19 => 1,);
    }
}

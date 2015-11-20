<?php

/* NotesBundle:Default:notesModal.html.twig */
class __TwigTemplate_5bcf29fadb010c09fc5247122744071e4986d1741bfa020b247859483757645f extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/css/bootstrap-notes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-notes.js"), "html", null, true);
        echo "\"></script>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Notes</h4>
            </div>
            <div class=\"modal-body\" style='height: 400px'>
                
                ";
        // line 14
        $this->env->loadTemplate("NotesBundle:Default:notesContent.html.twig")->display($context);
        // line 15
        echo "            </div>
            <div class=\"panel-footer\">
                    <div class=\"input-group\">
                        <input id=\"btn-input\" type=\"text\" class=\"form-control input-md chat_input\" placeholder=\"Write your message here...\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
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
        return array (  41 => 15,  39 => 14,  24 => 2,  19 => 1,);
    }
}

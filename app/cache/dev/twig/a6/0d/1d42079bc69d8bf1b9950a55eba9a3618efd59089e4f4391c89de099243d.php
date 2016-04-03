<?php

/* TaskBundle:Default:taskModalScript.html.twig */
class __TwigTemplate_a60d1d42079bc69d8bf1b9950a55eba9a3618efd59089e4f4391c89de099243d extends Twig_Template
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
<script>
    function clearFilter(){
        \$('#priority option[selected=\"selected\"]').each(
            function() {
                \$(this).removeAttr('selected');
            }
        );
        \$(\"#priority option:first\").attr('selected','selected');
        
        \$(\"#due\").val(\"\");
        
        \$('#shareduserselect option[selected=\"selected\"]').each(
            function() {
                \$(this).removeAttr('selected');
            }
        );
        \$(\"#shareduserselect option:first\").attr('selected','selected');
        
        \$('#visibility option[selected=\"selected\"]').each(
            function() {
                \$(this).removeAttr('selected');
            }
        );
        \$(\"#visibility option:first\").attr('selected','selected');
        
        \$(\"#notename\").val(\"\");
        
        \$(\"#notes\").val(\"\");
        
        \$(\"#tasktags\").tagsinput('removeAll');
        
        \$(\"#addTaskModal\").modal(\"hide\");
    }

</script>";
    }

    public function getTemplateName()
    {
        return "TaskBundle:Default:taskModalScript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

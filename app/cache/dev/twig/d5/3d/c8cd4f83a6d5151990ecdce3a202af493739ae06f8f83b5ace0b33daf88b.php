<?php

/* OpportunityBundle:Default:filterModalscript.html.twig */
class __TwigTemplate_d53dc8cd4f83a6d5151990ecdce3a202af493739ae06f8f83b5ace0b33daf88b extends Twig_Template
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
    function clearFilter() {
        //alert(\$('input').tagsinput);
        \$(\"#myModal\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) { 
            \$(checkboxObject).prop('checked',false);
        });
        
        \$(\"#myModal\").find(\"input[type=text]\").each(function (i, checkboxObject) { 
            \$(checkboxObject).val('');
        });
        
        \$(\"#myModal\").find(\"input[type=radio]\").each(function (i, checkboxObject) { 
            if(\$(checkboxObject).is(':checked')) {
                
            }else{
                
            }
            
            if(i == 1){
                \$(checkboxObject).prop('checked',true);
            }else{
                \$(checkboxObject).prop('checked',false);
            }
        });
        \$(\"#filterTags\").tagsinput('removeAll');
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:filterModalscript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

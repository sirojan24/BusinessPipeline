<?php

/* OpportunityBundle:Default:shareUserModalScript.html.twig */
class __TwigTemplate_2c9b4ac7aef0a11a7852f9e88648ee181a03b52be49d8bc4f942d8966b5ce99b extends Twig_Template
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
    var \$sharedUserTable = \$('#sharedUserTable');
    
    function showSharedUserModal(users){
        \$sharedUserTable.bootstrapTable('removeAll');
        \$sharedUserTable.bootstrapTable('append', users);
        \$('#shareUserModal').modal('show');
    }
</script>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:shareUserModalScript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

<?php

/* ContactsContactsBundle:Default:contactformScript.html.twig */
class __TwigTemplate_21ded7eb68c24cd2b987bd7623bea33df4ddd16b74cc379c6f481cad9d7e8ad1 extends Twig_Template
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
    \$(document).ready(function () {
        
    });
    
    var showEmailId = 1;
    function addEmail(){
        \$(\"#emailDiv\" + showEmailId).show();
        showEmailId++;
        
        if(showEmailId >= 10){
            \$(\"#addEmailDiv\").hide();
        }
    }
    
    var showPhoneId = 1;
    function addPhone(){
        \$(\"#phoneDiv\" + showPhoneId).show();
        showPhoneId++;
        
        if(showPhoneId >= 10){
            \$(\"#addPhoneDiv\").hide();
        }
    }
    
    var showSubContactId = 1;
    function addSubContact(){
        \$(\"#subcontact\" + showSubContactId).show();
        showSubContactId++;
        
        if(showSubContactId > 2){
            \$(\"#addSubContactDiv\").hide();
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:contactformScript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

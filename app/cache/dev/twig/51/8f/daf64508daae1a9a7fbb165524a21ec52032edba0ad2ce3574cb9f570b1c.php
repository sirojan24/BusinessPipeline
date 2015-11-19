<?php

/* ContactsContactsBundle:Default:editcontactformScript.html.twig */
class __TwigTemplate_518fdaf64508daae1a9a7fbb165524a21ec52032edba0ad2ce3574cb9f570b1c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function () {

    });

    function addEmail() {
        \$(\"#emailDiv\" + showEmailId).show();
        showEmailId++;

        if (showEmailId >= 10) {
            \$(\"#addEmailDiv\").hide();
        }
    }

    function addPhone() {
        \$(\"#phoneDiv\" + showPhoneId).show();
        showPhoneId++;

        if (showPhoneId >= 10) {
            \$(\"#addPhoneDiv\").hide();
        }
    }

    var showSubContactId = 1;
    function addSubContact() {
        \$(\"#subcontact\" + showSubContactId).show();
        showSubContactId++;

        if (showSubContactId > 2) {
            \$(\"#addSubContactDiv\").hide();
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:editcontactformScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

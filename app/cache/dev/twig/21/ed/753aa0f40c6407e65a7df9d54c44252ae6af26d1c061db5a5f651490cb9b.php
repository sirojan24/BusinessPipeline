<?php

/* OpportunityBundle:Default:filterModal.html.twig */
class __TwigTemplate_21ed753aa0f40c6407e65a7df9d54c44252ae6af26d1c061db5a5f651490cb9b extends Twig_Template
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
                \$(\"#fFromDate\").mask(\"99-99-9999\");
                \$(\"#fToDate\").mask(\"99-99-9999\");
            });
</script>
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Filters</h4>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_login_fullsignup");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Deal Date</label>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-8\">
                        <div class=\"col-xs-5\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"fFromDate\" name=\"fFromDate\" placeholder=\"month/date/year\">
                            </div>
                        </div>
                        <div class=\"col-xs-1\">
                            <div class=\"form-group\">
                                <label for=\"firstname\">-</label>
                            </div>
                        </div>
                        <div class=\"col-xs-5\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control date-picker\" data-date-format=\"mm-dd-yyyy\" id=\"fToDate\" name=\"fToDate\" placeholder=\"month/date/year\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:filterModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 53,  46 => 21,  24 => 2,  19 => 1,);
    }
}

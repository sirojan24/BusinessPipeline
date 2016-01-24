<?php

/* ContactsContactsBundle:Default:importContactsV2.html.twig */
class __TwigTemplate_2d2a453bb38ad3ee17179ef14adb065b3b656e36bdbdc7f711daa010e58a7b1e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

    ";
        // line 4
        $this->env->loadTemplate("AppBundle:Default:head.html.twig")->display($context);
        // line 5
        echo "
    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            ";
        // line 11
        $this->env->loadTemplate("AppBundle:Default:navigation.html.twig")->display($context);
        // line 12
        echo "




            <!-- Page Content -->\t\t
            <div id=\"page-wrapper\" class=\"no-padding\">
                <div class=\"container-fluid\">
                    <div class=\"alert alert-success alert-dismissable\" id=\"successmsg\" style=\"display: none\">
                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times;
                        </button>
                        <center> <strong>Well done! Your users have been sucessfully imported</strong></center>
                    </div>




                    <div class=\"alert alert-danger alert-dismissable\" id=\"errormsg\" style=\"display: none\">
                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times;
                        </button>    
                        <center> <strong>Your import have some duplicate usernames .Unique users succesfully imported</strong></center>


                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Import Contact(s)</h1>
                        </div>
                    </div>
                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"col-xs-10\" style=\"float: none; margin-left: auto;margin-right: auto;\">

                            <form action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_uploadcontact");
        echo "\" method = \"POST\" class=\"dropzone\" id=\"dropzone\">
                                <div class=\"fallback\">
                                    <input name=\"file\" type=\"file\" multiple=\"\" />
                                </div>
                            </form>
                        </div><!-- PAGE CONTENT ENDS -->
                    </div>
                </div>        
            </div>
            <br><br><br>
            ";
        // line 59
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 60
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 64
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 65
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:importContactsV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 68,  107 => 67,  103 => 66,  98 => 65,  96 => 64,  90 => 60,  88 => 59,  75 => 49,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

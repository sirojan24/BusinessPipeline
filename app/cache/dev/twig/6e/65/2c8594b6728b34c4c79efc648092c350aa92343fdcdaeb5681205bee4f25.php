<?php

/* LoginLoginBundle:Default:importusers_v2.html.twig */
class __TwigTemplate_6e652c8594b6728b34c4c79efc648092c350aa92343fdcdaeb5681205bee4f25 extends Twig_Template
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




                    <div class=\"alert alert-danger alert-dismissable\" id=\"usererrormsg\" style=\"display: none\">
                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times;
                        </button>    
                        <center> <strong>Your import have some duplicate usernames .Unique users succesfully imported</strong></center>


                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class = \"page-header\">Import User(s)</h1>
                        </div>
                    </div>
                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"col-xs-10\" style=\"float: none; margin-left: auto;margin-right: auto;\">

                            <form action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("login_login_upload");
        echo "\" method = \"POST\" class=\"dropzone\" id=\"dropzone\">
                                <div class=\"fallback\">
                                    <input name=\"file\" type=\"file\" multiple=\"\" />
                                </div>
                            </form>
                        </div><!-- PAGE CONTENT ENDS -->
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("settings_pipelinesetup");
        echo "\" class=\"btn btn-primary pull-right\">Back to setup</a>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <br><br><br>
            ";
        // line 64
        $this->env->loadTemplate("LoginLoginBundle:Default:footer_v2.html.twig")->display($context);
        // line 65
        echo "
        </div>
        <!-- /#wrapper -->

        ";
        // line 69
        $this->env->loadTemplate("AppBundle:Default:scripts.html.twig")->display($context);
        // line 70
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:importusers_v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 73,  115 => 72,  111 => 71,  106 => 70,  104 => 69,  98 => 65,  96 => 64,  86 => 57,  75 => 49,  36 => 12,  34 => 11,  26 => 5,  24 => 4,  19 => 1,);
    }
}

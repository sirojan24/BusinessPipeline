<?php

/* LoginLoginBundle:Default:scripts.html.twig */
class __TwigTemplate_0789c6bb8ec4f4c895b65188d87a6bdf05dd94dd5ade5f1f08548fa9ce710446 extends Twig_Template
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
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    
    <script>
      function openTermsModal(){
          \$('#termsModal').modal('show');
          return false;
      }  
    </script>    ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }
}

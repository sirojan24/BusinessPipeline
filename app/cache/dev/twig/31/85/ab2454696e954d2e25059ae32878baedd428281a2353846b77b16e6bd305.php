<?php

/* AppBundle:Default:scripts.html.twig */
class __TwigTemplate_3185ab2454696e954d2e25059ae32878baedd428281a2353846b77b16e6bd305 extends Twig_Template
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
    
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }
}

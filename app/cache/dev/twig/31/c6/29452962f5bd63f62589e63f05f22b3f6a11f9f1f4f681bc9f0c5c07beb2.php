<?php

/* AppBundle:Default:navigation.html.twig */
class __TwigTemplate_31c629452962f5bd63f62589e63f05f22b3f6a11f9f1f4f681bc9f0c5c07beb2 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"container container-top\">
        <!-- navbar-header -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("web_dashboard");
        echo "\"><span style=\"font-family: 'Oswald', serif;\">PIPELINE<font color=\"#95BE22\"><strong> 99</font></strong></a></span>
        </div>
        <!-- /.end navbar-header -->

        <!-- User Profile -->
        <ul class=\"nav navbar-user navbar-right\" style=\"width:115px\">
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\"width:300px\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
        echo "\" alt=\"user\" class=\"img-responsive img-user\" /> ";
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo " <i class=\"fa fa-caret-down\"></i>
                    <!-- <span class=\"online\"></span> -->
                </a>
                <span class=\"arrow-up\"></span>
                <ul class=\"dropdown-messages\">
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login_login_updateprofile");
        echo "\">My Profile</a></li>
                    ";
        // line 25
        if ((((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin") || ((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin"))) {
            // line 26
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_pipelinesetup");
            echo "\">Pipeline Setup</a></li>
                    ";
        }
        // line 28
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("login_login_logout");
        echo "\">Logout</a></li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
        </ul> 
        <!-- /.end User Profile -->

        <div id=\"navbar\" class=\"navbar-collapse collapse\">


            <!-- Top Black Menu -->
            <ul class=\"nav navbar-top-links navbar-right\">
                <li>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("web_dashboard");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dashboard\"><i class=\"fa fa-tachometer\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Contacts\"><i class=\"fa fa-user\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunityV2");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Deals\"><i class=\"fa fa-usd\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("login_login_users");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Users\"><i class=\"fa fa-users\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("web_support");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Help & Support\"><i class=\"fa fa-question\"></i></a>
                </li>
            </ul>
            <!-- /.end Top Black Menu -->
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 53,  99 => 50,  93 => 47,  87 => 44,  81 => 41,  64 => 28,  58 => 26,  56 => 25,  52 => 24,  42 => 19,  31 => 11,  19 => 1,);
    }
}

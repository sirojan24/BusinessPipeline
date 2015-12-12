<?php

/* AppBundle:Default:navigation.html.twig */
class __TwigTemplate_0df33f0edb7eafc81f424d2e45effcfd00843705578e26bfaaa4b392ba6ac203 extends Twig_Template
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
            <a class=\"navbar-brand\" href=\"index.php\"><span style=\"font-family: 'Oswald', serif;\">PIPELINE<font color=\"#95BE22\"><strong> 99</font></strong></a></span>
        </div>
        <!-- /.end navbar-header -->

        <!-- User Profile -->
        <ul class=\"nav navbar-user navbar-right\" style=\"width:115px\">
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\"width:300px\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Flobbies75x75/Popie.png"), "html", null, true);
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
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("settings_pipelinesetup");
        echo "\">Pipeline Setup</a></li>
                    <li><a href=\"";
        // line 26
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
                    <a href=\"index.php\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Dashboard\"><i class=\"fa fa-tachometer\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Contacts\"><i class=\"fa fa-user\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunityV2");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Deals\"><i class=\"fa fa-usd\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("login_login_users");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Users\"><i class=\"fa fa-users\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 51
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
        return array (  94 => 51,  88 => 48,  82 => 45,  76 => 42,  57 => 26,  53 => 25,  49 => 24,  39 => 19,  19 => 1,);
    }
}

<?php

/* LoginLoginBundle:Default:navbar.html.twig */
class __TwigTemplate_de587092aafd78ffc7aafc4d6e4c74876c2efcd755aa34e4c392ea9584b10aa8 extends Twig_Template
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
        echo "<!-- #section:basics/sidebar.horizontal -->
<div id=\"sidebar\" class=\"sidebar h-sidebar no-gap sidebar-fixed responsive\">

\t\t<script type=\"text/javascript\">
\t\t\ttry{ace.settings.check('sidebar' , 'fixed')}catch(e){}
\t\t</script>
\t\t\t\t
    <!-- #section:basics/navbar.layout.brand -->
    <a href=\"#\" class=\"navbar-brand\" style=\"margin-left:10px\">
        <h3>
            <i class=\"fa fa-line-chart\"></i>
            Pipeline 99
        </h3>
    </a>

    <!-- /section:basics/navbar.layout.brand -->

    <ul class=\"nav nav-list pull-right\">
        <li class=\"hover\" style=\"border-left:1px solid #d4dfe3;\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-tachometer\"></i>
                <span class=\"menu-text\"> Dashboard </span>
            </a>
        </li>

\t\t<li class=\"hover\">
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_managecontacts");
        echo "\">
                <i class=\"menu-icon fa fa-book\"></i>
                <span class=\"menu-text\">Contacts</span>
            </a>
        </li>
\t\t
        <li class=\"hover\">
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunity");
        echo "\">
                <i class=\"menu-icon fa fa-usd\"></i>
                <span class=\"menu-text\">Opportunities</span>
            </a>
\t\t</li>
    
\t\t<li class=\"hover\">
            <a href=\"#\">
                <i class=\"menu-icon fa fa-bar-chart\"></i>
                <span class=\"menu-text\">Reports</span>
            </a>
        </li>

        <li class=\"hover\">
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("login_login_users");
        echo "\">
                <i class=\"menu-icon fa fa-group\"></i>
                <span class=\"menu-text\">Users</span>
            </a>
        </li>

        <li class=\"hover\">
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("help_homepage");
        echo "\">
                <i class=\"menu-icon fa fa-question\"></i>
                <span class=\"menu-text\"> Help </span>
            </a>
        </li>

        <li class=\"hover\" style=\"margin-right:30px; border-right:1px solid #d4dfe3;\">
            <a href=\"#\" class=\"dropdown-toggle\">
                <i class=\"menu-icon fa fa-user\"></i>
                <span class=\"menu-text\"> ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo " </span>
                <b class=\"arrow fa fa-angle-down\"></b>
            </a>
            <b class=\"arrow\"></b>
            <ul class=\"submenu\">

\t\t\t<!-- Admin Only-->\t
\t\t\t";
        // line 71
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin")) {
            echo "        
\t\t\t\t<li class=\"hover highlight\" style=\"margin-right:30px;\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-cog\"></i>
\t\t\t\t\t\t<span class=\"menu-text\">Pipeline Settings</span>
\t\t\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t\t\t</a>
\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t\t <ul class=\"submenu\">
\t\t\t\t\t\t<li class=\"hover\">
\t\t\t\t\t\t\t<a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("login_login_users");
            echo "\">
\t\t\t\t\t\t\t\tManage Users
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"hover\">
\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("settings_manageaccounttypes");
            echo "\">
\t\t\t\t\t\t\t\tAccount Types
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"hover\">
\t\t\t\t\t\t\t<a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("settings_managestages");
            echo "\">
\t\t\t\t\t\t\t\tPipeline Stages
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"hover\">
\t\t\t\t\t\t\t<a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("settings_manageproducttypes");
            echo "\">
\t\t\t\t\t\t\t\tProduct Types
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"hover\">
\t\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("settings_manageopportunitysources");
            echo "\">
\t\t\t\t\t\t\t\tOpportunity Source
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>\t
\t\t\t\t</li>
\t\t\t";
        }
        // line 107
        echo "        
\t\t\t<!-- END Admin Only --> \t\t\t
\t\t\t
                <li class=\"hover\">
                    <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("login_login_updateprofile");
        echo "\">
                        <i class=\"ace-icon fa fa-user\"></i>
                        Profile
                    </a>
                </li>

                <li class=\"divider\"></li>

                <li class=\"hover\">
                    <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("login_login_logout");
        echo "\">
                        <i class=\"ace-icon fa fa-power-off\"></i>
                        Logout
                    </a>
                </li>
            </ul>\t\t\t\t
        </li>
    </ul><!-- /.nav-list -->

    <!-- #section:basics/sidebar.layout.minimize -->

    <!-- /section:basics/sidebar.layout.minimize -->
    <script type=\"text/javascript\">
        try {
            ace.settings.check('sidebar', 'collapsed')
        } catch (e) {
        }
    </script>
</div>

<!-- /section:basics/sidebar.horizontal -->";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 120,  167 => 111,  161 => 107,  151 => 101,  143 => 96,  135 => 91,  127 => 86,  119 => 81,  106 => 71,  96 => 64,  84 => 55,  74 => 48,  57 => 34,  47 => 27,  19 => 1,);
    }
}

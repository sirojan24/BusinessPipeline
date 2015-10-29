<?php

/* LoginLoginBundle:Default:manageUsers.html.twig */
class __TwigTemplate_a43a889949dfc030a8265daaf3bc112a04b9b0ce7f331c5c20319c7beab98cee extends Twig_Template
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
    
\t";
        // line 4
        $this->env->loadTemplate("LoginLoginBundle:Default:head.html.twig")->display($context);
        // line 5
        echo "
\t<body class=\"no-skin\">
\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t";
        // line 12
        $this->env->loadTemplate("LoginLoginBundle:Default:navbar.html.twig")->display($context);
        // line 13
        echo "                        
\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t<div class=\"page-content\">


\t\t\t\t\t\t<!-- /section:settings.box -->
\t\t\t\t\t\t<div>
                                                ";
        // line 21
        if (array_key_exists("errormsg", $context)) {
            // line 22
            echo "                                                    <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                        </button>
                                                        <center> <strong>";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                                                    </div>
                                                    <script> window.setTimeout(function() { \$(\"#successmsg\").alert('close'); }, 5000); </script>
                                                ";
        }
        // line 30
        echo "                                                ";
        if (array_key_exists("successmsg", $context)) {
            // line 31
            echo "                                                    <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                        </button>
                                                        <center> <strong>";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                                                    </div>
                                                    <script> window.setTimeout(function() { \$(\"#errormsg\").alert('close'); }, 5000); </script>
                                                ";
        }
        // line 39
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.page-header -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Manage Users</h3>
                                                               
\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                                                                            ";
        // line 50
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
            // line 51
            echo "                                                                                        <th>Company</th>
                                                                                       
                                                                                        
                                                                            ";
        }
        // line 54
        echo "    
\t\t\t\t\t\t\t\t\t\t\t<th>First name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Last name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Username</th>
                                                                                        
                                                                                        <th>Email</th>
                                                                            ";
        // line 60
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) != "Master Admin")) {
            // line 61
            echo "                                                                                        <th>Projected Revenue</th>
                                                                                        <th>Weighted Forecast</th>
                                                                            ";
        }
        // line 64
        echo "                                                                                        <th># of Opportunities</th>
                                                                                    ";
        // line 65
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) != "Regular")) {
            echo "      
                                                                                        <th>User Status</th>
                                                                                        <th>User Level</th>
                                                                                      
\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
                                                                                    ";
        }
        // line 70
        echo "    
\t\t\t\t\t\t\t\t\t</tr>
                                                                        </thead>

\t\t\t\t\t\t\t\t\t<tbody>
                                                                             ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo " 
                                                                                                            
                                                                                    <tr>
                                                                                     ";
            // line 78
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
                // line 79
                echo "                                                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getCompanyname", array(), "method"), "html", null, true);
                echo "</td>
                                                                                        
                                                                                        
                                                                                     ";
            }
            // line 82
            echo "  
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstname", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastname", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td> ";
            // line 85
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_edituserpage", array("id" => $this->getAttribute($context["user"], "getId", array(), "method"))), "html", null, true);
                echo "\">";
            }
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
            echo " ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
                echo " </a> ";
            }
            echo " </td>
                                                                                                                
                                                                                        <td><a href=\"mailto:";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getEmail", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getEmail", array(), "method"), "html", null, true);
            echo "</a></td>
                                                                                    ";
            // line 88
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) != "Master Admin")) {
                echo "   
                                                                                        <td>\$ ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getProjectedrevenue", array(), "method"), "html", null, true);
                echo "</td>
                                                                                        <td>\$ ";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getIndividualforecast", array(), "method"), "html", null, true);
                echo "</td>
                                                                                    ";
            }
            // line 92
            echo "                                                                                    ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
                // line 93
                echo "                                                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getNoofopportunity", array(), "method"), "html", null, true);
                echo "</td>
                                                                                    ";
            } else {
                // line 94
                echo "    
                                                                                        <td>";
                // line 95
                if (($this->getAttribute($context["user"], "getNoofopportunity", array(), "method") != 0)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_selecteduseropportunities", array("username" => $this->getAttribute($context["user"], "getUsername", array(), "method"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getNoofopportunity", array(), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getNoofopportunity", array(), "method"), "html", null, true);
                }
                echo "</td>
                                                                                    ";
            }
            // line 97
            echo "                                                                                        ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) != "Regular")) {
                // line 98
                echo "                                                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getStatus", array(), "method"), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getRole", array(), "method"), "html", null, true);
                echo " User</td>
                                                                                        ";
            }
            // line 101
            echo "                                                                                        ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin")) {
                // line 102
                echo "                                                                                        <td class=\"actions\"><a title=\"Edit\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_edituserpage", array("id" => $this->getAttribute($context["user"], "getId", array(), "method"))), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a></td>
                                                                                        ";
            }
            // line 104
            echo "                                                                                        ";
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
                // line 105
                echo "                                                                                        <td>";
                if (($this->getAttribute($context["user"], "getStatus", array(), "method") != "Active")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_activate", array("id" => $this->getAttribute($context["user"], "getId", array(), "method"))), "html", null, true);
                    echo "\">Activate</a>";
                }
                echo "</td>
                                                                                        ";
            }
            // line 107
            echo "                                                                                    </tr>
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo " 
                                                                        </tbody>
                                                                    </table>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

                        ";
        // line 120
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 121
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='../assets/js/jquery1x.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->
\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.colVis.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
                <script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t//initiate dataTables plugin
\t\t\t\tvar oTable1 = 
\t\t\t\t\$('#dynamic-table')
\t\t\t\t//.wrap(\"<div class='dataTables_borderWrap' />\")   //if you are applying horizontal scrolling (sScrollX)
\t\t\t\t.dataTable( {
\t\t\t\t\tbAutoWidth: false,
\t\t\t\t\t\"aoColumns\": [ ";
        // line 185
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
            echo "null, ";
        }
        // line 186
        echo "\t\t\t\t\t  null, null,null, null";
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) != "Master Admin")) {
            echo " ,null,null";
        }
        echo ",null";
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) != "Regular")) {
            echo ",null,null
\t\t\t\t\t   ,{ \"bSortable\": false } ";
        }
        // line 188
        echo "\t\t\t\t\t],
                                        ";
        // line 189
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Master Admin")) {
            // line 190
            echo "\t\t\t\t\t\"aaSorting\": [3,'asc'],
                                        ";
        } else {
            // line 192
            echo "                                        \"aaSorting\": [0,'asc'],   
                                        ";
        }
        // line 194
        echo "                                            
\t\t\t\t\t//,
\t\t\t\t\t//\"sScrollY\": \"200px\",
\t\t\t\t\t//\"bPaginate\": false,
\t\t\t
\t\t\t\t\t//\"sScrollX\": \"100%\",
\t\t\t\t\t//\"sScrollXInner\": \"120%\",
\t\t\t\t\t//\"bScrollCollapse\": true,
\t\t\t\t\t//Note: if you are applying horizontal scrolling (sScrollX) on a \".table-bordered\"
\t\t\t\t\t//you may want to wrap the table inside a \"div.dataTables_borderWrap\" element
\t\t\t
\t\t\t\t\t\"iDisplayLength\": ";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["manageview"]) ? $context["manageview"] : $this->getContext($context, "manageview")), "html", null, true);
        echo "
\t\t\t    } );
\t\t\t\t//oTable1.fnAdjustColumnSizing();
\t\t\t
\t\t\t
\t\t\t\t//TableTools settings
\t\t\t\tTableTools.classes.container = \"btn-group btn-overlap\";
\t\t\t\tTableTools.classes.print = {
\t\t\t\t\t\"body\": \"DTTT_Print\",
\t\t\t\t\t\"info\": \"tableTools-alert gritter-item-wrapper gritter-info gritter-center white\",
\t\t\t\t\t\"message\": \"tableTools-print-navbar\"
\t\t\t\t}
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//ColVis extension
\t\t\t\tvar colvis = new \$.fn.dataTable.ColVis( oTable1, {
\t\t\t\t\t\"buttonText\": \"<i class='fa fa-search'></i>\",
\t\t\t\t\t\"aiExclude\": [0, 6],
\t\t\t\t\t\"bShowAll\": true,
\t\t\t\t\t//\"bRestore\": true,
\t\t\t\t\t\"sAlign\": \"right\",
\t\t\t\t\t\"fnLabel\": function(i, title, th) {
\t\t\t\t\t\treturn \$(th).text();//remove icons, etc
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t}); 
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
\t\t\t\t\te.stopImmediatePropagation();
\t\t\t\t\te.stopPropagation();
\t\t\t\t\te.preventDefault();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//And for the first simple table, which doesn't have TableTools or dataTables
\t\t\t\t//select/deselect all rows according to table header checkbox
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t\t/********************************/
\t\t\t\t//add tooltip for small view action buttons in dropdown menu
\t\t\t\t\$('[data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\t
\t\t\t\t//tooltip placement on right or left
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('table')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\t//var w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
                                ";
        // line 267
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin")) {
            // line 268
            echo "                                \$('#dynamic-table_filter').prepend('<a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_adduser");
            echo "\"><button class=\"btn btn-info no-padding\" style=\"margin-right:10px;\"><i class=\"ace-icon fa fa-plus bigger-110\"></i> Add</button></a><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_importuser");
            echo "\"><button class=\"btn btn-info no-padding\" style=\"margin-right:10px;\"><i class=\"ace-icon fa fa-plus bigger-110\"></i> Import</button></a>');
                                ";
        }
        // line 270
        echo "                                    
                                \$(\"select\").on('change', function() {
                                     \$.post('";
        // line 272
        echo $this->env->getExtension('routing')->getPath("login_login_saveconfig");
        echo "',               
                                        {name:'userview',value:this.value}, 
                                        function(response){
                                            if(response !== \"false\"){
                                  

                                            }else{
                                                 console.log(\"error occured in getting the manage view number in contacts\",response); 
                                            }
                                     });  
                                     
                                });
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t var \$sidebar = \$('.sidebar').eq(0);
\t\t\t if( !\$sidebar.hasClass('h-sidebar') ) return;
\t\t\t
\t\t\t \$(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
\t\t\t\tif( event_name !== 'sidebar_fixed' ) return;
\t\t\t
\t\t\t\tvar sidebar = \$sidebar.get(0);
\t\t\t\tvar \$window = \$(window);
\t\t\t
\t\t\t\t//return if sidebar is not fixed or in mobile view mode
\t\t\t\tvar sidebar_vars = \$sidebar.ace_sidebar('vars');
\t\t\t\tif( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
\t\t\t\t\t\$sidebar.removeClass('lower-highlight');
\t\t\t\t\t//restore original, default marginTop
\t\t\t\t\tsidebar.style.marginTop = '';
\t\t\t
\t\t\t\t\t\$window.off('scroll.ace.top_menu')
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t var done = false;
\t\t\t\t \$window.on('scroll.ace.top_menu', function(e) {
\t\t\t
\t\t\t\t\tvar scroll = \$window.scrollTop();
\t\t\t\t\tscroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
\t\t\t\t\tif (scroll > 17) scroll = 17;
\t\t\t
\t\t\t
\t\t\t\t\tif (scroll > 16) {\t\t\t
\t\t\t\t\t\tif(!done) {
\t\t\t\t\t\t\t\$sidebar.addClass('lower-highlight');
\t\t\t\t\t\t\tdone = true;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tif(done) {
\t\t\t\t\t\t\t\$sidebar.removeClass('lower-highlight');
\t\t\t\t\t\t\tdone = false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t
\t\t\t\t\tsidebar.style['marginTop'] = (17-scroll)+'px';
\t\t\t\t }).triggerHandler('scroll.ace.top_menu');
\t\t\t
\t\t\t }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , \$sidebar.hasClass('sidebar-fixed')]);
\t\t\t
\t\t\t \$(window).on('resize.ace.top_menu', function() {
\t\t\t\t\$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , \$sidebar.hasClass('sidebar-fixed')]);
\t\t\t });
\t\t\t
\t\t\t
\t\t\t});
\t\t</script>

\t\t
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:manageUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 272,  543 => 270,  535 => 268,  533 => 267,  468 => 205,  455 => 194,  451 => 192,  447 => 190,  445 => 189,  442 => 188,  432 => 186,  428 => 185,  414 => 174,  410 => 173,  406 => 172,  402 => 171,  397 => 169,  393 => 168,  389 => 167,  385 => 166,  381 => 165,  377 => 164,  373 => 163,  369 => 162,  365 => 161,  361 => 160,  357 => 159,  353 => 158,  349 => 157,  345 => 156,  341 => 155,  337 => 154,  333 => 153,  329 => 152,  325 => 151,  321 => 150,  317 => 149,  309 => 144,  304 => 142,  290 => 131,  278 => 121,  276 => 120,  262 => 108,  255 => 107,  245 => 105,  242 => 104,  236 => 102,  233 => 101,  228 => 99,  223 => 98,  220 => 97,  207 => 95,  204 => 94,  198 => 93,  195 => 92,  190 => 90,  186 => 89,  182 => 88,  176 => 87,  162 => 85,  158 => 84,  154 => 83,  151 => 82,  143 => 79,  141 => 78,  133 => 75,  126 => 70,  117 => 65,  114 => 64,  109 => 61,  107 => 60,  99 => 54,  93 => 51,  91 => 50,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}

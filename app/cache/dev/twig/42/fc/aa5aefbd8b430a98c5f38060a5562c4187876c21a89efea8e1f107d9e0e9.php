<?php

/* SettingsBundle:Default:manageOpportunitySources.html.twig */
class __TwigTemplate_42fcaa5aefbd8b430a98c5f38060a5562c4187876c21a89efea8e1f107d9e0e9 extends Twig_Template
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
        // line 3
        $this->env->loadTemplate("LoginLoginBundle:Default:head.html.twig")->display($context);
        // line 4
        echo "
\t<body class=\"no-skin\">
\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t";
        // line 11
        $this->env->loadTemplate("LoginLoginBundle:Default:navbar.html.twig")->display($context);
        // line 12
        echo "                        
\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t<div class=\"page-content\">


\t\t\t\t\t\t<!-- /section:settings.box -->
\t\t\t\t\t\t<div>
                                                ";
        // line 20
        if (array_key_exists("errormsg", $context)) {
            // line 21
            echo "                                                    <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                        </button>
                                                        <center> <strong>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                                                    </div>
                                                    <script> window.setTimeout(function() { \$(\"#successmsg\").alert('close'); }, 5000); </script>
                                                ";
        }
        // line 29
        echo "                                                ";
        if (array_key_exists("successmsg", $context)) {
            // line 30
            echo "                                                    <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                        </button>
                                                        <center> <strong>";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                                                    </div>
                                                    <script> window.setTimeout(function() { \$(\"#errormsg\").alert('close'); }, 5000); </script>
                                                ";
        }
        // line 38
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.page-header -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Manage Opportunity Sources</h3>
                                                               
                                                                    <table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                                                                            
                                                                                       
                                                                                        <th>Opportunity Source</th>
                                                                                        <th>Notes</th>
                                                                                    ";
        // line 53
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin")) {
            echo "    
\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
                                                                                    ";
        }
        // line 55
        echo "    
\t\t\t\t\t\t\t\t\t</tr>
                                                                        </thead>

\t\t\t\t\t\t\t\t\t<tbody>
                                                                            ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : $this->getContext($context, "sources")));
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            echo " 
                                                                                 ";
            // line 61
            if (((($this->getAttribute($context["source"], "getStatus", array(), "method") == "Inactive") && ($this->getAttribute($context["source"], "getUsername", array(), "method") == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) || ($this->getAttribute($context["source"], "getStatus", array(), "method") == "Active"))) {
                echo "                             
                                                                                    <tr>
                                                                                     
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "getName", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "getNotes", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t
                                                                                        ";
                // line 67
                if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin")) {
                    // line 68
                    echo "                                                                                        <td class=\"actions\"><a title=\"Edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_editopportunitysource", array("id" => $this->getAttribute($context["source"], "getId", array(), "method"))), "html", null, true);
                    echo "\"><i class=\"fa fa-pencil\"></i></a>";
                    if (($this->getAttribute($context["source"], "getStatus", array()) == "Inactive")) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_activateopportunitysource", array("id" => $this->getAttribute($context["source"], "getId", array(), "method"))), "html", null, true);
                        echo "\"> Activate</a>";
                    }
                    echo "</td>
                                                                                        ";
                }
                // line 70
                echo "                                                                                        
                                                                                    </tr>
                                                                                 ";
            }
            // line 72
            echo "   
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        // line 85
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 86
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 96
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
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 139
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
\t\t\t\t\t\"aoColumns\": [ 
\t\t\t\t\t  null, null
\t\t\t\t\t   ";
        // line 152
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "Admin")) {
            echo ",{ \"bSortable\": false } ";
        }
        // line 153
        echo "\t\t\t\t\t],
\t\t\t\t\t\"aaSorting\": [0,'asc'],
\t\t\t
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
\t\t\t\t\t//\"iDisplayLength\": 50
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
                                
                                \$('#dynamic-table_filter').prepend('<a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("settings_addopportunitysource");
        echo "\"><button class=\"btn btn-info no-padding\" style=\"margin-right:10px;\"><i class=\"ace-icon fa fa-plus bigger-110\"></i> Add</button></a>');
\t\t\t
\t\t\t})
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
        return "SettingsBundle:Default:manageOpportunitySources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 229,  326 => 153,  322 => 152,  306 => 139,  302 => 138,  298 => 137,  294 => 136,  289 => 134,  285 => 133,  281 => 132,  277 => 131,  273 => 130,  269 => 129,  265 => 128,  261 => 127,  257 => 126,  253 => 125,  249 => 124,  245 => 123,  241 => 122,  237 => 121,  233 => 120,  229 => 119,  225 => 118,  221 => 117,  217 => 116,  213 => 115,  209 => 114,  201 => 109,  196 => 107,  182 => 96,  170 => 86,  168 => 85,  154 => 73,  147 => 72,  142 => 70,  130 => 68,  128 => 67,  123 => 65,  119 => 64,  113 => 61,  107 => 60,  100 => 55,  94 => 53,  77 => 38,  70 => 34,  64 => 30,  61 => 29,  54 => 25,  48 => 21,  46 => 20,  36 => 12,  34 => 11,  25 => 4,  23 => 3,  19 => 1,);
    }
}

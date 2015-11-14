<?php

/* LoginLoginBundle:Default:importUsers.html.twig */
class __TwigTemplate_ffe0caf19e49a65d6b7781d5986e795f358116fced79811b748dbd50110dfc4c extends Twig_Template
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
        echo "\t<body class=\"no-skin\">
\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>
                        
                        ";
        // line 10
        $this->env->loadTemplate("LoginLoginBundle:Default:navbar.html.twig")->display($context);
        // line 11
        echo "\t\t\t
\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t<div class=\"page-content\">


\t\t\t\t\t\t<!-- /section:settings.box -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 19
        if (array_key_exists("successmsg", $context)) {
            // line 20
            echo "
                                                            <div class=\"alert alert-success\">
                                                               <center> <strong><font color=\"green\"> ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</font></strong></center>
                                                           </div>

                                                        ";
        }
        // line 26
        echo "                                                        ";
        if (array_key_exists("errormsg", $context)) {
            // line 27
            echo "
                                                           <div class=\"alert alert-danger\">
                                                               <center> <strong><font color=\"red\"> ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</font></strong></center>

                                                           </div>
                                                        ";
        }
        // line 33
        echo "                                                        
                                                
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
\t\t\t\t\t\t</div><!-- /.page-header -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Import Users</h3>
                                                                
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
                                                                <div class=\"col-xs-1\">
                                                                    
                                                                </div>  
                                                                
\t\t\t\t\t\t\t\t<div class=\"col-xs-10\" style=\"padding-left: auto;padding-right: auto;\">
                                                                    <div class=\"widget-header\" style=\"border: 1px solid #CCC\">
\t\t\t\t\t\t\t\t\t<h4 class=\"widget-title\">Import Users from CSV File</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                    </div>
\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("login_login_upload");
        echo "\" class=\"dropzone\" id=\"dropzone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fallback\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"file\" type=\"file\" multiple=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div><!-- PAGE CONTENT ENDS -->
                                                              \t\t\t\t\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

                        ";
        // line 84
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 85
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 95
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
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/dropzone.js"), "html", null, true);
        echo "\"></script>
                

\t\t<!-- inline scripts related to this page -->
                <script type=\"text/javascript\">
\t\t\tjQuery(function(\$){
\t\t\t
\t\t\ttry {
\t\t\t  Dropzone.autoDiscover = false;
\t\t\t  var myDropzone = new Dropzone(\"#dropzone\" , {
\t\t\t    paramName: \"file\", // The name that will be used to transfer the file
\t\t\t    maxFilesize: 0.5, // MB
\t\t\t
\t\t\t\taddRemoveLinks : true,
\t\t\t\tdictDefaultMessage :
\t\t\t\t'<span class=\"bigger-150 bolder\"><i class=\"ace-icon fa fa-caret-right red\"></i> Drop files</span> to upload \\
\t\t\t\t<span class=\"smaller-80 grey\">(or click)</span> <br /> \\
\t\t\t\t<i class=\"upload-icon ace-icon fa fa-cloud-upload blue fa-3x\"></i>'
\t\t\t,
\t\t\t\tdictResponseError: 'Error while uploading file!',
\t\t\t\t
\t\t\t\t//change the previewTemplate to use Bootstrap progress bars
\t\t\t\tpreviewTemplate: \"<div class=\\\"dz-preview dz-file-preview\\\">\\n  <div class=\\\"dz-details\\\">\\n    <div class=\\\"dz-filename\\\"><span data-dz-name></span></div>\\n    <div class=\\\"dz-size\\\" data-dz-size></div>\\n    <img data-dz-thumbnail />\\n  </div>\\n  <div class=\\\"progress progress-small progress-striped active\\\"><div class=\\\"progress-bar progress-bar-success\\\" data-dz-uploadprogress></div></div>\\n  <div class=\\\"dz-success-mark\\\"><span></span></div>\\n  <div class=\\\"dz-error-mark\\\"><span></span></div>\\n  <div class=\\\"dz-error-message\\\"><span data-dz-errormessage></span></div>\\n</div>\"
\t\t\t  });
\t\t\t  
\t\t\t   \$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\ttry {
\t\t\t\t\t\tmyDropzone.destroy();
\t\t\t\t\t} catch(e) {}
\t\t\t   });
\t\t\t
\t\t\t} catch(e) {
\t\t\t  alert('Dropzone.js does not support older browsers!');
\t\t\t}
\t\t\t
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
        return "LoginLoginBundle:Default:importUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 134,  249 => 133,  245 => 132,  241 => 131,  237 => 130,  233 => 129,  229 => 128,  225 => 127,  221 => 126,  217 => 125,  213 => 124,  209 => 123,  205 => 122,  201 => 121,  197 => 120,  193 => 119,  189 => 118,  185 => 117,  181 => 116,  177 => 115,  173 => 114,  169 => 113,  161 => 108,  156 => 106,  142 => 95,  130 => 85,  128 => 84,  112 => 71,  72 => 33,  65 => 29,  61 => 27,  58 => 26,  51 => 22,  47 => 20,  45 => 19,  35 => 11,  33 => 10,  25 => 4,  23 => 3,  19 => 1,);
    }
}

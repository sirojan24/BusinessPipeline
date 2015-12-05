<?php

/* SettingsBundle:Default:editProductType.html.twig */
class __TwigTemplate_5b0ab7017d891ba18750417e54c9b21b00b9c9fed33e215c4fcb9aec2a69b7e2 extends Twig_Template
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
        echo "\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t<div class=\"page-content\">


\t\t\t\t\t\t<!-- /section:settings.box -->
\t\t\t\t\t\t<div>
                                                ";
        // line 19
        if (array_key_exists("errormsg", $context)) {
            // line 20
            echo "                                                    <div class=\"alert alert-danger alert-dismissable\" id=\"successmsg\">
                                                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                        </button>
                                                        <center> <strong>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : $this->getContext($context, "errormsg")), "html", null, true);
            echo "</strong></center>
                                                    </div>
                                                    <script> window.setTimeout(function() { \$(\"#successmsg\").alert('close'); }, 5000); </script>
                                                ";
        }
        // line 28
        echo "                                                ";
        if (array_key_exists("successmsg", $context)) {
            // line 29
            echo "                                                    <div class=\"alert alert-success alert-dismissable\" id=\"errormsg\">
                                                        <button type=\"button\" class=\"close bigger-200\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                                                            &times;
                                                        </button>
                                                        <center> <strong>";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["successmsg"]) ? $context["successmsg"] : $this->getContext($context, "successmsg")), "html", null, true);
            echo "</strong></center>
                                                    </div>
                                                    <script> window.setTimeout(function() { \$(\"#errormsg\").alert('close'); }, 5000); </script>
                                                ";
        }
        // line 37
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.page-header -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
                                                                <h3 class=\"header smaller lighter blue\">Edit Product Type</h3>
                                                                
\t\t\t\t\t\t\t\t
                                              
                                                                    <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("settings_updateproducttype");
        echo "\" method=\"post\" data-parsley-validate>
                                                                      <div class=\"well well-lg\"> 
                                                                        <div class=\"form-group\">
                                                                            
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"name\">Name <span style=\"color:#FF0000;\">*</span>  </label>
                                                                            <div class=\"input-group col-sm-4\">
                                                                                <input type=\"text\" name=\"name\" id=\"name\" value = \"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producttype"]) ? $context["producttype"] : $this->getContext($context, "producttype")), "getName", array(), "method"), "html", null, true);
        echo "\" placeholder=\"Account Type\" class=\"col-sm-12\" onkeyup=\"producttypeAvailability()\"  pattern=\"^[a-zA-Z0-9()_,.'/\\-& ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9()_,.'/\\-& ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                                                                                <div id=\"nameerror\"></div>
                                                                            </div>    
\t\t\t\t\t\t\t\t\t</div>
                                                                        
                                                                       <br>
                                                                       
                                                                        <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"notes\" class=\"col-sm-2 control-label no-padding-left\">Notes</label>
                                                                            <div class=\"input-group col-sm-4\">      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"notes\" placeholder=\"Notes\" class=\"col-sm-12\" style=\"height:100px\" name=\"notes\" data-parsley-pattern=\"^[a-zA-Z0-9(),.:/;'_&\\n ]*\$\" data-parsley-trigger=\"keyup\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producttype"]) ? $context["producttype"] : $this->getContext($context, "producttype")), "getNotes", array(), "method"), "html", null, true);
        echo "</textarea>
                                                                            </div>    
                                                                        </div>
                                                                        <input type=\"hidden\" value = \"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producttype"]) ? $context["producttype"] : $this->getContext($context, "producttype")), "getId", array(), "method"), "html", null, true);
        echo "\" name =\"id\">
                                                                       </div>
                                                                        <div class=\"clearfix form-actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3\" style=\"margin-left: 12%\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUpdate Product Type 
\t\t\t\t\t\t\t\t\t\t\t</button>
                                                                                </div>
                                                                                <div class=\"col-xs-3\" style=\"margin-left: -70px\">
\t\t\t\t\t\t\t\t\t\t\t&nbsp; 
                                                                                         <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_deleteproducttype", array("id" => $this->getAttribute((isset($context["producttype"]) ? $context["producttype"] : $this->getContext($context, "producttype")), "getId", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-danger\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDelete Product Type
\t\t\t\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                                                    </form>  
                                                                     
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

                        ";
        // line 94
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 95
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 105
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
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
                <script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t\$('#id-disable-check').on('click', function() {
\t\t\t\t\tvar inp = \$('#form-input-readonly').get(0);
\t\t\t\t\tif(inp.hasAttribute('disabled')) {
\t\t\t\t\t\tinp.setAttribute('readonly' , 'true');
\t\t\t\t\t\tinp.removeAttribute('disabled');
\t\t\t\t\t\tinp.value=\"This text field is readonly!\";
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tinp.setAttribute('disabled' , 'disabled');
\t\t\t\t\t\tinp.removeAttribute('readonly');
\t\t\t\t\t\tinp.value=\"This text field is disabled!\";
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\tif(!ace.vars['touch']) {
\t\t\t\t\t\$('.chosen-select').chosen({allow_single_deselect:true}); 
\t\t\t\t\t//resize the chosen on window resize
\t\t\t
\t\t\t\t\t\$(window)
\t\t\t\t\t.off('resize.chosen')
\t\t\t\t\t.on('resize.chosen', function() {
\t\t\t\t\t\t\$('.chosen-select').each(function() {
\t\t\t\t\t\t\t var \$this = \$(this);
\t\t\t\t\t\t\t \$this.next().css({'width': \$this.parent().width()});
\t\t\t\t\t\t})
\t\t\t\t\t}).trigger('resize.chosen');
\t\t\t\t\t//resize chosen on sidebar collapse/expand
\t\t\t\t\t\$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
\t\t\t\t\t\tif(event_name != 'sidebar_collapsed') return;
\t\t\t\t\t\t\$('.chosen-select').each(function() {
\t\t\t\t\t\t\t var \$this = \$(this);
\t\t\t\t\t\t\t \$this.next().css({'width': \$this.parent().width()});
\t\t\t\t\t\t})
\t\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\t\$('#chosen-multiple-style .btn').on('click', function(e){
\t\t\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\t\t\tvar which = parseInt(target.val());
\t\t\t\t\t\tif(which == 2) \$('#form-field-select-4').addClass('tag-input-style');
\t\t\t\t\t\t else \$('#form-field-select-4').removeClass('tag-input-style');
\t\t\t\t\t});
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\$('[data-rel=tooltip]').tooltip({container:'body'});
\t\t\t\t\$('[data-rel=popover]').popover({container:'body'});
\t\t\t\t
\t\t\t\t\$('textarea[class*=autosize]').autosize({append: \"\\n\"});
\t\t\t\t\$('textarea.limited').inputlimiter({
\t\t\t\t\tremText: '%n character%s remaining...',
\t\t\t\t\tlimitText: 'max allowed : %n.'
\t\t\t\t});
\t\t\t
\t\t\t\t\$.mask.definitions['~']='[+-]';
\t\t\t\t\$('.input-mask-date').mask('99/99/9999');
\t\t\t\t\$('.input-mask-phone').mask('(999) 999-9999');
\t\t\t\t\$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
\t\t\t\t\$(\".input-mask-product\").mask(\"a*-999-a999\",{placeholder:\" \",completed:function(){alert(\"You typed the following: \"+this.val());}});
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t\$( \"#input-size-slider\" ).css('width','200px').slider({
\t\t\t\t\tvalue:1,
\t\t\t\t\trange: \"min\",
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 8,
\t\t\t\t\tstep: 1,
\t\t\t\t\tslide: function( event, ui ) {
\t\t\t\t\t\tvar sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
\t\t\t\t\t\tvar val = parseInt(ui.value);
\t\t\t\t\t\t\$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t\t\$( \"#input-span-slider\" ).slider({
\t\t\t\t\tvalue:1,
\t\t\t\t\trange: \"min\",
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 12,
\t\t\t\t\tstep: 1,
\t\t\t\t\tslide: function( event, ui ) {
\t\t\t\t\t\tvar val = parseInt(ui.value);
\t\t\t\t\t\t\$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t//\"jQuery UI Slider\"
\t\t\t\t//range slider tooltip example
\t\t\t\t\$( \"#slider-range\" ).css('height','200px').slider({
\t\t\t\t\torientation: \"vertical\",
\t\t\t\t\trange: true,
\t\t\t\t\tmin: 0,
\t\t\t\t\tmax: 100,
\t\t\t\t\tvalues: [ 17, 67 ],
\t\t\t\t\tslide: function( event, ui ) {
\t\t\t\t\t\tvar val = ui.values[\$(ui.handle).index()-1] + \"\";
\t\t\t
\t\t\t\t\t\tif( !ui.handle.firstChild ) {
\t\t\t\t\t\t\t\$(\"<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>\")
\t\t\t\t\t\t\t.prependTo(ui.handle);
\t\t\t\t\t\t}
\t\t\t\t\t\t\$(ui.handle.firstChild).show().children().eq(1).text(val);
\t\t\t\t\t}
\t\t\t\t}).find('span.ui-slider-handle').on('blur', function(){
\t\t\t\t\t\$(this.firstChild).hide();
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$( \"#slider-range-max\" ).slider({
\t\t\t\t\trange: \"max\",
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 10,
\t\t\t\t\tvalue: 2
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$( \"#slider-eq > span\" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
\t\t\t\t\t// read initial values from markup and remove that
\t\t\t\t\tvar value = parseInt( \$( this ).text(), 10 );
\t\t\t\t\t\$( this ).empty().slider({
\t\t\t\t\t\tvalue: value,
\t\t\t\t\t\trange: \"min\",
\t\t\t\t\t\tanimate: true
\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(\"#slider-eq > span.ui-slider-purple\").slider('disable');//disable third item
\t\t\t
\t\t\t\t
\t\t\t\t\$('#id-input-file-1 , #id-input-file-2').ace_file_input({
\t\t\t\t\tno_file:'No File ...',
\t\t\t\t\tbtn_choose:'Choose',
\t\t\t\t\tbtn_change:'Change',
\t\t\t\t\tdroppable:false,
\t\t\t\t\tonchange:null,
\t\t\t\t\tthumbnail:false //| true | large
\t\t\t\t\t//whitelist:'gif|png|jpg|jpeg'
\t\t\t\t\t//blacklist:'exe|php'
\t\t\t\t\t//onchange:''
\t\t\t\t\t//
\t\t\t\t});
\t\t\t\t//pre-show a file name, for example a previously selected file
\t\t\t\t//\$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
\t\t\t
\t\t\t
\t\t\t\t\$('#id-input-file-3').ace_file_input({
\t\t\t\t\tstyle:'well',
\t\t\t\t\tbtn_choose:'Drop files here or click to choose',
\t\t\t\t\tbtn_change:null,
\t\t\t\t\tno_icon:'ace-icon fa fa-cloud-upload',
\t\t\t\t\tdroppable:true,
\t\t\t\t\tthumbnail:'small'//large | fit
\t\t\t\t\t//,icon_remove:null//set null, to hide remove/reset button
\t\t\t\t\t/**,before_change:function(files, dropped) {
\t\t\t\t\t\t//Check an example below
\t\t\t\t\t\t//or examples/file-upload.html
\t\t\t\t\t\treturn true;
\t\t\t\t\t}*/
\t\t\t\t\t/**,before_remove : function() {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}*/
\t\t\t\t\t,
\t\t\t\t\tpreview_error : function(filename, error_code) {
\t\t\t\t\t\t//name of the file that failed
\t\t\t\t\t\t//error_code values
\t\t\t\t\t\t//1 = 'FILE_LOAD_FAILED',
\t\t\t\t\t\t//2 = 'IMAGE_LOAD_FAILED',
\t\t\t\t\t\t//3 = 'THUMBNAIL_FAILED'
\t\t\t\t\t\t//alert(error_code);
\t\t\t\t\t}
\t\t\t
\t\t\t\t}).on('change', function(){
\t\t\t\t\t//console.log(\$(this).data('ace_input_files'));
\t\t\t\t\t//console.log(\$(this).data('ace_input_method'));
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t//\$('#id-input-file-3')
\t\t\t\t//.ace_file_input('show_file_list', [
\t\t\t\t\t//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
\t\t\t\t\t//{type: 'file', name: 'hello.txt'}
\t\t\t\t//]);
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t\t//dynamically change allowed formats by changing allowExt && allowMime function
\t\t\t\t\$('#id-file-format').removeAttr('checked').on('change', function() {
\t\t\t\t\tvar whitelist_ext, whitelist_mime;
\t\t\t\t\tvar btn_choose
\t\t\t\t\tvar no_icon
\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\tbtn_choose = \"Drop images here or click to choose\";
\t\t\t\t\t\tno_icon = \"ace-icon fa fa-picture-o\";
\t\t\t
\t\t\t\t\t\twhitelist_ext = [\"jpeg\", \"jpg\", \"png\", \"gif\" , \"bmp\"];
\t\t\t\t\t\twhitelist_mime = [\"image/jpg\", \"image/jpeg\", \"image/png\", \"image/gif\", \"image/bmp\"];
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tbtn_choose = \"Drop files here or click to choose\";
\t\t\t\t\t\tno_icon = \"ace-icon fa fa-cloud-upload\";
\t\t\t\t\t\t
\t\t\t\t\t\twhitelist_ext = null;//all extensions are acceptable
\t\t\t\t\t\twhitelist_mime = null;//all mimes are acceptable
\t\t\t\t\t}
\t\t\t\t\tvar file_input = \$('#id-input-file-3');
\t\t\t\t\tfile_input
\t\t\t\t\t.ace_file_input('update_settings',
\t\t\t\t\t{
\t\t\t\t\t\t'btn_choose': btn_choose,
\t\t\t\t\t\t'no_icon': no_icon,
\t\t\t\t\t\t'allowExt': whitelist_ext,
\t\t\t\t\t\t'allowMime': whitelist_mime
\t\t\t\t\t})
\t\t\t\t\tfile_input.ace_file_input('reset_input');
\t\t\t\t\t
\t\t\t\t\tfile_input
\t\t\t\t\t.off('file.error.ace')
\t\t\t\t\t.on('file.error.ace', function(e, info) {
\t\t\t\t\t\t//console.log(info.file_count);//number of selected files
\t\t\t\t\t\t//console.log(info.invalid_count);//number of invalid files
\t\t\t\t\t\t//console.log(info.error_list);//a list of errors in the following format
\t\t\t\t\t\t
\t\t\t\t\t\t//info.error_count['ext']
\t\t\t\t\t\t//info.error_count['mime']
\t\t\t\t\t\t//info.error_count['size']
\t\t\t\t\t\t
\t\t\t\t\t\t//info.error_list['ext']  = [list of file names with invalid extension]
\t\t\t\t\t\t//info.error_list['mime'] = [list of file names with invalid mimetype]
\t\t\t\t\t\t//info.error_list['size'] = [list of file names with invalid size]
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t/**
\t\t\t\t\t\tif( !info.dropped ) {
\t\t\t\t\t\t\t//perhapse reset file field if files have been selected, and there are invalid files among them
\t\t\t\t\t\t\t//when files are dropped, only valid files will be added to our file array
\t\t\t\t\t\t\te.preventDefault();//it will rest input
\t\t\t\t\t\t}
\t\t\t\t\t\t*/
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t//if files have been selected (not dropped), you can choose to reset input
\t\t\t\t\t\t//because browser keeps all selected files anyway and this cannot be changed
\t\t\t\t\t\t//we can only reset file field to become empty again
\t\t\t\t\t\t//on any case you still should check files with your server side script
\t\t\t\t\t\t//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t\t\$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
\t\t\t\t.closest('.ace-spinner')
\t\t\t\t.on('changed.fu.spinbox', function(){
\t\t\t\t\t//alert(\$('#spinner1').val())
\t\t\t\t}); 
\t\t\t\t\$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
\t\t\t\t\$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
\t\t\t\t\$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
\t\t\t
\t\t\t\t//\$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
\t\t\t\t//or
\t\t\t\t//\$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
\t\t\t\t//\$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
\t\t\t
\t\t\t
\t\t\t\t//datepicker plugin
\t\t\t\t//link
\t\t\t\t\$('.date-picker').datepicker({
\t\t\t\t\tautoclose: true,
\t\t\t\t\ttodayHighlight: true
\t\t\t\t})
\t\t\t\t//show datepicker when clicking on the icon
\t\t\t\t.next().on(ace.click_event, function(){
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t
\t\t\t\t//or change it into a date range picker
\t\t\t\t\$('.input-daterange').datepicker({autoclose:true});
\t\t\t
\t\t\t
\t\t\t\t//to translate the daterange picker, please copy the \"examples/daterange-fr.js\" contents here before initialization
\t\t\t\t\$('input[name=date-range-picker]').daterangepicker({
\t\t\t\t\t'applyClass' : 'btn-sm btn-success',
\t\t\t\t\t'cancelClass' : 'btn-sm btn-default',
\t\t\t\t\tlocale: {
\t\t\t\t\t\tapplyLabel: 'Apply',
\t\t\t\t\t\tcancelLabel: 'Cancel',
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.prev().on(ace.click_event, function(){
\t\t\t\t\t\$(this).next().focus();
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#timepicker1').timepicker({
\t\t\t\t\tminuteStep: 1,
\t\t\t\t\tshowSeconds: true,
\t\t\t\t\tshowMeridian: false
\t\t\t\t}).next().on(ace.click_event, function(){
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t\t
\t\t\t
\t\t\t\t\$('#colorpicker1').colorpicker();
\t\t\t
\t\t\t\t\$('#simple-colorpicker-1').ace_colorpicker();
\t\t\t\t//\$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
\t\t\t\t//\$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
\t\t\t\t//var picker = \$('#simple-colorpicker-1').data('ace_colorpicker')
\t\t\t\t//picker.pick('red', true);//insert the color if it doesn't exist
\t\t\t
\t\t\t
\t\t\t\t\$(\".knob\").knob();
\t\t\t\t
\t\t\t\t
\t\t\t\tvar tag_input = \$('#form-field-tags');
\t\t\t\ttry{
\t\t\t\t\ttag_input.tag(
\t\t\t\t\t  {
\t\t\t\t\t\tplaceholder:tag_input.attr('placeholder'),
\t\t\t\t\t\t//enable typeahead by specifying the source array
\t\t\t\t\t\tsource: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
\t\t\t\t\t\t/**
\t\t\t\t\t\t//or fetch data from database, fetch those that match \"query\"
\t\t\t\t\t\tsource: function(query, process) {
\t\t\t\t\t\t  \$.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
\t\t\t\t\t\t  .done(function(result_items){
\t\t\t\t\t\t\tprocess(result_items);
\t\t\t\t\t\t  });
\t\t\t\t\t\t}
\t\t\t\t\t\t*/
\t\t\t\t\t  }
\t\t\t\t\t)
\t\t\t
\t\t\t\t\t//programmatically add a new
\t\t\t\t\tvar \$tag_obj = \$('#form-field-tags').data('tag');
\t\t\t\t\t\$tag_obj.add('Programmatically Added');
\t\t\t\t}
\t\t\t\tcatch(e) {
\t\t\t\t\t//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
\t\t\t\t\ttag_input.after('<textarea id=\"'+tag_input.attr('id')+'\" name=\"'+tag_input.attr('name')+'\" rows=\"3\">'+tag_input.val()+'</textarea>').remove();
\t\t\t\t\t//\$('#form-field-tags').autosize({append: \"\\n\"});
\t\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\t\t/////////
\t\t\t\t\$('#modal-form input[type=file]').ace_file_input({
\t\t\t\t\tstyle:'well',
\t\t\t\t\tbtn_choose:'Drop files here or click to choose',
\t\t\t\t\tbtn_change:null,
\t\t\t\t\tno_icon:'ace-icon fa fa-cloud-upload',
\t\t\t\t\tdroppable:true,
\t\t\t\t\tthumbnail:'large'
\t\t\t\t})
\t\t\t\t
\t\t\t\t//chosen plugin inside a modal will have a zero width because the select element is originally hidden
\t\t\t\t//and its width cannot be determined.
\t\t\t\t//so we set the width after modal is show
\t\t\t\t\$('#modal-form').on('shown.bs.modal', function () {
\t\t\t\t\tif(!ace.vars['touch']) {
\t\t\t\t\t\t\$(this).find('.chosen-container').each(function(){
\t\t\t\t\t\t\t\$(this).find('a:first-child').css('width' , '210px');
\t\t\t\t\t\t\t\$(this).find('.chosen-drop').css('width' , '210px');
\t\t\t\t\t\t\t\$(this).find('.chosen-search input').css('width' , '200px');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t/**
\t\t\t\t//or you can activate the chosen plugin after modal is shown
\t\t\t\t//this way select element becomes visible with dimensions and chosen works as expected
\t\t\t\t\$('#modal-form').on('shown', function () {
\t\t\t\t\t\$(this).find('.modal-chosen').chosen();
\t\t\t\t})
\t\t\t\t*/
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t\$('textarea[class*=autosize]').trigger('autosize.destroy');
\t\t\t\t\t\$('.limiterBox,.autosizejs').remove();
\t\t\t\t\t\$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t
                </script>
                <!--my custom scripts-->
                 <script>
                    function productypeAvailability(){
                        \$.post('";
        // line 517
        echo $this->env->getExtension('routing')->getPath("settings_validateproducttype");
        echo "',               
                {name: document.getElementById('name').value}, 
                    function(response){
                        if(response == \"true\"){
                            document.getElementById('name').style.color =\"#B94A48\";
                            document.getElementById('name').style.backgroundColor =\"#F2DEDE\";
                            document.getElementById('name').style.border =\"1px solid #EED3D7\";
                            document.getElementById('nameerror').innerHTML = \"<font color = '#B94A48'>product type already exists.</font>\";
                        }else{
                            document.getElementById('name').style.color =\"#468847\";
                            document.getElementById('name').style.backgroundColor =\"#DFF0D8\";
                            document.getElementById('name').style.border =\"1px solid #D6E9C6\";
                            document.getElementById('nameerror').innerHTML = \"\";
                        }
                    });    
                }
                </script>
                <script>
                    function usernameAvailability(){
                        \$.post('";
        // line 536
        echo $this->env->getExtension('routing')->getPath("login_login_uservalidateajax");
        echo "',               
                {username: document.getElementById('username').value}, 
                    function(response){
                        if(response == \"true\"){
                            document.getElementById('username').style.color =\"#B94A48\";
                            document.getElementById('username').style.backgroundColor =\"#F2DEDE\";
                            document.getElementById('username').style.border =\"1px solid #EED3D7\";
                            document.getElementById('usernameerror').innerHTML = \"<font color = '#B94A48'>username already exists. try a different one.</font>\";
                        }else{
                            document.getElementById('username').style.color =\"#468847\";
                            document.getElementById('username').style.backgroundColor =\"#DFF0D8\";
                            document.getElementById('username').style.border =\"1px solid #D6E9C6\";
                            document.getElementById('usernameerror').innerHTML = \"\";
                        }
                    });    
                }
                
                function fill(){
                        \$.post('";
        // line 554
        echo $this->env->getExtension('routing')->getPath("login_login_getcompanyajax");
        echo "',null, 
                    function(response){
                        if(response){
                            var jsonString = JSON.parse(response);
                            if(document.getElementById('CopyAddress').checked){
                                
                                if(jsonString.companyName != null){
                                    document.getElementById('companyName').value = jsonString.companyName;
                                }
                                if(jsonString.address1 != null){
                                    document.getElementById('address1').value = jsonString.address1;
                                }
                                if(jsonString.address2 != null){
                                    document.getElementById('address2').value = jsonString.address2;
                                }
                                if(jsonString.city != null){
                                    document.getElementById('city').value = jsonString.city;
                                }
                                if(jsonString.state != null){
                                    document.getElementById('state').value = jsonString.state;
                                }
                                 if(jsonString.postalcode != null){
                                    document.getElementById('postalcode').value = jsonString.postalcode;
                                }
                                
                            }else{
                                
                                 document.getElementById('companyName').value = \"\";
                                 document.getElementById('address1').value = \"\";
                                 document.getElementById('address2').value = \"\";
                                 document.getElementById('city').value = \"\";
                                 document.getElementById('state').value = \"\";
                                 document.getElementById('postalcode').value = \"\";
                            }
                        }
                    });
                    }
                    
                     var number = '';
                   function tel_check(e){
                       var back_flag = true;
                       var bracket_flag = true;
                       var flag = true;
                       var update_flag = true;
                       var content = document.getElementById('officetel').value;
                       var last_ascii = content.charCodeAt(content.length - 1);
                       var i = 1;
                       if(e.keyCode == 9){
                           return true;
                       }
                       while(last_ascii == 8){
                           i++;
                           last_ascii = content.charCodeAt(content.length - i);
                           
                       }
                       if(e.keyCode > 47 && e.keyCode < 58 && number.length < 14){
                           number += String.fromCharCode(e.keyCode);
                       }else if(e.keyCode == 8){
                           document.getElementById('officetel').value = content.substring(0,content.length - i);
                           if(last_ascii>47 && last_ascii<58){
                               number = number.substring(0, number.length-1);
                               
                           }
                           if(number.length === 6){
                               back_flag = false;
                           }else{
                               back_flag = true;
                           }
                           if(number.length === 10){
                               flag = false;
                           }
                           if(number.length === 3){
                               bracket_flag = false;
                           }
                       }else{
                           return false;
                       }
                       
                        if(number.length > 14){
                           return false;
                       }
                       if(number.length == 3 && bracket_flag){
                           document.getElementById('officetel').value = \"(\"+number+\") \";
                           update_flag = false;
                       }
                       if(number.length == 6 && back_flag){
                           document.getElementById('officetel').value = \"(\"+number.substring(0,3)+\") \"+number.substring(3,6)+\"-\";
                           update_flag = false;
                       }
                       if(number.length == 11 && flag){
                           document.getElementById('officetel').value = \"(\"+number.substring(0,3)+\") \"+number.substring(3,6)+\"-\"+number.substring(6,10)+\" Ext.\"+number[id].substring(10,11);
                           update_flag = false;
                       }
                       if(e.keyCode != 8 && update_flag){
                           document.getElementById('officetel').value +=  String.fromCharCode(e.keyCode);
                       }
                      
                       return false;
                   }
                   
                   var mob_number = '';
                   function mob_check(e){
                       var back_flag = true;
                       var bracket_flag = true;
                       var flag = true;
                       var update_flag = true;
                       var content = document.getElementById('mobile').value;
                       var last_ascii = content.charCodeAt(content.length - 1);
                       var i = 1;
                       if(e.keyCode == 9){
                           return true;
                       }
                       while(last_ascii == 8){
                           i++;
                           last_ascii = content.charCodeAt(content.length - i);
                           
                       }
                       if(e.keyCode > 47 && e.keyCode < 58 && mob_number.length < 10){
                           mob_number += String.fromCharCode(e.keyCode);
                       }else if(e.keyCode == 8){
                           
                           if(last_ascii>47 && last_ascii<58){
                               mob_number = mob_number.substring(0, mob_number.length-1);
                           }
                           document.getElementById('mobile').value = content.substring(0,content.length - i);
                           if(mob_number.length === 6){
                               back_flag = false;
                           }else{
                               back_flag = true;
                           }
                           if(mob_number.length === 3){
                               bracket_flag = false;
                           }
                       }else{
                           return false;
                       }
                       
                        if(mob_number.length > 10){
                           return false;
                       }
                       if(mob_number.length == 3 && bracket_flag){
                           document.getElementById('mobile').value = \"(\"+mob_number+\") \";
                           update_flag = false;
                       }
                       if(mob_number.length == 6 && back_flag){
                           document.getElementById('mobile').value = \"(\"+mob_number.substring(0,3)+\") \"+mob_number.substring(3,6)+\"-\";
                           update_flag = false;
                       }
                       if(e.keyCode != 8 && update_flag){
                           document.getElementById('mobile').value +=  String.fromCharCode(e.keyCode);
                       }
                      
                       return false;
                   }
                   
                   var \$currency_val = '';
                   function currency_format(e,id){
                       
                       if(e.keyCode > 47 && e.keyCode < 58 && \$currency_val.length < 12){
                           \$currency_val += String.fromCharCode(e.keyCode);
                           \$currency_val_edit = parseInt(\$currency_val).toLocaleString();
                           if(\$currency_val_edit != \"NaN\"){
                                document.getElementById(id).value = \$currency_val_edit;
                           }
                           return false;
                       }else if(e.keyCode == 8){
                           \$currency_val = \$currency_val.substring(0,\$currency_val.length - 1);
                           \$currency_val_edit = parseInt(\$currency_val).toLocaleString();
                            if(\$currency_val_edit != \"NaN\"){
                                document.getElementById(id).value = \$currency_val_edit;
                            }else{
                                document.getElementById(id).value = '';
                            }
                            return false;
                       }else if(e.keyCode == 9){
                           return true;
                       }
                       else{
                           return false;
                       }
                   }
                   
                   var \$currency_val1 = '';
                   function currency_format1(e,id){
                       
                       if(e.keyCode > 47 && e.keyCode < 58 && \$currency_val1.length < 12){
                           \$currency_val1 += String.fromCharCode(e.keyCode);
                           \$currency_val_edit = parseInt(\$currency_val1).toLocaleString();
                           if(\$currency_val_edit != \"NaN\"){
                                document.getElementById(id).value = \$currency_val_edit;
                            }
                            return false;
                       }else if(e.keyCode == 8){
                           \$currency_val1 = \$currency_val1.substring(0,\$currency_val1.length - 1);
                           \$currency_val_edit = parseInt(\$currency_val1).toLocaleString();
                           console.log(\"##################\",\$currency_val_edit);
                           if(\$currency_val_edit != \"NaN\"){
                                document.getElementById(id).value = \$currency_val_edit;
                            }else{
                                document.getElementById(id).value = '';
                            }
                            return false;
                       }else if(e.keyCode == 9){
                           return true;
                       }
                       else{
                           return false;
                       }
                       
                       
                   }
                   
                </script>  
                <script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script>
                
\t\t<script src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->
                <script src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery-ui.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 776
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/fuelux.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/moment.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 782
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 785
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.knob.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 786
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.autosize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.inputlimiter.1.3.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 789
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-tag.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 799
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 800
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 802
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 807
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
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
        return "SettingsBundle:Default:editProductType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1006 => 812,  1002 => 811,  998 => 810,  994 => 809,  990 => 808,  986 => 807,  982 => 806,  978 => 805,  974 => 804,  970 => 803,  966 => 802,  962 => 801,  958 => 800,  954 => 799,  950 => 798,  946 => 797,  942 => 796,  938 => 795,  934 => 794,  930 => 793,  926 => 792,  920 => 789,  916 => 788,  912 => 787,  908 => 786,  904 => 785,  900 => 784,  896 => 783,  892 => 782,  888 => 781,  884 => 780,  880 => 779,  876 => 778,  872 => 777,  868 => 776,  864 => 775,  858 => 772,  853 => 770,  849 => 769,  845 => 768,  841 => 767,  625 => 554,  604 => 536,  582 => 517,  178 => 116,  164 => 105,  152 => 95,  150 => 94,  130 => 77,  116 => 66,  110 => 63,  97 => 53,  88 => 47,  76 => 37,  69 => 33,  63 => 29,  60 => 28,  53 => 24,  47 => 20,  45 => 19,  36 => 12,  34 => 11,  25 => 4,  23 => 3,  19 => 1,);
    }
}

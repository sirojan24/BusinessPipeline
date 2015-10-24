<?php

/* ContactsContactsBundle:Default:snapshotContact.html.twig */
class __TwigTemplate_c0b4fe6b7258ed6d03be46b52323071ae413ccec6dcbe6abaa4c86e56d8810e8 extends Twig_Template
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
\t
       ";
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
\t\t\t\t\t\t";
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
        echo "\t\t\t\t\t\t</div><!-- /.page-header -->
                                                    <h3 class=\"header smaller lighter blue\">Contact Snapshot</h3>
                                                <div class=\"col-sm-3\">                                            
                                                    <div class=\"profile-user-info profile-user-info-striped pull-left\" style=\"width:100%;\">
\t\t\t\t\t\t\t<div class=\"profile-info-row\">
                                                            <div class=\"profile-info-name\" style=\"width:50%;\"> Contact Name </div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
                                                                    <span class=\"editable\" id=\"username\">alexdoe</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
                                                            <div class=\"profile-info-name\" style=\"width:50%;\"> Contact Organization </div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
                                                                   
                                                                    <span class=\"editable\" id=\"city\">Amsterdam</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
                                                            <div class=\"profile-info-name\"> Email </div>

                                                            <div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t<span class=\"editable\" id=\"age\">sample@gmail.com</span>
                                                            </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
                                                            
                                                            <div class=\"profile-info-name\"> Telephone </div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
                                                                    
                                                                    <span class=\"editable\" id=\"signup\">(555) 555 - 8888</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t\t\t
                                                            <div class=\"profile-info-name\"> Date of Birth </div>

\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                <span class=\"editable\" id=\"login\">12/08/1986</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t
                                                        </div>

\t\t\t\t\t\t\t\t\t\t\t\t
                                                        <div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <div class=\"profile-info-name\"> Tags</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            <div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                <span class=\"editable\" id=\"about\">sample</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t
                                                        </div>
\t\t\t\t\t\t\t
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <span class=\"btn btn-app btn-sm btn-light no-hover\" style=\"width:100%;margin-top: 10px;\">
                                                            
                                                         <h3 class=\"smaller lighter blue\">Won Opportunities</h3>
                                                         
                                                        <span class=\"line-height-1 bigger-170 blue\"> \$ 1,411 </span>
 
                                                    </span>
                                                    
                                                     <span class=\"btn btn-app btn-sm btn-light no-hover\" style=\"width:100%;margin-top: 10px;\">
                                                         <h3 class=\"smaller lighter blue\">Lost Opportunities</h3>   
                                                         
                                                         <span class=\"line-height-1 bigger-170 blue\"> \$ 1,411 </span>

                                                    </span>
                                                <div>    
                                                                     
\t\t\t\t\t\t
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
                                <div class=\"col-sm-9\">
                                    <div class =\"row\">    
                                        <div class=\"col-sm-4\">
                                                <span class=\"btn btn-app btn-sm btn-light no-hover\" style=\"width:90%;\">

                                                    <h3 class=\"smaller lighter blue\">Total Projected revenue</h3>

                                                    <span class=\"line-height-1 bigger-170 blue\"> \$ 1,411 </span>

                                                </span>
                                        </div> 

                                        <div class=\"col-sm-4\">
                                            <span class=\"btn btn-app btn-sm btn-light no-hover\" style=\"width:90%;\">

                                                    <h3 class=\"smaller lighter blue\">Total Open Opportunities</h3>

                                                    <span class=\"line-height-1 bigger-170 blue\"> \$ 1,411 </span>

                                            </span>
                                        </div> 

                                        <div class=\"col-sm-4\">
                                            <span class=\"btn btn-app btn-sm btn-light no-hover\" style=\"width:90%;\">

                                                    <h3 class=\"smaller lighter blue\">Total Weighted Forecast</h3>

                                                    <span class=\"line-height-1 bigger-170 blue\"> \$ 1,411 </span>

                                            </span>
                                        </div> 
                                    </div>
                                    <hr>
                                    <div class=\"row\">
                                        <div class=\"widget-box transparent\" style=\"margin-left: 15px\">
                                            <div class=\"widget-header widget-header-small\">
                                                <h4 class=\"widget-title blue smaller\">
                                                    <i class=\"fa fa-tasks blue\"></i>
                                                    List of Open Tasks for this Contact
                                                </h4>

                                            </div>

                                            <div class=\"widget-body\" style=\"height:100px;overflow-y: auto;\">
                                                <div class=\"widget-main padding-8\">
                                                    <!-- #section:pages/profile.feed -->
                                                    <div id=\"profile-feed-1\" class=\"profile-feed\">
                                                        <div class=\"profile-activity clearfix\">
                                                            <div>
                                                                
                                                                <a class=\"user\" href=\"#\"> Alex Doe </a>
                                                                changed his profile photo.
                                                                Take a look

                                                                
                                                            </div>

                                                            <div class=\"tools action-buttons\">
                                                                <a href=\"#\" class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                                                </a>

                                                                
                                                            </div>
                                                        </div>

                                                        <div class=\"profile-activity clearfix\">
                                                            <div>
                                                               
                                                                <a class=\"user\" href=\"#\"> Susan Smith </a>

                                                                is now friends with Alex Doe.
                                                                
                                                                </div>
                                                             <div class=\"tools action-buttons\">
                                                                <a href=\"#\" class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                                                </a>
                                                            </div>

                                                          
                                                        </div>

                                                        <div class=\"profile-activity clearfix\">
                                                            <div>
                                                               
                                                                <a class=\"user\" href=\"#\"> Susan Smith </a>

                                                                is now friends with Alex Doe.
                                                                
                                                                </div>
                                                             <div class=\"tools action-buttons\">
                                                                <a href=\"#\" class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                                                </a>
                                                            </div>

                                                          
                                                        </div>

                                                      

                                                        
                                                    </div>

                                                    <!-- /section:pages/profile.feed -->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                         <div class=\"widget-box transparent\" style=\"margin-left: 15px;margin-bottom: 100px;\" >
                                            <div class=\"widget-header widget-header-small\">
                                                <h4 class=\"widget-title blue smaller\">
                                                    <i class=\"fa fa-edit blue\"></i>
                                                    List of Notes for this Contact
                                                </h4>

                                            </div>

                                            <div class=\"widget-body\" style=\"height:100px;overflow-y: auto;\">
                                                <div class=\"widget-main padding-8\">
                                                    <!-- #section:pages/profile.feed -->
                                                    <div id=\"profile-feed-1\" class=\"profile-feed\">
                                                        <div class=\"profile-activity clearfix\">
                                                            <div>
                                                                
                                                                <a class=\"user\" href=\"#\"> Alex Doe </a>
                                                                changed his profile photo.
                                                                

                                                                
                                                            </div>

                                                            <div class=\"tools action-buttons\">
                                                                <a href=\"#\" class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                                                </a>

                                                                
                                                            </div>
                                                        </div>

                                                        <div class=\"profile-activity clearfix\">
                                                            <div>
                                                               
                                                                <a class=\"user\" href=\"#\"> Susan Smith </a>

                                                                is now friends with Alex Doe.
                                                                
                                                            </div>

                                                            <div class=\"tools action-buttons\">
                                                                <a href=\"#\" class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                                                </a>

                                                                
                                                            </div>
                                                        </div>

                                                        <div class=\"profile-activity clearfix\">
                                                            <div>
                                                               
                                                                <a class=\"user\" href=\"#\"> Susan Smith </a>

                                                                is now friends with Alex Doe.
                                                                
                                                                </div>
                                                             <div class=\"tools action-buttons\">
                                                                <a href=\"#\" class=\"blue\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                                                </a>
                                                            </div>     
                                                          
                                                        </div>

                                                      

                                                        
                                                    </div>

                                                    <!-- /section:pages/profile.feed -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>        
\t\t\t</div><!-- /.main-content -->
                        
                        ";
        // line 319
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 320
        echo "                        
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 330
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
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
                <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->
                 <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery-ui.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/fuelux.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/moment.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.knob.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.autosize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.inputlimiter.1.3.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-tag.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
                
                <script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t
\t\t\t\t//editables on first profile page
\t\t\t\t\$.fn.editable.defaults.mode = 'inline';
\t\t\t\t\$.fn.editableform.loading = \"<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>\";
\t\t\t    \$.fn.editableform.buttons = '<button type=\"submit\" class=\"btn btn-info editable-submit\"><i class=\"ace-icon fa fa-check\"></i></button>'+
\t\t\t                                '<button type=\"button\" class=\"btn editable-cancel\"><i class=\"ace-icon fa fa-times\"></i></button>';    
\t\t\t\t
\t\t\t\t//editables 
\t\t\t\t
\t\t\t\t//text editable
\t\t\t    \$('#username')
\t\t\t\t.editable({
\t\t\t\t\ttype: 'text',
\t\t\t\t\tname: 'username'
\t\t\t    });
\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t//select2 editable
\t\t\t\tvar countries = [];
\t\t\t    \$.each({ \"CA\": \"Canada\", \"IN\": \"India\", \"NL\": \"Netherlands\", \"TR\": \"Turkey\", \"US\": \"United States\"}, function(k, v) {
\t\t\t        countries.push({id: k, text: v});
\t\t\t    });
\t\t\t
\t\t\t\tvar cities = [];
\t\t\t\tcities[\"CA\"] = [];
\t\t\t\t\$.each([\"Toronto\", \"Ottawa\", \"Calgary\", \"Vancouver\"] , function(k, v){
\t\t\t\t\tcities[\"CA\"].push({id: v, text: v});
\t\t\t\t});
\t\t\t\tcities[\"IN\"] = [];
\t\t\t\t\$.each([\"Delhi\", \"Mumbai\", \"Bangalore\"] , function(k, v){
\t\t\t\t\tcities[\"IN\"].push({id: v, text: v});
\t\t\t\t});
\t\t\t\tcities[\"NL\"] = [];
\t\t\t\t\$.each([\"Amsterdam\", \"Rotterdam\", \"The Hague\"] , function(k, v){
\t\t\t\t\tcities[\"NL\"].push({id: v, text: v});
\t\t\t\t});
\t\t\t\tcities[\"TR\"] = [];
\t\t\t\t\$.each([\"Ankara\", \"Istanbul\", \"Izmir\"] , function(k, v){
\t\t\t\t\tcities[\"TR\"].push({id: v, text: v});
\t\t\t\t});
\t\t\t\tcities[\"US\"] = [];
\t\t\t\t\$.each([\"New York\", \"Miami\", \"Los Angeles\", \"Chicago\", \"Wysconsin\"] , function(k, v){
\t\t\t\t\tcities[\"US\"].push({id: v, text: v});
\t\t\t\t});
\t\t\t\t
\t\t\t\tvar currentValue = \"NL\";
\t\t\t    \$('#country').editable({
\t\t\t\t\ttype: 'select2',
\t\t\t\t\tvalue : 'NL',
\t\t\t\t\t//onblur:'ignore',
\t\t\t        source: countries,
\t\t\t\t\tselect2: {
\t\t\t\t\t\t'width': 140
\t\t\t\t\t},\t\t
\t\t\t\t\tsuccess: function(response, newValue) {
\t\t\t\t\t\tif(currentValue == newValue) return;
\t\t\t\t\t\tcurrentValue = newValue;
\t\t\t\t\t\t
\t\t\t\t\t\tvar new_source = (!newValue || newValue == \"\") ? [] : cities[newValue];
\t\t\t\t\t\t
\t\t\t\t\t\t//the destroy method is causing errors in x-editable v1.4.6+
\t\t\t\t\t\t//it worked fine in v1.4.5
\t\t\t\t\t\t/**\t\t\t
\t\t\t\t\t\t\$('#city').editable('destroy').editable({
\t\t\t\t\t\t\ttype: 'select2',
\t\t\t\t\t\t\tsource: new_source
\t\t\t\t\t\t}).editable('setValue', null);
\t\t\t\t\t\t*/
\t\t\t\t\t\t
\t\t\t\t\t\t//so we remove it altogether and create a new element
\t\t\t\t\t\tvar city = \$('#city').removeAttr('id').get(0);
\t\t\t\t\t\t\$(city).clone().attr('id', 'city').text('Select City').editable({
\t\t\t\t\t\t\ttype: 'select2',
\t\t\t\t\t\t\tvalue : null,
\t\t\t\t\t\t\t//onblur:'ignore',
\t\t\t\t\t\t\tsource: new_source,
\t\t\t\t\t\t\tselect2: {
\t\t\t\t\t\t\t\t'width': 140
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}).insertAfter(city);//insert it after previous instance
\t\t\t\t\t\t\$(city).remove();//remove previous instance
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t    });
\t\t\t
\t\t\t\t\$('#city').editable({
\t\t\t\t\ttype: 'select2',
\t\t\t\t\tvalue : 'Amsterdam',
\t\t\t\t\t//onblur:'ignore',
\t\t\t        source: cities[currentValue],
\t\t\t\t\tselect2: {
\t\t\t\t\t\t'width': 140
\t\t\t\t\t}
\t\t\t    });
\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t//custom date editable
\t\t\t\t\$('#signup').editable({
\t\t\t\t\ttype: 'adate',
\t\t\t\t\tdate: {
\t\t\t\t\t\t//datepicker plugin options
\t\t\t\t\t\t    format: 'yyyy/mm/dd',
\t\t\t\t\t\tviewformat: 'yyyy/mm/dd',
\t\t\t\t\t\t weekStart: 1
\t\t\t\t\t\t 
\t\t\t\t\t\t//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
\t\t\t\t\t\t//,format: 'yyyy-mm-dd',
\t\t\t\t\t\t//viewformat: 'yyyy-mm-dd'
\t\t\t\t\t}
\t\t\t\t})
\t\t\t
\t\t\t    \$('#age').editable({
\t\t\t        type: 'spinner',
\t\t\t\t\tname : 'age',
\t\t\t\t\tspinner : {
\t\t\t\t\t\tmin : 16,
\t\t\t\t\t\tmax : 99,
\t\t\t\t\t\tstep: 1,
\t\t\t\t\t\ton_sides: true
\t\t\t\t\t\t//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t
\t\t\t
\t\t\t    \$('#login').editable({
\t\t\t        type: 'slider',
\t\t\t\t\tname : 'login',
\t\t\t\t\t
\t\t\t\t\tslider : {
\t\t\t\t\t\t min : 1,
\t\t\t\t\t\t  max: 50,
\t\t\t\t\t\twidth: 100
\t\t\t\t\t\t//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(response, newValue) {
\t\t\t\t\t\tif(parseInt(newValue) == 1)
\t\t\t\t\t\t\t\$(this).html(newValue + \" hour ago\");
\t\t\t\t\t\telse \$(this).html(newValue + \" hours ago\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t\t\$('#about').editable({
\t\t\t\t\tmode: 'inline',
\t\t\t        type: 'wysiwyg',
\t\t\t\t\tname : 'about',
\t\t\t
\t\t\t\t\twysiwyg : {
\t\t\t\t\t\t//css : {'max-width':'300px'}
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(response, newValue) {
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t// *** editable avatar *** //
\t\t\t\ttry {//ie8 throws some harmless exceptions, so let's catch'em
\t\t\t
\t\t\t\t\t//first let's add a fake appendChild method for Image element for browsers that have a problem with this
\t\t\t\t\t//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
\t\t\t\t\ttry {
\t\t\t\t\t\tdocument.createElement('IMG').appendChild(document.createElement('B'));
\t\t\t\t\t} catch(e) {
\t\t\t\t\t\tImage.prototype.appendChild = function(el){}
\t\t\t\t\t}
\t\t\t
\t\t\t\t\tvar last_gritter
\t\t\t\t\t\$('#avatar').editable({
\t\t\t\t\t\ttype: 'image',
\t\t\t\t\t\tname: 'avatar',
\t\t\t\t\t\tvalue: null,
\t\t\t\t\t\timage: {
\t\t\t\t\t\t\t//specify ace file input plugin's options here
\t\t\t\t\t\t\tbtn_choose: 'Change Avatar',
\t\t\t\t\t\t\tdroppable: true,
\t\t\t\t\t\t\tmaxSize: 110000,//~100Kb
\t\t\t
\t\t\t\t\t\t\t//and a few extra ones here
\t\t\t\t\t\t\tname: 'avatar',//put the field name here as well, will be used inside the custom plugin
\t\t\t\t\t\t\ton_error : function(error_type) {//on_error function will be called when the selected file has a problem
\t\t\t\t\t\t\t\tif(last_gritter) \$.gritter.remove(last_gritter);
\t\t\t\t\t\t\t\tif(error_type == 1) {//file format error
\t\t\t\t\t\t\t\t\tlast_gritter = \$.gritter.add({
\t\t\t\t\t\t\t\t\t\ttitle: 'File is not an image!',
\t\t\t\t\t\t\t\t\t\ttext: 'Please choose a jpg|gif|png image!',
\t\t\t\t\t\t\t\t\t\tclass_name: 'gritter-error gritter-center'
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else if(error_type == 2) {//file size rror
\t\t\t\t\t\t\t\t\tlast_gritter = \$.gritter.add({
\t\t\t\t\t\t\t\t\t\ttitle: 'File too big!',
\t\t\t\t\t\t\t\t\t\ttext: 'Image size should not exceed 100Kb!',
\t\t\t\t\t\t\t\t\t\tclass_name: 'gritter-error gritter-center'
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse {//other error
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\ton_success : function() {
\t\t\t\t\t\t\t\t\$.gritter.removeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t    url: function(params) {
\t\t\t\t\t\t\t// ***UPDATE AVATAR HERE*** //
\t\t\t\t\t\t\t//for a working upload example you can replace the contents of this function with 
\t\t\t\t\t\t\t//examples/profile-avatar-update.js
\t\t\t
\t\t\t\t\t\t\tvar deferred = new \$.Deferred
\t\t\t
\t\t\t\t\t\t\tvar value = \$('#avatar').next().find('input[type=hidden]:eq(0)').val();
\t\t\t\t\t\t\tif(!value || value.length == 0) {
\t\t\t\t\t\t\t\tdeferred.resolve();
\t\t\t\t\t\t\t\treturn deferred.promise();
\t\t\t\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\t\t\t//dummy upload
\t\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\t\tif(\"FileReader\" in window) {
\t\t\t\t\t\t\t\t\t//for browsers that have a thumbnail of selected image
\t\t\t\t\t\t\t\t\tvar thumb = \$('#avatar').next().find('img').data('thumb');
\t\t\t\t\t\t\t\t\tif(thumb) \$('#avatar').get(0).src = thumb;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tdeferred.resolve({'status':'OK'});
\t\t\t
\t\t\t\t\t\t\t\tif(last_gritter) \$.gritter.remove(last_gritter);
\t\t\t\t\t\t\t\tlast_gritter = \$.gritter.add({
\t\t\t\t\t\t\t\t\ttitle: 'Avatar Updated!',
\t\t\t\t\t\t\t\t\ttext: 'Uploading to server can be easily implemented. A working example is included with the template.',
\t\t\t\t\t\t\t\t\tclass_name: 'gritter-info gritter-center'
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t } , parseInt(Math.random() * 800 + 800))
\t\t\t
\t\t\t\t\t\t\treturn deferred.promise();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t// ***END OF UPDATE AVATAR HERE*** //
\t\t\t\t\t\t},
\t\t\t\t\t\t
\t\t\t\t\t\tsuccess: function(response, newValue) {
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t}catch(e) {}
\t\t\t\t
\t\t\t\t/**
\t\t\t\t//let's display edit mode by default?
\t\t\t\tvar blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
\t\t\t\tif(blank_image) {
\t\t\t\t\t\$('#avatar').editable('show').on('hidden', function(e, reason) {
\t\t\t\t\t\tif(reason == 'onblur') {
\t\t\t\t\t\t\t\$('#avatar').editable('show');
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#avatar').off('hidden');
\t\t\t\t\t})
\t\t\t\t}
\t\t\t\t*/
\t\t\t
\t\t\t\t//another option is using modals
\t\t\t\t\$('#avatar2').on('click', function(){
\t\t\t\t\tvar modal = 
\t\t\t\t\t'<div class=\"modal fade\">\\
\t\t\t\t\t  <div class=\"modal-dialog\">\\
\t\t\t\t\t   <div class=\"modal-content\">\\
\t\t\t\t\t\t<div class=\"modal-header\">\\
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\\
\t\t\t\t\t\t\t<h4 class=\"blue\">Change Avatar</h4>\\
\t\t\t\t\t\t</div>\\
\t\t\t\t\t\t\\
\t\t\t\t\t\t<form class=\"no-margin\">\\
\t\t\t\t\t\t <div class=\"modal-body\">\\
\t\t\t\t\t\t\t<div class=\"space-4\"></div>\\
\t\t\t\t\t\t\t<div style=\"width:75%;margin-left:12%;\"><input type=\"file\" name=\"file-input\" /></div>\\
\t\t\t\t\t\t </div>\\
\t\t\t\t\t\t\\
\t\t\t\t\t\t <div class=\"modal-footer center\">\\
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success\"><i class=\"ace-icon fa fa-check\"></i> Submit</button>\\
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm\" data-dismiss=\"modal\"><i class=\"ace-icon fa fa-times\"></i> Cancel</button>\\
\t\t\t\t\t\t </div>\\
\t\t\t\t\t\t</form>\\
\t\t\t\t\t  </div>\\
\t\t\t\t\t </div>\\
\t\t\t\t\t</div>';
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tvar modal = \$(modal);
\t\t\t\t\tmodal.modal(\"show\").on(\"hidden\", function(){
\t\t\t\t\t\tmodal.remove();
\t\t\t\t\t});
\t\t\t
\t\t\t\t\tvar working = false;
\t\t\t
\t\t\t\t\tvar form = modal.find('form:eq(0)');
\t\t\t\t\tvar file = form.find('input[type=file]').eq(0);
\t\t\t\t\tfile.ace_file_input({
\t\t\t\t\t\tstyle:'well',
\t\t\t\t\t\tbtn_choose:'Click to choose new avatar',
\t\t\t\t\t\tbtn_change:null,
\t\t\t\t\t\tno_icon:'ace-icon fa fa-picture-o',
\t\t\t\t\t\tthumbnail:'small',
\t\t\t\t\t\tbefore_remove: function() {
\t\t\t\t\t\t\t//don't remove/reset files while being uploaded
\t\t\t\t\t\t\treturn !working;
\t\t\t\t\t\t},
\t\t\t\t\t\tallowExt: ['jpg', 'jpeg', 'png', 'gif'],
\t\t\t\t\t\tallowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
\t\t\t\t\t});
\t\t\t
\t\t\t\t\tform.on('submit', function(){
\t\t\t\t\t\tif(!file.data('ace_input_files')) return false;
\t\t\t\t\t\t
\t\t\t\t\t\tfile.ace_file_input('disable');
\t\t\t\t\t\tform.find('button').attr('disabled', 'disabled');
\t\t\t\t\t\tform.find('.modal-body').append(\"<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>\");
\t\t\t\t\t\t
\t\t\t\t\t\tvar deferred = new \$.Deferred;
\t\t\t\t\t\tworking = true;
\t\t\t\t\t\tdeferred.done(function() {
\t\t\t\t\t\t\tform.find('button').removeAttr('disabled');
\t\t\t\t\t\t\tform.find('input[type=file]').ace_file_input('enable');
\t\t\t\t\t\t\tform.find('.modal-body > :last-child').remove();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tmodal.modal(\"hide\");
\t\t\t
\t\t\t\t\t\t\tvar thumb = file.next().find('img').data('thumb');
\t\t\t\t\t\t\tif(thumb) \$('#avatar2').get(0).src = thumb;
\t\t\t
\t\t\t\t\t\t\tworking = false;
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\tdeferred.resolve();
\t\t\t\t\t\t} , parseInt(Math.random() * 800 + 800));
\t\t\t
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t\t
\t\t\t
\t\t\t\t//////////////////////////////
\t\t\t\t\$('#profile-feed-1').ace_scroll({
\t\t\t\t\theight: '250px',
\t\t\t\t\tmouseWheelLock: true,
\t\t\t\t\talwaysVisible : true
\t\t\t\t});
\t\t\t
\t\t\t\t\$('a[ data-original-title]').tooltip();
\t\t\t
\t\t\t\t\$('.easy-pie-chart.percentage').each(function(){
\t\t\t\tvar barColor = \$(this).data('color') || '#555';
\t\t\t\tvar trackColor = '#E2E2E2';
\t\t\t\tvar size = parseInt(\$(this).data('size')) || 72;
\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\tbarColor: barColor,
\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\tscaleColor: false,
\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\tlineWidth: parseInt(size/10),
\t\t\t\t\tanimate:false,
\t\t\t\t\tsize: size
\t\t\t\t}).css('color', barColor);
\t\t\t\t});
\t\t\t  
\t\t\t\t///////////////////////////////////////////
\t\t\t
\t\t\t\t//right & left position
\t\t\t\t//show the user info on right or left depending on its position
\t\t\t\t\$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\tvar \$parent = \$this.closest('.tab-pane');
\t\t\t
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$this.offset();
\t\t\t\t\tvar w2 = \$this.width();
\t\t\t
\t\t\t\t\tvar place = 'left';
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
\t\t\t\t\t
\t\t\t\t\t\$this.find('.popover').removeClass('right left').addClass(place);
\t\t\t\t}).on('click', function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t///////////////////////////////////////////
\t\t\t\t\$('#user-profile-3')
\t\t\t\t.find('input[type=file]').ace_file_input({
\t\t\t\t\tstyle:'well',
\t\t\t\t\tbtn_choose:'Change avatar',
\t\t\t\t\tbtn_change:null,
\t\t\t\t\tno_icon:'ace-icon fa fa-picture-o',
\t\t\t\t\tthumbnail:'large',
\t\t\t\t\tdroppable:true,
\t\t\t\t\t
\t\t\t\t\tallowExt: ['jpg', 'jpeg', 'png', 'gif'],
\t\t\t\t\tallowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
\t\t\t\t})
\t\t\t\t.end().find('button[type=reset]').on(ace.click_event, function(){
\t\t\t\t\t\$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
\t\t\t\t})
\t\t\t\t.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t})
\t\t\t\t\$('.input-mask-phone').mask('(999) 999-9999');
\t\t\t
\t\t\t\t\$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: \$('#avatar').attr('src')}]);
\t\t\t
\t\t\t
\t\t\t\t////////////////////
\t\t\t\t//change profile
\t\t\t\t\$('[data-toggle=\"buttons\"] .btn').on('click', function(e){
\t\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\t\tvar which = parseInt(target.val());
\t\t\t\t\t\$('.user-profile').parent().addClass('hide');
\t\t\t\t\t\$('#user-profile-'+which).parent().removeClass('hide');
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t/////////////////////////////////////
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t//in ajax mode, remove remaining elements before leaving page
\t\t\t\t\ttry {
\t\t\t\t\t\t\$('.editable').editable('destroy');
\t\t\t\t\t} catch(e) {}
\t\t\t\t\t\$('[class*=select2]').remove();
\t\t\t\t});
\t\t\t});
\t\t</script>
                
\t\t
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:snapshotContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 387,  556 => 386,  552 => 385,  548 => 384,  544 => 383,  540 => 382,  536 => 381,  532 => 380,  528 => 379,  524 => 378,  520 => 377,  516 => 376,  512 => 375,  508 => 374,  504 => 373,  500 => 372,  496 => 371,  492 => 370,  488 => 369,  484 => 368,  480 => 367,  476 => 366,  471 => 364,  467 => 363,  463 => 362,  459 => 361,  455 => 360,  451 => 359,  447 => 358,  443 => 357,  439 => 356,  435 => 355,  431 => 354,  427 => 353,  423 => 352,  419 => 351,  415 => 350,  409 => 347,  405 => 346,  401 => 345,  397 => 344,  393 => 343,  388 => 341,  374 => 330,  362 => 320,  360 => 319,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}

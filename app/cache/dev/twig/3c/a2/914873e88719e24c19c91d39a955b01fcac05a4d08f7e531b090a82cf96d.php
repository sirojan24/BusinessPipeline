<?php

/* NotesBundle:Default:manageNotes.html.twig */
class __TwigTemplate_3ca2914873e88719e24c19c91d39a955b01fcac05a4d08f7e531b090a82cf96d extends Twig_Template
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
                                                  <!-- start of add notes Modal -->
                                                     
                                                     <div class=\"modal fade\" id=\"editnotes\" role=\"dialog\">
                                                      <div class=\"modal-dialog\" style=\"width:50%;margin-left: auto;margin-right: auto;\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\" >
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Edit Note</h4> 
                                                            
                                                          </div>
                                                         
                                                         <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("notes_updatenote");
        echo "\" method=\"post\" data-parsley-validate>  
                                                            <div class=\"modal-body\">
                                                               <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\">
                                                                             
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" style=\"text-align: left;margin-left: 5px;width:11% \" for=\"linkedin\"> Priority <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-4 pull-left\"> 
\t\t\t\t\t\t\t\t\t\t
                                                                                   <select class=\"form-control\" name=\"priority\" id=\"priority\" >
                                                                                                    
                                                                                        <option value=\"Normal\" >Normal</option>
                                                                                        <option value=\"Medium\" >Medium</option>
                                                                                        <option value=\"High\" >High</option>
                                                                                   </select>
                                                                                   
                                                                                </div>
                                                                                
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"linkedin\"> Visibility <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-4\" style=\"margin-left: 5px;\"> 
\t\t\t\t\t\t\t\t\t\t
                                                                                   <select class=\"form-control\" name=\"visibility\" id=\"visibility\" >
                                                                                                    
                                                                                        <option value=\"Public\" >Entire Company</option>
                                                                                        <option value=\"Private\" >Private</option>
                                                                                       
                                                                                   </select>
                                                                                   
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>    
                                                                               
\t\t\t\t\t\t\t        </div>   
                                                                <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-2 control-label no-padding-left\" for=\"name\" style=\"text-align:left;margin-left: 5px;width:20%\"> Note name<span style=\"color:#FF0000;\">*</span> </label><br><br>
                                                                    <div class=\"input-group col-sm-11\" style=\"margin-left: 5px;\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"notename\" placeholder=\"Note name\" class=\"col-sm-12\" name=\"notename\" data-parsley-trigger=\"keyup\"  required />
                                                                                
                                                                    </div>
                                                                            
                                                                              
                                                                </div> 
                                                                
                                                                <div class=\"form-inline form-group\">
\t\t\t\t\t\t\t\t\t    <label for=\"notes\" class=\"col-sm-1 control-label no-padding-left\" style=\"text-align:left;margin-left: 5px;\">Notes<span style=\"color:#FF0000;\">*</span> </label><br><br>
                                                                            <div class=\"input-group col-sm-11\" style=\"margin-left: 5px;\" >      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"notes\" placeholder=\"Notes\" class=\"col-sm-12\" name=\"notes\" data-parsley-trigger=\"keyup\" style=\"height:250px\"></textarea>
                                                                            </div>    
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-1 control-label no-padding-left\" for=\"name\" style=\"text-align:left;margin-left: 5px;\"> Tags</label><br><br>
                                                                    <div class=\"input-group col-sm-11\" style=\"margin-left: 5px;\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"tags\" placeholder=\"Tags\" class=\"col-sm-12\" name=\"tags\" data-parsley-trigger=\"keyup\"  required />
                                                                                
                                                                    </div>
                                                                            
                                                                              
                                                                </div> 
                                                                
                                                                
                                                                <input type=\"hidden\" name=\"noteid\" id=\"noteid\">                                   
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                              <button type=\"submit\" class=\"btn btn-info\">Update</button>
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return cancelnotemodal();\" >Cancel</button>
                                                            </div>
                                                        </form>  
                                                        </div>

                                                      </div>
                                                    </div>   
                                                    
                                                    
                                                    
                                                    <!-- end of add notes Modal -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Manage Notes</h3>
                                                               
\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                                                                            
                                                                                       
                                                                                        <th>Notes</th>
                                                                                        <th>Tags</th>
                                                                                        <th>Priority</th>
                                                                                        <th>Visibility</th>
                                                                                       
\t\t\t\t\t\t\t\t\t</tr>
                                                                        </thead>

\t\t\t\t\t\t\t\t\t<tbody>
                                                                            ";
        // line 151
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            echo " 
                                                                                 ";
            // line 152
            if (((($this->getAttribute($context["note"], "getStatus", array(), "method") == "Inactive") && ($this->getAttribute($context["note"], "getUsername", array(), "method") == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) || ($this->getAttribute($context["note"], "getStatus", array(), "method") == "Active"))) {
                echo "                             
                                                                                    <tr>
                                                                                     
                                                                                        <td> <b>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getName", array(), "method"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getTimestamp", array(), "method"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getFullname", array(), "method"), "html", null, true);
                echo " </b><br> <a title=\"Edit\" onclick=\"editnotepopup(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getId", array(), "method"), "html", null, true);
                echo ")\"><i class=\"fa fa-file-text-o bigger-150\"></i> </a> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getNotes", array(), "method"), "html", null, true);
                echo " </td>
                                                                                        <td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getTags", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label\" style=\"background-color: ";
                // line 157
                if (($this->getAttribute($context["note"], "getPriority", array(), "method") == "Normal")) {
                    echo "green";
                } elseif (($this->getAttribute($context["note"], "getPriority", array(), "method") == "Medium")) {
                    echo "yellow";
                } else {
                    echo "red";
                }
                echo ";color: black;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getPriority", array(), "method"), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "getVisibility", array(), "method"), "html", null, true);
                echo "</td>
                                                                                       
                                                                                        
                                                                                    </tr>
                                                                                 ";
            }
            // line 162
            echo "   
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
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

\t\t\t";
        // line 175
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 176
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 186
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
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.colVis.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
                <script>
                    function editnotepopup(id){
                        \$.post('";
        // line 234
        echo $this->env->getExtension('routing')->getPath("notes_getnote");
        echo "',               
                    {id: id}, 
                    function(response){
                        if(response !== \"false\"){
                            console.log(\"@@@@@@@@@\",response);
                            var notes = response.split('*');
                            document.getElementById('priority').value = notes[0];
                            document.getElementById('visibility').value = notes[1];
                            document.getElementById('notename').value = notes[2];
                            document.getElementById('notes').value = notes[3];
                            if(notes[4]!= undefined){
                                 document.getElementById('tags').value = notes[4];
                            }
                           
                            document.getElementById('noteid').value = id;
                            \$('#editnotes').modal('show');    
                                
                            
                          
                        }else{
                           console.log(\"error occured in the mange notes in retriving note\",response); 
                        }
                    });    
                    }
                    
                    function cancelnotemodal(){
                        document.getElementById('noteid').value = '';
                        document.getElementById('notename').value = '';
                        document.getElementById('notes').value = '';
                        document.getElementById('tags').value = '';
                        \$('#editnotes').modal('hide');
                    }
                </script>    
                <script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t//initiate dataTables plugin
\t\t\t\tvar oTable1 = 
\t\t\t\t\$('#dynamic-table')
\t\t\t\t//.wrap(\"<div class='dataTables_borderWrap' />\")   //if you are applying horizontal scrolling (sScrollX)
\t\t\t\t.dataTable( {
\t\t\t\t\tbAutoWidth: false,
\t\t\t\t\t\"aoColumns\": [ 
\t\t\t\t\t  null, null,null
\t\t\t\t\t   ,null
\t\t\t\t\t],
\t\t\t\t\t\"aaSorting\": [],
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
        return "NotesBundle:Default:manageNotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 234,  402 => 229,  398 => 228,  394 => 227,  390 => 226,  385 => 224,  381 => 223,  377 => 222,  373 => 221,  369 => 220,  365 => 219,  361 => 218,  357 => 217,  353 => 216,  349 => 215,  345 => 214,  341 => 213,  337 => 212,  333 => 211,  329 => 210,  325 => 209,  321 => 208,  317 => 207,  313 => 206,  309 => 205,  305 => 204,  297 => 199,  292 => 197,  278 => 186,  266 => 176,  264 => 175,  250 => 163,  243 => 162,  235 => 158,  223 => 157,  219 => 156,  207 => 155,  201 => 152,  195 => 151,  95 => 54,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}

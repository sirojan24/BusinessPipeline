<?php

/* ContactsContactsBundle:Default:manageContact.html.twig */
class __TwigTemplate_da16ac11dc647b261bf2364777b7185f3d3b45697cd663d02a1422094e39ee0d extends Twig_Template
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
                                                
                                                <!--Notes modal starts -->
                                                <div class=\"modal fade\" id=\"addnotes\" role=\"dialog\">
                                                      <div class=\"modal-dialog\" style=\"width:50%;margin-left: auto;margin-right: auto;\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\" >
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\"><i class=\"ace-icon fa fa-comment blue\"></i>  Notes</h4> 
                                                          
                                                        </div>
                                                            <div class=\"widget-body\" >
\t\t\t\t\t\t\t\t\t<div class=\"dialogs\" id=\"chatbody\" style=\"height:300px;overflow-y: auto;\">
                                                                            
                                                                        </div>    <!-- /.widget-body -->
                                                                        
\t\t\t\t\t\t\t\t\t<div class=\"form-actions\">
                                                                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input placeholder=\"Type your message here ...\" type=\"text\" id=\"message\" class=\"form-control\" name=\"message\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-info no-radius\" type=\"button\" onclick=\"savenote()\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-share\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAdd
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
                                                                              </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
                                                                        <input type=\"hidden\" name=\"typeid\" id=\"typeid\">  
                                                            </div><!-- /.widget-box -->
                                                      </div>
                                                    </div>   
                                                  </div>
                                                <!-- Notes modal ends -->
                                                
                                                 <!-- start of add tasks Modal -->
                                                     
                                                     <div class=\"modal fade\" id=\"addtask\" role=\"dialog\">
                                                      <div class=\"modal-dialog\" style=\"width:50%;margin-left: auto;margin-right: auto;\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\" style=\"background-clip: inherit;\" >
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Add a New Task</h4> 
                                                            
                                                          </div>
                                                         
                                                         <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("task_savetask");
        echo "\" method=\"post\" data-parsley-validate>  
                                                            <div class=\"modal-body no-padding-bottom\">
                                                               <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\">
                                                                             
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label no-padding-left no-padding-right \" style=\"text-align: left;margin-left: 5px;width:10% \" for=\"linkedin\"> Priority <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-2 pull-left no-padding-right no-padding-left\" style=\"width:15%\"> 
\t\t\t\t\t\t\t\t\t\t
                                                                                   <select class=\"form-control no-padding-left\" name=\"priority\" >
                                                                                                    
                                                                                        <option value=\"Normal\" >Normal</option>
                                                                                        <option value=\"Medium\" >Medium</option>
                                                                                        <option value=\"High\" >High</option>
                                                                                   </select>
                                                                                   
                                                                                </div>
                                                                                
                                                                                <label class=\"col-sm-1 control-label no-padding-left no-margin-left\" style=\"width:13%\" for=\"twitter\"> Due <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-2\"style=\"width:15%\"> 
                                                                                
                                                                                
                                                                                    <input class=\"date-picker col-sm-12\" id=\"taskdue\" type=\"text\" name=\"due\" data-date-format=\"mm-dd-yyyy\" placeholder=\"mm-dd-yyyy\" />
                                                                                
                                                                                </div>
                                                                                <input type=\"hidden\" name=\"assignto\" />
                                                                                
                                                                                <div class=\"col-sm-5 pull-right\">    
                                                                                <label class=\"col-sm-4 control-label no-padding-left\" style=\"width:40%\" for=\"linkedin\"> Visibility <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-8\" style=\"width:60%\"> 
\t\t\t\t\t\t\t\t\t\t
                                                                                   <select class=\"form-control\" name=\"visibility\" >
                                                                                                    
                                                                                        <option value=\"Public\" >Entire Company</option>
                                                                                        <option value=\"Private\" >Private</option>
                                                                                       
                                                                                   </select>
                                                                                   
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>    
                                                                               
\t\t\t\t\t\t\t        </div>   
                                                                <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-2 control-label no-padding-left\" style=\"text-align:left;margin-left: 15px;\" for=\"name\"> Task name<span style=\"color:#FF0000;\">*</span> </label><br><br>
                                                                    <div class=\"input-group col-sm-12\" style=\"margin-left: 15px;width:94%\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"taskname\" placeholder=\"Task name\" class=\"col-sm-12\" name=\"notename\" data-parsley-trigger=\"keyup\"  required />
                                                                                
                                                                    </div>
                                                                            
                                                                              
                                                                </div> 
                                                                
                                                               <div class=\"form-inline form-group\">
\t\t\t\t\t\t\t\t\t    <label for=\"notes\" class=\"col-sm-1 control-label no-padding-left\" style=\"text-align:left;margin-left: 15px;\">Notes<span style=\"color:#FF0000;\">*</span> </label><br><br>
                                                                            <div class=\"input-group\" style=\"margin-left: 15px;width:94%\" >      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"tasknotes\" placeholder=\"Notes\"  name=\"notes\" data-parsley-trigger=\"keyup\" style=\"height:250px;width:100%\"></textarea>
                                                                            </div>    
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-1 control-label no-padding-left\" for=\"name\" style=\"text-align:left;margin-left: 15px;\"> Tags</label><br><br>
                                                                    <div class=\"input-group col-sm-11\" style=\"margin-left: 15px;width:94%\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"tasktags\" placeholder=\"Tags\" class=\"col-sm-12\" name=\"tags\" data-parsley-trigger=\"keyup\"/>
                                                                                
                                                                    </div>
                                                                            
                                                                              
                                                                </div> 
                                                                
                                                                <input type=\"hidden\" name=\"tasktype\" value=\"contact\" id=\"revenue\">
                                                                <input type=\"hidden\" name=\"tasktypeid\" id=\"tasktypeid\">                                   
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                              <button type=\"submit\" class=\"btn btn-info\">Save</button>
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return canceltaskmodal();\" >Cancel</button>
                                                            </div>
                                                        </form>  
                                                        </div>

                                                      </div>
                                                    </div>   
                                                    
                                                    
                                                    
                                                    <!-- end of add tasks Modal -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Manage Contacts</h3>
                                                               
\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                                                                            
                                                                                        <th>Name</th>
                                                                                        <th>Organization</th>
                                                                                        <th>Email - Primary</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Phone - Primary</th>
                                                                                        <th># of Opportunities</th>
                                                                                        <th>Projected Revenue</th>
                                                                                        <th>Weighted Forecast</th>
                                                                                        <th>Tags</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Owner</th>
                                                                                        <th>Action</th>
                                                                                        
\t\t\t\t\t\t\t\t\t</tr>
                                                                        </thead>

\t\t\t\t\t\t\t\t\t<tbody>
                                                                             ";
        // line 202
        if (array_key_exists("contacts", $context)) {
            // line 203
            echo "                                                                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                echo " 
                                                                                        ";
                // line 204
                if (($this->getAttribute($context["contact"], "getStatus", array(), "method") == "Active")) {
                    echo "   
                                                                                        ";
                    // line 205
                    if ((($this->getAttribute($context["contact"], "getVisibility", array(), "method") == "public") || (($this->getAttribute($context["contact"], "getVisibility", array(), "method") == "private") && ($this->getAttribute($context["contact"], "getUsername", array(), "method") == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))))) {
                        echo "    
                                                                                            <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                           <td>";
                        // line 208
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getName", array(), "method"), "html", null, true);
                        echo "</td>
                                                                                            <td>";
                        // line 209
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getCompany", array(), "method"), "html", null, true);
                        echo "</td> 
                                                                                           <td><a href=\"mailto:";
                        // line 210
                        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["contact"], "getEmail0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["contact"], "getEmail0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
                        echo "</a></td>
                                                                                           <td>";
                        // line 211
                        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute($context["contact"], "getPhone0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
                        echo "</td>  
                                                                                           <td>";
                        // line 212
                        if (($this->getAttribute($context["contact"], "getNoofopportunities", array(), "method") != 0)) {
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_contacts_filteredopportunities", array("name" => $this->getAttribute($context["contact"], "getName", array(), "method"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getNoofopportunities", array(), "method"), "html", null, true);
                            echo "</a>";
                        } else {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getNoofopportunities", array(), "method"), "html", null, true);
                        }
                        echo "</td>
                                                                                           
                                                                                           <td>\$";
                        // line 214
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getProjectedrevenue", array()), "html", null, true);
                        echo "</td>
                                                                                           <td>\$";
                        // line 215
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getWeightedforecast", array(), "method"), "html", null, true);
                        echo "</td>
                                                                                           <td>";
                        // line 216
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getTags", array(), "method"), "html", null, true);
                        echo "</td>
                                                                                           <td>";
                        // line 217
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["contact"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["contact"], "getLastname", array(), "method")), "html", null, true);
                        echo "</td>
                                                                                           ";
                        // line 218
                        if ((twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute($context["contact"], "getUsername", array(), "method")))) {
                            echo "    
                                                                                            <td class=\"actions\"><a  title=\"Edit\" href=\"";
                            // line 219
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_contacts_editcontactpage", array("id" => $this->getAttribute($context["contact"], "getId", array(), "method"))), "html", null, true);
                            echo "\"><i class=\"fa fa-pencil\"></i></a>  
                                                                                                ";
                            // line 220
                            if (($this->getAttribute($context["contact"], "getCompany", array(), "method") != "")) {
                                echo "<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_addcontactopportunity", array("name" => $this->getAttribute($context["contact"], "getName", array(), "method"), "orgname" => $this->getAttribute($context["contact"], "getCompany", array(), "method"), "id" => $this->getAttribute($context["contact"], "getId", array(), "method"))), "html", null, true);
                                echo "\" title=\"Add Opportunity\"><i class=\"fa fa-plus\"></i></a>";
                            } else {
                                echo "<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_addcontactopportunity", array("name" => $this->getAttribute($context["contact"], "getName", array(), "method"), "orgname" => "null", "id" => $this->getAttribute($context["contact"], "getId", array(), "method"))), "html", null, true);
                                echo "\" title=\"Add Opportunity\"><i class=\"fa fa-plus\"></i></a>";
                            }
                            // line 221
                            echo "                                                                                                <a title=\"Notes\" onclick=\"notespopup(";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                            echo ")\"><i class=\"fa fa-file-o\"></i></a>
                                                                                                <a title=\"Tasks\" onclick=\"taskpopup(";
                            // line 222
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                            echo ")\"><i class=\"fa fa-tasks\"></i></a>
                                                                                                ";
                            // line 223
                            if (($this->getAttribute($context["contact"], "getStatus", array()) == "Inactive")) {
                                echo "<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_contacts_activate", array("id" => $this->getAttribute($context["contact"], "getId", array(), "method"))), "html", null, true);
                                echo "\">Activate</a>";
                            }
                            echo "</td>
                                                                                        ";
                        } else {
                            // line 225
                            echo "                                                                                            <td></td>
                                                                                        ";
                        }
                        // line 226
                        echo "    
                                                                                                                
                                                                                            </tr>
                                                                                        ";
                    }
                    // line 230
                    echo "                                                                                        ";
                }
                // line 231
                echo "                                                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                                                               ";
        }
        // line 232
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
        // line 244
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 245
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 255
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
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.colVis.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/daterangepicker.js"), "html", null, true);
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
\t\t\t\t\t\"aoColumns\": [ null,null,null, 
\t\t\t\t\t  null, null, null, null,null,null,{ \"bSortable\": false }
\t\t\t\t\t],
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
\t\t\t\t\t\"iDisplayLength\": ";
        // line 328
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
                                
                                \$('.date-picker').datepicker({
\t\t\t\t\tautoclose: true,
\t\t\t\t\ttodayHighlight: true
\t\t\t\t})
\t\t\t\t//show datepicker when clicking on the icon
\t\t\t\t.next().on(ace.click_event, function(){
\t\t\t\t\t\$(this).prev().focus();
\t\t\t\t});
\t\t\t
\t\t\t\t\$('#dynamic-table_filter').prepend('<a href=\"";
        // line 400
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_addcontact");
        echo "\"><button class=\"btn btn-info no-padding\" style=\"margin-right:10px;\"><i class=\"ace-icon fa fa-plus bigger-110\"></i> Add</button></a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_importcontacts");
        echo "\"><button class=\"btn btn-info no-padding\" style=\"margin-right:10px;\"><i class=\"ace-icon fa fa-plus bigger-110\"></i> Import</button></a>');
                                
                                \$(\"select\").on('change', function() {
                                     \$.post('";
        // line 403
        echo $this->env->getExtension('routing')->getPath("login_login_saveconfig");
        echo "',               
                                        {name:'contactview',value:this.value}, 
                                        function(response){
                                            if(response !== \"false\"){
                                  

                                            }else{
                                                 console.log(\"error occured in getting the manage view number in contacts\",response); 
                                            }
                                     });  
                                     
                                });
\t\t\t});
                        
\t\t</script>
                <script>
                    function cancelnotemodal(){
                        document.getElementById('typeid').value = '';
                        document.getElementById('due').value = '';
                        document.getElementById('notename').value = '';
                        document.getElementById('notes').value = '';
                        document.getElementById('tags').value = '';
                        \$('#addnotes').modal('hide');
                    }
                    function notespopup(id){
                        
                      document.getElementById('chatbody').innerHTML = \"\";
                      document.getElementById('typeid').value = id;
                      \$.post('";
        // line 431
        echo $this->env->getExtension('routing')->getPath("notes_getnotes");
        echo "',               
                    {id: id,type:'contact'}, 
                    function(response){
                        if(response !== \"false\"){
                            //console.log(\"@@@@@@@@@\",response);
                             var notes = response.split('||');
                            \t\t\t\t\t\t\t\t\t\t
                           
                            for(i=0;i<notes.length-1;i++){
                                var details = notes[i].split('**');
                                if('";
        // line 441
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "' == details[2]){
                                    document.getElementById('chatbody').innerHTML += '<div class=\"itemdiv dialogdiv\"><div class=\"user\"><img alt=\"Alexa Avatar\" src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "\" /></div><input type=\"hidden\" id=\"note_id'+i+'\" value=\"'+details[0]+'\" ><div class=\"body\"><div class=\"name\" id=\"nameid'+i+'\">'+details[1]+' &nbsp;&nbsp;&nbsp; <b>'+details[3]+'</b>&nbsp;&nbsp;&nbsp; <a id=\"link'+i+'\" onclick=\"editnote('+i+')\"><i class=\"fa fa-pencil\"></i></a></div><div class=\"text\" id=\"textid'+i+'\">'+details[4]+'</div></div></div>';
\t\t\t\t
                                }else{
                                   document.getElementById('chatbody').innerHTML += '<div class=\"itemdiv dialogdiv\"><div class=\"user\"><img alt=\"Alexa Avatar\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "\" /></div><input type=\"hidden\" id=\"note_id'+i+'\" value=\"'+details[0]+'\" ><div class=\"body\"><div class=\"name\" id=\"nameid'+i+'\">'+details[1]+' &nbsp;&nbsp;&nbsp; <b>'+details[3]+'</b></div><div class=\"text\" id=\"textid'+i+'\">'+details[4]+'</div></div></div>';
\t\t\t\t 
                                }
                                //console.log(\"######\",htmlcode);
                            }
                            afterajaxnote();
                        }else{
                            i=0;
                           //console.log(\"error occured in the mange notes in retriving note\",response); 
                          afterajaxnote();
                        }
                    }); 
                    
                    
                    }
                    function afterajaxnote(){
                        
                         \$('#addnotes').modal('show');
                        
                    }
                    function editnote(id){
                       document.getElementById('link'+id).style.display = \"none\"; 
                       var text = document.getElementById('textid'+id).innerHTML;
                       document.getElementById('textid'+id).innerHTML = '';
                       document.getElementById('textid'+id).innerHTML = '<textarea id =\"textarea'+id+'\" style=\"width:100%\">'+text+'</textarea><br><button type=\"button\" class=\"btn btn-info btn-sm pull_right\" onclick=\"updatenotes('+id+')\" >Update</button>';
                       
                        
                    }
                    function savenote(){
                        if(document.getElementById('message').value != ''){
                                var note = document.getElementById('message').value;
                                document.getElementById('message').value = '';
                                var type = \"contact\";
                                var type_id = document.getElementById('typeid').value;
                                var username = \"";
        // line 479
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\";
                                  \$.post('";
        // line 480
        echo $this->env->getExtension('routing')->getPath("notes_savenote");
        echo "',               
                            {type:type,type_id:type_id,note:note,username:username}, 
                            function(response){
                                if(response !== \"false\"){
                                   // console.log(\"#######\",response);
                                   var details = response.split('**');
                                   document.getElementById('chatbody').innerHTML += '<div class=\"itemdiv dialogdiv\"><div class=\"user\"><img alt=\"Alexa Avatar\" src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "\" /></div><input type=\"hidden\" id=\"note_id'+i+'\" value=\"'+details[0]+'\" ><div class=\"body\"><div class=\"name\" id=\"nameid'+i+'\">'+details[1]+' &nbsp;&nbsp;&nbsp; <b>'+details[3]+'</b>&nbsp;&nbsp;&nbsp; <a id=\"link'+i+'\" onclick=\"editnote('+i+')\"><i class=\"fa fa-pencil\"></i></a></div><div class=\"text\" id=\"textid'+i+'\">'+details[4]+'</div></div></div>';
                                   i++;
                                   var objDiv = document.getElementById(\"chatbody\");
                                   objDiv.scrollTop = objDiv.scrollHeight;
                                }else{

                                }
                            }); 
                        }
                    }
                    function updatenotes(id){
                         var noteid = document.getElementById('note_id'+id).value;
                         var note = document.getElementById('textarea'+id).value;
                         \$.post('";
        // line 499
        echo $this->env->getExtension('routing')->getPath("notes_updatenotes");
        echo "',               
                            {noteid:noteid,note:note}, 
                            function(response){
                                if(response !== \"false\"){
                                   console.log(\"#######\",response);
                                   var details = response.split('**');
                                   document.getElementById('nameid'+id).innerHTML = details[1]+' &nbsp;&nbsp;&nbsp; <b>'+details[3]+'</b>&nbsp;&nbsp;&nbsp; <a id=\"link'+id+'\" onclick=\"editnote('+id+')\"><i class=\"fa fa-pencil\"></i></a>';
                                   document.getElementById('textid'+id).innerHTML = details[4];
                                }else{

                                }
                            }); 
                    }
                    
                    
                    function taskpopup(id){
                       
                         
                        
                            \$('#addtask').modal('show');
                            document.getElementById('tasktypeid').value = id;   
                        
                    }
                    
                    function canceltaskmodal(){
                        document.getElementById('tasktypeid').value = '';
                        document.getElementById('taskdue').value = '';
                        document.getElementById('taskname').value = '';
                        document.getElementById('tasknotes').value = '';
                        document.getElementById('tasktags').value = '';
                        \$('#addtask').modal('hide');
                    }
                </script>    
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
        return "ContactsContactsBundle:Default:manageContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 499,  751 => 486,  742 => 480,  738 => 479,  701 => 445,  695 => 442,  691 => 441,  678 => 431,  647 => 403,  639 => 400,  564 => 328,  534 => 301,  530 => 300,  526 => 299,  522 => 298,  518 => 297,  514 => 296,  510 => 295,  505 => 293,  501 => 292,  497 => 291,  493 => 290,  489 => 289,  485 => 288,  481 => 287,  477 => 286,  473 => 285,  469 => 284,  465 => 283,  461 => 282,  457 => 281,  453 => 280,  449 => 279,  445 => 278,  441 => 277,  437 => 276,  433 => 275,  429 => 274,  425 => 273,  417 => 268,  412 => 266,  398 => 255,  386 => 245,  384 => 244,  370 => 232,  361 => 231,  358 => 230,  352 => 226,  348 => 225,  339 => 223,  335 => 222,  330 => 221,  320 => 220,  316 => 219,  312 => 218,  308 => 217,  304 => 216,  300 => 215,  296 => 214,  283 => 212,  279 => 211,  273 => 210,  269 => 209,  265 => 208,  259 => 205,  255 => 204,  248 => 203,  246 => 202,  131 => 90,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}

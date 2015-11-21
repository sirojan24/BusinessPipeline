<?php

/* OpportunityBundle:Default:manageOpportunity.html.twig */
class __TwigTemplate_0e29087d67d4db7074ddff8319ed7f982c603f7d9006e23bd64073db45c68ef2 extends Twig_Template
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
                                                <!-- start  Modal content-->
                                                <!-- start of sharing Modal -->
                                                    <div class=\"modal fade\" id=\"sharingModal\" role=\"dialog\">
                                                      <div class=\"modal-dialog\">

                                                        <!-- Modal content-->
                                                        
                                                        <div class=\"modal-content\">
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Opportunity Sharing</h4>                                                       
                                                          </div>
                                                          <div class=\"modal-body\">
                                                            <table id=\"sharingtable\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                                                                            
                                                                                        <th>Name</th>
                                                                                        <th>Weighted forecast</th>
                                                                                        
                                                                                       
\t\t\t\t\t\t\t\t\t</tr>
                                                                        </thead>

\t\t\t\t\t\t\t\t\t<tbody id=\"sharingtablebody\">
                                                                             
                                                                        </tbody>
                                                                    </table>
                                                          </div>
                                                          <div class=\"modal-footer\">
                                                              </div>
                                                        </div>

                                                      </div>
                                                    </div>
                                                     <!-- end of sharing Modal -->
                                                     
                                                     <!-- start of add notes Modal -->
                                                     
                                               ";
        // line 166
        echo "                                                    <div class=\"modal fade\" id=\"addnotes\" role=\"dialog\">
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
                                                    <!-- end of add notes Modal -->
                                                    
                                                    <!-- start of add tasks Modal -->
                                                     
                                                     <div class=\"modal fade\" id=\"addtask\" role=\"dialog\">
                                                      <div class=\"modal-dialog\" style=\"width:70%;margin-left: auto;margin-right: auto;\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\" >
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Add a New Task</h4> 
                                                            
                                                          </div>
                                                         
                                                         <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("task_savetask");
        echo "\" method=\"post\" data-parsley-validate>  
                                                            <div class=\"modal-body\">
                                                               <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\">
                                                                             
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-1 control-label no-padding-left no-padding-right \" style=\"text-align: left;margin-left: 5px;width:7% \" for=\"linkedin\"> Priority <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-1 pull-left no-padding-right no-padding-left\" style=\"width:10%\"> 
\t\t\t\t\t\t\t\t\t\t
                                                                                   <select class=\"form-control no-padding-left\" name=\"priority\" >
                                                                                                    
                                                                                        <option value=\"Normal\" >Normal</option>
                                                                                        <option value=\"Medium\" >Medium</option>
                                                                                        <option value=\"High\" >High</option>
                                                                                   </select>
                                                                                   
                                                                                </div>
                                                                                
                                                                                <label class=\"col-sm-1 control-label no-padding-left no-margin-left\" for=\"twitter\"> Due <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-2\"> 
                                                                                
                                                                                
                                                                                    <input class=\"date-picker col-sm-12\" id=\"taskdue\" type=\"text\" name=\"due\" data-date-format=\"mm-dd-yyyy\" placeholder=\"mm-dd-yyyy\" />
                                                                                
                                                                                </div>
                                                                                
                                                                                <div class=\" col-sm-7 no-padding pull-right\">
                                                                                <div class=\" col-sm-7 pull-left no-padding-left\" style=\"width:52%\">    
                                                                                 <label class=\"col-sm-4 control-label no-padding-left\" for=\"linkedin\" style=\"width:32%\"> Assign to <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                 <div class=\"input-group col-sm-8\" style=\"width:68%\"> 
\t\t\t\t\t\t\t\t\t\t
                                                                                   <select class=\"form-control\" name=\"assignto\" id=\"shareduserselect\" >
                                                                                                    
                                                                                        
                                                                                       
                                                                                   </select>
                                                                                   
                                                                                </div> 
                                                                                </div>
                                                                                <div class=\" col-sm-5 pull-right\" style=\"width:48%\" >    
                                                                                <label class=\"col-sm-4 control-label no-padding-left\" style=\"width:39%\" for=\"linkedin\"> Visibility <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-8\" style=\"width:61%\"> 
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
                                                                    <label class=\"col-sm-2 control-label no-padding-left\" style=\"text-align:left;margin-left: 5px;width:15%\" for=\"name\"> Task name<span style=\"color:#FF0000;\">*</span> </label><br><br>
                                                                    <div class=\"input-group col-sm-12\" style=\"margin-left: 5px;width:98%\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"taskname\" placeholder=\"Task name\" class=\"col-sm-12\" name=\"notename\" data-parsley-trigger=\"keyup\"  required />
                                                                                
                                                                    </div>
                                                                            
                                                                              
                                                                </div> 
                                                                
                                                               <div class=\"form-inline form-group\">
\t\t\t\t\t\t\t\t\t    <label for=\"notes\" class=\"col-sm-1 control-label no-padding-left\" style=\"text-align:left;margin-left: 5px;\">Notes<span style=\"color:#FF0000;\">*</span> </label><br><br>
                                                                            <div class=\"input-group\" style=\"margin-left: 5px;width:98%\" >      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"tasknotes\" placeholder=\"Notes\"  name=\"notes\" data-parsley-trigger=\"keyup\" style=\"height:250px;width:100%\"></textarea>
                                                                            </div>    
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-1 control-label no-padding-left\" for=\"name\" style=\"text-align:left;margin-left: 5px;\"> Tags</label><br><br>
                                                                    <div class=\"input-group col-sm-11\" style=\"margin-left: 5px;width:98%\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"tasktags\" placeholder=\"Tags\" class=\"col-sm-12\" name=\"tags\" data-parsley-trigger=\"keyup\"/>
                                                                                
                                                                    </div>
                                                                            
                                                                              
                                                                </div> 
                                                                
                                                                <input type=\"hidden\" name=\"tasktype\" value=\"opportunity\" id=\"revenue\">
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
                                                     
                                                     
                                                     <!-- end of Modal content -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
\t\t\t\t\t\t\t\t<h3 class=\"header smaller lighter blue\">Manage Opportunities</h3>
                                                               
\t\t\t\t\t\t\t\t\t<table id=\"dynamic-table\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                                                                            
                                                                                        <th>Person Name</th>
                                                                                        <th>Organization Name</th>
                                                                                        <th>Projected Revenue</th> 
                                                                                        <th>Account Type</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Stage</th>
                                                                                        <th>Chance of Sale</th>
                                                                                        <th>Weighted Forecast</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Type</th>
                                                                                        
                                                                                        <th>Opportunity Source</th>
                                                                                        <th>Expected Closed Date</th>
                                                                                        <th>Owner</th>
                                                                                    
\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
                                                                                       
\t\t\t\t\t\t\t\t\t</tr>
                                                                        </thead>

\t\t\t\t\t\t\t\t\t<tbody>
                                                                             ";
        // line 344
        if (array_key_exists("opportunities", $context)) {
            // line 345
            echo "                                                                             ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opportunities"]) ? $context["opportunities"] : $this->getContext($context, "opportunities")));
            foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
                echo " 
                                                                                    ";
                // line 346
                if (((($this->getAttribute($context["opportunity"], "getStatus", array(), "method") == "Inactive") && ($this->getAttribute($context["opportunity"], "getUsername", array(), "method") == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) || ($this->getAttribute($context["opportunity"], "getStatus", array(), "method") == "Active"))) {
                    echo "   
                                                                                    ";
                    // line 347
                    if ((($this->getAttribute($context["opportunity"], "getVisibility", array(), "method") == "public") || (($this->getAttribute($context["opportunity"], "getVisibility", array(), "method") == "private") && ($this->getAttribute($context["opportunity"], "getUsername", array(), "method") == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))))) {
                        // line 348
                        echo "                                                                                    ";
                        if ((($this->getAttribute($context["opportunity"], "getStage", array(), "method") != "Won") && ($this->getAttribute($context["opportunity"], "getStage", array(), "method") != "Loss"))) {
                            // line 349
                            echo "                                                                                        
                                                                                    <tr>
                                                                                     
                                                                                        <td>";
                            // line 352
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getPersonname", array(), "method"), "html", null, true);
                            echo "</td>
                                                                                        <td>";
                            // line 353
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getOrganizationname", array(), "method"), "html", null, true);
                            echo "</td>
                                                                                        <td>\$";
                            // line 354
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getProjectedrevenue", array(), "method"), "html", null, true);
                            echo "</td> 
                                                                                        
                                                                                      
\t\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 357
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getAccounttype", array(), "method"), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 358
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getStage", array(), "method"), "html", null, true);
                            echo "</td>
                                                                                        <td>";
                            // line 359
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getChanceofsale", array(), "method"), "html", null, true);
                            echo "%</td>
                                                                                        <td>\$";
                            // line 360
                            if (($this->getAttribute($context["opportunity"], "getCurrentuserforecast", array(), "method") != (-1))) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getCurrentuserforecast", array(), "method"), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getForecast", array(), "method"), "html", null, true);
                            }
                            echo "</td>
                                                                                        <td>";
                            // line 361
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getProducttype", array(), "method"), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 362
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getOpportunitySource", array(), "method"), "html", null, true);
                            echo "</td>
                                                                                        <td>";
                            // line 363
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getCloseddate", array(), "method"), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                            // line 364
                            echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getOwnerfullname", array(), "method"), "html", null, true);
                            echo "</td>
                                                                                        ";
                            // line 365
                            if ((twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method")))) {
                                echo "  
                                                                                            ";
                                // line 366
                                if (($this->getAttribute($context["opportunity"], "getSharing", array(), "method") != "")) {
                                    // line 367
                                    echo "                                                                                            <td class=\"actions\"><a title=\"Edit\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_editopportunity", array("id" => $this->getAttribute($context["opportunity"], "getId", array(), "method"))), "html", null, true);
                                    echo "\"><i class=\"fa fa-pencil\"></i></a> <a title=\"Opportunity Sharing\" onclick=\"sharingpopup('";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), "html", null, true);
                                    echo "',";
                                    echo twig_escape_filter($this->env, strtr($this->getAttribute($context["opportunity"], "getForecast", array(), "method"), array("," => "")), "html", null, true);
                                    echo ",'";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method"), "html", null, true);
                                    echo "')\"><i class=\"fa fa-user\"></i></a>  <a title=\"Notes\" onclick=\"notespopup(";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getId", array(), "method"), "html", null, true);
                                    echo ")\"><i class=\"fa fa-file-o\"></i></a>  <a title=\"Tasks\" onclick=\"taskpopup('";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), "html", null, true);
                                    echo "','";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method"), "html", null, true);
                                    echo "',";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getId", array(), "method"), "html", null, true);
                                    echo ")\"><i class=\"fa fa-tasks\"></i></a>";
                                    if (($this->getAttribute($context["opportunity"], "getStatus", array()) == "Inactive")) {
                                        echo "<a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_activateopportunity", array("id" => $this->getAttribute($context["opportunity"], "getId", array(), "method"))), "html", null, true);
                                        echo "\">Activate</a>";
                                    }
                                    echo "</td>
                                                                                            ";
                                } else {
                                    // line 369
                                    echo "                                                                                            <td class=\"actions\"><a title=\"Edit\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_editopportunity", array("id" => $this->getAttribute($context["opportunity"], "getId", array(), "method"))), "html", null, true);
                                    echo "\"><i class=\"fa fa-pencil\"></i></a> <a title=\"Notes\" onclick=\"notespopup(";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getId", array(), "method"), "html", null, true);
                                    echo ")\"><i class=\"fa fa-file-o\"></i></a>  <a title=\"Tasks\" onclick=\"taskpopup('";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), "html", null, true);
                                    echo "','";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method"), "html", null, true);
                                    echo "',";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getId", array(), "method"), "html", null, true);
                                    echo ")\"><i class=\"fa fa-tasks\"></i></a>";
                                    if (($this->getAttribute($context["opportunity"], "getStatus", array()) == "Inactive")) {
                                        echo "<a href=\"";
                                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_activateopportunity", array("id" => $this->getAttribute($context["opportunity"], "getId", array(), "method"))), "html", null, true);
                                        echo "\">Activate</a>";
                                    }
                                    echo "</td>
                                                                                            ";
                                }
                                // line 371
                                echo "                                                                                        ";
                            } else {
                                // line 372
                                echo "                                                                                            ";
                                if (($this->getAttribute($context["opportunity"], "getSharing", array(), "method") != "")) {
                                    // line 373
                                    echo "                                                                                            ";
                                    $context["shared"] = twig_split_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), ":");
                                    // line 374
                                    echo "                                                                                            ";
                                    if (twig_in_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["shared"]) ? $context["shared"] : $this->getContext($context, "shared")))) {
                                        // line 375
                                        echo "                                                                                            <td class=\"actions\"> <a title=\"Opportunity Sharing\" onclick=\"sharingpopup('";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), "html", null, true);
                                        echo "',";
                                        echo twig_escape_filter($this->env, strtr($this->getAttribute($context["opportunity"], "getForecast", array(), "method"), array("," => "")), "html", null, true);
                                        echo ",'";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method"), "html", null, true);
                                        echo "')\"><i class=\"fa fa-user\"></i></a>  <a title=\"Notes\" onclick=\"notespopup(";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getId", array(), "method"), "html", null, true);
                                        echo ")\"><i class=\"fa fa-file-o\"></i></a>  <a title=\"Tasks\" onclick=\"taskpopup('";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), "html", null, true);
                                        echo "','";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method"), "html", null, true);
                                        echo "',";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getId", array(), "method"), "html", null, true);
                                        echo ")\"><i class=\"fa fa-tasks\"></i></a></td>    
                                                                                            ";
                                    } else {
                                        // line 377
                                        echo "                                                                                            <td class=\"actions\"> <a title=\"Opportunity Sharing\" onclick=\"sharingpopup('";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getSharing", array(), "method"), "html", null, true);
                                        echo "',";
                                        echo twig_escape_filter($this->env, strtr($this->getAttribute($context["opportunity"], "getForecast", array(), "method"), array("," => "")), "html", null, true);
                                        echo ",'";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["opportunity"], "getUsername", array(), "method"), "html", null, true);
                                        echo "')\"><i class=\"fa fa-user\"></i></a></td>
                                                                                            ";
                                    }
                                    // line 379
                                    echo "                                                                                             ";
                                } else {
                                    // line 380
                                    echo "                                                                                             <td class=\"actions\"> </td>
                                                                                            ";
                                }
                                // line 382
                                echo "                                                                                             
                                                                                           
                                                                                        ";
                            }
                            // line 384
                            echo " 
                                                                                        
                                                                                    </tr>
                                                                                    ";
                        }
                        // line 388
                        echo "                                                                                    ";
                    }
                    // line 389
                    echo "                                                                                    ";
                }
                // line 390
                echo "                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                                                            ";
        }
        // line 392
        echo "                                                                        </tbody>
                                                                    </table>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!-- PAGE CONTENT ENDS -->
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

                        ";
        // line 403
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 404
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 414
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
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
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
\t\t<!-- page specific plugin scripts -->

\t\t<!-- ace scripts -->
                
                <script src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 830
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script> 
                
\t\t<script src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 834
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 835
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 843
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 847
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 849
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 850
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 853
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.tableTools.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/dataTables.colVis.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery-ui.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/fuelux.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 864
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/moment.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.knob.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.autosize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 872
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.inputlimiter.1.3.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-tag.js"), "html", null, true);
        echo "\"></script>
                
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
        // line 890
        echo $this->env->getExtension('routing')->getPath("notes_getnotes");
        echo "',               
                    {id: id,type:'opportunity'}, 
                    function(response){
                        if(response !== \"false\"){
                            //console.log(\"@@@@@@@@@\",response);
                             var notes = response.split('||');
                            \t\t\t\t\t\t\t\t\t\t
                           
                            for(i=0;i<notes.length-1;i++){
                                var details = notes[i].split('**');
                                if('";
        // line 900
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "' == details[2]){
                                    document.getElementById('chatbody').innerHTML += '<div class=\"itemdiv dialogdiv\"><div class=\"user\"><img alt=\"Alexa Avatar\" src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "\" /></div><input type=\"hidden\" id=\"note_id'+i+'\" value=\"'+details[0]+'\" ><div class=\"body\"><div class=\"name\" id=\"nameid'+i+'\">'+details[1]+' &nbsp;&nbsp;&nbsp; <b>'+details[3]+'</b>&nbsp;&nbsp;&nbsp; <a id=\"link'+i+'\" onclick=\"editnote('+i+')\"><i class=\"fa fa-pencil\"></i></a></div><div class=\"text\" id=\"textid'+i+'\">'+details[4]+'</div></div></div>';
\t\t\t\t
                                }else{
                                   document.getElementById('chatbody').innerHTML += '<div class=\"itemdiv dialogdiv\"><div class=\"user\"><img alt=\"Alexa Avatar\" src=\"";
        // line 904
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
                                var type = \"opportunity\";
                                var type_id = document.getElementById('typeid').value;
                                var username = \"";
        // line 938
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\";
                                  \$.post('";
        // line 939
        echo $this->env->getExtension('routing')->getPath("notes_savenote");
        echo "',               
                            {type:type,type_id:type_id,note:note,username:username}, 
                            function(response){
                                if(response !== \"false\"){
                                   // console.log(\"#######\",response);
                                   var details = response.split('**');
                                   document.getElementById('chatbody').innerHTML += '<div class=\"itemdiv dialogdiv\"><div class=\"user\"><img alt=\"Alexa Avatar\" src=\"";
        // line 945
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
        // line 958
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
                    
                    function sharingpopup(sharing,total,username){
                       
                         \$.post('";
        // line 974
        echo $this->env->getExtension('routing')->getPath("login_login_getusers");
        echo "',               
                {sharedusers: sharing,user:username}, 
                    function(response){
                        if(response !== \"false\"){
                            console.log(\"@@@@@@@@@\",response);
                            var shared = response.split(':');
                            var originator = shared[shared.length-1].split('*');
                            
                            var nonoriginators = [];
                            var nonoriginpercentage = 0;
                            for(i=0;i<shared.length-1;i++){
                                nonoriginators[i] = shared[i].split('*');
                                nonoriginpercentage += parseInt(nonoriginators[i][1]);
                            }
                            var totalpercentage = nonoriginpercentage + parseInt(originator[1]);
                            
                            if(totalpercentage >= 100){
                              document.getElementById('sharingtablebody').innerHTML = \"<tr><td>\" + originator[0] + \" (Originator)</td><td> \$\" + (total*originator[1]/100).toLocaleString() + \"</td></tr>\";  
                            }else{
                               document.getElementById('sharingtablebody').innerHTML = \"<tr><td>\" + originator[0] + \" (Originator)</td><td> \$\" + (((parseFloat(originator[1])+(100-totalpercentage))*total)/100).toLocaleString() + \"</td></tr>\";   
                            }
                            
                            
                            for(i=0;i<shared.length-1;i++){
                                if(totalpercentage > 100){
                                   document.getElementById('sharingtablebody').innerHTML += \"<tr><td>\" + nonoriginators[i][0] + \"</td><td> \$\" + ((total*(nonoriginators[i][1]-((totalpercentage-100)/(shared.length-1))))/100).toLocaleString() + \"</td></tr>\"
                                }else{
                                   document.getElementById('sharingtablebody').innerHTML += \"<tr><td>\" + nonoriginators[i][0] + \"</td><td> \$\" + ((total*(nonoriginators[i][1]))/100).toLocaleString() + \"</td></tr>\" 
                                }  
                            }
                            
                            \$('#sharingModal').modal('show');    
                                
                            console.log(sharing,nonoriginators,originator,totalpercentage);
                          
                        }else{
                           console.log(\"error occured in the mange opportunity in retriving shared users\",response); 
                        }
                    });    
                        
                        
                        
                    }
                    
                    
                     function taskpopup(sharing,username,id){
                         
                         if (sharing != ''){
                                    \$.post('";
        // line 1022
        echo $this->env->getExtension('routing')->getPath("login_login_getusers");
        echo "',               
                       {sharedusers: sharing,user:username}, 
                           function(response){
                               if(response !== \"false\"){
                                   console.log(\"@@@@@@@@@\",response);
                                   var shared = response.split(':');
                                   var originator = shared[shared.length-1].split('*');

                                   var nonoriginators = [];
                                   for(i=0;i<shared.length-1;i++){
                                       nonoriginators[i] = shared[i].split('*');
                                   }

                                    document.getElementById('shareduserselect').innerHTML = \"<option value='\"+originator[0]+\"'>\"+originator[0]+\"</option>\";
                                   sharedusername = sharing.split(':');
                                   for(i=0;i<shared.length-1;i++){

                                          document.getElementById('shareduserselect').innerHTML += \"<option value='\"+nonoriginators[i][0]+\"'>\"+nonoriginators[i][0]+\"</option>\";

                                   }

                                    \$('#addtask').modal('show');
                                   document.getElementById('tasktypeid').value = id;

                               }else{
                                  console.log(\"error occured in the mange opportunity in retriving shared users\",response); 
                               }
                           });    
                             
                         }else{
                            
                              \$.post('";
        // line 1053
        echo $this->env->getExtension('routing')->getPath("login_login_getFullname");
        echo "',               
                       {name:username}, 
                           function(response){
                               if(response !== \"false\"){
                                  

                                    document.getElementById('shareduserselect').innerHTML = \"<option value='\"+response+\"'>\"+response+\"</option>\";
                                  

                                    \$('#addtask').modal('show');
                                   document.getElementById('tasktypeid').value = id;

                               }else{
                                  console.log(\"error occured in the mange opportunity in retriving shared users\",response); 
                               }
                           });    
                         }
                       
                         
                        
                        
                        
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
\t\t\t\t\t  null, null,null,null,null,null, null, null
\t\t\t\t\t  ,{ \"bSortable\": false }
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
        // line 1114
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
                                
                                \$(\"select\").on('change', function() {
                                     \$.post('";
        // line 1178
        echo $this->env->getExtension('routing')->getPath("login_login_saveconfig");
        echo "',               
                                        {name:'opportunityview',value:this.value}, 
                                        function(response){
                                            if(response !== \"false\"){
                                  

                                            }else{
                                                 console.log(\"error occured in getting the manage view number in opportunities\",response); 
                                            }
                                     });  
                                     
                                });
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
        return "OpportunityBundle:Default:manageOpportunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1470 => 1178,  1403 => 1114,  1339 => 1053,  1305 => 1022,  1254 => 974,  1235 => 958,  1219 => 945,  1210 => 939,  1206 => 938,  1169 => 904,  1163 => 901,  1159 => 900,  1146 => 890,  1127 => 874,  1123 => 873,  1119 => 872,  1115 => 871,  1111 => 870,  1107 => 869,  1103 => 868,  1099 => 867,  1095 => 866,  1091 => 865,  1087 => 864,  1083 => 863,  1079 => 862,  1075 => 861,  1071 => 860,  1066 => 858,  1062 => 857,  1058 => 856,  1054 => 855,  1049 => 853,  1045 => 852,  1041 => 851,  1037 => 850,  1033 => 849,  1029 => 848,  1025 => 847,  1021 => 846,  1017 => 845,  1013 => 844,  1009 => 843,  1005 => 842,  1001 => 841,  997 => 840,  993 => 839,  989 => 838,  985 => 837,  981 => 836,  977 => 835,  973 => 834,  969 => 833,  964 => 831,  960 => 830,  956 => 829,  952 => 828,  548 => 427,  543 => 425,  529 => 414,  517 => 404,  515 => 403,  502 => 392,  493 => 390,  490 => 389,  487 => 388,  481 => 384,  476 => 382,  472 => 380,  469 => 379,  459 => 377,  441 => 375,  438 => 374,  435 => 373,  432 => 372,  429 => 371,  409 => 369,  383 => 367,  381 => 366,  377 => 365,  373 => 364,  369 => 363,  365 => 362,  361 => 361,  353 => 360,  349 => 359,  345 => 358,  341 => 357,  335 => 354,  331 => 353,  327 => 352,  322 => 349,  319 => 348,  317 => 347,  313 => 346,  306 => 345,  304 => 344,  170 => 213,  121 => 166,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}

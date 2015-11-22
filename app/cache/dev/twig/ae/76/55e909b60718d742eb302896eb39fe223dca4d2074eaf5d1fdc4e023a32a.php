<?php

/* OpportunityBundle:Default:editOpportunity.html.twig */
class __TwigTemplate_ae7655e909b60718d742eb302896eb39fe223dca4d2074eaf5d1fdc4e023a32a extends Twig_Template
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
    
        ";
        // line 4
        $this->env->loadTemplate("LoginLoginBundle:Default:head.html.twig")->display($context);
        // line 5
        echo "        
\t<body class=\"no-skin\" onload=\"onLoadBody();\">
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
                                                <!-- Modal -->
                                                    <!-- Won Modal -->
                                                    <div class=\"modal fade\" id=\"wonModal\" role=\"dialog\">
                                                      <div class=\"modal-dialog\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\">
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Won Opportunity</h4>                                                        </div>
                                                          <div class=\"modal-body\">
                                                            <div class=\"form-group\" > 
                                                                            <div class=\"input-group col-sm-12\"> 
\t\t\t\t\t\t\t\t\t\t<label  for=\"projectedrevenue\">Account Revenue</label>
                                                                                <br>
                                                                                <div class=\"input-group\" >
                                                                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t</span>
                                                                                <input type=\"text\" name=\"modalrevenue\" id=\"modalrevenue\"  onkeyup=\"updateUserRevenue()\"class=\"col-sm-12\" required />
                                                                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t.00
\t\t\t\t\t\t\t\t\t\t</span>
                                                                                </div>
                                                                                
                                                                                
                                                                            </div> 
                                                                            <br>
                                                                            <div class=\"input-group col-sm-12\"> 
\t\t\t\t\t\t\t\t\t\t<label  for=\"projectedrevenue\">User Revenue</label>
                                                                                <br>
                                                                                <div class=\"input-group\" >
                                                                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t</span>
                                                                                    <input type=\"hidden\" id=\"commisionnonoriginator\">
                                                                                    <input type=\"text\" name=\"modalrevenue\" id=\"individualrevenue\" readonly=\"\"  class=\"col-sm-12\" required />
                                                                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t.00
\t\t\t\t\t\t\t\t\t\t</span>
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>     
                                                            </div>
                                                          </div>
                                                          <div class=\"modal-footer\">
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return setRevenue();\" >Submit</button>
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return clearRevenue();\" >Clear</button>
                                                          </div>
                                                        </div>

                                                      </div>
                                                    </div>
                                                    <!-- end of won Modal -->
                                                    <div class=\"modal fade\" id=\"lostModal\" role=\"dialog\">
                                                      <div class=\"modal-dialog\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\">
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Lost Opportunity</h4>                                                       
                                                          </div>
                                                          <div class=\"modal-body\">
                                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"notes\" >Reason</label>
                                                                                <br>
                                                                            <div class=\"input-group col-sm-12\">      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"modalreason\" class=\"col-sm-12\" name=\"modalreason\" data-parsley-pattern=\"^[a-zA-Z0-9,.:;'_ ]*\$\" data-parsley-trigger=\"keyup\"></textarea>
                                                                            </div>    
                                                            </div>
                                                          </div>
                                                          <div class=\"modal-footer\">
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return setReason();\" >Submit</button>
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return clearReason();\" >Clear</button>
                                                          </div>
                                                        </div>

                                                      </div>
                                                    </div>
                                                    <!-- end of lost Modal -->
                                                    <!-- start of add contact Modal -->
                                                     <div class=\"modal fade\" id=\"addcontact\" role=\"dialog\">
                                                      <div class=\"modal-dialog\">

                                                        <!-- Modal content-->
                                                        <div class=\"modal-content\">
                                                          <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
                                                            <h4 class=\"modal-title smaller lighter blue\">Add Contact</h4> 
                                                            <h5 class=\"smaller lighter blue\" >This contact is not in our pipeline. Please save it first.</h5>
                                                          </div>
                                                         
                                                         <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_createcontact");
        echo "\" method=\"post\" data-parsley-validate>  
                                                            <div class=\"modal-body\">
                                                               <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-3 control-label no-padding-left\" for=\"name\"> Contact name<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-6\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" placeholder=\"Contact Name\" class=\"col-sm-12\" name=\"name\" data-parsley-trigger=\"keyup\"  required />
                                                                                
                                                                            </div>
                                                                            
                                                                              
                                                                </div> 
                                                                <div class=\"form-inline form-group\">
                                                                    <label class=\"col-sm-3 control-label no-padding-left\" for=\"name\"> Organization name<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-6\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"companyname\" placeholder=\"Organization Name\" class=\"col-sm-12\" name=\"companyname\" data-parsley-trigger=\"keyup\"  required />
                                                                                
                                                                            </div>
                                                                            
                                                                              
                                                                </div> 
                                                                <div class=\"form-inline form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label no-padding-left\" for=\"email0\"> Primary Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-6\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email0\" placeholder=\"Email\" class=\"col-sm-12\" name=\"email0\" onchange=\"return contactAvailability()\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required />
                                                                                <input type=\"hidden\" name=\"emailtype0\" value =\"Primary\" > 
                                                                                <div id=\"emailerror\"></div>
                                                                            </div>
                                                                            
                                                                              
                                                                </div> 
                                                                <div class=\"form-inline form-group\"  > 
                                                                            
                                                                           
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label no-padding-left\" for=\"phone0\"> Primary Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                <div class=\"input-group col-sm-6\">     
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone0\" name=\"phone0\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _ Ext._ _ _ _\" class=\"col-sm-12\"  data-parsley-trigger=\"change\" onchange=\"return contactAvailability()\" onkeydown=\"return tel_check(event,'phone0')\" onkeypress=\"return false;\" required />
                                                                                <input type=\"hidden\" name=\"phonetype0\" value =\"Work-Primary\" />
                                                                                <div id=\"telerror\"></div>
                                                                                </div>
                                                                                
                                                                </div> 
                                                                <div class=\"form-inline form-group\" > 
                                                                           
                                                                             
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label no-padding-left\" for=\"visibility\"> Visibility <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-6\"> 
                                                                                    <select class=\"form-control\" name=\"visibility\" >
                                                                                                <option value=\"public\">Entire Company</option>
                                                                                                <option value=\"private\">Private</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                    </select> 
                                                                                </div>
                                                                            
                                                                </div> 
                                                                 <div class=\"form-inline form-group\" > 
                                                                    <label class=\"col-sm-3 control-label no-padding-left no-margin-left\" for=\"twitter\"> Owner(User)<span style=\"color:#FF0000;\">*</span>   </label>
                                                                                <div class=\"input-group col-sm-6\"> 
                                                                                                <select class=\"form-control\" name=\"username\" >
                                                                                                    ";
        // line 194
        if (array_key_exists("users", $context)) {
            // line 195
            echo "                                                                                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                                                                                            ";
                // line 196
                if ((twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    // line 197
                    echo "                                                                                                               <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                                                                                            ";
                } else {
                    // line 198
                    echo "    
                                                                                                            <option value=\"";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                                                                                            ";
                }
                // line 201
                echo "                                                                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                                                                                    ";
        }
        // line 202
        echo "           
                                                                                                       
                                                                                                </select>
                                                                                </div>
                                                                </div>  
                                                                <input type=\"hidden\" name=\"opportunityflag\" value=\"true\">                                    
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                              <button type=\"submit\" class=\"btn btn-info\">Save</button>
                                                              <button type=\"button\" class=\"btn btn-info\" onclick=\"return clearcontact();\" >Clear</button>
                                                            </div>
                                                        </form>  
                                                        </div>

                                                      </div>
                                                    </div>   
                                                    
                                                    
                                                    
                                                    <!-- end of add contact Modal -->
                                                <!-- end of Modal -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<!-- PAGE CONTENT BEGINS -->
                                                                <h3 class=\"header smaller lighter blue\">Edit Opportunity</h3>
                                                                
\t\t\t\t\t\t\t\t
                                              
                                                                    <form class=\"form-horizontal\" id=\"opportunityform\" role=\"form\" action=\"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("opportunity_updateopportunity");
        echo "\" method=\"post\" data-parsley-validate>
                                                                      <div class=\"well well-lg\"> 
                                                                        <div class=\"form-group\">
                                                                            
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"firstname\"> Person Name<span style=\"color:#FF0000;\">*</span>  </label>
                                                                            <div class=\"input-group col-sm-4\">
                                                                                <input type=\"text\" name=\"personname\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getPersonname", array(), "method"), "html", null, true);
        echo "\" id=\"personname\" placeholder=\"Person Name\" class=\"col-sm-12\" onchange=\"return contactcheck();\"  pattern=\"^[a-zA-Z0-9_()&-,'. ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_&-,'. ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                                                                            </div>    
\t\t\t\t\t\t\t\t\t</div>
                                                                        
                                                                        <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"organizationname\"> Organization Name </label>
                                                                            <div class=\"input-group col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"organizationname\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getOrganizationname", array(), "method"), "html", null, true);
        echo "\" name=\"organizationname\" placeholder=\"Organization Name\" class=\"col-sm-12\" pattern=\"^[a-zA-Z0-9_()&-,'. ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_&-,'. ]*\$\"  data-parsley-trigger=\"keyup\" />
                                                                             </div>    
\t\t\t\t\t\t\t\t\t</div>
                                                                          
                                                                         <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\"> 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"projectedrevenue\"> Projected Revenue <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-4 pull-left\" >
                                                                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t</span>
                                                                                <input type=\"text\" name=\"projectedrevenue\" value=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getProjectedrevenue", array(), "method"), "html", null, true);
        echo "\" id=\"projectedrevenue\" onkeyup=\"return forecasecalculateInchangeofProjectedRevenue();\"  class=\"col-sm-12\" required />
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>    
\t\t\t\t\t\t\t\t\t</div>
                                                                         
                                                                        <div class=\"form-inline form-group\" id=\"accounttypediv\" > 
                                                                            <div class=\"input-group col-sm-12\">   
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"username\"> Account Type <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-4\">
                                                                                   
                                                                                    <select class=\"form-control col-sm-12\" name=\"accounttype\" id=\"accounttype\" >
                                                                                        ";
        // line 267
        if (array_key_exists("accounttypes", $context)) {
            // line 268
            echo "                                                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accounttypes"]) ? $context["accounttypes"] : $this->getContext($context, "accounttypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["accounttype"]) {
                echo " 
                                                                                                ";
                // line 269
                if (($this->getAttribute($context["accounttype"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getAccounttype", array()))) {
                    // line 270
                    echo "                                                                                                    <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getName", array()), "html", null, true);
                    echo "</option>   
                                                                                                ";
                } else {
                    // line 271
                    echo "    
                                                                                                    <option value = \"";
                    // line 272
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getName", array()), "html", null, true);
                    echo "</option>
                                                                                                ";
                }
                // line 274
                echo "                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accounttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "                                                                                        ";
        }
        echo "    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                    </select>
                                                                                             
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                          
                                                                        <div class=\"form-inline form-group\" id =\"stagediv\"  > 
                                                                            <div class=\"input-group col-sm-12\">   
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"username\"> Stage <span style=\"color:#FF0000;\">*</span></label>
                                                                                <div class=\"input-group col-sm-4\">
                                                                                   
                                                                                    <select class=\"form-control col-sm-12\" name=\"stage\" id =\"stage\" onchange=\"return stageModal();\"  >
                                                                                        ";
        // line 289
        if (array_key_exists("stages", $context)) {
            // line 290
            echo "                                                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) ? $context["stages"] : $this->getContext($context, "stages")));
            foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
                echo " 
                                                                                                ";
                // line 291
                if (($this->getAttribute($context["stage"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getStage", array()))) {
                    // line 292
                    echo "                                                                                                    <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getName", array()), "html", null, true);
                    echo "</option> 
                                                                                                ";
                } else {
                    // line 293
                    echo "    
                                                                                                    <option value = \"";
                    // line 294
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getName", array()), "html", null, true);
                    echo "</option>
                                                                                                ";
                }
                // line 296
                echo "                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                                                                                        ";
        }
        echo "  
                                                                                        <option value = \"6\" ";
        // line 298
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getStage", array()) == "6")) {
            echo "selected ";
        }
        echo ">Won</option>
                                                                                        <option value = \"7\" ";
        // line 299
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getStage", array()) == "7")) {
            echo "selected ";
        }
        echo ">Lost</option>
                                                                                    </select>
                                                                                             
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\">   
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"username\"> Chance of Sale <span style=\"color:#FF0000;\">*</span></label>
                                                                                                                                                                        
                                                                            <div class=\"progress col-sm-4 no-padding-left no-padding-right no-margin-bottom\" style=\"height:34px;\">
                                                                                <div class=\"progress-bar col-sm-12 no-padding-left no-padding-right no-margin-bottom\" id=\"progress\"  role=\"progressbar\"  aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;line-height: 30px;\">
                                                                                   0% 
                                                                                </div>
                                                                            </div>  
                                                                        </div>
                                                                       </div>
                                                                      <script type=\"text/javascript\">
                                                                                window.jQuery || document.write(\"<script src='";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
                                                                      </script>
                                                                       <script type=\"text/javascript\">
                                                                           function salesetup(){

                                                                                        \$.post('";
        // line 322
        echo $this->env->getExtension('routing')->getPath("settings_getsale");
        echo "',               
                                                                               {id: document.getElementById('stage').value}, 
                                                                                   function(response){
                                                                                       if(response !== \"false\"){
                                                                                           console.log(\"@@@@@@@@@\",response);
                                                                                          \$('#progress').css('width',response+'%');
                                                                                          \$('#progress').html(response+'%'); 
                                                                                               
                                                                                       }else{
                                                                                          console.log(response); 
                                                                                       }
                                                                                   });    
                                                                             }
                                                                           
                                                                        </script>
                                                                         <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\"> 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"projectedrevenue\"> Weighted Forecast <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <div class=\"input-group col-sm-4 pull-left\" >
                                                                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\$
\t\t\t\t\t\t\t\t\t\t</span>
                                                                                <input type=\"text\" name=\"forecast\" id=\"forecast\"  value=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getForecast", array(), "method"), "html", null, true);
        echo "\" class=\"col-sm-12\" required />
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>    
\t\t\t\t\t\t\t\t\t</div>     
                                                                        <div class=\"form-inline form-group\" id=\"producttypediv\" > 
                                                                            <div class=\"input-group col-sm-12\">   
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"username\"> Product Type <span style=\"color:#FF0000;\">*</span></label>
                                                                                <div class=\"input-group col-sm-4\">
                                                                                   
                                                                                    <select class=\"form-control col-sm-12\" name=\"producttype\" id=\"producttype\" >
                                                                                        ";
        // line 356
        if (array_key_exists("producttypes", $context)) {
            // line 357
            echo "                                                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["producttypes"]) ? $context["producttypes"] : $this->getContext($context, "producttypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["producttype"]) {
                echo " 
                                                                                                ";
                // line 358
                if (($this->getAttribute($context["producttype"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getProducttype", array()))) {
                    // line 359
                    echo "                                                                                                 <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getName", array()), "html", null, true);
                    echo "</option>   
                                                                                                ";
                } else {
                    // line 360
                    echo "    
                                                                                                <option value = \"";
                    // line 361
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getName", array()), "html", null, true);
                    echo "</option>
                                                                                                ";
                }
                // line 363
                echo "                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "                                                                                        ";
        }
        echo "  
                                                                                    </select>
                                                                                             
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                          
                                                                        <div class=\"form-inline form-group\" id=\"opportunitysourcediv\" > 
                                                                            <div class=\"input-group col-sm-12\">   
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"username\"> Opportunity Source <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-4\">
                                                                                   
                                                                                    <select class=\"form-control col-sm-12\" name=\"opportunitysource\" id=\"opportunitysource\" >
                                                                                        ";
        // line 377
        if (array_key_exists("opportunitysources", $context)) {
            // line 378
            echo "                                                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opportunitysources"]) ? $context["opportunitysources"] : $this->getContext($context, "opportunitysources")));
            foreach ($context['_seq'] as $context["_key"] => $context["opportunitysource"]) {
                echo " 
                                                                                                ";
                // line 379
                if (($this->getAttribute($context["opportunitysource"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getOpportunitysource", array()))) {
                    // line 380
                    echo "                                                                                                    <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getName", array()), "html", null, true);
                    echo "</option>
                                                                                                ";
                } else {
                    // line 381
                    echo "    
                                                                                                    <option value = \"";
                    // line 382
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getName", array()), "html", null, true);
                    echo "</option>
                                                                                                ";
                }
                // line 384
                echo "                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunitysource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "                                                                                        ";
        }
        echo "  \t
                                                                                    </select>
                                                                                             
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                        
                                                                         <div class=\"form-inline form-group\" >
                                                                            <div class=\"input-group col-sm-12\">
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"dob\"> Expected Closed Date <span style=\"color:#FF0000;\">*</span>  </label>
                                                                                <input class=\" col-sm-4 date-picker\" id=\"closeddate\" value =\"";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getCloseddate", array()), "html", null, true);
        echo "\" type=\"text\" name=\"closeddate\" data-date-format=\"mm/dd/yyyy\" placeholder=\"mm/dd/yyyy\" />
                                                                                 
                                                                            </div>
                                                                        </div> 
                                                                         <!--  
                                                                        <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"notes\" class=\"col-sm-2 control-label no-padding-left\">Notes</label>
                                                                            <div class=\"input-group col-sm-4\">      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"notes\" placeholder=\"Notes\" class=\"col-sm-12\" name=\"notes\" data-parsley-pattern=\"^[a-zA-Z0-9,.:;'_ ]*\$\" data-parsley-trigger=\"keyup\">";
        // line 403
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getNotes", array()), "html", null, true);
        echo "</textarea>
                                                                            </div>    
                                                                        </div> -->
                                                                         
                                                                         <div class=\"form-inline form-group\" id='visibilitydiv'> 
                                                                            <div class=\"input-group col-sm-12\">    
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"visibility\"> Visibility <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-4 pull-left\"> 
                                                                                    <select class=\"form-control\" name=\"visibility\" id=\"visibility\" >
                                                                                        
                                                                                                <option value=\"public\" ";
        // line 413
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getVisibility", array()) == "public")) {
            echo "selected";
        }
        echo ">Entire Company</option>
                                                                                                <option value=\"private\" ";
        // line 414
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getVisibility", array()) == "private")) {
            echo "selected";
        }
        echo ">Private</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                    </select> 
                                                                                </div>  
                                                                        
                                                                            </div>
                                                                        </div>  
                                                                        <div class=\"form-group\" id='dualdiv'>
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-top\" for=\"duallist\">Opportunity Sharing <span style=\"color:#FF0000;\">*</span>  </label>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8 no-padding-left\">
\t\t\t\t\t\t\t\t\t\t\t<!-- #section:plugins/input.duallist -->
\t\t\t\t\t\t\t\t\t\t\t<select multiple=\"multiple\" name=\"sharingusers[]\" id=\"duallist\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 427
        if (array_key_exists("users", $context)) {
            // line 428
            echo "                                                                                                    ";
            $context["sharing"] = twig_split_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getSharing", array(), "method"), ":");
            // line 429
            echo "                                                                                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                                                                                            ";
                // line 430
                $context["flag"] = "false";
                // line 431
                echo "                                                                                                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sharing"]) ? $context["sharing"] : $this->getContext($context, "sharing")));
                foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
                    // line 432
                    echo "                                                                                                            ";
                    if ((twig_lower_filter($this->env, $context["share"]) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                        // line 433
                        echo "                                                                                                               <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                        echo "\" selected=\"selected\">";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                        echo "</option>
                                                                                                               ";
                        // line 434
                        $context["flag"] = "true";
                        // line 435
                        echo "                                                                                                            ";
                    }
                    // line 436
                    echo "                                                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 437
                echo "                                                                                                              ";
                if ((((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) != "true") && ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    echo " 
                                                                                                                <option value=\"";
                    // line 438
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                                                                                                ";
                    // line 439
                    $context["flag"] = "false";
                    // line 440
                    echo "                                                                                                              ";
                }
                echo "  
                                                                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 441
            echo " 
                                                                                                    ";
        }
        // line 442
        echo "       
\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t\t<!-- /section:plugins/input.duallist -->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>                        
                                                                        <input type=\"hidden\"  value=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getId", array(), "method"), "html", null, true);
        echo "\" name=\"id\" /> 
                                                                        <input type=\"hidden\" name=\"revenue\" value=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getRevenue", array(), "method"), "html", null, true);
        echo "\" id=\"revenue\">
                                                                        <input type=\"hidden\" name=\"userrevenue\" value=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getUserrevenue", array(), "method"), "html", null, true);
        echo "\" id=\"userrevenue\">
                                                                        <input type=\"hidden\" name=\"reason\" value=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getReason", array(), "method"), "html", null, true);
        echo "\" id=\"reason\">
                                                                        </div>
                                                                        <div class=\"clearfix form-actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3\" style=\"margin-left: 12%\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUpdate Opportunity
\t\t\t\t\t\t\t\t\t\t\t</button>
                                                                                </div>
                                                                                <div class=\"col-xs-3\" style=\"margin-left: -70px\">
\t\t\t\t\t\t\t\t\t\t\t&nbsp; 
                                                                                         <a href=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_deleteopportunity", array("id" => $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getId", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-danger\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDelete Opportunity
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

\t\t\t";
        // line 480
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 481
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='../assets/js/jquery1x.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->
\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='";
        // line 500
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
                <script type=\"text/javascript\">
                    function onLoadBody()
                        {   
                            salesetup();
                            ";
        // line 903
        if (array_key_exists("flag", $context)) {
            // line 904
            echo "                            if(";
            echo twig_escape_filter($this->env, (isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")), "html", null, true);
            echo " == true){
                                 document.getElementById('personname').readOnly = true;
                                 document.getElementById('organizationname').readOnly = true;
                                 document.getElementById('projectedrevenue').readOnly = true;
                                 document.getElementById('accounttypediv').style.display = 'none' ;
                                 document.getElementById('stagediv').style.display = 'none' ;
                                 document.getElementById('forecast').readOnly = true;
                                 document.getElementById('producttypediv').style.display = 'none' ;
                                 document.getElementById('opportunitysourcediv').style.display = 'none' ;
                                 document.getElementById('closeddate').readOnly = true;
                                 document.getElementById('visibilitydiv').style.display = 'none' ;
                                 document.getElementById('dualdiv').style.display = 'none' ;
                            }
                            ";
        }
        // line 918
        echo "                           
                            
                        }
                </script>
                <script>
                    function contactAvailability(){
                        if('' != document.getElementById('email0').value && '' != document.getElementById('phone0').value){
                            \$.post('";
        // line 925
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contactvalidate");
        echo "',               
                                {email: document.getElementById('email0').value,tel:document.getElementById('phone0').value}, 
                            function(response){
                                if(response == \"true\"){
                                    document.getElementById('email0').style.color =\"#B94A48\";
                                    document.getElementById('email0').style.backgroundColor =\"#F2DEDE\";
                                    document.getElementById('email0').style.border =\"1px solid #EED3D7\";
                                    document.getElementById('phone0').style.color =\"#B94A48\";
                                    document.getElementById('phone0').style.backgroundColor =\"#F2DEDE\";
                                    document.getElementById('phone0').style.border =\"1px solid #EED3D7\";
                                    document.getElementById('emailerror').innerHTML = \"<font color = '#B94A48'>This contact already exists.</font>\";
                                    document.getElementById('telerror').innerHTML = \"<font color = '#B94A48'>This contact already exists.</font>\";
                                    
                                }else{
                                    document.getElementById('email0').style.color =\"#468847\";
                                    document.getElementById('email0').style.backgroundColor =\"#DFF0D8\";
                                    document.getElementById('email0').style.border =\"1px solid #D6E9C6\";
                                    document.getElementById('phone0').style.color =\"#468847\";
                                    document.getElementById('phone0').style.backgroundColor =\"#DFF0D8\";
                                    document.getElementById('phone0').style.border =\"1px solid #D6E9C6\";
                                    document.getElementById('emailerror').innerHTML = \"\";
                                    document.getElementById('telerror').innerHTML = \"\";
                                }
                            });    
                        }
                    }
                </script>    
                <script>
                    function forecasecalculateInchangeofProjectedRevenue(){
                        
                        revenue = \$('#projectedrevenue').val();
                        if(document.getElementById('stage').value !== '' && document.getElementById('projectedrevenue').value !== '' ){
                            \$.post('";
        // line 957
        echo $this->env->getExtension('routing')->getPath("login_login_getCommissionoriginator");
        echo "',               
                              {name: \"";
        // line 958
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"}, 
                                  function(response){
                                      if(response !== \"false\"){
                                          if(document.getElementById('stage').value == '6'){
                                              document.getElementById('forecast').value = ((revenue * response * 100 )/10000).toLocaleString();
                                              \$('#forecast').number( true, 0 ); 
                                          }else if(document.getElementById('stage').value == '7'){
                                              document.getElementById('forecast').value = 0;
                                          }else{
                                              \$.post('";
        // line 967
        echo $this->env->getExtension('routing')->getPath("settings_getsale");
        echo "',               
                                                    {id: document.getElementById('stage').value}, 
                                                function(response1){
                                                    if(response !== \"false\"){
                                                         document.getElementById('forecast').value = ((revenue * response * response1 )/10000).toLocaleString();
                                                         \$('#forecast').number( true, 0 ); 
                                                    }else{
                                                        console.log(response); 
                                                    }
                                                });    
                                          }
                                         
                                      }else{
                                         console.log(response); 
                                      }
                                 });    
                            
                        }
                        
                    }
                     function forecastcalculate(salepercentage){
                        revenue = \$('#projectedrevenue').val()
                        if(document.getElementById('stage').value !== '' && document.getElementById('projectedrevenue').value !== '' ){
                            document.getElementById('forecast').value = ((revenue * document.getElementById('commisionnonoriginator').value * salepercentage )/10000).toLocaleString();
                            \$('#forecast').number( true, 0 ); 
                        }
                    }
                    function contactcheck(){
                        
                        \$.post('";
        // line 996
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contactavailability");
        echo "',               
                {personname: document.getElementById('personname').value}, 
                    function(response){
                        if(response == \"true\"){
                            
                        }else{
                          
                           \$('#addcontact').modal('show');
                        }
                    });    
                    }
                    
                    function clearcontact(){
                         document.getElementById('name').value = '';
                         document.getElementById('companyname').value = '';
                         document.getElementById('email0').value = '';
                         document.getElementById('phone0').value = '';
                         number = '';
                    }
                    
                     function stageModal(){
                        \$.post('";
        // line 1017
        echo $this->env->getExtension('routing')->getPath("login_login_getCommissionoriginator");
        echo "',               
                              {name: \"";
        // line 1018
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"}, 
                                  function(response){
                                      if(response !== \"false\"){
                                          document.getElementById('commisionnonoriginator').value = response;
                                          if(document.getElementById('stage').value == '6'){
                                                \$('#progress').css('width','100%');
                                                 \$('#progress').html('100%');
                                                 //get commision originator

                                                 \$('#wonModal').modal('show');
                                                  forecastcalculate(100);
                                            }
                                            else if(document.getElementById('stage').value == '7'){
                                                \$('#progress').css('width','0%');
                                                 \$('#progress').html('0%'); 
                                                \$('#lostModal').modal('show');
                                                 forecastcalculate(0);

                                            }
                                            else{

                                                \$.post('";
        // line 1039
        echo $this->env->getExtension('routing')->getPath("settings_getsale");
        echo "',               
                                    {id: document.getElementById('stage').value}, 
                                        function(response){
                                            if(response !== \"false\"){
                                                console.log(\"@@@@@@@@@\",response);
                                               \$('#progress').css('width',response+'%');
                                               \$('#progress').html(response+'%'); 
                                                forecastcalculate(response);
                                            }else{
                                               console.log(response); 
                                            }
                                        });    
                            
                                            }
                                      }else{
                                         console.log(response); 
                                      }
                                 });    
                        
                    }
                    
                    function setRevenue(){
                        document.getElementById('revenue').value = document.getElementById('modalrevenue').value;
                        document.getElementById('userrevenue').value = document.getElementById('individualrevenue').value;
                       
                        \$('#opportunityform').submit();
                        \$('#wonModal').modal('hide');
                        
                    }
                    
                    function clearRevenue(){
                        document.getElementById('modalrevenue').value = '';
                    }
                    
                    function updateUserRevenue(){
                        amount = \$('#modalrevenue').val();
                        document.getElementById('individualrevenue').value = ((amount*(document.getElementById('commisionnonoriginator').value))/100).toLocaleString();
                    }
                    
                    function setReason(){
                        document.getElementById('reason').value = document.getElementById('modalreason').value;
                        \$('#lostModal').modal('hide');
                    }
                    
                    function clearReason(){
                        document.getElementById('modalreason').value = '';
                    }
                    
                    function usernameAvailability(){
                        
                        \$.post('";
        // line 1089
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
        // line 1107
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
                    var \$currency_val2 = '';
                   function currency_format2(e,id){
                       
                       if(e.keyCode > 47 && e.keyCode < 58 && \$currency_val2.length < 12){
                           \$currency_val2 += String.fromCharCode(e.keyCode);
                           \$currency_val_edit = parseInt(\$currency_val2).toLocaleString();
                           if(\$currency_val_edit != \"NaN\"){
                                document.getElementById(id).value = \$currency_val_edit;
                            }
                            return false;
                       }else if(e.keyCode == 8){
                           \$currency_val2 = \$currency_val2.substring(0,\$currency_val2.length - 1);
                           \$currency_val_edit = parseInt(\$currency_val2).toLocaleString();
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
                <script type=\"text/javascript\">
\t\t\tjQuery(function(\$){
\t\t\t    var demo1 = \$('select[name=\"sharingusers[]\"]').bootstrapDualListbox({infoTextFiltered: '<span class=\"label label-purple label-lg\">Filtered</span>'});
\t\t\t\tvar container1 = demo1.bootstrapDualListbox('getContainer');
\t\t\t\tcontainer1.find('.btn').addClass('btn-white btn-info btn-bold');
\t\t\t
\t\t\t\t/**var setRatingColors = function() {
\t\t\t\t\t\$(this).find('.star-on-png,.star-half-png').addClass('orange2').removeClass('grey');
\t\t\t\t\t\$(this).find('.star-off-png').removeClass('orange2').addClass('grey');
\t\t\t\t}*/
\t\t\t\t\$('.rating').raty({
\t\t\t\t\t'cancel' : true,
\t\t\t\t\t'half': true,
\t\t\t\t\t'starType' : 'i'
\t\t\t\t\t/**,
\t\t\t\t\t
\t\t\t\t\t'click': function() {
\t\t\t\t\t\tsetRatingColors.call(this);
\t\t\t\t\t},
\t\t\t\t\t'mouseover': function() {
\t\t\t\t\t\tsetRatingColors.call(this);
\t\t\t\t\t},
\t\t\t\t\t'mouseout': function() {
\t\t\t\t\t\tsetRatingColors.call(this);
\t\t\t\t\t}*/
\t\t\t\t})//.find('i:not(.star-raty)').addClass('grey');
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t//////////////////
\t\t\t\t//select2
\t\t\t\t\$('.select2').css('width','200px').select2({allowClear:true})
\t\t\t\t\$('#select2-multiple-style .btn').on('click', function(e){
\t\t\t\t\tvar target = \$(this).find('input[type=radio]');
\t\t\t\t\tvar which = parseInt(target.val());
\t\t\t\t\tif(which == 2) \$('.select2').addClass('tag-input-style');
\t\t\t\t\t else \$('.select2').removeClass('tag-input-style');
\t\t\t\t});
\t\t\t\t
\t\t\t\t//////////////////
\t\t\t\t\$('.multiselect').multiselect({
\t\t\t\t enableFiltering: true,
\t\t\t\t buttonClass: 'btn btn-white btn-primary',
\t\t\t\t templates: {
\t\t\t\t\tbutton: '<button type=\"button\" class=\"multiselect dropdown-toggle\" data-toggle=\"dropdown\"></button>',
\t\t\t\t\tul: '<ul class=\"multiselect-container dropdown-menu\"></ul>',
\t\t\t\t\tfilter: '<li class=\"multiselect-item filter\"><div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input class=\"form-control multiselect-search\" type=\"text\"></div></li>',
\t\t\t\t\tfilterClearBtn: '<span class=\"input-group-btn\"><button class=\"btn btn-default btn-white btn-grey multiselect-clear-filter\" type=\"button\"><i class=\"fa fa-times-circle red2\"></i></button></span>',
\t\t\t\t\tli: '<li><a href=\"javascript:void(0);\"><label></label></a></li>',
\t\t\t\t\tdivider: '<li class=\"multiselect-item divider\"></li>',
\t\t\t\t\tliGroup: '<li class=\"multiselect-item group\"><label class=\"multiselect-group\"></label></li>'
\t\t\t\t }
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t///////////////////
\t\t\t\t\t
\t\t\t\t//typeahead.js
\t\t\t\t//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
\t\t\t\tvar substringMatcher = function(strs) {
\t\t\t\t\treturn function findMatches(q, cb) {
\t\t\t\t\t\tvar matches, substringRegex;
\t\t\t\t\t 
\t\t\t\t\t\t// an array that will be populated with substring matches
\t\t\t\t\t\tmatches = [];
\t\t\t\t\t 
\t\t\t\t\t\t// regex used to determine if a string contains the substring `q`
\t\t\t\t\t\tsubstrRegex = new RegExp(q, 'i');
\t\t\t\t\t 
\t\t\t\t\t\t// iterate through the pool of strings and for any string that
\t\t\t\t\t\t// contains the substring `q`, add it to the `matches` array
\t\t\t\t\t\t\$.each(strs, function(i, str) {
\t\t\t\t\t\t\tif (substrRegex.test(str)) {
\t\t\t\t\t\t\t\t// the typeahead jQuery plugin expects suggestions to a
\t\t\t\t\t\t\t\t// JavaScript object, refer to typeahead docs for more info
\t\t\t\t\t\t\t\tmatches.push({ value: str });
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t
\t\t\t\t\t\tcb(matches);
\t\t\t\t\t}
\t\t\t\t }
\t\t\t
\t\t\t\t \$('input.typeahead').typeahead({
\t\t\t\t\thint: true,
\t\t\t\t\thighlight: true,
\t\t\t\t\tminLength: 1
\t\t\t\t }, {
\t\t\t\t\tname: 'states',
\t\t\t\t\tdisplayKey: 'value',
\t\t\t\t\tsource: substringMatcher(ace.vars['US_STATES'])
\t\t\t\t });
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t///////////////
\t\t\t\t
\t\t\t\t
\t\t\t\t//in ajax mode, remove remaining elements before leaving page
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t\$('[class*=select2]').remove();
\t\t\t\t\t\$('select[name=\"duallistbox_demo1[]\"]').bootstrapDualListbox('destroy');
\t\t\t\t\t\$('.rating').raty('destroy');
\t\t\t\t\t\$('.multiselect').multiselect('destroy');
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t</script>
                <script src=\"";
        // line 1455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script>
                
\t\t<script src=\"";
        // line 1460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->
                <script src=\"";
        // line 1463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery-ui.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/fuelux.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/moment.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.knob.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.autosize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.inputlimiter.1.3.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-tag.js"), "html", null, true);
        echo "\"></script>
                
                <script src=\"";
        // line 1479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.bootstrap-duallistbox.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1480
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.raty.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/select2.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 1483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/typeahead.jquery.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 1486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1495
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1497
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1501
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1505
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 1506
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                 <script src=\"";
        // line 1507
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.number.js"), "html", null, true);
        echo "\"></script>
                  <script src=\"";
        // line 1508
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
\t\t<script type=\"text/javascript\">
                        \$(function(){
\t\t\t\t
\t\t\t\t//0 means no decimal places
\t\t\t\t\$('#projectedrevenue').number( true, 0 );
                                \$('#forecast').number( true, 2 );
                                \$('#modalrevenue').number( true, 0 );
                                \$('#userrevenue').number( true, 0 );
                                
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t});
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
        return "OpportunityBundle:Default:editOpportunity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2007 => 1508,  2003 => 1507,  1999 => 1506,  1995 => 1505,  1991 => 1504,  1987 => 1503,  1983 => 1502,  1979 => 1501,  1975 => 1500,  1971 => 1499,  1967 => 1498,  1963 => 1497,  1959 => 1496,  1955 => 1495,  1951 => 1494,  1947 => 1493,  1943 => 1492,  1939 => 1491,  1935 => 1490,  1931 => 1489,  1927 => 1488,  1923 => 1487,  1919 => 1486,  1913 => 1483,  1909 => 1482,  1905 => 1481,  1901 => 1480,  1897 => 1479,  1892 => 1477,  1888 => 1476,  1884 => 1475,  1880 => 1474,  1876 => 1473,  1872 => 1472,  1868 => 1471,  1864 => 1470,  1860 => 1469,  1856 => 1468,  1852 => 1467,  1848 => 1466,  1844 => 1465,  1840 => 1464,  1836 => 1463,  1830 => 1460,  1825 => 1458,  1821 => 1457,  1817 => 1456,  1813 => 1455,  1462 => 1107,  1441 => 1089,  1388 => 1039,  1364 => 1018,  1360 => 1017,  1336 => 996,  1304 => 967,  1292 => 958,  1288 => 957,  1253 => 925,  1244 => 918,  1226 => 904,  1224 => 903,  818 => 500,  797 => 481,  795 => 480,  775 => 463,  761 => 452,  757 => 451,  753 => 450,  749 => 449,  740 => 442,  736 => 441,  727 => 440,  725 => 439,  719 => 438,  714 => 437,  708 => 436,  705 => 435,  703 => 434,  696 => 433,  693 => 432,  688 => 431,  686 => 430,  679 => 429,  676 => 428,  674 => 427,  656 => 414,  650 => 413,  637 => 403,  626 => 395,  612 => 385,  606 => 384,  599 => 382,  596 => 381,  588 => 380,  586 => 379,  579 => 378,  577 => 377,  560 => 364,  554 => 363,  547 => 361,  544 => 360,  536 => 359,  534 => 358,  527 => 357,  525 => 356,  510 => 344,  485 => 322,  477 => 317,  454 => 299,  448 => 298,  443 => 297,  437 => 296,  430 => 294,  427 => 293,  419 => 292,  417 => 291,  410 => 290,  408 => 289,  390 => 275,  384 => 274,  377 => 272,  374 => 271,  366 => 270,  364 => 269,  357 => 268,  355 => 267,  339 => 254,  325 => 243,  315 => 236,  306 => 230,  276 => 202,  267 => 201,  260 => 199,  257 => 198,  249 => 197,  247 => 196,  240 => 195,  238 => 194,  176 => 135,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}
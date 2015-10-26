<?php

/* ContactsContactsBundle:Default:editContacts.html.twig */
class __TwigTemplate_a3b1f33dd62d4bbe9f41bb4444d7d812310c1d2175facdd34f58ecb0539b42a2 extends Twig_Template
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
\t<body class=\"no-skin\" onload=\"getContactName();\">
\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>

                        ";
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
        echo "\t\t\t\t\t\t</div><!-- /.page-header -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t  <h3 class=\"header smaller lighter blue\">Update Contact</h3>
                                                                
\t\t\t\t\t\t\t\t
                                              
                                                                    <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_updatecontact");
        echo "\" method=\"post\"  enctype=\"multipart/form-data\" data-parsley-validate>
                                                                      <div class=\"well well-lg\"> 
                                                                       
                                                                        <div class=\"input-group form-inline col-sm-12\">
                                                                            <div class=\"input-group form-group col-sm-6\" >
                                                                                <div class=\"form-group\" style=\"display:table-row;\">
                                                                            
                                                                                    <label class=\"col-sm-4-half control-label no-padding-left\"  for=\"name\">Name<span style=\"color:#FF0000;\">*</span>  </label>
                                                                                    <div class=\"input-group\" style=\"width:68.50%;padding-left:4px \">
                                                                                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getName", array(), "method"), "html", null, true);
        echo "\" class=\"col-sm-12\"  pattern=\"^[a-zA-Z0-9()_,.'/\\- ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9()_,.'/\\- ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                                                                                        <div id=\"nameerror\" ></div>
                                                                                    </div>
                                                                                    
                                                                                    <div style=\"height: 30px\" >
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class=\"form-group\" style=\"display:table-row;\">    
                                                                                    <label class=\"col-sm-4-half control-label no-padding-left\" style=\"margin-bottom:15px;\" for=\"companyname\"> Organization Name  </label>
                                                                                    <div class=\"input-group \" style=\"width:68.50%;padding-left:4px \">
                                                                                        <input type=\"text\" id=\"companyname\" name=\"companyname\" placeholder=\"Organization Name\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getCompany", array(), "method"), "html", null, true);
        echo "\" style=\"margin-bottom: 15px;\" class=\"col-sm-12\" pattern=\"^[a-zA-Z0-9()_,.'/\\-& ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9()_,.'/\\-& ]*\$\"  data-parsley-trigger=\"keyup\" />
                                                                                    </div>    
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"input-group col-sm-6\">
                                                                                <div class=\"col-sm-2\">
                                                                                </div> 
                                                                                <div class=\"col-sm-8\">
                                                                                <input id=\"profile-image-upload\" class=\"hidden\" name=\"profileimage\" type=\"file\">
                                                                                <div style=\"margin-left: 50px;height:140px;width: 150px \" id=\"profile-image\" >
                                                                                     ";
        // line 77
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method") != "")) {
            // line 78
            echo "                                                                                         <img style=\"height:125px;width: 125px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method")), "html", null, true);
            echo "\" class=\"image\">
                                                                                    ";
        } else {
            // line 79
            echo "    
                                                                                    
                                                                                        <img style=\"height:125px;width: 125px\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/contactscontacts/contactimages/defaultImage.png"), "html", null, true);
            echo "\" class=\"image\">
                                                                                    ";
        }
        // line 82
        echo "    
                                                                                    </div>
                                                                                <div style=\"margin-left: 50px\" id=\"profileerror\"></div>
                                                                                </div>
                                                                            </div>    
                                                                        
                                                                        </div>        
                                                                        
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email0\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email0\" placeholder=\"Email\" class=\"col-sm-12\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\"  name=\"email0\" onchange=\"return contactAvailability()\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required />
                                                                                 <div id=\"emailerror\"></div>
                                                                            </div>
                                                                            
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype0\" >
                                                                                                <option value = \"Primary\">Primary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>
                                                                        ";
        // line 103
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method") == "")) {
            echo "         
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv1\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 106
            echo "                                                                         <div class=\"form-inline form-group\" id=\"emaildiv1\">   
                                                                        ";
        }
        // line 107
        echo "    
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email1\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email1\" placeholder=\"Email\" ";
        // line 110
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo "class=\"col-sm-12\" name=\"email1\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype1\" >
                                                                                                <option value=\"Work\" ";
        // line 114
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 115
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 116
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div> 
                                                                        ";
        // line 120
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method") == "")) {
            echo "                        
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv2\" style=\"display: none;\">
                                                                         ";
        } else {
            // line 123
            echo "                                                                        <div class=\"form-inline form-group\" id=\"emaildiv2\">
                                                                         ";
        }
        // line 124
        echo "   
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email2\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email2\" placeholder=\"Email\" ";
        // line 127
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email2\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype2\" >
                                                                                                <option value=\"Work\" ";
        // line 131
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 132
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 133
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>  
                                                                        ";
        // line 137
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method") == "")) {
            echo "                           
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv3\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 140
            echo "                                                                           <div class=\"form-inline form-group\" id=\"emaildiv3\"> 
                                                                        ";
        }
        // line 141
        echo "    
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email3\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email3\" placeholder=\"Email\" ";
        // line 144
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email3\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"   />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype3\" >
                                                                                                <option value=\"Work\" ";
        // line 148
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 149
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 150
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>     
                                                                        ";
        // line 154
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method") == "")) {
            echo "         
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv4\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 157
            echo "                                                                         <div class=\"form-inline form-group\" id=\"emaildiv4\" >   
                                                                        ";
        }
        // line 158
        echo "    
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email4\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email4\" placeholder=\"Email\" ";
        // line 161
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email4\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\" />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype4\" >
                                                                                                <option value=\"Work\" ";
        // line 165
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 166
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 167
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>     
                                                                        ";
        // line 171
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method") == "")) {
            echo "         
                                                                            <div class=\"form-inline form-group\" id=\"emaildiv5\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 174
            echo "                                                                             <div class=\"form-inline form-group\" id=\"emaildiv5\">
                                                                        ";
        }
        // line 175
        echo "    
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email5\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email5\" placeholder=\"Email\" ";
        // line 178
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email5\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype5\" >
                                                                                                <option value=\"Work\" ";
        // line 182
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 183
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 184
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>     
                                                                        ";
        // line 188
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method") == "")) {
            echo "         
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv6\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 191
            echo "                                                                        <div class=\"form-inline form-group\" id=\"emaildiv6\">    
                                                                        ";
        }
        // line 192
        echo "    
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email6\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email6\" placeholder=\"Email\" ";
        // line 195
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email6\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype6\" >
                                                                                                <option value=\"Work\" ";
        // line 199
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 200
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 201
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>     
                                                                        ";
        // line 205
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method") == "")) {
            echo "        
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv7\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 208
            echo "                                                                         <div class=\"form-inline form-group\" id=\"emaildiv7\">   
                                                                        ";
        }
        // line 209
        echo "    
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email7\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email7\" placeholder=\"Email\" ";
        // line 212
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email7\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"   />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype7\" >
                                                                                                <option value=\"Work\" ";
        // line 216
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 217
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 218
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>     
                                                                        ";
        // line 222
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method") == "")) {
            echo "        
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv8\" style=\"display: none;\">
                                                                         ";
        } else {
            // line 225
            echo "                                                                          <div class=\"form-inline form-group\" id=\"emaildiv8\">
                                                                        ";
        }
        // line 226
        echo "     
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email8\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email8\" placeholder=\"Email\" ";
        // line 229
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email8\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"   />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype8\" >
                                                                                                <option value=\"Work\" ";
        // line 233
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 234
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 235
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div>     
                                                                        ";
        // line 239
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method") == "")) {
            echo "         
                                                                        <div class=\"form-inline form-group\" id=\"emaildiv9\" style=\"display: none;\">
                                                                        ";
        } else {
            // line 242
            echo "                                                                          <div class=\"form-inline form-group\" id=\"emaildiv9\">   
                                                                        ";
        }
        // line 243
        echo "    
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"email9\"> Email<span style=\"color:#FF0000;\">*</span> </label>
                                                                            <div class=\"input-group col-sm-4 pull-left\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email9\" placeholder=\"Email\" ";
        // line 246
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"col-sm-12\" name=\"email9\"  data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"   />
\t\t\t\t\t\t\t\t\t    </div>
                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"email\"> Type </label>
                                                                             <select class=\"form-control col-sm-4\" name=\"emailtype9\" >
                                                                                                <option value=\"Work\" ";
        // line 250
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                                                                                <option value=\"Home\" ";
        // line 251
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                                                                                <option value = \"Custom\" ";
        // line 252
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                             </select>   
\t\t\t\t\t\t\t\t\t</div> 
                                                                        <div>
                                                                            <div class=\"col-sm-1\">
                                                                            </div>
                                                                            <div class=\"col-sm-4\" style=\"margin-left: 48px\">
                                                                                <a href=\"javascript:;\" onClick = \"addEmail()\" id=\"anotheremail\">Add another email</a> 
                                                                            </div>    
                                                                        </div>    
                                                                        <br>
                                                                        <br>
                                                                        <div class=\"form-inline form-group\" id=\"phonediv0\"  > 
                                                                            
                                                                           
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"phone0\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                <div class=\"input-group col-sm-4 pull-left\">     
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone0\" name=\"phone0\" ";
        // line 271
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone0", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _ Ext._ _ _ _\" class=\"col-sm-12\"  data-parsley-trigger=\"change\" onchange=\"return contactAvailability()\"  required />
                                                                                <div id=\"telerror\"></div>
                                                                                </div>
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype0\" >
                                                                                           <option value=\"Work-Primary\">Work-Primary</option>
                                                                                    </select>
                                                                        </div> 
                                                                        ";
        // line 279
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method") == "")) {
            // line 280
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv1\" style=\"display: none;\"  > 
                                                                        ";
        } else {
            // line 282
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv1\" >
                                                                        ";
        }
        // line 283
        echo "    
                                                                           
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"phone1\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone1\" name=\"phone1\" ";
        // line 288
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype1\" >
                                                                                            <option value=\"Work\" ";
        // line 292
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 293
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 295
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 296
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 297
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 298
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 299
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 300
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 301
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    </select>
                                                                        </div>         
                                                                        ";
        // line 304
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method") == "")) {
            // line 305
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv2\" style=\"display: none;\" > 
                                                                        ";
        } else {
            // line 306
            echo "    
                                                                        <div class=\"form-inline form-group\" id=\"phonediv2\" >    
\t\t\t\t\t\t\t\t\t";
        }
        // line 309
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone2\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone2\" name=\"phone2\" ";
        // line 312
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"  />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype2\" >
                                                                                           <option value=\"Work\" ";
        // line 316
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 317
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 319
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 320
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 321
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 322
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 323
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 324
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 325
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 329
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method") == "")) {
            // line 330
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv3\" style=\"display: none;\"  > 
                                                                        ";
        } else {
            // line 331
            echo "     
                                                                        <div class=\"form-inline form-group\" id=\"phonediv3\"   > 
                                                                        ";
        }
        // line 334
        echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"phone3\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone3\" name=\"phone3\" ";
        // line 337
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype3\" >
                                                                                           <option value=\"Work\" ";
        // line 341
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 342
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 344
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 345
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 346
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 347
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 348
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 349
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 350
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 354
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method") == "")) {
            // line 355
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv4\" style=\"display: none;\"  > 
                                                                        ";
        } else {
            // line 356
            echo "     
                                                                         <div class=\"form-inline form-group\" id=\"phonediv4\">  
\t\t\t\t\t\t\t\t\t";
        }
        // line 359
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone4\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone4\" name=\"phone4\" ";
        // line 362
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype4\" >
                                                                                           <option value=\"Work\" ";
        // line 366
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 367
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 369
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 370
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 371
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 372
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 373
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 374
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 375
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 379
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method") == "")) {
            // line 380
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv5\" style=\"display: none;\"  > 
                                                                        ";
        } else {
            // line 381
            echo "     
                                                                         <div class=\"form-inline form-group\" id=\"phonediv5\">    
\t\t\t\t\t\t\t\t\t";
        }
        // line 384
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone5\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone5\" name=\"phone5\" ";
        // line 387
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype5\" >
                                                                                           <option value=\"Work\" ";
        // line 391
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 392
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 394
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 395
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 396
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 397
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 398
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 399
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 400
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 404
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method") == "")) {
            // line 405
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv6\" style=\"display: none;\" > 
                                                                        ";
        } else {
            // line 406
            echo "     
                                                                        <div class=\"form-inline form-group\" id=\"phonediv6\">    
\t\t\t\t\t\t\t\t\t";
        }
        // line 409
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone6\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone6\" name=\"phone6\" ";
        // line 412
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype6\" >
                                                                                           <option value=\"Work\" ";
        // line 416
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 417
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 419
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 420
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 421
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 422
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 423
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 424
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 425
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 429
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method") == "")) {
            // line 430
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv7\" style=\"display: none;\"  > 
                                                                        ";
        } else {
            // line 431
            echo "     
                                                                         <div class=\"form-inline form-group\" id=\"phonediv7\" >   
\t\t\t\t\t\t\t\t\t";
        }
        // line 434
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone7\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone7\" name=\"phone7\" ";
        // line 437
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype7\" >
                                                                                           <option value=\"Work\" ";
        // line 441
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 442
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 444
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 445
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 446
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 447
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 448
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 449
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 450
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 454
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method") == "")) {
            // line 455
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv8\" style=\"display: none;\"  > 
                                                                        ";
        } else {
            // line 456
            echo "     
                                                                        <div class=\"form-inline form-group\" id=\"phonediv8\"   >    
\t\t\t\t\t\t\t\t\t";
        }
        // line 459
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone8\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone8\" name=\"phone8\" ";
        // line 462
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"  />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype2\" >
                                                                                           <option value=\"Work\" ";
        // line 466
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 467
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 469
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 470
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 471
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 472
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 473
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 474
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 475
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
                                                                         ";
        // line 479
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method") == "")) {
            // line 480
            echo "                                                                        <div class=\"form-inline form-group\" id=\"phonediv9\" style=\"display: none;\"> 
                                                                        ";
        } else {
            // line 481
            echo "     
                                                                        <div class=\"form-inline form-group\" id=\"phonediv9\" >   
\t\t\t\t\t\t\t\t\t";
        }
        // line 484
        echo "                                                                            <label class=\"col-sm-2 control-label no-padding-left\" for=\"phone1\"> Telephone <span style=\"color:#FF0000;\">*</span>  </label>

                                                                                 
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"phone9\" name=\"phone9\" ";
        // line 487
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                                                  
                                                                                <label class=\"col-sm-2 control-label no-padding-left\">Type</label>
                                                                                    <select class=\"form-control mb-md\" name=\"phonetype9\" >
                                                                                           <option value=\"Work\" ";
        // line 491
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                                                                            <option value = \"Mobile\" ";
        // line 492
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>
                                                                                                        
                                                                                            <option value=\"Home\" ";
        // line 494
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                                                                            <option value=\"Main\" ";
        // line 495
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                                                                            <option value=\"Work Fax\" ";
        // line 496
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                                                                            <option value=\"Home Fax\" ";
        // line 497
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                                                                            <option value=\"Google Voice\" ";
        // line 498
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                                                                            <option value=\"Pager\" ";
        // line 499
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                                                                            <option value=\"Custom\" ";
        // line 500
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                                                                    
                                                                                    </select>
                                                                        </div>
\t\t\t\t\t\t\t\t\t 
                                                                         <div>
                                                                            <div class=\"col-sm-1\">
                                                                            </div>
                                                                            <div class=\"col-sm-4\" style=\"margin-left: 48px\">
                                                                                <a href=\"javascript:;\" onClick = \"addPhone()\" id=\"anotheremail\">Add another phone</a> 
                                                                            </div>    
                                                                        </div>  
                                                                        <br>
                                                                        <br>
                                                                        
                                                                         <div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"address1\"> Address 1  </label>
                                                                            <div class=\"input-group col-sm-4\">    
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"address1\" placeholder=\"Address 1\" value=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getAddress1", array(), "method"), "html", null, true);
        echo "\"  class=\"col-sm-12\" style=\"margin-bottom: 18px\" name=\"address1\" pattern=\"^[a-zA-Z0-9_.,/\\'- ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" />
                                                                            </div>    
\t\t\t\t\t\t\t\t\t</div>  
                                                                          
                                                                         <div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"address2\"> Address 2  </label>
                                                                            <div class=\"input-group col-sm-4\">     
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"address2\" placeholder=\"Address 2\" value=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getAddress2", array(), "method"), "html", null, true);
        echo "\"  class=\"col-sm-12\" style=\"margin-bottom: 18px\" name=\"address2\" pattern=\"^[a-zA-Z0-9_.,\\/'- ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" />
\t\t\t\t\t\t\t\t\t    </div>\t
\t\t\t\t\t\t\t\t\t</div> 
                                                                        <div class=\"form-inline form-group\" > 
                                                                            
                                                                            <div class=\"input-group col-sm-12\">
                                                                                <label class=\"col-sm-2 control-label\" for=\"city\"> City  </label>
                                                                                <div class=\"input-group col-sm-3 pull-left\">    
                                                                                    <input type=\"text\" id=\"city\" placeholder=\"City\" value=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getCity", array(), "method"), "html", null, true);
        echo "\"  class=\"col-sm-12\" style=\"margin-bottom: 18px\" name=\"city\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" />
                                                                                   
                                                                                </div>  
                                                                                <label class=\"col-sm-1 control-label\" for=\"state\"> State  </label>

                                                                                <div class=\"input-group col-sm-3\">    
                                                                                
                                                                                    <input type=\"text\" id=\"state\" placeholder=\"State\" value=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getState", array(), "method"), "html", null, true);
        echo "\"  class=\"col-sm-12\" name=\"state\"  pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" />
                                                                                </div>
                                                                                
                                                                                <div class=\"input-group col-sm-3 pull-right\">   
                                                                                    <label class=\"col-sm-4 control-label\" for=\"postalcode\"> Postal Code  </label>
                                                                                    <div class=\"input-group col-sm-8\">
                                                                                        <input type=\"text\" id=\"postalcode\" placeholder=\"Postal code\" value=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPostalcode", array(), "method"), "html", null, true);
        echo "\" class=\"col-sm-12\" name=\"postalcode\"  data-parsley-type=\"digits\" data-parsley-trigger=\"keyup\" />
                                                                                    </div>    
                                                                                </div>
                                                                            </div> 
                                                                                
                                                                               
\t\t\t\t\t\t\t\t\t</div> 
                                                                        <div class=\"form-inline form-group\" >
                                                                           
                                                                                <label class=\"col-sm-2 control-label no-padding-left\" for=\"dob\"> Date of Birth  </label>
                                                                            <div class=\"input-group col-sm-4\">    
                                                                                <input class=\" col-sm-12 date-picker\" style=\"margin-bottom: 18px\" id=\"dob\" type=\"text\" name=\"dob\" value=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getDob", array(), "method"), "html", null, true);
        echo "\" data-date-format=\"mm-dd-yyyy\" placeholder=\"mm-dd-yyyy\" />
                                                                            </div>     
                                                                                
                                                                           
                                                                        </div>  
                                                                        
                                                                        <div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"tags\"> Tags  </label>
                                                                            <div class=\"input-group col-sm-4\">     
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"tags\" placeholder=\"tags\" value=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getTags", array(), "method"), "html", null, true);
        echo "\"  class=\"col-sm-12\" style=\"margin-bottom: 18px\" name=\"tags\" pattern=\"^[a-zA-Z0-9_;:,. ]*\$\" data-parsley-pattern=\"^[a-zA-Z_0-9_;:,. ]*\$\"  data-parsley-trigger=\"keyup\" />
\t\t\t\t\t\t\t\t\t    </div>\t
\t\t\t\t\t\t\t\t\t</div> 
                                                                        
                                                                        
                                                                     <!-- 
                                                                        <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"notes\" class=\"col-sm-2 control-label no-padding-left\">Notes</label>
                                                                            <div class=\"input-group col-sm-4\">      
\t\t\t\t\t\t\t\t\t\t<textarea  id=\"notes\" placeholder=\"Notes\" class=\"col-sm-12\" style=\"margin-bottom: 18px\" name=\"notes\" data-parsley-pattern=\"^[a-zA-Z0-9,._;:'\\/ ]*\$\" data-parsley-trigger=\"keyup\">";
        // line 575
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getContactnotes", array(), "method"), "html", null, true);
        echo "</textarea>
                                                                            </div>    
                                                                        </div> -->
                                                                        <div class=\"form-inline form-group\" > 
                                                                            <div class=\"input-group col-sm-12\">
                                                                             
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label no-padding-left\" for=\"visibility\"> Visibility <span style=\"color:#FF0000;\">*</span> </label>
                                                                                <div class=\"input-group col-sm-4 pull-left\"> 
                                                                                    <select class=\"form-control\" name=\"visibility\" >
                                                                                                <option value=\"public\"  ";
        // line 584
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getVisibility", array(), "method") == "public")) {
            echo "selected ";
        }
        echo ">Entire Company</option>
                                                                                                <option value=\"private\" ";
        // line 585
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getVisibility", array(), "method") == "private")) {
            echo "selected ";
        }
        echo ">Private</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                    </select> 
                                                                                </div>
                                                                                <label class=\"col-sm-2 control-label no-padding-left no-margin-left\" for=\"twitter\"> Owner(User)<span style=\"color:#FF0000;\">*</span>   </label>
                                                                                <div class=\"input-group col-sm-4\"> 
                                                                                                <select class=\"form-control\" name=\"username\" >
                                                                                                    ";
        // line 592
        if (array_key_exists("users", $context)) {
            // line 593
            echo "                                                                                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                                                                                            ";
                // line 594
                if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method")) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    // line 595
                    echo "                                                                                                               <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method"), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                                                                                            ";
                } else {
                    // line 596
                    echo "   
                                                                                                            <option value=\"";
                    // line 597
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                                                                                           ";
                }
                // line 598
                echo " 
                                                                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 599
            echo " 
                                                                                                    ";
        }
        // line 600
        echo "           
                                                                                                       
                                                                                                </select>
                                                                                </div>
                                                                                <input type=\"hidden\" value = \"";
        // line 604
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getId", array(), "method"), "html", null, true);
        echo "\" name =\"id\">                    
                                                                            </div>    
                                                                               
\t\t\t\t\t\t\t\t\t</div>   
                                                                       </div>
                                                                         <div class=\"clearfix form-actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-3\" style=\"margin-left: 12%\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUpdate Contact
\t\t\t\t\t\t\t\t\t\t\t</button>
                                                                                </div>
                                                                                <div class=\"col-xs-3\" style=\"margin-left: -18px\">
\t\t\t\t\t\t\t\t\t\t\t&nbsp; &nbsp; &nbsp;
                                                                                         <a href=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacts_contacts_deletecontact", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getId", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-danger\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDelete Contact
\t\t\t\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                                                    </form>  
                                                                     
\t\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

                        ";
        // line 632
        $this->env->loadTemplate("LoginLoginBundle:Default:footer.html.twig")->display($context);
        // line 633
        echo "
\t\t\t<a href=\"#\" style=\"margin-right:30px;\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-lg btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-140\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 643
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
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
                <script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap.js"), "html", null, true);
        echo "\"></script>
                
\t\t<!-- page specific plugin scripts -->
                 <script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery-ui.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/chosen.jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/fuelux.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/moment.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.knob.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.autosize.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.inputlimiter.1.3.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/bootstrap-tag.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
                <script type=\"text/javascript\">
                        jQuery(function(\$){
                            \$(\"#phone0\").mask(\"(999) 999-9999? Ext.9999\");
                            \$(\"#phone1\").mask(\"(999) 999-9999\");
                            \$(\"#phone2\").mask(\"(999) 999-9999\");
                            \$(\"#phone3\").mask(\"(999) 999-9999\");
                            \$(\"#phone4\").mask(\"(999) 999-9999\");
                            \$(\"#phone5\").mask(\"(999) 999-9999\");
                            \$(\"#phone6\").mask(\"(999) 999-9999\");
                            \$(\"#phone7\").mask(\"(999) 999-9999\");
                            \$(\"#phone8\").mask(\"(999) 999-9999\");
                            \$(\"#phone9\").mask(\"(999) 999-9999\");
                        });
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
                <script>
                    var emailcount = 1;
                    var phonecount = 1;
                    function addPhone(){
                        if(phonecount < 10){
                            document.getElementById(\"phonediv\"+phonecount).style.display= \"block\";
                            phonecount++;
                        }
                        return false;
                    }
                    function addEmail(){
                        if(emailcount < 10){
                            document.getElementById(\"emaildiv\"+emailcount).style.display= \"block\";
                            emailcount++;
                        }
                        return false;
                    }
                    \$('#profile-image').on('click', function() {
                        \$('#profile-image-upload').click();
                    });
                    \$('#profile-image').mouseover(function(){

                        \$('#profile-image').css(\"cursor\",\"pointer\");
                    });
                    \$('#profile-image-upload').change( function(e) {
                        if(e.target.files[0].type == 'image/png'||e.target.files[0].type == 'image/jpg'||e.target.files[0].type == 'image/gif'||e.target.files[0].type == 'image/jpeg'){
                            if(e.target.files[0].size < 500000){
                                document.getElementById('profileerror').innerHTML = '';
                                var img = URL.createObjectURL(e.target.files[0]);
                                \$('.image').attr('src', img);
                            }else{
                                document.getElementById('profileerror').innerHTML = \"<font color = '#B94A48'>Max file size is 500 KB.</font>\";
                        
                            }
                        } else{
                            document.getElementById('profileerror').innerHTML = \"<font color = '#B94A48'>uploaded file should be in jpg/jpeg/png/gif.</font>\";
                        
                        }   
                    });
                    
                </script>    
                <script>
                    function contactAvailability(){
                        if('' != document.getElementById('email0').value && '' != document.getElementById('phone0').value){
                            \$.post('";
        // line 1211
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
                    var currentcontactname = ''; 
                    function getContactName(){
                        currentcontactname = document.getElementById('name').value;
                    }
                    function contactnamecheck(){
                        
                        if(currentcontactname.toLowerCase() != document.getElementById('name').value){
                        
                            \$.post('";
        // line 1249
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contactavailability");
        echo "',               
                                {personname: document.getElementById('name').value}, 
                            function(response){
                                if(response == \"false\"){
                                    document.getElementById('name').style.color =\"#468847\";
                                    document.getElementById('name').style.backgroundColor =\"#DFF0D8\";
                                    document.getElementById('name').style.border =\"1px solid #D6E9C6\";
                                    document.getElementById('name').style.color =\"#468847\";
                                    document.getElementById('name').style.backgroundColor =\"#DFF0D8\";
                                    document.getElementById('name').style.border =\"1px solid #D6E9C6\";
                                    document.getElementById('nameerror').innerHTML = \"\";
                                    
                                }else{
                                    document.getElementById('name').style.color =\"#B94A48\";
                                    document.getElementById('name').style.backgroundColor =\"#F2DEDE\";
                                    document.getElementById('name').style.border =\"1px solid #EED3D7\";
                                    document.getElementById('name').style.color =\"#B94A48\";
                                    document.getElementById('name').style.backgroundColor =\"#F2DEDE\";
                                    document.getElementById('name').style.border =\"1px solid #EED3D7\";
                                    document.getElementById('nameerror').innerHTML = \"<div style='vertical-align:text-top'><font color = '#B94A48'>This contact already exists.</font></div>\";
                                }
                            });    
                            
                        }else{
                            document.getElementById('name').style.color =\"#468847\";
                            document.getElementById('name').style.backgroundColor =\"#DFF0D8\";
                            document.getElementById('name').style.border =\"1px solid #D6E9C6\";
                            document.getElementById('name').style.color =\"#468847\";
                            document.getElementById('name').style.backgroundColor =\"#DFF0D8\";
                            document.getElementById('name').style.border =\"1px solid #D6E9C6\";
                            document.getElementById('nameerror').innerHTML = \"\";
                        }
                        
                    }
                </script>    
                <script>
                    function fill(){
                        \$.post('";
        // line 1286
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
               </script>
               <script>
                  var number = [];
                   number['phone0'] = '";
        // line 1326
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 0, array(), "array"), "html", null, true);
        echo "';
                   number['phone1'] = '";
        // line 1327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 1, array(), "array"), "html", null, true);
        echo "';
                   number['phone2'] = '";
        // line 1328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 2, array(), "array"), "html", null, true);
        echo "';
                   number['phone3'] = '";
        // line 1329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 3, array(), "array"), "html", null, true);
        echo "';
                   number['phone4'] = '";
        // line 1330
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 4, array(), "array"), "html", null, true);
        echo "';
                   number['phone5'] = '";
        // line 1331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 5, array(), "array"), "html", null, true);
        echo "';
                   number['phone6'] = '";
        // line 1332
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 6, array(), "array"), "html", null, true);
        echo "';
                   number['phone7'] = '";
        // line 1333
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 7, array(), "array"), "html", null, true);
        echo "';
                   number['phone8'] = '";
        // line 1334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 8, array(), "array"), "html", null, true);
        echo "';
                   number['phone9'] = '";
        // line 1335
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tele"]) ? $context["tele"] : $this->getContext($context, "tele")), 9, array(), "array"), "html", null, true);
        echo "';
                   function mob_check(e,id){
                       var back_flag = true;
                       var bracket_flag = true;
                       var flag = true;
                       var update_flag = true;
                       var content = document.getElementById(id).value;
                       var last_ascii = content.charCodeAt(content.length - 1);
                       var i = 1;
                       if(e.keyCode == 9){
                           return true;
                       }
                       while(last_ascii == 8){
                           i++;
                           last_ascii = content.charCodeAt(content.length - i);
                           
                       }
                       if(e.keyCode > 47 && e.keyCode < 58 &&number[id].length < 10){
                          number[id] += String.fromCharCode(e.keyCode);
                       }else if(e.keyCode == 8){
                           
                           if(last_ascii>47 && last_ascii<58){
                              number[id] =number[id].substring(0,number[id].length-1);
                           }
                           document.getElementById(id).value = content.substring(0,content.length - i);
                           if(number[id].length === 6){
                               back_flag = false;
                           }else{
                               back_flag = true;
                           }
                           if(number[id].length === 3){
                               bracket_flag = false;
                           }
                       }else{
                           return false;
                       }
                       
                        if(number[id].length > 10){
                           return false;
                       }
                       if(number[id].length == 3 && bracket_flag){
                           document.getElementById(id).value = \"(\"+number[id]+\") \";
                           update_flag = false;
                       }
                       if(number[id].length == 6 && back_flag){
                           document.getElementById(id).value = \"(\"+number[id].substring(0,3)+\") \"+number[id].substring(3,6)+\"-\";
                           update_flag = false;
                       }
                       if(e.keyCode != 8 && update_flag){
                           document.getElementById(id).value +=  String.fromCharCode(e.keyCode);
                       }
                      
                       return false;
                   }
                   
                   
                   function tel_check(e,id){
                       
                       var back_flag = true;
                       var bracket_flag = true;
                       var flag = true;
                       var update_flag = true;
                       var content = document.getElementById(id).value;
                       var last_ascii = content.charCodeAt(content.length - 1);
                       var i = 1;
                       if(e.keyCode == 9){
                           return true;
                       }
                       while(last_ascii == 8){
                           i++;
                           last_ascii = content.charCodeAt(content.length - i);
                           
                       }
                       if(e.keyCode > 47 && e.keyCode < 58 && number[id].length < 14){
                           number[id] += String.fromCharCode(e.keyCode);
                       }else if(e.keyCode == 8){
                           document.getElementById(id).value = content.substring(0,content.length - i);
                           if(last_ascii>47 && last_ascii<58){
                               number[id] = number[id].substring(0, number[id].length-1);
                               
                           }
                           if(number[id].length === 6){
                               back_flag = false;
                           }else{
                               back_flag = true;
                           }
                           if(number[id].length === 10){
                               flag = false;
                           }
                           if(number[id].length === 3){
                               bracket_flag = false;
                           }
                       }else{
                           return false;
                       }
                       
                        if(number[id].length > 14){
                           return false;
                       }
                       if(number[id].length == 3 && bracket_flag){
                           document.getElementById(id).value = \"(\"+number[id]+\") \";
                           update_flag = false;
                       }
                       if(number[id].length == 6 && back_flag){
                           document.getElementById(id).value = \"(\"+number[id].substring(0,3)+\") \"+number[id].substring(3,6)+\"-\";
                           update_flag = false;
                       }
                       if(number[id].length == 11 && flag){
                           document.getElementById(id).value = \"(\"+number[id].substring(0,3)+\") \"+number[id].substring(3,6)+\"-\"+number[id].substring(6,10)+\" Ext.\"+number[id].substring(10,11);
                           update_flag = false;
                       }
                       if(e.keyCode != 8 && update_flag){
                           document.getElementById(id).value +=  String.fromCharCode(e.keyCode);
                       }
                       contactAvailability();
                       return false;
                   }
                   
                   
               </script>
              
               <script>
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
                </script>
                <script>
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
                
\t\t
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:editContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2464 => 1335,  2460 => 1334,  2456 => 1333,  2452 => 1332,  2448 => 1331,  2444 => 1330,  2440 => 1329,  2436 => 1328,  2432 => 1327,  2428 => 1326,  2385 => 1286,  2345 => 1249,  2304 => 1211,  1790 => 700,  1786 => 699,  1782 => 698,  1778 => 697,  1774 => 696,  1770 => 695,  1766 => 694,  1762 => 693,  1758 => 692,  1754 => 691,  1750 => 690,  1746 => 689,  1742 => 688,  1738 => 687,  1734 => 686,  1730 => 685,  1726 => 684,  1722 => 683,  1718 => 682,  1714 => 681,  1710 => 680,  1706 => 679,  1701 => 677,  1697 => 676,  1693 => 675,  1689 => 674,  1685 => 673,  1681 => 672,  1677 => 671,  1673 => 670,  1669 => 669,  1665 => 668,  1661 => 667,  1657 => 666,  1653 => 665,  1649 => 664,  1645 => 663,  1639 => 660,  1635 => 659,  1631 => 658,  1627 => 657,  1623 => 656,  1618 => 654,  1604 => 643,  1592 => 633,  1590 => 632,  1573 => 618,  1556 => 604,  1550 => 600,  1546 => 599,  1539 => 598,  1532 => 597,  1529 => 596,  1521 => 595,  1519 => 594,  1512 => 593,  1510 => 592,  1498 => 585,  1492 => 584,  1480 => 575,  1468 => 566,  1456 => 557,  1442 => 546,  1433 => 540,  1423 => 533,  1412 => 525,  1402 => 518,  1379 => 500,  1373 => 499,  1367 => 498,  1361 => 497,  1355 => 496,  1349 => 495,  1343 => 494,  1336 => 492,  1330 => 491,  1319 => 487,  1314 => 484,  1309 => 481,  1305 => 480,  1303 => 479,  1294 => 475,  1288 => 474,  1282 => 473,  1276 => 472,  1270 => 471,  1264 => 470,  1258 => 469,  1251 => 467,  1245 => 466,  1234 => 462,  1229 => 459,  1224 => 456,  1220 => 455,  1218 => 454,  1209 => 450,  1203 => 449,  1197 => 448,  1191 => 447,  1185 => 446,  1179 => 445,  1173 => 444,  1166 => 442,  1160 => 441,  1149 => 437,  1144 => 434,  1139 => 431,  1135 => 430,  1133 => 429,  1124 => 425,  1118 => 424,  1112 => 423,  1106 => 422,  1100 => 421,  1094 => 420,  1088 => 419,  1081 => 417,  1075 => 416,  1064 => 412,  1059 => 409,  1054 => 406,  1050 => 405,  1048 => 404,  1039 => 400,  1033 => 399,  1027 => 398,  1021 => 397,  1015 => 396,  1009 => 395,  1003 => 394,  996 => 392,  990 => 391,  979 => 387,  974 => 384,  969 => 381,  965 => 380,  963 => 379,  954 => 375,  948 => 374,  942 => 373,  936 => 372,  930 => 371,  924 => 370,  918 => 369,  911 => 367,  905 => 366,  894 => 362,  889 => 359,  884 => 356,  880 => 355,  878 => 354,  869 => 350,  863 => 349,  857 => 348,  851 => 347,  845 => 346,  839 => 345,  833 => 344,  826 => 342,  820 => 341,  809 => 337,  804 => 334,  799 => 331,  795 => 330,  793 => 329,  784 => 325,  778 => 324,  772 => 323,  766 => 322,  760 => 321,  754 => 320,  748 => 319,  741 => 317,  735 => 316,  724 => 312,  719 => 309,  714 => 306,  710 => 305,  708 => 304,  700 => 301,  694 => 300,  688 => 299,  682 => 298,  676 => 297,  670 => 296,  664 => 295,  657 => 293,  651 => 292,  640 => 288,  633 => 283,  629 => 282,  625 => 280,  623 => 279,  608 => 271,  584 => 252,  578 => 251,  572 => 250,  561 => 246,  556 => 243,  552 => 242,  546 => 239,  537 => 235,  531 => 234,  525 => 233,  514 => 229,  509 => 226,  505 => 225,  499 => 222,  490 => 218,  484 => 217,  478 => 216,  467 => 212,  462 => 209,  458 => 208,  452 => 205,  443 => 201,  437 => 200,  431 => 199,  420 => 195,  415 => 192,  411 => 191,  405 => 188,  396 => 184,  390 => 183,  384 => 182,  373 => 178,  368 => 175,  364 => 174,  358 => 171,  349 => 167,  343 => 166,  337 => 165,  326 => 161,  321 => 158,  317 => 157,  311 => 154,  302 => 150,  296 => 149,  290 => 148,  279 => 144,  274 => 141,  270 => 140,  264 => 137,  255 => 133,  249 => 132,  243 => 131,  232 => 127,  227 => 124,  223 => 123,  217 => 120,  208 => 116,  202 => 115,  196 => 114,  185 => 110,  180 => 107,  176 => 106,  170 => 103,  157 => 93,  144 => 82,  139 => 81,  135 => 79,  129 => 78,  127 => 77,  114 => 67,  100 => 56,  88 => 47,  78 => 39,  71 => 35,  65 => 31,  62 => 30,  55 => 26,  49 => 22,  47 => 21,  37 => 13,  35 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}

<?php

/* ContactsContactsBundle:Default:editcontactform.html.twig */
class __TwigTemplate_1e23d6ec602978e5a05c1a0d1a5fdfbe0f143b923c4960a28e060f9a1d8d6a78 extends Twig_Template
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
        echo "<script>
    var showEmailId = 1;
    var showPhoneId = 1;
</script>

<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_updatecontact");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Contact Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getName", array(), "method"), "html", null, true);
        echo "\" placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"Last Name\">Title <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Organization Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"companyname\"  class=\"form-control\" id=\"companyname\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getCompany", array(), "method"), "html", null, true);
        echo "\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 37
        echo "                <div id=\"emailSection\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"email\"  name=\"email0\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" class=\"form-control\" id=\"email0\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype0\" >
                                    <option value = \"Primary\">Primary</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                            
                    ";
        // line 55
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv1\" style=\"display: none\">
                    ";
        } else {
            // line 58
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv1\">
                    ";
        }
        // line 63
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email1\" class=\"form-control\" id=\"email1\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype1\" >
                                    <option value=\"Work\" ";
        // line 73
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 74
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 75
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 81
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv2\" style=\"display: none\">
                    ";
        } else {
            // line 84
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv2\">
                    ";
        }
        // line 89
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email2\" class=\"form-control\" id=\"email2\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype2\" >
                                    <option value=\"Work\" ";
        // line 99
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 100
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 101
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 107
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv3\" style=\"display: none\">
                    ";
        } else {
            // line 110
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv3\">
                    ";
        }
        // line 115
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email3\" class=\"form-control\" id=\"email3\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype3\" >
                                    <option value=\"Work\" ";
        // line 125
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 126
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 127
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 133
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv4\" style=\"display: none\">
                    ";
        } else {
            // line 136
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv4\">
                    ";
        }
        // line 141
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email4\" class=\"form-control\" id=\"email4\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype4\" >
                                    <option value=\"Work\" ";
        // line 151
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 152
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 153
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 159
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv5\" style=\"display: none\">
                    ";
        } else {
            // line 162
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv5\">
                    ";
        }
        // line 167
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email5\" class=\"form-control\" id=\"email5\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype5\" >
                                    <option value=\"Work\" ";
        // line 177
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 178
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 179
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 185
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv6\" style=\"display: none\">
                    ";
        } else {
            // line 188
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv6\">
                    ";
        }
        // line 193
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email6\" class=\"form-control\" id=\"email6\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype6\" >
                                    <option value=\"Work\" ";
        // line 203
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 204
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 205
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 211
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv7\" style=\"display: none\">
                    ";
        } else {
            // line 214
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv7\">
                    ";
        }
        // line 219
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email7\" class=\"form-control\" id=\"email7\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype7\" >
                                    <option value=\"Work\" ";
        // line 229
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 230
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 231
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 237
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv8\" style=\"display: none\">
                    ";
        } else {
            // line 240
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv8\">
                    ";
        }
        // line 245
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email8\" class=\"form-control\" id=\"email8\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype8\" >
                                    <option value=\"Work\" ";
        // line 255
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 256
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 257
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 263
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv9\" style=\"display: none\">
                    ";
        } else {
            // line 266
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv9\">
                    ";
        }
        // line 271
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email9\" class=\"form-control\" id=\"email9\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype9\" >
                                    <option value=\"Work\" ";
        // line 281
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 282
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 283
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"addEmailDiv\">
                        <div class=\"col-sm-4\" style=\"margin-bottom: 10px\">
                            <a href=\"javascript:addEmail()\" id=\"anotheremail\"><i class=\"fa fa-envelope fa-lg\"></i>  Add another email</a> 
                        </div>
                    </div>
                </div>

                ";
        // line 296
        echo "                <div id=\"telephone_section\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone0\" name=\"phone0\" ";
        // line 301
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone0", array(), "method") != "")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone0", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
            echo "\"";
        }
        echo " placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control mb-md\" name=\"phonetype0\" >
                                    <option value=\"Work-Primary\">Work-Primary</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 314
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method") == "")) {
            // line 315
            echo "                        <div class=\"row\" id=\"phoneDiv1\" style=\"display: none\">
                    ";
        } else {
            // line 317
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv1\">
                    ";
        }
        // line 322
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone1\" name=\"phone1\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype1\" >
                                    <option value=\"Work\" ";
        // line 332
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 333
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 334
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 335
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 336
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 337
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 338
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 339
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 340
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 346
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method") == "")) {
            // line 347
            echo "                        <div class=\"row\" id=\"phoneDiv2\" style=\"display: none\">
                    ";
        } else {
            // line 349
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv2\">
                    ";
        }
        // line 354
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone2\" name=\"phone2\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype2\" >
                                    <option value=\"Work\" ";
        // line 364
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 365
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 366
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 367
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 368
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 369
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 370
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 371
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 372
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 378
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method") == "")) {
            // line 379
            echo "                        <div class=\"row\" id=\"phoneDiv3\" style=\"display: none\">
                    ";
        } else {
            // line 381
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv3\">
                    ";
        }
        // line 386
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone3\" name=\"phone3\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype3\" >
                                    <option value=\"Work\" ";
        // line 396
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 397
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 398
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 399
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 400
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 401
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 402
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 403
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 404
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 410
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method") == "")) {
            // line 411
            echo "                        <div class=\"row\" id=\"phoneDiv4\" style=\"display: none\">
                    ";
        } else {
            // line 413
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv4\">
                    ";
        }
        // line 418
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone4\" name=\"phone4\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype4\" >
                                    <option value=\"Work\" ";
        // line 428
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 429
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 430
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 431
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 432
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 433
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 434
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 435
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 436
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 442
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method") == "")) {
            // line 443
            echo "                        <div class=\"row\" id=\"phoneDiv5\" style=\"display: none\">
                    ";
        } else {
            // line 445
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv5\">
                    ";
        }
        // line 450
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone5\" name=\"phone5\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype5\" >
                                    <option value=\"Work\" ";
        // line 460
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 461
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 462
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 463
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 464
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 465
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 466
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 467
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 468
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 474
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method") == "")) {
            // line 475
            echo "                        <div class=\"row\" id=\"phoneDiv6\" style=\"display: none\">
                    ";
        } else {
            // line 477
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv6\">
                    ";
        }
        // line 482
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone6\" name=\"phone6\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype6\" >
                                    <option value=\"Work\" ";
        // line 492
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 493
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 494
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 495
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 496
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 497
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 498
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 499
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 500
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 506
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method") == "")) {
            // line 507
            echo "                        <div class=\"row\" id=\"phoneDiv7\" style=\"display: none\">
                    ";
        } else {
            // line 509
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv7\">
                    ";
        }
        // line 514
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone7\" name=\"phone7\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype7\" >
                                    <option value=\"Work\" ";
        // line 524
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 525
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 526
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 527
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 528
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 529
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 530
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 531
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 532
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 538
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method") == "")) {
            // line 539
            echo "                        <div class=\"row\" id=\"phoneDiv8\" style=\"display: none\">
                    ";
        } else {
            // line 541
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv8\">
                    ";
        }
        // line 546
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone8\" name=\"phone8\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype8\" >
                                    <option value=\"Work\" ";
        // line 556
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 557
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 558
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 559
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 560
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 561
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 562
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 563
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 564
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 570
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method") == "")) {
            // line 571
            echo "                        <div class=\"row\" id=\"phoneDiv9\" style=\"display: none\">
                    ";
        } else {
            // line 573
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv9\">
                    ";
        }
        // line 578
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone9\" name=\"phone9\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype9\" >
                                    <option value=\"Work\" ";
        // line 588
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 589
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 590
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 591
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 592
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 593
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 594
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 595
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 596
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"addPhoneDiv\">
                        <div class=\"col-sm-4\" style=\"margin-bottom: 10px\">
                            <a href=\"javascript:addPhone()\" id=\"anotherphnoe\"><i class=\"fa fa-phone fa-lg\"></i>  Add another phone</a> 
                        </div>
                    </div>
                </div>

                ";
        // line 609
        echo "                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div id=\"subcontact\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <div class=\"panel panel-default\" id=\"subcontact1\" style=\"display: none\">
                                        <div class=\"panel-heading\">Sub-Contact 1</div>
                                        <div class=\"panel-body\">
                                            <div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Name</label>
                                                            <input type=\"text\" name=\"sub_con_name1\" class=\"form-control\" id=\"sub_con_name1\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Title</label>
                                                            <input type=\"text\" name=\"sub_con_title1\" class=\"form-control\" id=\"sub_con_title1\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Email</label>
                                                            <input type=\"email\"  name=\"sub_con_email1\" class=\"form-control\" id=\"sub_con_email1\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"/>   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Telephone</label>
                                                            <input type=\"tel\" class=\"form-control\" id=\"sub_con_phone1\" name=\"sub_con_phone1\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <div class=\"panel panel-default\" id=\"subcontact2\" style=\"display: none\">
                                        <div class=\"panel-heading\">Sub-Contact 2</div>
                                        <div class=\"panel-body\">
                                            <div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Name</label>
                                                            <input type=\"text\" name=\"sub_con_name2\" class=\"form-control\" id=\"sub_con_name2\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Title</label>
                                                            <input type=\"text\" name=\"sub_con_title2\" class=\"form-control\" id=\"sub_con_title2\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Email</label>
                                                            <input type=\"email\"  name=\"sub_con_email2\" class=\"form-control\" id=\"sub_con_email2\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"/>   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Telephone</label>
                                                            <input type=\"tel\" class=\"form-control\" id=\"sub_con_phone2\" name=\"sub_con_phone2\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=\"row\" id=\"addSubContactDiv\">
                                <div class=\"col-sm-4\" style=\"margin-bottom: 10px\">
                                    <a href=\"javascript:addSubContact()\" id=\"anotherphnoe\"><i class=\"fa fa-user-plus fa-lg\"></i>  Add Contact</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"address1\">Address 1</label>
                            <input type=\"text\" class=\"form-control\" name=\"address1\" value=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getAddress1", array(), "method"), "html", null, true);
        echo "\" id=\"address1\" placeholder=\"Address line 1\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"address2\">Address 2</label>
                            <input type=\"text\" class=\"form-control\" name=\"address2\" value=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getAddress2", array(), "method"), "html", null, true);
        echo "\" id=\"address2\" placeholder=\"Address line 2\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t\t
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"City\">City</label>
                            <input type=\"text\" class=\"form-control\" id=\"city\" value=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getCity", array(), "method"), "html", null, true);
        echo "\" name=\"city\" placeholder=\"City / Town\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"form-group\">
                            <label for=\"City\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"state\" value=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getState", array(), "method"), "html", null, true);
        echo "\" name=\"state\" placeholder=\"California, New York, Texas, etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">\t\t\t\t\t\t\t
                        <div class=\"col-xs-1\">
                            <label for=\"City\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"postalcode\" name=\"postalcode\" value=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPostalcode", array(), "method"), "html", null, true);
        echo "\" placeholder=\"Zip\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"visibility\"> Visibility <span style=\"color:#FF0000;\">*</span> </label>
                            <select class=\"form-control\" name=\"visibility\" >
                                <option value=\"public\"  ";
        // line 753
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getVisibility", array(), "method") == "public")) {
            echo "selected ";
        }
        echo ">Entire Company</option>
                                <option value=\"private\" ";
        // line 754
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getVisibility", array(), "method") == "private")) {
            echo "selected ";
        }
        echo ">Private</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"twitter\"> Owner(User)<span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"username\" >
                                ";
        // line 764
        if (array_key_exists("users", $context)) {
            // line 765
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                        ";
                // line 766
                if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method")) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    // line 767
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method"), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 768
                    echo "   
                                            <option value=\"";
                    // line 769
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 770
                echo " 
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 771
            echo " 
                                ";
        }
        // line 773
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">\t
                            <label for=\"commorigin\">Tags</label>
                            <input type=\"text\" value=\"\" name=\"tags\" value=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getTags", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" data-role=\"tagsinput\" />
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\">Contact Picture</label>
                            <br>
                            ";
        // line 790
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method") != "")) {
            // line 791
            echo "                                <div class=\"fileinput fileinput-preview\" data-provides=\"fileinput\">
                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 200px; height: 150px;\">
                                        <img src=\"";
            // line 793
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method")), "html", null, true);
            echo "\" class=\"image\">
                                    </div>
                                    <div>
                                        <span class=\"btn btn-default btn-file\">
                                            <span class=\"fileinput-exists\">Change</span>
                                            <span class=\"fileinput-new\">Select image</span>
                                            <input type=\"file\" name=\"img\">
                                        </span>
                                        <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                    </div>
                                </div>
                            ";
        } else {
            // line 805
            echo "                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                        <img src=\"";
            // line 807
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
            echo "\" alt=\"...\">
                                    </div>
                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\">
                                        ";
            // line 810
            if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method") != "")) {
                // line 811
                echo "                                            <img style=\"height:125px;width: 125px\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method")), "html", null, true);
                echo "\" class=\"image\">
                                        ";
            }
            // line 813
            echo "                                    </div>
                                    <div>
                                        <span class=\"btn btn-default btn-file\">
                                            <span class=\"fileinput-exists\">Change</span>
                                            <span class=\"fileinput-new\">Select image</span>
                                            <input type=\"file\" name=\"img\">
                                        </span>
                                        <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                    </div>
                                </div>
                            ";
        }
        // line 824
        echo "                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <button id=\"cancelbutton\" class=\"btn btn-default\">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 840
        $this->env->loadTemplate("ContactsContactsBundle:Default:editcontactformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:editcontactform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1629 => 840,  1611 => 824,  1598 => 813,  1592 => 811,  1590 => 810,  1584 => 807,  1580 => 805,  1565 => 793,  1561 => 791,  1559 => 790,  1547 => 781,  1537 => 773,  1533 => 771,  1526 => 770,  1519 => 769,  1516 => 768,  1508 => 767,  1506 => 766,  1499 => 765,  1497 => 764,  1482 => 754,  1476 => 753,  1464 => 744,  1455 => 738,  1446 => 732,  1435 => 724,  1424 => 716,  1315 => 609,  1298 => 596,  1292 => 595,  1286 => 594,  1280 => 593,  1274 => 592,  1268 => 591,  1262 => 590,  1256 => 589,  1250 => 588,  1238 => 578,  1231 => 573,  1227 => 571,  1225 => 570,  1214 => 564,  1208 => 563,  1202 => 562,  1196 => 561,  1190 => 560,  1184 => 559,  1178 => 558,  1172 => 557,  1166 => 556,  1154 => 546,  1147 => 541,  1143 => 539,  1141 => 538,  1130 => 532,  1124 => 531,  1118 => 530,  1112 => 529,  1106 => 528,  1100 => 527,  1094 => 526,  1088 => 525,  1082 => 524,  1070 => 514,  1063 => 509,  1059 => 507,  1057 => 506,  1046 => 500,  1040 => 499,  1034 => 498,  1028 => 497,  1022 => 496,  1016 => 495,  1010 => 494,  1004 => 493,  998 => 492,  986 => 482,  979 => 477,  975 => 475,  973 => 474,  962 => 468,  956 => 467,  950 => 466,  944 => 465,  938 => 464,  932 => 463,  926 => 462,  920 => 461,  914 => 460,  902 => 450,  895 => 445,  891 => 443,  889 => 442,  878 => 436,  872 => 435,  866 => 434,  860 => 433,  854 => 432,  848 => 431,  842 => 430,  836 => 429,  830 => 428,  818 => 418,  811 => 413,  807 => 411,  805 => 410,  794 => 404,  788 => 403,  782 => 402,  776 => 401,  770 => 400,  764 => 399,  758 => 398,  752 => 397,  746 => 396,  734 => 386,  727 => 381,  723 => 379,  721 => 378,  710 => 372,  704 => 371,  698 => 370,  692 => 369,  686 => 368,  680 => 367,  674 => 366,  668 => 365,  662 => 364,  650 => 354,  643 => 349,  639 => 347,  637 => 346,  626 => 340,  620 => 339,  614 => 338,  608 => 337,  602 => 336,  596 => 335,  590 => 334,  584 => 333,  578 => 332,  566 => 322,  559 => 317,  555 => 315,  553 => 314,  533 => 301,  526 => 296,  509 => 283,  503 => 282,  497 => 281,  485 => 271,  478 => 266,  472 => 263,  461 => 257,  455 => 256,  449 => 255,  437 => 245,  430 => 240,  424 => 237,  413 => 231,  407 => 230,  401 => 229,  389 => 219,  382 => 214,  376 => 211,  365 => 205,  359 => 204,  353 => 203,  341 => 193,  334 => 188,  328 => 185,  317 => 179,  311 => 178,  305 => 177,  293 => 167,  286 => 162,  280 => 159,  269 => 153,  263 => 152,  257 => 151,  245 => 141,  238 => 136,  232 => 133,  221 => 127,  215 => 126,  209 => 125,  197 => 115,  190 => 110,  184 => 107,  173 => 101,  167 => 100,  161 => 99,  149 => 89,  142 => 84,  136 => 81,  125 => 75,  119 => 74,  113 => 73,  101 => 63,  94 => 58,  88 => 55,  72 => 42,  65 => 37,  56 => 30,  37 => 14,  29 => 9,  19 => 1,);
    }
}

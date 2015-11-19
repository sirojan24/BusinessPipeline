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
    var showSubContactId = 1;
</script>

<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_updatecontact");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Contact Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getName", array(), "method"), "html", null, true);
        echo "\" placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"Last Name\">Title </label>
                            <input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getTitle", array(), "method"), "html", null, true);
        echo "\" placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" />
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Organization Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"companyname\"  class=\"form-control\" id=\"companyname\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getCompany", array(), "method"), "html", null, true);
        echo "\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 38
        echo "                <div id=\"emailSection\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"email\"  name=\"email0\" value=\"";
        // line 43
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
        // line 56
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv1\" style=\"display: none\">
                    ";
        } else {
            // line 59
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv1\">
                    ";
        }
        // line 64
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email1\" class=\"form-control\" id=\"email1\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype1\" >
                                    <option value=\"Work\" ";
        // line 74
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 75
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 76
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail1", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 82
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv2\" style=\"display: none\">
                    ";
        } else {
            // line 85
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv2\">
                    ";
        }
        // line 90
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email2\" class=\"form-control\" id=\"email2\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype2\" >
                                    <option value=\"Work\" ";
        // line 100
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 101
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 102
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail2", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 108
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv3\" style=\"display: none\">
                    ";
        } else {
            // line 111
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv3\">
                    ";
        }
        // line 116
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email3\" class=\"form-control\" id=\"email3\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype3\" >
                                    <option value=\"Work\" ";
        // line 126
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 127
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 128
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail3", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 134
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv4\" style=\"display: none\">
                    ";
        } else {
            // line 137
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv4\">
                    ";
        }
        // line 142
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email4\" class=\"form-control\" id=\"email4\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype4\" >
                                    <option value=\"Work\" ";
        // line 152
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 153
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 154
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail4", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 160
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv5\" style=\"display: none\">
                    ";
        } else {
            // line 163
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv5\">
                    ";
        }
        // line 168
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email5\" class=\"form-control\" id=\"email5\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype5\" >
                                    <option value=\"Work\" ";
        // line 178
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 179
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 180
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail5", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 186
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv6\" style=\"display: none\">
                    ";
        } else {
            // line 189
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv6\">
                    ";
        }
        // line 194
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email6\" class=\"form-control\" id=\"email6\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype6\" >
                                    <option value=\"Work\" ";
        // line 204
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 205
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 206
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail6", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 212
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv7\" style=\"display: none\">
                    ";
        } else {
            // line 215
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv7\">
                    ";
        }
        // line 220
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email7\" class=\"form-control\" id=\"email7\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype7\" >
                                    <option value=\"Work\" ";
        // line 230
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 231
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 232
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail7", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 238
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv8\" style=\"display: none\">
                    ";
        } else {
            // line 241
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv8\">
                    ";
        }
        // line 246
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email8\" class=\"form-control\" id=\"email8\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype8\" >
                                    <option value=\"Work\" ";
        // line 256
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 257
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 258
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail8", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo "selected ";
        }
        echo ">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                                
                    ";
        // line 264
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method") == "")) {
            echo "         
                        <div class=\"row\" id=\"emailDiv9\" style=\"display: none\">
                    ";
        } else {
            // line 267
            echo "                        <script>
                            showEmailId++;
                        </script>
                        <div class=\"row\" id=\"emailDiv9\">
                    ";
        }
        // line 272
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email9\" class=\"form-control\" id=\"email9\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype9\" >
                                    <option value=\"Work\" ";
        // line 282
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo "selected ";
        }
        echo ">Work</option>
                                    <option value=\"Home\" ";
        // line 283
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getEmail9", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo "selected ";
        }
        echo ">Home</option>
                                    <option value = \"Custom\" ";
        // line 284
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
        // line 297
        echo "                <div id=\"telephone_section\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone0\" name=\"phone0\" ";
        // line 302
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
        // line 315
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method") == "")) {
            // line 316
            echo "                        <div class=\"row\" id=\"phoneDiv1\" style=\"display: none\">
                    ";
        } else {
            // line 318
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv1\">
                    ";
        }
        // line 323
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone1\" name=\"phone1\" value=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype1\" >
                                    <option value=\"Work\" ";
        // line 333
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 334
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 335
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 336
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 337
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 338
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 339
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 340
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 341
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone1", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 347
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method") == "")) {
            // line 348
            echo "                        <div class=\"row\" id=\"phoneDiv2\" style=\"display: none\">
                    ";
        } else {
            // line 350
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv2\">
                    ";
        }
        // line 355
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone2\" value=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" name=\"phone2\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype2\" >
                                    <option value=\"Work\" ";
        // line 365
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 366
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 367
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 368
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 369
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 370
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 371
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 372
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 373
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone2", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 379
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method") == "")) {
            // line 380
            echo "                        <div class=\"row\" id=\"phoneDiv3\" style=\"display: none\">
                    ";
        } else {
            // line 382
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv3\">
                    ";
        }
        // line 387
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone3\" name=\"phone3\" value=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype3\" >
                                    <option value=\"Work\" ";
        // line 397
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 398
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 399
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 400
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 401
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 402
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 403
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 404
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 405
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone3", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 411
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method") == "")) {
            // line 412
            echo "                        <div class=\"row\" id=\"phoneDiv4\" style=\"display: none\">
                    ";
        } else {
            // line 414
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv4\">
                    ";
        }
        // line 419
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone4\" name=\"phone4\" value=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype4\" >
                                    <option value=\"Work\" ";
        // line 429
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 430
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 431
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 432
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 433
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 434
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 435
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 436
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 437
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone4", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 443
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method") == "")) {
            // line 444
            echo "                        <div class=\"row\" id=\"phoneDiv5\" style=\"display: none\">
                    ";
        } else {
            // line 446
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv5\">
                    ";
        }
        // line 451
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone5\" name=\"phone5\" value=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype5\" >
                                    <option value=\"Work\" ";
        // line 461
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 462
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 463
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 464
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 465
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 466
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 467
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 468
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 469
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone5", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 475
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method") == "")) {
            // line 476
            echo "                        <div class=\"row\" id=\"phoneDiv6\" style=\"display: none\">
                    ";
        } else {
            // line 478
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv6\">
                    ";
        }
        // line 483
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone6\" value=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" name=\"phone6\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype6\" >
                                    <option value=\"Work\" ";
        // line 493
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 494
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 495
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 496
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 497
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 498
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 499
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 500
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 501
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone6", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 507
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method") == "")) {
            // line 508
            echo "                        <div class=\"row\" id=\"phoneDiv7\" style=\"display: none\">
                    ";
        } else {
            // line 510
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv7\">
                    ";
        }
        // line 515
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone7\" name=\"phone7\" value=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype7\" >
                                    <option value=\"Work\" ";
        // line 525
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 526
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 527
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 528
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 529
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 530
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 531
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 532
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 533
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone7", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 539
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method") == "")) {
            // line 540
            echo "                        <div class=\"row\" id=\"phoneDiv8\" style=\"display: none\">
                    ";
        } else {
            // line 542
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv8\">
                    ";
        }
        // line 547
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone8\" name=\"phone8\" value=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype8\" >
                                    <option value=\"Work\" ";
        // line 557
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 558
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 559
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 560
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 561
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 562
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 563
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 564
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 565
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone8", array(), "method"), ":"), 0, array(), "array") == "Custom")) {
            echo " selected ";
        }
        echo ">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    ";
        // line 571
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method") == "")) {
            // line 572
            echo "                        <div class=\"row\" id=\"phoneDiv9\" style=\"display: none\">
                    ";
        } else {
            // line 574
            echo "                        <script>
                            showPhoneId++;
                        </script>
                        <div class=\"row\" id=\"phoneDiv9\">
                    ";
        }
        // line 579
        echo "                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone9\" name=\"phone9\" value=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 1, array(), "array"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype9\" >
                                    <option value=\"Work\" ";
        // line 589
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Work")) {
            echo " selected ";
        }
        echo ">Work</option>
                                    <option value = \"Mobile\" ";
        // line 590
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Mobile")) {
            echo " selected ";
        }
        echo "  >Mobile</option>         
                                    <option value=\"Home\" ";
        // line 591
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Home")) {
            echo " selected ";
        }
        echo ">Home</option>
                                    <option value=\"Main\" ";
        // line 592
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Main")) {
            echo " selected ";
        }
        echo ">Main</option>
                                    <option value=\"Work Fax\" ";
        // line 593
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Work Fax")) {
            echo " selected ";
        }
        echo " >Work Fax</option>
                                    <option value=\"Home Fax\" ";
        // line 594
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Home Fax")) {
            echo " selected ";
        }
        echo ">Home Fax</option>
                                    <option value=\"Google Voice\" ";
        // line 595
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Google Voice")) {
            echo " selected ";
        }
        echo ">Google Voice</option>
                                    <option value=\"Pager\" ";
        // line 596
        if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getPhone9", array(), "method"), ":"), 0, array(), "array") == "Pager")) {
            echo " selected ";
        }
        echo ">Pager</option>
                                    <option value=\"Custom\" ";
        // line 597
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
        // line 610
        echo "                
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div id=\"subcontact\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
        // line 616
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_name1", array(), "method") == "")) {
            // line 617
            echo "                                        <div class=\"panel panel-default\" id=\"subcontact1\" style=\"display: none\">
                                    ";
        } else {
            // line 618
            echo " 
                                      <script>  
                                        showSubContactId++;   
                                      </script>
                                      <div class=\"panel panel-default\" id=\"subcontact1\" style=\"display: block\">
                                    ";
        }
        // line 623
        echo "    
                                    
                                        <div class=\"panel-heading\">Sub-Contact 1</div>
                                        <div class=\"panel-body\">
                                            <div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Name</label>
                                                            <input type=\"text\" name=\"sub_con_name1\" value=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_name1", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"sub_con_name1\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Title</label>
                                                            <input type=\"text\" name=\"sub_con_title1\" value=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_title1", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"sub_con_title1\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Email</label>
                                                            <input type=\"email\"  name=\"sub_con_email1\" value=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_email1", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"sub_con_email1\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"/>   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Telephone</label>
                                                            <input type=\"tel\" class=\"form-control\" id=\"sub_con_phone1\" value=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_phone1", array(), "method"), "html", null, true);
        echo "\" name=\"sub_con_phone1\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
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
                                    ";
        // line 669
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_name2", array(), "method") == "")) {
            // line 670
            echo "                                        <div class=\"panel panel-default\" id=\"subcontact2\" style=\"display: none\">
                                    ";
        } else {
            // line 671
            echo " 
                                      <script>  
                                        showSubContactId++;   
                                      </script>
                                      <div class=\"panel panel-default\" id=\"subcontact2\" style=\"display: block\">
                                    ";
        }
        // line 676
        echo "  
                                        <div class=\"panel-heading\">Sub-Contact 2</div>
                                        <div class=\"panel-body\">
                                            <div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Name</label>
                                                            <input type=\"text\" name=\"sub_con_name2\" value=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_name2", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"sub_con_name2\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Title</label>
                                                            <input type=\"text\" name=\"sub_con_title2\" value=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_title2", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"sub_con_title2\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Email</label>
                                                            <input type=\"email\"  name=\"sub_con_email2\" value=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_email2", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"sub_con_email2\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"/>   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row\">\t\t\t
                                                    <div class=\"col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"firstname\">Telephone</label>
                                                            <input type=\"tel\" class=\"form-control\" id=\"sub_con_phone2\" name=\"sub_con_phone2\" value=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getSub_con_phone2", array(), "method"), "html", null, true);
        echo "\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
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
        // line 733
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
        // line 741
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
        // line 749
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getCity", array(), "method"), "html", null, true);
        echo "\" name=\"city\" placeholder=\"City / Town\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"form-group\">
                            <label for=\"City\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"state\" value=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getState", array(), "method"), "html", null, true);
        echo "\" name=\"state\" placeholder=\"California, New York, Texas, etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">\t\t\t\t\t\t\t
                        <div class=\"col-xs-1\">
                            <label for=\"City\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"postalcode\" name=\"postalcode\" value=\"";
        // line 761
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
        // line 770
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getVisibility", array(), "method") == "public")) {
            echo "selected ";
        }
        echo ">Entire Company</option>
                                <option value=\"private\" ";
        // line 771
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
        // line 781
        if (array_key_exists("users", $context)) {
            // line 782
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                        ";
                // line 783
                if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method")) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    // line 784
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getUsername", array(), "method"), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 785
                    echo "   
                                            <option value=\"";
                    // line 786
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 787
                echo " 
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 788
            echo " 
                                ";
        }
        // line 790
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">\t
                            <label for=\"commorigin\">Tags</label>
                            <input type=\"text\" name=\"tags\" value=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getTags", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" data-role=\"tagsinput\" />
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" value = \"";
        // line 802
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getId", array(), "method"), "html", null, true);
        echo "\" name =\"id\"> 
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\">Contact Picture</label>
                            <br>
                            ";
        // line 808
        if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method") != "")) {
            // line 809
            echo "                                <div class=\"fileinput fileinput-preview\" data-provides=\"fileinput\">
                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 200px; height: 150px;\">
                                        <img src=\"";
            // line 811
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "getImage", array(), "method")), "html", null, true);
            echo "\" class=\"image\">
                                    </div>
                                    <div>
                                        <span class=\"btn btn-default btn-file\">
                                            <span class=\"fileinput-exists\">Change</span>
                                            <span class=\"fileinput-new\">Select image</span>
                                            <input type=\"file\" name=\"profileimage\">
                                        </span>
                                        <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                    </div>
                                </div>
                            ";
        } else {
            // line 823
            echo "                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                    <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                        <img src=\"";
            // line 825
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
            echo "\" alt=\"...\">
                                    </div>
                                    <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
                                    <div>
                                        <span class=\"btn btn-default btn-file\">
                                            <span class=\"fileinput-exists\">Change</span>
                                            <span class=\"fileinput-new\">Select image</span>
                                            <input type=\"file\" name=\"profileimage\">
                                        </span>
                                        <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                    </div>
                                </div>
                            ";
        }
        // line 838
        echo "                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 846
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 854
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
        return array (  1741 => 854,  1730 => 846,  1720 => 838,  1704 => 825,  1700 => 823,  1685 => 811,  1681 => 809,  1679 => 808,  1670 => 802,  1663 => 798,  1653 => 790,  1649 => 788,  1642 => 787,  1635 => 786,  1632 => 785,  1624 => 784,  1622 => 783,  1615 => 782,  1613 => 781,  1598 => 771,  1592 => 770,  1580 => 761,  1571 => 755,  1562 => 749,  1551 => 741,  1540 => 733,  1512 => 708,  1501 => 700,  1490 => 692,  1479 => 684,  1469 => 676,  1461 => 671,  1457 => 670,  1455 => 669,  1439 => 656,  1428 => 648,  1417 => 640,  1406 => 632,  1395 => 623,  1387 => 618,  1383 => 617,  1381 => 616,  1373 => 610,  1356 => 597,  1350 => 596,  1344 => 595,  1338 => 594,  1332 => 593,  1326 => 592,  1320 => 591,  1314 => 590,  1308 => 589,  1298 => 582,  1293 => 579,  1286 => 574,  1282 => 572,  1280 => 571,  1269 => 565,  1263 => 564,  1257 => 563,  1251 => 562,  1245 => 561,  1239 => 560,  1233 => 559,  1227 => 558,  1221 => 557,  1211 => 550,  1206 => 547,  1199 => 542,  1195 => 540,  1193 => 539,  1182 => 533,  1176 => 532,  1170 => 531,  1164 => 530,  1158 => 529,  1152 => 528,  1146 => 527,  1140 => 526,  1134 => 525,  1124 => 518,  1119 => 515,  1112 => 510,  1108 => 508,  1106 => 507,  1095 => 501,  1089 => 500,  1083 => 499,  1077 => 498,  1071 => 497,  1065 => 496,  1059 => 495,  1053 => 494,  1047 => 493,  1037 => 486,  1032 => 483,  1025 => 478,  1021 => 476,  1019 => 475,  1008 => 469,  1002 => 468,  996 => 467,  990 => 466,  984 => 465,  978 => 464,  972 => 463,  966 => 462,  960 => 461,  950 => 454,  945 => 451,  938 => 446,  934 => 444,  932 => 443,  921 => 437,  915 => 436,  909 => 435,  903 => 434,  897 => 433,  891 => 432,  885 => 431,  879 => 430,  873 => 429,  863 => 422,  858 => 419,  851 => 414,  847 => 412,  845 => 411,  834 => 405,  828 => 404,  822 => 403,  816 => 402,  810 => 401,  804 => 400,  798 => 399,  792 => 398,  786 => 397,  776 => 390,  771 => 387,  764 => 382,  760 => 380,  758 => 379,  747 => 373,  741 => 372,  735 => 371,  729 => 370,  723 => 369,  717 => 368,  711 => 367,  705 => 366,  699 => 365,  689 => 358,  684 => 355,  677 => 350,  673 => 348,  671 => 347,  660 => 341,  654 => 340,  648 => 339,  642 => 338,  636 => 337,  630 => 336,  624 => 335,  618 => 334,  612 => 333,  602 => 326,  597 => 323,  590 => 318,  586 => 316,  584 => 315,  564 => 302,  557 => 297,  540 => 284,  534 => 283,  528 => 282,  518 => 275,  513 => 272,  506 => 267,  500 => 264,  489 => 258,  483 => 257,  477 => 256,  467 => 249,  462 => 246,  455 => 241,  449 => 238,  438 => 232,  432 => 231,  426 => 230,  416 => 223,  411 => 220,  404 => 215,  398 => 212,  387 => 206,  381 => 205,  375 => 204,  365 => 197,  360 => 194,  353 => 189,  347 => 186,  336 => 180,  330 => 179,  324 => 178,  314 => 171,  309 => 168,  302 => 163,  296 => 160,  285 => 154,  279 => 153,  273 => 152,  263 => 145,  258 => 142,  251 => 137,  245 => 134,  234 => 128,  228 => 127,  222 => 126,  212 => 119,  207 => 116,  200 => 111,  194 => 108,  183 => 102,  177 => 101,  171 => 100,  161 => 93,  156 => 90,  149 => 85,  143 => 82,  132 => 76,  126 => 75,  120 => 74,  110 => 67,  105 => 64,  98 => 59,  92 => 56,  76 => 43,  69 => 38,  60 => 31,  49 => 23,  38 => 15,  30 => 10,  19 => 1,);
    }
}

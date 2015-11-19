<?php

/* ContactsContactsBundle:Default:contactform.html.twig */
class __TwigTemplate_b902242cdf60fd63db27dc59b37893f4673400d3e6001a669d1e96a61e74a6be extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("login_login_fullsignup");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Contact Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
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
                            <input type=\"text\" name=\"companyname\"  class=\"form-control\" id=\"companyname\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                            <div id=\"usernameerror\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 32
        echo "                <div id=\"emailSection\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"email\"  name=\"email0\" class=\"form-control\" id=\"email0\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
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
                    <div class=\"row\" id=\"emailDiv1\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email1\" class=\"form-control\" id=\"email1\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype1\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv2\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email2\" class=\"form-control\" id=\"email2\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype2\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv3\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email3\" class=\"form-control\" id=\"email3\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype3\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv4\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email4\" class=\"form-control\" id=\"email4\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype4\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv5\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email5\" class=\"form-control\" id=\"email5\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype5\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv6\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email6\" class=\"form-control\" id=\"email6\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype6\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv7\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email7\" class=\"form-control\" id=\"email7\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype7\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv8\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email8\" class=\"form-control\" id=\"email8\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype8\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"emailDiv9\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\"  name=\"email9\" class=\"form-control\" id=\"email9\" placeholder=\"yourname@yourdomain.com\" data-parsley-type=\"email\" data-parsley-trigger=\"keyup\"  required/>
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"emailtype9\" >
                                    <option value=\"Work\">Work</option>
                                    <option value=\"Home\">Home</option>
                                    <option value = \"Custom\">Custom</option>
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
        // line 219
        echo "                <div id=\"telephone_section\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone <span style=\"color:#FF0000;\">*</span></label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone0\" name=\"phone0\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
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

                    <div class=\"row\" id=\"phoneDiv1\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone1\" name=\"phone1\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype1\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv2\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone2\" name=\"phone2\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype2\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv3\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone3\" name=\"phone3\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype3\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv4\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone4\" name=\"phone4\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype4\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv5\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone5\" name=\"phone5\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype5\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv6\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone6\" name=\"phone6\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype6\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv7\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone7\" name=\"phone7\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype7\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv8\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone8\" name=\"phone8\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype8\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"phoneDiv9\" style=\"display: none\">
                        <div class=\"col-xs-4\">
                            <div class=\"form-group\">
                                <label for=\"telephonework\">Telephone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone9\" name=\"phone9\" placeholder=\"( _ _ _ ) _ _ _ - _ _ _ _\" class=\"col-sm-4\"  data-parsley-trigger=\"change\"   />
                            </div>
                        </div>
                        <div class=\"col-xs-2\">
                            <div class=\"form-group\">\t\t\t\t\t
                                <label for=\"email\">Type</label>
                                <select class=\"form-control\" name=\"phonetype9\" >
                                    <option value=\"Work\">Work</option>
                                    <option value = \"Mobile\"  >Mobile</option>
                                    <option value=\"Home\">Home</option>
                                    <option value=\"Main\">Main</option>
                                    <option value=\"Work Fax\">Work Fax</option>
                                    <option value=\"Home Fax\">Home Fax</option>
                                    <option value=\"Google Voice\">Google Voice</option>
                                    <option value=\"Pager\">Pager</option>
                                    <option value=\"Custom\">Custom</option>
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
        // line 461
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
                            <input type=\"text\" class=\"form-control\" name=\"address1\" id=\"address1\" placeholder=\"Address line 1\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"address2\">Address 2</label>
                            <input type=\"text\" class=\"form-control\" name=\"address2\" id=\"address2\" placeholder=\"Address line 2\" pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,./\\ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t\t
                    <div class=\"col-xs-3\">
                        <div class=\"form-group\">
                            <label for=\"City\">City</label>
                            <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"City / Town\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"col-xs-2\">
                        <div class=\"form-group\">
                            <label for=\"City\">State</label>
                            <input type=\"text\" class=\"form-control\" id=\"state\" name=\"state\" placeholder=\"California, New York, Texas, etc.\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">\t\t\t\t\t\t\t
                        <div class=\"col-xs-1\">
                            <label for=\"City\">Zip</label>
                            <input type=\"text\" class=\"form-control\" id=\"postalcode\" name=\"postalcode\" placeholder=\"Zip\" pattern=\"^[a-zA-Z0-9_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_ ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"visibility\"> Visibility <span style=\"color:#FF0000;\">*</span> </label>
                            <select class=\"form-control\" name=\"visibility\" >
                                <option value=\"public\">Entire Company</option>
                                <option value=\"private\">Private</option>
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
        // line 616
        if (array_key_exists("users", $context)) {
            // line 617
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                        ";
                // line 618
                if ((twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    // line 619
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 620
                    echo "    
                                            <option value=\"";
                    // line 621
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 623
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                ";
        }
        // line 625
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">\t
                            <label for=\"commorigin\">Tags</label>
                            <input type=\"text\" value=\"\" name=\"tags\" class=\"form-control\" data-role=\"tagsinput\" />
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\">Contact Picture</label>
                            <br>
                            <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                    <img src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/img/Avatar.PNG"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                                <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
                                <div>
                                    <span class=\"btn btn-default btn-file\"><span class=\"fileinput-new\">Select image</span><span class=\"fileinput-exists\">Change</span><input type=\"file\" name=\"img\"></span>
                                    <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 660
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
        // line 668
        $this->env->loadTemplate("ContactsContactsBundle:Default:contactformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:contactform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 668,  720 => 660,  701 => 644,  680 => 625,  671 => 623,  664 => 621,  661 => 620,  653 => 619,  651 => 618,  644 => 617,  642 => 616,  485 => 461,  242 => 219,  54 => 32,  24 => 4,  19 => 1,);
    }
}
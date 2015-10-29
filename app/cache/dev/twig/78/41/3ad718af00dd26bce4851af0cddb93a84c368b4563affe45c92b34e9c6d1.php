<?php

/* LoginLoginBundle:Default:userform.html.twig */
class __TwigTemplate_78413ad718af00dd26bce4851af0cddb93a84c368b4563affe45c92b34e9c6d1 extends Twig_Template
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
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<form>
\t\t\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"firstname\">First Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" required=\"*\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"Last Name\">Last Name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lastname\" required=\"*\" placeholder=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" required=\"*\" placeholder=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" required=\"*\" placeholder=\"yourname@yourdomain.com\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"telephonework\">Telephone Work</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" required=\"*\" placeholder=\"(XXX) XXX-XXXX\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">\t\t\t\t\t
\t\t\t\t\t\t\t<label for=\"email\">Telephone Cell</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"telephonework\" required=\"*\" placeholder=\"(XXX) XXX-XXXX\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"title\">Title</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" required=\"*\" placeholder=\"COO, CEO, Manager, Etc.\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group\">\t\t\t\t
\t\t\t\t\t\t\t<label for=\"company\">Company Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"company\" placeholder=\"Your company name\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"address1\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address1\" placeholder=\"Address line 1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"address2\" placeholder=\"Address line 2\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"City\">City</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"city\" placeholder=\"City / Town\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"City\">State</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"state\" placeholder=\"California, New York, Texas, etc.\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t<label for=\"City\">Zip</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"postalcode\" placeholder=\"Zip\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"dob\">Date of Birth</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"dob\" placeholder=\"month/date/year\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"employmentstartdate\">Employment Start Date</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"employmentstartdate\" placeholder=\"month/date/year\">
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t<label for=\"commorigin\">Commission Originator</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"commorigin\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"commnonorigin\">Commission Non-Originator</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"commnonorigin\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"earninggoals\">Earning Goals</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"earninggoals\" aria-label=\"Amount\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t<label for=\"draw\">Annual Draw Against Commissions</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"draw\" aria-label=\"Amount\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <div class=\"form-group\">
                                        <label for=\"avatar\">User Avatar</label>
                                        <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                            <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                                <img data-src=\"holder.js/100%x100%\" alt=\"...\">
                                            </div>
                                            <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
                                            <div>
                                                <span class=\"btn btn-default btn-file\"><span class=\"fileinput-new\">Select image</span><span class=\"fileinput-exists\">Change</span><input type=\"file\" name=\"...\"></span>
                                                <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"avatar\"> </label>
\t\t\t\t\t\t\t<button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
\t\t\t\t\t\t\t<button id=\"cancelbutton\" class=\"btn btn-default\">Cancel</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:userform.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

<?php

/* OpportunityBundle:Default:opportunityform.html.twig */
class __TwigTemplate_ee90b24636072d23ecd6adac822b3fa6ff6f3784352707fd282ce0e72bcf5518 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("opportunity_saveopportunity");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Contact Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"personname\" id=\"personname\" ";
        // line 9
        if (array_key_exists("personname", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["personname"]) ? $context["personname"] : $this->getContext($context, "personname")), "html", null, true);
            echo "\"";
        }
        echo " class=\"form-control\" id=\"name\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Organization Name </label>
                            <input type=\"text\" name=\"organizationname\" id=\"organizationname\" ";
        // line 17
        if (array_key_exists("organizationname", $context)) {
            echo " ";
            if (((isset($context["organizationname"]) ? $context["organizationname"] : $this->getContext($context, "organizationname")) != "null")) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["organizationname"]) ? $context["organizationname"] : $this->getContext($context, "organizationname")), "html", null, true);
                echo "\"";
            }
        }
        echo "  class=\"form-control\" id=\"companyname\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Projected Revenue <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"projectedrevenue\" id=\"projectedrevenue\" class=\"form-control\" id=\"companyname\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\"  onkeyup =\"return forecasecalculateInchangeofProjectedRevenue();\" data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Account Type <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"accounttype\" >
                                ";
        // line 34
        if (array_key_exists("accounttypes", $context)) {
            // line 35
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accounttypes"]) ? $context["accounttypes"] : $this->getContext($context, "accounttypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["accounttype"]) {
                echo " 
                                        <option value = \"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accounttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                ";
        }
        echo "    
                            </select>
                        </div>
                    </div>
                </div>            
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\"> Stage <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" id =\"stage\" onchange=\"return initiateStageModal();\" name=\"stage\" >
                                ";
        // line 48
        if (array_key_exists("stages", $context)) {
            // line 49
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) ? $context["stages"] : $this->getContext($context, "stages")));
            foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
                echo " 
                                        <option value = \"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "Id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                ";
        }
        // line 53
        echo "                                <option value = \"6\">Won</option>
                                <option value = \"7\">Lost</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\"> Chance of Sale <span style=\"color:#FF0000;\">*</span></label>
                            <div class=\"progress\" style=\"height:34px;\">
                                <div class=\"progress-bar\" id=\"progress\"  role=\"progressbar\"  aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;line-height: 30px;\">
                                    0% 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Weighted Forecast <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"forecast\" id=\"forecast\" class=\"form-control\" required />
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Product Type <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"producttype\" >
                                ";
        // line 84
        if (array_key_exists("producttypes", $context)) {
            // line 85
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["producttypes"]) ? $context["producttypes"] : $this->getContext($context, "producttypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["producttype"]) {
                echo " 
                                        <option value = \"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                ";
        }
        echo "  
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Opportunity Source <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"opportunitysource\" placeholder=\"sdasdasd\">
                                <option value = \"\"></option>
                                ";
        // line 99
        if (array_key_exists("opportunitysources", $context)) {
            // line 100
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opportunitysources"]) ? $context["opportunitysources"] : $this->getContext($context, "opportunitysources")));
            foreach ($context['_seq'] as $context["_key"] => $context["opportunitysource"]) {
                echo " 
                                        <option value = \"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "Id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunitysource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                ";
        }
        echo "  \t
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Expected Closed Date <span style=\"color:#FF0000;\">*</span></label>
                            <input id=\"closeddate\" type=\"date\" name=\"closeddate\" class=\"form-control\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Visibility <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"visibility\" >     
                                <option value=\"public\">Entire Company</option>
                                <option value=\"private\">Private</option>\t\t
                            </select> 
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Tags</label>
                            <div id=\"tagDiv\">
                                <input type=\"text\" value=\"\" name=\"tags\" id=\"tags\" class=\"form-control\" data-role=\"tagsinput\" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"duallist\">Opportunity Sharing <span style=\"color:#FF0000;\">*</span>  </label>
                            <!-- #section:plugins/input.duallist -->
                            <select  class=\"form-control\" multiple=\"multiple\" name=\"sharingusers[]\" id=\"duallist\">
                                ";
        // line 143
        if (array_key_exists("users", $context)) {
            // line 144
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                        ";
                // line 145
                if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != $this->getAttribute($context["user"], "getUsername", array(), "method"))) {
                    echo "   
                                            <option value=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 148
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                ";
        }
        // line 149
        echo "    
                            </select>
                        </div>
                    </div>
                </div>

                <input type=\"hidden\" name=\"revenue\" id=\"revenue\">
                <input type=\"hidden\" name=\"userrevenue\" id=\"userrevenue\">
                <input type=\"hidden\" name=\"modalnoteshidden\" id=\"modalnoteshidden\">
                <input type=\"hidden\" name=\"reason\" id=\"reason\">
                <input type=\"hidden\" name=\"contactid\" id=\"contactid\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["contactid"]) ? $context["contactid"] : $this->getContext($context, "contactid")), "html", null, true);
        echo "\"> 

                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a class=\"btn btn-default\" href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("contacts_contacts_contacts");
        echo "\">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.bootstrap-duallistbox.js"), "html", null, true);
        echo "\"></script>
";
        // line 176
        $this->env->loadTemplate("OpportunityBundle:Default:opportunityformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:opportunityform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 176,  325 => 175,  321 => 174,  310 => 166,  300 => 159,  288 => 149,  279 => 148,  272 => 146,  268 => 145,  261 => 144,  259 => 143,  215 => 103,  205 => 101,  198 => 100,  196 => 99,  181 => 88,  171 => 86,  164 => 85,  162 => 84,  129 => 53,  126 => 52,  116 => 50,  109 => 49,  107 => 48,  93 => 38,  83 => 36,  76 => 35,  74 => 34,  47 => 17,  32 => 9,  24 => 4,  19 => 1,);
    }
}

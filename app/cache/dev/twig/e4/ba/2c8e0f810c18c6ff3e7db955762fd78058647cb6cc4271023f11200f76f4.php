<?php

/* OpportunityBundle:Default:editopportunityform.html.twig */
class __TwigTemplate_e4ba2c8e0f810c18c6ff3e7db955762fd78058647cb6cc4271023f11200f76f4 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("opportunity_updateopportunity");
        echo "\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\" data-parsley-validate>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Contact Name <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"personname\" id=\"personname\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getPersonname", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" id=\"name\"  placeholder=\"\" pattern=\"^[a-zA-Z_ ]*\$\" data-parsley-pattern=\"^[a-zA-Z_ ]*\$\"  data-parsley-trigger=\"keyup\" required/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Organization Name </label>
                            <input type=\"text\" name=\"organizationname\" id=\"organizationname\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getOrganizationname", array(), "method"), "html", null, true);
        echo "\"  class=\"form-control\" id=\"companyname\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\"  data-parsley-trigger=\"keyup\"/>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Projected Revenue <span style=\"color:#FF0000;\">*</span></label>
                            <input type=\"text\" name=\"projectedrevenue\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getProjectedrevenue", array(), "method"), "html", null, true);
        echo "\" id=\"projectedrevenue\" class=\"form-control\" id=\"companyname\" placeholder=\"\" pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\" data-parsley-pattern=\"^[a-zA-Z0-9_,.:'; ]*\$\"  onkeyup =\"return forecasecalculateInchangeofProjectedRevenue();\" data-parsley-trigger=\"keyup\"/>
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
                                        ";
                // line 36
                if (($this->getAttribute($context["accounttype"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getAccounttype", array()))) {
                    // line 37
                    echo "                                            <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getName", array()), "html", null, true);
                    echo "</option>   
                                        ";
                } else {
                    // line 38
                    echo "    
                                            <option value = \"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["accounttype"], "getName", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 41
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accounttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
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
        // line 52
        if (array_key_exists("stages", $context)) {
            // line 53
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) ? $context["stages"] : $this->getContext($context, "stages")));
            foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
                echo " 
                                        ";
                // line 54
                if (($this->getAttribute($context["stage"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getStage", array()))) {
                    // line 55
                    echo "                                            <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getName", array()), "html", null, true);
                    echo "</option> 
                                        ";
                } else {
                    // line 56
                    echo "    
                                            <option value = \"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "getName", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 59
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                ";
        }
        // line 61
        echo "                                <option value = \"6\" ";
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getStage", array()) == "6")) {
            echo "selected ";
        }
        echo ">Won</option>
                                <option value = \"7\" ";
        // line 62
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getStage", array()) == "7")) {
            echo "selected ";
        }
        echo ">Lost</option>
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
                            <input type=\"text\" name=\"forecast\" id=\"forecast\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getForecast", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" required />
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Product Type <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"producttype\" >
                                ";
        // line 92
        if (array_key_exists("producttypes", $context)) {
            // line 93
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["producttypes"]) ? $context["producttypes"] : $this->getContext($context, "producttypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["producttype"]) {
                echo " 
                                        ";
                // line 94
                if (($this->getAttribute($context["producttype"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getProducttype", array()))) {
                    // line 95
                    echo "                                            <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getName", array()), "html", null, true);
                    echo "</option>   
                                        ";
                } else {
                    // line 96
                    echo "    
                                            <option value = \"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["producttype"], "getName", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 99
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
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
                            <select class=\"form-control\" name=\"opportunitysource\" >
                                ";
        // line 110
        if (array_key_exists("opportunitysources", $context)) {
            // line 111
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opportunitysources"]) ? $context["opportunitysources"] : $this->getContext($context, "opportunitysources")));
            foreach ($context['_seq'] as $context["_key"] => $context["opportunitysource"]) {
                echo " 
                                        ";
                // line 112
                if (($this->getAttribute($context["opportunitysource"], "getId", array()) == $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getOpportunitysource", array()))) {
                    // line 113
                    echo "                                            <option value = \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getId", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getName", array()), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 114
                    echo "    
                                            <option value = \"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getId", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["opportunitysource"], "getName", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 117
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunitysource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
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
                            <input id=\"closeddate\" type=\"text\" value =\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getCloseddate", array()), "html", null, true);
        echo "\" name=\"closeddate\" class=\"form-control\" placeholder=\"month/date/year\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-6\">\t\t\t\t
                        <div class=\"form-group\">
                            <label for=\"username\">Visibility <span style=\"color:#FF0000;\">*</span></label>
                            <select class=\"form-control\" name=\"visibility\" >     
                                <option value=\"public\" ";
        // line 136
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getVisibility", array()) == "public")) {
            echo "selected";
        }
        echo ">Entire Company</option>
                                <option value=\"private\" ";
        // line 137
        if (($this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getVisibility", array()) == "private")) {
            echo "selected";
        }
        echo ">Private</option>\t\t
                            </select> 
                        </div>
                    </div>
                </div>
                <div class=\"row\">\t\t\t
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"firstname\">Tags</label>
                            <div id=\"tagDiv\">
                                <input type=\"text\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getTags", array(), "method"), "html", null, true);
        echo "\" name=\"tags\" id=\"tags\" class=\"form-control\" data-role=\"tagsinput\" />
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
        // line 158
        if (array_key_exists("users", $context)) {
            // line 159
            echo "                                    ";
            $context["sharing"] = twig_split_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getSharing", array(), "method"), ":");
            // line 160
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " 
                                        ";
                // line 161
                $context["flag"] = "false";
                // line 162
                echo "                                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sharing"]) ? $context["sharing"] : $this->getContext($context, "sharing")));
                foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
                    // line 163
                    echo "                                            ";
                    if ((twig_lower_filter($this->env, $context["share"]) == twig_lower_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                        // line 164
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                        echo "\" selected=\"selected\">";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                        echo "</option>
                                                ";
                        // line 165
                        $context["flag"] = "true";
                        // line 166
                        echo "                                            ";
                    }
                    // line 167
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "                                        ";
                if ((((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) != "true") && ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) != $this->getAttribute($context["user"], "getUsername", array(), "method")))) {
                    echo " 
                                            <option value=\"";
                    // line 169
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getFirstname", array(), "method") . " ") . $this->getAttribute($context["user"], "getLastname", array(), "method")), "html", null, true);
                    echo "</option>
                                            ";
                    // line 170
                    $context["flag"] = "false";
                    // line 171
                    echo "                                        ";
                }
                echo "  
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo " 
                                ";
        }
        // line 173
        echo "    
                            </select>
                        </div>
                    </div>
                </div>

                <input type=\"hidden\" name=\"modalnoteshidden\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getWonnotes", array(), "method"), "html", null, true);
        echo "\" id=\"modalnoteshidden\"> 
                <input type=\"hidden\"  value=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getId", array(), "method"), "html", null, true);
        echo "\" name=\"id\" /> 
                <input type=\"hidden\" name=\"revenue\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getRevenue", array(), "method"), "html", null, true);
        echo "\" id=\"revenue\">
                <input type=\"hidden\" name=\"userrevenue\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getUserrevenue", array(), "method"), "html", null, true);
        echo "\" id=\"userrevenue\">
                <input type=\"hidden\" name=\"reason\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getReason", array(), "method"), "html", null, true);
        echo "\" id=\"reason\">

                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"form-group\">
                            <label for=\"avatar\"> </label>
                            <button id=\"savebutton\" class=\"btn btn-primary\">Save</button>
                            <a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opportunity_deleteopportunity", array("id" => $this->getAttribute((isset($context["opportunity"]) ? $context["opportunity"] : $this->getContext($context, "opportunity")), "getId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Delete</a>
                            <a class=\"btn btn-default\" href=\"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("opportunity_manageopportunityV2");
        echo "\">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/bootstrap-tagsinput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/ace/jquery.bootstrap-duallistbox.js"), "html", null, true);
        echo "\"></script>
";
        // line 201
        $this->env->loadTemplate("OpportunityBundle:Default:editopportunityformScript.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:editopportunityform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 201,  461 => 200,  457 => 199,  446 => 191,  442 => 190,  432 => 183,  428 => 182,  424 => 181,  420 => 180,  416 => 179,  408 => 173,  404 => 172,  395 => 171,  393 => 170,  387 => 169,  382 => 168,  376 => 167,  373 => 166,  371 => 165,  364 => 164,  361 => 163,  356 => 162,  354 => 161,  347 => 160,  344 => 159,  342 => 158,  328 => 147,  313 => 137,  307 => 136,  295 => 127,  282 => 118,  276 => 117,  269 => 115,  266 => 114,  258 => 113,  256 => 112,  249 => 111,  247 => 110,  233 => 100,  227 => 99,  220 => 97,  217 => 96,  209 => 95,  207 => 94,  200 => 93,  198 => 92,  186 => 83,  160 => 62,  153 => 61,  150 => 60,  144 => 59,  137 => 57,  134 => 56,  126 => 55,  124 => 54,  117 => 53,  115 => 52,  101 => 42,  95 => 41,  88 => 39,  85 => 38,  77 => 37,  75 => 36,  68 => 35,  66 => 34,  54 => 25,  43 => 17,  32 => 9,  24 => 4,  19 => 1,);
    }
}

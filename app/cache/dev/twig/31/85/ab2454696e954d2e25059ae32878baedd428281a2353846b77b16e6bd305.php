<?php

/* AppBundle:Default:scripts.html.twig */
class __TwigTemplate_3185ab2454696e954d2e25059ae32878baedd428281a2353846b77b16e6bd305 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley.remote.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery -->




<!-- Bootstrap Core JavaScript -->


<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles_v2.0/dist/js/dropzone.js"), "html", null, true);
        echo "\"></script>

<script>
    var username = \"\";
    ";
        // line 22
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUsername", array(), "method", true, true)) {
            // line 23
            echo "        username = '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
            echo "';
    ";
        }
        // line 25
        echo "    function usernameAvailability() {
        \$.post('";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_login_uservalidateajax");
        echo "',
                {username: document.getElementById('username').value},
        function (response) {
            if (response == \"true\") {
                if(username !== \"\" && document.getElementById('username').value === username){
                    document.getElementById('username').style.color = \"#468847\";
                    document.getElementById('username').style.backgroundColor = \"#DFF0D8\";
                    document.getElementById('username').style.border = \"1px solid #D6E9C6\";
                    document.getElementById('usernameerror').innerHTML = \"\";
                } else {
                    document.getElementById('username').style.color = \"#B94A48\";
                    document.getElementById('username').style.backgroundColor = \"#F2DEDE\";
                    document.getElementById('username').style.border = \"1px solid #EED3D7\";
                    document.getElementById('usernameerror').innerHTML = \"<font color = '#B94A48'>username already exists. try a different one.</font>\";
                }
            } else {
                document.getElementById('username').style.color = \"#468847\";
                document.getElementById('username').style.backgroundColor = \"#DFF0D8\";
                document.getElementById('username').style.border = \"1px solid #D6E9C6\";
                document.getElementById('usernameerror').innerHTML = \"\";
            }
        });
    }
    
    function fill(){
                        \$.post('";
        // line 51
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
</script>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 51,  73 => 26,  70 => 25,  64 => 23,  62 => 22,  55 => 18,  50 => 16,  45 => 14,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}

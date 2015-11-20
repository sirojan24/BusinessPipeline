<?php

/* LoginLoginBundle:Default:notesModalScript.html.twig */
class __TwigTemplate_710ed9eeb654a509eaddbb58cb2b244147d8861849a43003df12ba62285f4d4c extends Twig_Template
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
    function notespopup(id) {
        document.getElementById('chatbody').innerHTML = \"\";
        document.getElementById('typeid').value = id;

        \$.post('";
        // line 6
        echo $this->env->getExtension('routing')->getPath("notes_getnotes");
        echo "',
                {id: id, type: 'users'},
        function (response) {
            if (response !== \"false\") {
                //console.log(\"@@@@@@@@@\",response);
           
                var notes = JSON.parse(response);
                
                for (i = 0; i < notes.notes.length; i++) {
                    var url;
                    if(notes.notes[i].url == null || notes.notes[i].url == ''){
                        url = '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "';
                    }else{
                        url = '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "';
                        url = url.replace('bundles/loginlogin/images/default_user_profile_0.png', notes.notes[i].url);
                    }
                    if ('";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "' == notes.notes[i].username) {
                        document.getElementById('chatbody').innerHTML += '<div class=\"row base_sent\"><div class=\"col-xs-10\"><div class=\"messages msg_sent no-margin no-padding\"><p>'+notes.notes[i].notes+' <a id=\"\" onclick=\"\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a></p><time>'+notes.notes[i].fullname+' | '+notes.notes[i].timestamp+'</time></div></div><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                    } else {
                        document.getElementById('chatbody').innerHTML += '<div class=\"row base_receive\"><div class=\"col-xs-10\"><div class=\"messages msg_receive no-margin no-padding\"><p>'+notes.notes[i].notes+'</p><time>'+notes.notes[i].fullname+' | '+notes.notes[i].timestamp+'</time></div></div><div class=\"col-xs-2 avatar\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "\" class=\" img-circle \"></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                    }
                    //console.log(\"######\",htmlcode);
                }
                afterajaxnote();
            } else {
                i = 0;
                //console.log(\"error occured in the mange notes in retriving note\",response); 
                afterajaxnote();
            }
        });
    }

    function afterajaxnote() {

        \$('#addnotes').modal('show');

    }
</script>    
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:notesModalScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  51 => 22,  45 => 19,  40 => 17,  26 => 6,  19 => 1,);
    }
}

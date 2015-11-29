<?php

/* ContactsContactsBundle:Default:notesModalScript.html.twig */
class __TwigTemplate_11e3875c5f59a319425ceaa23472534254b22f32d8823f701e974622d712d9ac extends Twig_Template
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
                {id: id, type: 'contact'},
        function (response) {
            if (response !== \"false\") {
                //console.log(\"@@@@@@@@@\",response);

                var notes = JSON.parse(response);

                for (i = 0; i < notes.notes.length; i++) {
                    var url;
                    if (notes.notes[i].url == null || notes.notes[i].url == '') {
                        url = '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "';
                    } else {
                        url = '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "';
                        url = url.replace('bundles/loginlogin/images/default_user_profile_0.png', notes.notes[i].url);
                    }

                    if (notes.notes[i].fromUsername == '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "') {
                        if (notes.notes[i].toUsername == notes.notes[i].fromUsername) {
                            document.getElementById('chatbody').innerHTML += '<div class=\"row base_sent\"><div class=\"col-xs-10\"><div class=\"messages msg_sent no-margin no-padding\"><p><div id=\"textid' + notes.notes[i].id + '\">' + notes.notes[i].notes + '</div><a onclick=\"editnote(' + notes.notes[i].id + ')\" id=\"link' + notes.notes[i].id + '\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a></p><time>' + notes.notes[i].fullname + ' | ' + notes.notes[i].timestamp + '</time></div></div><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                        } else {
                            document.getElementById('chatbody').innerHTML += '<div class=\"row base_receive\"><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div><div class=\"col-xs-10\"><div class=\"messages msg_receive no-margin no-padding\" ><p><div id=\"textid' + notes.notes[i].id + '\">' + notes.notes[i].notes + '</div> <a onclick=\"editnote(' + notes.notes[i].id + ')\" id=\"link' + notes.notes[i].id + '\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a></p><time>' + notes.notes[i].fullname + ' | ' + notes.notes[i].timestamp + '</time></div></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                        }
                    } else {
                        if (notes.notes[i].toUsername == notes.notes[i].fromUsername) {
                            document.getElementById('chatbody').innerHTML += '<div class=\"row base_sent\"><div class=\"col-xs-10\"><div class=\"messages msg_sent no-margin no-padding\"> <p><div id=\"textid' + notes.notes[i].id + '\">' + notes.notes[i].notes + '</div></p><time>' + notes.notes[i].fullname + ' | ' + notes.notes[i].timestamp + '</time></div></div><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                        } else {
                            document.getElementById('chatbody').innerHTML += '<div class=\"row base_receive\"><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div><div class=\"col-xs-10\"><div class=\"messages msg_receive no-margin no-padding\"><p><div id=\"textid' + notes.notes[i].id + '\">' + notes.notes[i].notes + '</div></p><time>' + notes.notes[i].fullname + ' | ' + notes.notes[i].timestamp + '</time></div></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                        }
                    }

                    //console.log(\"######\",htmlcode);
                }
                afterajaxnote();
            } else {
                
                //console.log(\"error occured in the mange notes in retriving note\",response); 
                afterajaxnote();
            }
        });
    }

    function afterajaxnote() {

        \$('#addnotes').modal('show');

    }

    function savenote() {
        if (document.getElementById('message').value != '') {
            var note = document.getElementById('message').value;
            document.getElementById('message').value = '';
            var type = \"contact\";
            var type_id = document.getElementById('typeid').value;
            var username = \"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\";
            \$.post('";
        // line 65
        echo $this->env->getExtension('routing')->getPath("notes_savenote");
        echo "',
                    {type: type, type_id: type_id, note: note, username: username},
            function (response) {
                if (response !== \"false\") {
                    // console.log(\"#######\",response);
                    var details = JSON.parse(response);
                    var url;
                    if (details.url == null || details.url == '') {
                        url = '";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "';
                    } else {
                        url = '";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/images/default_user_profile_0.png"), "html", null, true);
        echo "';
                        url = url.replace('bundles/loginlogin/images/default_user_profile_0.png', details.url);
                    }
                    if (details.toUsername == username) {
                        document.getElementById('chatbody').innerHTML += '<div class=\"row base_sent\"><div class=\"col-xs-10\"><div class=\"messages msg_sent no-margin no-padding\"><p><div id=\"textid' + details.id + '\">' + details.notes + '</div><a  onclick=\"editnote(' + details.id + ')\" id=\"link' + details.id + '\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a></p><time>' + details.fullname + ' | ' + details.timestamp + '</time></div></div><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';
                    } else {
                        document.getElementById('chatbody').innerHTML += '<div class=\"row base_receive\"><div class=\"col-xs-2 avatar\"><img src=\"' + url + '\" class=\" img-circle \"></div><div class=\"col-xs-10\"><div class=\"messages msg_receive no-margin no-padding\"><p> <div id=\"textid' + details.id + '\">' + details.notes + '</div> <a  onclick=\"editnote(' + details.id + ')\" id=\"link' + details.id + '\" title=\"Edit\"><i class=\"fa fa-pencil\"></i></a></p><time>' + details.fullname + ' | ' + details.timestamp + '</time></div></div></div><hr style=\"margin-top: 0px;margin-bottom: 5px;\">';

                    }
                    i++;
                    var objDiv = document.getElementById(\"chatbody\");
                    objDiv.scrollTop = objDiv.scrollHeight;
                } else {

                }
            });
        }
    }

    function editnote(id) {
        document.getElementById('link' + id).style.display = \"none\";
        var text = document.getElementById('textid' + id).innerHTML;
        document.getElementById('textid' + id).innerHTML = '';
        document.getElementById('textid' + id).innerHTML = '<textarea class=\"form-control\" style=\"resize:none;\" rows=\"4\" id =\"textarea' + id + '\" style=\"width:100%\">' + text + '</textarea><button style=\"margin-top:2px;\" type=\"button\" class=\"btn btn-primary btn-sm pull_right\" onclick=\"updatenotes(' + id + ')\" >Update</button>';


    }

    function updatenotes(id) {
        var note = document.getElementById('textarea' + id).value;
        \$.post('";
        // line 105
        echo $this->env->getExtension('routing')->getPath("notes_updatenotes");
        echo "',
                {noteid: id, note: note},
        function (response) {
            if (response !== \"false\") {
                var details = JSON.parse(response);
                
                document.getElementById('textid' + id).innerHTML = details.notes;
                document.getElementById('link' + id).style.display = \"block\";
            } else {

            }
        });
    }
</script>    
";
    }

    public function getTemplateName()
    {
        return "ContactsContactsBundle:Default:notesModalScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 105,  116 => 75,  111 => 73,  100 => 65,  96 => 64,  52 => 23,  45 => 19,  40 => 17,  26 => 6,  19 => 1,);
    }
}

<?php

/* OpportunityBundle:Default:opportunityformScript.html.twig */
class __TwigTemplate_09e3668598a7f968af2eac288b028a6fbed888ebf89bf9ee24f7d4499f0b1dd5 extends Twig_Template
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
        echo "
<script>
    \$.post('";
        // line 3
        echo $this->env->getExtension('routing')->getPath("settings_getsale");
        echo "',
            {id: document.getElementById('stage').value},
    function (response) {
        if (response !== \"false\") {
            \$('#progress').css('width', response + '%');
            \$('#progress').html(response + '%');
            \$('#forecast').number(true, 0);
            //forecastcalculate((\$('#projectedrevenue').val()*commisionoriginator)/100);
        } else {
            console.log(response);
        }
    });

    \$(function () {
        //0 means no decimal places
        \$('#projectedrevenue').number(true, 0);
        \$('#forecast').number(true, 0);
        \$('#modalrevenue').number(true, 0);
        \$('#userrevenue').number(true, 0);
    });

    jQuery(function (\$) {
        var demo1 = \$('select[name=\"sharingusers[]\"]').bootstrapDualListbox({infoTextFiltered: '<span class=\"label label-purple label-lg\">Filtered</span>'});
        var container1 = demo1.bootstrapDualListbox('getContainer');
        container1.find('.btn').addClass('btn-white btn-primary btn-bold');

        \$('.rating').raty({
            'cancel': true,
            'half': true,
            'starType': 'i'
        })

        \$('.select2').css('width', '200px').select2({allowClear: true})
        \$('#select2-multiple-style .btn').on('click', function (e) {
            var target = \$(this).find('input[type=radio]');
            var which = parseInt(target.val());
            if (which == 2)
                \$('.select2').addClass('tag-input-style');
            else
                \$('.select2').removeClass('tag-input-style');
        });

        \$('.multiselect').multiselect({
            enableFiltering: true,
            buttonClass: 'btn btn-white btn-primary',
            templates: {
                button: '<button type=\"button\" class=\"multiselect dropdown-toggle\" data-toggle=\"dropdown\"></button>',
                ul: '<ul class=\"multiselect-container dropdown-menu\"></ul>',
                filter: '<li class=\"multiselect-item filter\"><div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span><input class=\"form-control multiselect-search\" type=\"text\"></div></li>',
                filterClearBtn: '<span class=\"input-group-btn\"><button class=\"btn btn-default btn-white btn-grey multiselect-clear-filter\" type=\"button\"><i class=\"fa fa-times-circle red2\"></i></button></span>',
                li: '<li><a href=\"javascript:void(0);\"><label></label></a></li>',
                divider: '<li class=\"multiselect-item divider\"></li>',
                liGroup: '<li class=\"multiselect-item group\"><label class=\"multiselect-group\"></label></li>'
            }
        });


        ///////////////////

        //typeahead.js
        //example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
        var substringMatcher = function (strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                \$.each(strs, function (i, str) {
                    if (substrRegex.test(str)) {
                        // the typeahead jQuery plugin expects suggestions to a
                        // JavaScript object, refer to typeahead docs for more info
                        matches.push({value: str});
                    }
                });

                cb(matches);
            }
        }

        \$('input.typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            displayKey: 'value',
            source: substringMatcher(ace.vars['US_STATES'])
        });


        ///////////////


        //in ajax mode, remove remaining elements before leaving page
        \$(document).one('ajaxloadstart.page', function (e) {
            \$('[class*=select2]').remove();
            \$('select[name=\"duallistbox_demo1[]\"]').bootstrapDualListbox('destroy');
            \$('.rating').raty('destroy');
            \$('.multiselect').multiselect('destroy');
        });

    });

    function forecasecalculateInchangeofProjectedRevenue() {

        revenue = \$('#projectedrevenue').val();
        if (document.getElementById('stage').value !== '' && document.getElementById('projectedrevenue').value !== '') {
            \$.post('";
        // line 116
        echo $this->env->getExtension('routing')->getPath("login_login_getCommissionoriginator");
        echo "',
                    {name: \"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"},
            function (response) {
                if (response !== \"false\") {
                    response = response.substring(0, response.length - 1);
                    if (document.getElementById('stage').value == 'Won') {
                        document.getElementById('forecast').value = (revenue * response * 100) / 10000;
                        \$('#forecast').number(true, 0);
                    } else if (document.getElementById('stage').value == 'Lost') {
                        document.getElementById('forecast').value = 0;
                    } else {
                        \$.post('";
        // line 127
        echo $this->env->getExtension('routing')->getPath("settings_getsale");
        echo "',
                                {id: document.getElementById('stage').value},
                        function (response1) {
                            if (response !== \"false\") {
                                document.getElementById('forecast').value = (revenue * response * response1) / 10000;
                                \$('#forecast').number(true, 0);
                            } else {
                                console.log(response);
                            }
                        });
                    }

                } else {
                    console.log(response);
                }
            });

        }

    }

    function initiateStageModal() {

        \$.post('";
        // line 150
        echo $this->env->getExtension('routing')->getPath("login_login_getCommissionoriginator");
        echo "',
                {name: \"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"},
        function (response) {
            if (response !== \"false\") {
                document.getElementById('commisionnonoriginator').value = response;
                stageModal(response);
            } else {
                console.log(response);
                stageModal(0);
            }
        }
        );
    }
    function stageModal(commisionoriginator) {
        commisionoriginator = commisionoriginator.substring(0, commisionoriginator.length - 1);
        //get commision originator
        if (document.getElementById('stage').value == '6') {
            \$('#progress').css('width', '100%');
            \$('#progress').html('100%');
            \$('#wonModal').modal('show');
            document.getElementById('forecast').value = ((\$('#projectedrevenue').val() * commisionoriginator) / 100).toLocaleString();
            \$('#forecast').number(true, 0);
            //forecastcalculate();
        }
        else if (document.getElementById('stage').value == '7') {
            \$('#progress').css('width', '0%');
            \$('#progress').html('0%');
            \$('#lostModal').modal('show');
            document.getElementById('forecast').value = 0;
            //forecastcalculate(((\$('#projectedrevenue').val()*commisionoriginator)/100));

        }
        else {

            \$.post('";
        // line 184
        echo $this->env->getExtension('routing')->getPath("settings_getsale");
        echo "',
                    {id: document.getElementById('stage').value},
            function (response) {
                if (response !== \"false\") {
                    console.log(\"@@@@@@@@@\", response);
                    \$('#progress').css('width', response + '%');
                    \$('#progress').html(response + '%');
                    document.getElementById('forecast').value = ((\$('#projectedrevenue').val() * commisionoriginator * response) / 10000).toLocaleString();
                    \$('#forecast').number(true, 0);
                    //forecastcalculate((\$('#projectedrevenue').val()*commisionoriginator)/100);
                } else {
                    console.log(response);
                }
            });

        }
    }

    function updateUserRevenue() {
        amount = \$('#modalrevenue').val();
        var commision = document.getElementById('commisionnonoriginator').value;
        commision = commision.substring(0, commision.length - 1);
        document.getElementById('individualrevenue').value = ((amount * commision) / 100).toLocaleString();
    }

    function setRevenue() {
        document.getElementById('revenue').value = document.getElementById('modalrevenue').value;
        document.getElementById('userrevenue').value = document.getElementById('individualrevenue').value;
        document.getElementById('modalnoteshidden').value = document.getElementById('modalnotes').value;
        \$('#wonModal').modal('hide');
    }

    function clearRevenue() {
        document.getElementById('modalrevenue').value = '';
        document.getElementById('individualrevenue').value = '';
        document.getElementById('modalnotes').value = '';
    }

    function setReason() {
        document.getElementById('reason').value = document.getElementById('modalreason').value;
        \$('#lostModal').modal('hide');
    }

    function clearReason() {
        document.getElementById('modalreason').value = '';
    }

</script>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:opportunityformScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 184,  186 => 151,  182 => 150,  156 => 127,  143 => 117,  139 => 116,  23 => 3,  19 => 1,);
    }
}

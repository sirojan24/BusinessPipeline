<?php

/* webBundle:Default:barChartScript.html.twig */
class __TwigTemplate_3db6ab5412a596a49f43feca2bb744e9be26f5d1ca2b72ced491b59515cff93f extends Twig_Template
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
    var wonLostData = [];
    var count = 0;
    var yearText = [\"Current Year\", \"Last Year\"];
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wonAndLostDealForBarBarChart"]) ? $context["wonAndLostDealForBarBarChart"] : $this->getContext($context, "wonAndLostDealForBarBarChart")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            echo " 
        \$( \"#wonLostDealsYearDropDown\" ).append( \"<li><a href='javascript:changeYear(\" + count + \")'>\" + yearText[count] + \"</a></li>\" );
        count++;
        wonLostData.push({
            year: '";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "year", array()), "html", null, true);
            echo "',
            won1: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "won", array()), "1", array(), "array"), "html", null, true);
            echo ",
            won2: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "won", array()), "2", array(), "array"), "html", null, true);
            echo ",
            won3: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "won", array()), "3", array(), "array"), "html", null, true);
            echo ",
            won4: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "won", array()), "4", array(), "array"), "html", null, true);
            echo ",
            lost1: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "lost", array()), "1", array(), "array"), "html", null, true);
            echo ",
            lost2: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "lost", array()), "2", array(), "array"), "html", null, true);
            echo ",
            lost3: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "lost", array()), "3", array(), "array"), "html", null, true);
            echo ",
            lost4: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["deal"], "lost", array()), "4", array(), "array"), "html", null, true);
            echo "
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    displayBarChart(wonLostData[0]);
    
    function changeYear(id){
        displayBarChart(wonLostData[id]);
    }
    
    function displayBarChart(data){
        \$('#won-lost-morris-bar-chart').html('');
        Morris.Bar({
            element: 'won-lost-morris-bar-chart',
            data: [{
                y: '1st Q',
                a: data.won1,
                b: data.lost1
            }, {
                y: '2nd Q',
                a: data.won2,
                b: data.lost2
            }, {
                y: '3rd Q',
                a: data.won3,
                b: data.lost3
            }, {
                y: '4th Q',
                a: data.won4,
                b: data.lost4
            }],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Won Deals', 'Lost Deals'],
            hideHover: 'auto',
            resize: true
        });
    }
        
</script>";
    }

    public function getTemplateName()
    {
        return "webBundle:Default:barChartScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  25 => 5,  19 => 1,);
    }
}

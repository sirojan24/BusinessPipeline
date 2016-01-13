<?php

/* webBundle:Default:dealsByUserBarChartScript.html.twig */
class __TwigTemplate_4eb2318228dafd83f6dccba00c7d27041ab0ddc29f547437a31697c8b9efe60a extends Twig_Template
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
    var dealsByUserData = [];
    var dealsByUserGraphData = [];
    var dealsByUserGraphAllData = [];
    
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dealsByUser"]) ? $context["dealsByUser"] : $this->getContext($context, "dealsByUser")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            echo " 
        
        dealsByUserData.push({
            name: '";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "name", array()), "html", null, true);
            echo "',
            won: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "won", array()), "html", null, true);
            echo ",
            lost: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "lost", array()), "html", null, true);
            echo ",
            open: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "open", array()), "html", null, true);
            echo "
        });
        
        dealsByUserGraphData.push({
            y: '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "name", array()), "html", null, true);
            echo "',
            a: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "open", array()), "html", null, true);
            echo "
        });
        
        dealsByUserGraphAllData.push({
            y: '";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "name", array()), "html", null, true);
            echo "',
            a: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "open", array()), "html", null, true);
            echo " + ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "won", array()), "html", null, true);
            echo " + ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "lost", array()), "html", null, true);
            echo "
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    \$( \"#dealsByUsersDropDown\" ).append( \"<li><a href='javascript:showHideDealsByUsersBarChart()'>View All Deals</a></li>\" );
    
    displayDealsByUserBarChart(dealsByUserGraphData);
    
    var flag = false;
    function showHideDealsByUsersBarChart(){
        \$('#dealsByUsersDropDown').html('');
        if(flag === false){
            \$( \"#dealsByUsersDropDown\" ).append( \"<li><a href='javascript:showHideDealsByUsersBarChart()'>View Open Deals</a></li>\" );
            displayDealsByUserBarChart(dealsByUserGraphAllData);
            flag = true;
        }else{
            \$( \"#dealsByUsersDropDown\" ).append( \"<li><a href='javascript:showHideDealsByUsersBarChart()'>View All Deals</a></li>\" );
            displayDealsByUserBarChart(dealsByUserGraphData);
            flag = false;
        }
    }
    
    function displayDealsByUserBarChart(data){
        var filteredData = [];
        \$.each(data, function( index, value ) {
            if(value.a > 0){
                filteredData.push(data[index]);
            }
        });
        \$('#deals-by-users-morris-bar-chart').html('');
        Morris.Bar({
            element: 'deals-by-users-morris-bar-chart',
            data: filteredData,
            xkey: 'y',
            ykeys: ['a'],
            barColors: function (row, series, type) {
                if (type === 'bar') {
                  var red = Math.ceil(255 * row.y / this.ymax);
                  if(row.x%5 == 0){
                      return 'rgb(37,119,181)';
                  }else if(row.x%5 == 1){
                      return 'rgb(167,179,188)';
                  }else if(row.x%5 == 2){
                      return 'rgb(240,173,78)';
                  }else if(row.x%5 == 3){
                      return 'rgb(217,237,247)';
                  }else{
                      return 'rgb(11,164,98)';
                  }
                }
                else {
                  return '#000';
                }
            },
            labels: ['Deals'],
            hideHover: 'auto',
            resize: true
        });
    }
        
</script>";
    }

    public function getTemplateName()
    {
        return "webBundle:Default:dealsByUserBarChartScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  68 => 22,  64 => 21,  57 => 17,  53 => 16,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  26 => 6,  19 => 1,);
    }
}

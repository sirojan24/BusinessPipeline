<?php

/* webBundle:Default:earningAreaChartScript.html.twig */
class __TwigTemplate_411ffe5ce964721f44fc772daee876947b8b8d256dfd4b647be96b1fbca13af8 extends Twig_Template
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
    var earningData = [];
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["earningGoals"]) ? $context["earningGoals"] : $this->getContext($context, "earningGoals")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["earning"]) {
            echo " 
        
        earningData.push({
            period: '";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["earning"], "year", array()), "html", null, true);
            echo "',
            earningGoal: ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["earningGoals"]) ? $context["earningGoals"] : $this->getContext($context, "earningGoals")), "goal", array()), "html", null, true);
            echo ",
            earning: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["earning"], "earning", array()), "html", null, true);
            echo "
        });
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['earning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    Morris.Area({
        element: 'earning-area-chart',
        data: earningData,
        xkey: 'period',
        ykeys: ['earningGoal', 'earning'],
        labels: ['Earning Goal', 'Earning'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
</script>";
    }

    public function getTemplateName()
    {
        return "webBundle:Default:earningAreaChartScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  39 => 8,  35 => 7,  31 => 6,  23 => 3,  19 => 1,);
    }
}

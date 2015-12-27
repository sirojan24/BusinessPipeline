<?php

/* webBundle:Default:donutChartScript.html.twig */
class __TwigTemplate_c630c06f0c0400aab85d44239b43b0c5685c6eb56eac4e226e7915459b51106b extends Twig_Template
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
    var dealData = [];
    var dealSourceData = [];
    var dealProductTypeData = [];
    
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            echo " 
        dealData.push({
            label: '";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "stage", array()), "html", null, true);
            echo "',
            value: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "noOfDeals", array()), "html", null, true);
            echo "
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dealSources"]) ? $context["dealSources"] : $this->getContext($context, "dealSources")));
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            echo " 
        dealSourceData.push({
            label: '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "name", array()), "html", null, true);
            echo "',
            value: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "openDeals", array()), "html", null, true);
            echo ",
            wonDeals: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "wonDeals", array()), "html", null, true);
            echo ",
            lostDeals: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "lostDeals", array()), "html", null, true);
            echo "
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dealProductTypes"]) ? $context["dealProductTypes"] : $this->getContext($context, "dealProductTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo " 
        dealProductTypeData.push({
            label: '";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "',
            value: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "openDeals", array()), "html", null, true);
            echo ",
            wonDeals: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "wonDeals", array()), "html", null, true);
            echo ",
            lostDeals: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "lostDeals", array()), "html", null, true);
            echo "
        });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "       
    Morris.Donut({
        element: 'deals-donut-chart',
        data: removeZeroData(filterWonLost(dealData)),
        resize: true,
        colors: [
            '#0BA462',
            '#39B580',
            '#67C69D',
            '#95D7BB'
        ]
    });
    
    Morris.Donut({
        element: 'deal-sources-donut-chart',
        data: removeZeroData(dealSourceData),
        resize: true
    });
    
    Morris.Donut({
        element: 'deal-product-types-donut-chart',
        data: removeZeroData(dealProductTypeData),
        resize: true
    });
    
    function addWonLost(dealSourceData){
        var returnData = [];
        \$.each(dealSourceData, function( index, value ) {
            var val = value.value + value.wonDeals + value.lostDeals;
            returnData.push({
                label: value.label,
                value: val
            });
        });
        return returnData;
    }
    
    function removeZeroData(data){
        var returnData = [];
        \$.each(data, function( index, value ) {
            if(value.value > 0){
                returnData.push(value);
            }
        });
        return returnData;
    }
    
    function filterWonLost(dealData){
        var returnData = [];
        \$.each(dealData, function( index, value ) {
            if(value.label !== 'won' && value.label !== 'lost'){
                returnData.push(value);
            }
        });
        return returnData;
    }
    
    function showHideWonLostOnDonutChart(){
        \$('#deals-donut-chart').html('');
        
        var innerText = \$('#showHideWonLostOnDonutChartTag').html();
        
        if(innerText === 'Hide Won And Lost Details'){
            \$('#showHideWonLostOnDonutChartTag').html('Show Won And Lost Details');
            Morris.Donut({
                element: 'deals-donut-chart',
                data: removeZeroData(filterWonLost(dealData)),
                resize: true,
                colors: [
                    '#0BA462',
                    '#39B580',
                    '#67C69D',
                    '#95D7BB'
                ]
            });
        }else{
            \$('#showHideWonLostOnDonutChartTag').html('Hide Won And Lost Details');
                Morris.Donut({
                    element: 'deals-donut-chart',
                    data: removeZeroData(dealData),
                    resize: true,
                colors: [
                    '#0BA462',
                    '#39B580',
                    '#67C69D',
                    '#95D7BB'
                ]
                });
        }
    }
    
    function showHideWonLostOnDealSourcesDonutChart(){
        \$('#deal-sources-donut-chart').html('');
        
        var innerText = \$('#showHideWonLostOnDealSourcesDonutChartTag').html();
        
        if(innerText === 'Hide Won And Lost Details'){
            \$('#showHideWonLostOnDealSourcesDonutChartTag').html('Show Won And Lost Details');
            Morris.Donut({
                element: 'deal-sources-donut-chart',
                data: removeZeroData(dealSourceData),
                resize: true
            });
        }else{
            \$('#showHideWonLostOnDealSourcesDonutChartTag').html('Hide Won And Lost Details');
                Morris.Donut({
                    element: 'deal-sources-donut-chart',
                    data: removeZeroData(addWonLost(dealSourceData)),
                    resize: true
                });
        }
    }
    
    function showHideWonLostOnDealProductTypesDonutChart(){
        \$('#deal-product-types-donut-chart').html('');
        
        var innerText = \$('#showHideWonLostOnDealProductTypesDonutChartTag').html();
        
        if(innerText === 'Hide Won And Lost Details'){
            \$('#showHideWonLostOnDealProductTypesDonutChartTag').html('Show Won And Lost Details');
            Morris.Donut({
                element: 'deal-product-types-donut-chart',
                data: removeZeroData(dealProductTypeData),
                resize: true
            });
        }else{
            \$('#showHideWonLostOnDealProductTypesDonutChartTag').html('Hide Won And Lost Details');
                Morris.Donut({
                    element: 'deal-product-types-donut-chart',
                    data: removeZeroData(addWonLost(dealProductTypeData)),
                    resize: true
                });
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "webBundle:Default:donutChartScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  80 => 22,  77 => 21,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  49 => 13,  46 => 12,  37 => 9,  33 => 8,  26 => 6,  19 => 1,);
    }
}

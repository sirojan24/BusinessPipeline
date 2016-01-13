<?php

/* OpportunityBundle:Default:sharingCalculationScript.html.twig */
class __TwigTemplate_747e8d75672471c05acc11062c1a6a1009f350e041ccd36b46c4212a5227caa5 extends Twig_Template
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
    function sharingpopup(sharing, total, username, partnername, partnersharing) {

        \$.post('";
        // line 4
        echo $this->env->getExtension('routing')->getPath("login_login_getusers");
        echo "',
                {sharedusers: sharing, user: username},
        function (response) {
            if (response !== \"false\") {
                console.log(\"@@@@@@@@@\", response);
                var responseData = JSON.parse(response);
                var nonoriginpercentage = 0;
                for (i = 0; i < responseData.sharing.length; i++) {
                    nonoriginpercentage += parseInt(responseData.sharing[i].percentage);
                }
                var totalpercentage = nonoriginpercentage + parseInt(responseData.orininatorpercentage);
                
                var dataArray = [];
                
                if(partnersharing !== '' && partnersharing !== null){
                    var partnerShare = (total * parseInt(partnersharing))/100;
                    total = total - partnerShare;
                    var sharingData = {
                        name:partnername + \"(Partner)\",
                        weightedForecast: \"\$\" + partnerShare.toFixed(2).toLocaleString()
                    };
                    dataArray.push(sharingData);
                    
                }
                
                if(totalpercentage>100){
                   
                    var adminShare = (total * parseInt(responseData.orininatorpercentage) * 100) / (totalpercentage * 100);
                    var sharingData = {
                        name:responseData.originatorname + \"(Originator)\",
                        weightedForecast:\"\$\" + adminShare.toFixed(2).toLocaleString()
                    };
                    dataArray.push(sharingData);
                    
                    for (i = 0; i < responseData.sharing.length; i++) {
                        var share = (total * parseInt(responseData.sharing[i].percentage) * 100) / (totalpercentage * 100);
                        sharingData = {
                            name:responseData.sharing[i].fullname,
                            weightedForecast:\"\$\" + share.toFixed(2).toLocaleString()
                        };
                        dataArray.push(sharingData);
                        
                    }   
                    
                }else if(totalpercentage < 100){
                    
                    var adminShare = (total * (parseInt(responseData.orininatorpercentage) + (100 - totalpercentage))) / 100;
                    var sharingData = {
                        name:responseData.originatorname + \"(Originator)\",
                        weightedForecast:\"\$\" + adminShare.toFixed(2).toLocaleString()
                    };
                    dataArray.push(sharingData);
                    
                    for (i = 0; i < responseData.sharing.length; i++) {
                        var share = (total * parseInt(responseData.sharing[i].percentage)) / 100;
                        sharingData = {
                            name:responseData.sharing[i].fullname,
                            weightedForecast:\"\$\" + share.toFixed(2).toLocaleString()
                        };
                        dataArray.push(sharingData);
                        
                    }   
                    
                }else{
                    
                    var adminShare = (total * parseInt(responseData.orininatorpercentage)) / 100;
                    var sharingData = {
                        name:responseData.originatorname + \"(Originator)\",
                        weightedForecast:\"\$\" + adminShare.toFixed(2).toLocaleString()
                    };
                    dataArray.push(sharingData);
                    
                    for (i = 0; i < responseData.sharing.length; i++) {
                        var share = (total * parseInt(responseData.sharing[i].percentage)) / 100;
                        sharingData = {
                            name:responseData.sharing[i].fullname,
                            weightedForecast:\"\$\" + share.toFixed(2).toLocaleString()
                        };
                        dataArray.push(sharingData);
                        
                    }    
                    
                }

               ";
        // line 102
        echo "
                showSharedUserModal(dataArray);

                console.log(sharing, nonoriginators, originator, totalpercentage);

            } else {
                console.log(\"error occured in the mange opportunity in retriving shared users\", response);
            }
        });
    }
</script>    ";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:sharingCalculationScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 102,  24 => 4,  19 => 1,);
    }
}

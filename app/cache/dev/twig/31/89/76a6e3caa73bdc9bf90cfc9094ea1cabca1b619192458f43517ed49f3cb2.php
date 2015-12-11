<?php

/* OpportunityBundle:Default:opportunityTableScript.html.twig */
class __TwigTemplate_318976a6e3caa73bdc9bf90cfc9094ea1cabca1b619192458f43517ed49f3cb2 extends Twig_Template
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
    var \$table = \$('#table');
    var extendColData = [];
    var initResponse;
    
    var dealSource = [];
    var stage = [];
    var accountType = [];
    var productType = [];
    var tags = [];
    
    \$(document).ready(function () {
        \$(\"#tableDiv\").show();
        iniFillTableData();
        populateFilterForm();
        wonLostFilter();
        \$table.bootstrapTable('hideColumn', 'tags');
    });

    function iniFillTableData() {
        \$table.bootstrapTable('showLoading');
        var data = '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["opportunitiesArray"]) ? $context["opportunitiesArray"] : $this->getContext($context, "opportunitiesArray")), "html", null, true);
        echo "';
        var newString = data.replace(/&quot;/g, '\"');
        initResponse = newString;
        //var newString = JSON.parse(data);
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(newString));
    }

    function refreshTable() {
        \$table.bootstrapTable('removeAll');
        fillTableData();
    }
    
    function resetTable() {
        \$table.bootstrapTable('resetSearch');
        clearFilter();
        applyUserDefinedFilter();
        wonLostFilter();
    }
    
    function fillTableData() {
        \$table.bootstrapTable('showLoading');
        ";
        // line 44
        if (array_key_exists("contactid", $context)) {
            // line 45
            echo "            \$.post('";
            echo $this->env->getExtension('routing')->getPath("opportunity_table_data");
            echo "',{id: '";
            echo twig_escape_filter($this->env, (isset($context["contactid"]) ? $context["contactid"] : $this->getContext($context, "contactid")), "html", null, true);
            echo "', filter: '";
            echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "html", null, true);
            echo "'},
                    function (response) {
                        if (response) {
                            \$table.bootstrapTable('hideLoading');
                            initResponse = response;
                            \$table.bootstrapTable('append', convertData(response));    
                            wonLostFilter();
                        } else {

                        }
                    }
            );
        ";
        } else {
            // line 58
            echo "            \$.post('";
            echo $this->env->getExtension('routing')->getPath("opportunity_table_data");
            echo "',{id: '-1', filter: 'None'},
                    function (response) {
                        if (response) {
                            \$table.bootstrapTable('hideLoading');
                            initResponse = response;
                            \$table.bootstrapTable('append', convertData(response));    
                            wonLostFilter();
                        } else {

                        }
                    }
            ); 
        ";
        }
        // line 71
        echo "    }
    ";
        // line 72
        if (array_key_exists("contactid", $context)) {
            // line 73
            echo "        function wonLostFilter() {
            
        }
    ";
        } else {
            // line 77
            echo "        function wonLostFilter() {
            \$table.bootstrapTable('removeAll');
            \$table.bootstrapTable('showLoading');

            var jsonString = JSON.parse(initResponse);
            var filterOpportunities = [];

            for (var i = 0; i < jsonString.opportunities.length; i++) {
                var tempOpportunity = jsonString.opportunities[i];

                if ('won' !== tempOpportunity.stage.toLowerCase() && 'lost' !== tempOpportunity.stage.toLowerCase()) {
                    filterOpportunities.push(tempOpportunity);
                }

            }
            var filterOpportunitiesArray = {'opportunities' : filterOpportunities};
            var jsonStr = JSON.stringify(filterOpportunitiesArray); 

            \$table.bootstrapTable('hideLoading');
            \$table.bootstrapTable('append', convertData(jsonStr));
        }
    ";
        }
        // line 99
        echo "        
    function usernameFilter(username) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
        var filterOpportunities = [];
        
        for (var i = 0; i < jsonString.opportunities.length; i++) {
            var tempOpportunity = jsonString.opportunities[i];

            ";
        // line 110
        if (array_key_exists("contactid", $context)) {
            // line 111
            echo "                if (username.toLowerCase() === tempOpportunity.username.toLowerCase()) {
                    filterOpportunities.push(tempOpportunity);
                }
            ";
        } else {
            // line 115
            echo "                if (username.toLowerCase() === tempOpportunity.username.toLowerCase()) {
                    if ('won' !== tempOpportunity.stage.toLowerCase() && 'lost' !== tempOpportunity.stage.toLowerCase()) {
                        filterOpportunities.push(tempOpportunity);
                    }
                }
            ";
        }
        // line 121
        echo "        }
        var filterOpportunitiesArray = {'opportunities' : filterOpportunities};
        var jsonStr = JSON.stringify(filterOpportunitiesArray); 
        
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(jsonStr));
    }
    
    function productTypeFilter(productType) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
        var filterOpportunities = [];
        
        for (var i = 0; i < jsonString.opportunities.length; i++) {
            var tempOpportunity = jsonString.opportunities[i];

            ";
        // line 139
        if (array_key_exists("contactid", $context)) {
            // line 140
            echo "                if (productType.toLowerCase() === tempOpportunity.product_type.toLowerCase()) {
                    filterOpportunities.push(tempOpportunity);
                }
            ";
        } else {
            // line 144
            echo "                if (productType.toLowerCase() === tempOpportunity.product_type.toLowerCase()) {
                    if ('won' !== tempOpportunity.stage.toLowerCase() && 'lost' !== tempOpportunity.stage.toLowerCase()) {
                        filterOpportunities.push(tempOpportunity);
                    }
                }
            ";
        }
        // line 150
        echo "            
        }
        var filterOpportunitiesArray = {'opportunities' : filterOpportunities};
        var jsonStr = JSON.stringify(filterOpportunitiesArray); 
        
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(jsonStr));
    }
    
    function stageFilter(stage) {
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
        var filterOpportunities = [];
        
        for (var i = 0; i < jsonString.opportunities.length; i++) {
            var tempOpportunity = jsonString.opportunities[i];

            
            ";
        // line 170
        if (array_key_exists("contactid", $context)) {
            // line 171
            echo "                if (stage.toLowerCase() === tempOpportunity.stage.toLowerCase()) {
                    filterOpportunities.push(tempOpportunity);
                }
            ";
        } else {
            // line 175
            echo "                if (stage.toLowerCase() === tempOpportunity.stage.toLowerCase()) {
                    if ('won' !== tempOpportunity.stage.toLowerCase() && 'lost' !== tempOpportunity.stage.toLowerCase()) {
                        filterOpportunities.push(tempOpportunity);
                    }
                }
            ";
        }
        // line 181
        echo "        }
        var filterOpportunitiesArray = {'opportunities' : filterOpportunities};
        var jsonStr = JSON.stringify(filterOpportunitiesArray); 
        
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(jsonStr));
    }
    
    function clearFilter() {
        \$(\"#myModal\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) { 
            \$(checkboxObject).prop('checked',false);
        });
        
        \$(\"#myModal\").find(\"input[type=text]\").each(function (i, checkboxObject) { 
            \$(checkboxObject).val('');
        });
        
        \$(\"#myModal\").find(\"input[type=radio]\").each(function (i, checkboxObject) { 
            if(i == 1){
                \$(checkboxObject).prop('checked',true);
            }else{
                \$(checkboxObject).prop('checked',false);
            }
        });
        \$(\"#filterTags\").tagsinput('removeAll');
    }
    
    function applyUserDefinedFilter(){
        \$table.bootstrapTable('removeAll');
        \$table.bootstrapTable('showLoading');

        var jsonString = JSON.parse(initResponse);
        
        var filterDealOpportunities = [];
        for (var i = 0; i < jsonString.opportunities.length; i++) {
            var tempOpportunity = jsonString.opportunities[i];
            var flag = false;
            \$(\"#filterDealSourceDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) {
                if(\$(checkboxObject).is(':checked')) {
                    flag = true;
                }
            });
            if(flag === false){
                filterDealOpportunities.push(tempOpportunity);
            }else{
                \$(\"#filterDealSourceDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) {
                    if(\$(checkboxObject).is(':checked')) {
                        if(\$(checkboxObject).val() === tempOpportunity.deal_source){
                            filterDealOpportunities.push(tempOpportunity);
                        }
                    }
                });
            }
        }
        
        var filterStageOpportunities = [];
        for (var i = 0; i < filterDealOpportunities.length; i++) {
            var tempOpportunity = filterDealOpportunities[i];
            var flag = false;
            \$(\"#filterStageDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) {
                if(\$(checkboxObject).is(':checked')) {
                    flag = true;
                }
            });
            if(flag === false){
                filterStageOpportunities.push(tempOpportunity);
            }else{
                \$(\"#filterStageDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) { 
                    if(\$(checkboxObject).is(':checked')) {
                        if(\$(checkboxObject).val() === tempOpportunity.stage){
                            filterStageOpportunities.push(tempOpportunity);
                        }
                    }
                });
            }
        }
        
        var filterAccountOpportunities = [];
        for (var i = 0; i < filterStageOpportunities.length; i++) {
            var tempOpportunity = filterStageOpportunities[i];
            var flag = false;
            \$(\"#filterAccountTypeDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) {
                if(\$(checkboxObject).is(':checked')) {
                    flag = true;
                }
            });
            if(flag === false){
                filterAccountOpportunities.push(tempOpportunity);
            }else{
                \$(\"#filterAccountTypeDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) { 
                    if(\$(checkboxObject).is(':checked')) {
                        if(\$(checkboxObject).val() === tempOpportunity.deal_account_type){
                            filterAccountOpportunities.push(tempOpportunity);
                        }
                    }
                });
            }
        }
        
        var filterProductOpportunities = [];
        for (var i = 0; i < filterAccountOpportunities.length; i++) {
            var tempOpportunity = filterAccountOpportunities[i];
            var flag = false;
            \$(\"#filterProductTypeDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) {
                if(\$(checkboxObject).is(':checked')) {
                    flag = true;
                }
            });
            if(flag === false){
                filterProductOpportunities.push(tempOpportunity);
            }else{
                \$(\"#filterProductTypeDiv\").find(\"input[type=checkbox]\").each(function (i, checkboxObject) { 
                    if(\$(checkboxObject).is(':checked')) {
                        if(\$(checkboxObject).val() === tempOpportunity.product_type){
                            filterProductOpportunities.push(tempOpportunity);
                        }
                    }
                });
            }
        }
        
        var filterRevenueOpportunities = [];
        for (var i = 0; i < filterProductOpportunities.length; i++) {
            var tempOpportunity = filterProductOpportunities[i];
            var flag = false;
            if(\$(\"#projectedrevenue\").val() !== '') {
                flag = true;
            }
            
            if(\$(\"#projectedrevenue\").val() == '0') {
                flag = false;
            }
            
            if(flag === false){
                filterRevenueOpportunities.push(tempOpportunity);
            }else{
                var filterVal = parseInt(\$(\"#projectedrevenue\").val(), 10);
                var actualVal = parseInt(tempOpportunity.projected_revenue.replace(/,/g, ''), 10);
                if(\$('#less').is(':checked')) {
                    if(filterVal >= actualVal){
                        filterRevenueOpportunities.push(tempOpportunity);
                    }
                }
                if(\$('#equal').is(':checked')) {
                    if(filterVal == actualVal){
                        filterRevenueOpportunities.push(tempOpportunity);
                    }
                }
                if(\$('#great').is(':checked')) {
                    if(filterVal <= actualVal){
                        filterRevenueOpportunities.push(tempOpportunity);
                    }
                }
            }
        }
        
        var filterFromDateOpportunities = [];
        for (var i = 0; i < filterRevenueOpportunities.length; i++) {
            var tempOpportunity = filterRevenueOpportunities[i];
            var flag = true;
            if(\$(\"#fFromDate\").val() == '' && \$(\"#fToDate\").val() == '') {
                flag = false;
            }
            if(flag === false){
                filterFromDateOpportunities.push(tempOpportunity);
            }else{
                var fromDate = new Date(\$(\"#fFromDate\").val());
                var toDate = new Date(\$(\"#fToDate\").val());
                var actualDate = new Date(tempOpportunity.expected_closed_date);
                if(\$(\"#fFromDate\").val() !== '' && fromDate <= actualDate){
                    filterFromDateOpportunities.push(tempOpportunity);
                }
            }
        }
        
        var filterToDateOpportunities = [];
        for (var i = 0; i < filterFromDateOpportunities.length; i++) {
            var tempOpportunity = filterFromDateOpportunities[i];
            var flag = true;
            if(\$(\"#fFromDate\").val() == '' && \$(\"#fToDate\").val() == '') {
                flag = false;
            }
            if(flag === false){
                filterToDateOpportunities.push(tempOpportunity);
            }else{
                var fromDate = new Date(\$(\"#fFromDate\").val());
                var toDate = new Date(\$(\"#fToDate\").val());
                var actualDate = new Date(tempOpportunity.expected_closed_date);
                if(\$(\"#fToDate\").val() !== '' && actualDate <= toDate){
                    filterToDateOpportunities.push(tempOpportunity);
                }
            }
        }
        
        
        var filterTagsOpportunities = [];
        for (var i = 0; i < filterToDateOpportunities.length; i++) {
            var tempOpportunity = filterToDateOpportunities[i];
            var flag = true;
            if(\$(\"#filterTags\").val() == '') {
                flag = false;
            }
            if(flag === false){
                filterTagsOpportunities.push(tempOpportunity);
            }else{
                var filter = \$(\"#filterTags\").val();
                var filterTags = filter.split(',');
                var actual = '' + tempOpportunity.tags;
                var actualTags = actual.split(',');
                var isNotAdd = true;
                for (var j = 0; j < filterTags.length; j++) {
                    for (var k = 0; k < actualTags.length; k++) {
                        if(filterTags[j].toLowerCase() === actualTags[k].toLowerCase()){
                            filterTagsOpportunities.push(tempOpportunity);
                            isNotAdd = false;
                        }
                        if(isNotAdd === false){
                            break;
                        }
                    }
                    if(isNotAdd === false){
                        break;
                    }
                }
            }
        }
        
        var filterOpportunitiesArray = {'opportunities' : filterTagsOpportunities};
        var jsonStr = JSON.stringify(filterOpportunitiesArray); 
        
        \$table.bootstrapTable('hideLoading');
        \$table.bootstrapTable('append', convertData(jsonStr));
    }

    function storePageSize(size) {
        \$.post('";
        // line 416
        echo $this->env->getExtension('routing')->getPath("login_login_saveconfig");
        echo "',
                {name: 'opportunityview', value: size},
        function (response) {
            if (response !== \"false\") {

            } else {
                console.log(\"error occured in getting the manage view number in contacts\", response);
            }
        });
    }

    function checkAndSetValue(value, blankValue, scale, pre) {
        if (value === '' || value === null) {
            return blankValue;
        } else {
            if (pre === true) {
                return scale + '' + value;
            } else {
                return value + '' + scale;
            }
        }
    }

    function detailFormatter(index, row) {
        var deal_account_type = checkAndSetValue(row.deal_account_type, '-', '', true);
        var deal_source = checkAndSetValue(row.deal_source, '-', '', true);
        var open_deals = checkAndSetValue(row.open_deals, '-', '', true);
        var won_deals = checkAndSetValue(row.won_deals, '-', '', true);
        var lost_deals = checkAndSetValue(row.lost_deals, '-', '', true);
        var tags = checkAndSetValue(row.tags, '-', '', true);

        var html = [];
        html.push('<div class\"row\">' +
                '<div class=\"col-xs-4\">' +
                '<table class=\"table\" style=\"margin-left:42px; border: none !important;line-height: 5px;\">' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;width:40%\"><small>Deal Account Type</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + deal_account_type + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Deal Source</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + deal_source + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Open Deals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + open_deals + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Won Deals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + won_deals + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Lost Deals</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + lost_deals + '</small></td>' +
                '</tr>' +
                '<tr style=\"padding:0px;margin:0px;border-bottom: 1px solid #DCDCDC;\">' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>Tags</small></td>' +
                '<td style=\"border: none !important;line-height: 5px;\"><small>' + tags + '</small></td>' +
                '</tr>' +
                '</table>' +
                '</div>' +
                '</div>');
        //html.push('<div class\"row\">' + index + '</div>');
        \$.each(row, function (key, value) {
            //html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }

    function convertData(response) {
        var jsonString = JSON.parse(response);
        extendColData = [];
        var startId = 1,
                rows = [];

    ";
        // line 493
        echo "                for (var i = 0; i < jsonString.opportunities.length; i++) {
                    var tempOpportunity = jsonString.opportunities[i];

                    extendColData.push({
                        
                    });
                    
                    dealSource.push(tempOpportunity.deal_source);
                    stage.push(tempOpportunity.stage);
                    accountType.push(tempOpportunity.deal_account_type);
                    productType.push(tempOpportunity.product_type);
                    tags.push(tempOpportunity.tags);

                    var editPath = '";
        // line 506
        echo $this->env->getExtension('routing')->getPath("opportunity_editopportunityV2", array("id" => 0));
        echo "';
                    editPath = editPath.substring(0, editPath.length - 1);

                    var name = '";
        // line 509
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "';
                    var action = '';

                    if (name.toLowerCase() === tempOpportunity.username.toLowerCase()) {
                        action = '<div class=\"pull-right\">' +
                                '<div class=\"keep-open btn-group\">' +
                                '<button class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">' +
                                '<i class=\"glyphicon glyphicon-chevron-down\"></i>' +
                                '</button>' +
                                '<ul class=\"dropdown-menu\" role=\"menu\" style=\"min-width: 0px !important;\">' +
                                '<li><a href=\"' + editPath + tempOpportunity.id + '\"><i class=\"fa fa-pencil-square-o\"></i> Edit</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-file-o\"></i> Notes</a></li>' +
                                '<li><a href=\"#\"><i class=\"fa fa-list\"></i> Tasks</a></li>' +
                                '</ul>' +
                                '</div>' +
                                '</div>';
                    }

                    if (tempOpportunity.weighted_revenue == '-1') {
                        tempOpportunity.weighted_revenue = tempOpportunity.weighted_revenue_all;
                    }
                    
                    var mdate = new Date(tempOpportunity.expected_closed_date);
                    if(tempOpportunity.expected_closed_date !== ''){
                        var month = 1;
                        if((mdate.getMonth() + 1) < 10){
                            month = '0' + (mdate.getMonth() + 1);
                        }else{
                            month = mdate.getMonth() + 1;
                        }
                        var day = 1;
                        if((mdate.getDate()) < 10){
                            day = '0' + (mdate.getDate());
                        }else{
                            day = mdate.getDate();
                        }
                        var date = month + '/' + day + '/' + mdate.getFullYear();
                    }else{
                        date = '';
                    }
                    
                    rows.push({
                        name: tempOpportunity.name,
                        company: tempOpportunity.company,
                        product_type: '<a href=\"javascript:productTypeFilter(' + \"'\" + tempOpportunity.product_type + \"'\" + ')\">' + tempOpportunity.product_type + '</a>',
                        stage: '<a href=\"javascript:stageFilter(' + \"'\" + tempOpportunity.stage + \"'\" + ')\">' + tempOpportunity.stage + '</a>',
                        weighted_revenue: '\$' + tempOpportunity.weighted_revenue,
                        projected_revenue: '\$' + tempOpportunity.projected_revenue,
                        expected_closed_date: date,
                        owner: '<a href=\"javascript:usernameFilter(' + \"'\" + tempOpportunity.username + \"'\" + ')\">' + tempOpportunity.owner + '</a>',
                        action: action,
                        deal_account_type: tempOpportunity.deal_account_type,
                        deal_source: tempOpportunity.deal_source,
                        open_deals: tempOpportunity.open_deals,
                        won_deals: tempOpportunity.won_deals,
                        lost_deals: tempOpportunity.lost_deals,
                        tags: tempOpportunity.tags
                    });
                }

                return rows;
            }

            function rowStyle(row, index) {
                var classes = ['active'];

                if (index % 2 === 0) {
                    return {
                        classes: classes[0]
                    };
                }
                return {};
            }
            
            function populateFilterForm(){
                dealSource = jQuery.unique(dealSource);
                var style = ' style=\"margin-top: 0px\"';
                for (var i = 0; i < dealSource.length; i++) {
                    \$(\"#filterDealSourceDiv\").append('<div class=\"checkbox\"' + style + '>' +
                                                        '<label>' +
                                                            '<input type=\"checkbox\" value=\"' + dealSource[i] + '\">' +
                                                            dealSource[i] +
                                                        '</label>' +
                                                    '</div>'
                                    );
                    style = '';
                }
                
                stage = jQuery.unique(stage);
                style = ' style=\"margin-top: 0px\"';
                for (var i = 0; i < stage.length; i++) {
                    \$(\"#filterStageDiv\").append('<div class=\"checkbox\"' + style + '>' +
                                                        '<label>' +
                                                            '<input type=\"checkbox\" value=\"' + stage[i] + '\">' +
                                                            stage[i] +
                                                        '</label>' +
                                                    '</div>'
                                    );
                    style = '';
                }
                
                accountType = jQuery.unique(accountType);
                style = ' style=\"margin-top: 0px\"';
                for (var i = 0; i < accountType.length; i++) {
                    \$(\"#filterAccountTypeDiv\").append('<div class=\"checkbox\"' + style + '>' +
                                                        '<label>' +
                                                            '<input type=\"checkbox\" value=\"' + accountType[i] + '\">' +
                                                            accountType[i] +
                                                        '</label>' +
                                                    '</div>'
                                    );
                    style = '';
                }
                
                productType = jQuery.unique(productType);
                style = ' style=\"margin-top: 0px\"';
                for (var i = 0; i < productType.length; i++) {
                    \$(\"#filterProductTypeDiv\").append('<div class=\"checkbox\"' + style + '>' +
                                                        '<label>' +
                                                            '<input type=\"checkbox\" value=\"' + productType[i] + '\">' +
                                                            productType[i] +
                                                        '</label>' +
                                                    '</div>'
                                    );
                    style = '';
                }
            }
</script>";
    }

    public function getTemplateName()
    {
        return "OpportunityBundle:Default:opportunityTableScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 509,  575 => 506,  560 => 493,  482 => 416,  245 => 181,  237 => 175,  231 => 171,  229 => 170,  207 => 150,  199 => 144,  193 => 140,  191 => 139,  171 => 121,  163 => 115,  157 => 111,  155 => 110,  142 => 99,  118 => 77,  112 => 73,  110 => 72,  107 => 71,  90 => 58,  69 => 45,  67 => 44,  42 => 22,  19 => 1,);
    }
}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // partners_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partners_homepage')), array (  '_controller' => 'PartnersBundle\\Controller\\DefaultController::indexAction',));
            }

            // web_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_homepage')), array (  '_controller' => 'webBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // web_support
        if ($pathinfo === '/support') {
            return array (  '_controller' => 'webBundle\\Controller\\DefaultController::supportAction',  '_route' => 'web_support',);
        }

        // web_dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'webBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'web_dashboard',);
        }

        if (0 === strpos($pathinfo, '/hel')) {
            // help_homepage
            if ($pathinfo === '/help') {
                return array (  '_controller' => 'HelpBundle\\Controller\\DefaultController::indexAction',  '_route' => 'help_homepage',);
            }

            // task_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_homepage')), array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // task_updatetask
        if ($pathinfo === '/updatetask') {
            return array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::updatetaskAction',  '_route' => 'task_updatetask',);
        }

        // task_savetask
        if ($pathinfo === '/savetask') {
            return array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::savetaskAction',  '_route' => 'task_savetask',);
        }

        // task_manage_task
        if (0 === strpos($pathinfo, '/manageTasks') && preg_match('#^/manageTasks/(?P<type>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_manage_task')), array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::manageTasksAction',));
        }

        // task_get_task
        if (0 === strpos($pathinfo, '/getTasks') && preg_match('#^/getTasks/(?P<type>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_get_task')), array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::getTasksAction',));
        }

        // task_complete_task
        if (0 === strpos($pathinfo, '/completeTask') && preg_match('#^/completeTask/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_complete_task')), array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::completeTaskAction',));
        }

        // task_delete_task
        if (0 === strpos($pathinfo, '/deleteTask') && preg_match('#^/deleteTask/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_delete_task')), array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::deleteTaskAction',));
        }

        // task_all_open_deal_tasks
        if ($pathinfo === '/allOpenDealTasks') {
            return array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::allOpenDealTasksAction',  '_route' => 'task_all_open_deal_tasks',);
        }

        // notes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_homepage')), array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::indexAction',));
        }

        // notes_savenotes
        if ($pathinfo === '/savenotes') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::savenotesAction',  '_route' => 'notes_savenotes',);
        }

        if (0 === strpos($pathinfo, '/managenotes')) {
            // notes_managenotes
            if ($pathinfo === '/managenotes') {
                return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::managenotesAction',  '_route' => 'notes_managenotes',);
            }

            // notes_managenotesV2
            if ($pathinfo === '/managenotesV2') {
                return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::managenotesV2Action',  '_route' => 'notes_managenotesV2',);
            }

        }

        // notes_table_data
        if ($pathinfo === '/notesTableData') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::getNoteTableDataAction',  '_route' => 'notes_table_data',);
        }

        // notes_updatenote
        if ($pathinfo === '/updatenote') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::updatenoteAction',  '_route' => 'notes_updatenote',);
        }

        if (0 === strpos($pathinfo, '/getnote')) {
            // notes_getnote
            if ($pathinfo === '/getnote') {
                return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::getnoteAction',  '_route' => 'notes_getnote',);
            }

            // notes_getnotes
            if ($pathinfo === '/getnotes') {
                return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::getnotesAction',  '_route' => 'notes_getnotes',);
            }

        }

        // notes_savenote
        if ($pathinfo === '/savenote') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::savenoteAction',  '_route' => 'notes_savenote',);
        }

        // notes_updatenotes
        if ($pathinfo === '/updatenotes') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::updatenotesAction',  '_route' => 'notes_updatenotes',);
        }

        // opportunity_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_homepage')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/add')) {
            // opportunity_addopportunity
            if ($pathinfo === '/adddeal') {
                return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::addopportunityAction',  '_route' => 'opportunity_addopportunity',);
            }

            if (0 === strpos($pathinfo, '/addcontactdeal')) {
                // opportunity_addcontactopportunity
                if (preg_match('#^/addcontactdeal/(?P<name>[^/]++)/(?P<orgname>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_addcontactopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::addcontactopportunityAction',));
                }

                // opportunity_addcontactopportunityV2
                if (0 === strpos($pathinfo, '/addcontactdealV2') && preg_match('#^/addcontactdealV2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_addcontactopportunityV2')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::addcontactopportunityV2Action',));
                }

            }

        }

        // opportunity_saveopportunity
        if ($pathinfo === '/savedeal') {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::saveopportunityAction',  '_route' => 'opportunity_saveopportunity',);
        }

        if (0 === strpos($pathinfo, '/editdeal')) {
            // opportunity_editopportunity
            if (preg_match('#^/editdeal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_editopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::editopportunityAction',));
            }

            // opportunity_editopportunityV2
            if (0 === strpos($pathinfo, '/editdealV2') && preg_match('#^/editdealV2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_editopportunityV2')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::editopportunityV2Action',));
            }

        }

        // opportunity_limitededitopportunity
        if (0 === strpos($pathinfo, '/limitededitdeal') && preg_match('#^/limitededitdeal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_limitededitopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::limitededitopportunityAction',));
        }

        // opportunity_activateopportunity
        if (0 === strpos($pathinfo, '/activatedeal') && preg_match('#^/activatedeal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_activateopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::activateopportunityAction',));
        }

        if (0 === strpos($pathinfo, '/managedeal')) {
            // opportunity_manageopportunity
            if ($pathinfo === '/managedeal') {
                return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::manageopportunityAction',  '_route' => 'opportunity_manageopportunity',);
            }

            // opportunity_manageopportunityV2
            if ($pathinfo === '/managedealV2') {
                return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::manageopportunityV2Action',  '_route' => 'opportunity_manageopportunityV2',);
            }

        }

        // opportunity_opportunitycontactfilterV2
        if (0 === strpos($pathinfo, '/dealcontactfilterV2') && preg_match('#^/dealcontactfilterV2/(?P<id>[^/]++)/(?P<filter>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_opportunitycontactfilterV2')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::opportunitycontactfilterV2Action',));
        }

        // opportunity_updateopportunity
        if ($pathinfo === '/updatedeal') {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::updateopportunityAction',  '_route' => 'opportunity_updateopportunity',);
        }

        if (0 === strpos($pathinfo, '/de')) {
            // opportunity_deleteopportunity
            if (0 === strpos($pathinfo, '/deletedeal') && preg_match('#^/deletedeal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_deleteopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::deleteopportunityAction',));
            }

            // opportunity_table_data
            if (rtrim($pathinfo, '/') === '/dealtable') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'opportunity_table_data');
                }

                return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::getOpportunityTableDataAction',  '_route' => 'opportunity_table_data',);
            }

        }

        // settings_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_homepage')), array (  '_controller' => 'SettingsBundle\\Controller\\DefaultController::indexAction',));
        }

        // settings_pipelinesetup
        if ($pathinfo === '/pipelinesetup') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\DefaultController::pipelinesetupAction',  '_route' => 'settings_pipelinesetup',);
        }

        // settings_addaccounttype
        if ($pathinfo === '/addaccounttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::addaccounttypeAction',  '_route' => 'settings_addaccounttype',);
        }

        // settings_saveaccounttype
        if ($pathinfo === '/saveaccounttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::saveaccounttypeAction',  '_route' => 'settings_saveaccounttype',);
        }

        // settings_manageaccounttypes
        if ($pathinfo === '/manageaccounttypes') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::manageaccounttypesAction',  '_route' => 'settings_manageaccounttypes',);
        }

        // settings_deleteaccounttype
        if (0 === strpos($pathinfo, '/deleteaccounttype') && preg_match('#^/deleteaccounttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_deleteaccounttype')), array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::deleteaccounttypeAction',));
        }

        // settings_editaccounttype
        if (0 === strpos($pathinfo, '/editaccounttype') && preg_match('#^/editaccounttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_editaccounttype')), array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::editaccounttypeAction',));
        }

        // settings_updateaccounttype
        if ($pathinfo === '/updateaccounttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::updateaccounttypeAction',  '_route' => 'settings_updateaccounttype',);
        }

        // settings_activateaccounttype
        if (0 === strpos($pathinfo, '/activateaccounttype') && preg_match('#^/activateaccounttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_activateaccounttype')), array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::activateaccounttypeAction',));
        }

        // settings_validateaccounttype
        if ($pathinfo === '/validateaccounttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::validateaccounttypeAction',  '_route' => 'settings_validateaccounttype',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // settings_account_type_table_data
            if ($pathinfo === '/accountTypeTableData') {
                return array (  '_controller' => 'SettingsBundle\\Controller\\AccountTypeController::tableDataAction',  '_route' => 'settings_account_type_table_data',);
            }

            if (0 === strpos($pathinfo, '/addstage')) {
                // settings_addstage
                if ($pathinfo === '/addstage') {
                    return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::addstageAction',  '_route' => 'settings_addstage',);
                }

                // settings_addstageV2
                if ($pathinfo === '/addstageV2') {
                    return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::addstageV2Action',  '_route' => 'settings_addstageV2',);
                }

            }

        }

        // settings_validatestage
        if ($pathinfo === '/validatestage') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::validatestageAction',  '_route' => 'settings_validatestage',);
        }

        if (0 === strpos($pathinfo, '/managestages')) {
            // settings_managestages
            if ($pathinfo === '/managestages') {
                return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::managestagesAction',  '_route' => 'settings_managestages',);
            }

            // settings_managestagesV2
            if ($pathinfo === '/managestagesV2') {
                return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::managestagesV2Action',  '_route' => 'settings_managestagesV2',);
            }

        }

        // settings_table_data
        if ($pathinfo === '/tableData') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::tableDataAction',  '_route' => 'settings_table_data',);
        }

        // settings_delete_user
        if ($pathinfo === '/deleteUser') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\UsersController::deleteUserAction',  '_route' => 'settings_delete_user',);
        }

        // settings_activate_user
        if ($pathinfo === '/activateUser') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\UsersController::activateUserAction',  '_route' => 'settings_activate_user',);
        }

        // settings_savestage
        if ($pathinfo === '/savestage') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::savestageAction',  '_route' => 'settings_savestage',);
        }

        if (0 === strpos($pathinfo, '/editstage')) {
            // settings_editstage
            if (preg_match('#^/editstage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_editstage')), array (  '_controller' => 'SettingsBundle\\Controller\\StageController::editstageAction',));
            }

            // settings_editstageV2
            if (0 === strpos($pathinfo, '/editstageV2') && preg_match('#^/editstageV2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_editstageV2')), array (  '_controller' => 'SettingsBundle\\Controller\\StageController::editstageV2Action',));
            }

        }

        // settings_deletestage
        if (0 === strpos($pathinfo, '/deletestage') && preg_match('#^/deletestage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_deletestage')), array (  '_controller' => 'SettingsBundle\\Controller\\StageController::deletestageAction',));
        }

        // settings_activatestage
        if (0 === strpos($pathinfo, '/activatestage') && preg_match('#^/activatestage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_activatestage')), array (  '_controller' => 'SettingsBundle\\Controller\\StageController::activatestageAction',));
        }

        // settings_updatestage
        if ($pathinfo === '/updatestage') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::updatestageAction',  '_route' => 'settings_updatestage',);
        }

        // settings_addproducttype
        if ($pathinfo === '/addproducttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::addproducttypeAction',  '_route' => 'settings_addproducttype',);
        }

        // settings_validateproducttype
        if ($pathinfo === '/validateproducttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::validateproducttypeAction',  '_route' => 'settings_validateproducttype',);
        }

        // settings_saveproducttype
        if ($pathinfo === '/saveproducttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::saveproducttypeAction',  '_route' => 'settings_saveproducttype',);
        }

        // settings_manageproducttypes
        if ($pathinfo === '/manageproducttypes') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::manageproducttypesAction',  '_route' => 'settings_manageproducttypes',);
        }

        // settings_deleteproducttype
        if (0 === strpos($pathinfo, '/deleteproducttype') && preg_match('#^/deleteproducttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_deleteproducttype')), array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::deleteproducttypeAction',));
        }

        // settings_editproducttype
        if (0 === strpos($pathinfo, '/editproducttype') && preg_match('#^/editproducttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_editproducttype')), array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::editproducttypeAction',));
        }

        // settings_updateproducttype
        if ($pathinfo === '/updateproducttype') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::updateproducttypeAction',  '_route' => 'settings_updateproducttype',);
        }

        // settings_activateproducttype
        if (0 === strpos($pathinfo, '/activateproducttype') && preg_match('#^/activateproducttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_activateproducttype')), array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::activateproducttypeAction',));
        }

        // settings_product_type_table_data
        if ($pathinfo === '/productTypeTableData') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::productTypeTableDataAction',  '_route' => 'settings_product_type_table_data',);
        }

        // settings_addopportunitysource
        if ($pathinfo === '/addopportunitysource') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::addopportunitysourceAction',  '_route' => 'settings_addopportunitysource',);
        }

        // settings_saveopportunitysource
        if ($pathinfo === '/saveopportunitysource') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::saveopportunitysourceAction',  '_route' => 'settings_saveopportunitysource',);
        }

        // settings_manageopportunitysources
        if ($pathinfo === '/manageopportunitysources') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::manageopportunitysourcesAction',  '_route' => 'settings_manageopportunitysources',);
        }

        // settings_deleteopportunitysource
        if (0 === strpos($pathinfo, '/deleteopportunitysource') && preg_match('#^/deleteopportunitysource/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_deleteopportunitysource')), array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::deleteopportunitysourceAction',));
        }

        // settings_editopportunitysource
        if (0 === strpos($pathinfo, '/editopportunitysource') && preg_match('#^/editopportunitysource/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_editopportunitysource')), array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::editopportunitysourceAction',));
        }

        // settings_updateopportunitysource
        if ($pathinfo === '/updateopportunitysource') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::updateopportunitysourceAction',  '_route' => 'settings_updateopportunitysource',);
        }

        // settings_activateopportunitysource
        if (0 === strpos($pathinfo, '/activateopportunitysource') && preg_match('#^/activateopportunitysource/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_activateopportunitysource')), array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::activateopportunitysourceAction',));
        }

        // settings_validateopportunitysource
        if ($pathinfo === '/validateopportunitysource') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::validateopportunitysourceAction',  '_route' => 'settings_validateopportunitysource',);
        }

        // settings_opportunity_source_table_data
        if ($pathinfo === '/opportunityTableData') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::tableDataAction',  '_route' => 'settings_opportunity_source_table_data',);
        }

        // settings_getsale
        if ($pathinfo === '/getsale') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::getsaleAction',  '_route' => 'settings_getsale',);
        }

        // contacts_contacts_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_homepage')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/contacts')) {
            // contacts_contacts_managecontacts
            if ($pathinfo === '/contacts') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::managecontactsAction',  '_route' => 'contacts_contacts_managecontacts',);
            }

            // contacts_contacts_contacts
            if ($pathinfo === '/contactsV2') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::managecontactsV2Action',  '_route' => 'contacts_contacts_contacts',);
            }

        }

        if (0 === strpos($pathinfo, '/addcontact')) {
            // contacts_contacts_addcontact
            if ($pathinfo === '/addcontact') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::addcontactAction',  '_route' => 'contacts_contacts_addcontact',);
            }

            // contacts_contacts_addcontactV2
            if ($pathinfo === '/addcontactV2') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::addcontactV2Action',  '_route' => 'contacts_contacts_addcontactV2',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // contacts_contacts_createcontact
            if ($pathinfo === '/createcontact') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::createcontactAction',  '_route' => 'contacts_contacts_createcontact',);
            }

            // contacts_contacts_contactvalidate
            if ($pathinfo === '/contactvalidate') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::contactvalidateAction',  '_route' => 'contacts_contacts_contactvalidate',);
            }

        }

        if (0 === strpos($pathinfo, '/editcontact')) {
            // contacts_contacts_editcontactpage
            if (preg_match('#^/editcontact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_editcontactpage')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::editcontactpageAction',));
            }

            // contacts_contacts_editcontactpageV2
            if (0 === strpos($pathinfo, '/editcontactV2') && preg_match('#^/editcontactV2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_editcontactpageV2')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::editcontactpageV2Action',));
            }

        }

        // contacts_contacts_updatecontact
        if ($pathinfo === '/updatecontact') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::updatecontactAction',  '_route' => 'contacts_contacts_updatecontact',);
        }

        // contacts_contacts_activate
        if (0 === strpos($pathinfo, '/activate') && preg_match('#^/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_activate')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::activateAction',));
        }

        // contacts_contacts_deletecontact
        if (0 === strpos($pathinfo, '/deletecontact') && preg_match('#^/deletecontact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_deletecontact')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::deletecontactAction',));
        }

        // contacts_contacts_uploadcontact
        if ($pathinfo === '/uploadcontact') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::uploadcontactAction',  '_route' => 'contacts_contacts_uploadcontact',);
        }

        // contacts_contacts_importcontacts
        if ($pathinfo === '/importcontacts') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::importcontactsAction',  '_route' => 'contacts_contacts_importcontacts',);
        }

        // contacts_contacts_contactavailability
        if ($pathinfo === '/contactavailability') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::contactavailabilityAction',  '_route' => 'contacts_contacts_contactavailability',);
        }

        // contacts_contacts_filteredopportunities
        if (0 === strpos($pathinfo, '/filteredopportunities') && preg_match('#^/filteredopportunities/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_filteredopportunities')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::filteredopportunitiesAction',));
        }

        if (0 === strpos($pathinfo, '/contactTableData')) {
            // contacts_contacts_table_data
            if ($pathinfo === '/contactTableData') {
                return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::contactTableDataAction',  '_route' => 'contacts_contacts_table_data',);
            }

            // contacts_contacts_table_data_username_filter
            if (0 === strpos($pathinfo, '/contactTableDataUsernameFilter') && preg_match('#^/contactTableDataUsernameFilter/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_table_data_username_filter')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::contactTableDataUsernameFilterAction',));
            }

        }

        // contacts_delete_contact
        if ($pathinfo === '/deleteV2') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::deleteContactV2Action',  '_route' => 'contacts_delete_contact',);
        }

        // contacts_activate_contact
        if ($pathinfo === '/activateV2') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::activateContactV2Action',  '_route' => 'contacts_activate_contact',);
        }

        // home_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_homepage');
            }

            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home_homepage',);
        }

        if (0 === strpos($pathinfo, '/signin')) {
            // login_login_homepage
            if ($pathinfo === '/signin') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login_login_homepage',);
            }

            // login_login_signin
            if ($pathinfo === '/signinV2') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::signinAction',  '_route' => 'login_login_signin',);
            }

        }

        // login_login_forgetPassword
        if ($pathinfo === '/password') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::forgetPasswordAction',  '_route' => 'login_login_forgetPassword',);
        }

        if (0 === strpos($pathinfo, '/signup')) {
            // login_login_signup
            if ($pathinfo === '/signup') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::signupAction',  '_route' => 'login_login_signup',);
            }

            // login_login_signupV2
            if ($pathinfo === '/signupV2') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::signupV2Action',  '_route' => 'login_login_signupV2',);
            }

        }

        // login_login_termsofService
        if ($pathinfo === '/termsofService') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::termsofServiceAction',  '_route' => 'login_login_termsofService',);
        }

        // login_login_privacy
        if ($pathinfo === '/privacy') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::privacyAction',  '_route' => 'login_login_privacy',);
        }

        // login_login_uservalidateajax
        if ($pathinfo === '/uservalidateajax') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::uservalidateajaxAction',  '_route' => 'login_login_uservalidateajax',);
        }

        // login_login_adduser
        if ($pathinfo === '/adduser') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::adduserAction',  '_route' => 'login_login_adduser',);
        }

        // login_login_fullsignup
        if ($pathinfo === '/fullsignup') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::fullsignupAction',  '_route' => 'login_login_fullsignup',);
        }

        // login_login_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'login_login_logout',);
        }

        // login_login_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::uploadAction',  '_route' => 'login_login_upload',);
        }

        // login_login_importuser
        if ($pathinfo === '/importuser') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::importuserAction',  '_route' => 'login_login_importuser',);
        }

        // login_login_updateprofile
        if ($pathinfo === '/updateprofile') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::updateprofileAction',  '_route' => 'login_login_updateprofile',);
        }

        // login_login_getcompanyajax
        if ($pathinfo === '/getcompanyajax') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::getcompanyajaxAction',  '_route' => 'login_login_getcompanyajax',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // login_login_users
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::usersAction',  '_route' => 'login_login_users',);
            }

            // login_login_userTableData
            if ($pathinfo === '/userTableData') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::userTableDataAction',  '_route' => 'login_login_userTableData',);
            }

        }

        // login_login_edituserpage
        if (0 === strpos($pathinfo, '/editsingleuser') && preg_match('#^/editsingleuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_login_edituserpage')), array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::editsingleuserAction',));
        }

        // login_login_singleupdate
        if ($pathinfo === '/singleupdate') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::singleupdateAction',  '_route' => 'login_login_singleupdate',);
        }

        // login_login_deleteuser
        if (0 === strpos($pathinfo, '/deleteuser') && preg_match('#^/deleteuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_login_deleteuser')), array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::deleteuserAction',));
        }

        // login_login_profile
        if (rtrim($pathinfo, '/') === '/profile') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login_login_profile');
            }

            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::profileAction',  '_route' => 'login_login_profile',);
        }

        // login_login_activate
        if (0 === strpos($pathinfo, '/activateuser') && preg_match('#^/activateuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_login_activate')), array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::activateAction',));
        }

        if (0 === strpos($pathinfo, '/get')) {
            // login_login_getusers
            if ($pathinfo === '/getusers') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::getusersAction',  '_route' => 'login_login_getusers',);
            }

            // login_login_getCommissionoriginator
            if ($pathinfo === '/getCommissionoriginator') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::getCommissionoriginatorAction',  '_route' => 'login_login_getCommissionoriginator',);
            }

            // login_login_getFullname
            if ($pathinfo === '/getFullname') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::getFullnameAction',  '_route' => 'login_login_getFullname',);
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // login_login_selecteduseropportunities
            if (0 === strpos($pathinfo, '/selecteduseropportunities') && preg_match('#^/selecteduseropportunities/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_login_selecteduseropportunities')), array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::selecteduseropportunitiesAction',));
            }

            // login_login_saveconfig
            if ($pathinfo === '/saveconfig') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::saveconfigAction',  '_route' => 'login_login_saveconfig',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

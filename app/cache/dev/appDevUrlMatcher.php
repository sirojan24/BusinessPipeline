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

        // task_savetask
        if ($pathinfo === '/savetask') {
            return array (  '_controller' => 'TaskBundle\\Controller\\DefaultController::savetaskAction',  '_route' => 'task_savetask',);
        }

        // notes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_homepage')), array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::indexAction',));
        }

        // notes_savenotes
        if ($pathinfo === '/savenotes') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::savenotesAction',  '_route' => 'notes_savenotes',);
        }

        // notes_managenotes
        if ($pathinfo === '/managenotes') {
            return array (  '_controller' => 'NotesBundle\\Controller\\DefaultController::managenotesAction',  '_route' => 'notes_managenotes',);
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
            if ($pathinfo === '/addopportunity') {
                return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::addopportunityAction',  '_route' => 'opportunity_addopportunity',);
            }

            // opportunity_addcontactopportunity
            if (0 === strpos($pathinfo, '/addcontactopportunity') && preg_match('#^/addcontactopportunity/(?P<name>[^/]++)/(?P<orgname>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_addcontactopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::addcontactopportunityAction',));
            }

        }

        // opportunity_saveopportunity
        if ($pathinfo === '/saveopportunity') {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::saveopportunityAction',  '_route' => 'opportunity_saveopportunity',);
        }

        // opportunity_editopportunity
        if (0 === strpos($pathinfo, '/editopportunity') && preg_match('#^/editopportunity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_editopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::editopportunityAction',));
        }

        // opportunity_limitededitopportunity
        if (0 === strpos($pathinfo, '/limitededitopportunity') && preg_match('#^/limitededitopportunity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_limitededitopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::limitededitopportunityAction',));
        }

        // opportunity_activateopportunity
        if (0 === strpos($pathinfo, '/activateopportunity') && preg_match('#^/activateopportunity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_activateopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::activateopportunityAction',));
        }

        // opportunity_manageopportunity
        if ($pathinfo === '/manageopportunity') {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::manageopportunityAction',  '_route' => 'opportunity_manageopportunity',);
        }

        // opportunity_updateopportunity
        if ($pathinfo === '/updateopportunity') {
            return array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::updateopportunityAction',  '_route' => 'opportunity_updateopportunity',);
        }

        // opportunity_deleteopportunity
        if (0 === strpos($pathinfo, '/deleteopportunity') && preg_match('#^/deleteopportunity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opportunity_deleteopportunity')), array (  '_controller' => 'OpportunityBundle\\Controller\\DefaultController::deleteopportunityAction',));
        }

        // settings_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_homepage')), array (  '_controller' => 'SettingsBundle\\Controller\\DefaultController::indexAction',));
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

        // settings_addstage
        if ($pathinfo === '/addstage') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::addstageAction',  '_route' => 'settings_addstage',);
        }

        // settings_validatestage
        if ($pathinfo === '/validatestage') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::validatestageAction',  '_route' => 'settings_validatestage',);
        }

        // settings_managestages
        if ($pathinfo === '/managestages') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::managestagesAction',  '_route' => 'settings_managestages',);
        }

        // settings_savestage
        if ($pathinfo === '/savestage') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::savestageAction',  '_route' => 'settings_savestage',);
        }

        // settings_editstage
        if (0 === strpos($pathinfo, '/editstage') && preg_match('#^/editstage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_editstage')), array (  '_controller' => 'SettingsBundle\\Controller\\StageController::editstageAction',));
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

        if (0 === strpos($pathinfo, '/a')) {
            // settings_activateproducttype
            if (0 === strpos($pathinfo, '/activateproducttype') && preg_match('#^/activateproducttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_activateproducttype')), array (  '_controller' => 'SettingsBundle\\Controller\\ProductTypeController::activateproducttypeAction',));
            }

            // settings_addopportunitysource
            if ($pathinfo === '/addopportunitysource') {
                return array (  '_controller' => 'SettingsBundle\\Controller\\OpportunitySourceController::addopportunitysourceAction',  '_route' => 'settings_addopportunitysource',);
            }

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

        // settings_getsale
        if ($pathinfo === '/getsale') {
            return array (  '_controller' => 'SettingsBundle\\Controller\\StageController::getsaleAction',  '_route' => 'settings_getsale',);
        }

        // contacts_contacts_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_homepage')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::indexAction',));
        }

        // contacts_contacts_managecontacts
        if ($pathinfo === '/contacts') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::managecontactsAction',  '_route' => 'contacts_contacts_managecontacts',);
        }

        // contacts_contacts_addcontact
        if ($pathinfo === '/addcontact') {
            return array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::addcontactAction',  '_route' => 'contacts_contacts_addcontact',);
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

        // contacts_contacts_editcontactpage
        if (0 === strpos($pathinfo, '/editcontact') && preg_match('#^/editcontact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_contacts_editcontactpage')), array (  '_controller' => 'ContactsContactsBundle\\Controller\\ContactsController::editcontactpageAction',));
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

        if (0 === strpos($pathinfo, '/sign')) {
            // login_login_homepage
            if ($pathinfo === '/signin') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login_login_homepage',);
            }

            // login_login_signup
            if ($pathinfo === '/signup') {
                return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::signupAction',  '_route' => 'login_login_signup',);
            }

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

        // login_login_users
        if ($pathinfo === '/users') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DashboardController::usersAction',  '_route' => 'login_login_users',);
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // troiswa_test_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_homepage')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\DefaultController::indexAction',));
        }

        // troiswa_test_create
        if (rtrim($pathinfo, '/') === '/admin/news/create') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_create');
            }

            return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::createAction',  '_route' => 'troiswa_test_create',);
        }

        // troiswa_test_news_liste
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_news_liste');
            }

            return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::listeAction',  '_route' => 'troiswa_test_news_liste',);
        }

        if (0 === strpos($pathinfo, '/admin/news')) {
            // troiswa_test_news_update
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_news_update');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_news_update')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::updateAction',));
            }

            // troiswa_test_news_delete
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/delete/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_news_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_news_delete')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/news')) {
            // troiswa_test_news_user_list
            if (0 === strpos($pathinfo, '/news/user') && preg_match('#^/news/user/(?P<username>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_news_user_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_news_user_list')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::usernewsAction',));
            }

            if (0 === strpos($pathinfo, '/news2')) {
                // news2
                if (rtrim($pathinfo, '/') === '/news2') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'news2');
                    }

                    return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::indexAction',  '_route' => 'news2',);
                }

                // news2_show
                if (preg_match('#^/news2/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news2_show')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::showAction',));
                }

                // news2_new
                if ($pathinfo === '/news2/new') {
                    return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::newAction',  '_route' => 'news2_new',);
                }

                // news2_create
                if ($pathinfo === '/news2/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_news2_create;
                    }

                    return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::createAction',  '_route' => 'news2_create',);
                }
                not_news2_create:

                // news2_edit
                if (preg_match('#^/news2/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news2_edit')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::editAction',));
                }

                // news2_update
                if (preg_match('#^/news2/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_news2_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news2_update')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::updateAction',));
                }
                not_news2_update:

                // news2_delete
                if (preg_match('#^/news2/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_news2_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news2_delete')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\News2Controller::deleteAction',));
                }
                not_news2_delete:

            }

            // troiswa_test_categories
            if (rtrim($pathinfo, '/') === '/news/categories') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_categories');
                }

                return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\CategoryController::listeAction',  '_route' => 'troiswa_test_categories',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/news/category')) {
            // troiswa_test_category_update
            if (preg_match('#^/admin/news/category/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_category_update');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_category_update')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\CategoryController::updateAction',));
            }

            // troiswa_test_category_create
            if (rtrim($pathinfo, '/') === '/admin/news/category/create') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_category_create');
                }

                return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\CategoryController::createAction',  '_route' => 'troiswa_test_category_create',);
            }

        }

        // troiswa_test_category
        if (0 === strpos($pathinfo, '/news/category') && preg_match('#^/news/category/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_category')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\CategoryController::getAction',));
        }

        // troiswa_test_category_delete
        if (0 === strpos($pathinfo, '/admin/news/category') && preg_match('#^/admin/news/category/(?P<id>[^/]++)/delete/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_category_delete');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_category_delete')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\CategoryController::deleteAction',));
        }

        // troiswa_test_news_get
        if (0 === strpos($pathinfo, '/news') && preg_match('#^/news/(?P<id>[^/\\.]++)\\.html$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_news_get')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::getAction',));
        }

        // troiswa_test_user_liste
        if ($pathinfo === '/user/liste') {
            return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\UserController::listeAction',  '_route' => 'troiswa_test_user_liste',);
        }

        // troiswa_test_user_inscript
        if (rtrim($pathinfo, '/') === '/news/inscript') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_user_inscript');
            }

            return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\UserController::inscriptAction',  '_route' => 'troiswa_test_user_inscript',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // troiswa_test_user_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\UserController::loginAction',  '_route' => 'troiswa_test_user_login',);
                }

                // troiswa_test_user_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'troiswa_test_user_login_check');
                }

            }

            // troiswa_test_user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'troiswa_test_user_logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // troiswa_test_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_user_update')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\UserController::updateAction',));
            }

            // troiswa_test_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_user_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_user_delete')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\UserController::deleteAction',));
            }

        }

        // troiswa_test_user_get
        if (rtrim($pathinfo, '/') === '/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_user_get');
            }

            return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\UserController::getAction',  '_route' => 'troiswa_test_user_get',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // troiswa_test_password
                if (0 === strpos($pathinfo, '/admin/password') && preg_match('#^/admin/password/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'troiswa_test_password');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_password')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\PasswordController::passwordAction',));
                }

                if (0 === strpos($pathinfo, '/admin/role')) {
                    // troiswa_test_role_liste
                    if ($pathinfo === '/admin/role/liste') {
                        return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\RoleController::listeAction',  '_route' => 'troiswa_test_role_liste',);
                    }

                    // troiswa_test_role_create
                    if (rtrim($pathinfo, '/') === '/admin/role/create') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'troiswa_test_role_create');
                        }

                        return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\RoleController::createAction',  '_route' => 'troiswa_test_role_create',);
                    }

                    // troiswa_test_role_update
                    if (preg_match('#^/admin/role/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'troiswa_test_role_update');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_role_update')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\RoleController::updateAction',));
                    }

                    // troiswa_test_role_delete
                    if (preg_match('#^/admin/role/(?P<id>[^/]++)/delete/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'troiswa_test_role_delete');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_role_delete')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\RoleController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/acme')) {
                // _welcome
                if (rtrim($pathinfo, '/') === '/acme') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_welcome');
                    }

                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
                }

                if (0 === strpos($pathinfo, '/acme/demo')) {
                    if (0 === strpos($pathinfo, '/acme/demo/secured')) {
                        if (0 === strpos($pathinfo, '/acme/demo/secured/log')) {
                            if (0 === strpos($pathinfo, '/acme/demo/secured/login')) {
                                // _demo_login
                                if ($pathinfo === '/acme/demo/secured/login') {
                                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                                }

                                // _security_check
                                if ($pathinfo === '/acme/demo/secured/login_check') {
                                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                                }

                            }

                            // _demo_logout
                            if ($pathinfo === '/acme/demo/secured/logout') {
                                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/acme/demo/secured/hello')) {
                            // acme_demo_secured_hello
                            if ($pathinfo === '/acme/demo/secured/hello') {
                                return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                            }

                            // _demo_secured_hello
                            if (preg_match('#^/acme/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                            }

                            // _demo_secured_hello_admin
                            if (0 === strpos($pathinfo, '/acme/demo/secured/hello/admin') && preg_match('#^/acme/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                            }

                        }

                    }

                    // _demo
                    if ($pathinfo === '/acme/demo/index.php') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
                    }

                    // _demo_hello
                    if (0 === strpos($pathinfo, '/acme/demo/hello') && preg_match('#^/acme/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
                    }

                    // _demo_contact
                    if ($pathinfo === '/acme/demo/contact') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

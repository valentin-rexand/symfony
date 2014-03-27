<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // troiswa_test_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_homepage')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\DefaultController::indexAction',));
        }

        // troiswa_test_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'troiswa_test_index');
            }

            return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'troiswa_test_index',);
        }

        if (0 === strpos($pathinfo, '/news')) {
            // troiswa_test_create
            if (0 === strpos($pathinfo, '/news/create') && preg_match('#^/news/create/(?P<name>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_create');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_create')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::createAction',));
            }

            // troiswa_test_news_liste
            if (rtrim($pathinfo, '/') === '/news') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_news_liste');
                }

                return array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::listeAction',  '_route' => 'troiswa_test_news_liste',);
            }

            // troiswa_test_news_get
            if (preg_match('#^/news/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'troiswa_test_news_get');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'troiswa_test_news_get')), array (  '_controller' => 'Troiswa\\TestBundle\\Controller\\NewsController::getAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

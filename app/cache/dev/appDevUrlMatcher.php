<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/css/081d3f1')) {
            // _assetic_081d3f1
            if ($pathinfo === '/css/081d3f1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '081d3f1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_081d3f1',);
            }

            // _assetic_081d3f1_0
            if ($pathinfo === '/css/081d3f1_main_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '081d3f1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_081d3f1_0',);
            }

        }

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // mylabel_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mylabel_default_index');
            }

            return array (  '_controller' => 'MyLabelBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mylabel_default_index',);
        }

        if (0 === strpos($pathinfo, '/demandes')) {
            // demandes_index
            if (rtrim($pathinfo, '/') === '/demandes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_demandes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'demandes_index');
                }

                return array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::indexAction',  '_route' => 'demandes_index',);
            }
            not_demandes_index:

            // demandes_new
            if ($pathinfo === '/demandes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_demandes_new;
                }

                return array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::newAction',  '_route' => 'demandes_new',);
            }
            not_demandes_new:

            // demandes_rechercher
            if ($pathinfo === '/demandes/rechercher') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_demandes_rechercher;
                }

                return array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::rechercherAction',  '_route' => 'demandes_rechercher',);
            }
            not_demandes_rechercher:

            // demandes_show
            if (preg_match('#^/demandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_demandes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandes_show')), array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::showAction',));
            }
            not_demandes_show:

            // demandes_edit
            if (preg_match('#^/demandes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_demandes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandes_edit')), array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::editAction',));
            }
            not_demandes_edit:

            // demandes_delete
            if (preg_match('#^/demandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_demandes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandes_delete')), array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::deleteAction',));
            }
            not_demandes_delete:

        }

        if (0 === strpos($pathinfo, '/labels')) {
            // labels_index
            if (rtrim($pathinfo, '/') === '/labels') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_labels_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'labels_index');
                }

                return array (  '_controller' => 'MyLabelBundle\\Controller\\LabelsController::indexAction',  '_route' => 'labels_index',);
            }
            not_labels_index:

            // labels_new
            if ($pathinfo === '/labels/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_labels_new;
                }

                return array (  '_controller' => 'MyLabelBundle\\Controller\\LabelsController::newAction',  '_route' => 'labels_new',);
            }
            not_labels_new:

            // labels_show
            if (preg_match('#^/labels/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_labels_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'labels_show')), array (  '_controller' => 'MyLabelBundle\\Controller\\LabelsController::showAction',));
            }
            not_labels_show:

            // labels_edit
            if (preg_match('#^/labels/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_labels_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'labels_edit')), array (  '_controller' => 'MyLabelBundle\\Controller\\LabelsController::editAction',));
            }
            not_labels_edit:

            // labels_delete
            if (preg_match('#^/labels/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_labels_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'labels_delete')), array (  '_controller' => 'MyLabelBundle\\Controller\\LabelsController::deleteAction',));
            }
            not_labels_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

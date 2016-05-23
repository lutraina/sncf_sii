<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

            // demandes_rechercher
            if ($pathinfo === '/demandes/rechercher') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_demandes_rechercher;
                }

                return array (  '_controller' => 'MyLabelBundle\\Controller\\DemandesController::rechercherAction',  '_route' => 'demandes_rechercher',);
            }
            not_demandes_rechercher:

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

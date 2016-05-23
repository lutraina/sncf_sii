<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'mylabel_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demandes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DemandesController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demandes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demandes_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DemandesController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demandes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demandes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DemandesController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/demandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demandes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DemandesController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/demandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demandes_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DemandesController::rechercherAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demandes/rechercher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demandes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\DemandesController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/demandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'labels_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\LabelsController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/labels/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'labels_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\LabelsController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/labels/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'labels_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\LabelsController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/labels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'labels_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\LabelsController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/labels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'labels_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyLabelBundle\\Controller\\LabelsController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/labels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

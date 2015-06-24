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
    private static $declaredRoutes = array(
        'partieune_miniblog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/miniblog/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partieune_miniblog_afficher' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::afficherAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/miniblog/afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partieune_miniblog_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/miniblog/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partieune_miniblog_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::modifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/miniblog/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partieune_miniblog_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/miniblog/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partieune_miniblog_afficherAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::afficherAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/miniblog/afficherAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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

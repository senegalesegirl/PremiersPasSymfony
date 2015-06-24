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

        if (0 === strpos($pathinfo, '/miniblog')) {
            // partieune_miniblog_homepage
            if (rtrim($pathinfo, '/') === '/miniblog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'partieune_miniblog_homepage');
                }

                return array (  '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'partieune_miniblog_homepage',);
            }

            if (0 === strpos($pathinfo, '/miniblog/a')) {
                // partieune_miniblog_afficher
                if (0 === strpos($pathinfo, '/miniblog/afficher') && preg_match('#^/miniblog/afficher/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'partieune_miniblog_afficher')), array (  '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::afficherAction',));
                }

                // partieune_miniblog_ajouter
                if ($pathinfo === '/miniblog/ajouter') {
                    return array (  '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'partieune_miniblog_ajouter',);
                }

            }

            // partieune_miniblog_modifier
            if (0 === strpos($pathinfo, '/miniblog/modifier') && preg_match('#^/miniblog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partieune_miniblog_modifier')), array (  '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::modifierAction',));
            }

            // partieune_miniblog_supprimer
            if (0 === strpos($pathinfo, '/miniblog/supprimer') && preg_match('#^/miniblog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partieune_miniblog_supprimer')), array (  '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::supprimerAction',));
            }

            // partieune_miniblog_afficherAll
            if ($pathinfo === '/miniblog/afficherAll') {
                return array (  '_controller' => 'Partieune\\MiniblogBundle\\Controller\\DefaultController::afficherAllAction',  '_route' => 'partieune_miniblog_afficherAll',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

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

        // xiaomei_xiaomei_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_homepage')), array (  '_controller' => 'XiaomeiXiaomeiBundle:Default:index :name=\'default\'',));
        }

        // xiaomei_xiaomei_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_home');
            }

            return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\DefaultController::homeAction',  '_route' => 'xiaomei_xiaomei_home',);
        }

        // xiaomei_xiaomei_legal
        if (rtrim($pathinfo, '/') === '/legal') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_legal');
            }

            return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\DefaultController::legalAction',  '_route' => 'xiaomei_xiaomei_legal',);
        }

        // xiaomei_xiaomei_order
        if (rtrim($pathinfo, '/') === '/order') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_order');
            }

            return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::ordersubmitAction',  '_route' => 'xiaomei_xiaomei_order',);
        }

        // xiaomei_xiaomei_about
        if (rtrim($pathinfo, '/') === '/a-propos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_about');
            }

            return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'xiaomei_xiaomei_about',);
        }

        if (0 === strpos($pathinfo, '/show')) {
            // xiaomei_xiaomei_showcoursall
            if (0 === strpos($pathinfo, '/showcours') && preg_match('#^/showcours(?:/(?P<tri>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_showcoursall')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::showcoursAction',  'tri' => 'c.dateCours',  'page' => 1,));
            }

            // xiaomei_xiaomei_showtri
            if (rtrim($pathinfo, '/') === '/showtri') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_showtri');
                }

                return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::showtriAction',  '_route' => 'xiaomei_xiaomei_showtri',);
            }

        }

        // xiaomei_xiaomei_showcour
        if (0 === strpos($pathinfo, '/cours') && preg_match('#^/cours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_showcour')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::showcourAction',));
        }

        if (0 === strpos($pathinfo, '/moncompte')) {
            // xiaomei_xiaomei_delete
            if (0 === strpos($pathinfo, '/moncompte/deletecontenu') && preg_match('#^/moncompte/deletecontenu/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_delete')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::deletecontenuAction',));
            }

            // xiaomei_xiaomei_moncompte
            if (rtrim($pathinfo, '/') === '/moncompte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_moncompte');
                }

                return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::moncompteAction',  '_route' => 'xiaomei_xiaomei_moncompte',);
            }

            if (0 === strpos($pathinfo, '/moncompte/m')) {
                // xiaomei_xiaomei_modifierprofil
                if (rtrim($pathinfo, '/') === '/moncompte/modifierprofil') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_modifierprofil');
                    }

                    return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::modifierprofilAction',  '_route' => 'xiaomei_xiaomei_modifierprofil',);
                }

                if (0 === strpos($pathinfo, '/moncompte/mes')) {
                    // xiaomei_xiaomei_mesformations
                    if (rtrim($pathinfo, '/') === '/moncompte/mesformations') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_mesformations');
                        }

                        return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::mesformationsAction',  '_route' => 'xiaomei_xiaomei_mesformations',);
                    }

                    // xiaomei_xiaomei_mesinscriptions
                    if (rtrim($pathinfo, '/') === '/moncompte/mesinscriptions') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_mesinscriptions');
                        }

                        return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::mesinscriptionsAction',  '_route' => 'xiaomei_xiaomei_mesinscriptions',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/moncompte/c')) {
                // xiaomei_xiaomei_cancelinscriptions
                if (0 === strpos($pathinfo, '/moncompte/cancelinscriptions') && preg_match('#^/moncompte/cancelinscriptions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_cancelinscriptions')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::cancelinscriptionsAction',));
                }

                // xiaomei_xiaomei_create_cours
                if (rtrim($pathinfo, '/') === '/moncompte/createcours') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_create_cours');
                    }

                    return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::createcoursAction',  '_route' => 'xiaomei_xiaomei_create_cours',);
                }

                // xiaomei_xiaomei_cancelcours
                if (0 === strpos($pathinfo, '/moncompte/cancelcours') && preg_match('#^/moncompte/cancelcours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_cancelcours')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::cancelcoursAction',));
                }

            }

        }

        // xiaomei_xiaomei_formateur
        if (0 === strpos($pathinfo, '/formateur') && preg_match('#^/formateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_formateur')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::formateurAction',));
        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // xiaomei_xiaomei_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'xiaomei_xiaomei_register');
                }

                return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::registerAction',  '_route' => 'xiaomei_xiaomei_register',);
            }

            if (0 === strpos($pathinfo, '/inscriptioncours')) {
                // xiaomei_xiaomei_inscriptioncours
                if (preg_match('#^/inscriptioncours/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_inscriptioncours')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::registercoursAction',));
                }

                // xiaomei_xiaomei_inscriptioncoursconfirmer
                if (0 === strpos($pathinfo, '/inscriptioncoursconfirmer') && preg_match('#^/inscriptioncoursconfirmer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xiaomei_xiaomei_inscriptioncoursconfirmer')), array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\CoursController::registercoursconfirmerAction',));
                }

            }

        }

        // login
        if (rtrim($pathinfo, '/') === '/connexion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'Xiaomei\\XiaomeiBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

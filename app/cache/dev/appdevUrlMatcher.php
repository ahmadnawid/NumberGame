<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _assetic_8f3ebe8
        if ($pathinfo === '/css/8f3ebe8.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8f3ebe8',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8f3ebe8',);
        }

        // _assetic_8f3ebe8_0
        if ($pathinfo === '/css/8f3ebe8_part_1_body_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8f3ebe8',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8f3ebe8_0',);
        }

        // _assetic_8f3ebe8_1
        if ($pathinfo === '/css/8f3ebe8_part_1_formStyle_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8f3ebe8',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8f3ebe8_1',);
        }

        // _assetic_8f3ebe8_2
        if ($pathinfo === '/css/8f3ebe8_part_1_style_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8f3ebe8',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8f3ebe8_2',);
        }

        // _assetic_dfb42ef
        if ($pathinfo === '/css/dfb42ef.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dfb42ef',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_dfb42ef',);
        }

        // _assetic_dfb42ef_0
        if ($pathinfo === '/css/dfb42ef_part_1_body_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dfb42ef',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_dfb42ef_0',);
        }

        // _assetic_dfb42ef_1
        if ($pathinfo === '/css/dfb42ef_part_1_formStyle_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dfb42ef',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_dfb42ef_1',);
        }

        // _assetic_dfb42ef_2
        if ($pathinfo === '/css/dfb42ef_part_1_style_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dfb42ef',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_dfb42ef_2',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // GameGuessNumberBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'GameGuessNumberBundle_homepage'));
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\MainController::loginAction',  '_route' => 'login',);
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\MainController::indexAction',  '_route' => 'index',);
        }

        // save
        if (0 === strpos($pathinfo, '/save') && preg_match('#^/save/(?P<name>[^/]+?)/(?P<score>[^/]+?)/(?P<type>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\MainController::saveAction',)), array('_route' => 'save'));
        }

        // show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<gtype>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\MainController::showAction',)), array('_route' => 'show'));
        }

        // help
        if ($pathinfo === '/help') {
            return array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\MainController::helpAction',  '_route' => 'help',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Game\\GuessNumberBundle\\Controller\\MainController::logOutAction',  '_route' => 'logout',);
        }

        // AcmeTaskBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AcmeTaskBundle_homepage'));
        }

        // task_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::newAction',  '_route' => 'task_new',);
        }

        // SepaBlogBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'SepaBlogBundle_homepage'));
        }

        // blog_list
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\BlogController::listAction',  'color' => 'green',  '_route' => 'blog_list',);
        }

        // blog_show
        if (0 === strpos($pathinfo, '/blog/show') && preg_match('#^/blog/show/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\BlogController::showAction',)), array('_route' => 'blog_show'));
        }

        // post
        if (rtrim($pathinfo, '/') === '/post') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'post');
            }
            return array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
        }

        // post_show
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::showAction',)), array('_route' => 'post_show'));
        }

        // post_new
        if ($pathinfo === '/post/new') {
            return array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
        }

        // post_create
        if ($pathinfo === '/post/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_create;
            }
            return array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::createAction',  '_route' => 'post_create',);
        }
        not_post_create:

        // post_edit
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::editAction',)), array('_route' => 'post_edit'));
        }

        // post_update
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::updateAction',)), array('_route' => 'post_update'));
        }
        not_post_update:

        // post_delete
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sepa\\BlogBundle\\Controller\\PostController::deleteAction',)), array('_route' => 'post_delete'));
        }
        not_post_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = [];
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), ['HEAD', 'GET'], true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/') {
            $pathinfo = $trimmedPathinfo === $pathinfo ? $pathinfo.'/' : $trimmedPathinfo;
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $pathinfo, array &$allow = [], array &$allowSchemes = []): array
    {
        $allow = $allowSchemes = [];
        $pathinfo = rawurldecode($pathinfo) ?: '/';
        $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo) {
            default:
                $routes = [
                    '/admin/option' => [['_route' => 'admin.option.index', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], null, ['GET' => 0], null, true],
                    '/admin/option/new' => [['_route' => 'admin.option.new', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false],
                    '/admin' => [['_route' => 'admin.property.index', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], null, null, null, false],
                    '/admin/property/create' => [['_route' => 'admin.property.new', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], null, null, null, false],
                    '/' => [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false],
                    '/biens' => [['_route' => 'property.index', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, false],
                    '/login' => [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false],
                    '/_profiler' => [['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true],
                    '/_profiler/search' => [['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false],
                    '/_profiler/search_bar' => [['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false],
                    '/_profiler/phpinfo' => [['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false],
                    '/_profiler/open' => [['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false],
                    '/logout' => [['_route' => 'logout'], null, null, null, false],
                ];

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];
                if ('/' !== $pathinfo && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                    if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                        return $allow = $allowSchemes = [];
                    }
                    break;
                }

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = [
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|option/([^/]++)(?'
                            .'|/edit(*:40)'
                            .'|(*:47)'
                        .')'
                        .'|p(?'
                            .'|icture/([^/]++)(*:74)'
                            .'|roperty/([^/]++)(?'
                                .'|(*:100)'
                            .')'
                        .')'
                    .')'
                    .'|/biens/([a-z0-9\\-]*)\\-([^/]++)(*:141)'
                    .'|/media/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:203)'
                        .'|([A-z0-9_-]*)/(.+)(*:229)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:269)'
                        .'|wdt/([^/]++)(*:289)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:335)'
                                .'|router(*:349)'
                                .'|exception(?'
                                    .'|(*:369)'
                                    .'|\\.css(*:382)'
                                .')'
                            .')'
                            .'|(*:392)'
                        .')'
                    .')'
                .')/?$}sD',
        ];

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 100:
                        // admin.property.edit
                        if ($trimmedPathinfo !== $pathinfo) {
                            goto not_adminpropertyedit;
                        }

                        $matches = ['id' => $matches[1] ?? null];

                        $ret = $this->mergeDefaults(['_route' => 'admin.property.edit'] + $matches, ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit']);
                        if (!isset(($a = ['GET' => 0, 'POST' => 1])[$canonicalMethod])) {
                            $allow += $a;
                            goto not_adminpropertyedit;
                        }

                        return $ret;
                        not_adminpropertyedit:

                        // admin.property.delete
                        if ($trimmedPathinfo !== $pathinfo) {
                            goto not_adminpropertydelete;
                        }

                        $ret = $this->mergeDefaults(['_route' => 'admin.property.delete'] + $matches, ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete']);
                        if (!isset(($a = ['DELETE' => 0])[$requestMethod])) {
                            $allow += $a;
                            goto not_adminpropertydelete;
                        }

                        return $ret;
                        not_adminpropertydelete:

                        break;
                    default:
                        $routes = [
                            40 => [['_route' => 'admin.option.edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false],
                            47 => [['_route' => 'admin.option.delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], ['id'], ['DELETE' => 0], null, false, true],
                            74 => [['_route' => 'admin.picture.delete', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::delete'], ['id'], ['DELETE' => 0], null, false, true],
                            141 => [['_route' => 'property.show', '_controller' => 'App\\Controller\\PropertyController::show'], ['slug', 'id'], null, null, false, true],
                            203 => [['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true],
                            229 => [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true],
                            269 => [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true],
                            289 => [['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true],
                            335 => [['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false],
                            349 => [['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false],
                            369 => [['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false],
                            382 => [['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false],
                            392 => [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true],
                        ];

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash, $hasTrailingVar) = $routes[$m];

                        $hasTrailingVar = $trimmedPathinfo !== $pathinfo && $hasTrailingVar;
                        if ('/' !== $pathinfo && !$hasTrailingVar && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                            if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                                return $allow = $allowSchemes = [];
                            }
                            break;
                        }
                        if ($hasTrailingSlash && $hasTrailingVar && preg_match($regex, rtrim($matchedPathinfo, '/') ?: '/', $n) && $m === (int) $n['MARK']) {
                            $matches = $n;
                        }

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (392 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return [];
    }
}

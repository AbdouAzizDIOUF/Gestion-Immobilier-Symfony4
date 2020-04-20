<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'admin.option.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], [], [['text', '/admin/option/']], [], []],
        'admin.option.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], [], [['text', '/admin/option/new']], [], []],
        'admin.option.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/option']], [], []],
        'admin.option.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/option']], [], []],
        'admin.picture.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPictureController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/picture']], [], []],
        'admin.property.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], [], [['text', '/admin']], [], []],
        'admin.property.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], [], [['text', '/admin/property/create']], [], []],
        'admin.property.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/property']], [], []],
        'admin.property.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/property']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'property.index' => [[], ['_controller' => 'App\\Controller\\PropertyController::index'], [], [['text', '/biens']], [], []],
        'property.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\PropertyController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id'], ['variable', '/', '[a-z0-9\\-]*', 'slug'], ['text', '/biens']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[^/]++', 'hash'], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
        'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        'logout' => [[], [], [], [['text', '/logout']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

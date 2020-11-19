<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::recherche'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_default_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/ligne' => [[['_route' => 'ligne_index', '_controller' => 'App\\Controller\\LigneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/new' => [[['_route' => 'ligne_new', '_controller' => 'App\\Controller\\LigneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/path' => [[['_route' => 'path_index', '_controller' => 'App\\Controller\\PathController::index'], null, ['GET' => 0], null, true, false, null]],
        '/path/new' => [[['_route' => 'path_new', '_controller' => 'App\\Controller\\PathController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SecurityController::signUp'], null, null, null, false, false, null]],
        '/site' => [[['_route' => 'site_index', '_controller' => 'App\\Controller\\SiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/site/new' => [[['_route' => 'site_new', '_controller' => 'App\\Controller\\SiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/station' => [[['_route' => 'station_index', '_controller' => 'App\\Controller\\StationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/station/new' => [[['_route' => 'station_new', '_controller' => 'App\\Controller\\StationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/timing' => [[['_route' => 'timing_index', '_controller' => 'App\\Controller\\TimingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/timing/new' => [[['_route' => 'timing_new', '_controller' => 'App\\Controller\\TimingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/ligne/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/path/([^/]++)(?'
                    .'|(*:234)'
                    .'|/edit(*:247)'
                    .'|(*:255)'
                .')'
                .'|/site/([^/]++)(?'
                    .'|(*:281)'
                    .'|/edit(*:294)'
                    .'|(*:302)'
                .')'
                .'|/a(?'
                    .'|dmin/station/([^/]++)(?'
                        .'|(*:340)'
                        .'|/edit(*:353)'
                        .'|(*:361)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:403)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:434)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:470)'
                            .'|stations(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:507)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:545)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/timing/([^/]++)(?'
                    .'|(*:577)'
                    .'|/edit(*:590)'
                    .'|(*:598)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'ligne_show', '_controller' => 'App\\Controller\\LigneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'ligne_edit', '_controller' => 'App\\Controller\\LigneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'ligne_delete', '_controller' => 'App\\Controller\\LigneController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        234 => [[['_route' => 'path_show', '_controller' => 'App\\Controller\\PathController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'path_edit', '_controller' => 'App\\Controller\\PathController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'path_delete', '_controller' => 'App\\Controller\\PathController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        281 => [[['_route' => 'site_show', '_controller' => 'App\\Controller\\SiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'site_edit', '_controller' => 'App\\Controller\\SiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'site_delete', '_controller' => 'App\\Controller\\SiteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        340 => [[['_route' => 'station_show', '_controller' => 'App\\Controller\\StationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'station_edit', '_controller' => 'App\\Controller\\StationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [[['_route' => 'station_delete', '_controller' => 'App\\Controller\\StationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        403 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        434 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        470 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        507 => [
            [['_route' => 'api_stations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_stations_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        545 => [
            [['_route' => 'api_stations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_stations_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_stations_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_stations_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        577 => [[['_route' => 'timing_show', '_controller' => 'App\\Controller\\TimingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        590 => [[['_route' => 'timing_edit', '_controller' => 'App\\Controller\\TimingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        598 => [
            [['_route' => 'timing_delete', '_controller' => 'App\\Controller\\TimingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

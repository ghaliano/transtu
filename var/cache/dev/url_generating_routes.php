<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\ApiController::recherche'], [], [['text', '/api']], [], []],
    'app_default_index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'ligne_index' => [[], ['_controller' => 'App\\Controller\\LigneController::index'], [], [['text', '/ligne/']], [], []],
    'ligne_new' => [[], ['_controller' => 'App\\Controller\\LigneController::new'], [], [['text', '/ligne/new']], [], []],
    'ligne_show' => [['id'], ['_controller' => 'App\\Controller\\LigneController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ligne']], [], []],
    'ligne_edit' => [['id'], ['_controller' => 'App\\Controller\\LigneController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ligne']], [], []],
    'ligne_delete' => [['id'], ['_controller' => 'App\\Controller\\LigneController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ligne']], [], []],
    'path_index' => [[], ['_controller' => 'App\\Controller\\PathController::index'], [], [['text', '/path/']], [], []],
    'path_new' => [[], ['_controller' => 'App\\Controller\\PathController::new'], [], [['text', '/path/new']], [], []],
    'path_show' => [['id'], ['_controller' => 'App\\Controller\\PathController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/path']], [], []],
    'path_edit' => [['id'], ['_controller' => 'App\\Controller\\PathController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/path']], [], []],
    'path_delete' => [['id'], ['_controller' => 'App\\Controller\\PathController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/path']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_signup' => [[], ['_controller' => 'App\\Controller\\SecurityController::signUp'], [], [['text', '/signup']], [], []],
    'site_index' => [[], ['_controller' => 'App\\Controller\\SiteController::index'], [], [['text', '/site/']], [], []],
    'site_new' => [[], ['_controller' => 'App\\Controller\\SiteController::new'], [], [['text', '/site/new']], [], []],
    'site_show' => [['id'], ['_controller' => 'App\\Controller\\SiteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/site']], [], []],
    'site_edit' => [['id'], ['_controller' => 'App\\Controller\\SiteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/site']], [], []],
    'site_delete' => [['id'], ['_controller' => 'App\\Controller\\SiteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/site']], [], []],
    'station_index' => [[], ['_controller' => 'App\\Controller\\StationController::index'], [], [['text', '/admin/station/']], [], []],
    'station_new' => [[], ['_controller' => 'App\\Controller\\StationController::new'], [], [['text', '/admin/station/new']], [], []],
    'station_show' => [['id'], ['_controller' => 'App\\Controller\\StationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/station']], [], []],
    'station_edit' => [['id'], ['_controller' => 'App\\Controller\\StationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/station']], [], []],
    'station_delete' => [['id'], ['_controller' => 'App\\Controller\\StationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/station']], [], []],
    'timing_index' => [[], ['_controller' => 'App\\Controller\\TimingController::index'], [], [['text', '/timing/']], [], []],
    'timing_new' => [[], ['_controller' => 'App\\Controller\\TimingController::new'], [], [['text', '/timing/new']], [], []],
    'timing_show' => [['id'], ['_controller' => 'App\\Controller\\TimingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/timing']], [], []],
    'timing_edit' => [['id'], ['_controller' => 'App\\Controller\\TimingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/timing']], [], []],
    'timing_delete' => [['id'], ['_controller' => 'App\\Controller\\TimingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/timing']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_stations_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/stations']], [], []],
    'api_stations_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/stations']], [], []],
    'api_stations_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/stations']], [], []],
    'api_stations_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/stations']], [], []],
    'api_stations_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/stations']], [], []],
    'api_stations_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Station', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/stations']], [], []],
];
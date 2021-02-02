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
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'daily_fridge_index', '_controller' => 'App\\Controller\\DailyFridgeController::index'], null, null, null, false, false, null]],
        '/daily_fridge_accueil' => [[['_route' => 'daily_fridge_accueil', '_controller' => 'App\\Controller\\DailyFridgeController::accueil'], null, null, null, false, false, null]],
        '/daily_fridge_inscription2' => [[['_route' => 'daily_fridge_eric', '_controller' => 'App\\Controller\\DailyFridgeController::create'], null, null, null, false, false, null]],
        '/daily_fridge_Mes_Produits' => [[['_route' => 'daily_fridge_Mes_Produits', '_controller' => 'App\\Controller\\DailyFridgeController::liste_produit'], null, null, null, false, false, null]],
        '/daily_fridge_Mon_Frigo' => [[['_route' => 'daily_fridge_Mon_Frigo', '_controller' => 'App\\Controller\\DailyFridgeController::frigo'], null, null, null, false, false, null]],
        '/daily_fridge_Mes_Recettes' => [[['_route' => 'daily_fridge_Mes_Recettes', '_controller' => 'App\\Controller\\DailyFridgeController::recette'], null, null, null, false, false, null]],
        '/daily_fridge_Info_Recette' => [[['_route' => 'daily_fridge_Info_Recette', '_controller' => 'App\\Controller\\DailyFridgeController::info_recette'], null, null, null, false, false, null]],
        '/daily_fridge_Scan' => [[['_route' => 'daily_fridge_Scan', '_controller' => 'App\\Controller\\DailyFridgeController::scan'], null, null, null, false, false, null]],
        '/daily_fridge_mes_produits_perimes' => [[['_route' => 'mes_produits_perimes', '_controller' => 'App\\Controller\\DailyFridgeController::mes_produits_perimes'], null, null, null, false, false, null]],
        '/daily_fridge_mention_legal' => [[['_route' => 'daily_fridge_mention_legal', '_controller' => 'App\\Controller\\DailyFridgeController::mention_legal'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/test/([^/]++)/([^/]++)(*:192)'
                .'|/daily_fridge_Mon_Frigo_(?'
                    .'|detail/([^/]++)(*:242)'
                    .'|update_(?'
                        .'|consommer/([^/]++)(*:278)'
                        .'|perimer/([^/]++)(*:302)'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:366)'
                    .'|([A-z0-9_-]*)/(.+)(*:392)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'test', '_controller' => 'App\\Controller\\DailyFridgeController::test'], ['varTest', 'varTest2'], null, null, false, true, null]],
        242 => [[['_route' => 'daily_fridge_Mon_Frigo_detail', '_controller' => 'App\\Controller\\DailyFridgeController::frigo_detail'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'daily_fridge_Mon_Frigo_update_consommer', '_controller' => 'App\\Controller\\DailyFridgeController::updateHisto_consommer'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'daily_fridge_Mon_Frigo_update_perimer', '_controller' => 'App\\Controller\\DailyFridgeController::updateHisto_perimer'], ['id'], null, null, false, true, null]],
        366 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        392 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

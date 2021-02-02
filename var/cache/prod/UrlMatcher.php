<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/test/([^/]++)/([^/]++)(*:30)'
                .'|/daily_fridge_Mon_Frigo_(?'
                    .'|detail/([^/]++)(*:79)'
                    .'|update_(?'
                        .'|consommer/([^/]++)(*:114)'
                        .'|perimer/([^/]++)(*:138)'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:202)'
                    .'|([A-z0-9_-]*)/(.+)(*:228)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'test', '_controller' => 'App\\Controller\\DailyFridgeController::test'], ['varTest', 'varTest2'], null, null, false, true, null]],
        79 => [[['_route' => 'daily_fridge_Mon_Frigo_detail', '_controller' => 'App\\Controller\\DailyFridgeController::frigo_detail'], ['id'], null, null, false, true, null]],
        114 => [[['_route' => 'daily_fridge_Mon_Frigo_update_consommer', '_controller' => 'App\\Controller\\DailyFridgeController::updateHisto_consommer'], ['id'], null, null, false, true, null]],
        138 => [[['_route' => 'daily_fridge_Mon_Frigo_update_perimer', '_controller' => 'App\\Controller\\DailyFridgeController::updateHisto_perimer'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        228 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

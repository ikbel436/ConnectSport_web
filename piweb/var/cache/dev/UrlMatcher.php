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
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/deleteall' => [[['_route' => 'cart_deleteall', '_controller' => 'App\\Controller\\CartController::deleteall'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/magasin' => [[['_route' => 'app_magasin_index', '_controller' => 'App\\Controller\\MagasinController::index'], null, ['GET' => 0], null, true, false, null]],
        '/magasin/new' => [[['_route' => 'app_magasin_new', '_controller' => 'App\\Controller\\MagasinController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/magasin/magasin/back' => [[['_route' => 'app_magasin_back', '_controller' => 'App\\Controller\\MagasinController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/magasin/magasin/excel' => [[['_route' => 'excel', '_controller' => 'App\\Controller\\MagasinController::excel'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/produit/fan' => [[['_route' => 'app_produit_fan', '_controller' => 'App\\Controller\\ProduitController::index1'], null, ['GET' => 0], null, false, false, null]],
        '/produit/produit/back' => [[['_route' => 'app_produit_back', '_controller' => 'App\\Controller\\ProduitController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/produit/s/searchProduit' => [[['_route' => 'searchProduit', '_controller' => 'App\\Controller\\ProduitController::searchArticle'], null, null, null, false, false, null]],
        '/produit/produit/statistique' => [[['_route' => 'Produits_stats', '_controller' => 'App\\Controller\\ProduitController::statistiques'], null, null, null, false, false, null]],
        '/produit/produit/tri' => [[['_route' => 'triNom', '_controller' => 'App\\Controller\\ProduitController::triNom'], null, null, null, false, false, null]],
        '/produit/produit/tri1' => [[['_route' => 'triPrix', '_controller' => 'App\\Controller\\ProduitController::triPrix'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'display_front', '_controller' => 'App\\Controller\\ProduitFController::index'], null, null, null, false, false, null]],
        '/produitfront' => [[['_route' => 'ev_front_aff', '_controller' => 'App\\Controller\\ProduitFController::afficher'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:193)'
                        .'|remove/([^/]++)(*:216)'
                        .'|delete/([^/]++)(*:239)'
                    .')'
                    .'|ommande/([^/]++)(?'
                        .'|(*:267)'
                        .'|/edit(*:280)'
                        .'|(*:288)'
                    .')'
                .')'
                .'|/magasin/([^/]++)(?'
                    .'|(*:318)'
                    .'|/edit(*:331)'
                    .'|(*:339)'
                .')'
                .'|/produit/(?'
                    .'|(\\d+)(*:365)'
                    .'|([^/]++)(?'
                        .'|/edit(*:389)'
                        .'|(*:397)'
                    .')'
                    .'|list(*:410)'
                    .'|qr/([^/]++)(*:429)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:466)'
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
        193 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idc'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idc'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idc'], ['POST' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_magasin_show', '_controller' => 'App\\Controller\\MagasinController::show'], ['idm'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'app_magasin_edit', '_controller' => 'App\\Controller\\MagasinController::edit'], ['idm'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'app_magasin_delete', '_controller' => 'App\\Controller\\MagasinController::delete'], ['idm'], ['POST' => 0], null, false, true, null]],
        365 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idp'], ['GET' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idp'], ['POST' => 0], null, false, true, null]],
        410 => [[['_route' => 'produit_list', '_controller' => 'App\\Controller\\ProduitController::list'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        429 => [[['_route' => 'qr', '_controller' => 'App\\Controller\\ProduitController::qr'], ['id'], null, null, false, true, null]],
        466 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/bienvenue' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\ArticleController::accueil'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'contact_submit', '_controller' => 'App\\Controller\\ContactController::handleContact'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'default', '_controller' => 'App\\Controller\\ArticleController::accueil'], null, ['GET' => 0], null, false, false, null],
        ],
        '/test-email' => [[['_route' => 'test_email', '_controller' => 'App\\Controller\\EmailTestController::sendTestEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'utilisateur_liste', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateurs/create' => [[['_route' => 'utilisateur_create', '_controller' => 'App\\Controller\\UtilisateurController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateurs/profil' => [[['_route' => 'utilisateur_profil', '_controller' => 'App\\Controller\\UtilisateurController::profil'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'article_liste', '_controller' => 'App\\Controller\\ArticleController::liste'], null, ['GET' => 0], null, false, false, null]],
        '/articles/ajouter' => [[['_route' => 'ajouter_article', '_controller' => 'App\\Controller\\ArticleController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article(?'
                    .'|/(?'
                        .'|([^/]++)(*:30)'
                        .'|demander/([^/]++)(*:54)'
                        .'|confirmer/([^/]++)(*:79)'
                        .'|annuler/([^/]++)(*:102)'
                    .')'
                    .'|s/([^/]++)/(?'
                        .'|modifier(*:133)'
                        .'|supprimer(*:150)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:196)'
                .'|/utilisateurs/([^/]++)/(?'
                    .'|modifier(*:238)'
                    .'|delete(*:252)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'details', '_controller' => 'App\\Controller\\ArticleController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        54 => [[['_route' => 'article_demander', '_controller' => 'App\\Controller\\ArticleController::demanderArticle'], ['id'], null, null, false, true, null]],
        79 => [[['_route' => 'article_confirmer', '_controller' => 'App\\Controller\\ArticleController::confirmerReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        102 => [[['_route' => 'article_annuler', '_controller' => 'App\\Controller\\ArticleController::annulerReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        133 => [[['_route' => 'article_modifier', '_controller' => 'App\\Controller\\ArticleController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        150 => [[['_route' => 'article_supprimer', '_controller' => 'App\\Controller\\ArticleController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        196 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        238 => [[['_route' => 'utilisateur_modifier', '_controller' => 'App\\Controller\\UtilisateurController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [
            [['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

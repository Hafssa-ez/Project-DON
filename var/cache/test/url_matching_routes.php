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
            [['_route' => 'app_logout'], null, null, null, false, false, null],
        ],
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
                .'|/a(?'
                    .'|rticle(?'
                        .'|/(?'
                            .'|([^/]++)(*:33)'
                            .'|demander/([^/]++)(*:57)'
                            .'|confirmer/([^/]++)(*:82)'
                            .'|annuler/([^/]++)(*:105)'
                            .'|([^/]++)/commentaire(?'
                                .'|s(*:137)'
                                .'|/ajouter(*:153)'
                            .')'
                        .')'
                        .'|s/([^/]++)/(?'
                            .'|modifier(*:185)'
                            .'|supprimer(*:202)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|articles/([^/]++)/commentaires(?'
                            .'|(*:251)'
                        .')'
                        .'|commentaires/([^/]++)(?'
                            .'|(*:284)'
                        .')'
                    .')'
                .')'
                .'|/commentaire/([^/]++)/(?'
                    .'|modifier(*:328)'
                    .'|supprimer(*:345)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:390)'
                .'|/utilisateurs/([^/]++)/(?'
                    .'|modifier(*:432)'
                    .'|delete(*:446)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'details', '_controller' => 'App\\Controller\\ArticleController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        57 => [[['_route' => 'article_demander', '_controller' => 'App\\Controller\\ArticleController::demanderArticle'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'article_confirmer', '_controller' => 'App\\Controller\\ArticleController::confirmerReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        105 => [[['_route' => 'article_annuler', '_controller' => 'App\\Controller\\ArticleController::annuler'], ['id'], ['POST' => 0], null, false, true, null]],
        137 => [[['_route' => 'commentaire_liste', '_controller' => 'App\\Controller\\CommentaireController::listeCommentaires'], ['id'], ['GET' => 0], null, false, false, null]],
        153 => [[['_route' => 'commentaire_ajouter_render', '_controller' => 'App\\Controller\\CommentaireController::ajouterCommentaireRender'], ['id'], null, null, false, false, null]],
        185 => [[['_route' => 'article_modifier', '_controller' => 'App\\Controller\\ArticleController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [[['_route' => 'article_supprimer', '_controller' => 'App\\Controller\\ArticleController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        251 => [
            [['_route' => 'api_commentaires_lister', '_controller' => 'App\\Controller\\CommentaireController::listerCommentairesApi'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_commentaires_ajouter', '_controller' => 'App\\Controller\\CommentaireController::ajouterCommentaireApi'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        284 => [
            [['_route' => 'api_commentaires_modifier', '_controller' => 'App\\Controller\\CommentaireController::modifierCommentaireApi'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_commentaires_supprimer', '_controller' => 'App\\Controller\\CommentaireController::supprimerCommentaireApi'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        328 => [[['_route' => 'commentaire_modifier_render', '_controller' => 'App\\Controller\\CommentaireController::modifierCommentaireRender'], ['id'], null, null, false, false, null]],
        345 => [[['_route' => 'commentaire_supprimer_render', '_controller' => 'App\\Controller\\CommentaireController::supprimerCommentaireRender'], ['id'], ['POST' => 0], null, false, false, null]],
        390 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        432 => [[['_route' => 'utilisateur_modifier', '_controller' => 'App\\Controller\\UtilisateurController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [
            [['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

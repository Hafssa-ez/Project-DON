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
        '/_wdt/styles.css' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|rticle(?'
                        .'|/(?'
                            .'|([^/]++)(*:228)'
                            .'|demander/([^/]++)(*:253)'
                            .'|confirmer/([^/]++)(*:279)'
                            .'|annuler/([^/]++)(*:303)'
                            .'|([^/]++)/commentaire(?'
                                .'|s(*:335)'
                                .'|/ajouter(*:351)'
                            .')'
                        .')'
                        .'|s/([^/]++)/(?'
                            .'|modifier(*:383)'
                            .'|supprimer(*:400)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|articles/([^/]++)/commentaires(?'
                            .'|(*:449)'
                        .')'
                        .'|commentaires/([^/]++)(?'
                            .'|(*:482)'
                        .')'
                    .')'
                .')'
                .'|/commentaire/([^/]++)/(?'
                    .'|modifier(*:526)'
                    .'|supprimer(*:543)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:588)'
                .'|/utilisateurs/([^/]++)/(?'
                    .'|modifier(*:630)'
                    .'|delete(*:644)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'details', '_controller' => 'App\\Controller\\ArticleController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'article_demander', '_controller' => 'App\\Controller\\ArticleController::demanderArticle'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'article_confirmer', '_controller' => 'App\\Controller\\ArticleController::confirmerReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'article_annuler', '_controller' => 'App\\Controller\\ArticleController::annuler'], ['id'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'commentaire_liste', '_controller' => 'App\\Controller\\CommentaireController::listeCommentaires'], ['id'], ['GET' => 0], null, false, false, null]],
        351 => [[['_route' => 'commentaire_ajouter_render', '_controller' => 'App\\Controller\\CommentaireController::ajouterCommentaireRender'], ['id'], null, null, false, false, null]],
        383 => [[['_route' => 'article_modifier', '_controller' => 'App\\Controller\\ArticleController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'article_supprimer', '_controller' => 'App\\Controller\\ArticleController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        449 => [
            [['_route' => 'api_commentaires_lister', '_controller' => 'App\\Controller\\CommentaireController::listerCommentairesApi'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_commentaires_ajouter', '_controller' => 'App\\Controller\\CommentaireController::ajouterCommentaireApi'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        482 => [
            [['_route' => 'api_commentaires_modifier', '_controller' => 'App\\Controller\\CommentaireController::modifierCommentaireApi'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_commentaires_supprimer', '_controller' => 'App\\Controller\\CommentaireController::supprimerCommentaireApi'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        526 => [[['_route' => 'commentaire_modifier_render', '_controller' => 'App\\Controller\\CommentaireController::modifierCommentaireRender'], ['id'], null, null, false, false, null]],
        543 => [[['_route' => 'commentaire_supprimer_render', '_controller' => 'App\\Controller\\CommentaireController::supprimerCommentaireRender'], ['id'], ['POST' => 0], null, false, false, null]],
        588 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        630 => [[['_route' => 'utilisateur_modifier', '_controller' => 'App\\Controller\\UtilisateurController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        644 => [
            [['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

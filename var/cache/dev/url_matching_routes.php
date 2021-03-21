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
        '/author' => [[['_route' => 'read_author', '_controller' => 'App\\Controller\\AuthorController::readAuthor'], null, ['GET' => 0], null, false, false, null]],
        '/admin/author' => [[['_route' => 'admin_read_author', '_controller' => 'App\\Controller\\AuthorController::readAuthorAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create/author' => [[['_route' => 'admin_create_author', '_controller' => 'App\\Controller\\AuthorController::createAuthor'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search/book' => [[['_route' => 'show_book_search', '_controller' => 'App\\Controller\\BookController::searchBook'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_read_book', '_controller' => 'App\\Controller\\BookController::readBook'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create/book' => [[['_route' => 'admin_create_book', '_controller' => 'App\\Controller\\BookController::createBook'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart/list' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::cartList'], null, ['GET' => 0], null, false, false, null]],
        '/cart/remove' => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], null, ['POST' => 0], null, false, false, null]],
        '/editor' => [[['_route' => 'read_editor', '_controller' => 'App\\Controller\\EditorController::readEditor'], null, ['GET' => 0], null, false, false, null]],
        '/admin/editor' => [[['_route' => 'admin_read_editor', '_controller' => 'App\\Controller\\EditorController::readEditorAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create/editor' => [[['_route' => 'admin_create_editor', '_controller' => 'App\\Controller\\EditorController::createAuthor'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'read_gender', '_controller' => 'App\\Controller\\GenderController::read'], null, ['GET' => 0], null, false, false, null]],
        '/admin/gender' => [[['_route' => 'admin_read_gender', '_controller' => 'App\\Controller\\GenderController::readGenderAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create/gender' => [[['_route' => 'admin_create_gender', '_controller' => 'App\\Controller\\GenderController::createGender'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/create/group' => [[['_route' => 'admin_create_group', '_controller' => 'App\\Controller\\GroupController::createGroup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/admin/review' => [[['_route' => 'admin_read_review', '_controller' => 'App\\Controller\\ReviewController::readReviewAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/create/review' => [[['_route' => 'admin_create_review', '_controller' => 'App\\Controller\\ReviewController::createReview'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_read_user', '_controller' => 'App\\Controller\\UserController::readUserAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/create' => [[['_route' => 'admin_create_user', '_controller' => 'App\\Controller\\UserController::createUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\UserController::contact'], null, ['GET' => 0], null, false, false, null]],
        '/mentions_legales' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\UserController::mentions'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|uthor/author/([^/]++)(*:195)'
                    .'|dmin/(?'
                        .'|u(?'
                            .'|pdate/(?'
                                .'|author/(\\d+)(*:236)'
                                .'|book/(\\d+)(*:254)'
                                .'|editor/(\\d+)(*:274)'
                                .'|gender/(\\d+)(*:294)'
                                .'|review/(\\d+)(*:314)'
                            .')'
                            .'|ser/(?'
                                .'|update/(\\d+)(*:342)'
                                .'|delete/(\\d+)(*:362)'
                            .')'
                        .')'
                        .'|delete/(?'
                            .'|author/(\\d+)(*:394)'
                            .'|book/(\\d+)(*:412)'
                            .'|editor/(\\d+)(*:432)'
                            .'|gender/(\\d+)(*:452)'
                            .'|review/(\\d+)(*:472)'
                        .')'
                    .')'
                .')'
                .'|/cart_add/(\\d+)(*:498)'
                .'|/editor/editor/([^/]++)(*:529)'
                .'|/gender/gender/([^/]++)(*:560)'
                .'|/review/(\\d+)(*:581)'
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
        195 => [[['_route' => 'show_author_book', '_controller' => 'App\\Controller\\AuthorController::ShowAuthorBook'], ['slug'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'admin_update_author', '_controller' => 'App\\Controller\\AuthorController::updateAuthor'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        254 => [[['_route' => 'admin_update_book', '_controller' => 'App\\Controller\\BookController::updateBook'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        274 => [[['_route' => 'admin_update_editor', '_controller' => 'App\\Controller\\EditorController::updateEditor'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        294 => [[['_route' => 'admin_update_gender', '_controller' => 'App\\Controller\\GenderController::updateGender'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        314 => [[['_route' => 'admin_update_review', '_controller' => 'App\\Controller\\ReviewController::updateReview'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        342 => [[['_route' => 'admin_update_user', '_controller' => 'App\\Controller\\UserController::updateUser'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, true, null]],
        362 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        394 => [[['_route' => 'admin_delete_author', '_controller' => 'App\\Controller\\AuthorController::deleteAuthor'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        412 => [[['_route' => 'admin_delete_book', '_controller' => 'App\\Controller\\BookController::deleteBook'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        432 => [[['_route' => 'admin_delete_editor', '_controller' => 'App\\Controller\\EditorController::deleteEditor'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        452 => [[['_route' => 'admin_delete_gender', '_controller' => 'App\\Controller\\GenderController::deleteGender'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        472 => [[['_route' => 'admin_delete_review', '_controller' => 'App\\Controller\\ReviewController::deleteReview'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        498 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::cartAdd'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'show_editor_book', '_controller' => 'App\\Controller\\EditorController::ShowAuthorBook'], ['slug'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'show_gender_book', '_controller' => 'App\\Controller\\GenderController::ShowGenderBook'], ['slug'], ['GET' => 0], null, false, true, null]],
        581 => [
            [['_route' => 'show_review', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/login' => [[['_route' => 'auth-login'], null, null, null, false, false, null]],
        '/api/register' => [[['_route' => 'auth-register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/tickets' => [
            [['_route' => 'ticket-index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'ticket-store', '_controller' => 'App\\Controller\\TicketController::store'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/tickets/([^/]++)(?'
                    .'|(*:66)'
                    .'|/(?'
                        .'|status(*:83)'
                        .'|messages(?'
                            .'|(*:101)'
                            .'|/([^/]++)(?'
                                .'|(*:121)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [
            [['_route' => 'ticket-show', '_controller' => 'App\\Controller\\TicketController::show'], ['ticketId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'ticket-update', '_controller' => 'App\\Controller\\TicketController::update'], ['ticketId'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'ticket-destroy', '_controller' => 'App\\Controller\\TicketController::destroy'], ['ticketId'], ['DELETE' => 0], null, false, true, null],
        ],
        83 => [[['_route' => 'status-update', '_controller' => 'App\\Controller\\TicketStatusController::update'], ['ticketId'], ['PUT' => 0], null, false, false, null]],
        101 => [
            [['_route' => 'message-index', '_controller' => 'App\\Controller\\MessageController::index'], ['ticketId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'message-store', '_controller' => 'App\\Controller\\MessageController::store'], ['ticketId'], ['POST' => 0], null, false, false, null],
        ],
        121 => [
            [['_route' => 'message-show', '_controller' => 'App\\Controller\\MessageController::show'], ['ticketId', 'messageId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'message-update', '_controller' => 'App\\Controller\\MessageController::update'], ['ticketId', 'messageId'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'message-destroy', '_controller' => 'App\\Controller\\MessageController::destroy'], ['ticketId', 'messageId'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

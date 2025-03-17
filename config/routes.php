<?php

$routes[] = ['Pages', 'login'];

/*
 * Broadcasts
 */
$routes['broadcasts'] = [ 'Broadcasts', 'index' ];
$routes['show-broadcast'] = [ 'Broadcasts', 'show' ];
$routes['create-broadcast'] = [ 'Broadcasts', 'create' ];
$routes['update-broadcast'] = [ 'Broadcasts', 'update' ];
$routes['delete-broadcast'] = [ 'Broadcasts', 'delete' ];

/*
 * Pages
 */
$routes['login'] = [ 'Pages', 'login' ];
$routes['logout'] = [ 'Pages', 'logout' ];

/*
 * Platforms
 */
$routes['platforms'] = [ 'Platforms', 'index' ];
$routes['show-platform'] = [ 'Platforms', 'show' ];
$routes['create-platform'] = [ 'Platforms', 'create' ];
$routes['update-platform'] = [ 'Platforms', 'update' ];
$routes['delete-platform'] = [ 'Platforms', 'delete' ];

/*
 * Types
 */
$routes['types'] = [ 'Types', 'index' ];
$routes['show-type'] = [ 'Types', 'show' ];
$routes['create-type'] = [ 'Types', 'create' ];
$routes['update-type'] = [ 'Types', 'update' ];
$routes['delete-type'] = [ 'Types', 'delete' ];

/*
 * Users
 */
$routes['users'] = [ 'Users', 'index' ];
$routes['show-user'] = [ 'Users', 'show' ];
$routes['create-user'] = [ 'Users', 'create' ];
$routes['update-user'] = [ 'Users', 'update' ];
$routes['delete-user'] = [ 'Users', 'delete' ];

return $routes;
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'TestController::index');
$routes->get('hello', 'HelloController::index');
$routes->get('login', 'AuthController::login');
$routes->post('auth/attemptLogin', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');
$routes->get('dashboard', 'DashboardController::index');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('productos', 'ProductoController::index');
    $routes->get('productos/crear', 'ProductoController::crear');
    $routes->post('productos/guardar', 'ProductoController::guardar');
    $routes->get('productos/editar/(:num)', 'ProductoController::editar/$1');
    $routes->post('productos/actualizar/(:num)', 'ProductoController::actualizar/$1');
    $routes->get('productos/eliminar/(:num)', 'ProductoController::eliminar/$1');
});

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/admin/logout', 'Admin::logout');
$routes->post('/admin/authenticate', 'Admin::authenticate');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('services', 'Service::index');
    $routes->get('services/create', 'Service::create');
    $routes->post('services/store', 'Service::store');
    $routes->get('services/edit/(:num)', 'Service::edit/$1');
    $routes->post('services/update/(:num)', 'Service::update/$1');
    $routes->get('services/delete/(:num)', 'Service::delete/$1');
});

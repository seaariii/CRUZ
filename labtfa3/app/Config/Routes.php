<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route for the landing page (/)
$routes->get('/', 'Pages::index');

// Route for the about page (/about)
$routes->get('about', 'Pages::about');

// User Accounts page
$routes->get('users', 'Users::index');

$routes->group('customers', function ($routes) {
    $routes->get('/', 'Customers::index');
    $routes->get('new', 'Customers::new');
    $routes->post('create', 'Customers::create');
    $routes->get('edit/(:num)', 'Customers::edit/$1');
    $routes->post('update/(:num)', 'Customers::update/$1');
});

$routes->group('users', function ($routes) {
    $routes->get('/', 'Users::index');
    $routes->get('new', 'Users::new');
    $routes->post('create', 'Users::create');
    $routes->get('edit/(:num)', 'Users::edit/$1');
    $routes->post('update/(:num)', 'Users::update/$1');
});
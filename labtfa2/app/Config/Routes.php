<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route for the landing page (/)
$routes->get('/', 'Pages::index');

// Route for the about page (/about)
$routes->get('about', 'Pages::about');

// Customer Accounts page
$routes->get('customers', 'Customers::index');

// User Accounts page
$routes->get('users', 'Users::index');
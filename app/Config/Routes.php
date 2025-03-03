<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages/one', 'Pages::one');
$routes->get('/pages/two', 'Pages::two');
$routes->get('/pages/three', 'Pages::three');

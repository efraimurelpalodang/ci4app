<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('coba/index', 'Coba::index');
$routes->get('coba/about', 'Coba::about');

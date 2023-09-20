<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'TentangKami::index');
$routes->get('/regulasi', 'Regulasi::index');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'TentangKami::index');
$routes->get('/skdescan', 'SkDescan::index');
$routes->get('/skpembina', 'SkPembina::index');
$routes->get('/skagen', 'SkAgen::index');
$routes->get('/data', 'Data::index');
$routes->get('/laporanpembinaan', 'LaporanPembinaan::index');
$routes->get('/laporanbulanan', 'LaporanBulanan::index');

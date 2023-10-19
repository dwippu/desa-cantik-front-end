<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('(:num)', 'Home::home/$1');
$routes->post('/ubah', 'Home::ubah');
$routes->get('/kec/(:any)', 'Home::kec/$1'); // url ajax
$routes->get('/desa/(:any)/(:any)', 'Home::desa/$1/$2'); // url ajax

$routes->get('/tentang', 'TentangKami::index');
$routes->get('(:num)/tentang', 'TentangKami::tentang/$1');

$routes->get('/skdescan', 'SkDescan::index');
$routes->get('/skpembina', 'SkPembina::index');
$routes->get('/skagen', 'SkAgen::index');
$routes->get('(:num)/skdescan', 'SkDescan::skdescan/$1');
$routes->get('(:num)/skpembina', 'SkPembina::skpembina/$1');
$routes->get('(:num)/skagen', 'SkAgen::skagen/$1');

$routes->get('/data', 'Data::index');
$routes->get('(:num)/data', 'Data::data/$1');

$routes->get('/laporanpembinaan', 'LaporanPembinaan::index');
$routes->get('/laporanbulanan', 'LaporanBulanan::index');
$routes->get('(:num)/laporanpembinaan', 'LaporanPembinaan::laporanpembinaan/$1');
$routes->get('(:num)/laporanbulanan', 'LaporanBulanan::laporanbulanan/$1');

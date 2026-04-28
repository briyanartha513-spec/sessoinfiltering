<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('main/(:any)','main::index/$1');
$routes->get('/produk', 'Home::produk');
$routes->get('/keranjang', 'Home::keranjang');

$routes->get('login', 'login::index');
$routes->post('login/auth', 'login::auth');

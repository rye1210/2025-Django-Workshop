<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'inventory::index');
$routes->get('/suppliers', 'inventory::suppliers');
$routes->post('/save_supplier', 'inventory::save_supplier');
$routes->post('/save_delivery', 'inventory::save_delivery');

$routes->get('/products', 'inventory::products');

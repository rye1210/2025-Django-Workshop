<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
//  */
// $routes->get('/', 'Home::index');
// $routes->get('/display', 'Home::display');
$routes->get('/', 'Registration::index');
$routes->post('/save', 'Registration::save');
$routes->post('/saveEdit', 'Registration::saveEdit');
$routes->get('/edit', 'Registration::edit');
$routes->post('/update', 'Registration::update');
$routes->get('/delete', 'Registration::delete');
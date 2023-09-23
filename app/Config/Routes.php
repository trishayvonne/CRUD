<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test','MainController::test');
$routes->post('save','MainController::save');
$routes->get('/Update/(:any)','MainController::Update/$1');
$routes->get('/Delete/(:any)','MainController::Delete/$1');
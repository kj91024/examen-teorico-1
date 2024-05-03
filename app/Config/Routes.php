<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/empresa/crear', 'EmpresaController::crear');
$routes->post('/empresa/crear', 'EmpresaController::crear');
$routes->get('/empresa/listar', 'EmpresaController::listar');

$routes->get('/sede/asignar/(:num)', 'SedeController::asignar/$1');
$routes->post('/sede/asignar/(:num)', 'SedeController::asignar/$1');
$routes->get('/sede/listar/(:num)', 'SedeController::listar/$1');

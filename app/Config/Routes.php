<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Public Routes
$routes->get('/', 'Home::index');
$routes->get('/tasks', 'TaskController::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/about', 'Home::about');

// Authentication Routes
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');


$routes->group('tasks', ['filter' => 'auth'], function($routes) {
    $routes->get('new', 'TaskController::new');
    $routes->post('create', 'TaskController::create');
    $routes->get('edit/(:num)', 'TaskController::edit/$1');
    $routes->post('update/(:num)', 'TaskController::update/$1');
    $routes->get('delete/(:num)', 'TaskController::delete/$1');
});


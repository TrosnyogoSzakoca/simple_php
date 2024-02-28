<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Users;
use App\Controllers\UsersController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UsersController::index');
$routes->get('users', [UsersController::class, 'index']);
$routes->get('users/new', [UsersController::class, 'new']);
$routes->post('users', [UsersController::class, 'create']);

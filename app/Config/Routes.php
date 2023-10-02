<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'UserController::register');
$routes->get('/signin', 'UserController::Login');
$routes->get('/ecommerce', 'UserController::ecommerce');

<?php

use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
// $routes->get('/about', 'Pages::about');
// $routes->get('/gallery', 'Pages::gallery');
$routes->get('/profil', 'Pages::profil');

$routes->get('todolist', 'TodolistController::index');
$routes->get('todolist/create', 'TodolistController::create');  // Menampilkan form create
$routes->post('todolist/store', 'TodolistController::store');  // Menyimpan data

$routes->get('/users/index', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/update/(:num)', 'UserController::update/$1');
$routes->get('/users/delete/(:num)', 'UserController::delete/$1');
$routes->get('/user/printPDF', 'UserController::printPDF');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');

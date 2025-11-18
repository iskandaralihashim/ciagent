<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/contact', 'Home::contact');

// Item CRUD Routes
$routes->get('/items', 'Item::index');
$routes->get('/items/create', 'Item::create');
$routes->post('/items/store', 'Item::store');
$routes->get('/items/(:num)', 'Item::show/$1');
$routes->get('/items/(:num)/edit', 'Item::edit/$1');
$routes->post('/items/(:num)/update', 'Item::update/$1');
$routes->post('/items/(:num)/delete', 'Item::delete/$1');

service('auth')->routes($routes);

$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], static function ($routes) {
    // Login/out
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('logout', 'AuthController::logout');

    // Registration
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('register', 'AuthController::attemptRegister');

    // Activation
    $routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
    $routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

    // Forgot/Reset Password
    $routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
    $routes->post('forgot', 'AuthController::attemptForgot');
    $routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
    $routes->post('reset-password', 'AuthController::attemptReset');
});

$routes->group('api', ['namespace' => 'App\Controllers\Api'], static function ($routes) {
    $routes->resource('items', ['controller' => 'Item']);
});

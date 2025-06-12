<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');
$routes->post('/login/process', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/customer/dashboard', 'Customer::dashboard');
$routes->get('/owner/dashboard', 'LaundryOwner::dashboard');
$routes->get('/admin/dashboard', 'Admin::dashboard');

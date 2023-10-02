<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/service', 'Home::service');
$routes->get('/package', 'Home::package');
$routes->get('/facilities', 'Home::facilities');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/booking', 'Home::booking');
$routes->get('/singup', 'Home::singup');
$routes->get('/singin', 'Home::singin');
$routes->get('/checkout', 'Home::checkout');
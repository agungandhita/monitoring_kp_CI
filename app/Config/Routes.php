<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('monitoring-kp', 'MonitoringKP::index');
$routes->get('monitoring-kp/create', 'MonitoringKP::create');
$routes->post('monitoring-kp/store', 'MonitoringKP::store');
$routes->get('monitoring-kp/edit/(:num)', 'MonitoringKP::edit/$1');
$routes->post('monitoring-kp/update/(:num)', 'MonitoringKP::update/$1');
$routes->delete('monitoring-kp/delete/(:num)', 'MonitoringKP::delete/$1');
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PortfolioController::index');
$routes->get('about', 'PortfolioController::about');
$routes->get('about', 'PortfolioController::resume');
$routes->get('about', 'PortfolioController::facts');
$routes->get('about', 'PortfolioController::contacts');
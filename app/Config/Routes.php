<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PortfolioController::index');
$routes->get('about', 'PortfolioController::about');
$routes->get('resume', 'PortfolioController::resume');
$routes->get('facts', 'PortfolioController::facts');
$routes->get('contact', 'PortfolioController::contact');
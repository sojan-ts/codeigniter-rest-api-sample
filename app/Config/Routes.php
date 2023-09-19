<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');



// $routes->resource('employeeqb');

// $routes->get('show_data/{id}', 'Employeeqb::show/$1');
// app/Config/Routes.php

$routes->get('show_data/(:segment)', 'Employeeqb::show/$1');

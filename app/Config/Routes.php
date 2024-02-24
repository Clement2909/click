<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/login', 'Admin\Login::index');
$routes->get('/user/login', 'User\Login::index');

/* verification login admin + acceuil */
$routes->post('/admin/verificationlogin', 'Admin\VerificationLogin::index');
$routes->get('/admin/dashboard', 'Admin\VerificationLogin::dashboard');


/*verification login user + acceuil */
$routes->post('/user/verificationlogin', 'User\VerificationLogin::index');
$routes->get('/user/dashboard', 'User\VerificationLogin::dashboard');


/* inscription utilisateur*/
$routes->get('/user/register', 'User\Register::index');
$routes->post('/user/register', 'User\Register::index');


$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('shoes/list', 'Shoes::list'); // Affichage de la liste des chaussures
    $routes->get('shoes/create', 'Shoes::create'); // Affichage du formulaire de création
    $routes->post('shoes/store', 'Shoes::store'); // Enregistrement d'une nouvelle chaussure
    $routes->get('shoes/edit/(:num)', 'Shoes::edit/$1'); // Affichage du formulaire d'édition d'une chaussure
    $routes->post('shoes/update/(:num)', 'Shoes::update/$1'); // Mise à jour d'une chaussure
    $routes->get('shoes/details/(:num)', 'Shoes::details/$1'); // Affichage des détails d'une chaussure
    $routes->get('shoes/delete/(:num)', 'Shoes::delete/$1'); // Suppression d'une chaussure
    $routes->get('shoes/confirm-delete/(:num)', 'Shoes::confirmDelete/$1');
});















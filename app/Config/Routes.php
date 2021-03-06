<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// profile
$routes->get('profile/edit/(:any)', 'ProfileController::profile/$1');
$routes->put('profile/process/(:any)', 'ProfileController::update/$1');

//home
$routes->get('/home', 'HomeController::index');
$routes->get('/uploadPostingan/(:any)', 'PostinganController::postingan/$1');
$routes->put('/uploadPostingan/process/(:any)', 'PostinganController::storePostingan/$1');

// explore
$routes->get('/explore', 'ExploreController::index');

// chat 
$routes->get('chat', 'ChatController::index');
$routes->put('chat/(:any)', 'ChatController::index/$1');

// auth
$routes->get('/logout', 'AuthController::logout');
$routes->get('/', 'AuthController::login');
$routes->post('/login/process', 'AuthController::loginStore');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/process', 'AuthController::registerStore');
$routes->get('/forgotPassword', 'AuthController::forgotPassword');

// api 
// $routes->resource('users');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

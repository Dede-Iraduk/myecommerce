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


$routes->get('/', 'Home::index');


$routes->get('/success','Confirmation::confirm');

$routes->get('/signup','SignupController::index');


$routes->get('/signin','SigninController::index');

$routes->get('/profile','ProfileController::profile',['filter'=>'authGuard']);

$routes->get('/viewcategory','Category::view_category');

$routes->get('/logout','ProfileController::Logout');

$routes->get('/viewproduct','Product::product_crud');


$routes->get('products/edit/(:num)','Product::edit/$1');


$routes->post('products/update/(:num)','Product::update/$1');


$routes->get('/products/delete/(:num)','Product::delete/$1');



$routes->post('/store','SignupController::store');
// $routes->post('/signup','SignupController::store');

$routes->post("update/(:num)",'Product::update');



$routes->get('/admin_dashboard','Home::admin_dashboard');

$routes->get('category/edit/(:num)','Category::edit/$1');
$routes->post('category/update/(:num)','Categery::update/$1');
$routes->get('/category/delete/(:num)','Category::delete/$1');


$routes->get('sub_categories/edit/(:num)','Sub_Category::edit/$1');
$routes->post('sub_categories/update/(:num)','Sub_Category::update/$1');
$routes->get('/sub_categories/delete/(:num)','Sub_Category::delete/$1');

$routes->get('user/edit/(:num)','SignupController::edit/$1');
$routes->post('user/update/(:num)','SignupController::update/$1');
$routes->get('/user/delete/(:num)','SignupController::delete/$1');






// custom routes




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

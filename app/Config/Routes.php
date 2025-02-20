<?php

use CodeIgniter\Router\RouteCollection;
//! get() hanya diperuntukan oleh halaman yang tidak memiliki sistem crud
// add() kebalikan dari get 

/**
 * @var RouteCollection $routes
 */
//! bisa juga seperti ini yang didalamnya mengembalikan anonimus function kemudian apa yang akan dilakukannya ini disebut CLOSURE 
// $routes->get('/closur', function() {
//   echo "Hello World";
// });

$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('contact', 'Pages::contact');
$routes->get('komik', 'Komik::index');
$routes->get('komik/(:any)','Komik::detail/$1');
$routes->get('create','Komik::create');
$routes->post('create/save','Komik::save');
$routes->delete('komik/(:num)','Komik::delete/$1');
$routes->get('/edit/(:segment)','Komik::edit/$1');
$routes->post('/edit/update/(:segment)','Komik::update/$1');
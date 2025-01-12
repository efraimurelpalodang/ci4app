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


$routes->get('/', 'Home::index');
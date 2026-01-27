<?php

// echo "it works!" . PHP_EOL;

require_once 'Router.php';

// Router::get('/test', 'TestController');
Router::get('/test', 'TestController', 'show');
// Router::get('/test/[0-9]*', 'TestController', 'show');

// Router::get('/products', 'ProductController', 'index');
// Router::post('/products', 'ProductController', 'store');
// Router::get('/products/{id}', 'ProductController', 'show');
// Router::get('/products/{id}/edit', 'ProductController', 'edit');
// Router::put('/products/{id}', 'ProductController', 'update');
// Router::delete('/products/{id}', 'ProductController', 'delete');
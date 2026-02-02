<?php

use App\Router;

Router::get('/', 'StudentController', 'index');
Router::post('/create', 'StudentController', 'create');
Router::get('/show', 'StudentController', 'show');
Router::put('/update', 'StudentController', 'update');
Router::delete('/delete', 'StudentController', 'delete');

Router::dispatch(function() {
	echo "404 page not found!" . PHP_EOL;
});
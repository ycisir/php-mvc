<?php

use App\Router;

Router::get('/', 'StudentController', 'index');
Router::get('/create', 'StudentController', 'create');
Router::get('/show', 'StudentController', 'show');
Router::get('/update', 'StudentController', 'update');
Router::get('/delete', 'StudentController', 'delete');

Router::dispatch(function() {
	echo "404 page not found!";
});
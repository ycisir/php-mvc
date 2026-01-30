<?php

use App\Router;

// Here we send get request for all method bcz we perform crud operation on database level
Router::get('/', 'StudentController', 'index');
Router::get('/create', 'StudentController', 'create');
Router::get('/show', 'StudentController', 'show');
Router::get('/update', 'StudentController', 'update');
Router::get('/delete', 'StudentController', 'delete');

Router::dispatch(function() {
	echo "404 page not found!";
});
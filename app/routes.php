<?php

//Admin 
$app->post('/login/logar','App\Controllers\LoginController:logar');

//Site
$app->get('/', 'App\Controllers\HomeController:index');
$app->get('/home', 'App\Controllers\HomeController:index');
$app->get('/contato', 'App\Controllers\HomeController:contato');
$app->get('/sobre', 'App\Controllers\HomeController:sobre');
$app->get('/login', 'App\Controllers\LoginController:login');
<?php

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function ($request, $response) {
   
    $response->getBody()->write("Hello");
    return $response;
});
$app->run();
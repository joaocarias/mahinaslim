<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

require '../vendor/autoload.php';
require '../config/constancts.php';
require '../config/config.php';

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();



$app->get('/', function ($request, $response) {
   
    $response->getBody()->write("../layout/layout_home.php");
    return $response;
});
$app->run();
<?php

require __DIR__."/../vendor/autoload.php";
require __DIR__."/../src/helpers.php";

use core\database\Connector;
use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable(__DIR__."/../");
$dotEnv->load();


$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH);

$routes = [
    "/" =>"home",
    "/contact"=>"contact",
    "/product"=>"product"
];

if(array_key_exists($uri, $routes)) {
    require('../src/Controllers/' . $routes[$uri] . ".php");
} else {
    http_response_code(404);

    require('../resources/views/404.php');

    die();
}
<?php

require __DIR__."/../vendor/autoload.php";
require __DIR__."/../src/helpers.php";

$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH);

$routes = [
    "/" =>"home",
    "/contact"=>"contact"
];

if(array_key_exists($uri, $routes)) {
    require('../src/Controllers/' . $routes[$uri] . ".php");
} else {
    http_response_code(404);

    require('../resources/views/404.php');

    die();
}
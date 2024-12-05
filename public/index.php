<?php

require __DIR__."/../vendor/autoload.php";

use App\Greeting;
use App\Logger;

$greeting = new Greeting();

echo $greeting->message("Guilherme");

(new Logger())->write("Guilherme access the aplication");
<?php

use core\database\Connector;

$title = "my web store";
$heading = "Home";

$config = require __DIR__."/../../config/database.php";

[
   'username' => $username,
   'password' => $password
] = $config;

unset($config['username'], $config['password']);

$db = new Connector($config, $username, $password);

$products = $db->query("SELECT * FROM prodcuts;")->get();

require __DIR__ . "/../../resources/views/index.php";

?>

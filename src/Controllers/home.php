<?php

use core\database\Connector;
use core\database\DatabaseConfig;

$title = "my web store";
$heading = "Home";

$dbConfig = DatabaseConfig::getInstace();

$db = new Connector($dbConfig);

$products = $db->query("SELECT * FROM prodcuts;")->get();

require __DIR__ . "/../../resources/views/index.php";

?>

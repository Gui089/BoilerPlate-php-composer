<?php

use core\database\Connector;

$title = "my web store";
$heading = "Home";

$db = new Connector();

$products = $db->query("SELECT * FROM prodcuts;")->get();

require __DIR__ . "/../../resources/views/index.php";

?>

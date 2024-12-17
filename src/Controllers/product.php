<?php

use core\database\Connector;
use core\database\DatabaseConfig;

$dbConfig = DatabaseConfig::getInstace();

$product = (new Connector($dbConfig))
  ->query("SELECT * FROM prodcuts where id = 1;")
  ->first();

$title = $product['name']."| my web store";
$heading = "Product";

require __DIR__ . "/../../resources/views/product.php";

?>


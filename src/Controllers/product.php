<?php

use core\database\Connector;



$product = (new Connector())
  ->query("SELECT * FROM prodcuts where id = 1;")
  ->first();

$title = $product['name']."| my web store";
$heading = "Product";

require __DIR__ . "/../../resources/views/product.php";

?>


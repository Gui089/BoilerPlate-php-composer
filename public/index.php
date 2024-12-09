<?php
require __DIR__."/../vendor/autoload.php";

use App\models\Product;

$products = Product::all();

$filteredProducts = array_filter($products, static fn(array $product) => $product['Is_available'] == true);
$title = "my web store";
$heading = "Home";

require __DIR__ . "/../resources/views/index.php";

?>


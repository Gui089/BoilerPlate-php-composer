<?php
require __DIR__."/../vendor/autoload.php";

use App\models\Product;

$products = Product::all();

$filteredProducts = array_filter($products, static fn(array $product) => $product['Is_available'] == true);
$title = "my web store";

require __DIR__."/../resources/views/index.phtml";

?>


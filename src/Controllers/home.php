<?php

use core\database\Connector;

$title = "my web store";
$heading = "Home";

$pdo = (new Connector())->connect();

$statement = $pdo->prepare("SELECT * FROM prodcuts;");
$statement->execute();

$products = $statement->fetchAll(\PDO::FETCH_ASSOC);

require __DIR__ . "/../../resources/views/index.php";

?>

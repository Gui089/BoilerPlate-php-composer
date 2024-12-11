<?php

namespace core\database;

use PDO;
use PDOException;

class Connector
{
    public function connect(): PDO
    {
        $dsn = 'pgsql:host=localhost;port=5446;dbname=ecomercedb';
        $username = 'ecomerce';
        $password = 'ecomerce321';

        try {
            return new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            die("Conexão falhou: " . $e->getMessage());
        }
    }
}

<?php

namespace core\database;

use PDO;
use PDOException;
use PDOStatement;

class Connector
{
    protected PDO $connection;

    protected ?string $query = null;

    public function __construct(array $config, string $username, string $password)
    {

        $dsn = 'pgsql:'. http_build_query($config, arg_separator:';');

        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function get():array
    {
        return $this->getStament()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first():array
    {
        return $this->getStament()->fetch(PDO::FETCH_ASSOC);
    }

    private function getStament():PDOStatement
    {
        $statement = $this->connection->prepare($this->query);
        $statement->execute();

        return $statement;
    }
}

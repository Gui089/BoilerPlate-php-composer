<?php

namespace core\database;

class DatabaseConfig
{
    private static $instace;

    private array $config;

    private string $username;

    private string $password;


    public static function getInstace(): self
    {
        if (self::$instace == null) {
            self::$instace = new self();
        }

        return self::$instace;
    }

    public function __construct()
    {
        $config = require __DIR__ . "/../../config/database.php";

        [
            'username' => $username,
            'password' => $password
        ] = $config;

        unset($config['username'], $config['password']);

        $this->config = $config;
        $this->username = $username;
        $this->password = $password;

    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function getUsername():string
    {
        return $this->username;
    }

    public function getPassword():string
    {
        return $this->password;
    }

}

<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Level;

class Logger
{
    protected \Monolog\Logger $logger;

    public function __construct()
    {
        $this->logger = new \Monolog\Logger('app');
        $this->logger->pushHandler(
            new StreamHandler("/home/guilherme/pinguimcurso/storage/logs
", Level::Debug)
        );
    }

    public function write(string $message):void
   {
       $this->logger->debug($message);
   }
}
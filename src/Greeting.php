<?php

namespace App;

class Greeting
{
    public function message(string $name):string
    {
        return  "Hello $name";
    }

}
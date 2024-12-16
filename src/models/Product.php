<?php

namespace App\models;

class Product
{
    public static function all():array {
        return [
            [
                "name"=>"PS5",
                "price"=>500,
                "Is_available"=>true
            ],
            [
                "name"=>"MacBook",
                "price"=>2500,
                "Is_available"=>true
            ],
            [
                "name"=>"NoteBook",
                "price"=>500,
                "Is_available"=>false
            ],
        ];
    }

}
<?php

if(!function_exists('dd')) {
    function dd(...$args):void {
        echo '<pre>';

        foreach ($args as $arg) {
            print_r($arg);
        }

        die();
    }
}

if(!function_exists('abort')) {
    function abort(int $code = 404):void {
        http_response_code($code);

        require('./resources/views'.$code. '.php');

        die();
    }
}
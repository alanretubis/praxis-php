<?php
namespace AlanRetubis\PraxisPHP\Core;

class Request
{
    public function uri(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
    }

    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

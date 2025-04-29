<?php
namespace AlanRetubis\PraxisPHP\Config;

use Dotenv\Dotenv;

class EnvLoader
{
    public static function load(string $path)
    {
        if (file_exists($path . '/.env')) {
            $dotenv = Dotenv::createImmutable($path);
            $dotenv->load();
        }
    }
}

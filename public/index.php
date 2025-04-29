<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AlanRetubis\PraxisPHP\Core\Application;
use AlanRetubis\PraxisPHP\Core\Database;
use AlanRetubis\PraxisPHP\Core\Router;
use AlanRetubis\PraxisPHP\Core\Request;
use AlanRetubis\PraxisPHP\Config\EnvLoader;

use App\Controllers\HomeController;

EnvLoader::load(__DIR__ . '/../');

$app = new Application();
$router = new Router();
$request = new Request();

$router->get('/', [new HomeController, 'index']);

$router->dispatch($request->uri(), $request->method());

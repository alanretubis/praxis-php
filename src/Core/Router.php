<?php
namespace AlanRetubis\PraxisPHP\Core;

class Router
{
    protected array $routes = [];

    public function get(string $uri, callable $handler)
    {
        $this->routes['GET'][$uri] = $handler;
    }

    public function dispatch(string $uri, string $method)
    {
        if (isset($this->routes[$method][$uri])) {
            return call_user_func($this->routes[$method][$uri]);
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}

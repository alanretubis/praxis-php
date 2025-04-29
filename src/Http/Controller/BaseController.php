<?php
namespace AlanRetubis\PraxisPHP\Http\Controller;

class BaseController
{
    protected function view(string $template, array $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../../../app/Views/{$template}.php";
    }
}

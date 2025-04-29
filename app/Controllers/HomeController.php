<?php
namespace App\Controllers;

use AlanRetubis\PraxisPHP\Http\Controller\BaseController;
use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {        
        $this->view('home', [
            'title' => 'Welcome to PraxisPHP',
            'description' => 'A lightweight and modern PHP framework designed for simplicity and speed.'
        ]);
    }
}

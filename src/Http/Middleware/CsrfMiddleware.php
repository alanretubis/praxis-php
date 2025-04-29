<?php
namespace AlanRetubis\PraxisPHP\Http\Middleware;

class CsrfMiddleware
{
    public function handle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $token = $_POST['_token'] ?? '';
            if (!isset($_SESSION['_token']) || $token !== $_SESSION['_token']) {
                die('CSRF token mismatch.');
            }
        }
    }

    public static function token()
    {
        session_start();
        if (!isset($_SESSION['_token'])) {
            $_SESSION['_token'] = bin2hex(random_bytes(32));
        }

        return $_SESSION['_token'];
    }

    public static function tag()
    {
        return '<input type="hidden" name="_token" value="' . self::token() . '">';
    }
}

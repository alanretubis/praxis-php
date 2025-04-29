<?php

use AlanRetubis\PraxisPHP\Http\Middleware\CsrfMiddleware;

function csrf_token()
{
    return CsrfMiddleware::token();
}

function csrf_field()
{
    return CsrfMiddleware::tag();
}

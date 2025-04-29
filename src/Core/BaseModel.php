<?php

namespace AlanRetubis\PraxisPHP\Core;

use AlanRetubis\PraxisPHP\Core\Database;
use PDO;

abstract class BaseModel
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }
}

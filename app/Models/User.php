<?php

namespace App\Models;

use AlanRetubis\PraxisPHP\Core\BaseModel;

class User extends BaseModel
{
    protected string $table = 'users'; // Table name

    public function all()
    {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}

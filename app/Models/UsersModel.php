<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['username', 'number1', 'number2', 'total'];

    public function getUsers()
    {
        return $this->findAll();
    }
}

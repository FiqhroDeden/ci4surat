<?php

namespace App\Models;

use CodeIgniter\Model;

class rolesModel extends Model
{
    protected $table = 'auth_groups';
    protected $useTimestamps = true;
    protected $allowedFields = ['name'];

    public function getroles()
    {
        return $this->findAll();
    }
}

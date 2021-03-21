<?php

namespace App\Models;

use CodeIgniter\Model;

class groups_usersModel extends Model
{
    protected $table = 'auth_groups_users';
    protected $useTimestamps = true;
    // protected $allowedFields = ['name'];

    public function getgroups()
    {
        return $this->findAll();
    }
}

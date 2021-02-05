<?php

namespace App\Models;

use CodeIgniter\Model;

class levelModel extends Model
{
    protected $table = 'auth_groups_users';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['group_id', 'user_id'];

    public function getlevel($user_id = false)
    {

        if ($user_id == false) {

            return $this->findAll();
        }


        return $this->where(['user_id' => $user_id])->first();
    }
}

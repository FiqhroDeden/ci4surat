<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    // protected $allowedFields = ['group_id', 'user_id'];

    public function getuser($id = false)
    {

        if ($id == false) {
            //     $query =  $this->select('message.id as messageid, pengirim, penerima, message.created_at as date, nama_lengkap')
            //     ->join('users u', 'u.id = message.penerima')
            //     ->get();

            // return $query->getResultArray();
            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['email', 'username', 'nama_lengkap', 'level', 'no_telp', 'user_image', 'document', 'bio', 'password_hash', 'active'];

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

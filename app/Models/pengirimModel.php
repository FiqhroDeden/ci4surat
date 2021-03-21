<?php

namespace App\Models;

use CodeIgniter\Model;

class pengirimModel extends Model
{
    protected $table = 'message';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id', 'name', 'filename', 'date', 'detail'];

    public function getpengirim($id = false)
    {

        if ($id == false) {

            $query =  $this->select('message.id as messageid, pengirim, penerima, nama_lengkap, users.id as userid')
                ->join('users u', 'u.id = message.penerima')
                ->get();

            return $query->getResultArray();
        }


        return $this->where(['id' => $id])->first();
    }
}

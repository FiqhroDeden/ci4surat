<?php

namespace App\Models;

use CodeIgniter\Model;

class messageModel extends Model
{
    protected $table = 'message';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['pengirim', 'penerima'];

    public function getmessage($id = false)
    {

        if ($id == false) {

            $query =  $this->select('message.id as messageid, pengirim, penerima, message.created_at as date, nama_lengkap, u.id as userid')
                ->join('users u', 'u.id = message.pengirim')
                ->get();

            return $query->getResultArray();
        }


        return $this->where(['id' => $id])->first();
    }
}

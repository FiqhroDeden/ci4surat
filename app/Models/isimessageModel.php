<?php

namespace App\Models;

use CodeIgniter\Model;

class isimessageModel extends Model
{
    protected $table = 'isimessage';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['message_id', 'pesan', 'media'];

    public function getisimessage($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }

    // public function getisimessage($message_id = false)
    // {

    //     if ($message_id == false) {
    //         $query =  $this->select('isimessage.id as id, message_id, pesan, media, pengirim, penerima')
    //             ->join('message m', 'm.id = isimessage.message_id')
    //             ->join('users u', 'u.id = message.user_id')
    //             ->get();

    //         return $query->getResultArray();
    //     }


    //     return $this->where(['message_id' => $message_id])->first();
    // }
}

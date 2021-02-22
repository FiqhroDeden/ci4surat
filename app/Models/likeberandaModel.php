<?php

namespace App\Models;

use CodeIgniter\Model;

class likeberandaModel extends Model
{
    protected $useTimestamps = true;
    protected $table = 'likeberanda';
    protected $allowedFields = ['id_user', 'id_beranda'];

    public function getlikeberanda($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

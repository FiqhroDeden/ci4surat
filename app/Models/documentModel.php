<?php

namespace App\Models;

use CodeIgniter\Model;

class documentModel extends Model
{
    protected $table = 'document';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['name', 'filename', 'date', 'detail'];

    public function getdocument($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

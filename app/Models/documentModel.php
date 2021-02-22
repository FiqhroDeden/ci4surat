<?php

namespace App\Models;

use CodeIgniter\Model;

class documentModel extends Model
{
    protected $table = 'document';
    protected $useTimestamps = true;
    // protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id', 'name', 'filename', 'date', 'detail'];

    public function getdocument($id = false)
    {

        if ($id == false) {

            $query =  $this->select('document.id as id, name, filename, date, detail, nama_lengkap, user_id')
                ->join('users u', 'u.id = document.user_id')
                ->get();

            return $query->getResultArray();
        }


        return $this->where(['id' => $id])->first();
    }
}

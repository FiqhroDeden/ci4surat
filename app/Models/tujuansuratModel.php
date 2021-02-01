<?php

namespace App\Models;

use CodeIgniter\Model;

class tujuansuratModel extends Model
{
    protected $table = 'tujuan_surat';
    protected $useTimestamps = true;
    protected $allowedFields = ['alamat_tujuan', 'uraian'];

    public function gettujuansurat($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

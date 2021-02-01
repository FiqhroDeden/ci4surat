<?php

namespace App\Models;

use CodeIgniter\Model;

class kategorisuratModel extends Model
{
    protected $table = 'kategori_surat';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_kategori', 'nama_kategori', 'uraian'];

    public function getkategorisurat($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

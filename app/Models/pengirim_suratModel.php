<?php

namespace App\Models;

use CodeIgniter\Model;

class pengirim_suratModel extends Model
{
    protected $table = 'pengirim_surat';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_pengirim', 'uraian'];

    public function getpengirim_surat()
    {
        return $this->findAll();
    }

    public function ubahpengirim_surat($id)
    {
        return $this->find($id);
    }
}

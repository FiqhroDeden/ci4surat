<?php

namespace App\Models;

use CodeIgniter\Model;

class suratmasukModel extends Model
{
    protected $table = 'surat_masuk';
    protected $useTimestamps = true;
    protected $allowedFields = ['kategori', 'nomor_surat', 'tgl_surat', 'pengirim_surat', 'perihal', 'isi_ringkas', 'sifat_surat', 'file', 'keterangan'];

    public function getsuratmasuk($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

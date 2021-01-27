<?php

namespace App\Models;

use CodeIgniter\Model;

class golonganModel extends Model
{
    protected $table = 'golongan';
    protected $useTimestamps = true;
    protected $allowedFields = ['golongan', 'nama_golongan', 'uraian'];

    public function getGolongan($id = false)
    {

        if ($id == false) {
            // return $this->db->table('datapdm')

            //     ->join('fakultas', 'fakultas.fakultas_id=datapdm.fakultas')php
            //     ->join('prodi', 'prodi.prodi_id=datapdm.prodi')
            //     ->get()->getResultArray();
            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

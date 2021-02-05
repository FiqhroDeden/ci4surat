<?php

namespace App\Models;

use CodeIgniter\Model;

class golonganModel extends Model
{
    protected $table = 'agenda';
    protected $useTimestamps = true;
    protected $allowedFields = ['tgl_mulai', 'jam_mulai', 'jam_mulai', 'tgl_selesai', 'jam_selesai', 'perihal', 'tempat'];

    public function getAgenda($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class pegawaiModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'username', 'nama_lengkap', 'nip', 'jabatan', 'golongan', 'no_telp', 'password_hash'];

    public function getpegawai($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}

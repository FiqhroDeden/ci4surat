<?php

namespace App\Models;

use CodeIgniter\Model;

class pegawaiModel extends Model
{
    protected $useTimestamps = true;
    protected $table = 'users';
    protected $allowedFields = ['email', 'username', 'nama_lengkap', 'nip', 'jabatan', 'golongan', 'no_telp', 'level', 'password_hash', 'active'];

    public function getPegawai($id = false)
    {

        if ($id == false) {
            $query =  $this->select('users.id as id, nip, nama_lengkap, no_telp, email, name, username')
                ->join('auth_groups ag', 'ag.id = users.level')
                ->get();

            return $query->getResultArray();
        }


        return $this->where(['id' => $id])->first();
    }
}

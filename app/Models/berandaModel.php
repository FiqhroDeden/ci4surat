<?php

namespace App\Models;

use CodeIgniter\Model;

class berandaModel extends Model
{
    protected $useTimestamps = true;
    protected $table = 'beranda';
    protected $allowedFields = ['id_user', 'news', 'media'];

    public function getberanda($id = false)
    {

        if ($id == false) {
            $query =  $this->select('beranda.id as id, news, media, nama_lengkap, user_image')
                ->join('users u', 'u.id = beranda.id_user')
                ->get();

            return $query->getResultArray();
        }


        return $this->where(['id' => $id])->first();
    }
}

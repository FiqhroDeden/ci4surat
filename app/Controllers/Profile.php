<?php

namespace App\Controllers;

use App\Models\pegawaiModel;
use App\Models\levelModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->pegawaiModel = new pegawaiModel();
        $this->levelModel = new levelModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Profile',
                'pegawai' => $this->pegawaiModel->getPegawai(),
                'roles' => $this->rolesModel->getroles(),
                'level' => $this->levelModel->getlevel(),
            ];
        return view('profile/index', $data);
    }


    //--------------------------------------------------------------------

}

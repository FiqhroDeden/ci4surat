<?php

namespace App\Controllers;

use App\Models\golonganModel;
use App\Models\jabatanModel;
use App\Models\pegawaiModel;
use App\Models\rolesModel;
use App\Models\levelModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->golonganModel = new golonganModel();
        $this->jabatanModel = new jabatanModel();
        $this->pegawaiModel = new pegawaiModel();
        $this->rolesModel = new rolesModel();
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

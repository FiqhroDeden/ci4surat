<?php

namespace App\Controllers;

class Pegawai extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Pegawai'
            ];
        return view('pegawai/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Pegawai'
            ];
        return view('pegawai/tambah', $data);
    }


    //--------------------------------------------------------------------

}

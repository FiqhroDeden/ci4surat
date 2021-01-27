<?php

namespace App\Controllers;

class Jabatan extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Jabatan'
            ];
        return view('jabatan/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Jabatan'
            ];
        return view('jabatan/tambah', $data);
    }


    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

class Pengirim_surat extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Pengirim Surat'
            ];
        return view('pengirim_surat/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Pengirim Surat'
            ];
        return view('pengirim_surat/tambah', $data);
    }


    //--------------------------------------------------------------------

}

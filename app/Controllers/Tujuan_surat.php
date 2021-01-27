<?php

namespace App\Controllers;

class Tujuan_surat extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Tujaun Surat'
            ];
        return view('tujuan_surat/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Pengirim Surat'
            ];
        return view('tujuan_surat/tambah', $data);
    }


    //--------------------------------------------------------------------

}

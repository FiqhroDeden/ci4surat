<?php

namespace App\Controllers;

class Kategori_surat extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Kategori Surat'
            ];
        return view('kategori_surat/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Kategori surat'
            ];
        return view('kategori_surat/tambah', $data);
    }


    //--------------------------------------------------------------------

}

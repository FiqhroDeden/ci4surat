<?php

namespace App\Controllers;

class Surat_masuk extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Surat Masuk'
            ];
        return view('surat_masuk/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Surat Masuk'
            ];
        return view('surat_masuk/tambah', $data);
    }


    //--------------------------------------------------------------------

}

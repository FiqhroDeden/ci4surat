<?php

namespace App\Controllers;

class Disposisi extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Disposisi Surat'
            ];
        return view('disposisi/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Disposisi'
            ];
        return view('disposisi/tambah', $data);
    }


    //--------------------------------------------------------------------

}

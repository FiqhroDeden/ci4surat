<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function surat_masuk()
    {
        $data =
            [
                'title' => 'Laporan Surat Masuk'
            ];
        return view('laporan/surat_masuk', $data);
    }
    public function surat_keluar()
    {
        $data =
            [
                'title' => 'Laporan Surat Keluar'
            ];
        return view('laporan/surat_keluar', $data);
    }


    //--------------------------------------------------------------------

}

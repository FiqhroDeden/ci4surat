<?php

namespace App\Controllers;

class Agenda extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Agenda'
            ];
        return view('agenda/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Agenda'
            ];
        return view('Agenda/tambah', $data);
    }


    //--------------------------------------------------------------------

}

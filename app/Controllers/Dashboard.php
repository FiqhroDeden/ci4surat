<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    public function index()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Dashboard Admin'
                ];
            return view('dashboard/admin', $data);
        }
        if (in_groups('sekertaris')) {
            $data =
                [
                    'title' => 'Dashboard Sekertaris'
                ];
            return view('dashboard/sekertaris', $data);
        }
        if (in_groups('kepala')) {
            $data =
                [
                    'title' => 'Dashboard Sekertaris'
                ];
            return view('dashboard/kepala', $data);
        }
    }




    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

use App\Models\agendaModel;
use App\Models\kalenderModel;

class Agenda extends BaseController
{
    public function __construct()
    {
        $this->agendaModel = new agendaModel();
        $this->kalenderModel = new kalenderModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Kalender',

            ];
        return view('agenda/kalender', $data);
    }



    //--------------------------------------------------------------------

}

<?php

namespace App\Controllers;

use App\Models\agendaModel;

class Agenda extends BaseController
{
    public function __construct()
    {
        $this->agendaModel = new agendaModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Agenda',
                'agenda' => $this->agendaModel->getAgenda()
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

    public function save()
    {
        $this->agendaModel->save([
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'tgl_selesai' => $this->request->getVar('tgl_selesai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'perihal' => $this->request->getVar('perihal'),
            'tempat' => $this->request->getVar('tempat'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('pesan', 'Agenda Berhasil ditambahkan');
        return redirect()->to('/agenda');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Edit Agenda',
                'agenda' => $this->agendaModel->getAgenda($id)
            ];
        return view('Agenda/edit', $data);
    }

    public function update($id)
    {
        $agenda = [
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'tgl_selesai' => $this->request->getVar('tgl_selesai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
            'perihal' => $this->request->getVar('perihal'),
            'tempat' => $this->request->getVar('tempat'),
            'keterangan' => $this->request->getVar('keterangan')
        ];
        $this->agendaModel->update($id, $agenda);
        session()->setFlashdata('pesan', 'Agenda Berhasil Diubah');
        return redirect()->to('/agenda');
    }
    public function delete($id)
    {
        $this->agendaModel->delete($id);
        session()->setFlashdata('pesan', 'Agenda Berhasil dihapus');
        return redirect()->to('/agenda');
    }
    public function kalender()
    {
        $data = [
            'title' => 'Kelender Agenda',
        ];
        return view('/agenda/kalender', $data);
    }
    public function load()
    {
        $agenda = $this->agendaModel->findAll();
        foreach ($agenda as $val) :
            $data = [

                'id'     => intval($val->id),
                'title' => $val->perihal,
                'description' => trim($val->keterangan),
                'start' => date_format(date_create($val->tgl_mulai), "Y-m-d H:i:s"),
                'end'     => date_format(date_create($val->tgl_akhir), "Y-m-d H:i:s"),
                'color' => 'blue',

            ];
        endforeach;
        echo json_encode($data);
    }


    //--------------------------------------------------------------------

}

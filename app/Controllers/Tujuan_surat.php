<?php

namespace App\Controllers;

use App\Models\tujuansuratModel;

class Tujuan_surat extends BaseController
{
    public function __construct()
    {
        $this->tsuratModel = new tujuansuratModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Tujuan Surat',
                'tsurat' => $this->tsuratModel->gettujuansurat()
            ];
        return view('tujuan_surat/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Tujuan Surat'
            ];
        return view('tujuan_surat/tambah', $data);
    }
    public function save()
    {
        $this->tsuratModel->save([
            'alamat_tujuan' => $this->request->getVar('alamat_tujuan'),
            'uraian' => $this->request->getVar('uraian'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/tujuan_surat');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Edit Tujuan Surat',
                'tsurat' => $this->tsuratModel->gettujuansurat($id)
            ];
        return view('tujuan_surat/edit', $data);
    }

    public function update($id)
    {
        $tsurat = [
            'alamat_tujuan' => $this->request->getVar('alamat_tujuan'),
            'uraian' => $this->request->getVar('uraian'),
        ];
        $this->tsuratModel->update($id, $tsurat);
        session()->setFlashdata('pesan', 'Data Tujuan Surat berhasil diupdate.');
        return redirect()->to('/tujuan_surat');
    }

    public function delete($id)
    {
        $this->tsuratModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/tujuan_surat');
    }


    //--------------------------------------------------------------------

}

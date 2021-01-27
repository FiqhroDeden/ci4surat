<?php

namespace App\Controllers;

use App\Models\golonganModel;

class Golongan extends BaseController
{
    public function __construct()
    {
        $this->golonganModel = new golonganModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Golongan',
                'golongan' => $this->golonganModel->getGolongan()
            ];
        return view('golongan/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Golongan'
            ];
        return view('golongan/tambah', $data);
    }
    public function save()
    {
        $this->golonganModel->save([
            'golongan' => $this->request->getVar('golongan'),
            'nama_golongan' => $this->request->getVar('nama_golongan'),
            'uraian' => $this->request->getVar('uraian'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/golongan');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Tambah Golongan',
                'golongan' => $this->golonganModel->getGolongan($id)
            ];
        return view('golongan/edit', $data);
    }

    public function update($id)
    {
        $golongan = [
            'golongan' => $this->request->getVar('golongan'),
            'nama_golongan' => $this->request->getVar('nama_golongan'),
            'uraian' => $this->request->getVar('uraian'),
        ];
        $this->golonganModel->update($id, $golongan);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/golongan');
    }

    public function delete($id)
    {
        $this->golonganModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/golongan');
    }


    //--------------------------------------------------------------------

}

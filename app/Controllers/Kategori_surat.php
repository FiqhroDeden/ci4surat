<?php

namespace App\Controllers;

use App\Models\kategorisuratModel;

class Kategori_surat extends BaseController
{
    public function __construct()
    {
        $this->ksuratModel = new kategorisuratModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Kategori Surat',
                'ksurat' => $this->ksuratModel->getkategorisurat()
            ];
        return view('kategori_surat/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Kategori Surat'
            ];
        return view('kategori_surat/tambah', $data);
    }
    public function save()
    {
        $this->ksuratModel->save([
            'kode_kategori' => $this->request->getVar('kode_kategori'),
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'uraian' => $this->request->getVar('uraian'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/kategori_surat');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Edit Kategori Surat',
                'ksurat' => $this->ksuratModel->getkategorisurat($id)
            ];
        return view('kategori_surat/edit', $data);
    }

    public function update($id)
    {
        $ksurat = [
            'kode_kategori' => $this->request->getVar('kode_kategori'),
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'uraian' => $this->request->getVar('uraian'),
        ];
        $this->ksuratModel->update($id, $ksurat);
        session()->setFlashdata('pesan', 'Data Kategori Surat berhasil diupdate.');
        return redirect()->to('/kategori_surat');
    }

    public function delete($id)
    {
        $this->ksuratModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/kategori_surat');
    }


    //--------------------------------------------------------------------

}

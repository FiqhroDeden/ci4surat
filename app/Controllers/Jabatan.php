<?php

namespace App\Controllers;

use App\Models\jabatanModel;

class Jabatan extends BaseController
{
    public function __construct()
    {
        $this->jabatanModel = new jabatanModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Jabatan',
                'jabatan' => $this->jabatanModel->findAll()

            ];
        return view('jabatan/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Jabatan',
                'jabatan' => $this->jabatanModel->findAll()
            ];
        return view('jabatan/tambah', $data);
    }
    public function save()
    {
        $this->jabatanModel->save([
            'nama_jabatan' => $this->request->getVar('nama_jabatan'),
            'kode_jabatan' => $this->request->getVar('kode_jabatan'),
            'level' => $this->request->getVar('level'),
            'atasan' => $this->request->getVar('atasan'),
            'uraian' => $this->request->getVar('uraian'),
        ]);
        session()->setFlashdata('pesan', 'Data Jabatan berhasil ditambahkan.');
        return redirect()->to('/jabatan');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Edit Jabatan',
                'atasan' => $this->jabatanModel->findAll(),
                'jabatan' => $this->jabatanModel->getjabatan($id)
            ];
        return view('jabatan/edit', $data);
    }
    public function update($id)
    {
        $jabatan = [
            'nama_jabatan' => $this->request->getVar('nama_jabatan'),
            'kode_jabatan' => $this->request->getVar('kode_jabatan'),
            'level' => $this->request->getVar('level'),
            'atasan' => $this->request->getVar('atasan'),
            'uraian' => $this->request->getVar('uraian'),
        ];
        $this->jabatanModel->update($id, $jabatan);
        session()->setFlashdata('pesan', 'Data Jabatan berhasil diupdate.');
        return redirect()->to('/jabatan');
    }
    public function delete($id)
    {
        $this->jabatanModel->delete($id);
        session()->setFlashdata('pesan', 'Data Jabatan berhasil dihapus.');
        return redirect()->to('/jabatan');
    }


    //--------------------------------------------------------------------

}

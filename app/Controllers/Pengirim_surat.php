<?php

namespace App\Controllers;

use App\Models\pengirim_suratmodel;

class Pengirim_surat extends BaseController
{
    public function __construct()
    {
        $this->pengirim_suratModel = new pengirim_suratModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Pengirim Surat',
                'pengirim_surat' => $this->pengirim_suratModel->findAll(),
            ];
        return view('pengirim_surat/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Pengirim Surat'
            ];
        return view('pengirim_surat/tambah', $data);
    }

    public function save()
    {
        // untuk tangkap data yang di kirim
        // dd($this->request->getVar());

        $this->pengirim_suratModel->save([
            'nama_pengirim' => $this->request->getVar('nama_pengirim'),
            'uraian' => $this->request->getVar('uraian'),
        ]);

        session()->setFlashdata('pesan', 'Pengirim surat baru berhasil ditambah');

        return redirect()->to('/pengirim_surat');
    }

    public function delete($id)
    {
        $this->pengirim_suratModel->delete($id);
        session()->setFlashdata('pesan', '1 Pengirim surat berhasil dihapus');
        return redirect()->to('/pengirim_surat');
    }

    public function ubah($id)
    {
        $ubah = $this->pengirim_suratModel->ubahpengirim_surat($id);
        $data =
            [
                'title' => 'Ubah Pengirim Surat',
                'pengirim' => $ubah
            ];
        return view('pengirim_surat/ubah', $data);
    }

    public function update($id)
    {
        $golongan = [
            'id' => $this->request->getVar('id'),
            'nama_pengirim' => $this->request->getVar('nama_pengirim'),
            'uraian' => $this->request->getVar('uraian'),
        ];
        $this->pengirim_suratModel->update($id, $golongan);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/pengirim_surat');
    }


    //--------------------------------------------------------------------

}

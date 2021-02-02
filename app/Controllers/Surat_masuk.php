<?php

namespace App\Controllers;

use App\Models\suratmasukModel;
use App\Models\kategorisuratModel;

class Surat_masuk extends BaseController
{
    public function __construct()
    {
        $this->suratmasukModel = new suratmasukModel();
        $this->ksuratModel = new kategorisuratModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Golongan',
                'suratmasuk' => $this->suratmasukModel->getsuratmasuk()
            ];
        return view('surat_masuk/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Surat Masuk',
                'ksurat' => $this->ksuratModel->findAll()
            ];
        return view('surat_masuk/tambah', $data);
    }
    public function save()
    {
        $fileSurat = $this->request->getFile('file');
        if ($fileSurat->getError() == 4) {
            $namaSurat = 'tidakada';
        } else {
            $namaSurat = $fileSurat->getRandomName();
            $fileSurat->move('file/suratmasuk', $namaSurat);
        }
        $this->suratmasukModel->save([
            'kategori' => $this->request->getVar('kategori'),
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'pengirim_surat' => $this->request->getVar('pengirim_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'isi_ringkas' => $this->request->getVar('isi_ringkas'),
            'sifat_surat' => $this->request->getVar('sifat_surat'),
            'file' => $namaSurat,
            'keterangan' => $this->request->getVar('keterangan'),
            'status_disposisi' => $this->request->getVar('status_disposisi'),
        ]);
        session()->setFlashdata('pesan', 'Surat Masuk berhasil ditambahkan.');
        return redirect()->to('/surat_masuk');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Tambah Golongan',
                'ksurat' => $this->ksuratModel->findAll(),
                'suratmasuk' => $this->suratmasukModel->getsuratmasuk($id)
            ];
        return view('surat_masuk/edit', $data);
    }

    public function update($id)
    {
        $oldfile = $this->request->getVar('oldfile');
        $fileSurat = $this->request->getFile('file');
        if ($fileSurat->getError() == 4) {
            $namaSurat = $oldfile;
        } else {
            $namaSurat = $fileSurat->getRandomName();
            if ($oldfile != 'tidakada') {
                unlink('file/suratmasuk/' . $oldfile);
            }
            $fileSurat->move('file/suratmasuk', $namaSurat);
        }
        $suratmasuk = [
            'kategori' => $this->request->getVar('kategori'),
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'pengirim_surat' => $this->request->getVar('pengirim_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'isi_ringkas' => $this->request->getVar('isi_ringkas'),
            'sifat_surat' => $this->request->getVar('sifat_surat'),
            'file' => $namaSurat,
            'keterangan' => $this->request->getVar('keterangan'),
            'status_disposisi' => $this->request->getVar('status_disposisi'),
        ];
        $this->suratmasukModel->update($id, $suratmasuk);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/surat_masuk');
    }

    public function delete($id)
    {
        $this->suratmasukModel->delete($id);
        session()->setFlashdata('pesan', 'Data Surat Masuk berhasil dihapus.');
        return redirect()->to('/surat_masuk');
    }


    //--------------------------------------------------------------------

}

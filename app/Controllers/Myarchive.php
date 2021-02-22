<?php

namespace App\Controllers;

use App\Models\documentModel;
use App\Models\usersModel;
use CodeIgniter\I18n\Time;

class Myarchive extends BaseController
{
    public function __construct()
    {
        $this->documentModel = new documentModel();
        $this->usersModel = new usersModel();
    }
    public function document()
    {
        $data =
            [
                'title' => 'Document',
                'document' => $this->documentModel->getdocument(),
            ];
        return view('myarchive/document', $data);
    }
    public function documenttambah()
    {
        session();
        $data =
            [
                'title' => 'Tambah Document',
                'document' => $this->documentModel->getdocument(),
                'validation' => \Config\Services::validation()
            ];
        return view('myarchive/documenttambah', $data);
    }


    public function savedocument()
    {
        // // Validasi Input
        // if (!$this->validate([
        //     'name' => [
        //         'rules' => 'required|is_unique[document.name]',
        //         'errors' => [
        //             'required' => 'nama file harus diisi',
        //             'is_unique' => 'nama file sudah terdaftar'
        //         ]
        //     ],
        //     // 'filename' => [
        //     //     'rules' => 'uploaded[sampul]',
        //     //     'errors' => [
        //     //         'uploaded' => 'Pilih file terlebih dahulu, '
        //     //     ]
        //     // ]
        // ])) {
        //     // $validation = \Config\Services::validation();
        //     // return redirect()->to('/myarchive/documenttambah')->withInput()->with('validation', $validation);
        //     return redirect()->to('/myarchive/documenttambah')->withInput();
        // }

        // Ambil File
        $file = $this->request->getFile('filename');
        // genetrate nama file random
        $namafile = $file->getRandomName();
        // pindahkan file ke folder
        $file->move('archive', $namafile);


        $this->documentModel->save([
            'user_id' => user()->id,
            'name' => $this->request->getVar('name'),
            'filename' => $namafile,
            'date' => Time::now('Asia/Tokyo', 'en_US'),
            'detail' => $this->request->getVar('detail'),
        ]);
        session()->setFlashdata('pesan', 'file document berhasil tambahkan.');
        return redirect()->to('/myarchive/document');
    }

    public function deletedocument($id)
    {
        // cari file berdasarkan id
        $document = $this->documentModel->find($id);
        // hapus file
        unlink('archive/' . $document['filename']);
        // hapus databasenya
        $this->documentModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/myarchive/document');
    }

    public function all()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Document',
                    'document' => $this->documentModel->getdocument(),
                ];
            return view('myarchive/all', $data);
        }
    }

    public function addall()
    {
        session();
        $data =
            [
                'title' => 'Tambah Document',
                'document' => $this->documentModel->getdocument(),
                'validation' => \Config\Services::validation(),
                'users' => $this->usersModel->getuser(),
            ];
        return view('myarchive/addall', $data);
    }

    public function saveall()
    {
        // // Validasi Input
        // if (!$this->validate([
        //     'name' => [
        //         'rules' => 'required|is_unique[document.name]',
        //         'errors' => [
        //             'required' => 'nama file harus diisi',
        //             'is_unique' => 'nama file sudah terdaftar'
        //         ]
        //     ],
        // ])) {
        //     return redirect()->to('/myarchive/documenttambah')->withInput();
        // }

        // Ambil File
        $file = $this->request->getFile('filename');
        // genetrate nama file random
        $namafile = $file->getRandomName();
        // pindahkan file ke folder
        $file->move('archive', $namafile);


        $this->documentModel->save([
            'user_id' => $this->request->getVar('user'),
            'name' => $this->request->getVar('name'),
            'filename' => $namafile,
            'date' => Time::now('Asia/Tokyo', 'en_US'),
            'detail' => $this->request->getVar('detail'),
        ]);
        session()->setFlashdata('pesan', 'file document berhasil tambahkan.');
        return redirect()->to('/myarchive/all');
    }


    //--------------------------------------------------------------------

}

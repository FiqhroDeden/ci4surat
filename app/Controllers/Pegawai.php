<?php

namespace App\Controllers;

use App\Models\golonganModel;
use App\Models\jabatanModel;
use App\Models\pegawaiModel;
use App\Models\rolesModel;

class Pegawai extends BaseController
{
    public function __construct()
    {
        $this->golonganModel = new golonganModel();
        $this->jabatanModel = new jabatanModel();
        $this->pegawaiModel = new pegawaiModel();
        $this->rolesModel = new rolesModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Pegawai',
                'pegawai' => $this->pegawaiModel->getPegawai()

            ];
        return view('pegawai/index', $data);
    }
    public function tambah()
    {
        $data =
            [
                'title' => 'Tambah Pegawai',
                'golongan' => $this->golonganModel->findAll(),
                'jabatan' => $this->jabatanModel->findAll(),


            ];
        return view('pegawai/tambah', $data);
    }
    public function save()
    {
        $options = [
            'cost' => 10,
        ];
        $password = $this->request->getVar('password_hash');
        $pass_hash = password_hash(base64_encode(
            hash('sha384', $password, true)
        ), PASSWORD_DEFAULT, $options);
        $this->pegawaiModel->save([
            'nip' => $this->request->getVar('nip'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jabatan' => $this->request->getVar('jabatan'),
            'golongan' => $this->request->getVar('golongan'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'active' => 1,
            'password_hash' => $pass_hash,

        ]);
        session()->setFlashdata('pesan', 'Data Pegawai berhasil ditambahkan.');
        return redirect()->to('/pegawai');
    }
    public function edit($id)
    {
        $data =
            [
                'title' => 'Edit Pegawai',
                'golongan' => $this->golonganModel->findAll(),
                'jabatan' => $this->jabatanModel->findAll(),
                'pegawai' => $this->pegawaiModel->getPegawai($id)
            ];
        return view('pegawai/edit', $data);
    }
    public function update($id)
    {
        $oldpass = $this->request->getVar('oldpass');
        $pass = $this->request->getVar('password_hash');
        if ($oldpass == $pass) {
            $pegawai = [
                'nip' => $this->request->getVar('nip'),
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'golongan' => $this->request->getVar('golongan'),
                'jabatan' => $this->request->getVar('jabatan'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),

            ];
        } else {
            $options = [
                'cost' => 10,
            ];
            $password = $this->request->getVar('password_hash');
            $pass_hash = password_hash(base64_encode(
                hash('sha384', $password, true)
            ), PASSWORD_DEFAULT, $options);
            $pegawai = [
                'nip' => $this->request->getVar('nip'),
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'golongan' => $this->request->getVar('golongan'),
                'jabatan' => $this->request->getVar('jabatan'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password_hash' => $pass_hash,
            ];
        }

        $this->pegawaiModel->update($id, $pegawai);
        session()->setFlashdata('pesan', 'Data Pegawai berhasil diupdate.');
        return redirect()->to('/pegawai');
    }
    public function delete($id)
    {
        $this->pegawaiModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pegawai');
    }


    //--------------------------------------------------------------------

}

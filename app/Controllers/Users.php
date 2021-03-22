<?php

namespace App\Controllers;

use App\Models\rolesModel;
use App\Models\pegawaiModel;
use App\Models\levelModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->pegawaiModel = new pegawaiModel();
        $this->levelModel = new levelModel();
        $this->rolesModel = new rolesModel();
    }
    public function index()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Manage Users',
                    'pegawai' => $this->pegawaiModel->getPegawai(),
                    'level' => $this->levelModel->getlevel(),
                ];
            return view('users/index', $data);
        }
    }
    public function add()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'title' => 'Add New User',
                    'roles' => $this->rolesModel->findAll(),
                ];
            return view('users/tambah', $data);
        }
    }
    public function save()
    {
        if (in_groups('admin')) {
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
                'level' => $this->request->getVar('group_id'),
                'username' => $this->request->getVar('username'),
                'active' => 1,
                'password_hash' => $pass_hash,

            ]);
            // set role
            $conn = \Config\Database::connect();

            $kode = $conn->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
            $set = $kode->getResultArray();
            foreach ($set as $s) {
                $user_id = $s['id'];
            }
            //save
            $this->levelModel->save([
                'group_id' => $this->request->getVar('group_id'),
                'user_id' => $user_id,
            ]);
            session()->setFlashdata('pesan', 'Data Pegawai berhasil ditambahkan.');
            return redirect()->to('/users');
        }
    }
    public function edit($id)
    {
        if (in_groups('admin')) {
            // set role
            $conn = \Config\Database::connect();

            $lev = $conn->query("SELECT * FROM auth_groups_users ORDER BY user_id DESC LIMIT 1");

            $data =
                [
                    'title' => 'Update User',
                    'pegawai' => $this->pegawaiModel->getPegawai($id),
                    'roles' => $this->rolesModel->findAll(),
                ];
            return view('users/edit', $data);
        }
    }
    public function update()
    {
        if (in_groups('admin')) {
            $id = $this->request->getVar('id');
            $oldlevel = $this->request->getVar('oldlevel');
            $oldpass = $this->request->getVar('oldpass');
            $level = $this->request->getVar('group_id');
            $pass = $this->request->getVar('password_hash');


            if ($oldlevel == $level) {
                if ($oldpass == $pass) {
                    $pegawai = [
                        'nip' => $this->request->getVar('nip'),
                        'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                        'golongan' => $this->request->getVar('golongan'),
                        'jabatan' => $this->request->getVar('jabatan'),
                        'no_telp' => $this->request->getVar('no_telp'),
                        'email' => $this->request->getVar('email'),
                        'level' => $this->request->getVar('group_id'),
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
                        'level' => $this->request->getVar('group_id'),
                        'username' => $this->request->getVar('username'),
                        'password_hash' => $pass_hash,
                    ];
                }

                $this->pegawaiModel->update($id, $pegawai);
            } else {

                // hapus
                $this->pegawaiModel->delete($id);

                if ($oldpass == $pass) {
                    $this->pegawaiModel->save([
                        'nip' => $this->request->getVar('nip'),
                        'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                        'jabatan' => $this->request->getVar('jabatan'),
                        'golongan' => $this->request->getVar('golongan'),
                        'no_telp' => $this->request->getVar('no_telp'),
                        'email' => $this->request->getVar('email'),
                        'level' => $this->request->getVar('group_id'),
                        'username' => $this->request->getVar('username'),
                        'active' => 1,
                        'password_hash' => $oldpass,

                    ]);
                } else {
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
                        'level' => $this->request->getVar('group_id'),
                        'username' => $this->request->getVar('username'),
                        'active' => 1,
                        'password_hash' => $pass_hash,

                    ]);
                }

                // set role
                $conn = \Config\Database::connect();

                $kode = $conn->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
                $set = $kode->getResultArray();
                foreach ($set as $s) {
                    $user_id = $s['id'];
                }
                //save
                $this->levelModel->save([
                    'group_id' => $this->request->getVar('group_id'),
                    'user_id' => $user_id,
                ]);
            }
            session()->setFlashdata('pesan', 'Data Pegawai berhasil diupdate.');
            return redirect()->to('/users');
        }
    }
    public function delete($id)
    {
        if (in_groups('admin')) {
            $this->pegawaiModel->delete($id);
            session()->setFlashdata('pesan', 'Data berhasil dihapus.');
            return redirect()->to('/users');
        }
    }


    //--------------------------------------------------------------------

}

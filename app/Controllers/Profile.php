<?php

namespace App\Controllers;

use App\Models\pegawaiModel;
use App\Models\levelModel;
use App\Models\rolesModel;
use App\Models\usersModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->pegawaiModel = new pegawaiModel();
        $this->levelModel = new levelModel();
        $this->rolesModel = new rolesModel();
        $this->usersModel = new usersModel();
    }
    public function index()
    {
        $data =
            [
                'title' => 'Profile',
                'pegawai' => $this->pegawaiModel->getPegawai(),
                'roles' => $this->rolesModel->getroles(),
                'level' => $this->levelModel->getlevel(),
            ];
        return view('profile/index', $data);
    }

    public function save()
    {
        $id = user()->id;
        $profile = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'bio' => $this->request->getVar('bio'),
        ];
        $this->usersModel->update($id, $profile);
        session()->setFlashdata('pesan', 'Data Profile Berhasil Diperbaharui.');
        return redirect()->to('/profile');
    }

    public function savepass()
    {

        // cek konfirmasi password
        $pass = $this->request->getVar('pass');
        $pass1 = $this->request->getVar('pass1');
        if ($pass != $pass1) {
            session()->setFlashdata('gagal', 'Password confirmation does not match');
            return redirect()->to('/profile');
        }

        // enkripsi inputan oldpass
        // $pas1 = $this->request->getVar('oldpass');
        // $options = [
        //     'cost' => 10,
        // ];
        // $oldpass = password_hash(base64_encode(
        //     hash('sha384', $pas1, true)
        // ), PASSWORD_DEFAULT, $options);

        // cek password lama
        // $pas = user()->password_hash;
        // if ($pas != $oldpass) {
        //     session()->setFlashdata('gagal', 'Old password does not match');
        //     return redirect()->to('/profile');
        // }

        // enkripsi passsword baru
        $options = [
            'cost' => 10,
        ];
        $password = $this->request->getVar('pass');
        $pass_hash = password_hash(base64_encode(
            hash('sha384', $password, true)
        ), PASSWORD_DEFAULT, $options);
        $profile = [
            'password_hash' => $pass_hash,
        ];
        // setel password baru
        $id = user()->id;
        $this->usersModel->update($id, $profile);
        session()->setFlashdata('pesan', ' New password has been changed successfully');
        return redirect()->to('/profile');
    }

    public function savep()
    {
        $id = user()->id;
        // Ambil File
        $media = $this->request->getFile('user_image');
        $error = $_FILES['user_image']['error'];
        if ($error == 4) {
            $namamedia = 'default.svg';
            // cari file berdasarkan id
            $filename = $this->usersModel->find($id);
            if ($filename['user_image'] != 'default.svg') {
                // hapus file
                unlink('img/' . $filename['user_image']);
            }
        } else {
            // genetrate nama file random
            $namamedia = $media->getRandomName();
            // pindahkan file ke folder
            $media->move('img', $namamedia);
        }

        $id = user()->id;
        $profile = [
            'user_image' => $namamedia,
        ];
        $this->usersModel->update($id, $profile);

        session()->setFlashdata('pesan', 'Profil berhasi di perbaharui');
        return redirect()->to('/profile');
    }

    //--------------------------------------------------------------------

}

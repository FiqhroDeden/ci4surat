<?php

namespace App\Controllers;

use App\Models\berandaModel;
use App\Models\likeberandaModel;
use App\Models\messageModel;
use App\Models\isimessageModel;
use App\Models\pengirimModel;
use App\Models\usersModel;
use App\Models\penerimaModel;


class Message extends BaseController
{
    public function __construct()
    {
        $this->berandaModel = new berandaModel();
        $this->likeberandaModel = new likeberandaModel();
        $this->messageModel = new messageModel();
        $this->isimessageModel = new isimessageModel();
        $this->pengirimModel = new pengirimModel();
        $this->usersModel = new usersModel();
        $this->penerimaModel = new penerimaModel();
    }

    public function index()
    {
        $data =
            [
                'beranda' => $this->berandaModel->getberanda(),
                'like' => $this->likeberandaModel->getlikeberanda(),
                'message' => $this->messageModel->getmessage(),
                // 'pengirim' => $this->pengirimModel->getpengirim(),
                'title' => 'Dashboard Admin'
            ];
        return view('message/index', $data);
    }

    public function message()
    {
        $kode = $this->request->getVar('id');
        $nama = $this->request->getVar('nama');
        $pengirim = $this->request->getVar('pengirim');
        $penerima = $this->request->getVar('penerima');
        $db = \Config\Database::connect();
        $builder = $db->table('isimessage');
        $builder->select('isimessage.id as isiid, pesan, media, nama_lengkap, message.id as messageid, user_image, isimessage.pengirim as ipengirim, isimessage.penerima as ipenerima, message.pengirim as mpengirim, message.penerima as mpenerima');
        $builder->join('message', 'message.id = isimessage.message_id');
        $builder->join('users', 'users.id = message.pengirim');
        $query = $builder->get();
        $data =
            [
                // 'isi' => $this->isimessageModel->getisimessage(),
                // 'pengirim' => $this->pengirimModel->getpengirim(),
                'isi' => $query->getResultArray(),
                'kode' => $kode,
                'nama' => $nama,
                'pengirim' => $pengirim,
                'penerima' => $penerima,
                'title' => 'Dashboard Admin'
            ];
        return view('message/message', $data);
    }

    public function send()
    {
        $pengirim = $this->request->getVar('pengirim');
        $penerima = $this->request->getVar('penerima');
        $nama = $this->request->getVar('nama');
        $message_id = $this->request->getVar('kode');

        $this->messageModel->save([
            'pengirim' => $pengirim,
            'penerima' => $penerima,
            'message_id' => $message_id,
        ]);

        session()->setFlashdata([
            'pesan', 'Berita Terupload',
            'kode', $message_id,
            'nama', $nama,
        ]);
        return redirect()->to('/message/message/');
    }

    public function kirim()
    {
        $data =
            [
                'beranda' => $this->berandaModel->getberanda(),
                'like' => $this->likeberandaModel->getlikeberanda(),
                'message' => $this->messageModel->getmessage(),
                // 'penerima' => $this->penerimaModel->getpenerima(),
                // 'pengirim' => $this->pengirimModel->getpengirim(),
                'user' => $this->usersModel->getuser(),
                'title' => 'Dashboard Admin'
            ];
        return view('message/kirim', $data);
    }

    public function add()
    {
        $message = $this->messageModel->getmessage();
        $pengirim = user()->id;
        $penerima = $this->request->getVar('id');
        $nama = $this->request->getVar('nama');
        // Validasi Input
        if (!$this->validate([
            'id' => [
                'rules' => 'required|is_unique[message.penerima]',
                'errors' => [
                    'required' => 'nama file harus diisi',
                    'is_unique' => 'nama file sudah terdaftar'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', "Cari Kata Kunci ['" . $nama . "'] di Dalam Kolom Search Untuk Membuka Pesannya.");
            return redirect()->to('/message');
        }

        $this->messageModel->save([
            'pengirim' => $pengirim,
            'penerima' => $penerima,
        ]);

        $conn = \Config\Database::connect();

        $kode = $conn->query("SELECT * FROM message ORDER BY id DESC LIMIT 1");
        $set = $kode->getResultArray();
        foreach ($set as $s) {
            $mes = $s['id'];
        }
        return redirect()->to('/message/message/' . $mes);
    }



    //--------------------------------------------------------------------

}

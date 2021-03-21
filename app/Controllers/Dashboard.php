<?php

namespace App\Controllers;

use App\Models\rolesModel;
use App\Models\groups_usersModel;
use App\Models\berandaModel;
use App\Models\archiveModel;
use App\Models\likeberandaModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->rolesModel = new rolesModel();
        $this->groups_usersModel = new groups_usersModel();
        $this->berandaModel = new berandaModel();
        $this->archiveModel = new archiveModel();
        $this->likeberandaModel = new likeberandaModel();
    }

    public function index()
    {
        if (in_groups('admin')) {
            $data =
                [
                    'beranda' => $this->berandaModel->getberanda(),
                    'like' => $this->likeberandaModel->getlikeberanda(),
                    'groups_users' => $this->groups_usersModel->getgroups(),
                    'archive' => $this->archiveModel->getarchive(),
                    'title' => 'Dashboard Admin'
                ];
            return view('dashboard/home', $data);
        }
        if (in_groups('user')) {
            $data =
                [
                    'beranda' => $this->berandaModel->getberanda(),
                    'like' => $this->likeberandaModel->getlikeberanda(),
                    'groups_users' => $this->groups_usersModel->getgroups(),
                    'archive' => $this->archiveModel->getarchive(),
                    'title' => 'Dashboard Admin'
                ];
            return view('dashboard/home', $data);
        }
    }
    public function save()
    {
        // Ambil File
        $media = $this->request->getFile('media');
        $error = $_FILES['media']['error'];
        if ($error == 4) {
            $namamedia = ' . ';
        } else {
            // genetrate nama file random
            $namamedia = $media->getRandomName();
            // pindahkan fileke folder
            $media->move('archive', $namamedia);
        }


        $this->berandaModel->save([
            'id_user' => user()->id,
            'news' => $this->request->getVar('news'),
            'media' => $namamedia,
        ]);
        $conn = \Config\Database::connect();

        $kode = $conn->query("SELECT * FROM beranda ORDER BY id DESC LIMIT 1");
        $set = $kode->getResultArray();
        foreach ($set as $s) {
            $beranda = $s['id'];
        }
        session()->setFlashdata('pesan', 'Berita Terupload');
        return redirect()->to('/dashboard#' . $beranda);
    }

    public function like()
    {
        $id_beranda = $this->request->getVar('id_beranda');
        $this->likeberandaModel->save([
            'id_user' => user()->id,
            'id_beranda' => $this->request->getVar('id_beranda'),
        ]);
        return redirect()->to('/dashboard#' . $id_beranda);
    }

    public function unlike()
    {
        $id_beranda = $this->request->getVar('id_beranda');
        $id = $this->request->getVar('id');
        $this->likeberandaModel->delete($id);
        return redirect()->to('/dashboard#' . $id_beranda);
    }




    //--------------------------------------------------------------------

}

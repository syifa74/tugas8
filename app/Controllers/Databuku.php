<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Databuku extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data buku',
            'buku' => $this->bukuModel->getBuku()
        ];
        return view('databuku/listbuku', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Data buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];

        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku' . $slug . 'tidak ditemukan');
        }
        return view('databuku/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah buku'
        ];
        return view('databuku/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'jumlah' => $this->request->getVar('jumlah'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        return redirect()->to('/databuku');
    }


    //--------------------------------------------------------------------

}

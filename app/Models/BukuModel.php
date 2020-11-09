<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'listbuku';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'jumlah', 'penulis', 'sinopsis', 'gambar', 'slug'];

    public function getBuku($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}

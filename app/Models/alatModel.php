<?php

namespace App\Models;

use CodeIgniter\Model;

class alatModel extends model {

    protected $table = 'alat';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_alat', 'nama_alat', 'brand', 'kondisi', 'gambar', 'keterangan'];

    public function getAlat($kode_alat = false) {
        
        if ($kode_alat == false) {
            return $this->findAll();
        }

        return $this->where(['kode_alat' => $kode_alat])->first();
    }

    public function getId($id = false) {
        
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

}

?>
<?php

namespace App\Models;

use CodeIgniter\Model;

class alatModel extends model {
    protected $primaryKey = 'id';
    protected $table = 'alat';
    protected $useTimestamps = true;
    protected $allowedFields = ['status', 'kode_alat', 'nama_alat', 'brand', 'kondisi', 'gambar', 'status', 'keterangan'];

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

    public function getAlatByStat($stat) {
        return $this->where(['status' => $stat])->findAll();
    }

    public function hapusId($id) {
        return $this->db->table('alat')->delete(['id' => $id]);
    }

    // 

}

?>
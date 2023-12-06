<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class proyekModel extends model {
        protected $table = 'proyek';
        protected $id = 'id_proyek';
        // protected $useTimestamps = true;

        protected $allowedFields = ['nama_po', 'area', 'foto_lokasi', 'tanggal_mulai', 'tanggal_selesai'];

        public function getProyek ($id_proyek = false) {
            if ($id_proyek == false) {
                return $this->findAll();
            }

            return $this->where(['id_proyek' => $id_proyek])->first();
        }
    }

?>
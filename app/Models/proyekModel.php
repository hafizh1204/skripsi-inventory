<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class proyekModel extends model {
        protected $table = 'proyek';
        protected $useTimestamps = true;

        protected $allowedFields = ['id_proyek', 'nama_po', 'area', 'foto_lokasi', 'tanggal_mulai', 'tanggal_selesai'];

        public function getProyek ($id_proyek = false) {
            if ($id_proyek == false) {
                return $this->findAll();
            }

            return $this->where(['id_proyek' => $id_proyek])->first();
        }
    }

?>
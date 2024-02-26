<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class proyekModel extends model {
        protected $primaryKey = 'id_proyek';
        protected $table = 'proyek';
        // protected $useTimestamps = true;

        protected $allowedFields = ['nama_po', 'koordinator', 'area', 'foto_lokasi', 'tanggal_mulai', 'tanggal_selesai'];

        public function getProyek ($id_proyek = false) {
            if ($id_proyek == false) {
                return $this->findAll();
            }

            return $this->where(['id_proyek' => $id_proyek])->first();
        }


        public function search($cariProyek) {
            // $builder = $this->table('alat');
            // $builder->like('nama_alat', $cariProyek);
    
            // return $builder;
    
            return $this->table('proyek')->like('nama_po', $cariProyek)->orLike('area', $cariProyek);
        }
    }

?>
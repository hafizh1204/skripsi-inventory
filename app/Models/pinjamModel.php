<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class pinjamModel extends model {
        protected $primaryKey = 'id_peminjam';
        protected $table = 'peminjaman';
        protected $useTimestamps = true;
        protected $allowedFields = ['id_alat', 'id_proyek', 'nama_peminjam', 'lokasi'];

        public function getPinjam ($id_peminjaman = false) {
            if ($id_peminjaman == false) {
                return $this->findAll();
            }

            return $this->where(['id_peminjaman' => $id_peminjaman])->first();
        }


        public function getAllpeminjaman() {
            // $builder = $this->db->table('peminjaman');
            // $builder->join('peminjaman', 'peminjaman.id_peminjam = alat.kode_alat');
            // $query = $builder->get();

            // return $query->getResult();

            return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->findAll();
        }
    }

?>
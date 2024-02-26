<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class pinjamModel extends model {
        protected $primaryKey = 'id_peminjam';
        protected $table = 'peminjaman';
        // protected $useTimestamps = true;
        protected $allowedFields = ['id_alat', 'id_proyek'];

        public function getPinjam ($id_peminjaman = false) {
            if ($id_peminjaman == false) {
                return $this->findAll();
            }

            return $this->where(['id_peminjaman' => $id_peminjaman])->first();
        }


        public function getAllpeminjaman($search = false, $id = false) {
            // $builder = $this->db->table('peminjaman');
            // $builder->join('peminjaman', 'peminjaman.id_peminjam = alat.kode_alat');
            // $query = $builder->get();

            // return $query->getResult();

            if ($id == false && $search == false){
                return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->findAll();
            } else if ($id == false && $search != null){
                return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->like('nama_alat', $search)->orLike('nama_po', $search)->findAll();
            }

            if ($search == false) {
                return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->where(['id_peminjam' => $id])->first();
            } else {
                return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->where(['id_peminjam' => $id])->like('nama_alat', $search)->orLike('nama_po', $search)->first();
            }
        }

        public function search($cariPeminjam) {
            // $builder = $this->table('alat');
            // $builder->like('nama_alat', $cariAlat);
    
            // return $builder;
            if ($cariPeminjam == false){
                return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->findAll();
            }

            return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->where(['id_peminjam' => $cariPeminjam])->first();
    
            return $this->join('alat', 'alat.id = peminjaman.id_alat')->join('proyek', 'proyek.id_proyek = peminjaman.id_proyek')->table('peminjaman')->like('nama_alat', $cariPeminjam)->orLike('proyek', $cariPeminjam);
        }
    }

?>
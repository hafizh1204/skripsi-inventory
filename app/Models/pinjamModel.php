<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class pinjamModel extends model {
        protected $table = 'peminjaman';

        protected $allowedFields = ['id', 'nama_peminjam', 'lokasi'];

        public function getPinjam ($id_peminjaman = false) {
            if ($id_peminjaman == false) {
                return $this->findAll();
            }

            return $this->where(['id_peminjaman' => $id_peminjaman])->first();
        }
    }

?>
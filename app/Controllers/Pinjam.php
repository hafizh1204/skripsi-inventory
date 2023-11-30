<?php 

    namespace App\Controllers;

    use App\Models\pinjamModel;

    class Pinjam extends Basecontroller {

        protected $pinjamModel;

        public function __construct() {
            $this->pinjamModel = new pinjamModel();
        }

        public function data_pinjam() {

            $data = [
                'title' => 'Data Peminjaman',
                'pinjam' => $this->pinjamModel->getPinjam()
            ];


            return view ('pages/pinjam_alat', $data);
        }



    }


?>
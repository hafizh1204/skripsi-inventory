<?php 

    namespace App\Controllers;

    use App\Models\pinjamModel;
    use App\Models\alatModel;
use PHPUnit\TextUI\XmlConfiguration\Group;

    class Pinjam extends Basecontroller {

        protected $pinjamModel;
        protected $alatModel;

        public function __construct() {
            $this->pinjamModel = new pinjamModel();
            $this->alatModel = new alatModel();
        }

        // protected $helpers = ['custom'];

        // function __construct() {
        //     $this->pinjam = new pinjamModel();
        //     $this->alat = new alatModel();

        // }

        public function pinjam_alat() {

            if(isset($_GET['cari'])) {
                $cari = $_GET['cari'];

                if ($cari == 0) {
                    $result = $this->pinjamModel->getAllPeminjaman();
                } else {
                    $result = $this->alatModel->getAlatByStat($cari);
                }
            } else {
                $result = $this->pinjamModel->getAllPeminjaman();
                $cari = 0;
            }

            $data = [
                'title' => 'Data Peminjaman',
                // 'alat' => $this->alatModel->getAlat(),
                'pinjam' => $result,
                'cari' => $cari
            ];
            // $data = [
            //     'title' => 'Data Peminjaman',
            //     'pinjam' => $this->pinjamModel->getAllPeminjaman(),
            // ];
            // dd($this->pinjamModel->getAllPeminjaman());
            // dd($this->alatModel->getAlat());

            return view ('pages/pinjam_alat', $data);
        }



    }


?>
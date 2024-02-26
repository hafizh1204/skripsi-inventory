<?php 

    namespace App\Controllers;

    use App\Models\pinjamModel;
    use App\Models\alatModel;
    use App\Models\proyekModel;
use PHPUnit\TextUI\XmlConfiguration\Group;

    class Pinjam extends Basecontroller {

        protected $pinjamModel;
        protected $alatModel;
        protected $proyekModel;

        public function __construct() {
            $this->pinjamModel = new pinjamModel();
            $this->alatModel = new alatModel();
            $this->proyekModel = new proyekModel();
        }

        // protected $helpers = ['custom'];

        // function __construct() {
        //     $this->pinjam = new pinjamModel();
        //     $this->alat = new alatModel();

        // }

        public function pinjam_alat() {

            $cariPeminjam = $this->request->getVar('keywordCari');

            if(isset($_GET['cari'])) {
                $cari = $_GET['cari'];

                if ($cari == 0 && $cariPeminjam == null) {
                    $result = $this->pinjamModel->getAllPeminjaman();
                } else if ($cari == 0 && $cariPeminjam != null) {
                    $result = $this->pinjamModel->getAllPeminjaman($cariPeminjam);
                } else if ($cari == 1 && $cariPeminjam == null) {
                    $result = $this->alatModel->getAlatByStat($cari);
                } else if ($cari == 1 && $cariPeminjam != null) {
                    $result = $this->alatModel->getAlatByStat($cari, $cariPeminjam);
                }
            } else {
                if ($cariPeminjam == null) {
                    $result = $this->pinjamModel->getAllPeminjaman();
                } else if ($cariPeminjam != null) {
                    $result = $this->pinjamModel->getAllPeminjaman($cariPeminjam);
                } 
                // $result = $this->pinjamModel->getAllPeminjaman();
                $cari = 0;
            }
            // if(isset($_GET['cari'])) {
            //     $cari = $_GET['cari'];

            //     if ($cari == 0) {
            //         $result = $this->pinjamModel->getAllPeminjaman();
            //     } else {
            //         $result = $this->alatModel->getAlatByStat($cari);
            //     }
            // } else {
            //     $result = $this->pinjamModel->getAllPeminjaman();
            //     $cari = 0;
            // }

            if(isset($_POST['btnSubmit'])){
                $this->pinjamModel->save([
                    'id_alat' => $this->request->getVar('idAlat'),
                    'id_proyek' => $this->request->getVar('proyek'), 
                ]);
                
                $this->alatModel->save([
                    'id' => $this->request->getVar('idAlat'),
                    'status' => 0,
                ]);

                return redirect()->to('/pinjam/pinjam_alat?cari=1');
                // return "<script>window.location.href = " . current_url() . "?" . $_SERVER['QUERY_STRING'] . "</script>";
                // dd($this->request->getVar('idAlat'), $this->request->getVar('proyek'));
            }

            // $cariPeminjam = $this->request->getVar('keywordCari');

            // if ($cariPeminjam) {
            //     $proyek = $this->proyekModel->search($cariPeminjam);
            //     $alat = $this->alatModel->search($cariPeminjam);
            // } else {
            //     $proyek = $this->pinjamModel;
            //     $alat = $this->alatModel;
            // }

            $data = [
                'menu' => 'pinjam',
                'title' => 'Data Peminjaman',
                // 'alat' => $this->alatModel->getAlat(),
                // 'pinjam' => $pinjam,
                // 'proyek' => $proyek,
                // 'alat' => $alat,
                'proyeks' => $this->proyekModel->getProyek(),
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

        public function hapusPinjam($id){
            // operasi
            $getIdAlat = $this->pinjamModel->getAllPeminjaman(false, $id);
            // dd($getIdAlat);
            // dd($this->alatModel->getId($getIdAlat['id']));
            $idAlat = $getIdAlat['id'];

            $this->alatModel->save([
                'id' => $idAlat,
                'status' => 1,
            ]);

            $this->pinjamModel->delete($id);

            return redirect()->to('/pinjam/pinjam_alat');
        }

    }


?>
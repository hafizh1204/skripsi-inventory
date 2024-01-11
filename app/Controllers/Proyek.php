<?php 

    namespace App\Controllers;

    use App\Models\proyekModel;

    class Proyek extends Basecontroller {

        protected $proyekModel;

        public function __construct() {
            $this->proyekModel = new proyekModel();
        }

        public function data_proyek() {

            $data = [
                'title' => 'Data Proyek',
                'proyek' => $this->proyekModel->getProyek()
            ];


            return view ('pages/data_proyek', $data);
        }


        public function detail($id_proyek) {
            $data = [
                'title' => 'Detail Proyek',
                'proyek' => $this->proyekModel->getProyek($id_proyek)
            ];

            return view('pages/detail_proyek', $data);

        }

        public function insertProyek() {
            $data = [
                'title' => 'Input Proyek Baru',
                'proyek' => $this->proyekModel->getProyek()
            ];

            return view('pages/insert_proyek', $data);
        }

        public function simpanInsertProyek() {
            // dd($this->request->getVar('tanggal_mulai'));

            $this->proyekModel->save([
                'nama_po' => $this->request->getVar('nama_po'),
                'area' => $this->request->getVar('area'),
                'foto_lokasi' => $this->request->getVar('foto_lokasi'),
                'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
                'tanggal_selesai' => $this->request->getVar('tanggal_selesai')
            ]);


            return redirect()->to('proyek/');
        }

        public function hapusProyek($id_proyek){

            $this->proyekModel->delete($id_proyek);

            // session()->setFlashdata('sukses-hapus-data', 'Data berhasil dihapus');

            return redirect()->to('/proyek');
        }



        public function editProyek($id_proyek) {

            $data = [
                'title' => 'Edit Proyek',
                'alat' => $this->proyekModel->getProyek($id_proyek)
            ];

            return view('/pages/edit_proyek', $data);

        }



        public function updateProyek($id_proyek) {


            
            $filefoto_lokasi = $this->request->getFile('foto_lokasi');
            dd($filefoto_lokasi);

            // if ($filefoto_lokasi->getError() == 4) {
            //     $namafotoLokasi = $this->request->getVar('fotolokasiLama');
            // } else {
            //     $namafotoLokasi = $filefoto_lokasi->getRandomName();
            //     $filefoto_lokasi->move('img', $namafotoLokasi);

            //     unlink('img/'. $this->request->getVar('fotolokasiLama'));
            // }


            $this->proyekModel->save([
                'id_proyek' => $id_proyek,
                'nama_po' => $this->request->getVar('nama_po'),
                'area' => $this->request->getVar('area'),
                'foto_lokasi' => $this->request->getFile('foto_lokasi'),
                'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
                'tanggal_selesai' => $this->request->getVar('tanggal_selesai')
            ]);

            return redirect()->to('/proyek');
        }


        public function hapus() {
            if ($this->request->isAjax()) {
                $id = $this->request->getVar('id_proyek');

                $this->proyekModel->delete($id);

                $msg = [
                    'sukses' => "Data Berhasil Dihapus"
                ];

                echo json_encode($msg);
            }
        }



    }


?>
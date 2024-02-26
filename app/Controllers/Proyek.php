<?php 

    namespace App\Controllers;

    use App\Models\proyekModel;

    class Proyek extends Basecontroller {

        protected $proyekModel;

        public function __construct() {
            $this->proyekModel = new proyekModel();
        }

        public function data_proyek() {

            $pageProyek = $this->request->getVar('page_proyek') ? $this->request->getVar('page_proyek') : 1;

            $cariProyek = $this->request->getVar('keywordCari');

            if ($cariProyek) {
                $proyek = $this->proyekModel->search($cariProyek);
            } else {
                $proyek = $this->proyekModel;
            }

            $data = [
                'menu' => 'proyek',
                'title' => 'Data Proyek',
                // 'proyek' => $this->proyekModel->getProyek()
                'proyek' => $proyek->paginate(5, 'proyek'),
                'pager' => $this->proyekModel->pager,
                'pageProyek' => $pageProyek
            ];


            return view ('pages/data_proyek', $data);
        }


        public function detail($id_proyek) {
            $data = [
                'menu' => 'proyek',
                'title' => 'Detail Proyek',
                'proyek' => $this->proyekModel->getProyek($id_proyek)
            ];

            return view('pages/detail_proyek', $data);

        }

        public function insertProyek() {
            $data = [
                'menu' => 'proyek',
                'title' => 'Input Proyek Baru',
                'proyek' => $this->proyekModel->getProyek()
            ];

            return view('pages/insert_proyek', $data);
        }

        public function simpanInsertProyek() {
            // dd($this->request->getVar('tanggal_mulai'));

            $fileGambar = $this->request->getFile('foto_lokasi');

            if ($fileGambar->getError() == 4) {
                $namaGambar = 'default_picture.png';
            } else {
                $namaGambar = $fileGambar->getRandomName();
                $fileGambar->move('img', $namaGambar);

                // unlink('img/'. $this->request->getVar('gambarLama'));
            }
            

            $this->proyekModel->save([
                'nama_po' => $this->request->getVar('nama_po'),
                'koordinator' => $this->request->getVar('koordinator'),
                'area' => $this->request->getVar('area'),
                'foto_lokasi' => $namaGambar,
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
                'menu' => 'proyek',
                'title' => 'Edit Proyek',
                'proyek' => $this->proyekModel->getProyek($id_proyek)
            ];

            return view('/pages/edit_proyek', $data);

        }



        public function updateProyek($id_proyek) {


            // $nama_po = $this->request->getVar('nama_po');
            // dd($nama_po);
            $filefoto = $this->request->getFile('foto_lokasi');
            $fileLama = $this->request->getFile('fotoLama');
            // dd($filefoto);

            if ($filefoto->getError() == 4) {
                $namaGambar = $this->request->getVar('fotoLama');
            } else {
                $namaGambar = $filefoto->getRandomName();
                $filefoto->move('img', $namaGambar);

                // unlink('img/'. $this->request->getVar('gambarLama'));
            }

            $this->proyekModel->save([
                'id_proyek' => $id_proyek,
                'nama_po' => $this->request->getVar('nama_po'),
                'koordinator' => $this->request->getVar('koordinator'),
                'area' => $this->request->getVar('area'),
                'foto_lokasi' => $namaGambar,
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
<?php

    namespace App\Controllers;

    use App\Models\alatModel;

    class Alat extends BaseController {

        protected $alatModel;
        public function __construct() {
            $this->alatModel = new alatModel();
        }

        public function data_alat(){


            $pageAlat = $this->request->getVar('page_alat') ? $this->request->getVar('page_alat') : 1;

            $cariAlat = $this->request->getVar('keywordCari');

            if ($cariAlat) {
                $alat = $this->alatModel->search($cariAlat);
            } else {
                $alat = $this->alatModel;
            }

            $data = [
                'title' => 'Data Alat',
                // 'alat' => $this->alatModel->getAlat(),
                'alat' => $alat->paginate(5, 'alat'),
                'pager' => $this->alatModel->pager,
                'pageAlat' => $pageAlat
            ];

            // database connection without model

            // $db = \Config\Database::connect();
            // $alat = $db->query("SELECT * FROM alat");
            // foreach ($alat->getResultArray() as $row) {
            //     d($row);
            // }




            return view ('pages/data_alat', $data);
        }


        public function detail($kode_alat) {
            // echo $kode_alat;
            
            $data = [
                'title' => 'Detail Alat',
                'alat' => $this->alatModel->getAlat($kode_alat)
            ];
            return view('pages/detail_alat', $data);
        }

        public function insertAlat() {
            
            // session();

            $data = [
                'title' => 'Tambah Alat',
                'validation' => \Config\Services::validation()
            ];

            return view('pages/insert_alat', $data);
        }

        public function simpanAlat() {

            session();
            // validasi input
            if (!$this->validate([
                'kode_alat' => [
                    'rules' => 'required|is_unique[alat.kode_alat]',
                    'errors' => [
                        'required' => '{field} kode alat tidak boleh kosong.',
                        'is_unique' => '{field} kode alat sudah terdaftar.'
                    ]
                ]

                // 'gambar' => [
                //     'rules' => 'max_size[gambar,1024]|is_image[sampul]|mime_in[image,image/jpg,image/jpeg,image/png]',
                //     'error' => [
                //         'max_size' => 'ukuran file gambar terlalu besar',
                //         'is_image' => 'file yang dipilih bukan file gambar',
                //         'mime_in' => 'file yang dipilih bukan file gambar'
                //     ]
                // ]

            ])) {
                $validation = \Config\Services::validation();

                // return redirect()->to('alat/inser_alat')->withInput()->with('validation', $validation);

                return redirect()->back()->withInput()->with('validation', $validation);


            }

            $fileGambar = $this->request->getFile('gambar');

            if ($fileGambar->getError() == 4) {

                $namaGambar = 'default_picture.png';

            } else {

                $namaGambar = $fileGambar->getRandomName();
                $fileGambar->move('img', $namaGambar);
                
            }



            $this->alatModel->save([
                'status' => 1,
                'kode_alat' => $this->request->getVar('kode_alat'),
                'nama_alat' => $this->request->getVar('nama_alat'),
                'brand' => $this->request->getVar('brand'),
                'kondisi' => $this->request->getVar('kondisi'),
                'gambar' => $namaGambar,
                'keterangan' => $this->request->getVar('keterangan')
            ]);


            session()->setFlashdata('sukses-simpan-data', 'Data berhasil ditambahkan');


            return redirect()->to('alat/');
        }


        public function hapusAlat($id){
            session();
            
            



            $this->alatModel->hapusId($id);

            session()->setFlashdata('sukses-hapus-data', 'Data berhasil dihapus');

            return redirect()->to('/alat');
        }


        public function editAlat($id) {

            $data = [
                'title' => 'Edit Alat',
                'validation' => \Config\Services::validation(),
                'alat' => $this->alatModel->getId($id)
            ];

            return view('pages/edit_alat', $data);



        }


        public function updateAlat($id) {


            // cek kode alat
            // $kodeAlatlama = $this->alatModel->getAlat($this->request->getVar('kode_alat'));

            
            
            // $cekSamaData=0;
            // for ($i=0; $i<count($kodeAlatlama); $i++ ){
            //     if ($kodeAlatlama[$i]['kode_alat'] == $this->request->getVar('kode_alat')){
            //         $cekSamaData += 1;
            //     }
            // }
            // // dd(count($kodeAlatlama));
            // // dd($this->request->getVar('kode_alat'));

            // if ($this->request->getVar('kode_alat') == "") {
            //     $rule_judul = 'required';
            // } elseif ($cekSamaData > 0) {
            //     $rule_judul = 'required|is_unique[alat.kode_alat]';
            // }

            // if (!$this->validate([
            //     'kode_alat' => [
            //         'rules' => $rule_judul,
            //         'errors' => [
            //             'required' => '{field} kode alat tidak boleh kosong.',
            //             'is_unique' => '{field} kode alat sudah terdaftar.'
            //         ]
            //     ]

            // ])) {
            //     $validation = \Config\Services::validation();

            //     // return redirect()->to('alat/inser_alat')->withInput()->with('validation', $validation);

            //     return redirect()->back()->withInput()->with('validation', $validation);
            // }

            $fileGambar = $this->request->getFile('gambar');

            if ($fileGambar->getError() == 4) {
                $namaGambar = $this->request->getVar('gambarLama');
            } else {
                $namaGambar = $fileGambar->getRandomName();
                $fileGambar->move('img', $namaGambar);

                // unlink('img/'. $this->request->getVar('gambarLama'));
            }

            $this->alatModel->save ([
                'id' => $id,
                // 'kode_alat' => $this->request->getVar('kode_alat'),
                'nama_alat' => $this->request->getVar('nama_alat'),
                'brand' => $this->request->getVar('brand'),
                'kondisi' => $this->request->getVar('kondisi'),
                'gambar' => $namaGambar,
                'keterangan' => $this->request->getVar('keterangan')
            ]);


            session()->setFlashdata('sukses-update-data', 'Data berhasil dirubah');


            return redirect()->to('alat/');

        }

        public function hapus() {
            if ($this->request->isAjax()) {
                $id = $this->request->getVar('id');

                $this->alatModel->delete($id);

                $msg = [
                    'sukses' => "Data Berhasil Dihapus"
                ];

                echo json_encode($msg);
            }
        }

        




    }

?>
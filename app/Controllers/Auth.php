<?php 

namespace App\Controllers;

use App\Models\authModel;

class Auth extends BaseController
{   
    protected $authModel;
    public function __construct() {
        helper('form');
        $this->authModel = new authModel();
    }

    public function index() {
        $data = [
            'title' => 'login'
        ];

        return view('pages/login', $data);
    }
    // pembatalan session $cek
    public function keluar() {
        session()->destroy();
        return redirect()->to('/');
    }

    public function cekLogin() {
        if ($this->validate([

            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi tidak boleh kosong !'
                ]
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi tidak boleh kosong !'
                ]
            ]
        ])) {

            // valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $cek = $this->authModel->login($username, $password);

            if ($cek) {
                session()->set('log',true);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('level', $cek['level']);

                return redirect()->to(base_url('pages'));
            } else {

                session()->setFlashdata('pesan', 'login gagal, periksa kembali username dan password');
                return redirect()->to(base_url('/'));

            }
            
        } else {

        }
    }
}

?>
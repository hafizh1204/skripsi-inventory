<?php 

    namespace App\Controllers;

    class Pages extends BaseController {
        public function index()  {

            $data = [
                'menu' => 'dashboard',
                'title' => 'Dashboard|DJM Inventory',
                'active' => 'dashboard'
            ];
            
            return view('pages/dashboard', $data);
            
        }

        

        public function pinjam_alat()  {

            $data = [
                'title' => 'Pinjam|DJM Inventory',
            ];

            echo view ('pages/pinjam_alat', $data);
        }

    }


?>
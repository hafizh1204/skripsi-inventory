<?php 

    namespace App\Controllers;

    class Pages extends BaseController {
        public function index()  {

            $data = [
                'title' => 'Dashboard|DJM Inventory' 
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
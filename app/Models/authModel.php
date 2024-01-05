<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends model {
    protected $primaryKey = 'id_user';
    protected $table = 'user';
    // protected $useTimestamps = true;
    // protected $allowedFields = ['username', 'password'];


    public function getUser($id_user = false) {
        if ($id_user == false) {
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }

    public function login($username, $password) {
        return $this->db->table('user')->where ([
            'username' => $username,
            'password' => $password
        ])->get()->getRowArray();
    }
}
?>
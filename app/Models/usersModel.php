<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
        protected $table = 'users';
        protected $primaryKey = 'id';
        protected $allowedFields =['fullname', 'email', 'username', 'password', 'image_profile', 'created_at'];

        // public function tampil_userspostingan(){
        //         $this->db->order_by('id', 'ASC');
        //         return $this->db->from('users')
        //         ->join('postingan', 'postingan.id_users=users.id')
        //         ->get()
        //         ->result();
        // }

        public function simpan_gambar($data){
                $query = $this->db->table($this->table)->insert($data);
                return $query;
        }

}

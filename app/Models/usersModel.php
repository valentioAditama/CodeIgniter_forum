<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
        protected $table = 'users';
        protected $primaryKey = 'id';
        protected $allowedFields =['fullname', 'email', 'username', 'password', 'image_profile', 'created_at'];

        public function getUsers(){
                return $this->findAll();
        }
}

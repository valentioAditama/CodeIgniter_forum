<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    public function updateUsers($data, $id)
    {
        $query = $this->table('users')->update($data, array('id' => $id));
        return $query;
    }
    
    protected $table = 'users';
    protected $allowedFields =['id', 'fullname', 'email', 'username', 'password', 'image_profile', 'created_at'];
}

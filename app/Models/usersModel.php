<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields =['id', 'fullname', 'email', 'username', 'password', 'image_profile', 'created_at'];
}

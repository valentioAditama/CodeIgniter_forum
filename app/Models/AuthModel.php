<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';
    protected $allowedFields =['fullname', 'email', 'username', 'password', 'image_profile', 'created_at'];
}

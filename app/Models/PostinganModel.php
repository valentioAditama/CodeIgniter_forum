<?php

namespace App\Models;

use CodeIgniter\Model;

class PostinganModel extends Model
{
    protected $table = 'postingan'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['id_users', 'postingan'];

    // public function savePostingan($data) {
    //     $query = $this->db->table('postingan')->insert($data);
    //     return $query;
    // }
}

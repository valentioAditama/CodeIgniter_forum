<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\usersModel;

class HomeController extends BaseController
{

    public function __construct()
    {
        $this->session = session();

        $this->userModel = new usersModel();
    }

    public function index()
    {
        // Cek jika home tidak ada users maka akan dikembalikan lagi ke dalam login
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('postingan', 'postingan.id_users=users.id')->orderBy('postingan.id', 'DESC');
        $query = $builder->get()->getResult();
        $data['users'] = $query;

        // $builder = $db->table('users');
        // $query = $builder->get()->getResult();
        // $data['users'] = $query;

        return view('main/home', $data);
    }
}

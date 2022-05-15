<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostinganModel;
use App\Models\usersModel;

class ExploreController extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->userModel = new usersModel();
    }
    public function index()
    {
        if (!$this->session->has('Loggedin')) {
            return redirect()->to('/');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('postingan', 'postingan.id_users=users.id')->orderBy('postingan.id', 'DESC');
        $query = $builder->get()->getResult();
        $data['users'] = $query;

        return view('main/explore', $data); 
    }
}

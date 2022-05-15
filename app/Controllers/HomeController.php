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

        $users = new usersModel();
        $data = $users->getUsers();
        return view('main/home', compact('data'));
    }
}

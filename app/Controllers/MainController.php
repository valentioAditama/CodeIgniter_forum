<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Users;
use App\Models\usersModel;

class MainController extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        // Cek jika home tidak ada users maka akan dikembalikan lagi ke dalam login
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        return view('main/home');
    }

    public function profile()
    {
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        // menampilkan halaman Profile 
        return view('main/profile');
        
    }

    //membuat untuk memanggil data read dari database untuk melihat semua informasi user yang berada di session ini
    public function UpdateUsers()
    {
        $users = new usersModel();
        $id = $this->request->getPost('id');
        $data = array(
            'fullname'  => $this->request->getPost('fullname'),
            'email'  => $this->request->getPost('email'),
            'username'  => $this->request->getPost('username'),
            // 'password'  => $this->request->getPost('password')
        );
        $users->updateUsers($data, $id);
        return redirect()->to('/profile');
        // menampilkan halaman Profile 
        return view('main/profile', $data);
        
    }
}

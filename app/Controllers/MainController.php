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

        echo view('main/home');
    }

    public function profile($id)
    {
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        $dataUsers = new usersModel();
        $data['users'] = $dataUsers->where('fullname', $id)->first();

        $validation = \config\Services::validation();
        $validation->setRules([
            'fullname' => 'required',
            'id' => 'required',
        ]);

        $IsValidData = $validation->withRequest($this->request)->run();
        // jika data valid maka simpan ke database
        if($IsValidData){
            $dataUsers->update($id, [
                "fullname" => $this->request->getPost('fullname'),
                "email" => $this->request->getPost('email'),
                "username" => $this->request->getPost('username')
            ]);
            return redirect('home/profile');
        }

        echo view('main/profile', $data);
    }
}

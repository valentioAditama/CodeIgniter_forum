<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Users;
use App\Models\usersModel;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();

        $this->session = session();
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

    public function profile($id = null)
    {
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        if($id != null){
           $query = $this->userModel->table('users')->getwhere(['id' => $id]);
           if($query->resultID->num_rows > 0){
                $data['users'] = $query->getRow();
                return view('main/profile', $data);
           }else{
               throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
           }
        } else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id){
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        };

        // $data = $this->request->getPost();
        // unset($data['_method']);

        $users = new usersModel();
        $users->update([
            'fullname' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
        ]);

        // $this->userModel->table('users')->where(['id' => $id])->update($data);
        // session()->setFlashdata('error', 'username or password salah!');
        // return view('main/home');
    }
}

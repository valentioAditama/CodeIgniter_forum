<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostinganModel;
use App\Models\usersModel;

class PostinganController extends BaseController
{

    public function __construct()
    {
        $this->session = session();

        $this->postinganModel = new PostinganModel();

        $this->userModel = new usersModel();
    }

    public function index(){
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }
        $users = new usersModel();
        $data = $users->getUsers();
        return view('main/uploadPostingan', compact('data'));
    }

    public function postingan($id = null) {
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        if($id != null){
            $query = $this->userModel->table('users')->getwhere(['id' => $id]);
            if($query->resultID->num_rows > 0){
                 $data['users'] = $query->getRow();
                 return view('main/uploadPostingan', $data);
            }else{
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
         } else{
             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
         }
    }

    public function storePostingan($id){
        if(!$this->session->has('Loggedin')){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        $db = \Config\Database::connect();

        $users = new usersModel();
        $postingan = new PostinganModel();

        $id_users = $this->request->getVar('id_users');
        $postingan->insert([
            'id_users' => $id_users,
            'postingan' => $this->request->getVar('postingan')  
        ]);
        return redirect()->to('/home');
    }

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\usersModel;

class ChatController extends BaseController
{
    public function __construct()
    {
        $this->session = session();

        $this->userModel = new usersModel();
    }

    public function index($id = null)
    {
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        if($id != null){
           $query = $this->userModel->table('users')->getwhere(['id' => $id]);
           if($query->resultID->num_rows > 0){
                $data['users'] = $query->getRow();
                return view('main/chat', $data);
           }else{
               throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
           }
        } else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}

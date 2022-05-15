<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Users;
use App\Models\usersModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\Request;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();

        $this->session = session();
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
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        };

        $db = \Config\Database::connect();

        $users = new usersModel();
        $id = $this->request->getVar('id');

                 $rules = [
                'image' => [
                    'label' => 'Gambar',
                    'rules' => 'uploaded[image]|is_image[image]|max_size[image, 5120]'
                ],
            ];

            if($this->validate($rules)){
                $image = $this->request->getFile('image');
                $namafile = $image->getClientName();
                $image->move('uploads');

                // $db->table('users')->update([
                //     'image_profile' => $namafile
                // ]);
            }

        $data = [
            'fullname' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'image_profile' => $namafile
        ];

        // $data['image'] = $db->table('users')->get()->getResult();
        // return view('main/profile', $data);
        $users->update($id, $data);
        return redirect()->to('/profile/edit/'. $id)->with('success', 'Data berhasil di update!');
    }

    // public function uploadGambar(){
    //     if ($this->request->getMethod() === "post") {
    //         $rules = [
    //             'image' => [
    //                 'label' => 'Gambar',
    //                 'rules' => 'uploaded[image]|is_image[image]|max_size[image, 5120]'
    //             ],
    //         ];

    //         if($this->validate($rules)){
    //             $image = $this->request->getFile('image');
    //             $image -> move('uploads');

    //             redirect()->back()->with('success', 'Data gambar berhasil di simpan');
    //         }

    //     }
        
    //     return view('main/profile');
    // }
}
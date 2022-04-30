<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\AuthModel;

class AuthController extends BaseController
{
    public function __construct()
    {
        // membuat user model untuk mengkoneksi ke database
        $this->userModel = new AuthModel();

        // men-load validaton
        $this->validation = \Config\Services::validation();

        // men-load session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        // menampilkan halaman login
        return view('auth/login');
    }

    public function loginStore()
    {
        $users = new AuthModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email, 
        ])->first();
        if($dataUser){
            if (password_verify($password, $dataUser['password'])){
                session()->set([
                    'email' => $dataUser['email'],
                    'fullname' => $dataUser['fullname'],
                    'Loggedin' => TRUE 
                ]);
                return redirect()->to('/home');
            } else{
                session()->setFlashdata('error', 'username or password salah!');
                return redirect()->back();
            }
        }else{
            session()->setFlashdata('error', 'username or password salah!');
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerStore()
    {
        $Auth = new AuthModel();
        $Auth->insert([
            'fullname' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ]);
        return redirect()->to('/');
    }

    public function forgotPassword()
    {
        return view('auth/forgotPassword');
    }

    public function logout()
    {
        // jika session masi ada dan masih dihalaman home, maka akan di hancurkan oleh fungsi session Destroy
        session()->destroy();
        // dan di kembalikan ke halaman login
        return redirect()->to('/');
    }
}

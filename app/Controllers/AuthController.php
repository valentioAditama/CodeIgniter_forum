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
        // ambil data dari form
        $data = $this->request->getPost();
        
        // ambil data user di database yang emailnya sama
        $user  = $this->userModel->where('email', $data['email'])->first();
        $fullname = $this->userModel->where('fullname');

        // cek email jika ada maka di lanjutkan ke home
        if ($user) {
            // cek password users 
            // jika ada maka di lanjutkan ke halaman home jika tidak maka akan di tetapkan di login page
            if(password_verify($data['password'], $user['password'])){
                $sessionLogin = [
                    'Loggedin' => TRUE,
                    'email ' => $user['email']
                ];
                $this->session->set($sessionLogin);
                return redirect()->to('/home');
            }else{
                return redirect()->to('/');
            }
        } else {
            // jika username tidak ditemukan maka akan di tetapkan di halaman login
            session()->setFlashdata('email', 'email dan password anda salah!');
            return redirect()->to('/');
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

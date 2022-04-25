<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');

        $validation = \Config\Services::validation();
        $validation->setRules(['fullname' => 'required']);
    }

    public function forgotPassword()
    {
        return view('auth/forgotPassword');
    }
}

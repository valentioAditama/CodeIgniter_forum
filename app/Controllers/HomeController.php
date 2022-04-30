<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{    
    public function index()
    {
        $this->session = session();
        // Cek jika home tidak ada users maka akan dikembalikan lagi ke dalam login
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }

        return view('main/home');
    }
}

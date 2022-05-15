<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ChatController extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        if(!$this->session->has('Loggedin')){
            return redirect()->to('/');
        }
        
        return view('main/chat');
    }
}

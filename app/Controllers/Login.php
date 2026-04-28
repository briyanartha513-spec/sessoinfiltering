<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'login'
        ];
        return view('login_page');
    }

    function auth() {
        $d_email = "user@example.com";
        $d_password = "example123";
        $email = $this->request->getPost('email');
        $paswd = $this->request->getPost('paswd');

        if($d_email == $email AND $d_password == $paswd)
        {
            $datauser = [
                'userid' => 1,
                'email' => $email,
                'isLoggedin' => true
                ];
            session()->set($datauser);
            session()->set('member','premium');
            return redirect()->to('/');;
        }
        else {
            echo "user not found";
        }

    }
    
}
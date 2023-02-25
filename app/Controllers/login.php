<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('auth/login_page');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['passwordHash'];
            $verifyPassword = password_verify($password, $pass);
            if ($verifyPassword) {
                $ses_data = [
                    'user_id'       => $data['id'],
                    'user_name'     => $data['firstName'],
                    'user_email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url() . 'public/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url() . 'public/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url() . 'public/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url().'public/login');
    }
}

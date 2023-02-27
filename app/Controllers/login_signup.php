<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class login_signup extends BaseController
{
    public function index()
    {
        $logedIn = session()->get('logged_in');

        if ($logedIn == true) {
            return redirect()->to(base_url() . 'public/categories');
        }
        helper(['form']);
        echo view('auth/login_page');
    }

    public function signUp_view()
    {
        $logedIn = session()->get('logged_in');

        if ($logedIn == true) {
            return redirect()->to(base_url() . 'public/categories');
        }

        helper(['form']);
        echo view('auth/signUp_page');
    }

    public function userSignUp()
    {
        $model = new UserModel();
        $data = [
            'firstName' => $this->request->getVar('txtFirstName'),
            'lastName'    => $this->request->getVar('txtLastName'),
            'email'    => $this->request->getVar('txtEmail'),
            'mobileNumber'    => $this->request->getVar('txtMobileNumber'),
            'passwordHash' => password_hash($this->request->getVar('txtPassword'), PASSWORD_DEFAULT)
        ];
        $model->save($data);
        return redirect()->to(base_url() . 'public/login');
    }

    public function login()
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
                return redirect()->to(base_url() . 'public/categories');
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
        return redirect()->to(base_url() . 'public/login');
    }
}

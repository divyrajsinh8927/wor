<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\UserModel;

    class signUp extends BaseController
    {
        public function index()
        {
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
    }
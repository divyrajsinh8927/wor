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
    }
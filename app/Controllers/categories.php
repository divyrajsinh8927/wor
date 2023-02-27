<?php
 namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\CategoryModel;

class categories extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in') == false)
        {
            return redirect()->to(base_url() . 'public/login');
        }
        echo view('categories');
    }

    public function getAllCategories()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();
    }
}
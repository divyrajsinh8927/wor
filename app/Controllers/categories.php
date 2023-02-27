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
        $categoryModel = new CategoryModel();
        $categories['categories_List'] = $categoryModel->findAll();
        echo view('categories',$categories);
    }

    public function addCategory()
    {
        $categoryModel = new CategoryModel();
        $categoryData = ['categoryName' => $this->request->getVar('txtcategoryName')];

        $categoryModel->save($categoryData);
        return redirect()->to(base_url() . 'public/categories');
    }

}
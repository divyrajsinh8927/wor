<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
class category extends Controller
{
    public function index()
    {
        $data['title'] = "Hello World from Codeigniter 4";
        echo view('category_view', $data);
    }
 
}
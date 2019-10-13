<?php
namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;

class  CategoryController extends Controller{

    public function indexAction($category){
        return view('application/category/index')->with('category',$category);
    }
}

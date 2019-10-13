<?php
namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;

class  IndexController extends Controller{
    public function indexAction(){
        return view('application/index/welcome');
    }
}

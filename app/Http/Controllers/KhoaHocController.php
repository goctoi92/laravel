<?php
namespace App\Http\Controllers;

class KhoaHocController extends Controller {

    public function indexAction(){
        return view('new');
    }

    public function phpAction(){
        echo 'php';
    }

    public function mobileAction(){
        echo 'mobile';
    }
}
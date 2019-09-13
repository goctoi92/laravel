<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function indexAction(){
        return view('admin.admin');
    }
    public function logoutAction()
    {
        Auth::logout();
        return redirect()->route('login.login');
    }

}

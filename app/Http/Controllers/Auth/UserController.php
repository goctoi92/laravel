<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function indexAction()
    {
        return view('admin.user.list');
    }


    public function deleteAction()
    {
    }

    public function editAction()
    {
    }

    public function postEditAction()
    {
    }
}
<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

class ToolGetPostController extends Controller
{

    public function indexAction()
    {

        return view('admin/tool/index');
    }
}
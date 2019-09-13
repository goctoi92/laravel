<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRequest;
use App\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function addAction()
    {
        return view('admin.user.add');
    }

    public function postAddAction(RegisterRequest $request)
    {
        if (session('error') != null)
            return redirect()->route('admin.user.add');
        $user = new User();
        $user->addUser($request);
        return redirect()->route('admin.user.list')
            ->with([
                'flash_message' => 'Insert success',
                'flash_level' => 'success'
            ]);
    }
}

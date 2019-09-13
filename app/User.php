<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function product(){
        return $this->hasMany('App\Products');
    }

    public function addUser(Request $data){
        $user = new User();
        $user->name = $data->input('inputName');
        $user->email = $data->input('inputEmail');
        $user->password = Hash::make($data->input('inputPassword'));
        $user->level = $data->input('inputLevel');
        $user->remember_token = $data->input('_token');

        $user->save();
    }
}

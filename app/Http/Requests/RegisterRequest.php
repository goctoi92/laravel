<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputName' => 'required',
            'inputEmail' => 'required|email|unique:users,email',
            'inputPassword' => 'required|min:6',
            'inputConfirmPassword' => 'required_with:inputPassword|same:inputPassword|min:6'
        ];
    }

    public function messages()
    {
        return [
            'inputName.required' => 'Ten khong de trong',
            'inputEmail.unique' => 'Email nay da ton tai',
            'inputEmail.email' => 'Email khong dung dinh dang email@xxx.xx',
            'inputEmail.required' => 'Email khong de trong',
            'inputPassword.required' => 'Password khong de trong',
            'inputPassword.min' => 'Password it nhat 6 ky tu',
            'inputConfirmPassword.min' => 'Password it nhat 6 ky tu',
            'inputConfirmPassword.required_with' => 'Password khong de trong',
            'inputConfirmPassword.same' => 'Khong trung voi Password'
        ];
    }
}

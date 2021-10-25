<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return  $user_data =  [
            'name' => 'required|string|max:255|min:5',
            'username' => 'required|string|max:255|min:5|unique:users,username',
            'email' => 'required|email|max:255|min:5|unique:users,email',
            'password' => 'required|max:255|min:5',

        ];
    }
}

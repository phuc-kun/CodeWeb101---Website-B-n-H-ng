<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInFormRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:6'
        ];
    }
    public function messages(){
        return [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không hợp lệ',
            'password.required'=>'Vui lòng nhập password',
            'password.min'=>'Password chứa ít nhất 6 kí tự'
        ];
    }
}

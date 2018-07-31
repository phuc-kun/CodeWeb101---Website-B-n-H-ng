<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpFormRequest extends FormRequest
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
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'rePassword'=>'required|same:password'
        ];
    }
    public function messages(){
        return [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Định dạng email không đúng',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu chứa ít nhất 6 kí tự',
            'name.required'=>'Vui lòng nhập họ tên',
            'rePassword.required'=>'Vui lòng nhập lại mật khẩu',
            'rePassword.same'=>'Mật khẩu không khớp',
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'address.required'=>'Vui lòng nhập địa chỉ'
        ];
    }
}

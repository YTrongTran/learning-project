<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'phone'=>'required',
            'otp' => 'required',
            'email'=>['required', 'email','unique:customs,email' ]
        ];
    }
    public function messages() {
        return [
            'name.required' => "Vui lòng nhập Họ Và Tên",
            'phone.required' => "Vui lòng nhập Số Điện Thoại",
            'otp.required' => "Vui lòng nhập Mã Otp",
            'email.required' => "Vui lòng nhập Email",
            'email.email' => "Email không hợp lệ",
            'email.unique' => "Email này đã được sử dụng",

        ];

    }
}

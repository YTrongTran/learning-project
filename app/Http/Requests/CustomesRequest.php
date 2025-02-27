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
            'name'=> 'required',
            'phone'=> 'required',
            'otp'=> 'required',
            'email'=> 'required|email',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập họ và tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'otp.required' => 'Vui lòng nhập mã otp',
            'email.required' => 'Vui lòng nhập thư điện tử',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
        ];
    }
}

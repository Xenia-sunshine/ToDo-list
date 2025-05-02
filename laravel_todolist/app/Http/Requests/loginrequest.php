<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginrequest extends FormRequest
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
            'email'=>'required|email',
            'phone'=>'required|min:10|max:50',
            'password'=>'required|min:8|max:50'
            //
        ];
    }
    public function attributes()
    {
        return [
            'name'=>'Логин'];}
    public function messages()
    {
        return [
            'name.required'=>'Логин является обязательным',
            'email.required'=>'Email является обязательным',
            'phone.required'=>'Введите номер телефона',
            'password.required'=>'Введите пароль'
        ];}
}

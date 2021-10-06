<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Це поле обовязкове до заповнення',
            'name.string' => 'Імя має бути рядкового типу',
            'email.required' => 'Це поле обовязкове до заповнення',
            'email.string' => 'Пошта має відповідати рядковому типу',
            'email.email' => 'Ваша пошта повинна відповідати наступному формату mail.example.com',
            'email.unique' => 'Користувач з таким email вже існує',
            'password.required' => 'Це поле обовязкове до заповнення',
            'password.string' => 'Пароль має бути рядкового типу'
        ];
    }
}

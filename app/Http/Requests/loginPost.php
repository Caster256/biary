<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginPost extends FormRequest
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
            'login_act' => 'required|min:6',
            'login_pwd' => 'required',
        ];
    }

    /**
     * 回傳錯誤的說明
     *
     * @return array
     */
    public function messages()
    {
        return [
            'login_act.required' => '請輸入帳號',
            'login_act.min' => '帳號格式錯誤',
            'login_pwd.required'  => '請輸入密碼',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'      => ['required'],
            'email'     => ['required', 'email:rfc', 'max:254'],
            'phone'     => ['required', 'regex:/^[0-9]{10,15}$/'],  
            'body'      => ['required', 'min:10'],  
            ];
    }

    public function attributes()
    {
        //
        return [
            // 'name'                  => '名前',
            // 'phone'                 => '電話番号',
            // 'email'                 => 'メールアドレス',
            // 'body'                  => 'お問い合わせ内容'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'phone.required' => '電話番号は必須です。',
            'body.required' => '問い合わせ内容は必須です。',
        ];
    }


}

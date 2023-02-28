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
            return [
                'name' => 'required|max:30',
                'email' => 'required|email',
                'mobile' => 'required|numeric',
                'password' => 'required|max:50',
            ];
        }
        public function messages()
        {
            return [
                'name.required' => 'اسم المستخدم مطلوب',
                'name.max' => 'اسم المستخدم أقل من 31 حرف',
                'email.required' => 'البريد الالكتروني مطلوب',
                'email.email' => 'يجب كتابته بصيغه @youraccount.com',
                'mobile.required' => 'رقم الهاتف مطلوب',
                'mobile.numeric' => 'الهاتف عبارة عن أرقام فقط',
                'password.required' => 'الرمز السري مطلوب',
                'password.max' => 'أقصى حد لكلمة المرورهو 51 رمز',
            ];
        }
}

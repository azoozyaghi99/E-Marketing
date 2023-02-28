<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric|gt:0'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'رقم المستخدم مطلوب',
            'user_id.exists' => 'رقم المستخدم غير موجود',
            'total.required' => 'الاجمالي مطلوب',
            'total.numeric' => 'الاجمالي فقط ارقام',
            'total.gt' => 'الاجمالي اكبر من صفر',
        ];
    }
}

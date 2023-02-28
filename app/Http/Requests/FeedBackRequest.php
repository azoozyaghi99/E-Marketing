<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackRequest extends FormRequest
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
            'product_id' => 'required|exists:products,id',
            'user_id ' => 'required|exists:users,id',
            'notes' => 'nullable|max:300',
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'رقم المنتج مطلوب',
            'product_id.exists' => 'رقم المنتج غير موجود',
            'user_id.required' => 'رقم المستخدم مطلوب',
            'user_id.exists' => 'رقم المستخدم غير موجود',
            'notes.max' => 'الملاحظات اقل من 300 حرف',
        ];
    }
}

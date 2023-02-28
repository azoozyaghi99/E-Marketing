<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartProductRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|numeric|gt:0',
            'notes' => 'nullable|max:255'
        ];
    }

    public function messages()
    {
        return [
            'cart_id.required' => 'رقم السلة مطلوب',
            'cart_id.exists' => 'رقم السلة غير موجود',
            'product_id.required' => 'رقم المنتج مطلوب',
            'product_id.exists' => 'رقم المنتج غير موجود',
            'qty.required' => 'الكمية مطلوب',
            'qty.numeric' => 'الكمية فقط ارقام',
            'qty.gt' => 'الكمية اكبر من صفر',
            'notes.max' => 'الملاحظات اقل من 255 حرف',
        ];
    }
}

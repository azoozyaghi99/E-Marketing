<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|gt:0',
            'offer_price' => 'nullable|numeric|gt:0',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'اسم المنتج مطلوب',
            'name.max' => 'اسم المنتج اقل من 30 حرف',
            'category_id.required' => 'رقم التصنيف مطلوب',
            'category_id.exists' => 'رقم التصنيف غير موجود',
            'price.required' => 'سعر المنتج مطلوب',
            'price.numeric' => 'سعر المنتج فقط ارقام',
            'price.gt' => 'سعر المنتج اكبر من صفر',
            'offer_price.numeric' => 'السعر بعد الخصم فقط ارقام',
            'offer_price.gt' => 'السعر بعد الخصم اكبر من صفر',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:100',
            'description' => 'nullable|max:300',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'nullable|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'اسم التصنيف مطلوب',
            'name.max' => 'اسم التصنيف اقل من 100 حرف',
            'description.max' => 'وصف التصنيف اقل من 300 حرف',
            'parent_id.exists' => 'التصنيف الرئيسي غير موجود',
            'is_active.in' => 'الفعالية صفر او واحد',
        ];
    }
}

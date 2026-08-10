<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>'required|string|exists:categories,id',
                // 'user'=>'required|string|max:255',
                'name_product'=>'required|string|max:255',
                'description'=>'nullable|string',
                'stock'=>'required|integer|min:0',
                'price'=>'required|numeric|min:0',
                'image'=>'nullable|image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048',
                
        ];
    }
}

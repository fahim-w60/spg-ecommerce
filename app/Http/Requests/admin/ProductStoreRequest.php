<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'translation_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'content' => ['required', 'string'],
            'image' => ['required', 'image', 'max:2048'], // Assuming you want to validate image uploads
            'categoryId' => ['required'],
            'brand_id' => ['required'],
            'store_id' => ['required'],
            'quantity' => ['required', 'integer'],
            'sku' => ['required', 'string', 'max:255'],
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Product name is required.',
            'name.string' => 'Product name must be a string.',
            'name.max' => 'Product name cannot exceed 255 characters.',
            'translation_name.string' => 'Bangla product name must be a string.',
            'translation_name.required' => 'Product name(Bangla) is required.',
            'description.required' => 'Description field is required.',
            'content.required' => 'Content field is required.',
            'image.required' => 'Image field is required.',
            'image.max' => 'The image size cannot exceed 2 MB.',
            'categoryId.required' => 'Category is required.',
            
            'brand_id.required' => 'Brand is required.',
        
            'store_id.required' => 'Store is required.',
            'quantity.required' => 'Quantity field is required.',
            'sku.required' => 'SKU is required.',
            'sku.max' => 'SKU cannot exceed 255 characters.',
        ];
    }
    
}

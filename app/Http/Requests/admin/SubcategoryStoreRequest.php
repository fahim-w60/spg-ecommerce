<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoryStoreRequest extends FormRequest
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
            'categoryId' => 'required',
            'name' => 'required|string|max:255',
            'translation_name' => 'required|string|max:255',
            'description' => 'required|string',
            'translation_description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'featured' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'categoryId.required' => 'Category Name field is required.', 
            'name.required' => 'Subcategory Name field is required.',
            'translation_name.required' => 'Subcategory Name (বাংলা) field is required.',
            'description.required' => 'Subcategory Description field is required.',
            'translation_description.required' => 'Subcategory Description (বাংলা) field is required.',
            'image.required' => 'Subcategory Image field is required.',
            'image.image' => 'Subcategory Image must be an image.',
            'image.mimes' => 'Subcategory Image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'Subcategory Image may not be greater than 2048 kilobytes.',
            'featured.required' => 'Featured field is required.',
            
        ];
    }
}

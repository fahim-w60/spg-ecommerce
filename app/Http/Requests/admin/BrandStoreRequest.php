<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandStoreRequest extends FormRequest
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
             'name' => 'required|string|max:255',
        'translation_name' => 'required|string|max:255',
        'description' => 'required|string',
        'translation_description' => 'required|string',
        'website' => 'required|url|max:255',
        'logo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'featured' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Brand Name field is required.',
            'translation_name.required' => 'Brand Name (বাংলা) field is required.',
            'description.required' => 'Brand Description field is required.',
            'translation_description.required' => 'Brand Description (বাংলা) field is required.',
            'website.required' => 'Brand Website field is required.',
            'website.url' => 'Brand Website must be a valid URL.',
            'logo.image' => 'Brand Logo must be an image.',
            'logo.mimes' => 'Brand Logo must be a file of type: jpeg, png, jpg, gif.',
            'logo.max' => 'Brand Logo may not be greater than 2048 kilobytes.',
            'featured.required' => 'Featured field is required.',
            'featured.in' => 'Featured field must be either "yes" or "no".',
        ];
    }
}

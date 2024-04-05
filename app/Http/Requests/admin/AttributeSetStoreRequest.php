<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AttributeSetStoreRequest extends FormRequest
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
                'title' => 'required|string|max:120',
                'translation_name' => 'required|string|max:120',
                'display_layout' => 'required|string',
                'searchable' => 'required', 
                'comparable' => 'required', 
                'useInProductListing' => 'required',
                'useImageFromProductVariation' => 'required',
            ];
        }
        public function messages()
        {
            return [
                'title.required' => 'Title is required.',
                'title.max' => 'Title should not exceed 120 characters.',
                'translation_name.required' => 'Title(বাংলা) is required.',
                'display_layout.required' => 'Display Layout is required.',
                'translation_name.max' => 'Title(বাংলা) should not exceed 120 characters.',
                'searchable.required' => 'Searchable field is required.',
                'comparable.required' => 'Comparable field is required.',
                'useInProductListing.required' => 'Use In Product Listing field is required.',
                'useImageFromProductVariation.required' => 'Use Image From Product Variation field is required.',
            ];
        }
}

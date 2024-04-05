<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AttributeUpdateRequest extends FormRequest
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
        'attribute_set_id' => 'required',
        'title' => 'required|string|max:191',
        'translation_name' => 'required|string|max:191',
        'color' => 'required', 
        
        'default' => 'required', 
        ];
   
    }

    public function messages()
    {
        return [
            'attribute_set_id.required' => 'Attribute Set is required.',
            'title.required' => 'Title is required.',
            'title.string' => 'Title must be a string.',
            'title.max' => 'Title should not exceed 191 characters.',
            'translation_name.required' => 'Title(বাংলা) is required.',
            'translation_name.string' => 'Title(বাংলা) must be a string.',
            'translation_name.max' => 'Title(বাংলা) should not exceed 191 characters.',
            'color.required' => 'Colour is required.', 
           
            'default.required' => 'Default field is required.',
        ];
    }

}

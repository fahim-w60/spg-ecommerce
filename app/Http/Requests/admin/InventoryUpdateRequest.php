<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class InventoryUpdateRequest extends FormRequest
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
            'attribute_id' => 'required',

            'inventory_price' => 'required|numeric',
            'inventory_quantity' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'attribute_set_id.required' => 'Attribute Set is required.',
            'attribute_id.required' => 'Attribute is required.',
            'inventory_price.required' => 'Price is required.',
            'inventory_quantity.required' => 'Quantity is required.',
            
            'numeric' => 'The :attribute must be a number.',
        ];
    }
}

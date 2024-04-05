<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class InventoryStoreRequest extends FormRequest
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
    public function rules()
    {
        return [
            'attribute_set_id' => 'required',
            'attribute_id' => 'required',
            'inventory_price' => 'required|numeric',
            // 'inventory_sale_price' => 'nullable|numeric|min:0',
            'inventory_quantity' => 'required|numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
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

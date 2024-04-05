<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminStoreRequest extends FormRequest
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
        $user = Auth::user(); // Use Auth::user() to get the authenticated user instance

        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|unique:users,phone,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id, 
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'address' => 'required|string',
        ];
    }
}

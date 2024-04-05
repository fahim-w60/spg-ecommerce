<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class VideoStroeRequest extends FormRequest
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
            'video_link' => 'required',
            'video_provider' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'video_link.required' => 'Video link is required.',
            'video_provider.required' => 'Video provider is required.',
        ];
    }
}

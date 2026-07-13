<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:2',
            'slug' => 'required',
            'short_description' => 'nullable|max:150',
            'description' => 'nullable|max:600',
            'price' => 'numeric|min:1',
            "selling_price" => 'nullable',
            'image' => 'nullable|mimes:webp,jpeg,jpg,png,svg|max:5124',
        ];
    }
}

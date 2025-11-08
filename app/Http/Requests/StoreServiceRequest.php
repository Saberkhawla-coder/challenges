<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            //
            'title' => 'required|string|min:5|max:25',
            'description' => 'required|string|min:10|max:255',
            'duration' => 'required|integer',
            'price' => 'required|numeric|min:0.01',
            'image' => 'nullable|image|mimes:jpg,png|max:2048',
        ];
    }
}

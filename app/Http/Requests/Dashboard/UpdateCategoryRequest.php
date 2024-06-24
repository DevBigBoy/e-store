<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'parent_id' => ['nullable', 'integer', 'exists:categories,id'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'image', File::image()->max('2mb')],
            'status' => ['required', 'in:active,archived'],
        ];
    }
}

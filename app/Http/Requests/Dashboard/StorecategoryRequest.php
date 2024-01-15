<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\Filter;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StorecategoryRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                // 1 createing custome rule

                // function (string $attribute, mixed $value, Closure $fail) { {
                //     if (strtolower($value) == 'laravel') {
                //         $fail('This name is forbidden!');
                //     }
                // }

                // 2 use rule class
                // new Filter

                // 3 macro
                'filter:php,laravel,css'
            ],
            'parent_id' => ['nullable', 'integer', 'exists:categories,id'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'image', File::image()->max('2mb')],
            'status' => ['required', 'in:active,archived'],
        ];
    }
}
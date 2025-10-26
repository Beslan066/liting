<?php

namespace App\Http\Requests\Admin\Author;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'lead' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,webp,png',
            'user_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заголовок обязателен для заполнения.',
            'name.string' => 'Заголовок должен быть строкой.',
            'lead.max' => 'Длина краткого описания не должна превышать 255 символов.',
            'image.mimes' => 'Изображение должно быть в формате: jpg, jpeg, webp, png.',
            'user_id.required' => 'Выбор автора обязателен.',
        ];
    }
}

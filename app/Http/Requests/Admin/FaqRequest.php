<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:3|max:64|regex:/^[a-z0-9áéíóúàèìòùäëïöüñ!?\s]+$/i',
            'question' => 'required|min:3|max:255|regex:/^[a-z0-9áéíóúàèìòùäëïöüñ!?\s]+$/i',
            'answer' => 'required|min:3|max:255|regex:/^[a-z0-9áéíóúàèìòùäëïöüñ!?\s]+$/i',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio',
            'title.min' => 'El mínimo de caracteres permitidos para el título son 3',
            'title.max' => 'El máximo de caracteres permitidos para el título son 64',
            'question.required' => 'El título es obligatorio',
            'question.min' => 'El mínimo de caracteres permitidos para el título son 3',
            'question.max' => 'El máximo de caracteres permitidos para el título son 255',
            'answer.required' => 'El título es obligatorio',
            'answer.min' => 'El mínimo de caracteres permitidos para el título son 3',
            'answer.max' => 'El máximo de caracteres permitidos para el título son 255',
        ];
    }
}

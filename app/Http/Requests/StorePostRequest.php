<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:posts|max:150',
            'slug' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique' => 'Il titolo deve essere unico',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'slug.required' => 'Il post deve avere uno slug. Per far ciò, inserisci il titolo',
            'slug.max' => 'Il link slug deve avere massimo :max caratteri',
        ];
    }
}

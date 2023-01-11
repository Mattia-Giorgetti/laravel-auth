<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects|max:150|min:3',
            'proj_description' => 'nullable',
            'code_lang' => 'nullable',
            'github_link' => 'nullable',
            'cover_image' => 'nullable|image'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Titolo obbligatorio!',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri!',
            'title.max' => 'Il titolo può contenere massimo :max caratteri',
            'title.unique:projects' => 'Questo titolo esiste già'
        ];
    }
}

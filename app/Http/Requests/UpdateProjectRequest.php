<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', Rule::unique('projects')->ignore($this->project)],
            'proj_description' => ['nullable', 'max:300'],
            'code_lang' => ['nullable', 'max:100'],
            'cover_image' => ['required', 'image', 'max:1000']
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Titolo obbligatorio!',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri!',
            'title.max' => 'Il titolo può contenere massimo :max caratteri',
            'title.unique:projects' => 'Questo titolo esiste già',
            'proj_description.max' => "La descrizione può essere massimo di :max caratteri",
            'code_lang.max' => 'Questo campo non può contenere più di :max caratteri',
            'cover_image.required' => "L'immagine è obbligatoria!",
            'cover_image.max' => "L'immagine è troppo grande!"
        ];
    }
}

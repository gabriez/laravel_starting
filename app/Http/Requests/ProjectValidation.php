<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; /* This is due to there's no real authorization here */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'url' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El titulo es requrido',
            'description.required' => 'La descripcion es un campo necesario',
            'url.required' => 'Agregar la url amigable es preciso'
        ];
    }
}

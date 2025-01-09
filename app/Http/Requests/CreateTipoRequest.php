<?php

namespace App\Http\Requests;

use App\Models\Tipo;
use Illuminate\Foundation\Http\FormRequest;

class CreateTipoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return Tipo::$rules;
    }

    public function messages()
    {
        return Tipo::$messages;
    }
}

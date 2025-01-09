<?php

namespace App\Http\Requests;

use App\Models\Estado;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEstadoRequest extends FormRequest
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
        $rules = Estado::$rules;
        
        return $rules;
    }

    public function messages()
    {
        return Estado::$messages;
    }
}

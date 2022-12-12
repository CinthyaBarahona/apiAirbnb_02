<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarHostRequest extends FormRequest
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
        return [
            "nombre" => "required",
            "descripcion" => "required", 
            "estado" => "required",
            "urlfoto" => "required",
            "urllogo" => "required", 
            "estado" => "required",
            "ruta_id" => "required",
            "user_id" => "required"
        ];
    }
}

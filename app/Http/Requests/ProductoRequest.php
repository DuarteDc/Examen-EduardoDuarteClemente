<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'=> 'required',
            'nombre'=> 'required',
            'precio'=> 'required',
            'stock'=> 'required',
            'updated_at'=> 'required',
            'created'=> 'required',
        ];
    }
}

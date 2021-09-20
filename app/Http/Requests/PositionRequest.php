<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'position_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Field ini tidak boleh kosong'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'regist_number' => 'required',
            'name' => 'required|max:50',
            'born' => 'required|date',
            'sex' => 'required|max:10',
            'departement_id' => 'required|integer',
            'generation_id' => 'required|integer',
            'position_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Field ini tidak boleh kosong',
            'max' => 'Data yang dimasukan terlalu panjang',
            'integer' => 'Tipe data tidak valid',
        ];
    }
}

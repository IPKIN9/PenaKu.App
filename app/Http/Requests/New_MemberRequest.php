<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class New_MemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'regis_number' => 'required',
            'name' => 'required',
            'born' => 'required',
            'sex' => 'required',
            'departemen_id' => 'required',
            'semester' => 'required',
            'cause' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Field ini tidak boleh kosong'
        ];
    }
}

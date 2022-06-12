<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LabRequest extends FormRequest
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
            'name'  => 'required',
            'type' => 'required',
            'medical_center_id' => '',
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'اسم المعمل مطلوب ',
            'type.required'  => ' نوع المعمل مطلوب'
        ];
    }
}
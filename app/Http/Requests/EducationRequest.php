<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'degree'=>'required|string',
            'uni'=>'required|string',
            'collage'=>'required|string',
            'GPA'=>'required',
            'start_date'=>'required|string',
            'end_date'=>'required|string',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'هذا الحقل مطلوب',
            'string'=>'هذا الحقل يجب ان يكون احرف',
        ];
    }
}

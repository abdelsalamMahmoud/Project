<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterestsRequest extends FormRequest
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
            'details'=>'required|string',
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

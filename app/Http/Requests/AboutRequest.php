<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'name'=>'required|string|max:100',
            'address'=>'required|string|max:100',
            'email'=>'required|email|max:100',
            'about'=>'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'هذا الحقل مطلوب',
            'string'=>'هذا الحقل يجب ان يكون احرف',
            'email.email'=>'برجاء ادخال بريد صالح',
            'name.max'=>'الاسم لا يمكن ان يزيد عن 100 حرف',
            'address.max'=>'الاسم لا يمكن ان يزيد عن 100 حرف',
            'email.max'=>'الاسم لا يمكن ان يزيد عن 100 حرف',
            'about.max'=>'الاسم لا يمكن ان يزيد عن 255 حرف',
        ];
    }
}

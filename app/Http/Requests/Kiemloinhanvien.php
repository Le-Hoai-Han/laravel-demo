<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kiemloinhanvien extends FormRequest
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
            'hoten'=>'required|unique:nhanvien|max:255',
            'namsinh'=>'required|date',
            'gioitinh'=>'required|max:3|min:2',
            'diachi'=>'required|min:5',
            'phongban'=>'required'
        ];
    }
}

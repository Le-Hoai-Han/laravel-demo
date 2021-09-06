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
            'gioitinh'=>'required',
            'diachi'=>'required|min:5',
            'phongban'=>'required'
        ];
    }
    
    public function messages()
    {
        return[
            'hoten.required'=>'Họ tên không được để trống',
            'hoten.unique'=>'Họ tên đã được sử dụng',
            'namsinh.required'=>'Năm sinh tên không được để trống',
            'namsinh.date'=>'Năm sinh phải là định dạng ngày tháng năm',
            'gioitinh.required'=>'Giới tính tên không được để trống',
            'diachi.required'=>'Địa chỉ tên không được để trống',
            'phongban.required'=>'Phòng ban tên không được để trống',
        ];
    }
}

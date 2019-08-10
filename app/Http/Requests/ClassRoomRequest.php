<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomRequest extends FormRequest
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
            //unique:classes kiểm tra duy nhát trong bảng class
            // exist:classes kiểm tra tòn tại trong bảng class
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:32',
            'major' => 'required|string',
            'max_student' => 'nullable|numeric',
        ];
    }
    public function messages(){
        return [
                'name.required' => 'Yêu cầu nhập tên',
                'teacher_name.required'=> 'Nhập tên gv',
                'name.string' => 'Yêu cầu là chuối',
                'name.min' => 'Tên lớp ít nhất 8 kí tự',
                'teacher_name.max' => 'Tên lớp max 32 kí tự',
                'teacher_name.string'=> 'Tên GV yêu cầu là chuối',
                'teacher_name.min' => 'Tên gv ít nhất 5 kí tự',
                'major.required' => 'Yêu cầu nhập tên',
                'major.string' => 'Yêu cầu là chuối',

        ];
    }
}

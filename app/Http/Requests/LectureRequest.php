<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureRequest extends FormRequest
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
            'title' => 'required|max:150',
            'description' => 'required|max:400',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages(){

        return [
            'title.required' => 'Полето наслов е задолжително!',
            'title.max' => 'Насловот не треба да биде повеќе од 150 карактери!',
            'description.required' => 'Полето опис е задолжително!',
            'description.max' => 'Описот не треба да биде повеќе од 400 карактери!',
            'category_id.required' => 'Полето категорија е задолжително!',
            'category_id.exists' => 'Избраната категорија не постои!'
        ];
    }
}

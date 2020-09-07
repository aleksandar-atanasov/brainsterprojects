<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
           'name' => 'required|max:15|unique:categories',
           'description' => 'required|max:400',
           'label' => 'required|unique:categories|alpha_dash',
           'image' => 'required|file|image|mimes:jpeg,svg,png|max:5120'
        ];
    }


    public function messages(){

        return [
            'name.required' => 'Полето име е задолжително!',
            'name.max' => 'Името неможе да биде подолго од 15 карактери!',
            'name.unique' => 'Избраното име веќе е зафатено!',
            'label.unique' => 'Избраната етикета веќе е зафатена!',
            'label.required' => 'Полето етикета е задолжително!',
            'label.alpha_dash' => 'Етикетата не треба да содржи празни места',
            'image.required' => 'Полето слика е задолжително!',
            'image.max' => 'Сликата неможе да биде поголема од 5мб!',
            'image.file' => 'Сликата мора да биде од тип FILE!',
            'image.image' => 'Сликата мора да биде од тип IMAGE!',
            'image.mimes' => 'Погрешен формат. Сликата мора да биде од формат jpeg, svg или png!',
            'description.required' => 'Полето опис е задолжително!',
            'description.max' => 'Описот неможе да биде подолг од 400 карактери!',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementRequest extends FormRequest
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
            'address' => 'required|max:255',
            'description' => 'max:1000',
            'price' => 'required|integer',
            'photo_place' => '',
            'photo_blueprint' => ''
        ];
    }

    public function messages(){
        return [
            'address.required' => 'Поле адреса является обязательным',
            'address.max' => 'Поле адреса более 255 символов',
            
            'description.max' => 'Поле описания более 1000 символов',

            'price.required' => 'Поле максимальной цены является обязательным',
            'price.number' => 'Поле максимальной цены должно быть целым числом',
            'price.max' => 'Поле максимальной цены более 9 символов',
            
            'photo_place.required' => 'Фото помещения является обязательным',

            'photo_blueprint.required' => 'Фото плана помещения является обязательным',
        ];
    }
}

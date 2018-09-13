<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddMineralRequest extends FormRequest
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
            'ru_name' => [
                'required',
                Rule::unique('minerals')->ignore($this->get('id')),
            ],
            'en_name' => [
                'required',
                Rule::unique('minerals')->ignore($this->get('id')),
            ],
            'formula' => 'required',
            'min_class_id' => 'required',
        ];
    }
}

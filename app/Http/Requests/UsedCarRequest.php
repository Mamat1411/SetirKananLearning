<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsedCarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $required = 'required';

        if ($this->method() == 'PUT') {
            $required = '';
        }

        return [
            'car_brand'     => [$required, 'max:100'],
            'car_type'      => [$required, 'max:100'],
            'car_model'     => [$required, 'max:100'],
            'price'         => [$required, 'max:15']
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'model' => "bail|required|min:3|max:100",
            'year' => 'bail|required|min:4|max:4',
            'average' => 'bail',
            'feature' => 'bail',
            'owner_id' => 'bail',
            'daily' => "bail|required|"
        ];
    }
}

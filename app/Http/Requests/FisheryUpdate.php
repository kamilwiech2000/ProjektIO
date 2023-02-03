<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FisheryUpdate extends FormRequest
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
            'voivodeship' => 'required|alpha',
            'fishery' => 'required|alpha',
            'fish_id' => 'required|numeric|exists:fish,id',
            'creationdate' => 'required|numeric',

        ];
    }
}

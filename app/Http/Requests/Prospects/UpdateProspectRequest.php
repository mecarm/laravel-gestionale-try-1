<?php

namespace App\Http\Requests\Prospects;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProspectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //This code verified if the email already exist in other prospects mail
            'email' => 'required|unique:prospects,email,'. $this->prospect->id,
            'name' => 'required',
        ];
    }
}

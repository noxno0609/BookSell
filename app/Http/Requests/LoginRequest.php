<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'loginUsername' => 'required',
            'loginPassword' => 'required',
            //
        ];
    }

    public function message() {
        return [
            'loginUsername.required' => 'Please enter username',
            'loginPassword.required' => 'Please enter password'
        ];
    }
}

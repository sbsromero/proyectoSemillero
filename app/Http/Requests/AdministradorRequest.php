<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdministradorRequest extends Request
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
            'name' => 'min:4|max:25|required',
            'email' => 'min:4|max:20|required',
            'password' => 'min:5|max:20|required'
        ];
    }
}

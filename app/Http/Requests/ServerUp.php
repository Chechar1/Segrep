<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServerUp extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'ip' => ['required', 'string','min:7','max:16'],
            'password' => ['required', 'string', 'min:8'],
            'host' => ['required','min:7','max:16'],
            'port' => ['required','min:4','max:4'],
        ];
    }
}

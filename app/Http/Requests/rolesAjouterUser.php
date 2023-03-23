<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rolesAjouterUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
        "nom" => 'required|max:40',
        "prenom"  => 'required|max:40',
        "userName"  => 'required|max:100',
        "password" => 'required|max:40|min:5',
        "tel" => 'required|max:12|min:8',
        "role"  => 'required',

        ];
    }

}

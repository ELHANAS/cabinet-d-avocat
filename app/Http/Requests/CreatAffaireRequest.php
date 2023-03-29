<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatAffaireRequest extends FormRequest
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
            'numero'=>'required',
            'Nameaffair'=>"required",
            'typeAffaire'=>"required",
            'nameclient'=>"required",
            'avocat'=>"required"

        ];
    }
    public function messages()
    {
        return [
            'numero'=>'le numero daffaire est obligatoire',
            'Nameaffair'=>'le nome de travailles et obligatoire',
            'typeAffaire'=>'le numero cin obligatoire',
            'nameclient'=>'id client et obligatoire',
            'avocat'=>'ajouter id user'

        ];
    }
}

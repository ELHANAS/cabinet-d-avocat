<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatClientsRequest extends FormRequest
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

            return [

                'nom'=>"required",
                'Prenom'=>"required",
                'activiter'=>"required",
                'tel'=>"required",
                'CIN'=>"required",
                'Adress'=>"required",
                'dat_naiss'=>"required"

            ];

    }

    public function messages()
    {
        return [
            'nom'=>'le nome de travailles et obligatoire',
            'activiter'=>'choisir un activiter ',
            'Prenom'=>'le prenom et obligatoire',
            'tel'=>'le nombre de tele et obligatoire',
            'CIN'=>'le numero cin obligatoire',
            'Adress'=>'ladress et obligatoire',
            'dat_naiss'=>'la dat de naiss et obligatoire'

        ];
    }
}

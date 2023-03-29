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

                'name'=>"required",
                'tel'=>"required",
                'CIN'=>"required",
                'Adress'=>"required",
                'dat_naiss'=>"required"

            ];

    }

    public function messages()
    {
        return [
            'name'=>'le nome de travailles et obligatoire',
            'tel'=>'le nombre de tele et obligatoire',
            'CIN'=>'le numero cin obligatoire',
            'Adress'=>'ladress et obligatoire',
            'dat_naiss'=>'la dat de naiss et obligatoire'

        ];
    }
}

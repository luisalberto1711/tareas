<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validarRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        ///cambiar a true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //$y=new Musica;
        return [
            'titulo'=>'min:5|required|max:6',
            'artista'=>'alpha_num',
            'nombre'=>'alpha',
        ];
    }
}

<?php

namespace trabalho\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventoRequest extends FormRequest
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
           
            'descricao' => 'bail|required|max:300',
            'data' => 'required',
            'QtdAssentos' => 'required',
            
        ];
    }
    
    public function messages() {
       return 
        [
            'descricao.required' => 'Descrição é obrigatório.',
            'data.required' => 'data é obrigatório.',
            'QtdAssentos.required' => 'Quantidade de assentos é obrigatório.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCliente extends FormRequest
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
            'nome' => 'required|max:70',
            'endereco' => 'required|max:70',
            'bairro' => 'required|max:30',
            'cidade' => 'required|max:30',
            'uf' => 'required|max:2',
            'cep' => 'required|max:9',
            'cpf' => 'required|max:16',
            'telefone' => 'required|max:16',
        ];
    }
}


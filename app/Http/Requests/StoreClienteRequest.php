<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'RazaoSocial' => 'string|required',
            'BolAtivo'    => 'integer|required',
            'TipoContato' => 'string|required',
            'DescContato' => 'string|required'
        ];
    }
    public function messages()
    {
        return [
            'RazaoSocial.required' => 'O campo Razão Social é obrigatório',
            'RazaoSocial.string'   => 'O campo Razão Social deve conter um valor do tipo texto.',
            'BolAtivo.required'    => 'Uma opção do campo Ativo, deve ser marcada.',
            'TipoContato.required' => 'O campo Tipo de Contato é obrigatório',
            'TipoContato.string'   => 'O campo Tipo de Contato deve conter um valor do tipo texto.',
            'DescContato.required' => 'O campo Descrição do Contato é obrigatório',
            'DescContato.string'   => 'O campo Descrição do Contato  deve conter um valor do tipo texto.'

        ];
    }
}

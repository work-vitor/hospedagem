<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreUpdateCompra extends FormRequest
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
            'valor_total' => 'required | min:1',
            'categoria' => 'required | min:1',
            'checkin' => 'required',
            'checkout' => 'required',
            'opcao_servico' => 'required',
            'usuarios_id' => 'required',
            'quartos_id' => 'required'
        ];
    }
}

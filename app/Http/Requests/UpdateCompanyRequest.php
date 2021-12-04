<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
        $id = $this->segment(3);
        return [
            'social_name' => "required|max:255|unique:companies,social_name,${id},id",
            'fantasy_name'  => 'required|max:255',
            'cnpj'          => 'required',
            'logo'          => 'nullable|image|mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return [
            'social_name.required'      => 'O campo Razão Social é obrigatório',
            'social_name.unique'   => 'Já existe um registro com este nome.',
            'cnpj.required'      => 'O campo CNPJ é obrigatório',
            'max'           => 'Este campo só e permitido até 255 caractres',
            'logo.image'    => 'As imagens só suportam extensões png, jpg ou jpeg'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [

			'name' => 'required|max:255',
			'isbn' => 'nullable|numeric',
			// 'isbn' => 'nullable|numeric|unique:books,isbn'.$this->uuid,
			'value' => 'nullable|numeric',

		];
	}

	public function messages()
	{
		return [

			'name.required' => 'name nao foi selecionado.',
			'name.max' => 'name deve ser numerico.',
			'isbn.numeric' => 'ISBN deve ser numerico.',
			'value.numeric' => 'VALUE deve ser numerico.',

		];
	}
}
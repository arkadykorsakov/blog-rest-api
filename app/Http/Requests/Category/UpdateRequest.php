<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
			'title' => 'required|string|min:3'
		];
	}

	public function messages()
	{
		return [
			'title.required' => 'Обязательное поле',
			'title.string' => 'Строковое поле',
			'title.min' => 'Минимум 3 символа',
		];
	}
}

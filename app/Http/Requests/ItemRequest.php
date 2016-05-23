<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Route;

class ItemRequest extends Request {

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
		
		$rules = [
			'code' => 'required|min:3',
			'name' => 'required|min:3',
			'status' => 'numeric'
		];

		if(Route::getCurrentRoute()->getPath() == 'items')
		{
			$rules = [
				'code' => 'required|unique:items,code|min:3',
				'name' => 'required|min:3',
				'status' => 'numeric'
			];
		}

		return $rules;
	}

}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class skillchildsStoreRequest extends Request
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
			 'name'             => 'required',
			 'link'             => 'required',
			 'description'      => 'required',
			 'language_id'      => 'required',
			 'skillitem_id'     => 'required',
        ];
    }
}

        
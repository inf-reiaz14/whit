<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class sectorsStoreRequest extends Request
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
            'id'     => '',
			 'name'     => '',
			 'icon'     => '',
			 'heading'     => '',
			 'details'     => '',
			 'meta_tag'     => '',
			 'meta_description'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class testimonialsStoreRequest extends Request
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
			 'designation'     => '',
			 'image_photo'     => '',
			 'details'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
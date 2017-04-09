<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class skillitempagesStoreRequest extends Request
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
			 'link_input' => 'unique:skillitempages,link',
			 'banner_photos'     => '',
			 'details'     => '',
			 'skillitem_id'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
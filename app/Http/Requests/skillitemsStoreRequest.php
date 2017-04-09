<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class skillitemsStoreRequest extends Request
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
			 'link' => 'unique:skillitems,link',
			 'language_id'     => '',
			 'skillset_id'     => '',
			 'meta_tag'     => '',
			 'meta_description'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
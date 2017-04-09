<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class applicationsStoreRequest extends Request
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
			 'logo_photo'     => '',
			 'banner_photo'     => '',
			 'what_is'     => '',
			 'details'     => '',
			 'meta_tag'     => '',
			 'meta_description'     => '',
			 'manual_file'     => '',
			 'application_link'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
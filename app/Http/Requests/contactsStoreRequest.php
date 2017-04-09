<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class contactsStoreRequest extends Request
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
			 'address_line_1'     => '',
			 'address_line_2'     => '',
			 'address_line_3'     => '',
			 'email'     => '',
			 'contact_no'     => '',
			 'background_photo'     => '',
			 'country_id'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
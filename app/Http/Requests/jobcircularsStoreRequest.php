<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class jobcircularsStoreRequest extends Request
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
			 'country_id'     => '',
			 'skills'     => '',
			 'category'     => '',
			 'location'     => '',
			 'job_details_link'     => '',
			 'application_link'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
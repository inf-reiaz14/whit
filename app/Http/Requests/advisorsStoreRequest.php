<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class advisorsStoreRequest extends Request
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
			 'banner_photo'     => '',
			 'image_photo'     => '',
			 'display_group'     => '',
			 'location'     => '',
			 'country_id'     => '',
			 'i_am'     => '',
			 'email'     => '',
			 'summary'     => '',
			 'about_professionalism'     => '',
			 'google_plus_link'     => '',
			 'skype_link'     => '',
			 'linkedin_link'     => '',
			 'twitter_link'     => '',
			 'facebook_link'     => '',
			 'webhawksit_link'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
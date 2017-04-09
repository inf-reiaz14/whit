<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class internsStoreRequest extends Request
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
			 'email'     => '',
			 'phone'     => '',
			 'country_id'     => '',
			 'image_photo'     => '',
			 'prefetch'     => '',
			 'dob_date'     => '',
			 'about_me'     => '',
			 'family_details'     => '',
			 'education_background'     => '',
			 'aim_in_life_en'     => '',
			 'aim_in_life_native'     => '',
			 'why_interested_in_carereer_travel_en'     => '',
			 'why_interested_in_carereer_travel_native'     => '',
			 'internship_duration'     => '',
			 'internship_at_department'     => '',
			 'google_plus_link'     => '',
			 'skype_link'     => '',
			 'linkedin_link'     => '',
			 'twitter_link'     => '',
			 'facebook_link'     => '',
			 'webhawksit_link'     => '',
			 'status'     => '',
			 'created_at'     => '',
			 'updated_at'      => ''
        ];
    }
}

        
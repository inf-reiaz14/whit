<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class internApplicationRequest extends Request
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
			 'name'             => 'required|min:5',
			 'email'            => 'required|email',
			 'phone'            => 'required',
			 'country_id'       => 'required',
			 'prefetch'         => 'required',
			 'dob_date'         => 'required',
			 'family_details'   => 'required',
			 'education_background' => 'required',
			 'aim_in_life_en'       => 'required',
			 'aim_in_life_native'   => 'required',
			 'why_interested_in_carereer_travel_en'     => 'required',
			 'why_interested_in_carereer_travel_native' => 'required',
        ];
    }
}

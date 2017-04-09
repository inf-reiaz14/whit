<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{

    protected $table = "interns";
    
    protected $fillable = ['id', 'name', 'email', 'phone', 'country_id', 'image_photo', 'prefetch', 'dob_date', 'about_me', 'family_details', 'education_background', 'aim_in_life_en', 'aim_in_life_native', 'why_interested_in_carereer_travel_en', 'why_interested_in_carereer_travel_native', 'internship_duration', 'internship_at_department', 'google_plus_link', 'skype_link', 'linkedin_link', 'twitter_link', 'facebook_link', 'webhawksit_link', 'status', 'created_at', 'updated_at'];
    
    public function country()
    {
        
        return $this->belongsTo('\App\Country');
        
    }
            
    
    public static function boot()
    {
        
        parent::boot();
        
        static::created(function($model){
            
            $mail = new \App\Http\Controllers\Mails;
            
            $mail->internshipApplicationMailToApplicant($model);
            
            $mail->internshipApplicationMailToAdmin($model);
            
        });
        
    }
    

}

        
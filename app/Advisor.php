<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{

    protected $table = "advisors";
    
    protected $fillable = ['id', 'name', 'designation', 'banner_photo', 'image_photo', 'display_group', 'location', 'residence', 'is_advisor', 'is_director', 'country_id', 'i_am', 'email', 'summary', 'about_professionalism', 'google_plus_link', 'skype_link', 'linkedin_link', 'twitter_link', 'facebook_link', 'webhawksit_link', 'created_at', 'updated_at'];
    
    public function country()
    {
        
        return $this->belongsTo('\App\Country');
        
    }
            
    
    public function scopeGroup($query, $id)
    {
        
        return $query->where('display_group', $id);
        
    }
    
    
    public function scopeAdvisors($query)
    {
        
        return $query->where('is_advisor', 1);
        
    }
    
    
    public function scopeDirectors($query)
    {
        
        return $query->where('is_director', 1);
        
    }
    

}

        
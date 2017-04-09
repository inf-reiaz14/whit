<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcircular extends Model
{

    protected $table = "jobcirculars";
    
    protected $fillable = ['id', 'name', 'country_id', 'skills', 'category', 'location', 'job_details_link', 'application_link', 'created_at', 'updated_at'];
    
    public function country()
    {
        
        return $this->belongsTo('\App\Country');
        
    }
            
    
    

}

        
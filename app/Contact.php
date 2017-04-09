<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table = "contacts";
    
    protected $fillable = ['id', 'name', 'icon', 'address_line_1', 'address_line_2', 'address_line_3', 'email', 'contact_no', 'background_photo', 'country_id', 'created_at', 'updated_at'];
    
    public function country()
    {
        
        return $this->belongsTo('\App\Country');
        
    }
            
    
    

}

        
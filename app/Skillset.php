<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillset extends Model
{

    protected $table = "skillsets";
    
    protected $fillable = ['id', 'name', 'icon', 'class_name', 'language_id', 'created_at', 'updated_at'];
    
    public function language()
    {
        
        return $this->belongsTo('\App\Language');
        
    }
            
        
    public function skillitems()
    {
        
        return $this->hasMany('\App\Skillitem');
        
    }
        
        
    public function languages()
    {
        
        return $this->hasMany('\App\Language');
        
    }
        
    
    

}

        
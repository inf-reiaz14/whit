<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillchild extends Model
{

    protected $table = "skillchilds";
    
    protected $fillable = ['id', 'name', 'banner_photo', 'link', 'description', 'language_id', 'skillitem_id', 'created_at', 'updated_at'];
    
    public function language()
    {
        
        return $this->belongsTo('\App\Language');
        
    }
            
    public function skillitem()
    {
        
        return $this->belongsTo('\App\Skillitem');
        
    }
            
    
    public function frameworks()
    {
        
        return $this->hasMany('\App\Framework');
        
    }

}

        
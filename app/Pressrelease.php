<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pressrelease extends Model
{

    protected $table = "pressreleases";
    
    protected $fillable = ['id', 'name', 'banner_photo', 'short_description', 'details', 'live_link','live_date', 'priority_release', 'created_at', 'updated_at'];
    
    
    public function scopePriority($query)
    {
        
        return $query->where('priority_release', 1);
        
    }    
    
    public function scopeGeneral($query)
    {
        
        return $query->where('priority_release', 0);
        
    }    

}

        
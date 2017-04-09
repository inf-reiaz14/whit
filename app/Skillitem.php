<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillitem extends Model
{

    protected $table = "skillitems";
    
    protected $fillable = ['id', 'name','link', 'language_id', 'skillset_id', 'meta_tag', 'meta_description', 'created_at', 'updated_at'];
    
    public function language()
    {
        
        return $this->belongsTo('\App\Language');
        
    }
            
    public function skillset()
    {
        
        return $this->belongsTo('\App\Skillset');
        
    }
            
        
    public function skillchilds()
    {
        
        return $this->hasMany('\App\Skillchild');
        
    }
    
    
    public function details()
    {
        
        return $this->hasOne('\App\Skillitempage');
        
    }
    
    

}

        
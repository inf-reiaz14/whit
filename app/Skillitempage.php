<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillitempage extends Model
{

    protected $table = "skillitempages";
    
    protected $fillable = ['id', 'name','link','banner_photo', 'details', 'skillitem_id', 'created_at', 'updated_at'];
    
    public function skillitem()
    {
        
        return $this->belongsTo('\App\Skillitem');
        
    }
            
    
        
    public function skillchilds()
    {
        
        return $this->hasMany('\App\Skillchild');
        
    }
    
    

}

        
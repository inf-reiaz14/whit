<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{

    protected $table = "frameworks";
    
    protected $fillable = ['id', 'name', 'link', 'banner_photo', 'description', 'skillchild_id', 'created_at', 'updated_at'];
    
    public function skillchild()
    {
        
        return $this->belongsTo('\App\Skillchild');
        
    }
            
    
    

}

        
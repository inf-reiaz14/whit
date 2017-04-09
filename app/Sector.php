<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{

    protected $table = "sectors";
    
    protected $fillable = ['id', 'name', 'icon', 'heading', 'details', 'meta_tag', 'meta_description', 'created_at', 'updated_at'];
    
    
    

}

        
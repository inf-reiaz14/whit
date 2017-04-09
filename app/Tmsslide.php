<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tmsslide extends Model
{

    protected $table = "tmsslides";
    
    protected $fillable = ['id', 'name', 'meta_tag', 'meta_description', 'created_at', 'updated_at'];
    
    
    

}

        
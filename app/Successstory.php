<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Successstory extends Model
{

    protected $table = "successstories";
    
    protected $fillable = ['id', 'name', 'alias', 'designation', 'profile_link', 'skills', 'profile_photo', 'created_at', 'updated_at'];
    
    
    

}

        
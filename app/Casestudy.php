<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{

    protected $table = "casestudies";
    
    protected $fillable = ['id', 'name', 'study_photo', 'created_at', 'updated_at'];
    
    
    

}

        
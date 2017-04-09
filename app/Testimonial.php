<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $table = "testimonials";
    
    protected $fillable = ['id', 'name', 'designation', 'image_photo', 'details', 'created_at', 'updated_at'];
    
    
    

}

        
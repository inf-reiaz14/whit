<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    protected $table = "applications";
    
    protected $fillable = ['id', 'name', 'logo_photo', 'banner_photo', 'what_is', 'details', 'meta_tag', 'meta_description', 'manual_file', 'application_link','prototype_mobile','prototype_tab','prototype_pc','created_at', 'updated_at'];
    
}

        
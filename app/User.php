<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table    = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'role', 'firstname', 'lastname', 'name', 'address', 'city', 'state', 'postcode', 'country_id', 'parmanent_address', 'active', 'contact', 'expiry_date', 'balance', 'user_photo', 'created_by','updated_by'];
    
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden   = ['password', 'remember_token'];
    
    
    /**
    *
    * Attributes which must be sql date and time instance
    * 
    * @var array
    * 
    */
    protected $dates    = ['expiry_date'];
    
    
    /**
    *
    *   Passwords are always stored after being bcrypted
    *
    */
    
    public function setPasswordAttribute($value)
    {
        
        $this->attributes['password'] = bcrypt($value);
        
    }
    
    public function roles()
    {
        
        return $this->belongsTo('\App\Role','role');
        
    }
    
    
    
    public static function boot()
    {
        
        parent::boot();
        
        static::creating(function($model)
        {
            if(auth()->user())
            {
                
                $model->created_by = auth()->user()->id;
                
            }
            
        });
        
        static::updating(function($model)
        {
            if(auth()->user())
            {
                
                $model->updated_by = auth()->user()->id;
                
            }
            
        });
        
    }
    
    
}

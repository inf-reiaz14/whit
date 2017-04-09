<?php

/**
 * ************************************************************************************
 * Permission methods
 * ************************************************************************************
 * 
 */




/**
 * 
 * Does current loggedin user has access to the following areas for this table?
 * 
 */
function canview($table)
{
    
    $action = "App\Http\Controllers\\".ucfirst($table)."@show";
    
    if(\App\Setting::first()->is_controlled_access != 1)
    {
        
        return true;
        
    }
    
    if(auth()->user()->roles()->first()->permissions()->where('permissions.name', $action)->first())
    {
        
        return true;
        
    } else{
        
        return false;
        
    }
        
}

function canedit($table)
{
    
    $action = "App\Http\Controllers\\".ucfirst($table)."@edit";
    
    if(\App\Setting::first()->is_controlled_access != 1)
    {
        
        return true;
        
    }
    
    if(auth()->user()->roles()->first()->permissions()->where('permissions.name', $action)->first())
    {
        
        return true;
        
    } else{
        
        return false;
        
    }
        
}

function candelete($table)
{
    
    $action = "App\Http\Controllers\\".ucfirst($table)."@destroy";
    
    if(\App\Setting::first()->is_controlled_access != 1)
    {
        
        return true;
        
    }
    
    if(auth()->user()->roles()->first()->permissions()->where('permissions.name', $action)->first())
    {
        
        return true;
        
    } else{
        
        return false;
        
    }
        
}

function canaccess($controller, $method)
{
    
    $action = "App\Http\Controllers\\$controller@$method";
    
    if(auth()->user()->roles()->first()->permissions()->where('permissions.name', $action)->first())
    {
        
        return true;
        
    } else{
        
        return false;
        
    }
    
}



/**
 * 
 * Can the current logged in user do the following to specific items of the table?
 * 
 * @return HTML <a> tag
 * 
 * @params
 *      $table      (string)    = subject database table
 *      $id         (integer)   = row id
 *      $text       (string)    = text to display at <a> tag or <button>
 *      $attributes (array)     = any attributes that this <a> tag or <button> or <form> should hold
 * 
 */
function views($table, $id, $text, $attributes = [])
{
    
    if(canview($table))
    {
    
        $link = "<a href=\"".action(ucfirst($table).'@show',$id)."\"";
        
        if($attributes)
        {
            
            foreach($attributes as $k=>$v)
            {
                
                $link .= " $k=\"$v\"";
                
            }
            
        }
        
        $link.=">$text</a>";
        
        return $link;
    
    }

    
}

function edits($table, $id, $text, $attributes = [])
{
    
    if(canedit($table))
    {
    
        $link = "<a href=\"".action(ucfirst($table).'@edit',$id)."\"";
        
        if($attributes)
        {
            
            foreach($attributes as $k=>$v)
            {
                
                $link .= " $k=\"$v\"";
                
            }
            
        }
        
        $link.=">$text</a>";
        
        return $link;
    
    }
    
}

function deletes($table, $id, $text, $attributes = [])
{
    
    if(candelete($table))
    {
        
        $form  = Form::open([ 'url'=> action(ucfirst($table).'@destroy',$id) , 'method' => 'DELETE']);
        
        $form .= "<button type=\"submit\"";
        
        if($attributes)
        {
            
            foreach($attributes as $k=>$v)
            {
                
                $form .= " $k=\"$v\"";
                
            }
            
        }
        
        $form .= ">$text</button>";
        
        $form .= Form::close();
        
        return $form;
    
        $link = "<a href=\"".action(ucfirst($table).'@edit',$id)."\"";
        
        if($attributes)
        {
            
            foreach($attributes as $k=>$v)
            {
                
                $link .= " $k=\"$v\"";
                
            }
            
        }
        
        $link.=">$text</a>";
        
        return $link;
    
    }
    
}
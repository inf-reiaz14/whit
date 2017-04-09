<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\tmsslidesStoreRequest;
use App\Http\Controllers\Controller;
use App\Tmsslide;

class Tmsslides extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.tmsslides.index', ['tmsslides'=> Tmsslide::latest()->paginate(20)]);
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tmsslidesStoreRequest $request)
    {
        
        
        
        $save_success = Tmsslide::create($request->all());
        
        if($save_success){
        
            return redirect()->action('Tmsslides@index')->withErrors('Data has been stored successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
    
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(tmsslidesStoreRequest $request, $id)
    {
        $tmsslide = Tmsslide::find($id);
        
        
        $save_success = Tmsslide::find($id)->update($request->all());
        
        if($save_success)
        {
            return redirect()->action('Tmsslides@index')->withErrors('Data has been updated successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        
        $tmsslide = Tmsslide::find($id);
        
        if($tmsslide)
        {
    
    
            if($tmsslide->delete())
            {
            
                return redirect()->action('Tmsslides@index')->withErrors('Data has been deleted successfully.');
            
            } else{
                
                return back()->withErrors('Failed to delete data. Please retry later.');
                
            }
        
        } else{
            
            return back()->withErrors('Failed to delete data. Please retry later.');
            
        }
        
        
    }
    
    
    
    
}

        
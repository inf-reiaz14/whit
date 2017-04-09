<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\jobcircularsStoreRequest;
use App\Http\Controllers\Controller;
use App\Jobcircular;

class Jobcirculars extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.jobcirculars.index', ['jobcirculars'=> Jobcircular::latest()->paginate(20)]);
        
    }
    
    
    /**
     * Searches the listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchIndex(Request $request)
    {
    
        $search = array_filter($request->all());
        unset($search['_token']);
        
        $result =   new Jobcircular;
          
                    ($request->input('from'))  ? $result = $result->where('created_at', '>', $request->input('from').' 00:00:00') : false;
                    ($request->input('to'))    ? $result = $result->where('created_at', '<', $request->input('to').' 23:59:59') : false;
    
					($request->input('id'))   ? $result = $result->where('id', $request->input('id')) : false;
					($request->input('name'))   ? $result = $result->where('name', 'like', '%'.$request->input('name').'%') : false;
					($request->input('country_id'))   ? $result = $result->where('country_id', $request->input('country_id')) : false;
					($request->input('skills'))   ? $result = $result->where('skills', 'like', '%'.$request->input('skills').'%') : false;
					($request->input('category'))   ? $result = $result->where('category', 'like', '%'.$request->input('category').'%') : false;
					($request->input('location'))   ? $result = $result->where('location', 'like', '%'.$request->input('location').'%') : false;
					($request->input('job_details_link'))   ? $result = $result->where('job_details_link', 'like', '%'.$request->input('job_details_link').'%') : false;
					($request->input('application_link'))   ? $result = $result->where('application_link', 'like', '%'.$request->input('application_link').'%') : false;
        
        return view('admin.jobcirculars.index', ['jobcirculars'=> $result->latest()->paginate(20)]);
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.jobcirculars.create'  );
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(jobcircularsStoreRequest $request)
    {
        
        
        
        $save_success = Jobcircular::create($request->all());
        
        if($save_success){
        
            return redirect()->action('Jobcirculars@index')->withErrors('Data has been stored successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
    
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $jobcircular = Jobcircular::find($id); 
        
        return view('admin.jobcirculars.show', compact('jobcircular') );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $jobcircular = Jobcircular::find($id); 
        
        return view('admin.jobcirculars.edit', compact('jobcircular') );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(jobcircularsStoreRequest $request, $id)
    {
        $jobcircular = Jobcircular::find($id);
        
        
        $save_success = Jobcircular::find($id)->update($request->all());
        
        if($save_success)
        {
            return redirect()->action('Jobcirculars@index')->withErrors('Data has been updated successfully.');
        
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
        
        $jobcircular = Jobcircular::find($id);
        
        if($jobcircular)
        {
    
    
            if($jobcircular->delete())
            {
            
                return redirect()->action('Jobcirculars@index')->withErrors('Data has been deleted successfully.');
            
            } else{
                
                return back()->withErrors('Failed to delete data. Please retry later.');
                
            }
        
        } else{
            
            return back()->withErrors('Failed to delete data. Please retry later.');
            
        }
        
        
    }
    
    
    
    
}

        
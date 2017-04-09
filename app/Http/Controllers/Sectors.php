<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\sectorsStoreRequest;
use App\Http\Controllers\Controller;
use App\Sector;

class Sectors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.sectors.index', ['sectors'=> Sector::latest()->paginate(20)]);
        
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
        
        $result =   new Sector;
          
                    ($request->input('from'))  ? $result = $result->where('created_at', '>', $request->input('from').' 00:00:00') : false;
                    ($request->input('to'))    ? $result = $result->where('created_at', '<', $request->input('to').' 23:59:59') : false;
    
					($request->input('id'))   ? $result = $result->where('id', $request->input('id')) : false;
					($request->input('name'))   ? $result = $result->where('name', 'like', '%'.$request->input('name').'%') : false;
					($request->input('icon'))   ? $result = $result->where('icon', 'like', '%'.$request->input('icon').'%') : false;
					($request->input('heading'))   ? $result = $result->where('heading', 'like', '%'.$request->input('heading').'%') : false;
					($request->input('details'))   ? $result = $result->where('details', 'like', '%'.$request->input('details').'%') : false;
					($request->input('meta_tag'))   ? $result = $result->where('meta_tag', 'like', '%'.$request->input('meta_tag').'%') : false;
					($request->input('meta_description'))   ? $result = $result->where('meta_description', 'like', '%'.$request->input('meta_description').'%') : false;
        
        return view('admin.sectors.index', ['sectors'=> $result->latest()->paginate(20)]);
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.sectors.create'  );
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sectorsStoreRequest $request)
    {
        
        
        
        $save_success = Sector::create($request->all());
        
        if($save_success){
        
            return redirect()->action('Sectors@index')->withErrors('Data has been stored successfully.');
        
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
    
        $sector = Sector::find($id); 
        
        return view('admin.sectors.show', compact('sector') );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $sector = Sector::find($id); 
        
        return view('admin.sectors.edit', compact('sector') );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(sectorsStoreRequest $request, $id)
    {
        $sector = Sector::find($id);
        
        
        $save_success = Sector::find($id)->update($request->all());
        
        if($save_success)
        {
            return redirect()->action('Sectors@index')->withErrors('Data has been updated successfully.');
        
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
        
        $sector = Sector::find($id);
        
        if($sector)
        {
    
    
            if($sector->delete())
            {
            
                return redirect()->action('Sectors@index')->withErrors('Data has been deleted successfully.');
            
            } else{
                
                return back()->withErrors('Failed to delete data. Please retry later.');
                
            }
        
        } else{
            
            return back()->withErrors('Failed to delete data. Please retry later.');
            
        }
        
        
    }
    
    
    
    
}

        
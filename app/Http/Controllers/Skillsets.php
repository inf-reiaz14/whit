<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\skillsetsStoreRequest;
use App\Http\Controllers\Controller;
use App\Skillset;

class Skillsets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.skillsets.index', ['skillsets'=> Skillset::latest()->paginate(20)]);
        
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
        
        $result =   new Skillset;
          
                    ($request->input('from'))  ? $result = $result->where('created_at', '>', $request->input('from').' 00:00:00') : false;
                    ($request->input('to'))    ? $result = $result->where('created_at', '<', $request->input('to').' 23:59:59') : false;
    
					($request->input('id'))   ? $result = $result->where('id', $request->input('id')) : false;
					($request->input('name'))   ? $result = $result->where('name', 'like', '%'.$request->input('name').'%') : false;
					($request->input('icon'))   ? $result = $result->where('icon', 'like', '%'.$request->input('icon').'%') : false;
					($request->input('class_name'))   ? $result = $result->where('class_name', 'like', '%'.$request->input('class_name').'%') : false;
					($request->input('language_id'))   ? $result = $result->where('language_id', $request->input('language_id')) : false;
        
        return view('admin.skillsets.index', ['skillsets'=> $result->latest()->paginate(20)]);
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.skillsets.create'  );
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(skillsetsStoreRequest $request)
    {
        
        
        
        $save_success = Skillset::create($request->all());
        
        if($save_success){
        
            return redirect()->action('Skillsets@index')->withErrors('Data has been stored successfully.');
        
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
    
        $skillset = Skillset::find($id); 
        
        return view('admin.skillsets.show', compact('skillset') );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $skillset = Skillset::find($id); 
        
        return view('admin.skillsets.edit', compact('skillset') );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(skillsetsStoreRequest $request, $id)
    {
        $skillset = Skillset::find($id);
        
        
        $save_success = Skillset::find($id)->update($request->all());
        
        if($save_success)
        {
            return redirect()->action('Skillsets@index')->withErrors('Data has been updated successfully.');
        
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
        
        $skillset = Skillset::find($id);
        
        if($skillset)
        {
    
    
            if($skillset->delete())
            {
            
                return redirect()->action('Skillsets@index')->withErrors('Data has been deleted successfully.');
            
            } else{
                
                return back()->withErrors('Failed to delete data. Please retry later.');
                
            }
        
        } else{
            
            return back()->withErrors('Failed to delete data. Please retry later.');
            
        }
        
        
    }
    
    
    public function skillitems($id)
    {
        
        return view('admin.skillsets.skillitems', ['skillset' => Skillset::find($id) ,'skillitems' => Skillset::find($id)->skillitems()->latest()->paginate(20)]);
        
    }
    
    
    public function skillitemsCreate($id)
    {
        
        return view('admin.skillsets.skillitemsCreate', ['skillset' => Skillset::find($id) ]);
        
    }
    
    
    public function skillitemsStore($id, Request $request)
    {
        
        $request['skillset_id'] = $id;
        
        if(\App\Skillitem::create($request->all()) )
        {
            
            return redirect()->action('Skillsets@skillitems', $id)->withErrors('skillitem has been added successfully.');
            
        } else{
            
            return back()->withErrors('Please check all the fields.')->withInput();
            
        }
        
    }
    
    
    
        
    
    public function languages($id)
    {
        
        return view('admin.skillsets.languages', ['skillset' => Skillset::find($id) ,'languages' => Skillset::find($id)->languages()->latest()->paginate(20)]);
        
    }
    
    
    public function languagesCreate($id)
    {
        
        return view('admin.skillsets.languagesCreate', ['skillset' => Skillset::find($id) ]);
        
    }
    
    
    public function languagesStore($id, Request $request)
    {
        
        $request['skillset_id'] = $id;
        
        if(\App\Language::create($request->all()) )
        {
            
            return redirect()->action('Skillsets@languages', $id)->withErrors('language has been added successfully.');
            
        } else{
            
            return back()->withErrors('Please check all the fields.')->withInput();
            
        }
        
    }
    
    
    
        
    
    
    
}

        
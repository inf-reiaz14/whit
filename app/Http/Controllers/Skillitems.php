<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\skillitemsStoreRequest;
use App\Http\Controllers\Controller;
use App\Skillitem;

class Skillitems extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.skillitems.index', ['skillitems'=> Skillitem::latest()->paginate(20)]);
        
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
        
        $result =   new Skillitem;
          
                    ($request->input('from'))  ? $result = $result->where('created_at', '>', $request->input('from').' 00:00:00') : false;
                    ($request->input('to'))    ? $result = $result->where('created_at', '<', $request->input('to').' 23:59:59') : false;
    
					($request->input('id'))   ? $result = $result->where('id', $request->input('id')) : false;
					($request->input('name'))   ? $result = $result->where('name', 'like', '%'.$request->input('name').'%') : false;
					($request->input('language_id'))   ? $result = $result->where('language_id', $request->input('language_id')) : false;
					($request->input('skillset_id'))   ? $result = $result->where('skillset_id', $request->input('skillset_id')) : false;
					($request->input('meta_tag'))   ? $result = $result->where('meta_tag', 'like', '%'.$request->input('meta_tag').'%') : false;
					($request->input('meta_description'))   ? $result = $result->where('meta_description', 'like', '%'.$request->input('meta_description').'%') : false;
        
        return view('admin.skillitems.index', ['skillitems'=> $result->latest()->paginate(20)]);
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.skillitems.create'  );
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(skillitemsStoreRequest $request)
    {
        
        $request['link'] = str_slug($request->link);
        
        $save_success = Skillitem::create($request->all());
        
        if($save_success){
        
            return redirect()->action('Skillitems@index')->withErrors('Data has been stored successfully.');
        
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
    
        $skillitem = Skillitem::find($id); 
        
        return view('admin.skillitems.show', compact('skillitem') );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $skillitem = Skillitem::find($id); 
        
        return view('admin.skillitems.edit', compact('skillitem') );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(skillitemsStoreRequest $request, $id)
    {
        $skillitem = Skillitem::find($id);
        
        $request['link'] = str_slug($request->link);
        
        $save_success = Skillitem::find($id)->update($request->all());
        
        if($save_success)
        {
            return redirect()->action('Skillitems@index')->withErrors('Data has been updated successfully.');
        
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
        
        $skillitem = Skillitem::find($id);
        
        if($skillitem)
        {
    
    
            if($skillitem->delete())
            {
            
                return redirect()->action('Skillitems@index')->withErrors('Data has been deleted successfully.');
            
            } else{
                
                return back()->withErrors('Failed to delete data. Please retry later.');
                
            }
        
        } else{
            
            return back()->withErrors('Failed to delete data. Please retry later.');
            
        }
        
        
    }
    
    
    public function skillchilds($id)
    {
        
        return view('admin.skillitems.skillchilds', ['skillitem' => Skillitem::find($id) ,'skillchilds' => Skillitem::find($id)->skillchilds()->latest()->paginate(20)]);
        
    }
    
    
    public function skillchildsCreate($id)
    {
        
        return view('admin.skillitems.skillchildsCreate', ['skillitem' => Skillitem::find($id) ]);
        
    }
    
    
    public function skillchildsStore($id, Request $request)
    {
        
        $request['skillitem_id'] = $id;
        
        if(\App\Skillchild::create($request->all()) )
        {
            
            return redirect()->action('Skillitems@skillchilds', $id)->withErrors('skillchild has been added successfully.');
            
        } else{
            
            return back()->withErrors('Please check all the fields.')->withInput();
            
        }
        
    }
    
    
    public function detail($id)
    {
        
        $detail = \App\Skillitem::find( $id )->details;
        
        if( $detail )
        {
            
            return redirect()->action('Skillitempages@show', $detail->id);
            
        } else{
            
            session(['skillitem'=> $id]);
            
            return redirect()->action('Skillitempages@create')->withErrors('Detail page does not exist. Would you like to add one ?');
            
        }
        
        
    }
        
    
    
    
}

        
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\internsStoreRequest;
use App\Http\Requests\internApplicationRequest;
use App\Http\Controllers\Controller;
use App\Intern;

class Interns extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.interns.index', ['interns'=> Intern::latest()->paginate(20)]);
        
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
        
        $result =   new Intern;
          
                    ($request->input('from'))  ? $result = $result->where('created_at', '>', $request->input('from').' 00:00:00') : false;
                    ($request->input('to'))    ? $result = $result->where('created_at', '<', $request->input('to').' 23:59:59') : false;
    
					($request->input('id'))   ? $result = $result->where('id', $request->input('id')) : false;
					($request->input('name'))   ? $result = $result->where('name', 'like', '%'.$request->input('name').'%') : false;
					($request->input('country_id'))   ? $result = $result->where('country_id', $request->input('country_id')) : false;
					($request->input('image_photo'))   ? $result = $result->where('image_photo', 'like', '%'.$request->input('image_photo').'%') : false;
					($request->input('prefetch'))   ? $result = $result->where('prefetch', 'like', '%'.$request->input('prefetch').'%') : false;
					($request->input('dob_date'))   ? $result = $result->where('dob_date', 'like', '%'.$request->input('dob_date').'%') : false;
					($request->input('about_me'))   ? $result = $result->where('about_me', 'like', '%'.$request->input('about_me').'%') : false;
					($request->input('family_details'))   ? $result = $result->where('family_details', 'like', '%'.$request->input('family_details').'%') : false;
					($request->input('education_background'))   ? $result = $result->where('education_background', 'like', '%'.$request->input('education_background').'%') : false;
					($request->input('aim_in_life_en'))   ? $result = $result->where('aim_in_life_en', 'like', '%'.$request->input('aim_in_life_en').'%') : false;
					($request->input('aim_in_life_native'))   ? $result = $result->where('aim_in_life_native', 'like', '%'.$request->input('aim_in_life_native').'%') : false;
					($request->input('why_interested_in_carereer_travel_en'))   ? $result = $result->where('why_interested_in_carereer_travel_en', 'like', '%'.$request->input('why_interested_in_carereer_travel_en').'%') : false;
					($request->input('why_interested_in_carereer_travel_native'))   ? $result = $result->where('why_interested_in_carereer_travel_native', 'like', '%'.$request->input('why_interested_in_carereer_travel_native').'%') : false;
					($request->input('internship_duration'))   ? $result = $result->where('internship_duration', 'like', '%'.$request->input('internship_duration').'%') : false;
					($request->input('internship_at_department'))   ? $result = $result->where('internship_at_department', 'like', '%'.$request->input('internship_at_department').'%') : false;
					($request->input('google_plus_link'))   ? $result = $result->where('google_plus_link', 'like', '%'.$request->input('google_plus_link').'%') : false;
					($request->input('skype_link'))   ? $result = $result->where('skype_link', 'like', '%'.$request->input('skype_link').'%') : false;
					($request->input('linkedin_link'))   ? $result = $result->where('linkedin_link', 'like', '%'.$request->input('linkedin_link').'%') : false;
					($request->input('twitter_link'))   ? $result = $result->where('twitter_link', 'like', '%'.$request->input('twitter_link').'%') : false;
					($request->input('facebook_link'))   ? $result = $result->where('facebook_link', 'like', '%'.$request->input('facebook_link').'%') : false;
					($request->input('webhawksit_link'))   ? $result = $result->where('webhawksit_link', 'like', '%'.$request->input('webhawksit_link').'%') : false;
					($request->input('status'))   ? $result = $result->where('status', 'like', '%'.$request->input('status').'%') : false;
        
        return view('admin.interns.index', ['interns'=> $result->latest()->paginate(20)]);
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.interns.create'  );
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(internsStoreRequest $request)
    {
        
        
        if($request->hasFile('image_photos'))
        {
            if($request->file('image_photos')->isValid())
            {
                
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                
                
                $location   = public_path().'/img/image/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('image_photos')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('image_photos')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('image_photos')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('image_photos')->getClientOriginalExtension();
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('image_photos'));
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                // Size:md
                $image->best_fit(640,400);
                $image->save($location.$image_md);
                // Size:sm
                $image->best_fit(320,225);
                $image->save($location.$image_sm);
                // Size:xs
                $image->best_fit(100,75);
                $image->save($location.$image_xs);
                $request['image_photo'] = '/public/img/image/'.$image_lg;
            }
                        
        }
                
        
        $save_success = Intern::create($request->all());
        
        if($save_success){
        
            return redirect()->action('Interns@index')->withErrors('Data has been stored successfully.');
        
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
    
        $intern = Intern::find($id); 
        
        return view('admin.interns.show', compact('intern') );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $intern = Intern::find($id); 
        
        return view('admin.interns.edit', compact('intern') );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(internsStoreRequest $request, $id)
    {
        $intern = Intern::find($id);
        
        
        if($request->has('image_photo_delete'))
        {
            
            if($intern->image_photo)
            {
                
                $image_to_delete_lg = $intern->image_photo;
                $image_to_delete_md = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'md'.substr($image_to_delete_lg, -4);
                $image_to_delete_sm = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'sm'.substr($image_to_delete_lg, -4);
                $image_to_delete_xs = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'xs'.substr($image_to_delete_lg, -4);
                
                if(\Storage::has($image_to_delete_lg))
                {
                    
                    \Storage::delete($image_to_delete_lg);
                    
                }
                
                if(\Storage::has($image_to_delete_md))
                {
                    
                    \Storage::delete($image_to_delete_md);
                    
                }
                
                if(\Storage::has($image_to_delete_sm))
                {
                    
                    \Storage::delete($image_to_delete_sm);
                    
                }
                
                if(\Storage::has($image_to_delete_xs))
                {
                    
                    \Storage::delete($image_to_delete_xs);
                    
                }
                
            }
            
        }
        
        
        if($request->hasFile('image_photos'))
        {
            if($request->file('image_photos')->isValid())
            {
                
                /**
                *
                * At first, remove previous items, if they exist
                * 
                */
                if($intern->image_photo)
                {
                    
                    $image_to_delete_lg = $intern->image_photo;
                    $image_to_delete_md = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'md'.substr($image_to_delete_lg, -4);
                    $image_to_delete_sm = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'sm'.substr($image_to_delete_lg, -4);
                    $image_to_delete_xs = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'xs'.substr($image_to_delete_lg, -4);
                    
                    if(\Storage::has($image_to_delete_lg))
                    {
                        
                        \Storage::delete($image_to_delete_lg);
                        
                    }
                    
                    if(\Storage::has($image_to_delete_md))
                    {
                        
                        \Storage::delete($image_to_delete_md);
                        
                    }
                    
                    if(\Storage::has($image_to_delete_sm))
                    {
                        
                        \Storage::delete($image_to_delete_sm);
                        
                    }
                    
                    if(\Storage::has($image_to_delete_xs))
                    {
                        
                        \Storage::delete($image_to_delete_xs);
                        
                    }
                    
                }
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/img/image/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('image_photos')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('image_photos')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('image_photos')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('image_photos')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('image_photos'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                // Size:md
                $image->best_fit(640,400);
                $image->save($location.$image_md);
                
                // Size:sm
                $image->best_fit(320,225);
                $image->save($location.$image_sm);
                
                // Size:xs
                $image->best_fit(100,75);
                $image->save($location.$image_xs);
                
                $request['image_photo'] = '/public/img/image/'.$image_lg;
                
            }
                        
        }
        
        $save_success = Intern::find($id)->update($request->all());
        
        if($save_success)
        {
            return redirect()->action('Interns@index')->withErrors('Data has been updated successfully.');
        
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
        
        $intern = Intern::find($id);
        
        if($intern)
        {
    
            if($intern->image_photo)
            {
                $image_to_delete_lg = $intern->image_photo;
                $image_to_delete_md = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'md'.substr($image_to_delete_lg, -4);
                $image_to_delete_sm = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'sm'.substr($image_to_delete_lg, -4);
                $image_to_delete_xs = substr($image_to_delete_lg, 0, strlen($image_to_delete_lg)-6).'xs'.substr($image_to_delete_lg, -4);
                
                if(\Storage::has($image_to_delete_lg))
                {
                    
                    \Storage::delete($image_to_delete_lg);
                    
                }
                
                if(\Storage::has($image_to_delete_md))
                {
                    
                    \Storage::delete($image_to_delete_md);
                    
                }
                
                if(\Storage::has($image_to_delete_sm))
                {
                    
                    \Storage::delete($image_to_delete_sm);
                    
                }
                
                if(\Storage::has($image_to_delete_xs))
                {
                    
                    \Storage::delete($image_to_delete_xs);
                    
                }
                
            }
        
                    
    
            if($intern->delete())
            {
            
                return redirect()->action('Interns@index')->withErrors('Data has been deleted successfully.');
            
            } else{
                
                return back()->withErrors('Failed to delete data. Please retry later.');
                
            }
        
        } else{
            
            return back()->withErrors('Failed to delete data. Please retry later.');
            
        }
        
        
    }
    
    
    public function internApplicationStore(internApplicationRequest $request, Intern $interns)
    {
        
        $intern = $interns->create($request->all());
        
        if($intern)
        {
            
            return back()->withErrors(['success'=> 'Application saved successfully.']);
            
        } else{
            
            return back()->withErrors('Failed to save data. Please retry.')->withInput();
            
        }
        
    }
    
}

        
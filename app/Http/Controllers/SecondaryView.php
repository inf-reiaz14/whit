<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SecondaryView extends Controller
{
    
     public function successStory()
    {
        
        $successfulStories  = \App\Successstory::all()->toArray();
        
        shuffle($successfulStories);

        return view('public.secondary.success-story', compact( 'successfulStories') );
        
    }
    
    
     public function jobCirculars()
    {
        
        $jobcirculars       = \App\Jobcircular::all();
        
        return view('public.secondary.job-circulars', compact( 'jobcirculars' ) );
        
    }
    
    
     public function interns()
    {
        
        $interns            = \App\Intern::all();
        
        return view('public.secondary.interns', compact( 'interns' ) );
        
    }
    
    
     public function itSkills()
    {
        
        $skillsets          = \App\Skillset::all();
        $skillchilds        = \App\Skillchild::all();
        $skillitems         = \App\Skillitem::all();
        
        $skillitemArray     = $skillitems->toArray();
        $oddSkillItems      = array();
        $evenSkillItems     = array();
        $both               = array(&$evenSkillItems, &$oddSkillItems);
        array_walk($skillitemArray, function($v, $k) use ($both) { $both[$k % 2][] = $v; });
        
        $skillset_ids       = $skillsets->pluck('id');
        $skillItemsBySkillSets = [];
        
        for($i = 0; $i < count($skillset_ids); $i++){
            array_walk($oddSkillItems, function($v, $k) use (&$skillItemsBySkillSets, $skillset_ids, $i) { $skillItemsBySkillSets[$skillset_ids[$i]]['odds'][] = ($v['skillset_id'] == $skillset_ids[$i])? $v : false;});
            array_walk($evenSkillItems, function($v, $k) use (&$skillItemsBySkillSets, $skillset_ids, $i) { $skillItemsBySkillSets[$skillset_ids[$i]]['evens'][] = ($v['skillset_id'] == $skillset_ids[$i])? $v : false;});
        }
        
        array_walk($skillItemsBySkillSets, function($v, $k) use (&$skillItemsBySkillSets) { $skillItemsBySkillSets[$k]['odds'] = array_values(array_filter($skillItemsBySkillSets[$k]['odds'])); $skillItemsBySkillSets[$k]['evens'] = array_values(array_filter($skillItemsBySkillSets[$k]['evens'])); });
        
        return view('public.secondary.it-skills', compact( 'skillsets', 'skillitems', 'skillchilds', 'skillItemsBySkillSets' ));
        
    }
    
    
     public function testimonials()
    {
        
        $testimonials       = \App\Testimonial::all();
        
        return view('public.secondary.testimonials', compact( 'testimonials' ));
        
    }
    
    
     public function workTogether(\App\Advisor $advisors)
    {
        
        return view('public.secondary.work-together', compact( 'advisors' ));
        
    }
    
    
     public function footer()
    {
        
        $contacts           = \App\Contact::all();
        
        return view('public.secondary.footer', compact( 'contacts' ));
        
    }
    
    
    public function fb()
    {
        
        
        
        $album_id       = '1519956028295818';
        $page_id        = '1417286005229488';
        $app_id         = '482411311942993';
        $app_secret     = 'ae463d1a35d4e2836db88a69b252d283';
        $access_token   = 'EAAG2wCLiTVEBACrIhbe4KnYpSYZBlv9j3BY2G2OScRvWeMKYv2E6yBOcWucatMcosaJ7QUod7y9GH5HbLdllZBybaP3FMQ4qFi9Paxmrf6NZA1R03ToxneyLvoLmZCbPDRCiLWkcAeD34b6ibiUI5Pj5Co2ZB7MY3sT2B0snDhQZDZD';
        
        
        $albums = json_decode(file_get_contents("https://graph.facebook.com/$page_id/albums?access_token=$app_id|$app_secret"));
        
        $albums = $albums->data;
        $albums = json_decode(json_encode($albums), true);
        $album_ids  = [];
        $photos = [];
        if(count($albums) > 0){
            foreach($albums as $a){
                $album = $a['id'];
                $photo_collection = [];
                $album_photos = json_decode(file_get_contents("https://graph.facebook.com/v2.5/$album/photos?access_token=$access_token"));
                $album_photos = $album_photos->data;
                $album_photos = json_decode(json_encode($album_photos), true);
                
                if(count($album_photos) > 0){
                    foreach($album_photos as $p){
                        $photos[] = $p['id'];
                    }
                }
            }
        }
        
        return view('public.secondary.fb', ['fb_photos' => $photos, 'token'=>$access_token ]);
        
    }
    
    
    public function caseStudy()
    {
        
        return view('public.secondary.case-study', ['studies' => \App\Casestudy::all() ] );
        
    }
    
    
}

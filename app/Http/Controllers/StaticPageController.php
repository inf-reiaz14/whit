<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\bkashTransactionCheck;
use App\Http\Requests\contactRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers;

class StaticPageController extends Controller
{
    
    public function home(\App\Advisor $advisors, \App\Tmsslide $tmsSlides)
    {
        

        $tmsslides_h2       = $tmsSlides->select('name','meta_tag','meta_description')->get();
        $tmsslides_h4       = collect($tmsslides_h2);
                              $tmsslides_h4->shift();
                              $tmsslides_h4->push($tmsslides_h2->first());
        
        $applications       = \App\Application::all();
        $sectors            = \App\Sector::all()->toArray();
        
        $priority_releases  = \App\Pressrelease::priority()->latest()->take(10)->get();

        $contacts           = \App\Contact::all();
        
        return view('public.pages.home', compact( 'applications', 'advisors', 'sectors', 'tmsslides_h2', 'tmsslides_h4', 'contacts', 'priority_releases' ));
        
    }

    public function career(\App\Tmsslide $tmsSlides)
    {
        $tmsslides_h2       = $tmsSlides->select('name','meta_tag','meta_description')->get();
        return view('public.pages.carear',compact('tmsslides_h2'));
    }
    
    
    public function aboutUs()
    {
        
        return view('public.pages.about-us', ['contacts' => \App\Contact::all()]);
        
    }
    
    
    public function adviser($id, \App\Advisor $advisors)
    {
        
        $adviser    = $advisors->find($id);
        
        $contacts   = \App\Contact::all();
        
        return view('public.pages.adviser', compact('adviser', 'contacts') );
        
    }
    
    
    public function application($id)
    {
        
        return view('public.pages.application', ['contacts' => \App\Contact::all(), 'application'=> \App\Application::find($id)]);
        
    }
    
    
    public function pressReleases()
    {
        
        return view('public.pages.press-releases', ['contacts' => \App\Contact::all(), 'pressReleases'=> \App\Pressrelease::general()->latest()->paginate(20), 'priority_releases'=> \App\Pressrelease::priority()->latest()->paginate(20) ]);
        
    }
    
    
    public function singlePressRelease($id)
    {
        
        return view('public.pages.press-release-item', ['contacts' => \App\Contact::all(), 'pressRelease'=> \App\Pressrelease::find($id)]);
        
    }
    
    
    
        public function skillApplications($link)
    {
    
        $skillapp = \App\Framework::where('link', 'like', $link)->first();
        return view('public.pages.skill-application-detail',compact('skillapp','tmsslides_h2'));
        
    }
    
    
    
    public function skillChildDetail($link)
    {
        
        return view('public.pages.skill-child-detail', [ 'skillchild'=> \App\Skillchild::where('link', 'like', $link)->first() ]);
        
    }
    
        
    public function skillItemDetail($link)
    {
        $skillItemDetail    = \App\Skillitem::where('link', 'like', $link)->first();
        $contacts           = \App\Contact::all();
        return view('public.pages.skillitem-detail-page', compact('skillItemDetail', 'contacts') );
    }
    
    
    public function interns(\App\Intern $interns)
    {
        
        return view('public.pages.interns', ['contacts' => \App\Contact::all(), 'interns'=> $interns->latest()->paginate(20)]);
        
    }
    
    
    public function internshipApply()
    {
        
        return view('public.pages.internship-apply', ['contacts' => \App\Contact::all()]);
        
    }
    
    
    public function support()
    {
        
        return view('public.pages.support', ['contacts' => \App\Contact::all()]);
        
    }
    
    
    public function privacyPolicy()
    {
        
        return view('public.pages.privacy-policy');
        
    }
    
    
    public function terms()
    {
        
        return view('public.pages.terms');
        
    }
    
    
    public function contact(Helpers $helper)
    {
        
        return view('public.pages.contact-us', ['contacts' => \App\Contact::all()]);
        
    }
    
    
    public function postContact(contactRequest $request, \App\Http\Controllers\Mails $mails)
    {
        
        $mails->contactToAdmin($request);
        
        $mails->contactToRequester($request);
        
        return back()->withErrors(['success'=> 'Message has been received successfully.']);
    }
    
    
    public function postTalentAcquisitionRequest(Request $request, \App\Http\Controllers\Mails $mails)
    {
        
        $mails->talentAcquisitionRequestToAdmin($request);
        
        return back()->withErrors(['success'=> 'Message has been received successfully.']);
        
    }
    
    
    
    public function showCategory($id)
    {
        
        return view('public.pages.category', ['category' => \App\Category::find($id), 'products' => \App\Category::find($id)->products, 'images' => \App\Category::find($id)->images ]);
        
    }
    
    
    public function showTag($id)
    {
        
        return \App\Tag::find($id);
        
    }
    
    
    public function showProduct($id)
    {
        
        return view('public.pages.product', ['product' => \App\Product::find($id), 'images' => \App\Product::find($id)->images, 'related_products' => \App\Product::find($id)->related_products ]);
        
    }
    
    
    public function jobDetails($id)
    {
        
        return view('public.pages.job-details', [ 'contacts' => \App\Contact::all(), 'job'=> \App\Jobcircular::find($id) ]);
        
    }
    
    
    
    public function page($name)
    {
        
        return view('public.pages.page', ['page'=>\App\Page::where('name', $name)->first()]);
        
    }
    
    
    public function privacy()
    {
        
        return view('public.pages.privacy');
        
    }
    
    
    public function cookie()
    {
        
        return view('public.pages.cookie');
        
    }
    
    
}


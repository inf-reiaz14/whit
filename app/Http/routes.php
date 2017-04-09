<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
|
|------------------------------------------------------------------------------------
|   Public routes start here
|------------------------------------------------------------------------------------
|
*/


/**
|
|------------------------------------------------------------------------------------
|   Static general purpose public routes
|------------------------------------------------------------------------------------
|
*/


/**
 * 
 * General purpose public pages
 * 
 */

 

Route::get('/demo ', ['as'=>'demo ', 'uses'=>'StaticPageController@demo']);

Route::get('/', ['as'=>'home', 'uses'=>'StaticPageController@home']);
Route::get('/career ', ['as'=>'career ', 'uses'=>'StaticPageController@career']);
Route::get('about-us',          'StaticPageController@aboutUs');
Route::get('support',           'StaticPageController@support');
Route::get('press',             'StaticPageController@press');
Route::get('adviser/{id}',      'StaticPageController@adviser');
Route::get('interns',           'StaticPageController@interns');
Route::get('interns/apply',     'StaticPageController@internshipApply');
Route::post('interns/apply',    'Interns@internApplicationStore');
Route::get('application/{id}',  'StaticPageController@application');
Route::get('portfolio',         'StaticPageController@portfolio');
Route::get('blog',              'StaticPageController@blog');
Route::get('blog/{id}',         'StaticPageController@singleBlog');
Route::get('press-release',     'StaticPageController@pressReleases');
Route::get('press-release/{id}','StaticPageController@singlePressRelease');
Route::get('skill-child/{link}',  'StaticPageController@skillChildDetail');
Route::get('skill-item/{link}',   'StaticPageController@skillItemDetail');
Route::get('app/{link}',  'StaticPageController@skillApplications');
Route::get('contact-us',        'StaticPageController@contact');
Route::post('contact-us',       'StaticPageController@postContact');
Route::get('page/{name}',       'StaticPageController@page');
Route::get('job-circular/{id}', 'StaticPageController@jobDetails');
Route::get('privacy',           'StaticPageController@privacy');
Route::get('cookie',            'StaticPageController@cookie');


Route::post('talent-acquisition','StaticPageController@postTalentAcquisitionRequest');


 
Route::get('prototype{id}','Prototype@prototype');
Route::get('mobile/{id}','Prototype@mobile');
Route::get('tab/{id}','Prototype@tab');
Route::get('pc/{id}','Prototype@pc');





Route::group(['prefix'=>'second'], function(){
    
    Route::get('success-story',         'SecondaryView@successStory');
    Route::get('job-circulars',         'SecondaryView@jobCirculars');
    Route::get('interns',               'SecondaryView@interns');
    Route::get('it-skills',             'SecondaryView@itSkills');
    Route::get('testimonials',          'SecondaryView@testimonials');
    Route::get('work-together',         'SecondaryView@workTogether');
    Route::get('footer',                'SecondaryView@footer');
    Route::get('fb',                    'SecondaryView@fb');
    Route::get('case-study',            'SecondaryView@caseStudy');
    
});



/*
|
|-----------------------------------------------------------------------------------
|User Login, Logout
|-----------------------------------------------------------------------------------    
|
|   3 sets of Routes:
|           - GET   - login landing page
|           - POST  - login form post route
|           - GET   - logout through get
|
|           - GET   - forgot password landing page
|           - POST  - forgot password form post route
|
|           - GET   - Signup landing page
|           - POST  - Signup form post route
|
*/



Route::group(['prefix'=>'auth'], function(){
    
    Route::get('social/{name}',                 'AccessController@social');
    Route::get('login', ['as'=>'login','uses'=> 'AccessController@login']);
    Route::post('login',                        'AccessController@postLogin');
    Route::get('logout',                        'AccessController@logout');
    
    Route::get('forgot-password',               'AccessController@forgotPassword');
    Route::post('forgot-password',              'AccessController@postForgotPassword');
    
    Route::get('signup', ['as'=>'signup', 'uses'=>  'AccessController@signup']);
    Route::post('signup',                           'AccessController@postSignup');
    
});


/**
|
|------------------------------------------------------------------------------------
|   Admin area
|------------------------------------------------------------------------------------
|
*/



Route::group(['middleware' => ['auth','permission'], 'prefix' => 'admin'], function() use ($router)
{
    
    /*
    |
    |-----------------------------------------------------------------------------------
    |Admin Dashboard
    |-----------------------------------------------------------------------------------    
    |
    |   COMMON DASHBOARD for all types of admin
    |   
    |
    */
    
    Route::get('dashboard', ['as'=>'dashboard','uses'=>'Dashboard@index']);

    /*
    |
    |-----------------------------------------------------------------------------------
    |User Roles
    |-----------------------------------------------------------------------------------    |
    |
    |   CRUD is done through resource route
    |
    |   Individual ROLE permission is managed through GET and POST request
    |   
    |
    */
    Route::get('roles/{id}/navs', 'Roles@navs');
    Route::post('roles/navs', 'Roles@postNavs');
    Route::get('roles/{id}/permissions', 'Roles@permissions');
    Route::post('roles/permissions', 'Roles@postPermissions');
    Route::resource('roles', 'Roles');







    /*
    |
    |-----------------------------------------------------------------------------------
    |Application Navs
    |-----------------------------------------------------------------------------------
    |
    |   CRUD is done through resource route
    |   
    |   Create, Read, Update only
    |
    */
    Route::resource('navs','Navs', ['except' => ['show', 'destroy', 'edit'] ] );



    /*
    |
    |-----------------------------------------------------------------------------------
    |Application Permission at each Action
    |-----------------------------------------------------------------------------------
    |
    |   CRUD is done through resource route
    |   
    |   Create, Read, Update only
    |
    */
    Route::post('permissions/search',       'Permissions@searchIndex');
    Route::get('permissions/search',        function(){ return redirect()->action('Permissions@index'); });
    Route::get('permissions/auto-update',   function(){ return redirect()->action('Permissions@index'); });
    Route::post('permissions/auto-update',  'Permissions@autoUpdate');
    Route::resource('permissions', 'Permissions');






    /*
    |
    |-----------------------------------------------------------------------------------
    | Social media >> Default->Internal
    |-----------------------------------------------------------------------------------
    |
    |   CRUD is done through resource route
    |   
    */
    Route::post('socials/search', 'Socials@searchIndex');
    Route::get('socials/search', function(){ return redirect()->action('Socials@index'); });
    Route::resource('socials', 'Socials');
    



    /*
    |
    |-----------------------------------------------------------------------------------
    |Application Users
    |-----------------------------------------------------------------------------------
    |
    |   CRUD is done through resource route
    |   
    */
    Route::resource('users','Users');
    
    

    /*
    |
    |-----------------------------------------------------------------------------------
    |Change Password
    |-----------------------------------------------------------------------------------
    |
    |   
    */
    Route::get('change-password', 'AccessController@changePassword');
    Route::post('change-password', 'AccessController@postChangePassword');
    
    
    /*
    |
    |-----------------------------------------------------------------------------------
    | Application settings
    |-----------------------------------------------------------------------------------
    |
    |   
    */
    Route::resource('settings', 'Settings', ['only'=> ['show', 'edit', 'update']]);
    
    
    /*
    |
    |-----------------------------------------------------------------------------------
    | Static pages
    |-----------------------------------------------------------------------------------
    |
    |   
    */
    Route::post('pages/search', 'Pages@searchIndex');
    Route::get('pages/search', function(){ return redirect()->action('Pages@index'); });
    Route::resource('pages', 'Pages');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Currencies
    *-------------------------------------------------------------------------------------------
    */
    Route::post('currencies/search', 'Currencies@searchIndex');
    Route::get('currencies/search', function(){ return redirect()->action('Currencies@index'); });
    Route::resource('currencies', 'Currencies');
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Gateways
    *-------------------------------------------------------------------------------------------
    */
    Route::post('gateways/search', 'Gateways@searchIndex');
    Route::get('gateways/search', function(){ return redirect()->action('Gateways@index'); });
    Route::resource('gateways', 'Gateways');
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Shippings
    *-------------------------------------------------------------------------------------------
    */
    Route::post('shippings/search', 'Shippings@searchIndex');
    Route::get('shippings/search', function(){ return redirect()->action('Shippings@index'); });
    Route::resource('shippings', 'Shippings');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Successful Stories
    *-------------------------------------------------------------------------------------------
    */
    Route::post('successstories/search', 'Successstories@searchIndex');
    Route::get('successstories/search', function(){ return redirect()->action('Successstories@index'); });
    Route::resource('successstories', 'Successstories');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Job Circulars
    *-------------------------------------------------------------------------------------------
    */
    Route::post('jobcirculars/search', 'Jobcirculars@searchIndex');
    Route::get('jobcirculars/search', function(){ return redirect()->action('Jobcirculars@index'); });
    Route::resource('jobcirculars', 'Jobcirculars');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > TMS SLIDES
    *-------------------------------------------------------------------------------------------
    */
    Route::post('tmsslides/search', 'Tmsslides@searchIndex');
    Route::get('tmsslides/search', function(){ return redirect()->action('Tmsslides@index'); });
    Route::resource('tmsslides', 'Tmsslides');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > INTERNS
    *-------------------------------------------------------------------------------------------
    */
    Route::post('interns/search', 'Interns@searchIndex');
    Route::get('interns/search', function(){ return redirect()->action('Interns@index'); });
    Route::resource('interns', 'Interns');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > APPLICATIONS
    *-------------------------------------------------------------------------------------------
    */
    Route::post('applications/search', 'Applications@searchIndex');
    Route::get('applications/search', function(){ return redirect()->action('Applications@index'); });
    Route::resource('applications', 'Applications');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > SECTORS
    *-------------------------------------------------------------------------------------------
    */
    Route::post('sectors/search', 'Sectors@searchIndex');
    Route::get('sectors/search', function(){ return redirect()->action('Sectors@index'); });
    Route::resource('sectors', 'Sectors');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Languages
    *-------------------------------------------------------------------------------------------
    */
    Route::post('languages/search', 'Languages@searchIndex');
    Route::get('languages/search', function(){ return redirect()->action('Languages@index'); });
    Route::resource('languages', 'Languages');
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > SKILLSETS > has many skill items
    *-------------------------------------------------------------------------------------------
    */
    Route::post('skillsets/search', 'Skillsets@searchIndex');
    Route::get('skillsets/search', function(){ return redirect()->action('Skillsets@index'); });
    Route::get('skillsets/{id}/skillitems','Skillsets@skillitems');   
    Route::get('skillsets/{id}/skillitems/create','Skillsets@skillitemsCreate');  
    Route::post('skillsets/{id}/skillitems/create','Skillsets@skillitemsStore');
    Route::get('skillsets/{id}/languages','Skillsets@languages');   
    Route::get('skillsets/{id}/languages/create','Skillsets@languagesCreate');  
    Route::post('skillsets/{id}/languages/create','Skillsets@languagesStore');
    Route::resource('skillsets', 'Skillsets');
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > SKILLITEMS > has many skill childs
    *-------------------------------------------------------------------------------------------
    */
    Route::get('skillitems/{id}/details', 'Skillitems@detail');
    Route::post('skillitems/search', 'Skillitems@searchIndex');
    Route::get('skillitems/search', function(){ return redirect()->action('Skillitems@index'); });
    Route::get('skillitems/{id}/skillchilds','Skillitems@skillchilds');   
    Route::get('skillitems/{id}/skillchilds/create','Skillitems@skillchildsCreate');  
    Route::post('skillitems/{id}/skillchilds/create','Skillitems@skillchildsStore');
    Route::get('skillitems/{id}/languages','Skillitems@languages');   
    Route::get('skillitems/{id}/languages/create','Skillitems@languagesCreate');  
    Route::post('skillitems/{id}/languages/create','Skillitems@languagesStore');
    Route::resource('skillitems', 'Skillitems');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > SKILLCHILD
    *-------------------------------------------------------------------------------------------
    */
    Route::get('skillchilds/{id}/frameworks', 'Frameworks@frameworksBySkillchild');
    Route::post('skillchilds/search', 'Skillchildren@searchIndex');
    Route::get('skillchilds/search', function(){ return redirect()->action('Skillchildren@index'); });
    Route::resource('skillchilds', 'Skillchildren');
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > TESTIMONIALS
    *-------------------------------------------------------------------------------------------
    */
    Route::post('testimonials/search', 'Testimonials@searchIndex');
    Route::get('testimonials/search', function(){ return redirect()->action('Testimonials@index'); });
    Route::resource('testimonials', 'Testimonials');
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > ADVISORS
    *-------------------------------------------------------------------------------------------
    */
    Route::post('advisors/search', 'Advisors@searchIndex');
    Route::get('advisors/search', function(){ return redirect()->action('Advisors@index'); });
    Route::resource('advisors', 'Advisors');
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > HOMEPAGE > DIRECTORS
    *-------------------------------------------------------------------------------------------
    */
    Route::resource('directors', 'Directors');
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > CONTACTS
    *-------------------------------------------------------------------------------------------
    */
    Route::post('contacts/search', 'Contacts@searchIndex');
    Route::get('contacts/search', function(){ return redirect()->action('Contacts@index'); });
    Route::resource('contacts', 'Contacts');
    
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Press Releases
    *-------------------------------------------------------------------------------------------
    */
    Route::post('pressreleases/search', 'Pressreleases@searchIndex');
    Route::get('pressreleases/search', function(){ return redirect()->action('Pressreleases@index'); });
    Route::resource('pressreleases', 'Pressreleases');
    
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > CASE STUDY
    *-------------------------------------------------------------------------------------------
    */
    Route::resource('casestudies', 'Casestudies');
    
    
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Detail page for skill item
    *-------------------------------------------------------------------------------------------
    */
    Route::post('skillitempages/search', 'Skillitempages@searchIndex');
    Route::get('skillitempages/search', function(){ return redirect()->action('Skillitempages@index'); });
    Route::resource('skillitempages', 'Skillitempages');
    
    
    /**
    *-------------------------------------------------------------------------------------------
    *   Application > Frameworks
    *-------------------------------------------------------------------------------------------
    */
    Route::post('frameworks/search', 'Frameworks@searchIndex');
    Route::get('frameworks/search', function(){ return redirect()->action('Frameworks@index'); });
    Route::resource('frameworks', 'Frameworks');
    
});












/**
|
|------------------------------------------------------------------------------------
|   Users area
|------------------------------------------------------------------------------------
|
*/


Route::group(['middleware'=>'auth','prefix'=>'user'], function()
{
    
    
    /*
    |
    |-----------------------------------------------------------------------------------
    |Change password
    |-----------------------------------------------------------------------------------
    |
    |   
    */
    Route::get('my-profile', 'MyProfile@show');
    Route::post('my-profile', 'MyProfile@update');
    Route::get('my-profile/edit', 'MyProfile@edit');
    
    



    /*
    |
    |-----------------------------------------------------------------------------------
    |Change password
    |-----------------------------------------------------------------------------------
    |
    |   
    */
    
    Route::get('my-profile/change-password', 'MyProfile@changePassword');
    Route::post('my-profile/change-password', 'MyProfile@updatePassword');
    
    
    
});













/*
|
|-----------------------------------------------------------------------------------
|Application Root
|-----------------------------------------------------------------------------------
|
|   If it's not a public application, All users are mendatoroly forced to login.
|   
|   If any users tries to access application root,
|       the user will be redirected to:
|                                   - login page    (if user is not logged in)
|                                   - dashboard     (if user is logged in)
|
|   If public application, redirect to public home
|
*/


// Route::get('/', function () {
//     return redirect()->route('login');
// });

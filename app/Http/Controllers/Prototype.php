<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Prototype extends Controller

{
    
    public function prototype($id)
    {
        return view('public.pages.prototypr', ['application'=> \App\Application::find($id)]);
    }
    
    public function mobile($id)
    {
        return view('public.pages.mobile', ['application'=> \App\Application::find($id)]);
    }
    
    public function tab($id)
    {
        return view('public.pages.tab', ['application'=> \App\Application::find($id)]);
    }
    public function pc($id)
    {
        return view('public.pages.pc', ['application'=> \App\Application::find($id)]);
    }
}
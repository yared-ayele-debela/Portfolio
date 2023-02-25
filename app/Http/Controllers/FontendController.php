<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    //
    public function index(){

        return view('fontend.index');
    }

    public function blog(){

        return view('fontend.pages.blog');
    }
    public function resume(){
        
        return view('fontend.pages.resume');
    }
    public function contact(){
        
        return view('fontend.pages.contact');
    }
    public function service(){
        
        return view('fontend.pages.services');
    }
    public function portfolio(){
        
        return view('fontend.pages.portfolio');
    }
}
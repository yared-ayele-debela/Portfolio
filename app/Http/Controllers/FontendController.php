<?php

namespace App\Http\Controllers;

use App\Models\award;
use App\Models\blog;
use App\Models\education;
use App\Models\language;
use App\Models\Project;
use App\Models\resume;
use App\Models\Skill;
use App\Models\socail_media;
use App\Models\work_exp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FontendController extends Controller
{
    //
    public function side(){
        $resume=resume::first();
        $social_media=socail_media::all();
        return view('admin_layouts.leftsidebar',compact('resume','social_media'));
    }
    public function index(){
        $resume=resume::first();
        return view('fontend.index',compact('resume'));
    }

    public function blog(){
        $blog=DB::table('blogs')->paginate(6);
        $resume=resume::first();
        return view('fontend.pages.blog',compact('resume','blog'));
    }
    public function resume(){
        $resume=resume::first();
        $skill=Skill::all();
        $work_exp=work_exp::all();
        $language=language::all();
        $project=Project::all();
        $social_media=socail_media::all();
        $award=award::all();
        $education=education::all();
        return view('fontend.pages.resume',compact('resume','skill','work_exp','language','project','social_media','award','education'));
    }
    public function contact(){
        $resume=resume::first();

        return view('fontend.pages.contact',compact('resume'));
    }
    public function service(){
        $resume=resume::first();

        return view('fontend.pages.services',compact('resume'));
    }
    public function portfolio(){

        $projects = Project::with('images')->paginate(6);

        $resume=resume::first();
        return view('fontend.pages.portfolio',compact('resume','projects'));
    }
}
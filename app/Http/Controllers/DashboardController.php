<?php

namespace App\Http\Controllers;

use App\Models\award;
use App\Models\blog;
use App\Models\education;
use App\Models\language;
use App\Models\Project;
use App\Models\resume;
use App\Models\Service;
use App\Models\Skill;
use App\Models\socail_media;
use App\Models\work_exp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $resume=resume::count();
        $skill=Skill::count();
        $work_exp=work_exp::count();
        $language=language::count();
        $project=Project::count();
        $social_media=socail_media::count();
        $award=award::count();
        $education=education::count();
        $service=Service::count();
        $blog=blog::count();


        return view('User.dashboard',compact('resume','skill','work_exp','language','project','social_media','award','education','service','blog'));

   }
}
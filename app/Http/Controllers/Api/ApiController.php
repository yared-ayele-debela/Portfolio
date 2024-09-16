<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\award;
use App\Models\blog;
use App\Models\Category;
use App\Models\education;
use App\Models\Image;
use App\Models\language;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\resume;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\socail_media;
use App\Models\work_exp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;

class ApiController extends Controller
{
    public function social_media(){
        $social_media=socail_media::all();

        return response()->json($social_media,'200');
    }
    public function service(){
        $services=Category::all();
        return response()->json($services,'200');
    }

    public function blog(){
        $blog=DB::table('blogs')->get();

        return response()->json($blog,'200');
    }

    public function blog_detail($id){
        $blog_details=blog::where('id',$id)->first();

        return response()->json($blog_details,'200');
    }
    public function first_resume()
    {
        $resume=resume::first();


        return response()->json($resume, 200);
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

        $data = [
            'resume' => $resume,
            'skills' => $skill,
            'work_exp' => $work_exp,
            'languages' => $language,
            'projects' => $project,
            'social_media' => $social_media,
            'awards' => $award,
            'education' => $education
        ];

        return response()->json($data, 200);
    }

    public function projeccts(){
        $projects = Project::with('images')->get();
        return response()->json($projects,'200');
    }
    public function project_category(){
        $project_category=ProjectCategory::all();

        return response()->json($project_category,'200');
    }

    public function project_detail($id){
        $project=Project::with('images')->findOrFail($id);

        return response()->json($project,'200');
    }


    public function awards(){
        $awards=award::all();

        return response()->json($awards,'200');
    }
    public function skills(){
        $skills=SkillCategory::with('skills')->get();
        return response()->json($skills,'200');
    }
    public function work_exp(){
        $work_exps=work_exp::all();
        return response()->json($work_exps,'200');
    }
    public function language(){
        $languages=language::all();

        return response()->json($languages,'200');
    }
    public function education(){
        $educations=education::all();

        return response()->json($educations,'200');

   }
}
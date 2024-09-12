<?php

namespace App\Http\Controllers;

use App\Models\award;
use App\Models\education;
use App\Models\language;
use App\Models\Project;
use App\Models\resume;
use App\Models\Skill;
use App\Models\socail_media;
use App\Models\work_exp;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
class ItemController extends Controller
{
    //
    public function pdfview(Request $request)

    {

        $resume=resume::first();
        $skill=Skill::all();
        $work_exp=work_exp::all();
        $language=language::all();
        $project=Project::all();
        $social_media=socail_media::all();
        $award=award::all();
        $education=education::all();

        view()->share([
            'resume' => $resume,
            'skill' => $skill,
            'work_exp' => $work_exp,
            'language' => $language,
            'project' => $project,
            'social_media' => $social_media,
            'award' => $award,
            'education' => $education
        ]);


        if($request->has('download')){

            $pdf = PDF::loadView('pdfview')->setOptions(['defaultFont' => 'sans-serif']);;

            return $pdf->download('pdfview.pdf');

        }



        return view('pdfview');

    }
}

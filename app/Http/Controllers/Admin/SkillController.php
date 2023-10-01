<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function skills(Request $request){
        $skill=Skill::all();
        // dd($skill);
        if($request->isMethod('POST')){
            $this->validate($request, [
                'name'=>'required',
                'description'=>'required',
                'percentage'=>'required',
                
            ]);
            $skill =new Skill();
            $skill->name=$request->input('name');
            $skill->description=$request->input('description');
            $skill->percentage=$request->input('percentage');
            $skill->status=1;
            
            $skill->save();
           return redirect('skill/all');
        }

        return view('skill.allskills',compact('skill'));
    }

    
    public function create(){
        
        return view('skill.addskill');
    }

    public function edit(Request $request ,$skill_id){
        if($request->isMethod('PUT')){
            
            $this->validate($request, [
                'name'=>'required',
                'description'=>'required',
                'percentage'=>'required',         
            ]);
            
            $skill =Skill::find($skill_id);
            $skill->name=$request->input('name');
            $skill->description=$request->input('description');
            $skill->percentage=$request->input('percentage');
            $skill->status=1;
            
            $skill->update();
            notify()->success('Skill is Updated','Updated');

           return redirect('skill');
        }
        
        $skill=Skill::find($skill_id);

        return view('skill.editskill',compact('skill'));
        
        
    }

    public function destory($id){
        $delete_skill=Skill::find($id);
        $delete_skill->delete();

        notify()->error('Skill is Deleted','Deleted');
        return back();
    }

     //acitve skills
     public function activeskill($id){
        $skills=Skill::find($id);
        $skills->status=1;
        $skills->update();

        notify()->success('Skill Status is Active','Active');
        return back();
    }
    //inactive skills
    public function inactiveskill($id){

        $skills=Skill::find($id);
        $skills->status=0;
        $skills->update();

        notify()->error('Skill Status is Inactive','Inactive');
        return back();
    }

}
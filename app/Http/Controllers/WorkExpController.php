<?php

namespace App\Http\Controllers;

use App\Models\work_exp;
use Illuminate\Http\Request;

class WorkExpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allwork_exps=work_exp::all();
        return  view('work_exp.allwork_exp',compact('allwork_exps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('work_exp.addwork_exp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // Create and save the work experience
        $workExperience = new work_exp();
        $workExperience->title=$validatedData['title'];
        $workExperience->description=$validatedData['description'];
        $workExperience->start_date=$validatedData['start_date'];
        $workExperience->end_date=$validatedData['end_date'];
        $workExperience->save();

        return redirect()->route('work_experience.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $work_exp=work_exp::find($id);
        return view('work_exp.editwork_exp',compact('work_exp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // Create and save the work experience
        $workExperience = work_exp::find($id);
        $workExperience->title=$validatedData['title'];
        $workExperience->description=$validatedData['description'];
        $workExperience->start_date=$validatedData['start_date'];
        $workExperience->end_date=$validatedData['end_date'];
        $workExperience->save();

        return redirect()->route('work_experience.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $work_exp=work_exp::find($id);
        $work_exp->delete();

        return redirect()->back();
    }
}

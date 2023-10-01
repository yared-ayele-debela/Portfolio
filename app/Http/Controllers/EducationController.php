<?php

namespace App\Http\Controllers;

use App\Models\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alleducations=education::all();
        return  view('education.alleducation',compact('alleducations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('education.addeducation');
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
            'university' => 'required',
            'bachelor' => 'required',
            'start_year'=>'required',
            'end_year'=>'required'
        ]);

        $education=new education();
        $education->university=$validatedData['university'];
        $education->bachelor=$validatedData['bachelor'];
        $education->start_year=$validatedData['start_year'];
        $education->end_year=$validatedData['end_year'];
        $education->save();

        return redirect()->route('education.index');
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
        $education=education::find($id);
        return view('education.editeducation',compact('education'));
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
        //
        $validatedData = $request->validate([
            'university' => 'required',
            'bachelor' => 'required',
            'start_year'=>'required',
            'end_year'=>'required'
        ]);

        $education= education::find($id);
        $education->university=$validatedData['university'];
        $education->bachelor=$validatedData['bachelor'];
        $education->start_year=$validatedData['start_year'];
        $education->end_year=$validatedData['end_year'];
        $education->save();

        return redirect()->route('education.index');
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
        $education=education::find($id);
        $education->delete();

        return redirect()->back();
    }
}

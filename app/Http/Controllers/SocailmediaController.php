<?php

namespace App\Http\Controllers;

use App\Models\socail_media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class SocailmediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allsocial_medias=socail_media::all();
        return  view('socail_media.allsocial_media',compact('allsocial_medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('socail_media.addsocial_media');
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
            'name' => 'required',
            'icon' => 'required',
            'link' => 'required',
        ]);

        $socail_media=new socail_media();

        if($request->hasFile('icon')){

            //get file name with ext
            $fileNameWithExt=$request->file('icon')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('icon')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload icon
            $path=$request->file('icon')->storeAs('public/icon',$fileNameToStore);

            $socail_media->icon=$fileNameToStore;
        }

        $socail_media->name=$validatedData['name'];
        $socail_media->link=$validatedData['link'];
        $socail_media->save();
        // Redirect or perform additional actions
        return redirect()->route('social_meda.index')->with('success', 'Social media entry created successfully!');
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
        $social_media=socail_media::find($id);
        return view('socail_media.editsocial_media',compact('social_media'));
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
            'name' => 'required',
            'icon' => 'required',
            'link' => 'required',
        ]);

        $socail_media=socail_media::find($id);

        if($request->hasFile('icon')){
            Storage::disk('public')->delete('icon/'.$socail_media->icon);

            //get file name with ext
            $fileNameWithExt=$request->file('icon')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('icon')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload icon
            $path=$request->file('icon')->storeAs('public/icon',$fileNameToStore);

            $socail_media->icon=$fileNameToStore;
        }

        $socail_media->name=$validatedData['name'];
        $socail_media->link=$validatedData['link'];
        $socail_media->save();
        // Redirect or perform additional actions
        return redirect()->route('social_meda.index')->with('success', 'Social media updated successfully!');
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
        $social_media=socail_media::find($id);
        if($social_media->icon){
            Storage::disk('public')->delete('icon/'.$social_media->icon);
        }
        $social_media->delete();

        return redirect()->back();
    }
}

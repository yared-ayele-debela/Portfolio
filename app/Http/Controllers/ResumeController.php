<?php

namespace App\Http\Controllers;

use App\Models\resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allresumes=resume::all();
        return  view('resume.allresume',compact('allresumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resume.addresume');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          // Validate the form data
          $validatedData = $request->validate([
            'fullname' => 'required',
            'email'=>'required',
            'image' => 'required',
            'profession' => 'required',
            'mobile' => 'required',
            'portfolio_link' => 'required',
            'location' => 'required',
            'about_me' => 'required',
            'description' => 'required'
        ]);

        // Store the data in the database
        $resume = new Resume;
        $resume->fullname = $validatedData['fullname'];
        // Save the image to storage and set the image path
        if($request->hasFile('image')){
            //get file name with ext
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('image')->storeAs('public/resume',$fileNameToStore);

            $resume->image=$fileNameToStore;
           }
           if($request->hasFile('cover_image')){
            //get file name with ext
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            //upload cover_image
            $path=$request->file('cover_image')->storeAs('public/resume',$fileNameToStore);

            $resume->cover_image=$fileNameToStore;
           }
        $resume->profession = $validatedData['profession'];
        $resume->email=$validatedData['email'];
        $resume->mobile = $validatedData['mobile'];
        $resume->portfolio_link = $validatedData['portfolio_link'];
        $resume->location = $validatedData['location'];
        $resume->about_me = $validatedData['about_me'];
        $resume->description = $validatedData['description'];
        $resume->save();

        // Redirect or show a success message
        return redirect()->route('resumes.index')->with('success', 'Resume created successfully!');
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
        $resume=resume::find($id);
        return view('resume.editresume',compact('resume'));
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
   // Validate the form data
            $validatedData = $request->validate([
                'fullname' => 'required',
                'email'=>'required',
                'profession' => 'required',
                'mobile' => 'required',
                'portfolio_link' => 'required',
                'location' => 'required',
                'about_me' => 'required',
                'description' => 'required'
            ]);

            // Store the data in the database
            $resume = Resume::find($id);
            $resume->fullname = $validatedData['fullname'];
            // Save the image to storage and set the image path
            if($request->hasFile('image')){

                Storage::disk('public')->delete('resume/'.$resume->image);

                //get file name with ext
                $fileNameWithExt=$request->file('image')->getClientOriginalName();
                //get just file name
                $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //get just file extenstion
                $extension=$request->file('image')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                //upload image
                $path=$request->file('image')->storeAs('public/resume',$fileNameToStore);

                $resume->image=$fileNameToStore;
            }
            if($request->hasFile('cover_image')){

                Storage::disk('public')->delete('resume/'.$resume->cover_image);

                //get file name with ext
                $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
                //get just file name
                $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //get just file extenstion
                $extension=$request->file('cover_image')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                //upload cover_image
                $path=$request->file('cover_image')->storeAs('public/resume',$fileNameToStore);

                $resume->cover_image=$fileNameToStore;
            }
            $resume->profession = $validatedData['profession'];
            $resume->email=$validatedData['email'];
            $resume->mobile = $validatedData['mobile'];
            $resume->portfolio_link = $validatedData['portfolio_link'];
            $resume->location = $validatedData['location'];
            $resume->about_me = $validatedData['about_me'];
            $resume->description = $validatedData['description'];
            $resume->save();

            // Redirect or show a success message
            return redirect()->route('resumes.index')->with('success', 'Resume updated successfully!');
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
        $resume=resume::find($id);
        if($resume->image){
            Storage::disk('public')->delete('resume/'.$resume->image);
        }
        $resume->delete();

        return redirect()->route('resumes.index');
    }
}

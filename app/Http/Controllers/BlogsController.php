<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    public function index()
    {
        $allblogs=blog::all();

        return view('blog.alllblogs',compact('allblogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.addblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'video'=>'mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20480',
       ]);

       // dd($request->all());
       $blog = new blog();
       $blog->title=$request->input('title');
       $blog->description=$request->input('description');

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
           $path=$request->file('image')->storeAs('public/blogs',$fileNameToStore);

           $blog->image=$fileNameToStore;
          }

       $blog->save();

       return redirect('/blogs');
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
        $blog=blog::find($id);
        return view('blog.editblog',compact('blog'));
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
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
       ]);

       // dd($request->all());
       $blog = blog::find($id);
       $blog->title=$request->input('title');
       $blog->description=$request->input('description');

       if($request->hasFile('image')){
           Storage::disk('public')->delete('blogs/'.$blog->image);
           //get file name with ext
           $fileNameWithExt=$request->file('image')->getClientOriginalName();
           //get just file name
           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           //get just file extenstion
           $extension=$request->file('image')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore=$fileName.'_'.time().'.'.$extension;
           //upload image
           $path=$request->file('image')->storeAs('public/blogs',$fileNameToStore);

           $blog->image=$fileNameToStore;
          }

       $blog->save();

       return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::find($id);
        Storage::disk('public')->delete('blogs/'.$blog->image);
        Storage::disk('public')->delete('blogs/'.$blog->video);
        $blog->delete();

        notify('News Deleted successfully.');

        return redirect()->route('blogs.index');
    }
}

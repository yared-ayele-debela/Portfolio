<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    //
    public function index(){

        $projects=Project::all();
        return view('project.allproject',compact('projects'));
    }

    public function create(){

        return view('project.addproject');
    }

    public function store(Request $request)
    {
    //   dd($request->all());
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'description' => 'nullable',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date|unique:projects',
                'client_id' => 'nullable',
                'category_id' => 'nullable',
                'budget' => 'nullable',
                'spent' => 'nullable',
                'status' => 'nullable',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            // dd($validatedData);

            $project = new Project();
            $project->title = $validatedData['title'];
            $project->description = $validatedData['description'];
            $project->start_date = $validatedData['start_date'];
            $project->end_date = $validatedData['end_date'];

            if($request->hasFile('cover_image')){
                // Storage::disk('public')->delete('banner/'.$project->image);
                //get file name with ext
                $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
                //get just file name
                $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //get just file extenstion
                $extension=$request->file('cover_image')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                //upload cover_image
                $path=$request->file('cover_image')->storeAs('public/projects',$fileNameToStore);

                $project->cover_image=$fileNameToStore;

                $project->save();
               }


               if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                     $fileNameWithExt=$file->getClientOriginalName();
                    //get just file name
                    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                    //get just file extenstion
                    $extension=$file->getClientOriginalExtension();
                    //file name to store
                    $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                    //upload cover
                    $path=$file->storeAs('public/projects',$fileNameToStore);

                    $project_image=new Image();
                    $project_image->project_id=$project->id;
                    $project_image->images=$fileNameToStore;
                    $project_image->save();

                }
            }

            return redirect()->route('all_projects');


       }

       public function edit($id){
        $image=Image::where('project_id',$id)->get();
        $project=Project::find($id);
        return view('project.editproject',compact('project','image'));
       }

       public function update(Request $request)
       {
       //   dd($request->all());
            //    $validatedData = $request->validate([
            //        'title' => 'required|max:255',
            //        'description' => 'nullable',
            //        'start_date' => 'nullable|date',
            //        'end_date' => 'nullable|date',
            //    ]);

               $project = Project::find($request->input('id'));
               $project->title = $request->input('title');
               $project->description = $request->input('description');
               $project->start_date = $request->input('start_date');
               $project->end_date = $request->input('end_date');
                    // Handle project image upload

                    if($request->hasFile('cover_image')){
                        Storage::disk('public')->delete('projects/'.$project->image);
                        //get file name with ext
                        $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
                        //get just file name
                        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                        //get just file extenstion
                        $extension=$request->file('cover_image')->getClientOriginalExtension();
                        //file name to store
                        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                        //upload cover_image
                        $path=$request->file('cover_image')->storeAs('public/projects',$fileNameToStore);

                        $project->cover_image=$fileNameToStore;

                        $project->save();
                       }


                       if($request->hasFile("images")){
                        $files=$request->file("images");
                        foreach($files as $file){
                             $fileNameWithExt=$file->getClientOriginalName();
                            //get just file name
                            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                            //get just file extenstion
                            $extension=$file->getClientOriginalExtension();
                            //file name to store
                            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                            //upload cover
                            $path=$file->storeAs('public/projects',$fileNameToStore);

                            $project_image=new Image();
                            $project_image->project_id=$project->id;
                            $project_image->images=$fileNameToStore;
                            $project_image->save();

                        }
                    }

               $project->save();

               return redirect()->route('all_projects');


               }

              public function destroy($id){

                $project=Project::find($id);

                Storage::disk('public')->delete('projects/'.$project->image);

                 $image=Image::where('project_id',$id)->get();

                if($image){
                    // Delete physical files and database records
                    foreach ($image as $image) {
                        // Delete physical file
                        Storage::disk('public')->delete('projects/'.$image->images);
                        // Delete database record
                        $image->delete();
                    }
                }
                $project->delete();

                
                return back();
              }


   }

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function maindashboard(){

        return view('admin_layouts.maindashboard');
    }
    public function User(){

        return view('User.dashboard');
    }
    public function addUser(){

        return view('User.adduser');
    }

    // public function store(Request $request){
    //      $this->validate($request, [
    //                             'name'=>'required',
    //                             'email'=>'required:email',
    //                             'gender'=>'required',

    //             ]);

    //         $user = new User();
    //         $user->profile_image = $path;
    //         $user->name = $request->input('name');
    //         $user->last_name = $request->input('last_name');
    //         $user->username = $request->input('username');
    //         $user->email = $request->input('email');
    //         $user->phone = $request->input('phone');
    //         $user->gender = $request->input('gender');
    //         $user->status = 1;

    //         $user->save();

    //     return redirect()->route('allUsers');

    // }
    public function allUsers(){
        $users =User::all();
        return view('User.allluser')->with('users',$users);
    }
    public function userprofile(){
            $userprofile=User::all();
            $id=Auth::user()->id;
            $user=User::find($id);
        return view('User.userprofile',compact('user'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function edit($id){

      $users=User::whereId($id)->first();
      return view('User.edituser')->with('users',$users);
    }

    //find the page for edit profile

    public function update(Request $request,$id){

            $this->validate($request, [
                    'name'=>'required',
                    'email'=>'required',
                    'gender'=>'required',


            ]);
            // dd($request->all());
            // if($request->hasFile('cover_image')){
            //     dd("ture");
            // }else{
            //     dd("flase");
            // }
            $user =user::find($id);

            if($request->hasFile('cover_image')){

                // Storage::disk('public')->delete('user/'.$user->cover_image);
                //get file name with ext
                $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
                //get just file name
                $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //get just file extenstion
                $extension=$request->file('cover_image')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                //upload cover_image
                $path=$request->file('cover_image')->storeAs('public/user',$fileNameToStore);

                $user->cover_image=$fileNameToStore;
                // $user->save();
               }
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->gender=$request->input('gender');
            $user->fullname=$request->input('fullname');
            $user->phone=$request->input('phone');

            $user->update();

        notify()->warning('User Updated Successfully!','Updated');
        return redirect()->route('allUsers');
}
    // update profile

    public function destory($id){
        $delete_user=User::find($id);
        if(($delete_user->id==8) && ($delete_user->email=="yared@gmail.com")){
            notify()->error('User is Admin Not Deleted!','Denied');
            return back();
        }else{

        $delete_user->delete();
        notify()->error('User Deleted Successfully !','Deleted');

        }
    }

     //acitve users
     public function activeuser($id){
        $users=User::find($id);
        $users->status=1;
        $users->update();

        notify()->success('User Status is Active','Active');
        return back();
    }
    //inactive users
    public function inactiveuser($id){

        $users=User::find($id);
        $users->status=0;
        $users->update();

        notify()->error('User Status is Inactive','Inactive');
        return back();
    }



}

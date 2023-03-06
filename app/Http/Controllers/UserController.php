<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request){
         $this->validate($request, [
                                'name'=>'required',
                                'email'=>'required:email',
                                'gender'=>'required',
                                'usertype'=>'required',
                                'password'=>'required:min:6',

         ]);
         //dd($request->all());
         try{
            DB::beginTransaction();
            $create_user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'usertype'=>$request->usertype,
                'password'=>bcrypt($request->password),
                
            ]);
            if(!$create_user){
                DB::rollBack();  
               
             return back()->with('error','Something went wrong ');
        
            }
            DB::commit();
            notify()->success('User Saved Successfully!',);
            return redirect()->route('allUsers');
         }catch(\Throwable $th)
         {
         DB::rollBack();
         throw $th;
        }

    }
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
                    'email'=>'required:email',
                    'gender'=>'required',
                    
            ]);
            //dd($request->all());
            try{
            DB::beginTransaction();
            $update_user=User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'usertype'=>$request->usertype,
            'gender'=>$request->gender,
            'fullname'=>$request->fullname,
            'address'=>$request->address,
            'company'=>$request->company,
            'job'=>$request->job,
            'phone'=>$request->phone,
            ]);
            if(!$update_user){
            DB::rollBack();  

            return back()->with('error','Something went wrong ');

            }
            DB::commit();
            notify()->warning('User Updated Successfully!','Updated');
            return redirect()->route('allUsers');
            }catch(\Throwable $th)
            {
            DB::rollBack();
            throw $th;
            }
    }
    // update profile
       
    public function destory($id){
        $delete_user=User::find($id);
        if($delete_user->usertype=='Admin'){
            notify()->error('User is Admin Not Deleted!','Denied');
        }else{
        $delete_user->delete();
        }
        return back();
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
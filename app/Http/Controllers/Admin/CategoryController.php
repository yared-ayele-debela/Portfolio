<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use CreateCategoryTable;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categories(Request $request){
        $category=Category::all();
        
        if($request->isMethod('POST')){
            $this->validate($request, [
                'name'=>'required',
                'slug'=>'required',
                'description'=>'required',
                
            ]);
            $category =new Category();
            $category->name=$request->input('name');
            $category->slug=$request->input('slug');
            $category->description=$request->input('description');
            $category->status=1;
            
            $category->save();
           return redirect('category');
        }

        return view('category.allcategories',compact('category'));
    }
    public function create(){
        
        return view('category.addcategory');
    }

    public function edit(Request $request ,$category_id){
        if($request->isMethod('PUT')){
            $this->validate($request, [
                'name'=>'required',
                'slug'=>'required',
                'description'=>'required',
                
            ]);
            $category =Category::find($category_id);
            
            $category->name=$request->input('name');
            $category->slug=$request->input('slug');
            $category->description=$request->input('description');
            $category->status=1;
            
            $category->update();
           return redirect('category');
        }
        
        $category=Category::find($category_id);

        return view('category.editcategory',compact('category'));
        
        
    }

    public function destory($id){
        $delete_category=Category::find($id);
        $delete_category->delete();
        return back();
    }

     //acitve categorys
     public function activecategory($id){
        $categorys=Category::find($id);
        $categorys->status=1;
        $categorys->update();

        notify()->success('category Status is Active','Active');
        return back();
    }
    //inactive categorys
    public function inactivecategory($id){

        $categorys=Category::find($id);
        $categorys->status=0;
        $categorys->update();

        notify()->error('category Status is Inactive','Inactive');
        return back();
    }

}
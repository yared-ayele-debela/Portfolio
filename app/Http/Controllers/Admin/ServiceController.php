<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function services(Request $request){
        $service=Service::all();
        
        if($request->isMethod('POST')){
            $this->validate($request, [
                'service_name'=>'required',
                'technology_used'=>'required',
                'service_description'=>'required',
                'price'=>'required',
                
            ]);
            $service =new service();
            $service->service_name=$request->input('service_name');
            $service->technology_used=$request->input('technology_used');
            $service->service_description=$request->input('service_description');
            $service->price=$request->input('price');
            $service->status=1;
            
            $service->save();
           return redirect('service/all');
        }

        return view('service.allservices',compact('service'));
    }

    
    public function create(){
        
        return view('service.addservice');
    }

    public function edit(Request $request ,$service_id){
        if($request->isMethod('PUT')){
            $this->validate($request, [
                'service_name'=>'required',
                'technology_used'=>'required',
                'service_description'=>'required',
                'price'=>'required',
                
            ]);
            $service =Service::find($service_id);
            
            $service->service_name=$request->input('service_name');
            $service->technology_used=$request->input('technology_used');
            $service->service_description=$request->input('service_description');
            $service->price=$request->input('price');
            $service->status=1;
            
            $service->update();
            notify()->success('Service is Updated','Updated');

           return redirect('service');
        }
        
        $service=Service::find($service_id);

        return view('service.editservice',compact('service'));
        
        
    }

    public function destory($id){
        $delete_service=Service::find($id);
        $delete_service->delete();

        notify()->error('Service is Deleted','Deleted');
        return back();
    }

     //acitve services
     public function activeservice($id){
        $services=Service::find($id);
        $services->status=1;
        $services->update();

        notify()->success('Service Status is Active','Active');
        return back();
    }
    //inactive services
    public function inactiveservice($id){

        $services=service::find($id);
        $services->status=0;
        $services->update();

        notify()->error('service Status is Inactive','Inactive');
        return back();
    }

    
}
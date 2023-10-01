@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Update Service</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Service </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Update Services</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('service') }}"><i class=" fas fa-plus"></i>All Services</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('allservice') }}">
                  @csrf
                  @method('PUT')
                    <div class="row mb-3">
                       <label for="service_name" class="col-sm-2 col-form-label">Service Name</label>
                       <div class="col-sm-10"> 
                        <input type="text" name="service_name" value="{{ $service->service_name }}" class="form-control">
                        @error('service_name')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                     </div>
                    </div>
                    <div class="row mb-3">
                       <label for="price" class="col-sm-2 col-form-label">Price</label>
                       <div class="col-sm-10"> 
                        <input type="number" value="{{ $service->price }}" name="price" class="form-control">
                        @error('price')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                     </div>
                    </div>
                     <div class="row mb-3">
                        <label for="technology_used" class="col-sm-2 col-form-label">Techology</label>
                        <div class="col-sm-10"> 
                         <input type="text" value="{{ $service->technology_used }}" name="technology_used" class="form-control">
                         @error('technology_used')
                         <small class=" text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                     <div class="row mb-3">
                        <label for="service_description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10 "> 
                        <textarea class="form-control" name="service_description" id="" cols="40" rows="10">{{ $service->service_description }}</textarea>
                        @error('service_description')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                      
                     </div>
                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-primary">Save Service</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection
@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Category</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Category </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Add Categories</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href=""><i class=" fas fa-plus"></i>All Categories</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('category') }}">
                  @csrf
                    <div class="row mb-3">
                       <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10"> 
                        <input type="text" name="name" class="form-control">
                        @error('name')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                     </div>
                    </div>
                    <div class="row mb-3">
                       <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                       <div class="col-sm-10"> 
                        <input type="text" name="slug" class="form-control">
                        @error('slug')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                     </div>
                        
                    </div>
                     <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10 "> 
                        <textarea class="form-control" name="description" id="" cols="40" rows="10"></textarea>
                        @error('description')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                      
                     </div>
                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-primary">Save Category</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection
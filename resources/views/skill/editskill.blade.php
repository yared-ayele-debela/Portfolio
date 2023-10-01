@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Update skill</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Skill </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Update Skills</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('skill') }}"><i class=" fas fa-plus"></i>All Skills</a>
                  </li>
                 </ul>
                 <form method="POST" action="">
                  @csrf
                  @method('PUT')
                  <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Skill Name</label>
                    <div class="col-sm-10"> 
                     <input type="text" name="name" value="{{ $skill->name }}" class="form-control">
                     @error('name')
                     <small class=" text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                 </div>
                 <div class="row mb-3">
                     <label for="description" class="col-sm-2 col-form-label">Description</label>
                     <div class="col-sm-10"> 
                         <textarea name="description" id="description" cols="20" class=" form-control" rows="5">
                            {{ $skill->description }}
                         </textarea>
                      @error('description')
                      <small class=" text-danger">{{ $message }}</small>
                      @enderror
                   </div>
                 </div>
                 <div class="row mb-3">
                    <label for="percentage" class="col-sm-2 col-form-label">Percentage</label>
                    <div class="col-sm-10"> 
                     <input type="number" name="percentage"  value="{{ $skill->percentage }}" class="form-control">
                     @error('percentage')
                     <small class=" text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                 </div>
                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-warning">Update Skill</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection
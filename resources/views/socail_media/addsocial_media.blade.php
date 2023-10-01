@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Socail_media</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Socail_media </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active"><i class="fa fa-list mr-2"></i>Add Socail_media</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('social_meda.index') }}"><i class=" fas fa-plus"></i>All socail_media</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('social_meda.store') }}" enctype="multipart/form-data">
                  @csrf
                     <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Socail_media Name</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="icon" class="col-sm-2 col-form-label">Socail_media Icon</label>
                        <div class="col-sm-10 ">
                            <input type="file" name="icon" class="form-control">
                            @error('icon')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="link" class="col-sm-2 col-form-label">Socail_media link</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="link" class="form-control">
                            @error('link')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>

                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection

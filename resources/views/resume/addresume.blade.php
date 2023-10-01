@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Resume Profile</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active"><i class="fa fa-list mr-2"></i>Add Resume profile</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('resumes.index') }}"><i class=" fas fa-plus"></i>Resume profile data</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('resumes.store') }}" enctype="multipart/form-data">
                  @csrf
                     <div class="row mb-3">
                        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="fullname" class="form-control">
                            @error('fullname')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 ">
                            <input type="email" name="email" class="form-control">
                            @error('email')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="cover_image" class="col-sm-2 col-form-label">Cover image</label>
                        <div class="col-sm-10 ">
                            <input type="file" name="cover_image" class="form-control">
                            @error('cover_image')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Profile image</label>
                        <div class="col-sm-10 ">
                            <input type="file" name="image" class="form-control">
                            @error('image')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="profession" class="col-sm-2 col-form-label">Resume Profession</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="profession" class="form-control">
                            @error('profession')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="mobile" class="col-sm-2 col-form-label">Resume mobile number</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="mobile" class="form-control">
                            @error('mobile')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="portfolio_link" class="col-sm-2 col-form-label">Resume portfolio_link</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="portfolio_link" class="form-control">
                            @error('portfolio_link')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="location" class="col-sm-2 col-form-label">Resume location</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="location" class="form-control">
                            @error('location')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="about_me" class="col-sm-2 col-form-label">about_me</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="about_me" class="form-control">
                            @error('about_me')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10 ">
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="summernote"></textarea>
                            </div>
                            @error('description')
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

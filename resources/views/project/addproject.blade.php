@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <h1>Project Registration Form</h1>
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Project</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Project Registartion Form </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Add Project</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ url('project/all') }}"><i class=" fas fa-plus"></i>All Projects</a>
                  </li>
                 </ul>
                        <form method="POST"  class="row" action="{{ route('save_project') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-lg-6">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label  for="cover_image" class="m-2">Cover image</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover_image">
                                @error('cover_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                            <div class="form-group">
                                  <label>Image</label>
                                  <input type="file" name="images[]" multiple  class="form-control border">
                                @error('images')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="start_date">Start Date:</label>
                                <input type="text" class="form-control" name="start_date" id="start_date">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="end_date">End Date:</label>
                                <input type="text" class="form-control" name="end_date" id="end_date">
                            </div>
                            <div class="form-group col-lg-6" >
                                <label for="description">Description:</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 mt-4">
                            <button type="submit" class=" full-width btn btn-primary">Save Project</button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
          </div>
       </section>
     @endsection

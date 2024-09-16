@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <h1>Projects</h1>
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Update Project</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Update Project</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ url('project/all') }}"><i class=" fas fa-plus"></i>All Projects</a>
                  </li>
                 </ul>
                        <form method="POST"  class="row" action="{{ route('update_project') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col">
                                    <input type="hidden" value="{{ $project->id }}" name="id">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" value="{{ $project->title }}" name="title" id="title">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" id="category">
                                          @foreach ($project_category as $cat)
                                          <option @if($project->category===$cat->name) selected @endif value="{{ $cat->name }}">{{ $cat->name }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label  for="cover_image" class="m-2">Cover image</label>
                                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover_image">
                                @error('cover_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <img src="{{ asset('/storage/projects/'.$project->cover_image) }}" class="img-responsive" style="max-height: 50px; max-width: 50px;" alt="" srcset="">
                                   <br>
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                            <div class="form-group">
                                  <label>Image</label>
                                  <input type="file" name="images[]" multiple  class="form-control border">
                                  <div class="d-flex">
                                  @if (count($image)>0)
                                  @foreach ($image as $img)
                                  <img src="{{ asset('/storage/projects/'.$img->images) }}" class="img-responsive" style="max-height: 50px; max-width: 50px;" alt="" srcset=""> &nbsp;
                                  @endforeach
                                  @endif
                                </div>
                                @error('images')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="start_date">Start Date:</label>
                                <input type="text" class="form-control" value="{{ $project->start_date }}" name="start_date" id="start_date">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="end_date">End Date:</label>
                                <input type="text" class="form-control" value="{{ $project->end_date }}" name="end_date" id="end_date">
                            </div>
                            <div class="form-group col-lg-12" >
                                <label for="description">Description:</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="summernote">
                                        {{ $project->description }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 mt-4">
                            <button type="submit" class=" full-width btn btn-primary">Update </button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
          </div>
       </section>
     @endsection

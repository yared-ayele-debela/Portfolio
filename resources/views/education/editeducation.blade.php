@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Education</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Education </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Add Education</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('education.index') }}"><i class=" fas fa-plus"></i>All Educations</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('education.update',$education->id) }}">
                  @csrf
                  @method('PUT')
                    <div class="row mb-3">
                       <label for="inputText" class="col-sm-2 col-form-label">University</label>
                       <div class="col-sm-10">
                        <input type="text" name="university" value="{{ $education->university }}" class="form-control">
                        @error('university')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                     </div>
                    </div>
                    <div class="row mb-3">
                       <label for="bachelor" class="col-sm-2 col-form-label">Bachelor</label>
                       <div class="col-sm-10">
                        <input type="text" name="bachelor" value="{{ $education->bachelor }}" class="form-control">
                        @error('bachelor')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                     </div>

                    </div>
                     <div class="row mb-3">
                        <label for="start_year" class="col-sm-2 col-form-label">Start Year</label>
                        <div class="col-sm-10 ">
                            <input type="year" name="start_year" value="{{ $education->start_year }}" class="form-control">
                            @error('start_year')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                     </div>
                     <div class="row mb-3">
                        <label for="end_year" class="col-sm-2 col-form-label">End Year</label>
                        <div class="col-sm-10 ">
                            <input type="year" name="end_year" value="{{ $education->end_year }}" class="form-control">
                            @error('end_year')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                     </div>
                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection

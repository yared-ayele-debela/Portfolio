@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Edit Working Expirence</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Working Expirence </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active"><i class="fa fa-list mr-2"></i>Edit Working Expirence</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('work_experience.index') }}"><i class=" fas fa-plus"></i>All Expirence</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('work_experience.update',$work_exp->id) }}">
                  @csrf
                  @method('PUT')
                     <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">title</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="title" value="{{ $work_exp->title }}" class="form-control">
                            @error('title')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10 ">
                            <div class="form-group">
                                <textarea class="form-control"  name="description" id="summernote">
                                    {{ $work_exp->description }}"
                                </textarea>
                            </div>
                            @error('description')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="start_date" class="col-sm-2 col-form-label">start_date</label>
                        <div class="col-sm-10 ">
                            <input type="date" value="{{ $work_exp->start_date }}" name="start_date" class="form-control">
                            @error('start_date')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="end_date" class="col-sm-2 col-form-label">end_date</label>
                        <div class="col-sm-10 ">
                            <input type="date" name="end_date" value="{{ $work_exp->end_date }}" class="form-control">
                            @error('end_date')
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

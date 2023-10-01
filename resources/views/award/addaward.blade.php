@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Award</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">Award </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active"><i class="fa fa-list mr-2"></i>Add Award</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('award.index') }}"><i class=" fas fa-plus"></i>All Awards</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('award.store') }}">
                  @csrf
                     <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">award</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label for="company" class="col-sm-2 col-form-label">Company</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="company" class="form-control">
                            @error('company')
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

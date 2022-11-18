@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <h1>User Registration Form</h1>
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add User</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-8">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title">User Registartion Form </h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Add User</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('allUsers') }}"><i class=" fas fa-plus"></i>All Users</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ route('storeuser') }}">
                  @csrf
                    <div class="row mb-3">
                       <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10"> 
                        <input type="text" name="name" class="form-control"></div>
                    </div>
                    <div class="row mb-3">
                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10"> 
                        <input type="email" name="email" class="form-control"></div>
                    </div>
                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label">Gender</label>
                     <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="gender">
                           <option class="selected">--Select--</option>
                           <option >Male</option>
                           <option >Female</option>
                           <option >Other</option>
                        </select>
                     </div>
                    </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">User Type</label>
                        <div class="col-sm-10">
                           <select class="form-select" aria-label="Default select example" name="usertype">
                              <option selected="">--Select--</option>
                              <option >Admin</option>
                              <option >Super Admin</option>
                              <option >User</option>
                           </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10"> 
                         <input type="password" name="password" class="form-control">
                        </div>
                     </div>
                    <div class="row mb-3">
                     <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-primary">Save User</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection
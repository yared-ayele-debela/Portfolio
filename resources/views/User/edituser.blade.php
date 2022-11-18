@extends('admin_layouts.maindashboard')
@section('dashboard')
  <div class="pagetitle">
     <h1>User Update Form</h1>
     <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Update User</li>
        </ol>
     </nav>
  </div>
  <section class="section">
           <div class="card">
              <div class="card-body ">
                 <h5 class="card-title">User Update Form </h5>
                 <ul class="nav nav-tabs align-items-end pb-3 card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href"><i class="fa fa-list mr-2"></i>Edit Users</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light" href="{{ route('allUsers') }}"><i class=" fas fa-plus"></i>All User</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ url('user/'.$users->id) }}"  class="row g-3 ">
                  @csrf
                  @method('PUT')
                  <div class="col-md-6 ">
                     <label for="fullname" class="form-label">Full Name</label>
                      <input type="text" name="fullname" class="form-control" value="{{$users->fullname}}"></div>
                    <div class="col-md-6">
                       <label for="inputText" class="form-label ">Name</label>

                        <input type="text" name="name" value="{{ $users->name }}" class="form-control"></div>

                          
                     <div class="col-md-12 ">
                        <label for="address" class="form-label">Address</label>
                     
                        <input type="text" name="address" class="form-control" value="{{ $users->address }}"></div>
                     
                     <div class="col-md-6 ">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" name="company" class="form-control" value="{{ $users->company }}"></div>
                     <div class="col-md-6 ">
                        <label for="job" class="form-label">Job</label>
                        <input type="text" name="job" class="form-control" value="{{ $users->job }}"></div>
                     <div class="col-md-6 ">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" name="phone" class="form-control" value="{{ $users->phone }}"></div>
                    <div class="col-md-6 ">
                       <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $users->email }}"" class="form-control"></div>
                    <div class="col-md-4">
                     <label class="form-label">Gender</label>

                        <select class="form-select" aria-label="Default select example" name="gender">
                           @if($users->gender=="Male")
                           <option class=" selected" value="{{ $users->id }}">{{ $users->gender }}</option>
                           <option value="Female">Female</option>
                           <option value="Other">Other</option>
                           @elseif ($users->gender=="Female")
                           <option class=" selected" value="{{ $users->id }}">{{ $users->gender }}</option>
                           <option value="Male">Male</option>
                           <option value="Other">Other</option>
                           @elseif ($users->gender=="Other")
                           <option class=" selected" value="{{ $users->id }}">{{ $users->gender }}</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           @else
                              <option value="" selected disabled>--Select--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                           @endif
                        </select>
                     </div>
                     <div class="col-md-2">
                        <label class="form-label">User Type</label>
                
                           <select class="form-select"  name="usertype">
                              @if($users->usertype=="Admin")
                              <option class=" selected" value="{{ $users->id }}">{{ $users->usertype }}</option>
                              <option value="Super Admin">Super Admin</option>
                              <option value="User">User</option>
                              @elseif ($users->usertype=="Super Admin")
                              <option class=" selected" value="{{ $users->id }}">{{ $users->usertype }}</option>
                              <option value="Admin">Admin</option>
                              <option value="User">User</option>
                              @elseif ($users->usertype=="User")
                              <option class=" selected" value="{{ $users->id }}">{{ $users->usertype }}</option>
                              <option value="Admin">Admin</option>
                              <option value="Super Admin">Super Admin</option>
                              @else
                              <option value="" selected disabled>--User Type--</option>
                              <option value="Admin">Admin</option>
                              <option value="Super Admin">Super Admin</option>
                              <option value="User">User</option>
                              @endif
                           </select>
           
                      </div>                      
                    <div class="row mb-3">
                     <label class="form-label"></label>
                        <div class="col-sm-10 ">
                         <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </div>
                 </form>
              </div>
           </div>
  </section>
@endsection